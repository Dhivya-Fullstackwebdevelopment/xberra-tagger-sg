<?php

$page_title = "Contact Xberra Tagger | XBRL Filing & ACRA BizFile Support Singapore";
 
$page_meta = "Get in touch with Xberra Tagger for XBRL filing, ACRA BizFile submission, and compliance support in Singapore. Free consultation available. Response within 30 minutes.";
 
$page_keywords = "contact Xberra Tagger, XBRL filing support Singapore, ACRA XBRL help Singapore, XBRL consultation Singapore, Xberra Tagger contact";
 
$canonical_url = "https://xberratagger.com.sg/xbrl-filing-services-contact-singapore";
 
$og_title="Contact Xberra Tagger | XBRL Filing Support Singapore";
 
$og_desc="Contact us for XBRL filing and ACRA compliance support. Free consultation, 30-minute response guarantee.";
 
$og_type="website";
 
$og_url="https://xberratagger.com.sg/xbrl-filing-services-contact-singapore";
 
$twitter_title="Contact Xberra Tagger | Singapore XBRL Support";
 
$twitter_desc="Free consultation for XBRL filing and ACRA compliance. 30-minute response guaranteed.";
 
$full_url="https://xberratagger.com.sg/xbrl-filing-services-contact-singapore";
$full_default="https://xberratagger.com.sg/xbrl-filing-services-contact-singapore";



$schema ='{ 

  "@context": "https://schema.org", 

  "@graph": [ 

    { 

      "@type": "ContactPage", 

      "name": "Contact Xberra Tagger | XBRL Filing Support Singapore", 

      "url": "https://xberratagger.com.sg/xbrl-filing-services-contact-singapore", 

      "publisher": {"@id": "https://xberratagger.com.sg/#organization"} 

    }, 

    { 

      "@type": "BreadcrumbList", 

      "itemListElement": [ 

        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://xberratagger.com.sg/"}, 

        {"@type": "ListItem", "position": 2, "name": "Contact", "item": "https://xberratagger.com.sg/xbrl-filing-services-contact-singapore"} 

      ] 

    } 

  ] 

}';

include 'header.php'; ?>

<div class="py-lg-4 py-3"></div>

<section class="support-section">

    <!-- TOP CONTENT -->
    <div class="support-header">
        <span class="support-tag"><span class="badge-icon">✦</span> Contact Us</span>
        <h1>
            Support You Can <span>Count On</span>
        </h1>
        <p>
            Our experts are here to guide you with tailored compliance solutions.
        </p>
    </div>

    <!-- FORM CARD -->
    <div class="support-form-wrapper">
        <form class="support-form" novalidate>
            <div class="form-grid">
                <div class="form-group">
                    <label>First Name <span>*</span></label>
                    <input type="text" name="firstName" placeholder="First name here" required>
                </div>

                <div class="form-group">
                    <label>Last Name <span>*</span></label>
                    <input type="text" name="lastName" placeholder="Last name here" required>
                </div>

                <div class="form-group">
                    <label>Email Address <span>*</span></label>
                    <input type="email" name="email" placeholder="Add email" required>
                </div>

                <div class="form-group">
                    <label>Phone Number <span>*</span></label>
                    <input type="text" name="phone" placeholder="+65 1234 5678" required>
                </div>
            </div>

            <div class="form-group full">
                <label>Your Message <span>*</span></label>
                <textarea name="message" rows="6" placeholder="Comments" required></textarea>
            </div>

            <!-- CAPTCHA -->
            <div class="form-group full">
                <label>Simple Captcha <span class="required">*</span></label>

                <div class="captcha-wrapper">
                    <div class="captcha-box" id="captchaBox"></div>
                    <button type="button" class="refresh-btn" id="refreshCaptcha">↻</button>
                </div>

                <input type="text" name="captcha" id="captchaInput" class="captcha-input"
                    placeholder="Enter captcha from the picture" required>
            </div>

            <button type="submit" class="submit-btn">Submit</button>
            
            <div>

                <div class="mt-3 text-center" id="formResult"></div>
            </div>
        </form>
    </div>

    <!-- MAP IMAGE -->
    <div class="map-section">
        <img src="./assets/img/contact/singapore-map.png" alt="Xberra Tagger Location Map">
    </div>

</section>

<!-- CONTACT INFO CARDS -->
<section class="contact-info-section">

    <div class="contact-info-container">

        <!-- COLUMN 1 -->
        <div class="contact-item">
            <div class="contact-icon">
                <img src="./assets/img/contact/building-21.png" alt="Global Headquarters">
            </div>
            <h3>Global Headquarters</h3>
            <p>
                Xberra Tagger PTE. LTD. – 202533776G<br>
                10 ANSON ROAD, #33-10C,<br>
                INTERNATIONAL PLAZA SINGAPORE<br>
                079903
            </p>
        </div>

        <!-- COLUMN 2 -->
        <div class="contact-item">
            <div class="contact-icon">
                <img src="./assets/img/contact/phone.png" alt="Mobile">
            </div>
            <h3>Mobile Number</h3>
            <p>+65 60272438</p>
        </div>

        <!-- COLUMN 3 -->
        <div class="contact-item">
            <div class="contact-icon">
                <img src="./assets/img/contact/mail.png" alt="Email">
            </div>
            <h3>Email</h3>
            <p>hello@xberratagger.com</p>
        </div>

    </div>

</section>





<?php include 'footer.php'; ?>