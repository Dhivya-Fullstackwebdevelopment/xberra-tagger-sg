<?php

$page_title = "";
 
$page_meta = "";
 
$page_keywords = "";
 
$canonical_url = "https://xberratagger.com.sg/blogs";
 
$og_title="";
 
$og_desc="";
 
$og_type="";
 
$og_url="";
 
$twitter_title="";
 
$twitter_desc="";
 
$schema ='';

include './header.php'; ?>

<style>
    *,
    *::before,
    *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0
    }

    :root {
        --primary-red: #dc2626;
        --dark-navy: #0a1a2f;
        --navy-blue: #1F2853;
        --light-bg: #f8fafc;
        --border-color: #e2e8f0;
        --card-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.03), 0 8px 10px -6px rgba(0, 0, 0, 0.02);
        --card-hover-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08), 0 8px 15px -6px rgba(220, 38, 38, 0.05);
        --ink: #1c1f2e;
        --muted: #4b5563;
        --text-light: #6b7280;
        --font: 'Inter', sans-serif;
        --r: 12px;
        --rl: 24px;
    }

    html {
        font-family: var(--font);
        font-size: 16px;
        scroll-behavior: smooth
    }

    @media (max-width: 768px) {
        html {
            font-size: 14px;
        }
    }

    body {
        font-family: var(--font);
        color: var(--muted);
        background: #fff;
        -webkit-font-smoothing: antialiased;
        line-height: 1.6
    }

    a {
        text-decoration: none;
        color: inherit
    }

    .wrap {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 24px
    }

    .text-primary-red {
        color: var(--primary-red);
    }

    .bg-primary-red {
        background-color: var(--primary-red);
    }

    .text-dark-navy {
        color: var(--dark-navy);
    }

    .bg-dark-navy {
        background-color: var(--navy-blue);
    }

    .bg-light-custom {
        background-color: var(--light-bg);
    }

    .border-custom {
        border-color: var(--border-color);
    }

    .text-white-70 {
        color: rgba(255, 255, 255, 0.7);
    }

    .text-muted-custom {
        color: var(--muted);
    }

    /* Breadcrumb */
    .breadcrumb-custom {
        margin-bottom: 24px;
        list-style: none;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
    }

    .breadcrumb-custom li {
        display: inline-flex;
        align-items: center;
        font-size: 0.9rem;
    }

    .breadcrumb-custom a {
        color: rgba(255, 255, 255, 0.6);
        text-decoration: none;
        transition: color 0.2s;
    }

    .breadcrumb-custom a:hover {
        color: white;
    }

    .breadcrumb-custom li+li:before {
        content: "›";
        color: rgba(255, 255, 255, 0.4);
        margin: 0 8px;
    }

    /* AI Answer Box */
    .ai-box-wrap {
        background: rgba(220, 38, 38, 0.03);
        padding: 24px 0;
        border-bottom: 1px solid rgba(220, 38, 38, 0.1);
    }

    .ai-box {
        background: #fff;
        border: 1.5px solid rgba(220, 38, 38, 0.2);
        border-radius: var(--rl);
        padding: 24px;
        display: flex;
        gap: 20px;
        align-items: flex-start;
        box-shadow: 0 2px 12px rgba(220, 38, 38, 0.07);
    }

    .ai-ic {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: rgba(220, 38, 38, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
    }

    .ai-lbl {
        font-size: 0.7rem;
        font-weight: 700;
        color: var(--primary-red);
        letter-spacing: 0.1em;
        text-transform: uppercase;
        margin-bottom: 6px;
    }

    .ai-ans {
        font-size: 1rem;
        color: var(--dark-navy);
        line-height: 1.7;
        font-weight: 500;
    }

    .ai-ans strong {
        color: var(--primary-red);
    }

    /* Hero Section */
    .hero-section {
        background: var(--navy-blue);
        padding: 8rem 0 3rem;
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(ellipse 700px 500px at 80% 50%, rgba(220, 38, 38, .15), transparent 65%);
        pointer-events: none;
    }

    @media (max-width:768px) {
        .hero-section {
            padding: 6rem 0 2rem;
        }
    }

    .banner-title {
        font-size: clamp(2.5rem, 5vw, 3.5rem);
        font-weight: 700;
        letter-spacing: -0.02em;
        line-height: 1.2;
        color: #fff;
    }

    .banner-title span {
        color: var(--primary-red);
    }

    .hero-desc {
        max-width: 520px;
        font-size: 1.1rem;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.7);
        margin-bottom: 2rem;
    }

    .hero-ey {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(220, 38, 38, 0.15);
        border: 1px solid rgba(220, 38, 38, 0.28);
        color: #fff;
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: .1em;
        text-transform: uppercase;
        padding: 6px 14px;
        border-radius: 100px;
        margin-bottom: 20px;
    }

    /* Reason Grid */
    .rg {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }

    .rg-i {
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: var(--r);
        padding: 16px;
        transition: background .2s;
    }

    .rg-i:hover {
        background: rgba(255, 255, 255, 0.1);
    }

    .rg-n {
        font-size: 0.6rem;
        font-weight: 700;
        color: var(--primary-red);
        letter-spacing: .08em;
        text-transform: uppercase;
        margin-bottom: 6px;
    }

    .rg-i h4 {
        font-size: 0.9rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 4px;
        line-height: 1.3;
    }

    .rg-i p {
        font-size: 0.8rem;
        color: rgba(255, 255, 255, 0.5);
        line-height: 1.5;
    }

    /* Mini Badge */
    .mini-badge {
        display: inline-block;
        color: var(--primary-red);
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 12px;
        background: rgba(220, 38, 38, 0.05);
        padding: 6px 16px;
        border-radius: 40px;
    }

    .section-title {
        font-size: clamp(2rem, 4vw, 2.5rem);
        font-weight: 700;
        color: var(--navy-blue);
        margin-bottom: 16px;
        line-height: 1.2;
    }

    .lead-text {
        font-size: 1.1rem;
        color: var(--muted);
        margin-bottom: 2rem;
    }

    /* Content Card */
    .content-card {
        background: white;
        border: 1px solid var(--border-color);
        border-radius: 24px;
        padding: 28px 24px;
        height: 100%;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        box-shadow: var(--card-shadow);
        position: relative;
    }

    .content-card:hover {
        box-shadow: var(--card-hover-shadow);
        border-color: rgba(220, 38, 38, 0.15);
        transform: translateY(-6px);
    }

    .content-card h5 {
        font-size: 1.2rem;
        font-weight: 700;
        margin: 16px 0 12px;
        color: var(--dark-navy);
        transition: color 0.2s;
    }

    .content-card p {
        font-size: 0.95rem;
        line-height: 1.7;
        color: var(--muted);
    }

    .content-card:hover h5 {
        color: var(--primary-red);
    }

    .content-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 20px;
        right: 20px;
        height: 3px;
        background: var(--primary-red);
        border-radius: 3px 3px 0 0;
        opacity: 0;
        transition: opacity 0.3s ease, left 0.3s ease, right 0.3s ease;
    }

    .content-card:hover::after {
        opacity: 0.3;
        left: 30px;
        right: 30px;
    }

    /* Icon Wrapper */
    .icon-wrapper {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        background: rgba(220, 38, 38, 0.05);
        border-radius: 12px;
        margin-bottom: 0;
    }

    .icon-wrapper svg {
        width: 24px;
        height: 24px;
        stroke: var(--primary-red);
        fill: none;
        stroke-width: 1.8;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .dark .icon-wrapper {
        background: rgba(255, 255, 255, 0.1);
    }

    .dark .icon-wrapper svg {
        stroke: white;
    }

    /* Button Styles */
    .btn-primary-red {
        background-color: var(--primary-red);
        color: white;
        padding: 14px 36px;
        border-radius: 60px;
        font-weight: 600;
        border: none;
        transition: all 0.3s ease;
        box-shadow: 0 10px 20px -10px var(--primary-red);
        letter-spacing: 0.3px;
        font-size: 0.95rem;
        display: inline-block;
        text-decoration: none;
        cursor: pointer;
    }

    .btn-primary-red:hover {
        background-color: #b91c1c;
        transform: translateY(-2px);
        box-shadow: 0 15px 25px -10px #b91c1c;
    }

    .btn-outline-white {
        border: 2px solid rgba(255, 255, 255, 0.3);
        color: white;
        padding: 14px 36px;
        border-radius: 60px;
        font-weight: 600;
        background: transparent;
        transition: all 0.3s ease;
        font-size: 0.95rem;
        display: inline-block;
        text-decoration: none;
    }

    .btn-outline-white:hover {
        border-color: white;
        background: rgba(255, 255, 255, 0.1);
        transform: translateY(-2px);
    }

    /* Law Panel */
    .law-panel {
        background: rgba(220, 38, 38, 0.03);
        border: 1.5px solid rgba(220, 38, 38, 0.2);
        border-radius: var(--rl);
        padding: 28px;
    }

    .lp-t {
        font-size: 0.7rem;
        font-weight: 700;
        color: var(--primary-red);
        letter-spacing: .1em;
        text-transform: uppercase;
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        gap: 7px;
    }

    .lp-items {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .lp-i {
        background: #fff;
        border-radius: var(--r);
        padding: 16px;
        border-left: 3px solid var(--primary-red);
    }

    .lp-i h4 {
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--primary-red);
        margin-bottom: 4px;
    }

    .lp-i p {
        font-size: 0.9rem;
        color: var(--muted);
        line-height: 1.6;
    }

    /* Value Cards */
    .v-card {
        background: #fff;
        border-radius: var(--rl);
        padding: 28px;
        border: 1.5px solid var(--border-color);
        position: relative;
        overflow: hidden;
        transition: all .25s;
        height: 100%;
    }

    .v-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: var(--primary-red);
    }

    .v-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 28px rgba(0, 0, 0, .07);
        border-color: rgba(220, 38, 38, 0.15);
    }

    .v-icon {
        font-size: 2rem;
        margin-bottom: 14px;
    }

    .v-card h3 {
        font-size: 1.1rem;
        font-weight: 800;
        color: var(--dark-navy);
        margin-bottom: 9px;
        letter-spacing: -.02em;
    }

    .v-card p {
        font-size: 0.9rem;
        color: var(--muted);
        line-height: 1.7;
    }

    /* Wide Card */
    .wc {
        background: #fff;
        border-radius: var(--rl);
        padding: 28px;
        border: 1.5px solid var(--border-color);
        display: grid;
        grid-template-columns: 48px 1fr;
        gap: 16px;
        align-items: start;
        transition: all .25s;
        height: 100%;
    }

    .wc:hover {
        border-color: rgba(220, 38, 38, 0.2);
        box-shadow: var(--card-hover-shadow);
    }

    .wc-ic {
        font-size: 2rem;
    }

    .wc h3 {
        font-size: 1.1rem;
        font-weight: 800;
        color: var(--dark-navy);
        margin-bottom: 8px;
        letter-spacing: -.02em;
    }

    .wc p {
        font-size: 0.9rem;
        color: var(--muted);
        line-height: 1.7;
    }

    /* Consequence Cards */
    .con-right {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .cc {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: var(--rl);
        padding: 22px;
        border-left: 3px solid var(--primary-red);
        transition: all .25s;
    }

    .cc:hover {
        background: rgba(255, 255, 255, 0.08);
    }

    .cc-n {
        font-size: 0.6rem;
        font-weight: 700;
        color: var(--primary-red);
        letter-spacing: .08em;
        text-transform: uppercase;
        margin-bottom: 6px;
    }

    .cc h4 {
        font-size: 1rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 7px;
        letter-spacing: -.02em;
    }

    .cc p {
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.6);
        line-height: 1.7;
    }

    /* Consequence Stats */
    .con-st {
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: var(--r);
        padding: 16px 20px;
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 10px;
    }

    .con-n {
        font-size: 1.4rem;
        font-weight: 800;
        color: var(--primary-red);
        flex-shrink: 0;
        min-width: 44px;
    }

    .con-l {
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.6);
        line-height: 1.4;
    }

    /* Regulatory Cards */
    .reg-right {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .rc {
        background: #fff;
        border-radius: var(--r);
        padding: 20px;
        border: 1.5px solid var(--border-color);
        display: flex;
        align-items: flex-start;
        gap: 14px;
        transition: border .2s;
    }

    .rc:hover {
        border-color: rgba(220, 38, 38, 0.2);
    }

    .rc-ic {
        font-size: 1.3rem;
        flex-shrink: 0;
        margin-top: 2px;
    }

    .rc h4 {
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--dark-navy);
        margin-bottom: 4px;
    }

    .rc p {
        font-size: 0.9rem;
        color: var(--muted);
        line-height: 1.6;
    }

    /* FAQ Accordion */
    .faq-accordion {
        border: 1.5px solid var(--border-color);
        border-radius: 24px;
        overflow: hidden;
        background: #fff;
    }

    .faq-item {
        border-bottom: 1px solid var(--border-color);
    }

    .faq-item:last-child {
        border-bottom: none;
    }

    .faq-question {
        width: 100%;
        text-align: left;
        padding: 18px 24px;
        background: #fff;
        border: none;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 16px;
        font-family: var(--font);
        font-size: 1rem;
        font-weight: 600;
        color: var(--dark-navy);
        line-height: 1.4;
        transition: background .2s;
    }

    .faq-question:hover,
    .faq-question.open {
        background: rgba(220, 38, 38, 0.02);
    }

    .faq-arrow {
        flex-shrink: 0;
        color: var(--primary-red);
        font-size: 0.8rem;
        margin-top: 3px;
        transition: transform .3s;
    }

    .faq-question.open .faq-arrow {
        transform: rotate(180deg);
    }

    .faq-answer {
        display: none;
        padding: 4px 24px 24px;
        font-size: 0.95rem;
        color: var(--muted);
        line-height: 1.75;
    }

    .faq-answer.open {
        display: block;
    }

    /* CTA Section - Exactly matching old page */
    .bg-blue {
        background-color: var(--navy-blue);
    }

    .rounded-5 {
        border-radius: 2rem;
    }

    .cta-title {
        font-size: clamp(1.8rem, 4vw, 2.8rem);
        font-weight: 700;
        line-height: 1.2;
        color: white;
    }

    .cta-desc {
        font-size: 1rem;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.9);
    }

    .cta-btn {
        background-color: var(--primary-red);
        color: white;
        padding: 14px 40px;
        border-radius: 100px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        text-decoration: none;
        display: flex;
        align-items: center;
        border: none;
        cursor: pointer;

    }

    .cta-btn:hover {
        background-color: #b91c1c;
        transform: translateY(-2px);
        box-shadow: 0 15px 25px -10px #b91c1c;
    }

    /* Internal Links Bar */
    .int-bar {
        background: var(--navy-blue);
        padding: 24px 0;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .il-row {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .il-link {
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 40px;
        padding: 10px 20px;
        font-size: 0.9rem;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.7);
        transition: all .2s;
    }

    .il-link:hover {
        background: rgba(255, 255, 255, 0.12);
        color: #fff;
    }



    /* Animation */
    .fade {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.55s ease, transform 0.55s ease;
    }

    .fade.in {
        opacity: 1;
        transform: translateY(0);
    }

    /* Spacing */
    .section-padding {
        padding: 80px 0;
    }

    .mb-4 {
        margin-bottom: 24px;
    }

    .mb-5 {
        margin-bottom: 48px;
    }

    .mt-4 {
        margin-top: 24px;
    }

    .gap-3 {
        gap: 16px;
    }

    .d-flex {
        display: flex;
    }

    .align-items-center {
        align-items: center;
    }

    .justify-content-center {
        justify-content: center;
    }

    .flex-wrap {
        flex-wrap: wrap;
    }

    .text-center {
        text-align: center;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -12px;
    }

    [class*="col-"] {
        padding: 0 12px;
    }



    @media (max-width: 991px) {
        .hero-inner {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .row>[class*="col-"] {
            width: 100%;
            margin-bottom: 20px;
        }
    }
</style>

<div class="my-lg-3 my-3 py-lg-5 py-5"></div>

<!-- Hero Section -->
<section class="hero-section py-lg-5">
    <div class="container">
        <div class="row align-items-center ">
            <!-- LEFT CONTENT -->
            <div class="col-lg-7 col-md-12">
                <ul class="breadcrumb-custom">
                    <li><a href="./">Home</a></li>
                    <!-- <li><a href="./">ACRA</a></li> -->
                    <li><span class="text-white">Blog</span></li>
                </ul>

                <h1 class="banner-title text-white mb-4">
                    Blog
                </h1>

            </div>

        </div>
    </div>
</section>

<section class="blog-sec ">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
                <!-- Card 1 -->
                <a href="./challenges-selecting-xbrl-provider-singapore" class="sg-card h-100 blog-card">
                    <img src="../assets/img/blog/xbrl-provider-singapore.png" 
                        alt="XBRL Conversion">
                    <div class="sg-card-content">
                        <h3>Key Challenges Faced by CFOs, Corporate Secretaries & Accounting Firms When Selecting an XBRL Provider in Singapore</h3>
                        <p>Understanding Why Choosing the Right XBRL Partner Matters in Singapore</p>
                        <a href="./challenges-selecting-xbrl-provider-singapore" class="sg-btn">Read More →</a>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
                <!-- Card 2 -->
                <a href="./acra-bizfinx-v4-0-xbrl-filing" class="sg-card h-100 blog-card">
                    <img src="../assets/img/blog/Bizfinx-Hero.png" 
                        alt="XBRL Conversion">
                    <div class="sg-card-content">
                        <h3>ACRA BizFinx Preparation Tool v4.0 | XBRL Filing & Compliance Support</h3>
                        <p>ACRA BizFinx v4.0 is the latest upgrade to Singapore's XBRL filing framework, replacing the older BizFinx v3.4.1...</p>
                        <a href="./acra-bizfinx-v4-0-xbrl-filing" class="sg-btn">Read More →</a>
                    </div>
                </a>
            </div>
            

        </div>

</section>




    <?php include './footer.php'; ?>