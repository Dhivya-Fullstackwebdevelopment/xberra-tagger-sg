<?php
error_reporting(0);
// error_reporting(E_ALL); 
// ini_set('display_errors', 1);
/* SG DB START */
if (!defined('SG_REGION')) {
	define('SG_REGION', 'SG');
	define('DB_SERVER_SG', '54.254.14.255');
	define('DB_USERNAME_SG', 'xbuser');
	define('DB_PASSWORD_SG', 'Xberra@4%6');
	define('DB_DATABASE_SG', 'xb_sg');
}
$sg_con = mysqli_connect(DB_SERVER_SG,DB_USERNAME_SG,DB_PASSWORD_SG,DB_DATABASE_SG);
/* SG DB END */

?>


<?php

$dbhost = '54.254.14.255';
 $dbuser = 'xbuser';
 $dbpass = 'Xberra@4%6';
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
 $dbcon = mysqli_select_db($conn,"xb_sg");
 if(! $conn ) {
	die('Could not connect: ' . mysqli_error());
 }
if(! $dbcon)
{
	die('Could not connect: ' . mysqli_error());
}
?>