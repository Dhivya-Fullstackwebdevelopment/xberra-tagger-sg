<?php

$page_title = "Annual Return Filing ACRA Singapore | Fast & Compliant Filing Services | Xberra Tagger";
$page_meta = "File your Annual Return in Singapore with ACRA compliance. Avoid penalties with expert filing, XBRL support, and timely submission.";
$page_keywords = "annual return filing Singapore, ACRA annual return, annual return deadline Singapore, XBRL annual return, BizFile annual return";
$canonical_url = "https://xberratagger.com.sg/annual-return-filing-acra-singapore";
$og_title = "Annual Return Filing ACRA Singapore";
$og_desc = "Expert Annual Return filing services in Singapore with full ACRA compliance and XBRL support.";
$og_type = "article";
$og_url = "https://xberratagger.com.sg/annual-return-filing-acra-singapore";
$twitter_title = "Annual Return Filing Singapore";
$twitter_desc = "ACRA Annual Return filing made simple and compliant.";
$full_url = "https://xberratagger.com.sg/annual-return-filing-acra-singapore";
$full_default = "https://xberratagger.com.sg/annual-return-filing-acra-singapore";

$schema = '
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://xberratagger.com.sg/#organization",
      "name": "Xberra Tagger Pte. Ltd.",
      "url": "https://xberratagger.com.sg",
      "logo": {
        "@type": "ImageObject",
        "url": "https://xberratagger.com.sg/assets/img/home-page/xberra-Logo.png"
      },
      "email": "hello@xberratagger.com",
      "telephone": "+6560272438",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "10 Anson Road, #33-10C, International Plaza",
        "addressLocality": "Singapore",
        "postalCode": "079903",
        "addressCountry": "SG"
      },
      "sameAs": ["https://xberratagger.my"]
    },
    {
      "@type": "WebSite",
      "@id": "https://xberratagger.com.sg/#website",
      "url": "https://xberratagger.com.sg",
      "name": "Xberra Tagger",
      "publisher": { "@id": "https://xberratagger.com.sg/#organization" }
    },
    {
      "@type": "WebPage",
      "@id": "https://xberratagger.com.sg/annual-return-filing-acra-singapore#webpage",
      "url": "https://xberratagger.com.sg/annual-return-filing-acra-singapore",
      "name": "Annual Return Filing ACRA Singapore | Fast & Compliant Filing Services | Xberra Tagger",
      "description": "File your Annual Return in Singapore with ACRA compliance. Avoid penalties with expert filing, XBRL support, and timely submission.",
      "isPartOf": { "@id": "https://xberratagger.com.sg/#website" },
      "about": { "@id": "https://xberratagger.com.sg/#organization" },
      "breadcrumb": { "@id": "https://xberratagger.com.sg/annual-return-filing-acra-singapore#breadcrumb" },
      "inLanguage": "en-SG"
    },
    {
      "@type": "Article",
      "@id": "https://xberratagger.com.sg/annual-return-filing-acra-singapore#article",
      "headline": "Annual Return Filing Singapore - ACRA Compliance Made Simple",
      "description": "Expert Annual Return filing services in Singapore with full ACRA compliance and XBRL support.",
      "url": "https://xberratagger.com.sg/annual-return-filing-acra-singapore",
      "datePublished": "2026-03-18",
      "dateModified": "2026-03-18",
      "author": { "@id": "https://xberratagger.com.sg/#organization" },
      "publisher": { "@id": "https://xberratagger.com.sg/#organization" },
      "mainEntityOfPage": { "@id": "https://xberratagger.com.sg/annual-return-filing-acra-singapore#webpage" },
      "image": { "@type": "ImageObject", "url": "https://xberratagger.com.sg/assets/img/home-page/xberra-Logo.png" },
      "inLanguage": "en-SG"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://xberratagger.com.sg/annual-return-filing-acra-singapore#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://xberratagger.com.sg/" },
        { "@type": "ListItem", "position": 2, "name": "Annual Return Filing", "item": "https://xberratagger.com.sg/annual-return-filing-acra-singapore" }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://xberratagger.com.sg/annual-return-filing-acra-singapore#service",
      "name": "Annual Return Filing ACRA Singapore",
      "provider": { "@id": "https://xberratagger.com.sg/#organization" },
      "areaServed": { "@type": "Country", "name": "Singapore" },
      "description": "Professional Annual Return filing services in Singapore including ACRA submission, XBRL filing, and compliance management."
    },
    {
      "@type": "FAQPage",
      "@id": "https://xberratagger.com.sg/annual-return-filing-acra-singapore#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is Annual Return filing mandatory in Singapore?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes, all Singapore companies must file Annual Returns with ACRA." }
        },
        {
          "@type": "Question",
          "name": "What is the Annual Return deadline in Singapore?",
          "acceptedAnswer": { "@type": "Answer", "text": "Private companies must file within 7 months after financial year end. Listed companies must file within 5 months." }
        },
        {
          "@type": "Question",
          "name": "Do dormant companies need to file Annual Returns?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes, most dormant companies are required to file unless specifically exempt under ACRA regulations." }
        },
        {
          "@type": "Question",
          "name": "Is XBRL required for Annual Return filing?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes, most companies must submit financial statements in XBRL format as part of their Annual Return." }
        },
        {
          "@type": "Question",
          "name": "What happens if I miss the Annual Return deadline?",
          "acceptedAnswer": { "@type": "Answer", "text": "Late filing penalties apply and may increase over time. Repeated delays can lead to ACRA enforcement action and director liability." }
        }
      ]
    }
  ]
}
';

include 'header.php'; ?>

<?php
$ar_includes = [
    "Company information update",
    "Financial statements submission (XBRL or PDF)",
    "Shareholder and director details",
    "Confirmation of AGM (if applicable)"
];

$filing_steps = [
    [
        "num"   => "01",
        "title" => "Prepare Financial Statements",
        "desc"  => "Ensure your accounts are finalised and comply with Singapore accounting standards (SFRS or SFRS for SE) before proceeding.",
        "tag"   => "FOUNDATION"
    ],
    [
        "num"   => "02",
        "title" => "Hold AGM (If Applicable)",
        "desc"  => "Obtain shareholder approval at the Annual General Meeting. AGM must be completed before the Annual Return can be filed.",
        "tag"   => "PRE-FILING"
    ],
    [
        "num"   => "03",
        "title" => "Prepare XBRL Financials",
        "desc"  => "Convert your financial statements into ACRA-compliant XBRL format. Required for most Singapore-incorporated companies.",
        "tag"   => "MOST CRITICAL"
    ],
    [
        "num"   => "04",
        "title" => "File via BizFile+",
        "desc"  => "Submit your Annual Return online through ACRA's BizFile+ portal, attaching the XBRL file and director-approved PDF.",
        "tag"   => "SUBMISSION"
    ],
    [
        "num"   => "05",
        "title" => "ACRA Review & Acceptance",
        "desc"  => "ACRA validates the filing for compliance. Accepted filings complete your Annual Return. Errors are returned for correction.",
        "tag"   => "FINAL STEP"
    ]
];

$common_mistakes = [
    [
        "title" => "Missing Filing Deadlines",
        "desc"  => "The most common and costly mistake. Late filing triggers immediate financial penalties and may escalate to enforcement.",
        "icon"  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>'
    ],
    [
        "title" => "Incorrect Financial Statements",
        "desc"  => "Submitting financials that do not reconcile with XBRL data or contain accounting errors causes instant rejection.",
        "icon"  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="9" y1="15" x2="15" y2="15"/></svg>'
    ],
    [
        "title" => "Not Completing AGM First",
        "desc"  => "Filing the Annual Return before holding the required AGM results in rejection and must be rectified before resubmission.",
        "icon"  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>'
    ],
    [
        "title" => "Wrong XBRL Format",
        "desc"  => "Applying Simplified XBRL when Full XBRL is required (or vice versa) triggers immediate rejection from ACRA's BizFinx system.",
        "icon"  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>'
    ],
    [
        "title" => "Outdated Company Information",
        "desc"  => "Director, shareholder, or registered address details that do not match ACRA records cause compliance failures.",
        "icon"  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>'
    ]
];

$our_services = [
    "Complete Annual Return preparation",
    "XBRL financial statement filing",
    "AGM coordination support",
    "Compliance review before submission",
    "Filing via BizFile+"
];

$pricing_plans = [
    [
        "title" => "Basic AR Filing",
        "desc"  => "Annual Return preparation and BizFile+ submission for simple companies without XBRL requirements.",
        
        "dark" => false,
        "cta"  => "Get Quote"
    ],
    [
        "title" => "AR + XBRL Bundle",
        "desc"  => "Full Annual Return plus XBRL financial statement preparation — the most common package for Singapore SMEs.",
        
        "dark" => true,
        "cta"  => "Get Quote"
    ],
    [
        "title" => "Full Compliance Package",
        "desc"  => "End-to-end compliance — accounting, Annual Return, and XBRL handled together for complete peace of mind.",
       
        "dark" => false,
        "cta"  => "Get Quote"
    ]
];

$why_choose = [
    [
        "title" => "Trusted Expertise",
        "text"  => "Deep knowledge of ACRA requirements and Singapore GAAP, applied on every engagement."
    ],
    [
        "title" => "Transparent Process",
        "text"  => "Full visibility from preparation through to final submission — no black boxes, no surprises."
    ],
    [
        "title" => "Future Ready",
        "text"  => "Built to adapt seamlessly to evolving ACRA digital standards and taxonomy updates."
    ],
    [
        "title" => "Customer Centric",
        "text"  => "Dedicated support for bookkeepers, accountants, and corporate secretaries alike."
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
        --text-on-dark: rgba(255,255,255,0.92);
        --text-on-dark-muted: rgba(255,255,255,0.7);
    }

    html { font-size: 16px; }
    @media (max-width: 768px) { html { font-size: 14px; } }

    .text-primary-red { color: var(--primary-red); }
    .bg-light-custom { background-color: var(--light-bg); }
    .text-white-70 { color: rgba(255,255,255,0.7); }

    .breadcrumb-custom { margin-bottom: 20px; list-style: none; padding: 0; display: flex; flex-wrap: wrap; }
    .breadcrumb-custom li { display: inline-flex; align-items: center; }
    .breadcrumb-custom a { color: rgba(255,255,255,0.6); text-decoration: none; transition: color 0.2s; font-size: clamp(0.8rem, 2vw, 0.9rem); }
    .breadcrumb-custom a:hover { color: white; }
    .breadcrumb-custom li+li:before { content: "›"; color: rgba(255,255,255,0.4); margin: 0 8px; }
    .breadcrumb-custom span { color: white; font-size: clamp(0.8rem, 2vw, 0.9rem); }

    .hero-section { background: #1F2853; padding: 10rem 0 3rem; position: relative; }
    @media (max-width: 768px) { .hero-section { padding: 6rem 0 2rem; } }

    .banner-title { font-size: clamp(2rem, 5vw, 3rem); font-weight: 700; letter-spacing: -0.02em; line-height: 1.2; color: #fff; }
    .banner-title span { font-size: clamp(2rem, 5vw, 3rem); font-weight: 700; }
    .lead { font-size: clamp(1rem, 2.5vw, 1.25rem); font-weight: 400; line-height: 1.7; }
    .hero-desc { max-width: 540px; font-size: 1.05rem; line-height: 1.7; }

    .stat-card { background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); border-radius: 20px; padding: 22px 18px; text-align: center; backdrop-filter: blur(4px); transition: transform 0.2s ease, background 0.2s ease; animation: scaleIn 0.5s ease-out; }
    .stat-card:hover { background: rgba(255,255,255,0.15); transform: translateY(-4px); }
    .stat-number { font-size: clamp(1.8rem, 4vw, 2.25rem); font-weight: 700; color: white; line-height: 1.2; }
    .stat-label { color: rgba(255,255,255,0.7); font-size: clamp(0.7rem, 1.5vw, 0.75rem); text-transform: uppercase; letter-spacing: 0.5px; margin-top: 5px; font-weight: 500; }

    .mini-badge { display: inline-block; color: var(--primary-red); font-size: clamp(0.7rem, 1.5vw, 0.8rem); font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 15px; background: rgba(220,38,38,0.05); padding: 6px 16px; border-radius: 40px; }
    .mini-badge span { margin-right: 4px; font-size: 1rem; }

    .section-title { font-size: clamp(1.8rem, 4vw, 2.5rem); font-weight: 700; color: #1F2853; margin-bottom: 15px; line-height: 1.2; }

    .icon-wrapper { display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; background: rgba(220,38,38,0.05); border-radius: 12px; margin-bottom: 1rem; }
    .icon-wrapper svg { width: 24px; height: 24px; stroke: #000000; fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
    .dark .icon-wrapper { background: rgba(255,255,255,0.1); }
    .dark .icon-wrapper svg { stroke: white; }

    /* Bento Grid */
    .bento-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; }
    .bento-grid .wide-2 { grid-column: span 2; }
    .bento-grid .wide-3 { grid-column: span 3; }
    .bento-grid .wide-4 { grid-column: span 4; }
    @media (max-width: 768px) { .bento-grid { grid-template-columns: repeat(2, 1fr); } .bento-grid .wide-2, .bento-grid .wide-3, .bento-grid .wide-4 { grid-column: span 2; } }
    @media (max-width: 480px) { .bento-grid { grid-template-columns: 1fr; } .bento-grid .wide-2, .bento-grid .wide-3, .bento-grid .wide-4 { grid-column: span 1; } }

    .bento-card { background: white; border-radius: 24px; padding: 1.75rem; border: 1px solid var(--border-color); transition: all 0.35s ease; height: 100%; position: relative; overflow: hidden; animation: fadeInUp 0.6s ease-out; animation-fill-mode: both; }
    .bento-card:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(0,0,0,0.12); }
    .bento-card.dark { background: #1f2853; border-color: #1f2853; }
    .bento-card.dark h3, .bento-card.dark p { color: var(--text-on-dark); }
    .bento-card.dark p { opacity: 0.8; color: var(--text-on-dark-muted); }
    .bento-card h3 { font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; color: #1f2853; }
    .bento-card p { font-size: 0.9rem; color: var(--muted); line-height: 1.6; }
    .bento-card .icon-wrapper { transition: all 0.35s ease; }
    .bento-card:hover .icon-wrapper { transform: scale(1.15) rotate(5deg); }
    .bento-card:hover::after { opacity: 1; }
    .bento-grid .bento-card:nth-child(1) { animation-delay: 0.1s; }
    .bento-grid .bento-card:nth-child(2) { animation-delay: 0.2s; }
    .bento-grid .bento-card:nth-child(3) { animation-delay: 0.3s; }
    .bento-grid .bento-card:nth-child(4) { animation-delay: 0.4s; }
    .bento-grid .bento-card:nth-child(5) { animation-delay: 0.5s; }

    /* Hero Info Card */
    .hero-info-card { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.15); backdrop-filter: blur(10px); border-radius: 28px; padding: 36px 32px; color: white; max-width: 420px; margin-left: auto; box-shadow: 0 20px 40px rgba(0,0,0,0.35); animation: floatCard 6s ease-in-out infinite; }
    @keyframes floatCard { 0%,100% { transform: translateY(0px); } 50% { transform: translateY(-15px); } }
    .hero-info-card .card-label { font-size: 12px; letter-spacing: .15em; text-transform: uppercase; color: rgba(255,255,255,0.5); margin-bottom: 10px; }
    .hero-info-card .card-heading { font-size: 22px; font-weight: 700; margin-bottom: 18px; }
    .info-row { display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid rgba(255,255,255,0.08); }
    .info-row:last-child { border-bottom: none; }
    .info-row span { color: rgba(255,255,255,0.65); font-size: 14px; }
    .info-row strong { font-size: 14px; color: #ffffff; }
    .pricing-divider { height: 1px; background: rgba(255,255,255,0.12); margin: 20px 0; }
    .pricing-btn { display: block; text-align: center; background: linear-gradient(90deg, #10b981, #059669); padding: 12px; border-radius: 40px; font-size: 13px; font-weight: 600; letter-spacing: .05em; color: white; text-decoration: none; transition: 0.3s !important; }
    .pricing-btn:hover { transform: translateY(-2px); background: linear-gradient(90deg, #059669, #047857); color: white; text-decoration: none; }

    /* ACRA Def Box */
    .acra-def-box { background: var(--dark-navy); border-radius: 18px; padding: 1.75rem; color: white; }
    .acra-def-label { font-size: 0.68rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.12em; color: rgba(255,255,255,0.3); }
    .acra-def-title { font-size: 1rem; font-weight: 800; margin: 0.5rem 0 1rem; }
    .acra-threshold { display: flex; justify-content: space-between; background: rgba(255,255,255,0.05); border-radius: 10px; padding: 0.85rem 1rem; margin-bottom: 0.5rem; align-items: center; }
    .acra-threshold span:first-child { color: rgba(255,255,255,0.6); font-size: 0.85rem; }
    .acra-threshold span:last-child { color: #ff5f6a; font-weight: 800; font-size: 0.85rem; white-space: nowrap; margin-left: 1rem; }

    /* Steps Grid */
    .steps-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.25rem; }
    @media (max-width: 900px) { .steps-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 480px) { .steps-grid { grid-template-columns: 1fr; } }

    .step-card { background: white; border-radius: 24px; padding: 2rem; border: 1px solid var(--border-color); position: relative; transition: all 0.3s cubic-bezier(0.16,1,0.3,1); box-shadow: var(--card-shadow); overflow: hidden; }
    .step-card:hover { transform: translateY(-6px); box-shadow: var(--card-hover-shadow); border-color: rgba(220,38,38,0.2); }
    .step-card.step-highlight { background: #1F2853; border-color: #1F2853; }
    .step-card.step-red { background: var(--primary-red); border-color: var(--primary-red); }
    .step-num-badge { display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(220,38,38,0.06); border-radius: 12px; font-size: 0.8rem; font-weight: 800; color: var(--primary-red); margin-bottom: 1.25rem; letter-spacing: 0.5px; }
    .step-card.step-highlight .step-num-badge { background: rgba(255,255,255,0.1); color: white; }
    .step-card.step-red .step-num-badge { background: rgba(255,255,255,0.2); color: white; }
    .step-card h4 { font-size: 1.15rem; font-weight: 700; margin-bottom: 0.65rem; color: #1f2853; line-height: 1.3; }
    .step-card.step-highlight h4, .step-card.step-red h4 { color: white; }
    .step-card p { font-size: 0.88rem; color: var(--muted); line-height: 1.6; margin-bottom: 0; }
    .step-card.step-highlight p { color: rgba(255,255,255,0.75); }
    .step-card.step-red p { color: rgba(255,255,255,0.88); }
    .step-bg-num { position: absolute; bottom: -0.5rem; right: 1rem; font-size: 5rem; font-weight: 800; line-height: 1; color: rgba(0,0,0,0.04); pointer-events: none; user-select: none; }
    .step-card.step-highlight .step-bg-num, .step-card.step-red .step-bg-num { color: rgba(255,255,255,0.07); }
    .step-tag { display: inline-block; font-size: 0.68rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; padding: 4px 10px; border-radius: 20px; margin-top: 0.75rem; background: rgba(220,38,38,0.05); color: var(--primary-red); }
    .step-card.step-highlight .step-tag { background: rgba(255,255,255,0.1); color: rgba(255,255,255,0.7); }
    .step-card.step-red .step-tag { background: rgba(255,255,255,0.2); color: white; }

    /* Challenge Items */
    .challenge-item { display: flex; align-items: flex-start; gap: 1.25rem; padding: 20px 24px; background: white; border-radius: 18px; margin-bottom: 14px; border: 1px solid var(--border-color); transition: all 0.25s ease; box-shadow: var(--card-shadow); animation: fadeInLeft 0.5s ease-out; animation-fill-mode: both; }
    .challenge-item:hover { border-color: var(--primary-red); box-shadow: 0 8px 20px -12px var(--primary-red); transform: translateX(5px); }
    .challenge-item:nth-child(1) { animation-delay: 0.1s; }
    .challenge-item:nth-child(2) { animation-delay: 0.2s; }
    .challenge-item:nth-child(3) { animation-delay: 0.3s; }
    .challenge-item:nth-child(4) { animation-delay: 0.4s; }
    .challenge-item:nth-child(5) { animation-delay: 0.5s; }
    .challenge-icon { width: 44px; height: 44px; background: rgba(220,38,38,0.06); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
    .challenge-icon svg { width: 22px; height: 22px; stroke: var(--primary-red); fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
    .challenge-item h5 { font-size: 1rem; font-weight: 700; color: #1f2853; margin-bottom: 0.3rem; }
    .challenge-item p { font-size: 0.88rem; color: var(--muted); line-height: 1.5; margin-bottom: 0; }

    /* Required Items */
    .required-item { display: flex; align-items: center; justify-content: space-between; padding: 18px 26px; background: white; border-radius: 60px; margin-bottom: 14px; border: 1px solid var(--border-color); transition: all 0.2s ease; box-shadow: var(--card-shadow); animation: fadeInLeft 0.5s ease-out; animation-fill-mode: both; }
    .required-item:hover { border-color: var(--primary-red); box-shadow: 0 8px 20px -12px var(--primary-red); padding-left: 30px; transform: translateX(5px); }
    .required-badge { color: var(--primary-red); font-size: clamp(0.7rem, 1.5vw, 0.75rem); font-weight: 700; text-transform: uppercase; background: rgba(220,38,38,0.04); padding: 6px 14px; border-radius: 40px; white-space: nowrap; }
    .number-circle { width: 36px; height: 36px; background: #0f172a; color: #fff; font-size: 14px; font-weight: 700; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }

    /* Comparison Table */
    .comparison-table { width: 100%; border-collapse: collapse; border-radius: 16px; overflow: hidden; box-shadow: var(--card-shadow); }
    .comparison-table th { background: #1f2853; color: white; padding: 16px 20px; text-align: left; font-weight: 600; font-size: 0.9rem; }
    .comparison-table td { padding: 14px 20px; border-bottom: 1px solid var(--border-color); font-size: 0.9rem; background: white; }
    .comparison-table tr:last-child td { border-bottom: none; }
    .comparison-table tr:hover td { background: #f8fafc; }
    .comparison-table td:first-child { font-weight: 600; color: #1f2853; width: 160px; }

    /* Timeline Strip */
    .timeline-strip { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; }
    @media (max-width: 768px) { .timeline-strip { grid-template-columns: 1fr; } }
    .timeline-card { background: white; border-radius: 20px; padding: 1.75rem; border: 1px solid var(--border-color); transition: all 0.3s ease; box-shadow: var(--card-shadow); }
    .timeline-card:hover { transform: translateY(-4px); box-shadow: var(--card-hover-shadow); border-color: rgba(220,38,38,0.2); }
    .timeline-card.tc-dark { background: #1f2853; border-color: #1f2853; }
    .timeline-card.tc-red { background: var(--primary-red); border-color: var(--primary-red); }
    .timeline-card .tc-label { font-size: 0.72rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; color: var(--primary-red); margin-bottom: 0.75rem; }
    .timeline-card.tc-dark .tc-label { color: rgba(255,255,255,0.5); }
    .timeline-card.tc-red .tc-label { color: rgba(255,255,255,0.75); }
    .timeline-card h3 { font-size: 1.1rem; font-weight: 700; color: #1f2853; margin-bottom: 0.5rem; }
    .timeline-card.tc-dark h3 { color: white; }
    .timeline-card.tc-red h3 { color: white; }
    .timeline-card p { font-size: 0.88rem; color: var(--muted); line-height: 1.6; margin-bottom: 0; }
    .timeline-card.tc-dark p { color: rgba(255,255,255,0.7); }
    .timeline-card.tc-red p { color: rgba(255,255,255,0.88); }
    .timeline-big { font-size: 2.5rem; font-weight: 800; color: white; line-height: 1; margin-bottom: 0.25rem; }

    /* Pricing Cards */
    .pricing-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.25rem; }
    @media (max-width: 900px) { .pricing-grid { grid-template-columns: 1fr; } }

    .pricing-card { background: white; border-radius: 24px; padding: 2rem; border: 1px solid var(--border-color); display: flex; flex-direction: column; transition: all 0.3s cubic-bezier(0.16,1,0.3,1); box-shadow: var(--card-shadow); }
    .pricing-card:hover { transform: translateY(-6px); box-shadow: var(--card-hover-shadow); border-color: rgba(220,38,38,0.2); }
    .pricing-card.pricing-dark { background: #1f2853; border-color: #1f2853; }
    .pricing-card.pricing-dark:hover { border-color: rgba(255,255,255,0.15); }
    .pricing-card-label { font-size: 0.72rem; font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase; color: var(--primary-red); margin-bottom: 0.75rem; }
    .pricing-card.pricing-dark .pricing-card-label { color: rgba(255,255,255,0.45); }
    .pricing-card-title { font-size: 1.35rem; font-weight: 700; color: #1f2853; margin-bottom: 0.65rem; }
    .pricing-card.pricing-dark .pricing-card-title { color: white; }
    .pricing-card-desc { font-size: 0.88rem; color: var(--muted); line-height: 1.6; margin-bottom: 1.25rem; flex: 1; }
    .pricing-card.pricing-dark .pricing-card-desc { color: rgba(255,255,255,0.7); }
    .pricing-feature-list { list-style: none; padding: 0; margin: 0 0 1.5rem; }
    .pricing-feature-list li { position: relative; padding-left: 24px; margin-bottom: 10px; font-size: 0.85rem; color: #374151; }
    .pricing-feature-list li::before { content: "✓"; position: absolute; left: 0; color: #22c55e; font-weight: 700; }
    .pricing-card.pricing-dark .pricing-feature-list li { color: rgba(255,255,255,0.8); }
    .pricing-divider-line { height: 1px; background: var(--border-color); margin: 1.25rem 0; }
    .pricing-card.pricing-dark .pricing-divider-line { background: rgba(255,255,255,0.1); }
    .pricing-cta { display: block; text-align: center; background: var(--primary-red); color: white; padding: 13px 24px; border-radius: 50px; font-weight: 600; font-size: 0.9rem; text-decoration: none; transition: all 0.3s ease !important; box-shadow: 0 8px 18px -8px rgba(220,38,38,0.4); }
    .pricing-cta:hover { background: #b91c1c; transform: translateY(-2px); box-shadow: 0 12px 22px -8px rgba(220,38,38,0.5); color: white; text-decoration: none; }
    .pricing-cta-outline { display: block; text-align: center; border: 2px solid rgba(255,255,255,0.25); color: white; padding: 13px 24px; border-radius: 50px; font-weight: 600; font-size: 0.9rem; text-decoration: none; transition: all 0.3s ease !important; background: transparent; }
    .pricing-cta-outline:hover { background: rgba(255,255,255,0.1); color: white; text-decoration: none; transform: translateY(-2px); }

    /* Right XBRL Card */
    .xbrl-card { background: #1f2853; color: #fff; padding: 32px; border-radius: 24px; box-shadow: 0 20px 35px rgba(0,0,0,0.2); }
    .card-small-title { font-size: 12px; letter-spacing: 1px; color: #8aa0c8; margin-bottom: 12px; text-transform: uppercase; }
    .card-title-white { font-size: 22px; font-weight: 700; margin-bottom: 24px; line-height: 1.4; color: white; }
    .feature-list { list-style: none; padding: 0; margin-bottom: 30px; }
    .feature-list li { position: relative; padding-left: 28px; margin-bottom: 16px; color: #cbd5e1; font-size: 15px; }
    .feature-list li::before { content: "✓"; position: absolute; left: 0; color: #22c55e; font-weight: bold; font-size: 16px; }
    .trial-btn { display: inline-block; background: #e11d2e; color: #fff; padding: 14px 28px; border-radius: 50px; font-weight: 600; text-decoration: none; transition: all 0.3s ease !important; width: 100%; text-align: center; font-size: 16px; }
    .trial-btn:hover { background: #c81422; transform: translateY(-2px); box-shadow: 0 10px 20px rgba(225,29,46,0.3); color: #fff; text-decoration: none; }

    /* Content Card */
    .content-card { background: white; border: 1px solid rgba(226,232,240,0.6); border-radius: 24px; padding: 28px 24px; height: 100%; transition: all 0.3s cubic-bezier(0.16,1,0.3,1); box-shadow: var(--card-shadow); }
    .content-card:hover { box-shadow: var(--card-hover-shadow); border-color: rgba(220,38,38,0.15); transform: translateY(-6px) scale(1.01); }
    .content-card:hover h5 { color: var(--primary-red); }
    .content-card h5 { font-size: clamp(1.1rem, 2vw, 1.25rem); font-weight: 700; margin-bottom: 1rem; color: #1f2853; transition: color 0.2s; }
    .content-card p { font-size: clamp(0.85rem, 1.5vw, 0.95rem); line-height: 1.6; color: var(--muted); }

    .testimonial-avatar { width: 44px; height: 44px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 1rem; color: white; flex-shrink: 0; }

    /* Trust Strip */
    .trust-strip { display: flex; gap: 1.5rem; flex-wrap: wrap; justify-content: center; padding: 2rem 0; border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color); }
    .trust-badge { display: flex; align-items: center; gap: 0.6rem; padding: 0.75rem 1.25rem; border: 1.5px solid var(--border-color); border-radius: 100px; background: white; transition: all 0.2s ease; }
    .trust-badge:hover { border-color: var(--primary-red); transform: translateY(-2px); box-shadow: var(--card-hover-shadow); }
    .trust-badge svg { width: 20px; height: 20px; stroke: var(--primary-red); stroke-width: 1.8; fill: none; }
    .trust-badge span:last-child { font-weight: 600; color: #1f2853; font-size: 0.85rem; }

    .btn-primary-red { background-color: var(--primary-red); color: white; padding: 14px 36px; border-radius: 60px; font-weight: 600; border: none; transition: all 0.3s ease !important; box-shadow: 0 10px 20px -10px var(--primary-red); letter-spacing: 0.3px; font-size: clamp(0.9rem, 2vw, 1rem); display: inline-block; text-decoration: none; }
    .btn-primary-red:hover { background-color: #b91c1c; color: white; transform: translateY(-2px); box-shadow: 0 15px 25px -10px #b91c1c; text-decoration: none; }
    .btn-outline-navy { border: 2px solid var(--dark-navy); color: var(--dark-navy); padding: 14px 36px; border-radius: 60px; font-weight: 600; background: transparent; transition: all 0.3s ease !important; font-size: clamp(0.9rem, 2vw, 1rem); display: inline-block; text-decoration: none; }
    .btn-outline-navy:hover { background-color: var(--dark-navy); color: white; transform: translateY(-2px); border-color: var(--dark-navy); box-shadow: 0 12px 22px -12px var(--dark-navy); text-decoration: none; }

    .bg-blue { background-color: #1F2853; }
    .rounded-5 { border-radius: 2rem; }
    .cta-title { font-size: clamp(1.8rem, 4vw, 2.8rem); font-weight: 700; line-height: 1.2; }
    .cta-desc { font-size: clamp(0.9rem, 2vw, 1.1rem); line-height: 1.6; opacity: 0.9; }

    @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes fadeInLeft { from { opacity: 0; transform: translateX(-20px); } to { opacity: 1; transform: translateX(0); } }
    @keyframes scaleIn { from { opacity: 0; transform: scale(0.9); } to { opacity: 1; transform: scale(1); } }

    a, button, .btn-primary-red, .btn-outline-navy, .trial-btn, .pricing-btn, .pricing-cta, .pricing-cta-outline { transition: all 0.3s cubic-bezier(0.16,1,0.3,1) !important; }

    @media (max-width: 991px) {
        .hero-info-card { max-width: 100%; margin: 30px auto 0; }
        .col-lg-8, .col-lg-4, .col-lg-6 { margin-bottom: 1.5rem; }
        .col-lg-8:last-child, .col-lg-4:last-child, .col-lg-6:last-child { margin-bottom: 0; }
    }
    @media (max-width: 768px) {
        .hero-info-card { margin-top: 2rem; padding: 24px 20px; animation: none !important; transform: none !important; }
        .bento-grid { grid-template-columns: 1fr !important; gap: 1rem; }
        .bento-grid .wide-2, .bento-grid .wide-3, .bento-grid .wide-4 { grid-column: span 1 !important; }
        .bento-card { padding: 1.5rem; }
        .steps-grid, .pricing-grid { grid-template-columns: 1fr; }
        .timeline-strip { grid-template-columns: 1fr; }
        .challenge-item { padding: 16px 18px; flex-wrap: wrap; gap: 0.75rem; }
        .required-item { padding: 14px 18px; flex-direction: column; align-items: flex-start; gap: 10px; }
        .required-item .d-flex { width: 100%; }
        .required-badge { align-self: center; }
        .trust-strip { gap: 0.75rem; padding: 1.5rem 0; }
        .trust-badge { padding: 0.5rem 1rem; width: calc(50% - 0.75rem); margin: 0; }
        .trust-badge svg { width: 16px; height: 16px; }
        .trust-badge span:last-child { font-size: 0.75rem; }
        .comparison-table th, .comparison-table td { padding: 10px 12px; font-size: 0.8rem; }
        .comparison-table td:first-child { width: auto; }
        .bg-blue { padding: 2rem 1.5rem !important; }
        .cta-title { font-size: 1.8rem; }
        .btn-primary-red, .btn-outline-navy { padding: 12px 24px; width: 100%; text-align: center; }
        .d-flex.gap-3 { flex-direction: column; gap: 0.75rem !important; }
        .section-title { font-size: 1.8rem; }
        .lead { font-size: 1rem; }
        .mini-badge { font-size: 0.7rem; padding: 4px 12px; }
        section.py-5, .py-5 { padding-top: 2rem !important; padding-bottom: 2rem !important; }
        .mb-5 { margin-bottom: 2rem !important; }
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
        .hero-info-card .card-heading { font-size: 18px; }
        .info-row span, .info-row strong { font-size: 12px; }
        .bento-card h3 { font-size: 1.1rem; }
        .bento-card p { font-size: 0.85rem; }
        .xbrl-card { padding: 24px; }
        .trust-badge { width: 100%; }
        .cta-title { font-size: 1.5rem; }
        p, h1, h2, h3, h4, h5, h6 { word-wrap: break-word; overflow-wrap: break-word; }
    }
    @media (max-width: 768px) {
    [style*="grid-template-columns: repeat(3, 1fr)"] {
        grid-template-columns: 1fr !important;
    }
}
/* Section titles */
.section-title {
    font-size: 2.5rem; /* default >1400px */
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

/* Banner / hero title */
.banner-title,
.banner-title span {
    font-size: 3rem; /* default >1400px */
}

@media (max-width: 1400px) and (min-width: 1251px) {
    .banner-title, .banner-title span { font-size: 2.4rem; }
}

@media (max-width: 1250px) {
    .banner-title, .banner-title span { font-size: clamp(1.5rem, 3.5vw, 2.2rem); }
}

/* Lead / body text */
.lead {
    font-size: 1.25rem; /* default >1400px */
}

@media (max-width: 1400px) and (min-width: 1251px) {
    .lead { font-size: 1.1rem; }
}

@media (max-width: 1250px) {
    .lead { font-size: clamp(0.9rem, 1.8vw, 1.05rem); }
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
    .bento-card h3 { font-size: clamp(0.95rem, 1.5vw, 1.1rem); }
}

/* Step cards */
.step-card h4 {
    font-size: 1.15rem;
}

@media (max-width: 1400px) and (min-width: 1251px) {
    .step-card h4 { font-size: 1rem; }
}

@media (max-width: 1250px) {
    .step-card h4 { font-size: clamp(0.88rem, 1.3vw, 1rem); }
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
                    <li><span>Annual Return Filing</span></li>
                </ul>
                <h1 class="banner-title text-white mb-4">
                    Annual Return <span class="text-primary-red">Filing</span><br>
                    Singapore — ACRA Compliance Made Simple
                </h1>
                <p class="text-white-70 hero-desc">
                    Every Singapore company must file an Annual Return with ACRA. Missing deadlines or filing incorrectly leads to penalties, director liability, and compliance risks. We handle your Annual Return filing end-to-end-accurate, on time, and fully compliant with ACRA regulations. 
                </p>
                <div class="row hero-stats mt-4">
                    <div class="col-4">
                        <div class="stat-card">
                            <div class="stat-number">7</div>
                            <div class="stat-label">Months Deadline</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-card">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">Compliance Rate</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-card">
                            <div class="stat-number">0</div>
                            <div class="stat-label">Penalties Incurred</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12 mt-4 mt-lg-0">
                <div class="hero-info-card">
                    <div class="card-label">ACRA Quick Reference</div>
                    <div class="card-heading">Annual Return at a Glance</div>
                    <div class="info-row">
                        <span>Private Companies</span>
                        <strong>7 months after FYE</strong>
                    </div>
                    <div class="info-row">
                        <span>Listed Companies</span>
                        <strong>5 months after FYE</strong>
                    </div>
                    <div class="info-row">
                        <span>XBRL Required</span>
                        <strong>Yes (most companies)</strong>
                    </div>
                    <div class="info-row">
                        <span>Submission Portal</span>
                        <strong>BizFile+</strong>
                    </div>
                    <div class="info-row">
                        <span>Late Filing</span>
                        <strong>Penalties + Director Liability</strong>
                    </div>
                    <div class="pricing-divider"></div>
                    <a href="./xbrl-filing-services-contact-singapore" class="pricing-btn">
                        Get Started — Free Consultation
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-5 bg-light-custom">
    <div class="container">

        <!-- What is an Annual Return -->
        <div class="row align-items-start mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="mini-badge"><span>✦</span> OVERVIEW</div>
                <h2 class="section-title mt-2">What is an Annual Return in Singapore?</h2>
                <p class="lead text-dark-navy">
                    An Annual Return (AR) is a mandatory filing submitted to ACRA that confirms your company's financial position, shareholder details, company structure, and compliance status. It ensures your company remains legally active in Singapore.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="acra-def-box">
                    <div class="acra-def-label">ANNUAL RETURN INCLUDES</div>
                    <div class="acra-def-title">What is confirmed in your AR:</div>
                    <?php foreach ($ar_includes as $item): ?>
                        <div class="acra-threshold">
                            <span><?php echo $item; ?></span>
                            <span>✓ REQUIRED</span>
                        </div>
                    <?php endforeach; ?>
                    <div style="background: rgba(220,38,38,0.12); border-radius: 10px; padding: 0.85rem 1rem; margin-top: 0.75rem;">
                        <span style="color: rgba(255,255,255,0.75); font-size: 0.83rem;">XBRL filing is required alongside most Annual Return submissions.</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Who Needs to File -->
        <div class="mb-5">
            <div class="mini-badge"><span>✦</span> APPLICABILITY</div>
            <h2 class="section-title mt-2">Who Needs to File Annual Returns?</h2>
            <p class="mb-4 lead">All Singapore-incorporated companies must file Annual Returns — even those not actively trading.</p>

            <div class="bento-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem;">
                <div class="bento-card wide-2" style="grid-column: span 2; background: #1F2853; border: none; padding: 2rem; border-radius: 24px;">
                    <div style="display: flex; flex-direction: column; height: 100%;">
                        <span style="color: #dc2626; font-size: 0.8rem; font-weight: 600; letter-spacing: 0.5px; margin-bottom: 1rem;">ALL SG COMPANIES</span>
                        <h3 style="color: white; font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem;">Private Limited Companies</h3>
                        <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">All Singapore-incorporated private limited companies must file Annual Returns with ACRA annually, regardless of trading status.</p>
                    </div>
                </div>
                <div class="bento-card" style="background: #f8fafc; border: 1px solid #e2e8f0; padding: 2rem; border-radius: 24px;">
                    <div style="display: flex; flex-direction: column; height: 100%;">
                        <span style="color: #dc2626; font-size: 0.8rem; font-weight: 600; letter-spacing: 0.5px; margin-bottom: 1rem;">EXEMPT PRIVATE</span>
                        <h3 style="color: #0a1a2f; font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Exempt Private Companies</h3>
                        <p style="color: #4b5563; font-size: 0.85rem; line-height: 1.5; margin-bottom: 0;">EPCs are required to file Annual Returns but may have simplified financial statement requirements under ACRA rules.</p>
                    </div>
                </div>
                <div class="bento-card" style="background: #f8fafc; border: 1px solid #e2e8f0; padding: 2rem; border-radius: 24px;">
                    <div style="display: flex; flex-direction: column; height: 100%;">
                        <span style="color: #dc2626; font-size: 0.8rem; font-weight: 600; letter-spacing: 0.5px; margin-bottom: 1rem;">DORMANT</span>
                        <h3 style="color: #0a1a2f; font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Dormant Companies</h3>
                        <p style="color: #4b5563; font-size: 0.85rem; line-height: 1.5; margin-bottom: 0;">Most dormant companies must still file Annual Returns unless meeting specific ACRA exemption criteria.</p>
                    </div>
                </div>
                <div class="bento-card wide-3" style="grid-column: span 3; background: #dc2626; border: none; padding: 2rem; border-radius: 24px;">
                    <div style="display: flex; flex-direction: column; height: 100%;">
                        <p style="color: white; font-size: 1.2rem; font-weight: 500; line-height: 1.5; margin-bottom: 1.5rem; max-width: 85%;">
                            "Even if your company is not actively trading, Annual Return filing may still be required. Non-filing is never a safe assumption."
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="color: white; font-size: 1.5rem; font-weight: 700;">Xberra Tagger</span>
                            <span style="color: rgba(255,255,255,0.5); font-size: 0.9rem; letter-spacing: 2px;">✦</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deadlines -->
        <div class="mb-5">
            <div class="mini-badge"><span>✦</span> DEADLINES</div>
            <h2 class="section-title mt-2">Annual Return Filing Deadline</h2>
            <p class="mb-4 lead">Your filing deadline depends on your company type. Late filing results in penalties and possible ACRA enforcement actions.</p>

            <div class="timeline-strip">
                <div class="timeline-card tc-dark">
                    <div class="tc-label">PRIVATE COMPANIES</div>
                    <div class="timeline-big">7</div>
                    <h3>months after FYE</h3>
                    <p>Private companies must file their Annual Return within seven months of their financial year-end. This includes XBRL submission via BizFile+.</p>
                </div>
                <div class="timeline-card tc-dark">
                    <div class="tc-label">LISTED COMPANIES</div>
                    <div class="timeline-big">5</div>
                    <h3>months after FYE</h3>
                    <p>Listed companies have a tighter five-month window. XBRL financial statements must be included with the Annual Return filing.</p>
                </div>
                <div class="timeline-card tc-red">
                    <div class="tc-label">LATE FILING CONSEQUENCES</div>
                    <h3>Penalties + Director Liability</h3>
                    <p>Late filing triggers financial penalties that increase over time. Repeated non-compliance can lead to prosecution of company directors under the Companies Act.</p>
                </div>
            </div>
        </div>

        <!-- AGM vs Annual Return Comparison -->
        <div class="mb-5">
            <div class="mini-badge"><span>✦</span> KEY DISTINCTION</div>
            <h2 class="section-title mt-2">AGM vs Annual Return — What's the Difference?</h2>
            <p class="mb-4 lead">These are two separate obligations. The AGM must be completed before the Annual Return can be filed.</p>

            <div style="overflow-x: auto;">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Aspect</th>
                            <th>AGM</th>
                            <th>Annual Return</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Purpose</td>
                            <td>Shareholder meeting to approve financial statements</td>
                            <td>Regulatory filing confirming company status</td>
                        </tr>
                        <tr>
                            <td>Required</td>
                            <td>Usually yes (unless AGM exemption applies)</td>
                            <td>Always — no exemption for active companies</td>
                        </tr>
                        <tr>
                            <td>Timing</td>
                            <td>Must be held before Annual Return is filed</td>
                            <td>Filed after AGM (within 7 months of FYE)</td>
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
                        You must complete your AGM (if required) <strong>before</strong> filing your Annual Return. Filing the AR without holding the AGM first will result in rejection.
                    </p>
                </div>
            </div>
        </div>

        <!-- Filing Process + Right Card -->
        <div class="row align-items-start mb-5">
            <div class="col-lg-12">
                <div class="mini-badge"><span>✦</span> FILING PROCESS</div>
                <h2 class="section-title mt-2">Step-by-Step Annual Return Filing Process</h2>
                <p class="mb-4 lead">Follow these five steps to complete your Annual Return accurately and on time.</p>
                <div class="steps-grid">
                    <?php foreach ($filing_steps as $i => $step):
                        $is_highlight = ($i === 2);
                        $is_red = ($i === 4);
                        $cls = $is_highlight ? 'step-highlight' : ($is_red ? 'step-red' : '');
                    ?>
                        <div class="step-card <?php echo $cls; ?>">
                            <div class="step-num-badge"><?php echo $step['num']; ?></div>
                            <h4><?php echo $step['title']; ?></h4>
                            <p><?php echo $step['desc']; ?></p>
                            <span class="step-tag"><?php echo $step['tag']; ?></span>
                            <!-- <div class="step-bg-num"><?php echo $step['num']; ?></div> -->
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
        </div>

        <!-- Common Mistakes -->
        <div class="mb-5">
            <div class="mini-badge"><span>✦</span> COMMON MISTAKES</div>
            <h2 class="section-title mt-2">Common Mistakes in Annual Return Filing</h2>
            <p class="mb-4 lead">These errors result in rejection or ACRA penalties — know them before you file.</p>
            <div>
                <?php foreach ($common_mistakes as $m): ?>
                    <div class="challenge-item">
                        <div class="challenge-icon">
                            <?php echo str_replace('stroke="currentColor"', 'stroke="var(--primary-red)"', $m['icon']); ?>
                        </div>
                        <div>
                            <h5><?php echo $m['title']; ?></h5>
                            <p><?php echo $m['desc']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Penalties for Late Filing -->
<div class="mb-5">
    <div class="mini-badge"><span>⚠</span> PENALTIES</div>
    <h2 class="section-title mt-2">Penalties for Late Filing</h2>
    <p class="mb-4 lead">ACRA imposes escalating consequences for companies that miss Annual Return deadlines. The longer you delay, the greater the liability.</p>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 1.25rem;">
        <!-- Monetary Fines -->
        <div class="bento-card dark">
            <div class="icon-wrapper dark">
                <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="1" x2="12" y2="23"/>
                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                </svg>
            </div>
            <h3 style="color:white;">Monetary Fines</h3>
            <p style="color:rgba(255,255,255,0.7);">Financial penalties are imposed immediately for late Annual Return submissions. Fines apply per director and per company, compounding your exposure.</p>
        </div>

        <!-- Escalating Penalties -->
        <div class="bento-card">
            <div class="icon-wrapper">
                <svg viewBox="0 0 24 24" fill="none" stroke="var(--primary-red)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                </svg>
            </div>
            <h3>Escalating Penalties</h3>
            <p>Each additional period of non-compliance increases the penalty amount. Repeated delays are treated as continuing offences, with fines growing significantly over time.</p>
        </div>

        <!-- Director Prosecution -->
        <div class="bento-card" style="background: var(--primary-red); border-color: var(--primary-red);">
            <div class="icon-wrapper" style="background: rgba(255,255,255,0.18);">
                <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
            </div>
            <h3 style="color:white;">Director Prosecution</h3>
            <p style="color:rgba(255,255,255,0.88);">ACRA may commence prosecution against company directors under the Companies Act. Directors found guilty face personal criminal liability beyond financial penalties.</p>
        </div>
    </div>

    <!-- Impact notice -->
    <div class="bento-card" style="background: white; border-left: 4px solid var(--primary-red);">
        <div class="d-flex align-items-center gap-3">
            <div style="width: 36px; height: 36px; flex-shrink: 0;">
                <svg viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="12" y1="8" x2="12" y2="12"/>
                    <line x1="12" y1="16" x2="12.01" y2="16"/>
                </svg>
            </div>
            <p style="color: #1f2853; font-size: 1rem; font-weight: 500; margin-bottom: 0;">
                Non-compliance affects your company's <strong>legal standing, creditworthiness, and corporate reputation</strong> — all of which carry long-term business consequences beyond the immediate fines.
            </p>
        </div>
    </div>
</div>

        <!-- Why Outsource + Our Services -->
        <div class="mb-5">
            <div class="mini-badge"><span>✦</span> WHY OUTSOURCE</div>
            <h2 class="section-title mt-2">Why Outsource Annual Return Filing?</h2>
            <p class="mb-4 lead">Most companies choose to outsource because the compliance overhead — XBRL, AGM coordination, BizFile+ submission — is significant.</p>

            <div class="bento-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem;">
                <?php
                $outsource = [
                    ["title" => "Saves Time", "desc" => "Removes the burden of XBRL tagging, BizFinx validation, and BizFile+ submission from your internal team entirely.", "icon" => '<svg viewBox="0 0 24 24" fill="none" stroke="var(--primary-red)" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>'],
                    ["title" => "Ensures Compliance", "desc" => "Specialists stay current with ACRA rule changes, XBRL taxonomy updates, and filing requirements so you never fall behind.", "icon" => '<svg viewBox="0 0 24 24" fill="none" stroke="var(--primary-red)" stroke-width="1.8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>'],
                    ["title" => "Reduces Rejection Risk", "desc" => "Professional validation eliminates the XBRL errors and filing inconsistencies that cause ACRA to return submissions.", "icon" => '<svg viewBox="0 0 24 24" fill="none" stroke="var(--primary-red)" stroke-width="1.8"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>'],
                    ["title" => "XBRL + AR Together", "desc" => "AR and XBRL are handled as one integrated process — no coordination gaps, no missed attachments.", "icon" => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2H10a2 2 0 0 0-2 2v2"/><line x1="2" y1="12" x2="22" y2="12"/></svg>']
                ];
                foreach ($outsource as $i => $o):
                    $is_dark = ($i === 3);
                ?>
                    <div class="bento-card<?php echo $is_dark ? ' dark' : ''; ?>">
                        <div class="icon-wrapper<?php echo $is_dark ? ' dark' : ''; ?>">
                            <?php echo $o['icon']; ?>
                        </div>
                        <h3 <?php echo $is_dark ? 'style="color:white;"' : ''; ?>><?php echo $o['title']; ?></h3>
                        <p <?php echo $is_dark ? 'style="color:rgba(255,255,255,0.7);"' : ''; ?>><?php echo $o['desc']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Our Services -->
        <div class="mb-5">
            <div class="mini-badge"><span>✦</span> OUR SERVICES</div>
            <h2 class="section-title mt-2">Our Annual Return Filing Services</h2>
            <p class="mb-4 lead">End-to-end compliance handled for you — from financial statement preparation to ACRA acceptance.</p>

            <div class="row align-items-start">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <?php foreach ($our_services as $i => $svc): ?>
                        <div class="required-item" style="animation-delay: <?php echo ($i * 0.1 + 0.1); ?>s;">
                            <div class="d-flex align-items-center gap-3">
                                <div class="number-circle"><?php echo str_pad($i + 1, 2, "0", STR_PAD_LEFT); ?></div>
                                <span style="font-weight: 500; color: #1f2853;"><?php echo $svc; ?></span>
                            </div>
                            <span class="required-badge">INCLUDED</span>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-5">
                    <div class="bento-card" style="background: #dc2626; border: none; padding: 2rem; height: 100%;">
                        <div style="display: flex; flex-direction: column; height: 100%;">
                            <p style="color: white; font-size: 1.15rem; font-weight: 500; line-height: 1.6; margin-bottom: 1.5rem;">
                                "Avoid penalties and last-minute stress. We handle your Annual Return filing — accurate, compliant, and on time."
                            </p>
                            <div style="margin-top: auto;">
                                <a href="./xbrl-filing-services-contact-singapore" style="display: inline-block; background: white; color: var(--primary-red); padding: 13px 28px; border-radius: 50px; font-weight: 700; font-size: 0.95rem; text-decoration: none; transition: all 0.3s ease !important;">
                                    Get Started Today →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing -->
        <div class="mb-5">
            <div class="mini-badge"><span>✦</span> PRICING</div>
            <h2 class="section-title mt-2">Annual Return Filing Packages</h2>
            <p class="mb-4 lead">Transparent pricing for every company size and filing requirement. All packages include free amendments and guaranteed first-time acceptance.</p>

            <div class="pricing-grid">
                <?php foreach ($pricing_plans as $plan):
                    $cls = $plan['dark'] ? 'pricing-dark' : '';
                ?>
                    <div class="pricing-card <?php echo $cls; ?>">
                        <div class="pricing-card-label"><?php echo $plan['title']; ?></div>
                        <div class="pricing-card-title"><?php echo $plan['title']; ?></div>
                        <div class="pricing-card-desc"><?php echo $plan['desc']; ?></div>
                        <div class="pricing-divider-line"></div>
                        
                        <?php if ($plan['dark']): ?>
                            <a href="./xbrl-filing-services-contact-singapore" class="pricing-cta-outline"><?php echo $plan['cta']; ?></a>
                        <?php else: ?>
                            <a href="./xbrl-filing-services-contact-singapore" class="pricing-cta"><?php echo $plan['cta']; ?></a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
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
                <span>Zero Penalties</span>
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
                    <h2 class="section-title">Questions About Annual Return Filing in Singapore</h2>
                    <p class="lead-text">Answers to the most frequently asked questions about ACRA Annual Return obligations, deadlines, and requirements.</p>
                </div>
                <div style="max-width: 800px; margin: 0 auto;">
                    <div class="faq-accordion">
                        <div class="faq-item">
                            <button class="faq-question" onclick="toggleFAQ(event, this)">Is Annual Return filing mandatory in Singapore? <span class="faq-arrow">▼</span></button>
                            <div class="faq-answer">Yes, all companies must file Annual Returns with ACRA.</div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question" onclick="toggleFAQ(event, this)">What happens if I miss the Annual Return deadline? <span class="faq-arrow">▼</span></button>
                            <div class="faq-answer">Late filing penalties will apply, and repeated delays may lead to enforcement action.</div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question" onclick="toggleFAQ(event, this)">Do dormant companies need to file Annual Returns? <span class="faq-arrow">▼</span></button>
                            <div class="faq-answer">Yes, in most cases, unless exempt.</div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question" onclick="toggleFAQ(event, this)">Is XBRL required for Annual Return filing? <span class="faq-arrow">▼</span></button>
                            <div class="faq-answer">Yes, most companies must submit financial statements in XBRL format..</div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question" onclick="toggleFAQ(event, this)">Can I file Annual Return without an AGM? <span class="faq-arrow">▼</span></button>
                            <div class="faq-answer">Only if your company qualifies for AGM exemption.</div>
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
                                Avoid Penalties and Last-Minute Stress.
                            </h2>
                            <p class="cta-desc text-white mb-4">
                                Let us handle your Annual Return filing in Singapore — accurate, compliant, and on time. Every submission accepted first time.
                            </p>
                            <div class="d-flex gap-3 justify-content-center flex-wrap">
                                <a href="./xbrl-filing-services-contact-singapore" class="btn-primary-red" style="background: white; color: var(--primary-red); box-shadow: none;">Get Started Today</a>
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
