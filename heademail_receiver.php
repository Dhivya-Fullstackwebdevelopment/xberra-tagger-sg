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
$service   = trim($_POST['service'] ?? '');

if ($firstName === '' || $email === '') {
    echo json_encode([
        'status' => 'error',
        'message' => 'Name and Email required'
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

    // From (Your company email)
    $mail->setFrom('info@xberratagger.com.sg', 'Xberra Tagger ');

    // Send to User
    $mail->addAddress($email, $firstName);
    // $mail->addAddress('sarjun@psdigitise.com');
    // $mail->addAddress('sivaprakasam@psdigitise.com');

    $mail->isHTML(true);
    $mail->Subject = 'Thank You for Your Quote Request - Xberra Tagger';

    $mail->Body = '
    <table width="600" align="center" style="font-family:Arial;padding:20px;">
    <tr>
            <td align="center" style="padding-bottom:20px;">
                <img src="https://www.xberratagger.com.sg/assets/img/home-page/xberra-Logo.png" width="200" style="max-width:100%;">
            </td>
        </tr>
        <tr>
            <td>
                <h2>Hello ' . htmlspecialchars($firstName) . ',</h2>
                
                <p>Thank you for contacting <strong>Xberra Tagger </strong>.</p>

                <p>We have received your enquiry regarding 
                <strong>' . htmlspecialchars($service ?: 'our services') . '</strong>.</p>

                <p>Our team will get back to you within <strong>24–48 hours</strong>.</p>

                <br>
                <p>Best Regards,<br>
                <strong>Xberra Tagger Team</strong></p>
            </td>
        </tr>
    </table>
    ';

    $mail->AltBody = "Hello $firstName,\n\n"
        . "Thank you for contacting Xberra Tagger.\n"
        . "We will respond within 24-48 hours.\n\n"
        . "Best Regards,\nXberra Tagger Team";

    $mail->send();

    echo json_encode([
        'status' => 'success'
    ]);
} catch (Exception $e) {

    echo json_encode([
        'status' => 'error',
        'message' => 'Failed to send auto reply'
    ]);
}
