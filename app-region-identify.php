<?php


session_start();

include("common/connect.php");
include("common/mail-config.php");

$mailObj = new MailConfig();

/* ============================================================
   APPLICATION REGION
============================================================ */
$app_region = "SG";


/* ============================================================
   GET USER IP
============================================================ */
function getVisitorIP() {

    if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
        return $_SERVER['HTTP_CF_CONNECTING_IP'];
    }

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return trim(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0]);
    }

    return $_SERVER['REMOTE_ADDR'] ?? '';
}

$visitorIP = getVisitorIP();


/* ============================================================
   GET REGION FROM IP
============================================================ */
function detectRegionFromIP($ip) {

    $api = "http://ip-api.com/json/".$ip."?fields=status,countryCode,proxy,hosting";

    $response = @file_get_contents($api);

    if (!$response) {
        return ['status'=>'fail'];
    }

    return json_decode($response, true);
}

$ipData = detectRegionFromIP($visitorIP);


/* ============================================================
   SESSION STORE
============================================================ */
$_SESSION['user_ip'] = $visitorIP;
$_SESSION['app_region'] = $app_region;

if (!empty($ipData['countryCode'])) {
    $_SESSION['user_region'] = $ipData['countryCode'];
} else {
    $_SESSION['user_region'] = "UNKNOWN";
}


/* ============================================================
   GET WHITELISTED IPS FROM DATABASE
============================================================ */

$ALLOWED_IPS = [];

$sql = "SELECT ip_address FROM pl_allowed_ips WHERE status = 1";
$result = mysqli_query($conn,$sql);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        $ALLOWED_IPS[] = $row['ip_address'];
    }
}


/* ============================================================
   COUNTRY & IP RULES
============================================================ */

$ALLOWED_COUNTRIES = ['SG','MY'];


/* ============================================================
   CHECK IP WHITELIST
============================================================ */

$isPrefixAllowed = false;

$visitorPrefix = implode('.', array_slice(explode('.', $visitorIP),0,3));

foreach ($ALLOWED_IPS as $allowedIP){

    $allowedPrefix = implode('.', array_slice(explode('.', $allowedIP),0,3));

    if($visitorPrefix === $allowedPrefix){
        $isPrefixAllowed = true;
        break;
    }
}

$isWhitelistedIP = in_array($visitorIP,$ALLOWED_IPS,true) || $isPrefixAllowed;
print_r($isWhitelistedIP);

/* ============================================================
   COUNTRY CHECK
============================================================ */

$isAllowedCountry = false;

if(!empty($ipData['countryCode'])){
    
    // echo $ipData['countryCode'];

    $isAllowedCountry = in_array($ipData['countryCode'],$ALLOWED_COUNTRIES,true);
}


/* ============================================================
   EMAIL TRIGGER LOGIC
============================================================ */

if(!$isAllowedCountry && !$isWhitelistedIP){


    #echo '234dfsdfdfd';

    // Send email only once per session
    if(empty($_SESSION['cross_region_mail_sent'])){

        $_SESSION['cross_region_mail_sent'] = true;

        $mailObj->sendCrossRegionLoginaproval(
            $_SESSION['user_region'],
            $_SESSION['app_region'],
            $visitorIP,
            "https://".$_SERVER['HTTP_HOST']
        );
    }
}


/* ============================================================
   NO BLOCKING
   ALL USERS CAN ACCESS THE SITE
============================================================ */

?>