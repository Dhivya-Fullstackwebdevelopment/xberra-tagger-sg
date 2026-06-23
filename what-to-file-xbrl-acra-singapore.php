<?php

$page_title = "What to File in XBRL ACRA Singapore | Requirements & Formats Explained | Xberra Tagger";
$page_meta = "Learn what to file in XBRL for ACRA Singapore. Understand simplified vs full XBRL, exemptions, company classification, and compliance requirements.";
$page_keywords = "what to file XBRL, XBRL Singapore, ACRA XBRL filing, simplified XBRL, full XBRL, XBRL exemptions Singapore";
$canonical_url = "https://xberratagger.com.sg/what-to-file-xbrl-acra-singapore";
$og_title = "What to File in XBRL ACRA Singapore";
$og_desc = "ACRA XBRL filing requirements explained. Find out what your company must file based on classification and reporting rules.";
$og_type = "article";
$og_url = "https://xberratagger.com.sg/what-to-file-xbrl-acra-singapore";
$twitter_title = "What to File in XBRL Singapore";
$twitter_desc = "ACRA XBRL filing requirements for Singapore companies explained.";
$full_url = "https://xberratagger.com.sg/what-to-file-xbrl-acra-singapore";
$full_default = "https://xberratagger.com.sg/what-to-file-xbrl-acra-singapore";

$schema = '
{ 

  "@context": "https://schema.org", 

  "@graph": [ 

  

    { 

      "@type": "Organization", 

      "name": "Xberra Tagger", 

      "url": "https://xberratagger.com.sg/", 

      "logo": "https://xberratagger.com.sg/images/logo.png" 

    }, 

  

    { 

      "@type": "WebPage", 

      "name": "What to File in XBRL Singapore", 

      "url": "https://xberratagger.com.sg/what-to-file-xbrl-acra-singapore",

      "description": "Understand ACRA XBRL filing requirements in Singapore, including what financial statements to file and company classifications." 

    }, 

  

    { 

      "@type": "Service", 

      "name": "XBRL Filing Singapore", 

      "provider": { 

        "@type": "Organization", 

        "name": "Xberra Tagger" 

      }, 

      "areaServed": { 

        "@type": "Country", 

        "name": "Singapore" 

      }, 

      "description": "Professional XBRL filing services in Singapore including simplified and full XBRL preparation and submission." 

    }, 

  

    { 

      "@type": "FAQPage", 

      "mainEntity": [ 

        { 

          "@type": "Question", 

          "name": "Is XBRL mandatory in Singapore?", 

          "acceptedAnswer": { 

            "@type": "Answer", 

            "text": "Yes, most Singapore companies must file financial statements in XBRL format with ACRA." 

          } 

        }, 

        { 

          "@type": "Question", 

          "name": "What is Simplified XBRL?", 

          "acceptedAnswer": { 

            "@type": "Answer", 

            "text": "Simplified XBRL is a reduced reporting format designed for small and medium-sized companies in Singapore." 

          } 

        }, 

        { 

          "@type": "Question", 

          "name": "Can I file PDF instead of XBRL?", 

          "acceptedAnswer": { 

            "@type": "Answer", 

            "text": "Only companies that qualify for exemption can file financial statements in PDF format instead of XBRL." 

          } 

        }, 

        { 

          "@type": "Question", 

          "name": "What happens if XBRL is filed incorrectly?", 

          "acceptedAnswer": { 

            "@type": "Answer", 

            "text": "Incorrect filings may be rejected by ACRA and require resubmission, leading to delays and potential penalties." 

          } 

        }, 

        { 

          "@type": "Question", 

          "name": "Who determines the XBRL format?", 

          "acceptedAnswer": { 

            "@type": "Answer", 

            "text": "ACRA determines whether a company should file simplified or full XBRL based on its classification." 

          } 

        } 

      ] 

    } 

  

  ] 

} 
';

include 'header.php'; ?>

<?php
$filing_types = [
    [
        "label" => "SMALL & NON-PUBLICLY ACCOUNTABLE",
        "title" => "Small & Non-Publicly Accountable Companies",
        "desc" => "Most SMEs fall here. File Simplified XBRL financial statements plus a full set of financial statements in PDF (director-approved).",
        "tag" => "MOST COMMON",
        "dark" => true
    ],
    [
        "label" => "LARGER / NON-SME COMPANIES",
        "title" => "Larger or Non-SME Companies",
        "desc" => "Must file Full XBRL financial statements (Full taxonomy) and PDF financial statements. More complex tagging with higher error risk.",
        "tag" => "FULL XBRL",
        "dark" => false
    ],
    [
        "label" => "FINANCIAL INSTITUTIONS",
        "title" => "Financial Institutions",
        "desc" => "Banks and insurers must file XBRL FSH (sector-specific templates) plus PDF financial statements.",
        "tag" => "FSH FORMAT",
        "dark" => false
    ],
    [
        "label" => "EXEMPT CASES",
        "title" => "PDF-Only Filers",
        "desc" => "Companies limited by guarantee and certain ACRA-approved special cases submit PDF financial statements only.",
        "tag" => "EXEMPTED",
        "dark" => false
    ]
];

$xbrl_components = [
    "Balance Sheet",
    "Profit & Loss",
    "Cash Flow Statement",
    "Notes to Financial Statements",
    "Directors\' Statement",
    "Auditor\'s Report"
];

$common_mistakes = [
    "Incorrect classification (SME vs full XBRL)",
    "Missing PDF attachment",
    "Wrong taxonomy mapping",
    "Validation errors in BizFinx",
    "Inconsistent financial data"
];

$why_choose = [
    [
        "title" => "Trusted Expertise",
        "text" => "Deep knowledge of ACRA requirements and Singapore GAAP, applied on every engagement."
    ],
    [
        "title" => "Transparent Process",
        "text" => "Full visibility from preparation through to final submission — no black boxes, no surprises."
    ],
    [
        "title" => "Future Ready",
        "text" => "Built to adapt seamlessly to evolving ACRA digital standards and taxonomy updates."
    ],
    [
        "title" => "Customer Centric",
        "text" => "Dedicated support for bookkeepers, accountants, and corporate secretaries alike."
    ]
];
?>

<style>
    :root {
        --primary-red: #dc2626;
        --dark-navy: #0a1a2f;
        --light-bg: #f8fafc;
        --border-color: #e2e8f0;
        --card-shadow: 0 10px 25px -5px rgba(0,0,0,0.03), 0 8px 10px -6px rgba(0,0,0,0.02);
        --card-hover-shadow: 0 20px 30px -10px rgba(0,0,0,0.08), 0 8px 15px -6px rgba(220,38,38,0.05);
        --ink: #1c1f2e;
        --muted: #4b5563;
        --text-light: #6b7280;
        --text-on-dark: rgba(255,255,255,0.92);
        --text-on-dark-muted: rgba(255,255,255,0.7);
    }

    html { font-size: 16px; }
    @media (max-width: 768px) { html { font-size: 14px; } }

    .text-primary-red { color: var(--primary-red); }
    .bg-primary-red { background-color: var(--primary-red); }
    .text-dark-navy { color: var(--dark-navy); }
    .bg-dark-navy { background-color: var(--dark-navy); }
    .bg-light-custom { background-color: var(--light-bg); }
    .border-custom { border-color: var(--border-color); }
    .text-white-70 { color: rgba(255,255,255,0.7); }
    .text-muted-custom { color: var(--muted); }

    .breadcrumb-custom {
        margin-bottom: 20px;
        list-style: none;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
    }
    .breadcrumb-custom li { display: inline-flex; align-items: center; }
    .breadcrumb-custom a {
        color: rgba(255,255,255,0.6);
        text-decoration: none;
        transition: color 0.2s;
        font-size: clamp(0.8rem, 2vw, 0.9rem);
    }
    .breadcrumb-custom a:hover { color: white; }
    .breadcrumb-custom li+li:before {
        content: "›";
        color: rgba(255,255,255,0.4);
        margin: 0 8px;
    }
    .breadcrumb-custom span {
        color: white;
        font-size: clamp(0.8rem, 2vw, 0.9rem);
    }

    .hero-section {
        background: #1F2853;
        padding: 10rem 0 3rem;
        position: relative;
    }
    @media (max-width: 768px) { .hero-section { padding: 6rem 0 2rem; } }

    .banner-title {
        font-size: clamp(2rem, 5vw, 3rem);
        font-weight: 700;
        letter-spacing: -0.02em;
        line-height: 1.2;
        color: #fff;
    }
    .banner-title span { font-size: clamp(2rem, 5vw, 3rem); font-weight: 700; }

    .lead {
        font-size: clamp(1rem, 2.5vw, 1.25rem);
        font-weight: 400;
        line-height: 1.7;
    }
    .hero-desc { max-width: 520px; font-size: 1.05rem; line-height: 1.7; }

    .stat-card {
        background: rgba(255,255,255,0.1);
        border: 1px solid rgba(255,255,255,0.2);
        border-radius: 20px;
        padding: 22px 18px;
        text-align: center;
        backdrop-filter: blur(4px);
        transition: transform 0.2s ease, background 0.2s ease;
    }
    .stat-card:hover { background: rgba(255,255,255,0.15); transform: translateY(-4px); }
    .stat-number { font-size: clamp(1.8rem, 4vw, 2.25rem); font-weight: 700; color: white; line-height: 1.2; }
    .stat-label {
        color: rgba(255,255,255,0.7);
        font-size: clamp(0.7rem, 1.5vw, 0.75rem);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-top: 5px;
        font-weight: 500;
    }

    .mini-badge {
        display: inline-block;
        color: var(--primary-red);
        font-size: clamp(0.7rem, 1.5vw, 0.8rem);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 15px;
        background: rgba(220,38,38,0.05);
        padding: 6px 16px;
        border-radius: 40px;
    }
    .mini-badge span { margin-right: 4px; font-size: 1rem; }

    .section-title {
        font-size: clamp(1.8rem, 4vw, 2.5rem);
        font-weight: 700;
        color: #1F2853;
        margin-bottom: 15px;
        line-height: 1.2;
    }

    .content-card {
        background: white;
        border: 1px solid rgba(226,232,240,0.6);
        border-radius: 24px;
        padding: 28px 24px;
        height: 100%;
        transition: all 0.3s cubic-bezier(0.16,1,0.3,1);
        box-shadow: var(--card-shadow);
        position: relative;
    }
    .content-card:hover {
        box-shadow: var(--card-hover-shadow);
        border-color: rgba(220,38,38,0.15);
        transform: translateY(-6px) scale(1.01);
    }
    .content-card h5 {
        font-size: clamp(1.1rem, 2vw, 1.25rem);
        font-weight: 700;
        margin-bottom: 1rem;
        color: #1f2853;
        transition: color 0.2s;
    }
    .content-card p { font-size: clamp(0.85rem, 1.5vw, 0.95rem); line-height: 1.6; color: var(--muted); }
    .content-card:hover h5 { color: var(--primary-red); }

    .icon-wrapper {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        background: rgba(220,38,38,0.05);
        border-radius: 12px;
        margin-bottom: 1rem;
    }
    .icon-wrapper svg { width: 24px; height: 24px; stroke: var(--primary-red); fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
    .dark .icon-wrapper { background: rgba(255,255,255,0.1); }
    .dark .icon-wrapper svg { stroke: white; }

    .bento-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; }
    .bento-grid .wide-2 { grid-column: span 2; }
    .bento-grid .wide-3 { grid-column: span 3; }
    .bento-grid .wide-4 { grid-column: span 4; }
    @media (max-width: 768px) {
        .bento-grid { grid-template-columns: repeat(2, 1fr); }
        .bento-grid .wide-2, .bento-grid .wide-3, .bento-grid .wide-4 { grid-column: span 2; }
    }
    @media (max-width: 480px) {
        .bento-grid { grid-template-columns: 1fr; }
        .bento-grid .wide-2, .bento-grid .wide-3, .bento-grid .wide-4 { grid-column: span 1; }
    }

    .bento-card {
        background: white;
        border-radius: 24px;
        padding: 1.75rem;
        border: 1px solid var(--border-color);
        transition: all 0.35s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }
    .bento-card:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(0,0,0,0.12); }
    .bento-card.dark { background: #1f2853; border-color: #1f2853; }
    .bento-card.dark h3, .bento-card.dark p { color: var(--text-on-dark); }
    .bento-card.dark p { opacity: 0.8; color: var(--text-on-dark-muted); }
    .bento-card.red { background: var(--primary-red); border-color: var(--primary-red); }
    .bento-card.red h3, .bento-card.red p { color: white; }
    .bento-card.red p { opacity: 0.9; }
    .bento-card h3 { font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; color: #1f2853; }
    .bento-card p { font-size: 0.9rem; color: var(--muted); line-height: 1.6; }
    .bento-card .icon-wrapper { transition: all 0.35s ease; }
    .bento-card:hover .icon-wrapper { transform: scale(1.15) rotate(5deg); }
    .bento-card::after {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        border-radius: 24px;
        border: 2px solid transparent;
        background: linear-gradient(45deg, var(--primary-red), transparent) border-box;
        -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        opacity: 0;
        transition: opacity 0.4s ease;
    }
    .bento-card:hover::after { opacity: 1; }

    .required-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 18px 26px;
        background: white;
        border-radius: 60px;
        margin-bottom: 14px;
        border: 1px solid var(--border-color);
        transition: all 0.2s ease;
        box-shadow: var(--card-shadow);
        animation: fadeInLeft 0.5s ease-out;
        animation-fill-mode: both;
    }
    .required-item:hover {
        border-color: var(--primary-red);
        box-shadow: 0 8px 20px -12px var(--primary-red);
        padding-left: 30px;
        transform: translateX(5px);
    }
    .required-badge {
        color: var(--primary-red);
        font-size: clamp(0.7rem, 1.5vw, 0.75rem);
        font-weight: 700;
        text-transform: uppercase;
        background: rgba(220,38,38,0.04);
        padding: 6px 14px;
        border-radius: 40px;
        white-space: nowrap;
    }

    .number-circle {
        width: 36px;
        height: 36px;
        background: #0f172a;
        color: #fff;
        font-size: 14px;
        font-weight: 700;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .acra-def-box { background: var(--dark-navy); border-radius: 18px; padding: 1.75rem; color: white; }
    .acra-def-label { font-size: 0.68rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.12em; color: rgba(255,255,255,0.3); }
    .acra-def-title { font-size: 1rem; font-weight: 800; margin: 0.5rem 0 1rem; }
    .acra-threshold { display: flex; justify-content: space-between; background: rgba(255,255,255,0.05); border-radius: 10px; padding: 0.85rem 1rem; margin-bottom: 0.5rem; }
    .acra-threshold span:first-child { color: rgba(255,255,255,0.38); font-size: 0.78rem; }
    .acra-threshold span:last-child { color: #ff5f6a; font-weight: 800; }

    .hero-info-card {
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.15);
        backdrop-filter: blur(10px);
        border-radius: 28px;
        padding: 36px 32px;
        color: white;
        max-width: 420px;
        margin-left: auto;
        box-shadow: 0 20px 40px rgba(0,0,0,0.35);
        animation: floatCard 6s ease-in-out infinite;
    }
    @keyframes floatCard { 0%,100% { transform: translateY(0px); } 50% { transform: translateY(-15px); } }
    .hero-info-card .card-title { font-size: 12px; letter-spacing: .15em; text-transform: uppercase; color: rgba(255,255,255,0.5); margin-bottom: 10px; }
    .hero-info-card .card-subtitle { font-size: 22px; font-weight: 700; margin-bottom: 18px; }
    .info-row { display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid rgba(255,255,255,0.08); }
    .info-row:last-child { border-bottom: none; }
    .info-row span { color: rgba(255,255,255,0.65); font-size: 14px; }
    .info-row strong { font-size: 14px; color: #ffffff; }
    .pricing-divider { height: 1px; background: rgba(255,255,255,0.12); margin: 20px 0; }
    .pricing-btn {
        display: block;
        text-align: center;
        background: linear-gradient(90deg, #10b981, #059669);
        padding: 12px;
        border-radius: 40px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .05em;
        color: white;
        text-decoration: none;
        transition: 0.3s;
    }
    .pricing-btn:hover { transform: translateY(-2px); background: linear-gradient(90deg, #059669, #047857); color: white; text-decoration: none; }

    .btn-primary-red {
        background-color: var(--primary-red);
        color: white;
        padding: 14px 36px;
        border-radius: 60px;
        font-weight: 600;
        border: none;
        transition: all 0.3s ease !important;
        box-shadow: 0 10px 20px -10px var(--primary-red);
        letter-spacing: 0.3px;
        font-size: clamp(0.9rem, 2vw, 1rem);
        display: inline-block;
        text-decoration: none;
    }
    .btn-primary-red:hover { background-color: #b91c1c; color: white; transform: translateY(-2px); box-shadow: 0 15px 25px -10px #b91c1c; text-decoration: none; }

    .btn-outline-navy {
        border: 2px solid var(--dark-navy);
        color: var(--dark-navy);
        padding: 14px 36px;
        border-radius: 60px;
        font-weight: 600;
        background: transparent;
        transition: all 0.3s ease !important;
        font-size: clamp(0.9rem, 2vw, 1rem);
        display: inline-block;
        text-decoration: none;
    }
    .btn-outline-navy:hover { background-color: var(--dark-navy); color: white; transform: translateY(-2px); border-color: var(--dark-navy); box-shadow: 0 12px 22px -12px var(--dark-navy); text-decoration: none; }

    .bg-blue { background-color: #1F2853; }
    .rounded-5 { border-radius: 2rem; }
    .cta-title { font-size: clamp(1.8rem, 4vw, 2.8rem); font-weight: 700; line-height: 1.2; }
    .cta-desc { font-size: clamp(0.9rem, 2vw, 1.1rem); line-height: 1.6; opacity: 0.9; }

    .testimonial-avatar {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 1rem;
        color: white;
        flex-shrink: 0;
        background-color: var(--primary-red);
    }

    .trust-strip {
        display: flex;
        gap: 1.5rem;
        flex-wrap: wrap;
        justify-content: center;
        padding: 2rem 0;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }
    .trust-badge {
        display: flex;
        align-items: center;
        gap: 0.6rem;
        padding: 0.75rem 1.25rem;
        border: 1.5px solid var(--border-color);
        border-radius: 100px;
        background: white;
        transition: all 0.2s ease;
    }
    .trust-badge:hover { border-color: var(--primary-red); transform: translateY(-2px); box-shadow: var(--card-hover-shadow); }
    .trust-badge svg { width: 20px; height: 20px; stroke: var(--primary-red); stroke-width: 1.8; fill: none; }
    .trust-badge span:last-child { font-weight: 600; color: #1f2853; font-size: 0.85rem; }

    .xbrl-card {
        background: #1f2853;
        color: #fff;
        padding: 32px;
        border-radius: 24px;
        box-shadow: 0 20px 35px rgba(0,0,0,0.2);
        height: auto;
        position: relative;
        top: 0;
    }
    .card-small-title { font-size: 12px; letter-spacing: 1px; color: #8aa0c8; margin-bottom: 12px; text-transform: uppercase; }
    .card-title { font-size: 22px; font-weight: 700; margin-bottom: 24px; line-height: 1.4; color: white; }
    .feature-list { list-style: none; padding: 0; margin-bottom: 30px; }
    .feature-list li { position: relative; padding-left: 28px; margin-bottom: 16px; color: #cbd5e1; font-size: 15px; }
    .feature-list li::before { content: "✓"; position: absolute; left: 0; color: #22c55e; font-weight: bold; font-size: 16px; }
    .trial-btn {
        display: inline-block;
        background: #e11d2e;
        color: #fff;
        padding: 14px 28px;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease !important;
        width: 100%;
        text-align: center;
        font-size: 16px;
    }
    .trial-btn:hover { background: #c81422; transform: translateY(-2px); box-shadow: 0 10px 20px rgba(225,29,46,0.3); color: #fff; text-decoration: none; }

    .solution-section { margin-bottom: 3rem; }
    .bento-grid-solution { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.25rem; margin-top: 1.5rem; }
    .solution-card {
        border-radius: 24px;
        padding: 2rem 1.75rem;
        display: flex;
        flex-direction: column;
        transition: all 0.3s cubic-bezier(0.16,1,0.3,1);
        position: relative;
        overflow: hidden;
        height: 100%;
        border: 1px solid transparent;
    }
    .solution-card:hover { transform: translateY(-6px); box-shadow: 0 20px 30px -10px rgba(0,0,0,0.12), 0 8px 15px -6px rgba(220,38,38,0.1); }
    .card-red { background: var(--primary-red); color: white; grid-column: 1 / 2; }
    .card-light { background: var(--light-bg); border: 1px solid var(--border-color); color: var(--ink); }
    .card-navy { background: #1F2853; color: white; grid-column: span 2; }
    .card-muted { background: #ffffff; border: 1px solid var(--border-color); color: var(--ink); }
    .card-step { font-size: 3.5rem; font-weight: 800; line-height: 1; margin-bottom: 1rem; letter-spacing: -0.02em; }
    .card-red .card-step { color: rgba(255,255,255,0.2); }
    .card-light .card-step, .card-muted .card-step { color: #d1d9e6; }
    .card-navy .card-step { color: rgba(255,255,255,0.15); font-size: 2rem; margin-bottom: 0.5rem; }
    .card-icon { width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; }
    .card-red .card-icon { background: rgba(255,255,255,0.15); }
    .card-light .card-icon, .card-muted .card-icon { background: rgba(220,38,38,0.05); }
    .card-navy .card-icon { background: rgba(255,255,255,0.1); }
    .card-icon svg { width: 26px; height: 26px; stroke-width: 1.8; fill: none; }
    .card-red .card-icon svg { stroke: white; }
    .card-light .card-icon svg, .card-muted .card-icon svg { stroke: var(--primary-red); }
    .card-navy .card-icon svg { stroke: white; }
    .solution-card .card-title { font-size: 1.4rem; font-weight: 700; margin-bottom: 0.75rem; line-height: 1.3; }
    .card-red .card-title, .card-navy .card-title { color: white; }
    .card-light .card-title, .card-muted .card-title { color: #1F2853; }
    .card-desc { font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem; flex: 1; }
    .card-red .card-desc { color: rgba(255,255,255,0.85); }
    .card-light .card-desc, .card-muted .card-desc { color: var(--muted); }
    .card-navy .card-desc { color: rgba(255,255,255,0.8); font-size: 1rem; margin-bottom: 2rem; }
    .card-tag { display: flex; align-items: center; gap: 0.5rem; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-top: 0.5rem; }
    .card-tag span:first-child { font-size: 1rem; line-height: 1; }
    .card-red .card-tag { color: rgba(255,255,255,0.7); }
    .card-light .card-tag, .card-muted .card-tag { color: var(--primary-red); }
    .card-navy .card-tag { color: rgba(255,255,255,0.6); }
    .no-step { font-size: 2rem; font-weight: 300; color: #d1d9e6; margin-bottom: 0.75rem; line-height: 1; }
    .cta-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        background: var(--primary-red);
        color: white;
        font-weight: 600;
        font-size: 0.95rem;
        padding: 0.9rem 2rem;
        border-radius: 60px;
        text-decoration: none;
        transition: all 0.3s ease !important;
        border: none;
        cursor: pointer;
        width: fit-content;
        margin-top: 0.5rem;
        box-shadow: 0 8px 18px -8px rgba(220,38,38,0.4);
    }
    .cta-button:hover { background: #b91c1c; transform: translateY(-2px); box-shadow: 0 12px 22px -8px rgba(220,38,38,0.5); text-decoration: none; color: white; }
    .cta-button svg { transition: transform 0.2s ease; }
    .cta-button:hover svg { transform: translateX(4px); }

    .comparison-table { width: 100%; border-collapse: collapse; border-radius: 16px; overflow: hidden; box-shadow: var(--card-shadow); }
    .comparison-table th { background: #1f2853; color: white; padding: 16px 20px; text-align: left; font-weight: 600; font-size: 0.9rem; }
    .comparison-table td { padding: 14px 20px; border-bottom: 1px solid var(--border-color); font-size: 0.9rem; background: white; }
    .comparison-table tr:last-child td { border-bottom: none; }
    .comparison-table tr:hover td { background: #f8fafc; }
    .comparison-table td:first-child { font-weight: 600; color: #1f2853; }
    .badge-simplified { background: rgba(16,185,129,0.1); color: #059669; padding: 4px 12px; border-radius: 20px; font-size: 0.75rem; font-weight: 700; }
    .badge-full { background: rgba(220,38,38,0.08); color: var(--primary-red); padding: 4px 12px; border-radius: 20px; font-size: 0.75rem; font-weight: 700; }

    @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    @keyframes fadeInLeft { from { opacity: 0; transform: translateX(-20px); } to { opacity: 1; transform: translateX(0); } }
    @keyframes scaleIn { from { opacity: 0; transform: scale(0.9); } to { opacity: 1; transform: scale(1); } }

    .bento-grid .bento-card { animation: fadeInUp 0.6s ease-out; animation-fill-mode: both; }
    .bento-grid .bento-card:nth-child(1) { animation-delay: 0.1s; }
    .bento-grid .bento-card:nth-child(2) { animation-delay: 0.2s; }
    .bento-grid .bento-card:nth-child(3) { animation-delay: 0.3s; }
    .bento-grid .bento-card:nth-child(4) { animation-delay: 0.4s; }
    .bento-grid .bento-card:nth-child(5) { animation-delay: 0.5s; }
    .bento-grid .bento-card:nth-child(6) { animation-delay: 0.6s; }

    .stat-card { animation: scaleIn 0.5s ease-out; }
    .required-item:nth-child(1) { animation-delay: 0.1s; }
    .required-item:nth-child(2) { animation-delay: 0.2s; }
    .required-item:nth-child(3) { animation-delay: 0.3s; }
    .required-item:nth-child(4) { animation-delay: 0.4s; }
    .required-item:nth-child(5) { animation-delay: 0.5s; }
    .required-item:nth-child(6) { animation-delay: 0.6s; }

    a, button, .btn-primary-red, .btn-outline-navy, .trial-btn, .pricing-btn { transition: all 0.3s cubic-bezier(0.16,1,0.3,1) !important; }
    .cta-btn:hover, .btn-primary-red:hover, .trial-btn:hover { box-shadow: 0 20px 30px -10px var(--primary-red); transform: translateY(-3px); }

    @media (max-width: 991px) {
        .hero-info-card { max-width: 100%; margin: 30px auto 0; }
        .col-lg-8, .col-lg-4, .col-lg-6, .col-lg-7, .col-lg-5 { margin-bottom: 1.5rem; }
        .col-lg-8:last-child, .col-lg-4:last-child, .col-lg-6:last-child, .col-lg-7:last-child, .col-lg-5:last-child { margin-bottom: 0; }
    }
    @media (max-width: 900px) {
        .bento-grid-solution { grid-template-columns: repeat(2, 1fr); }
        .card-red, .card-navy { grid-column: 1 / -1; }
    }
    @media (max-width: 768px) {
        .hero-section { padding: 5rem 0 2rem; }
        .hero-info-card { margin-top: 2rem; padding: 24px 20px; animation: none !important; transform: none !important; }
        .bento-grid { grid-template-columns: 1fr !important; gap: 1rem; }
        .bento-grid .wide-2, .bento-grid .wide-3, .bento-grid .wide-4 { grid-column: span 1 !important; }
        .bento-card { padding: 1.5rem; }
        .required-item { padding: 15px; flex-direction: column; align-items: flex-start; gap: 10px; }
        .required-item .d-flex { width: 100%; }
        .required-badge { align-self: center; }
        .xbrl-card { top: 0; margin-top: 1.5rem; padding: 24px; }
        .bento-grid-solution { grid-template-columns: 1fr !important; gap: 1rem; }
        .solution-card { padding: 1.5rem; }
        .card-step { font-size: 2.5rem; }
        .card-navy { grid-column: span 1 !important; }
        .trust-strip { gap: 0.75rem; padding: 1.5rem 0; }
        .trust-badge { padding: 0.5rem 1rem; width: calc(50% - 0.75rem); margin: 0; }
        .trust-badge svg { width: 16px; height: 16px; }
        .trust-badge span:last-child { font-size: 0.75rem; }
        .bg-blue { padding: 2rem 1.5rem !important; }
        .cta-title { font-size: 1.8rem; }
        .btn-primary-red, .btn-outline-navy { padding: 12px 24px; width: 100%; text-align: center; }
        .d-flex.gap-3 { flex-direction: column; gap: 0.75rem !important; }
        .section-title { font-size: 1.8rem; }
        .lead { font-size: 1rem; }
        .mini-badge { font-size: 0.7rem; padding: 4px 12px; }
        .comparison-table th, .comparison-table td { padding: 10px 12px; font-size: 0.8rem; }
        section.py-5, .py-5 { padding-top: 2rem !important; padding-bottom: 2rem !important; }
        .mb-5 { margin-bottom: 2rem !important; }
    }
    @media (max-width: 600px) {
        .bento-grid-solution { grid-template-columns: 1fr; }
        .card-red, .card-navy { grid-column: 1; }
        .solution-card { padding: 1.75rem 1.5rem; }
        .card-step { font-size: 3rem; }
    }
    @media (max-width: 480px) {
        .container { padding-left: 16px; padding-right: 16px; }
        .hero-section { padding: 4rem 0 1.5rem; }
        .banner-title { font-size: 1.8rem; }
        .banner-title span { font-size: 1.8rem; }
        .stat-card { padding: 10px 5px; }
        .stat-number { font-size: 1.2rem; }
        .stat-label { font-size: 0.65rem; }
        .hero-info-card { padding: 20px 16px; }
        .hero-info-card .card-subtitle { font-size: 18px; }
        .info-row span, .info-row strong { font-size: 12px; }
        .bento-card h3 { font-size: 1.1rem; }
        .bento-card p { font-size: 0.85rem; }
        .number-circle { width: 28px; height: 28px; font-size: 11px; }
        .xbrl-card { padding: 24px; }
        .card-title { font-size: 1.2rem; }
        .feature-list li { font-size: 0.85rem; padding-left: 22px; }
        .feature-list li::before { font-size: 14px; }
        .trial-btn { padding: 12px 20px; font-size: 0.9rem; }
        .solution-card .card-title { font-size: 1.2rem; }
        .solution-card .card-desc { font-size: 0.85rem; }
        .card-tag { font-size: 0.7rem; }
        .cta-button { padding: 0.75rem 1.5rem; font-size: 0.85rem; width: 100%; justify-content: center; }
        .trust-badge { width: 100%; }
        .cta-title { font-size: 1.5rem; }
        .cta-desc { font-size: 0.9rem; }
        p, h1, h2, h3, h4, h5, h6 { word-wrap: break-word; overflow-wrap: break-word; }
    }
    /* Section title */
.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1F2853;
    margin-bottom: 15px;
    line-height: 1.2;
}
@media (max-width: 1400px) and (min-width: 1251px) {
    .section-title { font-size: 2rem; }
}
@media (max-width: 1250px) {
    .section-title { font-size: clamp(1.4rem, 2.5vw, 1.9rem); }
}

/* Banner title */
.banner-title,
.banner-title span {
    font-size: 3rem;
    letter-spacing: -0.02em;
    line-height: 1.2;
}
@media (max-width: 1400px) and (min-width: 1251px) {
    .banner-title, .banner-title span { font-size: 2.4rem; }
}
@media (max-width: 1250px) {
    .banner-title, .banner-title span { font-size: clamp(1.5rem, 3.5vw, 2.2rem); }
}

/* Lead text */
.lead {
    font-size: 1.25rem;
    line-height: 1.7;
}
@media (max-width: 1400px) and (min-width: 1251px) {
    .lead { font-size: 1.1rem; }
}
@media (max-width: 1250px) {
    .lead { font-size: clamp(0.85rem, 1.6vw, 1rem); }
}

/* CTA title */
.cta-title {
    font-size: 2.8rem;
}
@media (max-width: 1400px) and (min-width: 1251px) {
    .cta-title { font-size: 2.2rem; }
}
@media (max-width: 1250px) {
    .cta-title { font-size: clamp(1.4rem, 3vw, 2rem); }
}

/* Bento card headings */
.bento-card h3 {
    font-size: 1.25rem;
}
@media (max-width: 1400px) and (min-width: 1251px) {
    .bento-card h3 { font-size: 1.1rem; }
}
@media (max-width: 1250px) {
    .bento-card h3 { font-size: clamp(0.95rem, 1.4vw, 1.1rem); }
}

/* Solution card titles */
.solution-card .card-title {
    font-size: 1.4rem;
}
@media (max-width: 1400px) and (min-width: 1251px) {
    .solution-card .card-title { font-size: 1.2rem; }
}
@media (max-width: 1250px) {
    .solution-card .card-title { font-size: clamp(1rem, 1.5vw, 1.15rem); }
}

/* Comparison table */
@media (max-width: 1400px) and (min-width: 1251px) {
    .comparison-table th, .comparison-table td { font-size: 0.85rem; padding: 12px 16px; }
}
@media (max-width: 1250px) {
    .comparison-table th, .comparison-table td { font-size: clamp(0.75rem, 1.2vw, 0.85rem); }
}
</style>

<div class="py-lg-4 py-3"></div>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <ul class="breadcrumb-custom">
                    <li><a href="./">Home</a></li>
                    <li><span>What to File in XBRL</span></li>
                </ul>
                <h1 class="banner-title text-white mb-4">
                    What to File in <span class="text-primary-red">XBRL</span><br>
                    Singapore (ACRA Requirements)
                </h1>
                <p class="text-white-70 hero-desc">
                    In Singapore, XBRL filing is not optional — it is a statutory requirement enforced by ACRA. What you need to file depends entirely on your company type, size, and classification.
                </p>
                <div class="row hero-stats">
                    <div class="col-4">
                        <div class="stat-card">
                            <div class="stat-number">4</div>
                            <div class="stat-label">Filing Types</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-card">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">ACRA Compliant</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-card">
                            <div class="stat-number">0</div>
                            <div class="stat-label">Rejections</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12 mt-4 mt-lg-0">
                <div class="hero-info-card">
                    <div class="card-title">ACRA Quick Reference</div>
                    <div class="card-subtitle">Filing at a Glance</div>
                    <div class="info-row">
                        <span>SMEs (Most Cases)</span>
                        <strong>Simplified XBRL + PDF</strong>
                    </div>
                    <div class="info-row">
                        <span>Larger Companies</span>
                        <strong>Full XBRL + PDF</strong>
                    </div>
                    <div class="info-row">
                        <span>Banks / Insurance</span>
                        <strong>XBRL FSH + PDF</strong>
                    </div>
                    <div class="info-row">
                        <span>Exempt Cases</span>
                        <strong>PDF Only</strong>
                    </div>
                    <div class="info-row">
                        <span>Wrong Format</span>
                        <strong>Instant Rejection</strong>
                    </div>
                    <div class="pricing-divider"></div>
                    <a href="./xbrl-filing-services-contact-singapore" class="pricing-btn">
                        Get Your Filing Classified Free
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-5 bg-light-custom">
    <div class="container">

        <!-- Who Needs to File -->
        <div class="row align-items-start mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="mini-badge"><span>✦</span> APPLICABILITY</div>
                <h2 class="section-title mt-2">Who Needs to File XBRL in Singapore</h2>
                <p class="lead text-dark-navy">
                    All Singapore-incorporated companies must file financial statements unless exempt. Getting your classification right is the first and most critical step.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="acra-def-box">
                    <div class="acra-def-label">ACRA REQUIREMENT</div>
                    <div class="acra-def-title">You MUST file XBRL if:</div>
                    <div class="acra-threshold">
                        <span>Private limited companies (most cases)</span>
                        <span>✓ MUST</span>
                    </div>
                    <div class="acra-threshold">
                        <span>Companies filing annual returns with ACRA</span>
                        <span>✓ MUST</span>
                    </div>
                    <div class="acra-threshold">
                        <span>Companies not qualifying for exemption</span>
                        <span>✓ MUST</span>
                    </div>
                    <div class="acra-def-title" style="margin-top: 1rem;">You MAY be exempt if:</div>
                    <div class="acra-threshold">
                        <span>Dormant companies meeting specific criteria</span>
                        <span style="color: #22c55e;">◎ MAY</span>
                    </div>
                    <div class="acra-threshold">
                        <span>Certain regulated entities or special cases</span>
                        <span style="color: #22c55e;">◎ MAY</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- What Exactly Needs to Be Filed -->
        <div class="mb-5">
            <div class="mini-badge"><span>✦</span> FILING BY COMPANY TYPE</div>
            <h2 class="section-title mt-2">What Exactly Needs to Be Filed</h2>
            <p class="mb-4 lead">This is where most businesses get confused. Your filing requirements depend entirely on your company classification.</p>

            <div class="bento-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem;">

                <div class="bento-card wide-2" style="grid-column: span 2; background: #1F2853; border: none; padding: 2rem; border-radius: 24px;">
                    <div style="display: flex; flex-direction: column; height: 100%;">
                        <span style="color: #dc2626; font-size: 0.8rem; font-weight: 600; letter-spacing: 0.5px; margin-bottom: 1rem;">SMALL &amp; NON-PUBLICLY ACCOUNTABLE · MOST COMMON</span>
                        <h3 style="color: white; font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem;">Small &amp; Non-Publicly Accountable Companies</h3>
                        <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem; line-height: 1.6; margin-bottom: 1rem;">Most SMEs fall here. You must file:</p>
                        <p style="color: rgba(255,255,255,0.85); font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">
                            <strong style="color: #22c55e;">✓</strong> Simplified XBRL financial statements<br>
                            <strong style="color: #22c55e;">✓</strong> Full set of financial statements in PDF (director-approved)
                        </p>
                    </div>
                </div>

                <div class="bento-card" style="background: #f8fafc; border: 1px solid #e2e8f0; padding: 2rem; border-radius: 24px;">
                    <div style="display: flex; flex-direction: column; height: 100%;">
                        <span style="color: #dc2626; font-size: 0.8rem; font-weight: 600; letter-spacing: 0.5px; margin-bottom: 1rem;">LARGER / NON-SME COMPANIES</span>
                        <h3 style="color: #0a1a2f; font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Larger or Non-SME Companies</h3>
                        <p style="color: #4b5563; font-size: 0.85rem; line-height: 1.5; margin-bottom: 0;">
                            Must file Full XBRL financial statements (Full taxonomy) plus PDF. More complex tagging with higher error risk.
                        </p>
                    </div>
                </div>

                <div class="bento-card" style="background: #f8fafc; border: 1px solid #e2e8f0; padding: 2rem; border-radius: 24px;">
                    <div style="display: flex; flex-direction: column; height: 100%;">
                        <span style="color: #dc2626; font-size: 0.8rem; font-weight: 600; letter-spacing: 0.5px; margin-bottom: 1rem;">FINANCIAL INSTITUTIONS</span>
                        <h3 style="color: #0a1a2f; font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Banks &amp; Insurance</h3>
                        <p style="color: #4b5563; font-size: 0.85rem; line-height: 1.5; margin-bottom: 0;">
                            Must file XBRL FSH (sector-specific templates) plus PDF financial statements.
                        </p>
                    </div>
                </div>

                <div class="bento-card" style="background: white; border: 1px solid #e2e8f0; padding: 2rem; border-radius: 24px;">
                    <div style="display: flex; flex-direction: column; height: 100%;">
                        <span style="color: #dc2626; font-size: 0.8rem; font-weight: 600; letter-spacing: 0.5px; margin-bottom: 1rem;">EXEMPT CASES</span>
                        <h3 style="color: #0a1a2f; font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">PDF-Only Filers</h3>
                        <p style="color: #4b5563; font-size: 0.85rem; line-height: 1.5; margin-bottom: 0;">
                            Companies limited by guarantee and entities with special ACRA approval submit PDF financial statements only.
                        </p>
                    </div>
                </div>

                <div class="bento-card wide-3" style="grid-column: span 3; background: #dc2626; border: none; padding: 2rem; border-radius: 24px;">
                    <div style="display: flex; flex-direction: column; height: 100%;">
                        <p style="color: white; font-size: 1.25rem; font-weight: 500; line-height: 1.5; margin-bottom: 1.5rem; max-width: 80%;">
                            "Choosing the wrong format = instant rejection. We classify your company correctly — every time."
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="color: white; font-size: 1.5rem; font-weight: 700;">Xberra Tagger</span>
                            <span style="color: rgba(255,255,255,0.5); font-size: 0.9rem; letter-spacing: 2px;">✦</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Key Components + Right Card -->
        <div class="row align-items-start mb-5">
            <div class="col-lg-8">
                <div class="mini-badge"><span>✦</span> XBRL FILING COMPONENTS</div>
                <h2 class="section-title mt-2">Key Components Inside an XBRL Filing</h2>
                <p class="mb-4 lead">
                    Your XBRL file is NOT just numbers — it's structured data tagging. Each item must be mapped to ACRA taxonomy tags, which is critical for validation.
                </p>
                <div>
                    <?php foreach ($xbrl_components as $index => $component): ?>
                        <div class="required-item">
                            <div class="d-flex align-items-center gap-3">
                                <div class="number-circle">
                                    <?php echo str_pad($index + 1, 2, "0", STR_PAD_LEFT); ?>
                                </div>
                                <span style="font-weight: 500; color: #1f2853;"><?php echo $component; ?></span>
                            </div>
                            <span class="required-badge">REQUIRED</span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="xbrl-card">
                    <div class="card-small-title">WITH Xberra Tagger</div>
                    <h4 class="card-title">All components handled — accurately, every time.</h4>
                    <ul class="feature-list">
                        <li>Automated tagging from Excel, Word or PDF</li>
                        <li>Validated against latest ACRA taxonomy</li>
                        <li>Free amendments — no hidden costs</li>
                        <li>Guaranteed first-time acceptance</li>
                    </ul>
                    <a href="./xbrl-filing-fees-singapore" class="trial-btn">Start Free Trial →</a>
                </div>
            </div>
        </div>

        <!-- Simplified vs Full XBRL Comparison -->
        <div class="mb-5">
            <div class="mini-badge"><span>✦</span> FORMAT COMPARISON</div>
            <h2 class="section-title mt-2">Simplified vs Full XBRL — What's the Difference?</h2>
            <p class="mb-4 lead">Choosing the wrong format results in instant rejection from ACRA's BizFinx system.</p>

            <div style="overflow-x: auto;">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th><span class="badge-simplified">Simplified XBRL</span></th>
                            <th><span class="badge-full">Full XBRL</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Complexity</td>
                            <td>Low</td>
                            <td>High</td>
                        </tr>
                        <tr>
                            <td>Data Points</td>
                            <td>Limited</td>
                            <td>Extensive</td>
                        </tr>
                        <tr>
                            <td>Suitable For</td>
                            <td>SMEs</td>
                            <td>Larger companies</td>
                        </tr>
                        <tr>
                            <td>Risk of Rejection</td>
                            <td>Medium</td>
                            <td>High</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>

            <div class="bento-card mt-3" style="background: #f8fafc; border-left: 4px solid var(--primary-red);">
                <div class="d-flex align-items-center gap-3">
                    <div style="width: 36px; height: 36px; flex-shrink: 0;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>
                        </svg>
                    </div>
                    <p style="color: #1f2853; font-size: 1rem; font-weight: 500; margin-bottom: 0;">
                        <strong>Choosing the wrong format = instant rejection.</strong> ACRA's system validates against your company classification automatically. Incorrect submissions require resubmission and may trigger penalties.
                    </p>
                </div>
            </div>
        </div>

        <!-- Common Filing Mistakes -->
        <div class="mb-5">
            <div class="mini-badge"><span>✦</span> COMMON MISTAKES</div>
            <h2 class="section-title mt-2">Common Filing Mistakes to Avoid</h2>
            <p class="mb-4 lead">These errors trigger rejection and delay compliance. Know them before you file.</p>

            <div class="bento-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem;">
                <?php
                $mistake_icons = [
                    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>',
                    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="9" y1="15" x2="15" y2="15"/></svg>',
                    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>',
                    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>',
                    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>'
                ];
                foreach ($common_mistakes as $i => $mistake):
                    $is_last = ($i === count($common_mistakes) - 1);
                ?>
                    <div class="bento-card<?php echo $is_last ? ' wide-2' : ''; ?>" <?php echo $is_last ? 'style="grid-column: span 2;"' : ''; ?>>
                        <div class="icon-wrapper" style="background: rgba(220,38,38,0.06);">
                            <?php echo str_replace('stroke="currentColor"', 'stroke="var(--primary-red)"', $mistake_icons[$i]); ?>
                        </div>
                        <h3 style="font-size: 1rem; color: #1f2853;"><?php echo $mistake; ?></h3>
                        <p style="font-size: 0.85rem;">Triggers rejection and delays ACRA compliance.</p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Why Accuracy Matters -->
        <div class="mb-5">
            <div class="mini-badge"><span>✦</span> WHY ACCURACY MATTERS</div>
            <h2 class="section-title mt-2">Why Filing Accuracy Is Critical</h2>

            <div class="bento-grid">
                <div class="bento-card wide-2" style="grid-column: span 2; background: #1F2853; border: none; padding: 2rem; border-radius: 24px;">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h3 style="font-size: 2rem; font-weight: 700; color: #ffffff; line-height: 1;">Publicly Accessible.</h3>
                        <span class="icon-wrapper" style="background: rgba(255,255,255,0.1);">
                            <svg viewBox="0 0 24 24" width="24" height="24" style="stroke: white;"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        </span>
                    </div>
                    <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1rem;">
                        <strong style="color: white; font-weight: 700;">XBRL data becomes publicly accessible via ACRA's BizFile portal.</strong>
                    </p>
                    <p style="color: #9ca3af; font-size: 0.9rem; line-height: 1.6;">
                        Investors, banks, and business partners can view and analyse your filed financials. Errors in your submission become public errors — impacting credibility and stakeholder confidence.
                    </p>
                </div>

                <div class="bento-card" style="background: #f8fafc;">
                    <div class="icon-wrapper" style="background: rgba(220,38,38,0.06);">
                        <svg viewBox="0 0 24 24" width="24" height="24" style="stroke: var(--primary-red);"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    </div>
                    <h3 style="color: #1f2853; font-size: 1.1rem;">Financial Benchmarking</h3>
                    <p>Used for industry benchmarking and cross-sector financial analysis by regulators and market participants.</p>
                </div>

                <div class="bento-card" style="background: #f8fafc;">
                    <div class="icon-wrapper" style="background: rgba(220,38,38,0.06);">
                        <svg viewBox="0 0 24 24" width="24" height="24" style="stroke: var(--primary-red);"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 style="color: #1f2853; font-size: 1.1rem;">Compliance &amp; Credibility</h3>
                    <p>Errors impact both your regulatory standing with ACRA and your credibility with lenders and investors.</p>
                </div>
            </div>
        </div>

        

        <!-- Trust Strip -->
        <div class="trust-strip">
            <div class="trust-badge">
                <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="6"/><path d="M12 14v8"/><path d="M8 22h8"/></svg>
                <span>ACRA Compliant</span>
            </div>
            <div class="trust-badge">
                <svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                <span>100% Data Security</span>
            </div>
            <div class="trust-badge">
                <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                <span>100% Acceptance</span>
            </div>
            <div class="trust-badge">
                <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                <span>Fast Turnaround</span>
            </div>
        </div>

        <!-- FAQ Section -->
        <section class="section-padding bg-light-custom">
            <div class="wrap">
                <div class="text-center" style="max-width: 640px; margin: 0 auto 44px;">
                    <div class="mini-badge" style="justify-content: center; display: inline-flex;">FAQ</div>
                    <h2 class="section-title">Questions About What to File in XBRL</h2>
                    <p class="lead-text">Answers to the most frequently asked questions about XBRL filing requirements in Singapore.</p>
                </div>

                <div style="max-width: 800px; margin: 0 auto;">
                    <div class="faq-accordion">
                        <div class="faq-item">
                            <button class="faq-question" onclick="toggleFAQ(event, this)">Is XBRL mandatory in Singapore? <span class="faq-arrow">▼</span></button>
                            <div class="faq-answer">Yes, most companies must file financial statements in XBRL format with ACRA.</div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question" onclick="toggleFAQ(event, this)">Can I file only PDF instead of XBRL? <span class="faq-arrow">▼</span></button>
                            <div class="faq-answer">Only if your company qualifies for exemption.</div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question" onclick="toggleFAQ(event, this)">What is Simplified XBRL? <span class="faq-arrow">▼</span></button>
                            <div class="faq-answer">A reduced reporting format designed for SMEs.</div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question" onclick="toggleFAQ(event, this)">What happens if I file incorrectly?  <span class="faq-arrow">▼</span></button>
                            <div class="faq-answer">Your submission may be rejected, causing delays and penalties. </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question" onclick="toggleFAQ(event, this)">Who decides what format I should use? <span class="faq-arrow">▼</span></button>
                            <div class="faq-answer">ACRA rules based on company size and classification.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA -->
        <section class="section-margin">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-12 text-center">
                        <div class="bg-blue p-lg-5 p-4 rounded-5">
                            <div class="mini-badge" style="background: rgba(255,255,255,0.15); color: white; display: inline-block; margin-bottom: 1.5rem;">
                                <span>✦</span> ACRA Compliance, Made Simple
                            </div>
                            <h2 class="cta-title text-white fw-700 mb-3">
                                Not Sure What Your Company Needs to File?
                            </h2>
                            <p class="cta-desc text-white mb-4">
                                We classify, prepare, and validate your XBRL filing — error-free and ACRA-compliant. Every submission accepted first time.
                            </p>
                            <div class="d-flex gap-3 justify-content-center flex-wrap">
                                <a href="./xbrl-filing-services-contact-singapore" class="btn-primary-red" style="background: white; color: var(--primary-red); box-shadow: none;">Start Your XBRL Filing</a>
                                <a href="./xbrl-filing-services-contact-singapore" class="btn-outline-navy" style="border-color: rgba(255,255,255,0.25); color: white;">Talk to an Expert</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<?php include 'footer.php'; ?>
