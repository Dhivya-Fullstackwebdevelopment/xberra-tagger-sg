
<?php

$page_title = "XBRL Filing Services Singapore | ACRA XBRL Preparation | Xberra Tagger";
$page_meta = "Fast, accurate XBRL filing for ACRA Singapore in 2–3 business days. 100% first-time acceptance guaranteed. Trusted by 500+ companies. Get a free trial today.";
$page_keywords = "XBRL filing Singapore, ACRA XBRL, XBRL conversion Singapore, iXBRL filing, BizFile XBRL, ACRA filing services";
$canonical_url = "https://xberratagger.com.sg/";
$og_title = "XBRL Filing Services Singapore | ACRA XBRL Preparation | Xberra Tagger";
$og_desc = "Fast, accurate XBRL filing for ACRA Singapore in 2–3 business days. 100% first-time acceptance. Trusted by 500+ companies.";
$og_type = "website";
$og_url = "https://xberratagger.com.sg/";
$twitter_title = "XBRL Filing Services Singapore | Xberra Tagger";
$twitter_desc = "ACRA-compliant XBRL filing in 2–3 business days. 100% acceptance guaranteed.";

$schema = '
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://xberratagger.com.sg/#organization",
      "name": "Xberra Tagger Pte. Ltd.",
      "alternateName": "Xberra Tagger Singapore",
      "url": "https://xberratagger.com.sg/",
      "logo": {
        "@type": "ImageObject",
        "url": "https://xberratagger.com.sg/assets/img/home-page/xberra-Logo.png",
        "width": 600,
        "height": 200
      },
      "description": "XBRL conversion, ACRA BizFile filing, and compliance services for Singapore companies and accounting firms.",
      "foundingDate": "2025-08-04",
      "founders": [{"@type": "Person","name": "Xberra Tagger Founding Team"}],
      "sameAs": [
        "https://www.linkedin.com/company/xberra-tagger-xbrl/",
        "https://www.crunchbase.com/organization/xberra-tagger",
        "https://xberratagger.my/"
      ],
      "contactPoint": [{
        "@type": "ContactPoint",
        "telephone": "+65-6027-2438",
        "contactType": "customer service",
        "email": "hello@xberratagger.com",
        "areaServed": "SG",
        "availableLanguage": ["English"]
      }]
    },
    {
      "@type": "WebSite",
      "@id": "https://xberratagger.com.sg/#website",
      "url": "https://xberratagger.com.sg/",
      "name": "Xberra Tagger Singapore",
      "publisher": {"@id": "https://xberratagger.com.sg/#organization"},
      "inLanguage": "en-SG",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://xberratagger.com.sg/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://xberratagger.com.sg/#localbusiness",
      "name": "Xberra Tagger",
      "image": "https://xberratagger.com.sg/assets/img/home-page/xberra-Logo.png",
      "url": "https://xberratagger.com.sg/",
      "telephone": "+65-6027-2438",
      "email": "hello@xberratagger.com",
      "priceRange": "S$$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "77 High Street, #10-12B, High Street Plaza",
        "addressLocality": "Singapore",
        "postalCode": "179433",
        "addressCountry": "SG"
      },
      "geo": {"@type": "GeoCoordinates","latitude": 1.2897,"longitude": 103.8501},
      "openingHoursSpecification": [{
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
        "opens": "09:00",
        "closes": "18:00"
      }],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "500",
        "bestRating": "5",
        "worstRating": "1"
      }
    },
    {
      "@type": "Service",
      "@id": "https://xberratagger.com.sg/#service",
      "serviceType": "XBRL Filing and ACRA BizFile Submission",
      "name": "XBRL Filing Services Singapore",
      "provider": {"@id": "https://xberratagger.com.sg/#organization"},
      "areaServed": {"@type": "Country","name": "Singapore"},
      "description": "End-to-end XBRL conversion and ACRA BizFile submission. 2–3 business day turnaround. 100% first-time acceptance.",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "XBRL Filing Service Tiers",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Simplified XBRL","description": "For small companies and Exempt Private Companies with simplified filing requirements."}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Full XBRL (Standalone)","description": "Comprehensive XBRL conversion of all five statement components for ACRA compliance."}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Full XBRL (Consolidated)","description": "Consolidated XBRL conversion for group companies with multiple subsidiaries."}}
        ]
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://xberratagger.com.sg/#faq",
      "mainEntity": [
        {"@type": "Question","name": "What is XBRL filing in Singapore?","acceptedAnswer": {"@type": "Answer","text": "XBRL (eXtensible Business Reporting Language) filing is the mandatory process by which Singapore-incorporated companies submit structured, machine-readable financial statements to ACRA via the BizFile+ portal. Required since 1 November 2007."}},
        {"@type": "Question","name": "Who must file XBRL with ACRA?","acceptedAnswer": {"@type": "Answer","text": "All Singapore-incorporated companies limited or unlimited by shares must file financial statements in XBRL format with ACRA, except solvent Exempt Private Companies, dormant companies, and a small set of regulated financial institutions."}},
        {"@type": "Question","name": "How fast is Xberra Taggers turnaround?","acceptedAnswer": {"@type": "Answer","text": "2 to 3 business days for standard filings. Complex consolidated statements may take 3 to 5 business days. Expedited delivery is available on request."}},
        {"@type": "Question","name": "What if my financial statements are revised after submission?","acceptedAnswer": {"@type": "Answer","text": "Unlimited free amendments. Whether your auditor raises a late query, a director name needs correction, or financials change, Xberra Tagger revises the XBRL at zero additional cost."}},
        {"@type": "Question","name": "Does Xberra Tagger submit XBRL to ACRA directly?","acceptedAnswer": {"@type": "Answer","text": "Yes. We transmit the approved XBRL package directly to ACRA via BizFile on your behalf. You do not need an ACRA account or BizFile login."}}
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://xberratagger.com.sg/#breadcrumb",
      "itemListElement": [{"@type": "ListItem","position": 1,"name": "Home","item": "https://xberratagger.com.sg/"}]
    }
  ]
}
';

include 'header.php'; ?>





<section class="hero-banner sg-banner">
    <div class="container">
        <div class="hero-content text-center w-100">
            <div>
                <img class="mb-3" src="./assets/img/home-page/count-bg.png" width="150px" alt="High rated service with 500+ reviews">
            </div>
            <h2 class="my-banner-review mb-3">
                500+ Reviews <span style="color:red"> ★</span><span style="color:red">★</span><span style="color:red">★</span><span style="color:red">★</span><span style="color:red">★</span> (4.9 out of 5)
            </h2>
            <h1 class="my-banner-title text-white">XBRL Submission Services Singapore</h1>
            <h2 class="my-banner-title text-lg text-white">Need Fast, Reliable Support for XBRL and BizFile?</h2>
            <p class="text-lg w-100">We assist both companies and accounting firms by converting financial statements prepared in Word, Excel, or PDF into ACRA‑compliant XBRL format and filing them directly with BizFile.</p>
            <a href="./xbrl-filing-services-contact-singapore" class="hero-btn py-2">
                Book a Call <span class="btn-icon">➜</span>
            </a>
            <p class="text-quote">Endless Possibilities, Zero Pressure.</p>
        </div>
    </div>
</section>

<section class="why-choose-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                <div class="why-image">
                    <img src="./assets/img/about-us/box-bg.webp" alt="Why Choose Us" class="img-fluid h-100">
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div class="why-content">
                    <span class="about-tag"><span>✦</span> About</span>
                    <h2>Why Singaporean Businesses <br>Choose <span class="highlight">Us</span></h2>
                    <p>We simplify financial statement conversion and filing, ensuring speed and accuracy so you can focus on your business while we manage compliance.</p>
                    <div class="why-features">
                        <span>No hidden charges</span>
                        <span>Assured ACRA Filing</span>
                        <span>Security and compliance</span>
                        <span>Transparent Pricing</span>
                        <span>Quick Turnaround (2–3 business days)</span>
                    </div>
                    <div class="mt-3">
                        <a href="./xbrl-services-provider-singapore-about" class="sg-btn">Learn More About Our Team & Approach</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sg-service">
    <div class="container">
        <div class="sg-header">
            <div class="mini-badge"><span>✦</span> Our Services</div>
            <h2>What We're <span>Best At</span></h2>
            <p>Fast, Affordable XBRL Conversion & ACRA Filing</p>
        </div>
        <div class="sg-grid">
            <div class="sg-card">
                <img src="./assets/img/Singapore-page/card-2.png" alt="XBRL Conversion">
                <div class="sg-card-content">
                    <h3>XBRL Conversion</h3>
                    <p>Make compliance easy: We turn your financials into XBRL format as required by ACRA.</p>
                    <a href="./xbrl-filing-fees-singapore" class="sg-btn">Get Customized Pricing →</a>
                </div>
            </div>
            <div class="sg-card">
                <img src="./assets/img/Singapore-page/card-1.png" alt="ACRA BizFile Filing">
                <div class="sg-card-content">
                    <h3>ACRA BizFile Filing</h3>
                    <p>Accurate XBRL submission of financial statements to ACRA through BizFile, handled entirely for you.</p>
                    <a href="./xbrl-filing-fees-singapore" class="sg-btn">Get Customized Pricing →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-padding container">
    <div class="why-badge"><span>✦</span> Why Choose Us</div>
    <h2 class="section-title">Why Corporate Secretaries Choose Xberra Tagger</h2>
    <div class="row mt-4">
        <div class="col-md-6 col-lg-6 mb-4">
            <div class="card-box card-dark">
                <span class="tag-badge">FREE</span>
                <h3 class="big-title">Free</h3>
                <h5>Free Trial — Risk-Free</h5>
                <p>Try our XBRL conversion service with no obligation. See the quality and speed of our work before committing to any package.</p>
                <a href="./xbrl-filing-for-corporate-secretaries-singapore" style="display:inline-block;margin-top:1.2rem;background:rgb(215 25 32);color:#fff;padding:10px 20px;border-radius:40px;font-size:.82rem;font-weight:700;transition:all .2s;text-decoration:none">Explore Solutions for Corporate Secretaries →</a>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card-box card-light">
                <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h5>Assured Support</h5>
                <p>Response within 30 minutes. Extended hours available for urgent deadline filings.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card-box card-light">
                <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M12 2s4 3 4 6H8c0-3 4-6 4-6z"/><path d="M7 8h10l2 6c0 4-3 7-7 7s-7-3-7-7l2-6z"/><path d="M12 12v4"/></svg></div>
                <h5>Custom Pricing</h5>
                <p>Discounts for firms handling multiple entities. Volume pricing that scales with your client base.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card-box card-red">
                <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg></div>
                <h3 class="big-title">Flex</h3>
                <h5>Flexible Payment</h5>
                <p>Bank transfer or secure online options — whichever suits your firm.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card-box card-light">
                <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2"><circle cx="12" cy="8" r="6"/><path d="M8 14l-1 8 5-3 5 3-1-8"/></svg></div>
                <h5>ISO 9001 Certified</h5>
                <p>Demonstrate quality assurance to your own clients. Certified processes, every time.</p>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 mb-4">
            <div class="card-box card-light">
                <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
                <h5>Data Security</h5>
                <p>ISO-certified processes on secure Singapore-hosted servers. Your clients' financial data never leaves the country — fully protected at every step.</p>
            </div>
        </div>
    </div>
</div>

<section class="section-padding">
    <div class="container">
        <div class="text-center">
            <div class="why-badge"><span>✦</span> Why Xberra</div>
            <h2 class="why-choose-maintitle">Why Companies Trust Us to <span> Simplify Compliance</span></h2>
            <p class="sec-desc fw-400 text-center mb-lg-5 mb-3">Stop overpaying and waiting weeks. Xberra Tagger delivers ACRA‑ready XBRL conversion in 2–3 business days, saving you time and money.</p>
        </div>
        <div class="row align-items-center mb-3 gy-3">
            <div class="col-lg-6 col-12">
                <div class="tat-image-wrapper text-center">
                    <img src="./assets/img/pricing/Add-a-subheading-2.png" alt="TAT Comparison" class="rounded-3 img-fluid"/>
                    <p class="tat-caption mt-3">Average Turn Around Time (TAT) Comparison</p>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <h3 class="why-choose-title text-blue text-start">Less Time. Less Cost. More Value.</h3>
                <p class="why-choose-desc w-100 text-start">Xberra Tagger provides efficient conversion and filing of financial statements with ACRA, delivering results within <b>2–3 business days</b> at significantly reduced cost.</p>
                <a href="./xbrl-services-provider-singapore-about" class="btn-quote py-2 text-decoration-none" id="openModal">Discover What Sets Us Apart</a>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="text-center">
            <h2 class="why-choose-maintitle mb-lg-5">How We Address <span> Compliance Issues Effectively?</span></h2>
            <section class="compliance-section">
                <div class="container">
                    <div class="row gy-4 compliance-wrapper">
                        <div class="col-lg-6 col-12">
                            <h2 class="section-title">Typical Compliance Challenges</h2>
                            <div class="compliance-box left-box">
                                <ul class="challenge-list">
                                    <li><span class="icon cross"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path></svg></span>Unprocessed Financial Statements Not Suitable for ACRA Filing</li>
                                    <li><span class="icon cross"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path></svg></span>Excessive Costs and Lack of Clarity</li>
                                    <li><span class="icon cross"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path></svg></span>Lengthy Delays for Basic Conversions</li>
                                    <li><span class="icon cross"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path></svg></span>Risk of Rejection During ACRA Portal Submission</li>
                                    <li><span class="icon cross"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path></svg></span>Lost Time in Repeated Exchanges</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <h2 class="section-title red">How We Address These Issues</h2>
                            <div class="compliance-box right-box">
                                <ul class="solution-list">
                                    <li><span class="icon check"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg></span>Seamless Conversion to ACRA‑Ready XBRL</li>
                                    <li><span class="icon check"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg></span>Fair Pricing. No Surprises.</li>
                                    <li><span class="icon check"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg></span>Fast Processing: 2–3 Business Day Delivery</li>
                                    <li><span class="icon check"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg></span>Assured Filing Success with ACRA</li>
                                    <li><span class="icon check"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg></span>A Streamlined Process with Expert Guidance</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center mb-3 gy-3">
            <div class="col-lg-6 col-12">
                <div><img src="./assets/img/pricing/Header-76-.png" alt="Reliable Support" class="rounded-3 img-fluid"/></div>
            </div>
            <div class="col-lg-6 col-12">
                <h3 class="why-choose-title text-blue text-start">Always Here With Reliable Support</h3>
                <p class="why-choose-desc w-100 text-start">No delays. No stress. Our expert support team is ready to guide you every step, ensuring your filing goes through smoothly.</p>
            </div>
        </div>
    </div>
</section>

<section class="how-steps-section">
    <div class="">
        <div class="">
            <div class="steps-header">
                <div class="mini-badge"><span>✦</span> Our Process</div>
                <h2>XBRL Conversion & ACRA Filing Made Simple: <span>4 Steps to Success</span></h2>
            </div>
            <div class="steps-grid">
                <div class="step-card">
                    <div class="step-number">01</div>
                    <img src="./assets/img/home-page/sign-in.png" alt="Sign in to Xberra Tagger portal to start XBRL filing">
                    <div><h3>SIGN IN</h3><p>Create your account online and add<br> entity information</p></div>
                </div>
                <div class="step-card">
                    <div class="step-number">02</div>
                    <img src="./assets/img/home-page/place-order.png" alt="Upload financial statements in Excel, Word or PDF for XBRL conversion">
                    <div><h3>PLACE ORDER & UPLOAD</h3><p>Upload financial statements in Excel, <b>Word</b>,<br> or <b>PDF format</b>.</p></div>
                </div>
                <div class="step-card">
                    <div class="step-number">03</div>
                    <img src="./assets/img/home-page/download-image.png" alt="Download your ACRA-ready XBRL package">
                    <div><h3>DOWNLOAD XBRL</h3><p>Receive the XBRL package as scheduled. <br><b>Review and approve.</b></p></div>
                </div>
                <div class="step-card">
                    <div class="step-number">04</div>
                    <img src="./assets/img/home-page/submit-image.png" alt="Submit XBRL financial statements">
                    <div><h3>SUBMIT XBRL</h3><p>If required, <b>we transmit XBRL to ACRA</b> on <br><b>your behalf</b>.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-padding bg-light">
    <div class="container">
        <div class="mini-badge"><span>✦</span> CLIENT FEEDBACK</div>
        <h2 class="section-title">What Companies Say About Us</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="content-card" style="background:#1f2853;color:white;">
                    <div style="color:#f5a623;margin-bottom:1rem;">★★★★★</div>
                    <p style="color:rgba(255,255,255,0.8);">The team helped us determine exactly which XBRL submission applied to our holding structure. Consolidated XBRL was handled flawlessly — first-time acceptance.</p>
                    <div class="d-flex align-items-center mt-4">
                        <span class="testimonial-avatar" style="background-color:#2E8B57;">S</span>
                        <div class="ms-3"><strong style="color:white;">Sarah Lim</strong><br><p style="color:rgba(255,255,255,0.5);font-size:0.8rem;">Senior Manager, Mid-Size Accounting Firm, Singapore</p></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="content-card">
                    <div style="color:#f5a623;margin-bottom:1rem;">★★★★★</div>
                    <p>We assumed our dormant company didn't need to file — Xberra Tagger corrected us and handled 3 years of back filings in under a week. Saved us from serious penalties.</p>
                    <div class="d-flex align-items-center mt-4">
                        <span class="testimonial-avatar" style="background-color:#0F52BA;">P</span>
                        <div class="ms-3"><strong>Prakash Nair</strong><br><p style="color:var(--muted);font-size:0.8rem;">Partner, Corporate Services Firm, Singapore</p></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="content-card" style="background:#dc2626;color:white;">
                    <div style="color:rgba(255,255,255,0.8);margin-bottom:1rem;">★★★★★</div>
                    <p style="color:rgba(255,255,255,0.9);">As a foreign branch, we were confused about our obligations. They confirmed the exact requirements and filed our returns smoothly. Highly professional.</p>
                    <div class="d-flex align-items-center mt-4">
                        <span class="testimonial-avatar" style="background-color:#8B4513;">R</span>
                        <div class="ms-3"><strong style="color:white;">Rajiv Menon</strong><br><p style="color:rgba(255,255,255,0.6);font-size:0.8rem;">Director, Accounting & Tax Advisory, Singapore</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section-margin">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-12 text-center">
                <div class="bg-blue p-lg-4 p-4 rounded-5">
                    <div class="mini-badge"><span>✦</span> Contact</div>
                    <h2 class="cta-title text-white fw-700 mb-3">Ready to Simplify and Strengthen <br class="d-lg-block d-none">Your XBRL Compliance?<br></h2>
                    <p class="cta-desc text-white mb-3">Trusted by 500+ Enterprises Across 2 countries for<br class="d-lg-block d-none">Compliance and Reporting <br class="d-lg-block d-none"></p>
                    <a href="./xbrl-filing-services-contact-singapore" class="cta-btn mb-3 text-decoration-none d-inline-block">Book A free consultation</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== GOOGLE REVIEWS SLIDER ===== -->
<!-- <section class="reviews-slider-section">
    <div class="reviews-layout">
        <div class="reviews-left">
            <div class="reviews-left-logo">
                <div class="reviews-biz-icon">
                    <svg viewBox="0 0 24 24"><path d="M4 4h4v4H4zm6 0h4v4h-4zm6 0h4v4h-4zM4 10h4v4H4zm6 0h4v4h-4zm6 0h4v4h-4zM4 16h4v4H4zm6 0h4v4h-4zm6 0h4v4h-4z"/></svg>
                </div>
                <div>
                    <div class="reviews-biz-name">Xberra Tagger</div>
                    <div class="reviews-overall-stars">
                        <span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="reviews-overall-score">5.0</div>
                <div class="reviews-count-text">Based on 500+ reviews</div>
                <div class="reviews-powered">powered by <span class="g-letters"><span>G</span><span>o</span><span>o</span><span>g</span><span>l</span><span>e</span></span></div>
            </div>
            <a href="https://g.page/r/CVvDIXTQG6JuEBM" target="_blank" class="reviews-review-us-btn">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                review us on <span class="g-letters" style="margin-left:3px"><span>G</span><span>o</span><span>o</span><span>g</span><span>l</span><span>e</span></span>
            </a>
        </div>
        <div class="reviews-right">
            <button class="slider-arrow-btn" id="rvPrev" aria-label="Previous">&#8592;</button>
            <div class="reviews-viewport" id="rvViewport">
                <div class="reviews-track" id="rvTrack">
                    <div class="rv-card">
                        <div class="rv-header">
                            <div class="rv-user"><div class="rv-avatar" style="background:#2E8B57;">S</div><div><div class="rv-name">Sarah Lim</div><div class="rv-time">9 months ago</div></div></div>
                            <svg class="rv-g-icon" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                        </div>
                        <div class="rv-stars"><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span></div>
                        <p class="rv-text">The team helped us determine exactly which XBRL submission applied to our holding structure. Consolidated XBRL was handled flawlessly — first-time acceptance with ACRA.</p>
                        <div class="rv-response"><div class="rv-response-label">Response from the owner <span>8 months ago</span></div><p class="rv-response-text">Thank you, Sarah! Delighted the consolidated filing went through seamlessly.</p></div>
                    </div>
                    <div class="rv-card">
                        <div class="rv-header">
                            <div class="rv-user"><div class="rv-avatar" style="background:#0F52BA;">P</div><div><div class="rv-name">Prakash Nair</div><div class="rv-time">9 months ago</div></div></div>
                            <svg class="rv-g-icon" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                        </div>
                        <div class="rv-stars"><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span></div>
                        <p class="rv-text">We assumed our dormant company didn't need to file — Xberra Tagger corrected us and handled 3 years of back filings in under a week. Saved us from serious penalties.</p>
                        <div class="rv-response"><div class="rv-response-label">Response from the owner <span>8 months ago</span></div><p class="rv-response-text">Thanks so much, Prakash! Glad we sorted the back filings quickly.</p></div>
                    </div>
                    <div class="rv-card">
                        <div class="rv-header">
                            <div class="rv-user"><div class="rv-avatar" style="background:#8B4513;">R</div><div><div class="rv-name">Rajiv Menon</div><div class="rv-time">9 months ago</div></div></div>
                            <svg class="rv-g-icon" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                        </div>
                        <div class="rv-stars"><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span></div>
                        <p class="rv-text">As a foreign branch, we were confused about our obligations. They confirmed the exact requirements and filed our returns smoothly. Highly professional throughout.</p>
                        <div class="rv-response"><div class="rv-response-label">Response from the owner <span>8 months ago</span></div><p class="rv-response-text">Thank you, Rajiv! Pleasure navigating the foreign branch requirements with you.</p></div>
                    </div>
                    <div class="rv-card">
                        <div class="rv-header">
                            <div class="rv-user"><div class="rv-avatar" style="background:#6A0DAD;">A</div><div><div class="rv-name">Angela Tan</div><div class="rv-time">7 months ago</div></div></div>
                            <svg class="rv-g-icon" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                        </div>
                        <div class="rv-stars"><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span></div>
                        <p class="rv-text">Switched from our previous provider to Xberra Tagger and what a difference. 2 business days delivery, no errors, and the team responds within the hour.</p>
                        <div class="rv-response"><div class="rv-response-label">Response from the owner <span>7 months ago</span></div><p class="rv-response-text">We appreciate the kind words, Angela! Looking forward to a long partnership.</p></div>
                    </div>
                    <div class="rv-card">
                        <div class="rv-header">
                            <div class="rv-user"><div class="rv-avatar" style="background:#c0392b;">M</div><div><div class="rv-name">Michael Ong</div><div class="rv-time">6 months ago</div></div></div>
                            <svg class="rv-g-icon" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                        </div>
                        <div class="rv-stars"><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span></div>
                        <p class="rv-text">We manage filings for 30+ entities and Xberra Tagger's volume pricing saved us significantly. Delivery is consistent and errors are basically zero. Best decision this year.</p>
                        <div class="rv-response"><div class="rv-response-label">Response from the owner <span>5 months ago</span></div><p class="rv-response-text">Thank you, Michael! Thrilled it's working so well for your team.</p></div>
                    </div>
                    <div class="rv-card">
                        <div class="rv-header">
                            <div class="rv-user"><div class="rv-avatar" style="background:#16a085;">J</div><div><div class="rv-name">Jennifer Wong</div><div class="rv-time">5 months ago</div></div></div>
                            <svg class="rv-g-icon" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                        </div>
                        <div class="rv-stars"><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span></div>
                        <p class="rv-text">ISO-certified processes, data stays in Singapore. For our clients' sensitive financials, that matters enormously. Xberra Tagger ticks every box — compliance, speed, security.</p>
                        <div class="rv-response"><div class="rv-response-label">Response from the owner <span>4 months ago</span></div><p class="rv-response-text">Data security is at the core of everything we do, Jennifer. Thank you!</p></div>
                    </div>>
                    <div class="rv-card">
                        <div class="rv-header"><div class="rv-user"><div class="rv-avatar" style="background:#2E8B57;">S</div><div><div class="rv-name">Sarah Lim</div><div class="rv-time">9 months ago</div></div></div><svg class="rv-g-icon" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div>
                        <div class="rv-stars"><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span></div>
                        <p class="rv-text">The team helped us determine exactly which XBRL submission applied to our holding structure. Consolidated XBRL was handled flawlessly — first-time acceptance with ACRA.</p>
                        <div class="rv-response"><div class="rv-response-label">Response from the owner <span>8 months ago</span></div><p class="rv-response-text">Thank you, Sarah! Delighted the consolidated filing went through seamlessly.</p></div>
                    </div>
                    <div class="rv-card">
                        <div class="rv-header"><div class="rv-user"><div class="rv-avatar" style="background:#0F52BA;">P</div><div><div class="rv-name">Prakash Nair</div><div class="rv-time">9 months ago</div></div></div><svg class="rv-g-icon" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div>
                        <div class="rv-stars"><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span></div>
                        <p class="rv-text">We assumed our dormant company didn't need to file — Xberra Tagger corrected us and handled 3 years of back filings in under a week. Saved us from serious penalties.</p>
                        <div class="rv-response"><div class="rv-response-label">Response from the owner <span>8 months ago</span></div><p class="rv-response-text">Thanks so much, Prakash! Glad we sorted the back filings quickly.</p></div>
                    </div>
                    <div class="rv-card">
                        <div class="rv-header"><div class="rv-user"><div class="rv-avatar" style="background:#8B4513;">R</div><div><div class="rv-name">Rajiv Menon</div><div class="rv-time">9 months ago</div></div></div><svg class="rv-g-icon" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div>
                        <div class="rv-stars"><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span></div>
                        <p class="rv-text">As a foreign branch, we were confused about our obligations. They confirmed the exact requirements and filed our returns smoothly. Highly professional throughout.</p>
                        <div class="rv-response"><div class="rv-response-label">Response from the owner <span>8 months ago</span></div><p class="rv-response-text">Thank you, Rajiv! Pleasure navigating the foreign branch requirements with you.</p></div>
                    </div>
                    <div class="rv-card">
                        <div class="rv-header"><div class="rv-user"><div class="rv-avatar" style="background:#6A0DAD;">A</div><div><div class="rv-name">Angela Tan</div><div class="rv-time">7 months ago</div></div></div><svg class="rv-g-icon" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div>
                        <div class="rv-stars"><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span></div>
                        <p class="rv-text">Switched from our previous provider to Xberra Tagger and what a difference. 2 business days delivery, no errors, and the team responds within the hour.</p>
                        <div class="rv-response"><div class="rv-response-label">Response from the owner <span>7 months ago</span></div><p class="rv-response-text">We appreciate the kind words, Angela! Looking forward to a long partnership.</p></div>
                    </div>
                    <div class="rv-card">
                        <div class="rv-header"><div class="rv-user"><div class="rv-avatar" style="background:#c0392b;">M</div><div><div class="rv-name">Michael Ong</div><div class="rv-time">6 months ago</div></div></div><svg class="rv-g-icon" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div>
                        <div class="rv-stars"><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span></div>
                        <p class="rv-text">We manage filings for 30+ entities and Xberra Tagger's volume pricing saved us significantly. Delivery is consistent and errors are basically zero. Best decision this year.</p>
                        <div class="rv-response"><div class="rv-response-label">Response from the owner <span>5 months ago</span></div><p class="rv-response-text">Thank you, Michael! Thrilled it's working so well for your team.</p></div>
                    </div>
                    <div class="rv-card">
                        <div class="rv-header"><div class="rv-user"><div class="rv-avatar" style="background:#16a085;">J</div><div><div class="rv-name">Jennifer Wong</div><div class="rv-time">5 months ago</div></div></div><svg class="rv-g-icon" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div>
                        <div class="rv-stars"><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span><span class="rvstar">★</span></div>
                        <p class="rv-text">ISO-certified processes, data stays in Singapore. For our clients' sensitive financials, that matters enormously. Xberra Tagger ticks every box — compliance, speed, security.</p>
                        <div class="rv-response"><div class="rv-response-label">Response from the owner <span>4 months ago</span></div><p class="rv-response-text">Data security is at the core of everything we do, Jennifer. Thank you!</p></div>
                    </div>

                </div>
            </div>
            <button class="slider-arrow-btn" id="rvNext" aria-label="Next">&#8594;</button>
        </div>
    </div>
</section> -->

<script>
(function () {
    const track = document.getElementById('rvTrack');
    const viewport = document.getElementById('rvViewport');
    const prevBtn = document.getElementById('rvPrev');
    const nextBtn = document.getElementById('rvNext');

    if (!track || !prevBtn || !nextBtn) return;

    const GAP = 16;
    const ORIGINAL_COUNT = track.querySelectorAll('.rv-card').length / 2;

    let currentIndex = 0;
    let autoSlide;

    function getCardWidth() {
        const card = track.querySelector('.rv-card');
        return card ? card.offsetWidth + GAP : 296;
    }

    function moveToSlide(index, animate = true) {
        track.style.transition = animate ? 'transform 0.5s ease' : 'none';
        track.style.transform = `translateX(-${index * getCardWidth()}px)`;
    }

    function nextSlide() {
        currentIndex++;
        moveToSlide(currentIndex);
        if (currentIndex >= ORIGINAL_COUNT) {
            setTimeout(() => { moveToSlide(0, false); currentIndex = 0; }, 500);
        }
    }

    function prevSlide() {
        if (currentIndex <= 0) {
            currentIndex = ORIGINAL_COUNT;
            moveToSlide(currentIndex, false);
            requestAnimationFrame(() => requestAnimationFrame(() => {
                currentIndex--;
                moveToSlide(currentIndex, true);
            }));
        } else {
            currentIndex--;
            moveToSlide(currentIndex, true);
        }
    }

    function startAutoSlide() { autoSlide = setInterval(nextSlide, 2000); }
    function stopAutoSlide() { clearInterval(autoSlide); }
    function resetAutoSlide() { stopAutoSlide(); startAutoSlide(); }

    nextBtn.addEventListener('click', () => { nextSlide(); resetAutoSlide(); });
    prevBtn.addEventListener('click', () => { prevSlide(); resetAutoSlide(); });
    track.addEventListener('mouseenter', stopAutoSlide);
    track.addEventListener('mouseleave', startAutoSlide);

    moveToSlide(0, false);
    startAutoSlide();
})();
</script>


<?php include 'footer.php'; ?>