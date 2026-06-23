<?php

$page_title = "Privacy policy XBRL in Singapore | ACRA Filing Requirements";

$page_meta = "";

$page_keywords = "";

$canonical_url = "https://xberratagger.com.sg/privacy-policy";



include 'header.php'; ?>

<?php
$privacy_sections = [

[
"title" => "Introduction",
"text" => "Xberra Tagger (“we,” “our,” “us”) values your privacy. This Privacy Policy explains how we collect, use, disclose, and protect your personal information when you use our website and services, including XBRL conversion and ACRA BizFile filing."
],

[
"title" => "Information We Collect",
"list" => [
"Personal Information: Name, email address, phone number, company details, billing information.",
"Business Data: Financial statements uploaded in Word, Excel, or PDF format for conversion.",
"Technical Data: IP address, browser type, device information, and cookies.",
"Communication Data: Records of emails, calls, or messages exchanged with our support team."
]
],

[
"title" => "How We Use Your Information",
"list" => [
"Provide XBRL conversion and ACRA filing services.",
"Communicate with you regarding quotes, orders, and support.",
"Ensure compliance with ACRA requirements.",
"Improve our website, services, and customer experience.",
"Process payments and manage billing.",
"Meet legal and regulatory obligations."
]
],

[
"title" => "Sharing of Information",
"list" => [
"Regulatory Authorities (ACRA): For filing purposes.",
"Service Providers: IT support, payment processors, and hosting partners.",
"Legal Compliance: When required by law or to protect our rights."
]
],

[
"title" => "Data Security",
"text" => "We implement industry-standard measures to protect your data, including encryption, secure servers, and restricted access. However, no method of transmission over the internet is 100% secure."
],

[
"title" => "Cookies & Tracking",
"text" => "Our website uses cookies to enhance user experience, analyze traffic, and remember preferences. You may disable cookies in your browser settings, but some features may not function properly."
],

[
"title" => "Data Retention",
"text" => "We retain personal and business data only as long as necessary to fulfill service obligations or comply with legal requirements. Uploaded financial statements are securely stored and deleted after filing completion unless otherwise requested."
],

[
"title" => "Your Rights",
"list" => [
"Access, correct, or delete your personal data.",
"Withdraw consent for data processing.",
"Request a copy of your data.",
"File a complaint with Singapore’s Personal Data Protection Commission (PDPC)."
]
],

[
"title" => "International Transfers",
"text" => "As we serve clients across multiple countries, your data may be transferred outside Singapore. We ensure adequate safeguards are in place."
],

[
"title" => "Updates to This Policy",
"text" => "We may update this Privacy Policy from time to time. Changes will be posted on our website with a revised effective date."
],

[
"title" => "Contact Us",
"list" => [
"Email: hello@xberratagger.com.sg",
"Phone: +65 6027 2438",
"Address: Xberra Tagger Pte. Ltd., 10 Anson Road, #33-10C International Plaza, Singapore."
]
]

];
?>

<style>

/* HERO */

.privacy-hero{
background:#1F2853;
padding:120px 0 70px;
color:white;
}

.privacy-title{
font-size:44px;
font-weight:700;
margin-bottom:10px;
}

.privacy-sub{
opacity:.8;
font-size:15px;
}

/* BREADCRUMB */

.breadcrumb-custom{
display:flex;
align-items:center;
gap:10px;
font-size:14px;
margin-bottom:15px;
list-style:none;
padding:0;
}

.breadcrumb-custom li{
color:rgba(255,255,255,.7);
}

.breadcrumb-custom li a{
color:rgba(255,255,255,.7);
text-decoration:none;
}

.breadcrumb-custom li::after{
content:"•";
margin-left:10px;
color:rgba(255,255,255,.5);
}

.breadcrumb-custom li:last-child::after{
display:none;
}

.breadcrumb-custom span{
color:white;
}

/* CONTENT */

.policy-container{
max-width:900px;
margin:auto;
}

.policy-box{
background:white;
padding:45px;
border-radius:14px;
box-shadow:0 10px 30px rgba(0,0,0,.06);
}

/* MAIN TITLE */

.policy-main-title{
font-size:32px;
font-weight:700;
color:#1F2853;
text-align:center;
margin-bottom:35px;
border-bottom:1px solid #e5e7eb;
padding-bottom:15px;
}

/* SECTIONS */

.policy-section{
margin-bottom:32px;
}

.policy-section:last-child{
margin-bottom:0;
}

.policy-section h3{
font-size:20px;
font-weight:700;
margin-bottom:12px;
color:#1F2853;
}

.policy-section p{
color:#4b5563;
line-height:1.7;
font-size:15px;
}

.policy-section ul{
padding-left:20px;
}

.policy-section ul li{
margin-bottom:8px;
color:#4b5563;
font-size:15px;
line-height:1.6;
}

/* RESPONSIVE */

@media (max-width:991px){

.privacy-title{
font-size:34px;
}

.policy-box{
padding:35px;
}

}

@media (max-width:768px){

.privacy-hero{
padding:100px 0 50px;
}

.privacy-title{
font-size:28px;
}

.policy-main-title{
font-size:24px;
margin-bottom:25px;
}

.policy-box{
padding:28px;
}

.policy-section h3{
font-size:18px;
}

.policy-section p,
.policy-section li{
font-size:14px;
}

}

@media (max-width:480px){

.privacy-title{
font-size:24px;
}

.policy-box{
padding:22px;
}

}

</style>


<div class="py-lg-4 py-5"></div>


<!-- HERO -->

<section class="privacy-hero">

<div class="container">

<ul class="breadcrumb-custom">
<li><a href="./">Home</a></li>
<li><span>Privacy Policy</span></li>
</ul>

<h1 class="privacy-title">Privacy Policy</h1>

<p class="privacy-sub">
Effective Date: March 11, 2026
</p>

</div>

</section>


<!-- CONTENT -->

<section class="py-5 bg-light">

<div class="container">

<div class="policy-container">

<div class="policy-box">

<h2 class="policy-main-title">Website Privacy Notice</h2>

<?php $count = 1; ?>
<?php foreach($privacy_sections as $section): ?>

<div class="policy-section">

<h3><?php echo $count . ". " . $section['title']; ?></h3>

<?php if(isset($section['text'])): ?>
<p><?php echo $section['text']; ?></p>
<?php endif; ?>

<?php if(isset($section['list'])): ?>
<ul>
<?php foreach($section['list'] as $item): ?>
<li><?php echo $item; ?></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>

</div>

<?php $count++; ?>
<?php endforeach; ?>

</div>

</div>

</div>

</section>


<?php include 'footer.php'; ?>