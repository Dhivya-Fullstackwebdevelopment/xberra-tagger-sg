<?php

$page_title = "Terms and Conditions XBRL in Singapore | ACRA Filing Requirements";

$page_meta = "";

$page_keywords = "";

$canonical_url = "https://xberratagger.com.sg/terms-and-condition";



include 'header.php'; ?>

<?php
$terms_sections = [

[
"title" => "Acceptance of Terms",
"text" => "By accessing or using our website and services, you agree to be bound by these Terms & Conditions. If you do not agree, please discontinue use immediately."
],

[
"title" => "Services Provided",
"text" => "Xberra Tagger offers XBRL conversion and ACRA BizFile filing services. We reserve the right to modify, suspend, or discontinue services at any time without prior notice."
],

[
"title" => "User Responsibilities",
"list" => [
"Provide accurate and complete information for conversion and filing.",
"Ensure uploaded documents are lawful and free of malicious code.",
"Maintain confidentiality of login credentials (if applicable).",
"Comply with all applicable laws and regulations in Singapore and your jurisdiction."
]
],

[
"title" => "Intellectual Property",
"list" => [
"All content, software, and materials on this website are owned by Xberra Tagger or licensed to us.",
"You may not copy, distribute, or modify our content without prior written consent.",
"Uploaded financial statements remain your property; we only process them for service delivery."
]
],

[
"title" => "Payment & Billing",
"list" => [
"Fees are payable as stated on our website or agreed upon in writing.",
"Payments must be made before service delivery unless otherwise arranged.",
"We reserve the right to suspend services for non-payment."
]
],

[
"title" => "Limitation of Liability",
"list" => [
"Xberra Tagger is not liable for indirect, incidental, or consequential damages arising from the use of our services.",
"We are not responsible for errors in filings caused by inaccurate information provided by clients.",
"Our maximum liability is limited to the amount paid for the specific service."
]
],

[
"title" => "Confidentiality",
"text" => "We treat uploaded documents and client information as confidential. However, we may disclose information if required by law or regulatory authorities."
],

[
"title" => "Termination",
"text" => "We may terminate or suspend your access to services at our discretion, without prior notice, for violation of these Terms."
],

[
"title" => "Governing Law",
"text" => "These Terms are governed by the laws of Singapore. Any disputes shall be resolved in the courts of Singapore."
],

[
"title" => "Changes to Terms",
"text" => "We may update these Terms and Conditions from time to time. Continued use of our services after changes indicates acceptance of the revised terms."
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

/* ===============================
THEME VARIABLES
================================ */

:root{
--primary-red:#dc2626;
--dark-navy:#1F2853;
--light-bg:#f8fafc;
--border-color:#e2e8f0;
--muted:#4b5563;
}

/* ===============================
TYPOGRAPHY
================================ */

html{
font-size:16px;
}

@media(max-width:768px){
html{font-size:14px;}
}

/* ===============================
BREADCRUMB
================================ */

.breadcrumb-custom{
margin-bottom:20px;
list-style:none;
padding:0;
display:flex;
flex-wrap:wrap;
}

.breadcrumb-custom li{
display:inline-flex;
align-items:center;
}

.breadcrumb-custom a{
color:rgba(255,255,255,.65);
text-decoration:none;
font-size:0.9rem;
}

.breadcrumb-custom li+li:before{
content:"›";
margin:0 8px;
color:rgba(255,255,255,.4);
}

.breadcrumb-custom span{
color:white;
font-size:0.9rem;
}

/* ===============================
HERO
================================ */

.terms-hero{
background:#1F2853;
padding:9rem 0 3rem;
}

@media(max-width:768px){
.terms-hero{
padding:6rem 0 2rem;
}
}

.terms-title{
font-size:clamp(2rem,5vw,3rem);
font-weight:700;
color:white;
line-height:1.2;
margin-bottom:10px;
}

.policy-date{
font-size:0.9rem;
color:rgba(255,255,255,.75);
line-height:1.7;
}

/* ===============================
CONTENT
================================ */

.policy-container{
max-width:900px;
margin:auto;
}

.policy-box{
background:white;
border-radius:28px;
padding:40px 38px;
border:1px solid var(--border-color);
box-shadow:0 10px 25px rgba(0,0,0,.03);
}

/* ===============================
MAIN TITLE
================================ */

.policy-main-title{
font-size:clamp(1.8rem,4vw,2.4rem);
font-weight:700;
color:#1F2853;
text-align:center;
margin-bottom:10px;
}

.terms-sub{
font-size:0.8rem;
text-align:center;
font-weight:600;
letter-spacing:.08em;
text-transform:uppercase;
color:var(--primary-red);
margin-bottom:30px;
}

/* ===============================
SECTIONS
================================ */

.policy-section{
margin-bottom:32px;
}

.policy-section:last-child{
margin-bottom:0;
}

.policy-section h3{
font-size:1.2rem;
font-weight:700;
color:#1F2853;
margin-bottom:10px;
}

.policy-section p{
font-size:0.95rem;
color:var(--muted);
line-height:1.7;
margin-bottom:12px;
}

/* ===============================
LIST
================================ */

.policy-section ul{
padding-left:20px;
}

.policy-section ul li{
font-size:0.92rem;
color:var(--muted);
margin-bottom:8px;
line-height:1.6;
}

/* ===============================
SECTION SPACING
================================ */

.section-space{
padding:5rem 0;
}

@media(max-width:768px){

.policy-box{
padding:28px 24px;
border-radius:20px;
}

.policy-section h3{
font-size:1.05rem;
}

.policy-section p,
.policy-section li{
font-size:0.9rem;
}

}

</style>

<div class="py-lg-4 py-3"></div>

<!-- HERO -->

<section class="terms-hero">

<div class="container">

<ul class="breadcrumb-custom">
<li><a href="./">Home</a></li>
<li><span>Terms & Conditions</span></li>
</ul>

<h1 class="terms-title">Terms Of Use</h1>

<div class="policy-date">
Effective Date: March 11, 2026<br>
<!-- Website: xberratagger.com.sg<br>
Company: Xberra Tagger Pte. Ltd. -->
</div>

</div>

</section>

<!-- CONTENT -->

<section class="section-space bg-light">

<div class="container">

<div class="policy-container">

<div class="policy-box">

<h2 class="policy-main-title">Terms & Conditions – Xberra Tagger</h2>

<div class="terms-sub">
TERMS AND CONDITIONS TO USE THIS WEBSITE
</div>

<?php $count = 1; ?>

<?php foreach($terms_sections as $section): ?>

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