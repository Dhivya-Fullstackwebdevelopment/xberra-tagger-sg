<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

require __DIR__ . '/PHPMailer-master/src/Exception.php';
require __DIR__ . '/PHPMailer-master/src/PHPMailer.php';
require __DIR__ . '/PHPMailer-master/src/SMTP.php';

// Get all form fields
$firstName = trim($_POST['firstName'] ?? '');
$lastName = trim($_POST['lastName'] ?? '');
$email     = trim($_POST['email'] ?? '');
$phone     = trim($_POST['phone'] ?? '');
$message   = trim($_POST['message'] ?? '');
$captcha   = trim($_POST['captcha'] ?? '');

// $firstName = "Vinoth";
// $lastName  = "Kumar";
// $email     = "vinoth@example.com";
// $phone     = "9876543210";
// $message   = "This is a test message from the contact form.";
// $captcha   = "12345";

// Validate required fields
if ($firstName === '' || $lastName === '' || $email === '' || $phone === '' || $message === '') {
    echo json_encode([
        'status' => 'error',
        'message' => 'All fields are required'
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

    /* =========================
       SENDER (Your Company)
    ========================= */
    $mail->setFrom('info@xberratagger.com.sg', 'Xberra Tagger');

    /* =========================
       RECEIVERS (Your Team)
    ========================= */

    // $mail->addAddress('leads@xberratagger.com');
    $mail->addAddress('leads@xberratagger.com');
    // $mail->addAddress('vinoth@psdigitise.com');
    $mail->addBCC('vinoth@psdigitise.com');

    // Optional: Add reply-to as the person who submitted the form
    $mail->addReplyTo($email, $firstName . ' ' . $lastName);

    $mail->isHTML(true);
    $mail->Subject = 'New ACRA XBRL Filing Enquiry from ' . $firstName . ' ' . $lastName;

    $mail->Body = '
    <table width="600" align="center" style="font-family:Arial, sans-serif;border:1px solid #eee;padding:20px;background:#f9f9f9;">
        <tr>
            <td align="center" style="padding-bottom:20px;">
                <img src="https://xberratagger.com.sg/assets/img/home-page/xberra-Logo.png" width="180" style="max-width:100%;">
            </td>
        </tr>
        <tr>
            <td>
                <h2 style="color:#333;border-bottom:2px solid #e5252a;padding-bottom:10px;">New Enquiry Received</h2>
                
                <table style="width:100%;border-collapse:collapse;">
                    <tr>
                        <td style="padding:10px 0;"><strong>First Name:</strong></td>
                        <td style="padding:10px 0;">' . htmlspecialchars($firstName) . '</td>
                    </tr>
                    <tr>
                        <td style="padding:10px 0;"><strong>Last Name:</strong></td>
                        <td style="padding:10px 0;">' . htmlspecialchars($lastName) . '</td>
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
                        <td style="padding:10px 0;"><strong>Message:</strong></td>
                        <td style="padding:10px 0;">' . nl2br(htmlspecialchars($message)) . '</td>
                    </tr>
                </table>
                
                <p style="margin-top:20px;padding-top:20px;border-top:1px solid #ddd;color:#666;font-size:12px;">
                    This enquiry was submitted on ' . date('Y-m-d H:i:s') . '
                </p>
            </td>
        </tr>
    </table>';

    // Plain text version for non-HTML email clients
    $mail->AltBody = "New Enquiry Received\n\n" .
        "First Name: $firstName\n" .
        "Last Name: $lastName\n" .
        "Email: $email\n" .
        "Phone: $phone\n" .
        "Message: $message\n";

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

    $fullName = trim($firstName . ' ' . $lastName);

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
        $message
    );

    $stmt->execute();

    $stmt->close();
    $conn->close();



    #Databse Connection code ends#
    echo json_encode([
        'status' => 'success',
        'message' => 'Enquiry sent successfully'
    ]);
} catch (Exception $e) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Failed to send email. Please try again.'
    ]);
}
