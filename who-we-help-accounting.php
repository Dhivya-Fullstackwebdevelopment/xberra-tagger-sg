<?php

$page_title = " Singapore ACRA Regulatory Guide | Xberra";

$page_meta = " ";

$page_keywords = "";

$canonical_url = "http://xberratagger.com/sg/who-we-help-accounting";


include 'header.php'; ?>

<?php
// --- DATA ARRAYS (adapted from reference for Accounting Firms page) ---
$why_xbrl_points = [
    "Greater transparency in corporate reporting",
    "Easier comparison across industries",
    "Faster regulatory oversight for businesses"
];

$who_files = [
    [
        "title" => "Singapore-Incorporated Companies",
        "text" => "All locally incorporated companies, unless specifically exempted by ACRA regulations."
    ],
    [
        "title" => "Accounting Firms",
        "text" => "Firms managing multiple client submissions that require efficient, scalable XBRL tagging processes."
    ],
    [
        "title" => "Corporate Secretarial Firms",
        "text" => "Ensuring clients' financial reports are regulatory-ready and submit accurately on time."
    ],
    [
        "title" => "Dormant Companies",
        "text" => "Still required to file under simplified XBRL requirements per ACRA guidelines."
    ]
];

$required_components = [
    "Statement of Financial Position (Balance Sheet)",
    "Statement of Profit or Loss & Other Comprehensive Income",
    "Statement of Changes in Equity",
    "Statement of Cash Flows"
];

$how_helps = [
    [
        "title" => "Automated Conversion",
        "text" => "Convert Excel, Word or PDF into ACRA-ready XBRL."
    ],
    [
        "title" => "Error-Free Validation",
        "text" => "Multi-layer checks aligned with ACRA taxonomy."
    ],
    [
        "title" => "Fast Turnaround",
        "text" => "Meet filing deadlines easily."
    ],
    [
        "title" => "Scalable Support",
        "text" => "Support for single companies or groups."
    ]
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

// Firm‑specific stats
$stats = [
    ['num' => '30', 'label' => 'Support Response', 'suffix' => 'min'],
    // ['num' => '50', 'label' => 'Starting Price', 'prefix' => 'S$'],
    ['num' => '100', 'label' => 'Filing Success Rate', 'suffix' => '%'],
    ['num' => '2×', 'label' => 'Quality Checks']
];

// Pricing data
$pricing_plans = [
    [
        'name' => 'Simplified XBRL',
        'price' => null,
        'desc' => 'For smaller companies with straightforward financial statements and fewer disclosures.',
        'features' => ['Quickest turnaround', 'Guaranteed successful filing', 'Free amendments'],
        'featured' => false,
        'cta' => 'Get Started',
        'type' => 'simplified'
    ],
    [
        'name' => 'Full XBRL',
        'price' => '100',
        'desc' => 'Complete tagging for all five financial statement components per ACRA taxonomy.',
        'features' => ['Quickest turnaround', 'Guaranteed successful filing', 'Free amendments'],
        'featured' => true,
        'cta' => 'Get Started',
        'type' => 'full'
    ],
    [
        'name' => 'Group XBRL',
        'price' => null,
        'desc' => 'Tailored for complex group structures, consolidations, and high‑volume filing portfolios.',
        'features' => ['Volume discounts', 'Dedicated account manager', 'Custom SLA available'],
        'featured' => false,
        'cta' => 'Contact Us',
        'type' => 'group'
    ]
];
?>

<style>
    /* === THEME & VARIABLES (from reference, adapted for accounting firms page) === */
    :root {
        --primary-red: #dc2626;
        --dark-navy: #0a1a2f;
        --light-bg: #f8fafc;
        --border-color: #e2e8f0;
        --card-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.03), 0 8px 10px -6px rgba(0, 0, 0, 0.02);
        --card-hover-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.08), 0 8px 15px -6px rgba(220, 38, 38, 0.05);
        --ink: #1c1f2e;
        --muted: #4b5563;
        --text-light: #6b7280;
        --text-on-dark: rgba(255, 255, 255, 0.92);
        --text-on-dark-muted: rgba(255, 255, 255, 0.7);
    }

    /* Responsive Typography System */
    html {
        font-size: 16px;
    }

    @media (max-width: 768px) {
        html {
            font-size: 14px;
        }
    }

    /* utility classes */
    .text-primary-red {
        color: var(--primary-red);
    }

    .bg-primary-red {
        background-color: var(--primary-red);
    }

    .text-dark-navy {
        color: #1f2853;
    }

    .bg-dark-navy {
        background-color: #1f2853;
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

    /* breadcrumb (adapted) */
    .breadcrumb-custom {
        margin-bottom: 20px;
        list-style: none;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
    }

    .breadcrumb-custom li {
        display: inline-flex;
        align-items: center;
    }

    .breadcrumb-custom a {
        color: rgba(255, 255, 255, 0.6);
        text-decoration: none;
        transition: color 0.2s;
        font-size: clamp(0.8rem, 2vw, 0.9rem);
    }

    .breadcrumb-custom a:hover {
        color: white;
    }

    .breadcrumb-custom li+li:before {
        content: "›";
        color: rgba(255, 255, 255, 0.4);
        margin: 0 8px;
    }

    /* hero section */
    .hero-section {
        background: #1F2853;
        padding: 10rem 0 3rem;
        position: relative;
    }

    @media (max-width: 768px) {
        .hero-section {
            padding: 6rem 0 2rem;
        }
    }

    /* Responsive Banner Title */
    .banner-title {
        font-size: clamp(2rem, 5vw, 3rem);
        font-weight: 700;
        letter-spacing: -0.02em;
        line-height: 1.2;
        color: #fff;
    }

    .banner-title span {
        font-size: clamp(2rem, 5vw, 3rem);
        font-weight: 700;
        letter-spacing: -0.02em;
    }

    @media (max-width: 576px) {
        .banner-title {
            font-size: 1.8rem;
        }

        .banner-title span {
            font-size: 1.8rem;
        }
    }

    /* Lead text responsive */
    .lead {
        font-size: clamp(1rem, 2.5vw, 1.25rem);
        font-weight: 400;
        line-height: 1.7;
    }

    /* stat card */
    .stat-card {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        padding: 22px 18px;
        text-align: center;
        backdrop-filter: blur(4px);
        transition: transform 0.2s ease, background 0.2s ease;
    }

    @media (max-width: 576px) {
        .stat-card {
            padding: 15px 10px;
        }
    }

    .stat-card:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-4px);
    }

    /* Responsive Stat Numbers */
    .stat-number {
        font-size: clamp(1.8rem, 4vw, 2.25rem);
        font-weight: 700;
        color: white;
        line-height: 1.2;
    }

    .stat-label {
        color: rgba(255, 255, 255, 0.7);
        font-size: clamp(0.7rem, 1.5vw, 0.75rem);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-top: 5px;
        font-weight: 500;
    }

    /* mini badge (section label) */
    .mini-badge {
        display: inline-block;
        color: var(--primary-red);
        font-size: clamp(0.7rem, 1.5vw, 0.8rem);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 15px;
        background: rgba(220, 38, 38, 0.05);
        padding: 6px 16px;
        border-radius: 40px;
    }

    /* Responsive Section Title */
    .section-title {
        font-size: clamp(1.8rem, 4vw, 2.5rem);
        font-weight: 700;
        color: #1F2853;
        margin-bottom: 15px;
        line-height: 1.2;
    }

    @media (max-width: 768px) {
        .section-title {
            margin-bottom: 20px;
        }
    }

    .section-label {
        color: var(--primary-red);
        font-size: clamp(0.75rem, 1.5vw, 0.875rem);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 10px;
    }

    /* Enhanced content card */
    .content-card {
        background: white;
        border: 1px solid rgba(226, 232, 240, 0.6);
        border-radius: 24px;
        padding: 28px 24px;
        height: 100%;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        box-shadow: var(--card-shadow);
        position: relative;
        backdrop-filter: blur(2px);
    }

    @media (max-width: 768px) {
        .content-card {
            padding: 20px 18px;
        }
    }

    .content-card:hover {
        box-shadow: var(--card-hover-shadow);
        border-color: rgba(220, 38, 38, 0.15);
        transform: translateY(-6px) scale(1.01);
    }

    /* Responsive Card Title */
    .content-card h5 {
        transition: color 0.2s;
        font-size: clamp(1.1rem, 2vw, 1.25rem);
        font-weight: 700;
        margin-bottom: 1rem;
        color: #1f2853;
    }

    .content-card p {
        font-size: clamp(0.85rem, 1.5vw, 0.95rem);
        line-height: 1.6;
        color: var(--muted);
    }

    .content-card:hover h5 {
        color: var(--primary-red);
    }

    /* subtle red accent line on hover */
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

    .breadcrumb-custom span {
        color: white;
        font-size: clamp(0.8rem, 2vw, 0.9rem);
    }

    /* required item card redesign */
    .required-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 18px 26px;
        background: white;
        border-radius: 60px;
        margin-bottom: 14px;
        border: 1px solid var(--border-color);
        box-shadow: 0 4px 10px -5px rgba(0, 0, 0, 0.02);
        transition: all 0.2s ease;
    }

    @media (max-width: 576px) {
        .required-item {
            padding: 14px 18px;
            border-radius: 30px;
            flex-wrap: wrap;
            gap: 10px;
        }
    }

    .required-item:hover {
        border-color: var(--primary-red);
        box-shadow: 0 8px 20px -12px var(--primary-red);
        padding-left: 30px;
    }

    @media (max-width: 576px) {
        .required-item:hover {
            padding-left: 20px;
        }
    }

    .required-item span:first-child {
        font-size: clamp(0.9rem, 2vw, 1rem);
        font-weight: 500;
    }

    .required-badge {
        color: var(--primary-red);
        font-size: clamp(0.7rem, 1.5vw, 0.75rem);
        font-weight: 700;
        text-transform: uppercase;
        background: rgba(220, 38, 38, 0.04);
        padding: 6px 14px;
        border-radius: 40px;
        letter-spacing: 0.4px;
        white-space: nowrap;
    }

    @media (max-width: 576px) {
        .required-badge {
            padding: 4px 10px;
        }
    }

    /* deadline card enhancement */
    .deadline-text {
        background: white;
        padding: 30px 32px;
        border-radius: 30px;
        border-left: 6px solid var(--primary-red);
        margin: 30px 0;
        box-shadow: var(--card-shadow);
        font-size: clamp(1rem, 2vw, 1.1rem);
        line-height: 1.7;
        border-top: 1px solid rgba(226, 232, 240, 0.5);
        border-bottom: 1px solid rgba(226, 232, 240, 0.5);
        border-right: 1px solid rgba(226, 232, 240, 0.5);
    }

    @media (max-width: 576px) {
        .deadline-text {
            padding: 20px 18px;
            border-radius: 20px;
        }
    }

    /* icon wrapper */
    .icon-wrapper {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        background: rgba(220, 38, 38, 0.05);
        border-radius: 12px;
        margin-bottom: 1rem;
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

    .red .icon-wrapper {
        background: rgba(255, 255, 255, 0.2);
    }

    .red .icon-wrapper svg {
        stroke: white;
    }

    /* testimonial avatars */
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

    /* bento grid */
    .bento-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
    }

    .bento-grid .wide-2 {
        grid-column: span 2;
    }

    .bento-grid .wide-3 {
        grid-column: span 3;
    }

    .bento-grid .wide-4 {
        grid-column: span 4;
    }

    @media (max-width: 768px) {
        .bento-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .bento-grid .wide-2,
        .bento-grid .wide-3,
        .bento-grid .wide-4 {
            grid-column: span 2;
        }
    }

    @media (max-width: 480px) {
        .bento-grid {
            grid-template-columns: 1fr;
        }

        .bento-grid .wide-2,
        .bento-grid .wide-3,
        .bento-grid .wide-4 {
            grid-column: span 1;
        }
    }

    .bento-card {
        background: white;
        border-radius: 24px;
        padding: 1.75rem;
        border: 1px solid var(--border-color);
        transition: all 0.2s;
        height: 100%;
    }

    .bento-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--card-hover-shadow);
        border-color: rgba(220, 38, 38, 0.2);
    }

    .bento-card.dark {
        background: #1f2853;
        border-color: #1f2853;
    }

    .bento-card.dark h3,
    .bento-card.dark p {
        color: var(--text-on-dark);
    }

    .bento-card.dark p {
        opacity: 0.8;
        color: var(--text-on-dark-muted);
    }

    .bento-card.red {
        background: var(--primary-red);
        border-color: var(--primary-red);
    }

    .bento-card.red h3,
    .bento-card.red p {
        color: white;
    }

    .bento-card.red p {
        opacity: 0.9;
    }

    .bento-card h3 {
        font-size: clamp(1.1rem, 2vw, 1.25rem);
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #1f2853;
    }

    .bento-card p {
        font-size: clamp(0.85rem, 1.5vw, 0.95rem);
        color: var(--muted);
        line-height: 1.6;
    }

    /* steps row */
    .steps-row {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
    }

    @media (max-width: 640px) {
        .steps-row {
            grid-template-columns: 1fr;
        }
    }

    .step-item {
        background: white;
        border-radius: 24px;
        padding: 2rem;
        border: 1px solid var(--border-color);
        position: relative;
    }

    .step-num {
        font-size: 3rem;
        font-weight: 800;
        color: #e9eef2;
        position: absolute;
        bottom: 1rem;
        right: 1.5rem;
        line-height: 1;
    }

    .step-item h4 {
        font-size: clamp(1.1rem, 2vw, 1.2rem);
        font-weight: 700;
        margin: 1rem 0 0.5rem;
        color: #1f2853;
    }

    .step-item p {
        font-size: clamp(0.85rem, 1.5vw, 0.95rem);
        color: var(--muted);
    }

    /* mid banner */
    .mid-banner {
        background: #1f2853;
        border-radius: 2rem;
        padding: 2.5rem 3rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 2rem;
        margin: 4rem 0;
        color: white;
    }

    @media (max-width: 768px) {
        .mid-banner {
            padding: 2rem 1.5rem;
            border-radius: 1.5rem;
        }
    }

    .mid-banner p {
        font-size: clamp(0.9rem, 2vw, 1rem);
        color: rgba(255, 255, 255, 0.7);
    }

    /* trust strip */
    .trust-strip {
        display: flex;
        gap: 1.5rem;
        flex-wrap: wrap;
        justify-content: center;
        padding: 2rem 0;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
        margin-bottom: 4rem;
    }

    .trust-badge {
        display: flex;
        align-items: center;
        gap: 0.6rem;
        padding: 0.75rem 1.25rem;
        border: 1.5px solid var(--border-color);
        border-radius: 100px;
        background: white;
    }

    .trust-badge svg {
        width: 20px;
        height: 20px;
        stroke: var(--primary-red);
        stroke-width: 1.8;
        fill: none;
    }

    .trust-badge span:last-child {
        font-weight: 600;
        color: #1f2853;
        font-size: 0.85rem;
    }

    /* pricing card */
    .pricing-card {
        background: white;
        border-radius: 24px;
        border: 1px solid var(--border-color);
        padding: 2rem 1.75rem;
        transition: all 0.2s;
        height: 100%;
    }

    .pricing-card.featured {
        background: #1f2853;
        border-color: #1f2853;
        color: white;
    }

    .pricing-card.featured .pricing-price,
    .pricing-card.featured h3,
    .pricing-card.featured .mini-badge {
        color: white;
    }

    .pricing-card.featured .mini-badge {
        background: rgba(255, 255, 255, 0.15);
    }

    .pricing-card.featured p {
        color: rgba(255, 255, 255, 0.7);
    }

    .pricing-card .pricing-price {
        font-size: clamp(1.8rem, 4vw, 2.5rem);
        font-weight: 800;
        color: #1f2853;
        margin: 0.75rem 0;
    }

    .pricing-card .pricing-price small {
        font-size: 1rem;
        font-weight: 400;
        color: #828c99;
    }

    .pricing-card ul {
        list-style: none;
        padding: 0;
        margin: 1.5rem 0;
    }

    .pricing-card li {
        padding: 0.35rem 0;
        font-size: clamp(0.85rem, 1.5vw, 0.9rem);
        color: var(--muted);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .pricing-card li::before {
        content: '✓';
        color: #0e9f6e;
        font-weight: 700;
    }

    .pricing-card.featured li {
        color: rgba(255, 255, 255, 0.7);
    }

    .pricing-card.featured li::before {
        color: #34d399;
    }

    /* button styles */
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
        font-size: clamp(0.9rem, 2vw, 1rem);
        display: inline-block;
        text-decoration: none;
    }

    @media (max-width: 576px) {
        .btn-primary-red {
            padding: 12px 28px;
        }
    }

    .btn-primary-red:hover {
        background-color: #b91c1c;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 15px 25px -10px #b91c1c;
        text-decoration: none;
    }

    .btn-outline-navy {
        border: 2px solid #1f2853;
        color: #1f2853;
        padding: 14px 36px;
        border-radius: 60px;
        font-weight: 600;
        background: transparent;
        transition: all 0.3s ease;
        font-size: clamp(0.9rem, 2vw, 1rem);
        display: inline-block;
        text-decoration: none;
    }

    .btn-outline-navy:hover {
        background-color: #1f2853;
        color: #fff !important;
        transform: translateY(-2px);
        border-color: #1f2853;
        box-shadow: 0 12px 22px -12px #1f2853;
        text-decoration: none;
    }

    /* CTA Section in Blue */
    .bg-blue {
        background-color: #1F2853;
    }

    .rounded-5 {
        border-radius: 2rem;
    }

    @media (max-width: 768px) {
        .rounded-5 {
            border-radius: 1.5rem;
        }
    }

    .cta-title {
        font-size: clamp(1.8rem, 4vw, 2.8rem);
        font-weight: 700;
        line-height: 1.2;
    }

    .cta-desc {
        font-size: clamp(0.9rem, 2vw, 1.1rem);
        line-height: 1.6;
        opacity: 0.9;
    }

    .cta-btn {
        background-color: var(--primary-red);
        color: white;
        padding: 14px 40px;
        border-radius: 60px;
        font-weight: 600;
        font-size: clamp(0.9rem, 2vw, 1rem);
        transition: all 0.3s ease;
        box-shadow: 0 10px 20px -10px var(--primary-red);
        text-decoration: none;
        display: inline-block;
    }

    @media (max-width: 576px) {
        .cta-btn {
            padding: 12px 30px;
        }
    }

    .cta-btn:hover {
        background-color: #b91c1c;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 15px 25px -10px #b91c1c;
        text-decoration: none;
    }

    /* spacing utils */
    .gap-3 {
        gap: 1rem;
    }

    .fw-700 {
        font-weight: 700;
    }

    .list-inline {
        padding-left: 0;
        list-style: none;
        display: flex;
        flex-wrap: wrap;
    }

    .list-inline-item {
        display: inline-block;
    }

    .list-inline-item:not(:last-child) {
        margin-right: 0.25rem;
    }

    /* Container padding for mobile */
    @media (max-width: 576px) {
        .container {
            padding-left: 20px;
            padding-right: 20px;
        }
    }

    /* Responsive spacing utilities */
    @media (max-width: 768px) {
        .mb-5 {
            margin-bottom: 3rem !important;
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }
    }

    /* HERO RIGHT PRICING CARD */

    .hero-price-card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 22px;
        padding: 38px 34px;
        color: white;
        max-width: 420px;
        margin-left: auto;

         box-shadow: 0 20px 40px rgba(0, 0, 0, 0.35);

        backdrop-filter: blur(8px);

        animation: floatCard 6s ease-in-out infinite;
    }

    .price-small {
        font-size: 12px;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.6);
        margin-bottom: 10px;
    }

    .price-main {
        font-size: 54px;
        font-weight: 800;
        line-height: 1;
        margin-bottom: 15px;
    }

    .currency {
        font-size: 32px;
    }

    .per {
        font-size: 18px;
        color: rgba(255, 255, 255, 0.6);
    }

    .price-divider {
        height: 1px;
        background: rgba(255, 255, 255, 0.15);
        margin: 18px 0;
    }

    .price-item {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        color: rgba(255, 255, 255, 0.85);
    }

    .price-item strong {
        color: white;
    }

    .trial-button {
        display: block;
        margin-top: 20px;
        text-align: center;
        padding: 12px;
        border-radius: 40px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .05em;

        background: linear-gradient(90deg, #10b981, #059669);
        color: white;
        text-decoration: none;
    }

    .trial-button:hover {
        transform: translateY(-2px);
    }

    @keyframes floatCard {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0);
        }
    }

    @media (max-width:991px) {

        .hero-price-card {
            margin: 40px auto 0;
            max-width: 100%;
        }

    }
</style>


<div class="py-lg-4 py-3"></div>

<!-- Hero Section (accounting firms version) -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12">
                <ul class="breadcrumb-custom list-inline">
                    <li class="list-inline-item"><a href="./">Home</a></li>
                    <li class="list-inline-item"><a href="./">ACRA</a></li>
                    <li class="list-inline-item"><span>Accounting Firms</span></li>
                </ul>

                <h1 class="banner-title text-white mb-4">
                    XBRL Filing for <span class="text-primary-red">Accounting Firms</span>
                </h1>

                <p class="text-white-70 lead mb-5">
                    Fast, accurate, and regulator-ready XBRL filings for ACRA — trusted by practices across Singapore, from boutique to top‑tier.
                </p>

                <div class="row">
                    <?php foreach ($stats as $stat): ?>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="stat-card">
                                <div class="stat-number">
                                    <?= $stat['prefix'] ?? '' ?><?= $stat['num'] ?><?= $stat['suffix'] ?? '' ?>
                                </div>
                                <div class="stat-label"><?= $stat['label'] ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- RIGHT PRICING CARD -->
            <div class="col-lg-5 col-12 mt-5 mt-lg-0">

                <div class="hero-price-card">

                    <div class="price-small">PRICING AT A GLANCE</div>

                    <!-- <div class="price-main">
                        <span class="currency">S$</span>50
                        <span class="per">/ entity</span>
                    </div> -->

                    <div class="price-divider"></div>

                    <div class="price-item">
                        <span>Simplified XBRL</span>
                        <!-- <strong>S$50</strong> -->
                    </div>

                    <div class="price-item">
                        <span>Full XBRL</span>
                        <strong>S$100</strong>
                    </div>

                    <div class="price-item">
                        <span>Group XBRL</span>
                        <strong>On Request</strong>
                    </div>

                    <a href="./xbrl-filing-services-contact-singapore" class="trial-button">
                        FREE TRIAL AVAILABLE
                    </a>

                </div>

            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-5 bg-light-custom">
    <div class="container">

        <!-- 1. Intro (two column) -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="mini-badge mb-0"><span>✦</span> ABOUT OUR SERVICE</div>
                <h2 class="section-title mt-2">Built for Accounting Firms,<br>By People Who Get It</h2>
                <p class="lead text-dark-navy">At Xberra Tagger, we work hand‑in‑hand with accounting firms across Singapore — from boutique practices to top‑tier firms. We understand the pressure of tight deadlines and the importance of flawless tagging.</p>
                <p class="text-muted-custom">That's why firms trust us: <strong>if quality slips, we're out. Period.</strong> No excuses, no renegotiating. Just results you can rely on, filing after filing.</p>
            </div>
            <div class="col-lg-6">
                <div class="deadline-text" style="border-left-color: var(--primary-red);">
                    <p class="mb-0 fst-italic">“If quality slips, we're out. Period. That's the standard we hold ourselves to — and why accounting firms keep coming back.”</p>
                    <div class="mt-3 small text-muted-custom">Xberra Tagger — Our Commitment</div>
                </div>
            </div>
        </div>

        <!-- 2. WHY CHOOSE (bento grid) -->
        <div class="mb-5">
            <div class="mini-badge mb-0"><span>✦</span> WHY CHOOSE US</div>
            <h2 class="section-title mt-2">Why Accounting Firms Choose Xberra Tagger</h2>

            <div class="bento-grid">
                <!-- Free trial (dark wide) -->
                <div class="bento-card dark wide-2">
                    <div class="bento-icon icon-wrapper dark">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 6v6l4 2" />
                        </svg>
                    </div>
                    <h3>Free Trial — No Obligation</h3>
                    <p>Experience the quality of our XBRL conversion firsthand before committing to any package. See exactly what you're getting.</p>
                </div>
                <!-- Assured Support -->
                <div class="bento-card">
                    <div class="bento-icon icon-wrapper">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16 14" />
                        </svg>
                    </div>
                    <h3>Assured Support</h3>
                    <p class="text-muted-custom">Response within 30 minutes. Extended hours available for urgent deadline filings.</p>
                </div>
                <!-- Custom Pricing -->
                <div class="bento-card">
                    <div class="bento-icon icon-wrapper">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 2v20M17 5H9.5C7.7 5 6 6.7 6 8.5c0 1.8 1.7 3.5 3.5 3.5h5c1.8 0 3.5 1.7 3.5 3.5 0 1.8-1.7 3.5-3.5 3.5H6" />
                        </svg>
                    </div>
                    <h3>Custom Pricing</h3>
                    <p class="text-muted-custom">Volume discounts for firms handling multiple entities. Pricing that scales with you.</p>
                </div>
                <!-- Flexible Payment (red) -->
                <div class="bento-card red">
                    <div class="bento-icon icon-wrapper red">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 2v20M17 5H9.5C7.7 5 6 6.7 6 8.5c0 1.8 1.7 3.5 3.5 3.5h5c1.8 0 3.5 1.7 3.5 3.5 0 1.8-1.7 3.5-3.5 3.5H6" />
                        </svg>
                    </div>
                    <h3>Flexible Payment</h3>
                    <p>Bank transfer or secure online — whichever works for your firm.</p>
                </div>
                <!-- ISO Certified -->
                <div class="bento-card">
                    <div class="bento-icon icon-wrapper">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="6" />
                            <path d="M12 14v8" />
                            <path d="M8 22h8" />
                        </svg>
                    </div>
                    <h3>ISO 9001 Certified</h3>
                    <p class="text-muted-custom">Quality management you can demonstrate to your own clients. Certified processes, every time.</p>
                </div>
                <!-- Data Security (dark wide) -->
                <div class="bento-card dark wide-2">
                    <div class="bento-icon icon-wrapper dark">
                        <svg viewBox="0 0 24 24">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        </svg>
                    </div>
                    <h3>Data Security</h3>
                    <p>ISO-certified processes on secure Singapore-hosted servers. Your data never leaves the country. We are committed to protecting your clients' financial information at every step.</p>
                </div>
            </div>
        </div>

        <!-- 3. PRICING SECTION -->
        <div class="mb-5">
            <div class="mini-badge mb-0"><span>✦</span> TRANSPARENT PRICING</div>
            <h2 class="section-title mt-2">Simple, Honest Pricing</h2>
            <p class="mb-4 lead text-muted-custom">Pay only for the type of XBRL report you need. No surprises, no lock-ins, no hidden fees.</p>

            <div class="row g-4">
                <?php foreach ($pricing_plans as $plan): ?>
                    <div class="col-md-4">
                        <div class="pricing-card <?= $plan['featured'] ? 'featured' : '' ?>">
                            <?php if ($plan['featured']): ?>
                                <span class="mini-badge" style="background:rgba(255,255,255,0.15); color:white;">Most Popular</span>
                            <?php else: ?>
                                <span class="mini-badge" style="opacity:0;"> </span>
                            <?php endif; ?>
                            <h3><?= $plan['name'] ?></h3>
                            <div class="pricing-price">
                                <?php if ($plan['price'] !== null): ?>
                                    <sup>S$</sup><?= $plan['price'] ?><small>/ entity</small>
                                <?php else: ?>
                                    Quote on Request
                                <?php endif; ?>
                            </div>
                            <p><?= $plan['desc'] ?></p>
                            <ul>
                                <?php foreach ($plan['features'] as $feature): ?>
                                    <li><?= $feature ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="./xbrl-filing-services-contact-singapore" class="btn <?= $plan['featured'] ? 'btn-primary-red' : 'btn-outline-navy' ?>" style="<?= $plan['featured'] ? '' : 'border-color: var(--border-color); color: #1f2853;' ?>">
                                <?= $plan['cta'] ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- includes strip -->
            <div class="trust-strip mt-4" style="justify-content: flex-start; border-top: none; border-bottom: none; padding: 1rem 0;">
                <span class="fw-600" style="color:#1f2853;">Every package includes:</span>
                <span class="trust-badge" style="border-color:var(--border-color); background:white;">
                    <svg viewBox="0 0 24 24">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <span>Quickest turnaround</span>
                </span>
                <span class="trust-badge" style="border-color:var(--border-color); background:white;">
                    <svg viewBox="0 0 24 24">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <span>Guaranteed successful filing</span>
                </span>
                <span class="trust-badge" style="border-color:var(--border-color); background:white;">
                    <svg viewBox="0 0 24 24">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <span>Free amendments — no hidden costs</span>
                </span>
            </div>
        </div>

        <!-- 4. HOW IT WORKS (4 steps) -->
        <div class="mb-5">
            <div class="mini-badge mb-0"><span>✦</span> PROCESS</div>
            <h2 class="section-title mt-2">4 Steps. Done.</h2>
            <p class="mb-4 lead text-muted-custom">From sign-up to ACRA submission — we've made the entire process straightforward and efficient.</p>

            <div class="steps-row">
                <div class="step-item">
                    <span class="step-num">01</span>
                    <div class="icon-wrapper" style="margin-bottom:1rem;">
                        <svg viewBox="0 0 24 24">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        </svg>
                    </div>
                    <h4>Sign In</h4>
                    <p class="text-muted-custom">Create your account and add your entity details. Takes under two minutes.</p>
                </div>
                <div class="step-item">
                    <span class="step-num">02</span>
                    <div class="icon-wrapper" style="margin-bottom:1rem;">
                        <svg viewBox="0 0 24 24">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                            <polyline points="17 8 12 3 7 8" />
                            <line x1="12" y1="3" x2="12" y2="15" />
                        </svg>
                    </div>
                    <h4>Upload</h4>
                    <p class="text-muted-custom">Submit your financials in Excel, Word, or PDF. We handle the rest.</p>
                </div>
                <div class="step-item">
                    <span class="step-num">03</span>
                    <div class="icon-wrapper" style="margin-bottom:1rem;">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 6v6l4 2" />
                        </svg>
                    </div>
                    <h4>Download</h4>
                    <p class="text-muted-custom">Receive your XBRL package, review it, and approve when satisfied.</p>
                </div>
                <div class="step-item">
                    <span class="step-num">04</span>
                    <div class="icon-wrapper" style="margin-bottom:1rem;">
                        <svg viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </div>
                    <h4>File with ACRA</h4>
                    <p class="text-muted-custom">Submit directly or let us transmit on your behalf. Compliance done.</p>
                </div>
            </div>
        </div>

        <!-- ASSURANCES BENTO (5 cells) -->
        <div class="mb-5">
            <div class="mini-badge mb-0"><span>✦</span> OUR GUARANTEES</div>
            <h2 class="section-title mt-2">Our Assurances to You</h2>
            <p class="mb-4 lead text-muted-custom">Every engagement is backed by our quality commitments — so you can file with confidence, every time.</p>

            <div class="bento-grid">
                <!-- ACRA-Ready -->
                <div class="bento-card">
                    <div class="bento-icon icon-wrapper">
                        <svg viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                        </svg>
                    </div>
                    <h3>ACRA-Ready Reports</h3>
                    <p>Validated against the latest ACRA taxonomy before every delivery.</p>
                </div>
                <!-- Data Security -->
                <div class="bento-card">
                    <div class="bento-icon icon-wrapper">
                        <svg viewBox="0 0 24 24">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        </svg>
                    </div>
                    <h3>Data Security</h3>
                    <p>ISO-certified processes with secure servers hosted in Singapore.</p>
                </div>
                <!-- Quality Guaranteed (red wide) -->
                <div class="bento-card red wide-2">
                    <div class="bento-icon icon-wrapper red">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="6" />
                            <path d="M12 14v8" />
                            <path d="M8 22h8" />
                        </svg>
                    </div>
                    <h3>Quality Guaranteed</h3>
                    <p>Two-layer checks and ISO 9001 certification back every single report we produce. If it's not right, we fix it — free, no questions asked.</p>
                </div>
                <!-- Customer Delight (wide) -->
                <div class="bento-card wide-2">
                    <div class="bento-icon icon-wrapper">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M8 14s1.5 2 4 2 4-2 4-2" />
                            <line x1="9" y1="9" x2="9.01" y2="9" />
                            <line x1="15" y1="9" x2="15.01" y2="9" />
                        </svg>
                    </div>
                    <h3>Customer Delight</h3>
                    <p>No-questions-asked refund if you're not completely satisfied with any filing. We stand behind every submission we make.</p>
                </div>
                <!-- 30‑Min Response (wide) -->
                <div class="bento-card wide-2">
                    <div class="bento-icon icon-wrapper">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16 14" />
                        </svg>
                    </div>
                    <h3>30‑Min Response</h3>
                    <p>Assured support within 30 minutes — extended hours on request for critical filing deadlines.</p>
                </div>
            </div>
        </div>

        <!-- MID BANNER -->
        <div class="mid-banner">
            <div>
                <h3 class="fw-bold text-on-dark-primary" style="font-size: clamp(1.3rem, 3vw, 1.8rem);">Ready to scale your XBRL filings?</h3>
                <p class="text-on-dark-muted">Volume discounts available for firms managing multiple entities.</p>
            </div>
            <div>
                <a href="./xbrl-filing-services-contact-singapore" class="btn-primary-red me-2 mb-3" style="background:white; color:var(--primary-red); box-shadow:none;">Request Custom Pricing →</a>
                <a href="./xbrl-filing-services-contact-singapore" class="btn-outline-navy text-white" style="border-color:rgba(255,255,255,0.3); color:white !important;">Talk to an Expert</a>
            </div>
        </div>

        <!-- TESTIMONIALS - STATIC VERSION (NOT DYNAMIC) -->
        <div class="mb-5">
            <div class="mini-badge mb-0"><span>✦</span> CLIENT FEEDBACK</div>
            <h2 class="section-title mt-2">What Clients Say</h2>

            <div class="row">
                <!-- Testimonial 1 - Dark Card -->
                <div class="col-md-4 mb-4">
                    <div class="content-card bg-dark-navy text-white" style="border-color:#1f2853;">
                        <div class="text-warning mb-2">★★★★★</div>
                        <p class="fst-italic text-white-70">“Very pleased with your speed and quality. The turnaround was faster than we expected and the filing went through first time.”</p>
                        <div class="d-flex align-items-center mt-4">
                            <span class="testimonial-avatar" style="background-color:#2E8B57;">CS</span>
                            <div class="ms-3">
                                <strong class="text-dark-navy">Company Secretary</strong><br>
                                <span class="small text-muted-custom">Business Group</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 - Light Card -->
                <div class="col-md-4 mb-4">
                    <div class="content-card">
                        <div class="text-warning mb-2">★★★★★</div>
                        <p class="fst-italic">“Professional service, highly recommended. We've switched our entire client portfolio to Xberra — couldn't be happier with the results.”</p>
                        <div class="d-flex align-items-center mt-4">
                            <span class="testimonial-avatar" style="background-color:var(--primary-red);">CA</span>
                            <div class="ms-3">
                                <strong class="text-dark-navy">Chief Accountant</strong><br>
                                <span class="small text-muted-custom">Accounting Services Firm</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 - Light Card -->
                <div class="col-md-4 mb-4">
                    <div class="content-card">
                        <div class="text-warning mb-2">★★★★★</div>
                        <p class="fst-italic">“Prompt turnaround and sensible pricing. Exactly what our firm needed to meet ACRA deadlines without the stress.”</p>
                        <div class="d-flex align-items-center mt-4">
                            <span class="testimonial-avatar" style="background-color:var(--primary-red);">DR</span>
                            <div class="ms-3">
                                <strong class="text-dark-navy">Director</strong><br>
                                <span class="small text-muted-custom">Real Estate Company</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TRUST STRIP (ISO, security, etc) - ALL ICONS NOW SVG -->
        <div class="trust-strip">
            <div class="trust-badge">
                <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="8" r="6" />
                    <path d="M12 14v8" />
                    <path d="M8 22h8" />
                </svg>
                <span>ISO 9001 Certified</span>
            </div>
            <div class="trust-badge">
                <svg viewBox="0 0 24 24">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                    <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                </svg>
                <span>Secure File Transfer</span>
            </div>
            <div class="trust-badge">
                <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M12 2v20M2 12h20" />
                </svg>
                <span>Singapore-Hosted Servers</span>
            </div>
            <div class="trust-badge">
                <svg viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                </svg>
                <span>Confidentiality Agreements</span>
            </div>
            <div class="trust-badge">
                <svg viewBox="0 0 24 24">
                    <polyline points="20 6 9 17 4 12" />
                </svg>
                <span>ACRA-Validated Taxonomy</span>
            </div>
        </div>

        <!-- FINAL CTA -->
        <section class="section-margin">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-12 text-center">
                        <div class="bg-blue p-lg-5 p-4 rounded-5">
                            <div class="mini-badge" style="background:rgba(255,255,255,0.15); color:white;">
                                <span>✦</span> Scale with Confidence
                            </div>
                            <h1 class="cta-title text-white fw-700 mb-3">Accounting Firms Across Singapore Trust Xberra Tagger</h1>
                            <p class="cta-desc text-white mb-4">Fast, accurate, regulator-ready XBRL for ACRA — so you can focus on your clients while we handle compliance.</p>
                            <a href="./xbrl-filing-services-contact-singapore" class="cta-btn mb-3 text-decoration-none d-inline-block">Start Your Free Trial →</a>
                            <p class="cta-desc text-white">Talk to an Expert also available</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div> <!-- container -->
</section>

<?php include 'footer.php'; ?>