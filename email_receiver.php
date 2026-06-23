<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

require __DIR__ . '/PHPMailer-master/src/Exception.php';
require __DIR__ . '/PHPMailer-master/src/PHPMailer.php';
require __DIR__ . '/PHPMailer-master/src/SMTP.php';

$firstName = trim($_POST['firstName'] ?? '');
$lastName = trim($_POST['lastName'] ?? '');
$email     = trim($_POST['email'] ?? '');

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

    /* =========================
       SENDER (Your Company)
    ========================= */
    $mail->setFrom('info@xberratagger.com.sg', 'Xberra Tagger');

    /* =========================
       RECEIVER (User who submitted form)
    ========================= */
    $mail->addAddress($email, $firstName . ' ' . $lastName);
    
    // BCC to your team for tracking
    $mail->addBCC('leads@xberratagger.com');
    // $mail->addBCC('sarjun@psdigitise.com');
    $mail->addBCC('vinoth@psdigitise.com');

    $mail->isHTML(true);
    $mail->Subject = 'Thank You for Contacting Xberra Tagger';

    $mail->Body = '
    <table width="600" align="center" style="font-family:Arial, sans-serif;padding:20px;background:#ffffff;">
        <tr>
            <td align="center" style="padding-bottom:20px;">
                <img src="https://www.xberratagger.com.sg/assets/img/home-page/xberra-Logo.png" width="200" style="max-width:100%;">
            </td>
        </tr>
        <tr>
            <td>
                <h2 style="color:#333;">Hello ' . htmlspecialchars($firstName) . ' ' . htmlspecialchars($lastName) . ',</h2>
                
                <p style="font-size:16px;line-height:1.5;color:#555;">Thank you for contacting us regarding <strong>ACRA XBRL filing</strong>.</p>
                
                <p style="font-size:16px;line-height:1.5;color:#555;">We have received your enquiry and our compliance team will get back to you within <strong>24-48 hours</strong>.</p>
                
                <div style="background:#f5f5f5;padding:15px;border-left:4px solid #e5252a;margin:20px 0;">
                    <p style="margin:0;color:#333;"><strong>Your Enquiry Summary:</strong></p>
                    <p style="margin:10px 0 0 0;color:#666;">We will respond to you regarding ACRA XBRL filing services at your earliest convenience.</p>
                </div>
                
                <p style="font-size:16px;line-height:1.5;color:#555;">In the meantime, feel free to visit our website for more information about our services.</p>
                
                <br>
                <p style="font-size:16px;color:#333;">Best regards,<br>
                <strong>Xberra Tagger Team</strong><br>
                <span style="color:#666;font-size:14px;">ACRA XBRL Filing Specialists</span></p>
                
                <hr style="border:1px solid #eee;margin:20px 0;">
                
                <p style="font-size:12px;color:#999;text-align:center;">
                    Xberra Tagger | ACRA XBRL Filing Solutions<br>
                    This is an automated response. Please do not reply to this email.
                </p>
            </td>
        </tr>
    </table>';

    // Plain text version
    $mail->AltBody = "Hello $firstName $lastName,\n\n" .
                     "Thank you for contacting us regarding ACRA XBRL filing in.\n\n" .
                     "We have received your enquiry and our compliance team will get back to you within 24-48 hours.\n\n" .
                     "Best regards,\n" .
                     "Xberra Tagger Team";

    $mail->send();

    echo json_encode([
        'status' => 'success'
    ]);
    
} catch (Exception $e) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Failed to send auto-reply email.'
    ]);
}
?>