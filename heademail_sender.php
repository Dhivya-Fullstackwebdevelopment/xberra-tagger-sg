<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

require __DIR__ . '/PHPMailer-master/src/Exception.php';
require __DIR__ . '/PHPMailer-master/src/PHPMailer.php';
require __DIR__ . '/PHPMailer-master/src/SMTP.php';

// Get form values
$firstName = trim($_POST['firstName'] ?? '');
$email     = trim($_POST['email'] ?? '');
$phone     = trim($_POST['phone'] ?? '');
$service   = trim($_POST['service'] ?? '');

// Validate required fields
if ($firstName === '' || $email === '' || $phone === '') {
    echo json_encode([
        'status' => 'error',
        'message' => 'Required fields missing'
    ]);
    exit;
}

try {

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host       = 'email-smtp.ap-southeast-1.amazonaws.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'AKIAQDXL4VYEWGR56RPC';
    $mail->Password   = 'BHqiAjZTxYfIwtqGzLoiNBrFBradVCB2i7H+JbNctC8k';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // From
    $mail->setFrom('info@xberratagger.com.sg', 'Xberra Tagger');

    // Admin Emails
    $mail->addAddress('leads@xberratagger.com');
    $mail->addBCC('vinoth@psdigitise.com');

    // Reply to user
    $mail->addReplyTo($email, $firstName);
     $mail->addAddress($email, $firstName);
    $mail->isHTML(true);
    $mail->Subject = 'New Quote Request - Acra Xbrl';

    $mail->Body = '
<table width="600" align="center" style="font-family:Arial, sans-serif;border:1px solid #eee;padding:20px;background:#f9f9f9;">
    <tr>
        <td align="center" style="padding-bottom:20px;">
            <img src="https://xberratagger.com.sg/assets/img/home-page/xberra-Logo.png" width="180" style="max-width:100%;">
        </td>
    </tr>
    <tr>
        <td>
            <h2 style="color:#333;border-bottom:2px solid #e5252a;padding-bottom:10px;">
                New Quote Request Received
            </h2>
            
            <table style="width:100%;border-collapse:collapse;">
                <tr>
                    <td style="padding:10px 0;width:40%;"><strong>Name:</strong></td>
                    <td style="padding:10px 0;">' . htmlspecialchars($firstName) . '</td>
                </tr>
                <tr>
                    <td style="padding:10px 0;"><strong>Email:</strong></td>
                    <td style="padding:10px 0;">' . htmlspecialchars($email) . '</td>
                </tr>
                <tr>
                    <td style="padding:10px 0;"><strong>Phone:</strong></td>
                    <td style="padding:10px 0;">' . htmlspecialchars($phone) . '</td>
                </tr>
                <tr>
                    <td style="padding:10px 0;"><strong>Service Required:</strong></td>
                    <td style="padding:10px 0;">' . htmlspecialchars($service) . '</td>
                </tr>
            </table>
            
            <p style="margin-top:20px;padding-top:20px;border-top:1px solid #ddd;color:#666;font-size:12px;">
                This quote request was submitted on ' . date("Y-m-d H:i:s") . '
            </p>
        </td>
    </tr>
</table>';

    $mail->AltBody = "New Quote Request\n\n"
        . "Name: $firstName\n"
        . "Email: $email\n"
        . "Phone: $phone\n"
        . "Service: $service\n";

    $mail->send();


    #Databse Connection code starts#
    // Database Insert
    $conn = new mysqli(
        '54.254.14.255',
        'xbuser',
        'Xberra@4%6',
        'xb_sg'
    );

    if ($conn->connect_error) {
        throw new Exception("Database connection failed");
    }

    $fullName = trim($firstName);

    $stmt = $conn->prepare("
        INSERT INTO pl_contact_us
        (
            FullName,
            Email,
            PhoneORLocation,
            BusinessORComments,
            CreatedDate
        )
        VALUES
        (?, ?, ?, ?, NOW())
    ");

    $stmt->bind_param(
        "ssss",
        $fullName,
        $email,
        $phone,
        $service
    );

    $stmt->execute();

    $stmt->close();
    $conn->close();

    echo json_encode([
        'status' => 'success'
    ]);
} catch (Exception $e) {

    echo json_encode([
        'status' => 'error',
        'message' => 'Failed to send admin email'
    ]);
}
