<?php

$page_title = "Cookies Policy XBRL in Singapore | ACRA Filing Requirements";

$page_meta = "";

$page_keywords = "";

$canonical_url = "https://xberratagger.com.sg/cookies-policy";



include 'header.php'; ?>

<?php
$cookies_sections = [

[
"title" => "Types of Cookies Used",
"list" => [
"Essential Cookies – Required for core website functionality such as login sessions and secure navigation.",
"Performance Cookies – Collect anonymous data on site usage to improve speed, performance, and reliability.",
"Functional Cookies – Remember user preferences such as language, region, and display settings.",
"Analytics & Tracking Cookies – Used to measure traffic, track conversions, and optimize services."
]
],

[
"title" => "Purpose of Cookies",
"list" => [
"Enhance user experience by remembering settings and preferences.",
"Support compliance with ACRA filing requirements by ensuring secure document handling.",
"Provide insights into how visitors interact with the site to improve services and performance."
]
],

[
"title" => "User Control",
"list" => [
"Visitors can manage, block, or disable cookies through their browser settings.",
"Disabling cookies may affect access to certain features, especially secure login and document upload functionality."
]
],

[
"title" => "Policy Framework",
"text" => "This Cookies Policy forms part of Xberra Tagger’s broader legal framework, alongside our Privacy Policy and Terms of Use. It explains how and why cookies are used across our website and services."
],

[
"title" => "Summary of Cookie Usage",
"text" => "Cookies are used for security, performance optimization, personalization, and analytics. While they enhance functionality and user experience, users retain full control over cookie preferences through their browser settings."
],

[
"title" => "Effective Date & Compliance",
"text" => "All policies are effective from March 11, 2026. This Cookies Policy is designed to ensure transparency and compliance with Singapore’s Personal Data Protection Act (PDPA)."
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
<li><span>Cookies Policy</span></li>
</ul>

<h1 class="privacy-title">Cookies Policy</h1>

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

<h2 class="policy-main-title">Website Cookies Notice</h2>

<?php $count = 1; ?>
<?php foreach($cookies_sections as $section): ?>

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