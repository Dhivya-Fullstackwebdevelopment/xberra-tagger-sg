<?php	
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// require_once "/homepages/31/d743622375/htdocs/fintags.in/PHPMailer/src/PHPMailer.php";
// require_once "/homepages/31/d743622375/htdocs/fintags.in/PHPMailer/src/Exception.php";
// require_once "/homepages/31/d743622375/htdocs/fintags.in/PHPMailer/src/OAuth.php";
// require_once "/homepages/31/d743622375/htdocs/fintags.in/PHPMailer/src/SMTP.php";

require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/Exception.php";
require_once "PHPMailer/src/OAuth.php";
require_once "PHPMailer/src/SMTP.php";

class MailConfig{
	public $subjectFirstHalf = "Xberra Tagger [SG]";
	public $infoEmail = "info@xberratagger.com.sg";
	public $cutomerCare = "customercare@xberratagger.com.sg";
	public $enquiryEmail = "info@xberratagger.com.sg";
	public $site = "https://app.xberratagger.com.sg";
	public $bccEmail = "info@xberratagger.com.sg";
	
	/* SMTP Details */
	public $smtpHost = 'email-smtp.ap-southeast-1.amazonaws.com';
	public $smtpPort = '587';
	public $smtpUser = 'AKIAQDXL4VYEWGR56RPC';
	public $smtpPwd = 'BHqiAjZTxYfIwtqGzLoiNBrFBradVCB2i7H+JbNctC8k';	
	/* ENd SMTP*/
	
	// function __construct(){
	// 	$this->smail = new PHPMailer(true);
	// 	$this->img_logo = "https://app.xberratagger.com.sg/assets-new/img/logo.png";
	// }
	public function __construct($commonObj = null)
    {
        // if ($commonObj instanceof CommonClass) {
        //     $this->commonObj = $commonObj;
        // } else {
        // 	require_once __DIR__ . '/common.class.php';    
        //     $this->commonObj = new CommonClass(); // fallback safety
        // }

		$this->smail = new PHPMailer(true);
		$this->img_logo = "https://app.xberratagger.com.sg/assets-new/img/logo.png";
    }
	
	function SendMail($to,$subject,$body,$from,$bCC="",$extbCC="",$isHiddenEmail=false){
		try {	
			$mail = new PHPMailer(true);
			$mail->IsSMTP();  // telling the class to use SMTP
			// $mail->SMTPDebug = 2;
			$mail->Mailer = "smtp";
			$mail->Host = $this->smtpHost;
			$mail->Port = $this->smtpPort;
			$mail->SMTPAuth = true; // turn on SMTP authentication
			$mail->SMTPSecure = true;
			$mail->SMTPAutoTLS = true;

			$mail->Username = $this->smtpUser; // SMTP username
			$mail->Password = $this->smtpPwd; // SMTP password
			//$Mail->Priority = 1;
			$mail->AddAddress($to);
			$mail->SetFrom($from, "Xberra Tagger");
			if(!empty($bCC)){
				$mail->AddBcc($bCC);				
			}
			if($isHiddenEmail == true){
				$mail->AddAddress($bCC);
			}
			else{
				if (isset($_SESSION["AlternateEmail"]) && !empty($_SESSION["AlternateEmail"])) {
					
					$emails = explode(',', $_SESSION["AlternateEmail"]);
					
					foreach ($emails as $email) {
						$email = trim($email);
						if (!empty($email)) {
							$mail->AddCC($email);
						}
					}
				}
			}
			if (!empty($extbCC)) {
				$mail->AddBcc($extbCC);                        
			}
			$mail->Subject  = $subject;
			$mail->Body     = $body;
			$mail->WordWrap = 50;
			$mail->IsHTML(true);
			if(!$mail->Send()) {
				return false;
				// echo 'Message was not sent.';
				// echo 'Mailer error: ' . $mail->ErrorInfo;
			} else {
				return true;
				//echo 'Message has been sent.';
			}
		} catch (Exception $e) {
			return false;
			//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}
	

	function sendCrossRegionLoginAlert($user_region, $app_region, $ip, $url ,$useremail,$approval_token) 
	{

    $subject = $this->subjectFirstHalf . ' : Cross Region Login Alert Approval';

    $to = 'arunraj@xberratagger.com';

    $headers  = "From: Xberra Tagger <".$this->enquiryEmail.">\r\n"; 
    // $headers .= "Bcc:  santhosh@xberratagger.com\r\n";
	// $headers .= "Cc:   arunraj@xberratagger.com \r\n";
    $headers .= "Reply-To: <no-reply> \r\n";				
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$approveUrl = $url . "/create_approve_ip.php?action=approve&token=" . $approval_token;
	$rejectUrl  = $url . "/create_approve_ip.php?action=reject&token=" . $approval_token;

	$message = '<html>
    <body>
        <div style="width:700px;margin:0 auto;padding:15px;border:1px solid #dedede;font-family:Arial,Helvetica,sans-serif;">
            
            <div style="width:175px;">
                <img src="'.$this->img_logo.'" alt="XberraTagger" width="175" height="59" style="width:175px;height:59px;" />
            </div>

            <h3 style="color:#c0392b;">Cross Region Login Detected</h3>

            <p>A user has accessed the <strong>'.$app_region.' application</strong> from a <strong>different geographic region</strong>.</p>

            <table rules="all" style="border-color:#666;border:1px solid #ccc;width:100%;" cellpadding="10">
                <tr style="background:#f2f2f2;">
                    <td><strong>Application Region</strong></td>
                    <td>'.$app_region.'</td>
                </tr>
                <tr>
                    <td><strong>User Detected Region</strong></td>
                    <td>'.$user_region.'</td>
                </tr>
                <tr style="background:#f2f2f2;">
                    <td><strong>User IP Address</strong></td>
                    <td>'.$ip.'</td>
                </tr>


				<tr style="background:#f2f2f2;">
                    <td><strong>User Email </strong></td>
                    <td>'.$useremail.'</td>
                </tr>

				<tr style="background:#f2f2f2;">
                    <td><strong>Date & Time</strong></td>
                    <td>'.date('Y-m-d H:i:s').'</td>
                </tr>
            </table>

            <p style="margin-top:15px;">
                This is an automated security alert. If this access is not expected, please verify the login activity.
            </p>

            <p style="color:#777;font-size:12px;">
                System Auto Notification Xberra Tagger Security
            </p>


        </div>
    </body>
    </html>';

   if ($this->SendMail($to , $subject, $message, $this->enquiryEmail, "vinoth@psdigitise.com"))
	{	
	#echo "email_success";
	#exit;
		}
		else
		{
			#echo "error";
			#exit;
		}


	
	}





	function sendCrossRegionLoginaproval($user_region, $app_region, $ip, $url) 
	{

    $subject = $this->subjectFirstHalf . ' : Cross Region Login Alert';

    $to = 'arunraj@xberratagger.com';

    $headers  = "From: Xberra Tagger <".$this->enquiryEmail.">\r\n"; 
    // $headers .= "Bcc:  santhosh@xberratagger.com\r\n";
	// $headers .= "Cc:   arunraj@xberratagger.com \r\n";
    $headers .= "Reply-To: <no-reply> \r\n";				
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$message = '<html>
    <body>
        <div style="width:700px;margin:0 auto;padding:15px;border:1px solid #dedede;font-family:Arial,Helvetica,sans-serif;">
            
            <div style="width:175px;">
                <img src="'.$this->img_logo.'" alt="XberraTagger" width="175" height="59" style="width:175px;height:59px;" />
            </div>

            <h3 style="color:#c0392b;">Cross Region Login Detected</h3>

            <p>A user has accessed the <strong>'.$app_region.' application</strong> from a <strong>different geographic region</strong>.</p>

            <table rules="all" style="border-color:#666;border:1px solid #ccc;width:100%;" cellpadding="10">
                <tr style="background:#f2f2f2;">
                    <td><strong>Application Region</strong></td>
                    <td>'.$app_region.'</td>
                </tr>
                <tr>
                    <td><strong>User Detected Region</strong></td>
                    <td>'.$user_region.'</td>
                </tr>
                <tr style="background:#f2f2f2;">
                    <td><strong>User IP Address</strong></td>
                    <td>'.$ip.'</td>
                </tr>

				<tr style="background:#f2f2f2;">
                    <td><strong>Request From </strong></td>
                    <td>Xberratagger website</td>
                </tr>


				<tr style="background:#f2f2f2;">
                    <td><strong>Date & Time</strong></td>
                    <td>'.date('Y-m-d H:i:s').'</td>
                </tr>
            </table>

            <p style="margin-top:15px;">
                This is an automated security alert. If this access is not expected, please verify the login activity.
            </p>

            <p style="color:#777;font-size:12px;">
                System Auto Notification Xberra Tagger Security123
            </p>

        </div>	
    </body>
    </html>';

   if ($this->SendMail($to , $subject, $message, $this->enquiryEmail, "santhosh.wilson@Xberratagger.com"))
	{
	// echo "email_success";
	// exit;
		}
		else
		{
			// echo "error";
			// exit;
		}


	
	}



	function sendCrossRegionApprovalmailtoUser($user_region, $app_region, $ip, $url, $useremail)
	{
		$subject = $this->subjectFirstHalf . ' : Your IP Address Has Been Approved';

		$to = $useremail;

		$headers  = "From: Xberra Tagger <".$this->enquiryEmail.">\r\n";
		$headers .= "Reply-To: <no-reply@xberratagger.com>\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

		$message = '
		<html>
		<body>
			<div style="width:700px;margin:0 auto;padding:20px;border:1px solid #dedede;font-family:Arial,Helvetica,sans-serif;">
				
				<div style="width:175px;margin-bottom:20px;">
					<img src="'.$this->img_logo.'" alt="XberraTagger" width="175" height="59" />
				</div>

				<h3 style="color:#2e7d32;">IP Address Approved ✅</h3>

				<p>Your request to whitelist the following IP address has been <strong>approved</strong>.</p>

				<table style="border-collapse:collapse;border:1px solid #ccc;width:100%;" cellpadding="10">
					<tr style="background:#f2f2f2;">
						<td><strong>Application Region</strong></td>
						<td>SG</td>
					</tr>
					
					<tr style="background:#f2f2f2;">
						<td><strong>Approved IP Address</strong></td>
						<td><strong>'.$ip.'</strong></td>
					</tr>
					<tr>
						<td><strong>Application URL</strong></td>
						<td>'.$url.'</td>
					</tr>
					<tr style="background:#f2f2f2;">
						<td><strong>Date & Time</strong></td>
						<td>'.date('Y-m-d H:i:s').'</td>
					</tr>
				</table>

				<p style="margin-top:20px;">
					You may now access the application without restrictions.
				</p>

				<p style="font-size:12px;color:#777;">
					This is an automated notification from Xberra Tagger Security System.
				</p>
			</div>
		</body>
		</html>';

		$this->SendMail($to, $subject, $message, $this->enquiryEmail, "");
	}




}
?>