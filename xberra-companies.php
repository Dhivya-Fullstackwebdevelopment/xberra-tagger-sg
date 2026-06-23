<?php include 'header.php'; ?>

<?php
// Data arrays for the page
$why_xbrl_points = [
    "Cost certainty for small company budgets",
    "Hassle‑free ACRA compliance",
    "Clear, machine‑readable financial data"
];

$who_files = [
    [
        "title" => "Singapore Small Companies",
        "text" => "Companies with revenue or assets ≤ S$500,000 qualify for simplified XBRL – we handle all the tagging for you."
    ],
    [
        "title" => "Micro & Dormant Entities",
        "text" => "Even dormant companies must file simplified XBRL; we make it effortless and affordable."
    ],
    [
        "title" => "Startups & New Businesses",
        "text" => "First time filing? We guide you through every step – no prior XBRL knowledge needed."
    ],
    [
        "title" => "Accounting & Secretarial Firms",
        "text" => "Outsource XBRL tagging for your small‑company clients – fast, accurate, and scalable."
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
        "title" => "Template‑driven conversion",
        "text" => "Upload Word, Excel or PDF – or use our provided templates. We convert to ACRA‑ready XBRL."
    ],
    [
        "title" => "Error‑free validation",
        "text" => "Multi‑layer checks against ACRA taxonomy – guaranteed first‑time acceptance."
    ],
    [
        "title" => "Fast turnaround",
        "text" => "Most small‑company filings completed within 24 hours."
    ],
    [
        "title" => "Free amendments",
        "text" => "If ACRA requests changes, we amend at no extra cost."
    ]
];

$why_choose = [
    [
        "title" => "Affordable expertise",
        "text" => "Deep knowledge of ACRA's small company framework – you pay a fraction of traditional costs."
    ],
    [
        "title" => "Transparent process",
        "text" => "From upload to filing, you see every step. No hidden fees, no jargon."
    ],
    [
        "title" => "Future‑ready",
        "text" => "We automatically adapt to ACRA taxonomy updates – you're always compliant."
    ],
    [
        "title" => "Customer‑centric support",
        "text" => "Real people, real help – whether you're a business owner or an accountant."
    ]
];

$special_cases = [
    [
        "icon" => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
        "title" => "My Company Is Dormant",
        "desc" => "Dormant status describes your commercial activity level — it does not create an exemption from annual XBRL filing. Your company remains a legal entity on ACRA's register with ongoing compliance obligations for every year it exists.",
        "warn" => "Most dormant companies must still file Simplified XBRL every year.",
        "tag" => "Common Misconception",
        "tag_bg" => "#ffedd5"
    ],
    [
        "icon" => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="2"><path d="M12 2v20M2 12h20"/><circle cx="12" cy="12" r="10"/></svg>',
        "title" => "We Had Zero Revenue",
        "desc" => "Zero or minimal revenue does not eliminate the XBRL filing requirement. The obligation is based on incorporation and registration status — not on operating activity or financial performance. Nil-revenue companies still need to file annually.",
        "warn" => "A nil-revenue XBRL filing is one of the simplest to process.",
        "tag" => "Common Misconception",
        "tag_bg" => "#ffedd5"
    ],
    [
        "icon" => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>',
        "title" => "We Were Incorporated This Year",
        "desc" => "Newly incorporated companies have their first XBRL filing due at the close of their first financial year — within 5 months. Planning ahead from the start avoids a rushed first submission and ensures your accountant and XBRL provider are aligned.",
        "warn" => "Contact us before your first year-end to plan the filing.",
        "tag" => "Newly Incorporated",
        "tag_bg" => "#DBEAFE"
    ],
    [
        "icon" => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/><path d="M12 21v-4"/></svg>',
        "title" => "We Changed Our Financial Year-End",
        "desc" => "If your company changed its financial year-end, you may have a transitional short period with a different filing deadline. ACRA's 5-month window applies to the new year-end. The XBRL obligation still applies to the transitional period.",
        "warn" => "Short-period accounts still require XBRL filing — confirm with us.",
        "tag" => "FYE Change",
        "tag_bg" => "#DCFCE7"
    ],
    [
        "icon" => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="2"><rect x="2" y="7" width="4" height="14"/><rect x="10" y="3" width="4" height="18"/><rect x="18" y="5" width="4" height="16"/></svg>',
        "title" => "We Have Multiple Companies",
        "desc" => "Each incorporated entity has its own independent XBRL filing obligation with ACRA. If you hold shares in multiple companies, each company must file separately every year. Xberra Tagger can manage all entities under a single arrangement with consolidated invoicing.",
        "warn" => "Multiple companies = multiple separate XBRL obligations.",
        "tag" => "Common Question",
        "tag_bg" => "#ffedd5"
    ],
    [
        "icon" => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="9" y1="9" x2="15" y2="15"/><line x1="15" y1="9" x2="9" y2="15"/></svg>',
        "title" => "We're About to Wind Down",
        "desc" => "All outstanding XBRL filings for prior financial years must be resolved before ACRA will process a strike-off application. Directors who discover this only at the strike-off stage face resolving multiple years of arrears under time pressure — and higher cost.",
        "warn" => "Resolve all outstanding filings before submitting strike-off.",
        "tag" => "Strike-Off Planning",
        "tag_bg" => "#ffedd5"
    ]
];

$faq_items = [
    [
        "q" => "What is the difference between Simplified XBRL and Full XBRL? Which does my company need?",
        "a" => "Simplified XBRL covers only Financial Statement Highlights — key balance sheet and income figures. It applies to companies that meet at least 2 of these 3 criteria: annual revenue ≤ S$10M, total assets ≤ S$10M, or 50 or fewer employees. Full XBRL involves complete tagging of your financial statements and applies to larger private companies. We confirm which type applies to your company before we start — just contact us with your company details."
    ],
    [
        "q" => "My company has a group structure. Can you handle consolidated XBRL?",
        "a" => "Yes. We handle all three XBRL types ACRA requires: Simplified XBRL, Full XBRL Standalone (single entity), and Full XBRL Consolidated (group filings). For consolidated accounts, we work from your group financial statements and produce the correctly structured XBRL package for ACRA submission. Contact us to discuss your group's specific filing requirements."
    ],
    [
        "q" => "Do you submit to ACRA directly, or does our finance team need to do that?",
        "a" => "We submit directly to ACRA's BizFile portal on your company's behalf. Your finance team does not need an ACRA account, BizFile access, or any portal credentials. Once you approve the completed XBRL package, we handle the transmission and deliver the official ACRA filing confirmation to you."
    ],
    [
        "q" => "What if our auditors revise the financial statements after you've started conversion?",
        "a" => "Very common — and fully expected. We update the XBRL file to reflect the revised financials at zero additional charge, regardless of how many revision cycles are required. This applies whether the revision is a minor number correction or a material restatement of the accounts. Our amendment policy is unconditional."
    ],
    [
        "q" => "What is the XBRL filing deadline for our company?",
        "a" => "Private companies incorporated in Singapore must file annual financial statements with ACRA within 5 months of their financial year-end. For example, if your FYE is 31 December, your XBRL filing deadline is 31 May the following year. We recommend engaging us at least 3–4 weeks ahead of your deadline to allow time for document preparation, conversion, and any revision rounds. Contact us early — a last-minute filing puts pressure on everyone."
    ],
    [
        "q" => "Can we switch to Xberra Tagger if we've already started the XBRL conversion elsewhere?",
        "a" => "Yes. If you've started with another provider or tried to handle it in-house and encountered problems, we can take over from wherever the process currently stands. Contact us with your situation — we'll assess what's been done, what's needed, and give you a clear picture of what we can do and how quickly we can have it completed."
    ]
];
?>

<style>
    /* === THEME & VARIABLES (from old page) === */
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

    html {
        font-size: 16px;
    }

    @media (max-width: 768px) {
        html {
            font-size: 14px;
        }
    }

    /* Utility classes */
    .text-primary-red {
        color: var(--primary-red);
    }

    .bg-primary-red {
        background-color: var(--primary-red);
    }

    .text-dark-navy {
        color: #1F2853;
    }

    .bg-dark-navy {
        background-color: #1F2853;
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

    /* Hero Section */
    .hero-section {
        background: #1F2853;
        padding: 10rem 0 3rem;
        position: relative;
    }

    @media (max-width:768px) {
        .hero-section {
            padding: 6rem 0 2rem;
        }
    }

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
    }

    .lead {
        font-size: clamp(1rem, 2.5vw, 1.25rem);
        font-weight: 400;
        line-height: 1.7;
    }

    /* Stat Card */
    .stat-card {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        padding: 22px 18px;
        text-align: center;
        backdrop-filter: blur(4px);
        transition: transform 0.2s ease, background 0.2s ease;
    }

    .stat-card:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-4px);
    }

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

    /* Mini Badge */
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

    .section-title {
        font-size: clamp(1.8rem, 4vw, 2.5rem);
        font-weight: 700;
        color: #1F2853;
        margin-bottom: 15px;
        line-height: 1.2;
    }

    /* Content Card */
    .content-card {
        background: white;
        border: 1px solid rgba(226, 232, 240, 0.6);
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
        transform: translateY(-6px) scale(1.01);
    }

    .content-card h5 {
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

    /* Icon Wrapper */
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

    /* Steps Row */
    .steps-row {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
    }

    @media (max-width: 768px) {
        .steps-row {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
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
        font-size: 1.2rem;
        font-weight: 700;
        margin: 1rem 0 0.5rem;
        color: #1f2853;
    }

    /* Required Items */
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
    }

    .required-item:hover {
        border-color: var(--primary-red);
        box-shadow: 0 8px 20px -12px var(--primary-red);
        padding-left: 30px;
    }

    .required-badge {
        color: var(--primary-red);
        font-size: clamp(0.7rem, 1.5vw, 0.75rem);
        font-weight: 700;
        text-transform: uppercase;
        background: rgba(220, 38, 38, 0.04);
        padding: 6px 14px;
        border-radius: 40px;
        white-space: nowrap;
    }

    /* ACRA Definition Box */
    .acra-def-box {
        background: #1F2853;
        border-radius: 18px;
        padding: 1.75rem;
        color: white;
    }

    .acra-def-label {
        font-size: 0.68rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.12em;
        color: rgba(255, 255, 255, 0.3);
    }

    .acra-def-title {
        font-size: 1rem;
        font-weight: 800;
        margin: 0.5rem 0 1rem;
    }

    .acra-threshold {
        display: flex;
        justify-content: space-between;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 10px;
        padding: 0.85rem 1rem;
        margin-bottom: 0.5rem;
    }

    .acra-threshold span:first-child {
        color: rgba(255, 255, 255, 0.38);
        font-size: 0.78rem;
    }

    .acra-threshold span:last-child {
        color: #ff5f6a;
        font-weight: 800;
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
        font-size: clamp(0.9rem, 2vw, 1rem);
        display: inline-block;
        text-decoration: none;
    }

    .btn-primary-red:hover {
        background-color: #b91c1c;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 15px 25px -10px #b91c1c;
        text-decoration: none;
    }

    .btn-outline-navy {
        border: 2px solid #1F2853;
        color: #1F2853;
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
        background-color: #1F2853;
        color: white;
        transform: translateY(-2px);
        border-color: #1F2853;
        box-shadow: 0 12px 22px -12px #1F2853;
        text-decoration: none;
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

    .cta-btn:hover {
        background-color: #b91c1c;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 15px 25px -10px #b91c1c;
        text-decoration: none;
    }

    /* Mid Banner */
    .mid-banner {
        background: #1f2853;
        border-radius: 2rem;
        padding: 2.5rem 3rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 2rem;
        margin: 3rem 0;
        color: white;
    }

    @media (max-width: 768px) {
        .mid-banner {
            padding: 2rem;
            flex-direction: column;
            text-align: center;
        }
        
        .mid-banner .d-flex {
            width: 100%;
            justify-content: center;
        }
    }

    .mid-banner p {
        color: rgba(255, 255, 255, 0.7);
    }

    /* Trust Strip */
    .trust-strip {
        display: flex;
        gap: 1.5rem;
        flex-wrap: wrap;
        justify-content: center;
        padding: 2rem 0;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
        margin: 3rem 0;
    }

    @media (max-width: 768px) {
        .trust-strip {
            border-radius: 40px;
            padding: 1rem;
        }
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

    /* Testimonial Avatar */
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

    /* Responsive */
    @media (max-width: 576px) {
        .container {
            padding-left: 20px;
            padding-right: 20px;
        }
    }

    /* Bento Grid */
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

    @media (max-width: 1200px) {
        .bento-grid {
            grid-template-columns: repeat(3, 1fr);
        }
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
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #1f2853;
    }

    .bento-card p {
        font-size: 0.9rem;
        color: var(--muted);
        line-height: 1.6;
    }

    .bg-blue {
        background-color: #1F2853;
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
        font-size: clamp(0.9rem, 2vw, 1.1rem);
        line-height: 1.6;
        opacity: 0.9;
        color: white;
    }

    /* Contrast Card */
    .contrast-card {
        background: #1F2853;
        border-radius: 24px;
        overflow: hidden;
        position: sticky;
        top: 90px;
        box-shadow: var(--card-shadow);
    }

    .contrast-card:hover {
        box-shadow: var(--card-hover-shadow);
    }

    .cc-head {
        background: rgba(255, 255, 255, 0.06);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding: 16px 22px;
        font-size: 11px;
        font-weight: 700;
        color: rgba(255, 255, 255, 0.5);
        letter-spacing: 0.1em;
        text-transform: uppercase;
    }

    .cc-cols {
        display: grid;
        grid-template-columns: 1fr 1fr;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .cc-col-label {
        padding: 10px 16px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        display: flex;
        align-items: center;
        gap: 6px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .cc-col-label.bad {
        color: #fca5a5;
        background: rgba(239, 68, 68, 0.08);
    }

    .cc-col-label.good {
        color: #6ee7b7;
        background: rgba(16, 185, 129, 0.08);
        border-left: 1px solid rgba(255, 255, 255, 0.08);
    }

    .cc-row {
        display: contents;
    }

    .cc-cell {
        padding: 13px 16px;
        font-size: 13px;
        line-height: 1.45;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .cc-cell.bad {
        color: rgba(255, 255, 255, 0.45);
        background: rgba(239, 68, 68, 0.04);
    }

    .cc-cell.good {
        color: rgba(255, 255, 255, 0.82);
        font-weight: 600;
        background: rgba(16, 185, 129, 0.04);
        border-left: 1px solid rgba(255, 255, 255, 0.06);
    }

    .cc-cell:last-child,
    .cc-cell:nth-last-child(2) {
        border-bottom: none;
    }

    .cc-footer {
        padding: 18px 22px;
        background: var(--primary-red);
    }

    .cc-footer p {
        font-size: 13px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 10px;
        line-height: 1.4;
    }

    .btn-cc {
        display: block;
        text-align: center;
        background: #fff;
        color: #1F2853;
        font-family: inherit;
        font-size: 14px;
        font-weight: 800;
        padding: 11px;
        border-radius: 9px;
        border: none;
        cursor: pointer;
        transition: all 0.2s;
    }

    .btn-cc:hover {
        background: var(--light-bg);
        transform: translateY(-2px);
    }

    /* Ticker */
    .ticker {
        background: #1F2853;
        padding: 13px 0;
        overflow: hidden;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .ticker-track {
        display: flex;
        white-space: nowrap;
        animation: tick 30s linear infinite;
    }

    .ticker-track:hover {
        animation-play-state: paused;
    }

    @keyframes tick {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }

    .tick-item {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.55);
        padding: 0 32px;
    }

    .tick-item .bullet {
        color: #60a5fa;
        font-size: 16px;
    }

    /* Cost Cards */
    .cost-row {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        margin-top: 2rem;
    }

    @media (max-width: 768px) {
        .cost-row {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .cost-row {
            grid-template-columns: 1fr;
        }
    }

    .cost-card {
        background: #fff;
        border-radius: 24px;
        padding: 32px;
        border: 1.5px solid var(--border-color);
        position: relative;
        overflow: hidden;
        transition: all 0.25s;
        box-shadow: var(--card-shadow);
    }

    .cost-card:hover {
        border-color: var(--primary-red);
        box-shadow: var(--card-hover-shadow);
        transform: translateY(-3px);
    }

    .cost-n {
        font-size: 56px;
        font-weight: 800;
        color: var(--border-color);
        letter-spacing: -0.05em;
        line-height: 1;
        margin-bottom: 12px;
        -webkit-text-stroke: 2px var(--border-color);
    }

    .cost-card:hover .cost-n {
        color: rgba(220, 38, 38, 0.1);
        -webkit-text-stroke: 2px var(--primary-red);
    }

    .cost-card h3 {
        font-size: 18px;
        font-weight: 800;
        color: #1F2853;
        margin-bottom: 10px;
        letter-spacing: -0.03em;
    }

    .cost-card p {
        font-size: 14px;
        color: var(--muted);
        line-height: 1.7;
    }

    /* Comparison Table */
    .ctable {
        width: 100%;
        border-collapse: collapse;
        border-radius: 24px;
        overflow: hidden;
        border: 1.5px solid var(--border-color);
        box-shadow: var(--card-shadow);
    }

    .ctable th {
        padding: 16px 22px;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        text-align: left;
    }

    .ctable th:first-child {
        background: var(--light-bg);
        color: var(--muted);
        width: 30%;
    }

    .ctable th.them {
        background: var(--light-bg);
        color: var(--muted);
        text-align: center;
    }

    .ctable th.us {
        background: #1F2853;
        color: #fff;
        text-align: center;
        font-size: 13px;
    }

    .ctable th.us span {
        display: block;
        font-size: 11px;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.5);
        text-transform: none;
        letter-spacing: 0;
        margin-top: 2px;
    }

    .ctable td {
        padding: 15px 22px;
        font-size: 14.5px;
        border-top: 1px solid var(--border-color);
    }

    .ctable td:first-child {
        font-weight: 600;
        color: #1F2853;
        background: #fff;
    }

    .ctable td.them {
        text-align: center;
        color: var(--muted);
    }

    .ctable td.us {
        text-align: center;
        background: rgba(26, 60, 110, 0.03);
        font-weight: 700;
        color: #1F2853;
    }

    .ctable tr:hover td {
        background: var(--light-bg);
    }

    .ctable tr:hover td.us {
        background: rgba(26, 60, 110, 0.06);
    }

    .check {
        color: #166534;
        font-size: 16px;
    }

    .cross {
        color: #a3a6aa;
        font-size: 16px;
    }

    .partial {
        color: #f59e0b;
        font-size: 14px;
        font-weight: 600;
    }

    /* Guarantee Section */
    .guarantee {
        padding: 3rem 0;
        background: #1F2853;
        position: relative;
        overflow: hidden;
    }

    .guarantee::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(ellipse 900px 600px at 50% 50%, rgba(220, 38, 38, 0.15) 0%, transparent 65%);
        pointer-events: none;
    }

    .guarantee-inner {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 80px;
        align-items: center;
        position: relative;
        z-index: 1;
    }

    @media (max-width: 768px) {
        .guarantee-inner {
            grid-template-columns: 1fr;
            gap: 40px;
        }
    }

    .gar-left {
        text-align: left;
    }

    .gar-seal {
        width: 96px;
        height: 96px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--primary-red), #b91c1c);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 38px;
        margin-bottom: 24px;
        box-shadow: 0 0 0 6px rgba(220, 38, 38, 0.2), 0 0 0 14px rgba(220, 38, 38, 0.1);
    }

    .gar-left h2 {
        font-size: clamp(28px, 3.5vw, 44px);
        font-weight: 800;
        color: #fff;
        letter-spacing: -0.04em;
        line-height: 1.12;
        margin-bottom: 16px;
    }

    .gar-left p {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.58);
        line-height: 1.8;
    }

    .gar-right {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .gar-item {
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 24px;
        padding: 22px 24px;
        transition: all 0.25s;
    }

    .gar-item:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: var(--primary-red);
        transform: translateY(-2px);
    }

    .gar-item-top {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 8px;
    }

    .gar-badge {
        background: linear-gradient(135deg, var(--primary-red), #b91c1c);
        color: #fff;
        font-size: 11px;
        font-weight: 700;
        padding: 4px 11px;
        border-radius: 100px;
        letter-spacing: 0.06em;
        text-transform: uppercase;
    }

    .gar-item h4 {
        font-size: 16px;
        font-weight: 800;
        color: #fff;
        letter-spacing: -0.02em;
    }

    .gar-item p {
        font-size: 13.5px;
        color: rgba(255, 255, 255, 0.55);
        line-height: 1.65;
    }

    /* Process Section */
    .process {
        padding: 3rem 0;
        background: var(--light-bg);
    }

    .process-inner {
        display: grid;
        grid-template-columns: 380px 1fr;
        gap: 80px;
        align-items: start;
    }

    @media (max-width: 992px) {
        .process-inner {
            grid-template-columns: 1fr;
            gap: 40px;
        }
    }

    .process-left h2 {
        font-size: clamp(26px, 3vw, 38px);
        font-weight: 800;
        color: #1F2853;
        letter-spacing: -0.04em;
        line-height: 1.2;
        margin-bottom: 14px;
    }

    .process-left p {
        font-size: 15.5px;
        color: var(--muted);
        line-height: 1.8;
        margin-bottom: 28px;
    }

    .p-stats {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
        margin-top: 32px;
    }

    .p-stat {
        background: #fff;
        border-radius: 16px;
        padding: 18px 20px;
        border: 1.5px solid var(--border-color);
        text-align: center;
    }

    .p-stat-n {
        font-size: 30px;
        font-weight: 800;
        color: #1F2853;
        letter-spacing: -0.04em;
        line-height: 1;
        margin-bottom: 4px;
    }

    .p-stat-l {
        font-size: 13px;
        color: var(--muted);
        line-height: 1.4;
    }

    /* Vertical Timeline */
    .vtl {
        position: relative;
        padding-left: 44px;
    }

    .vtl::before {
        content: '';
        position: absolute;
        left: 16px;
        top: 12px;
        bottom: 12px;
        width: 2px;
        background: repeating-linear-gradient(to bottom, var(--primary-red) 0, var(--primary-red) 8px, transparent 8px, transparent 16px);
        opacity: 0.3;
    }

    .vt-step {
        position: relative;
        margin-bottom: 36px;
    }

    .vt-step:last-child {
        margin-bottom: 0;
    }

    .vt-dot {
        position: absolute;
        left: -44px;
        top: 0;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: #fff;
        border: 2.5px solid var(--primary-red);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        font-weight: 800;
        color: var(--primary-red);
        box-shadow: 0 0 0 4px var(--light-bg);
    }

    .vt-step:hover .vt-dot {
        background: var(--primary-red);
        color: #fff;
    }

    .vt-body {
        background: #fff;
        border-radius: 24px;
        padding: 22px 24px;
        border: 1.5px solid var(--border-color);
        transition: all 0.25s;
        box-shadow: var(--card-shadow);
    }

    .vt-step:hover .vt-body {
        border-color: var(--primary-red);
        box-shadow: var(--card-hover-shadow);
        transform: translateY(-2px);
    }

    .vt-tag {
        font-size: 11px;
        font-weight: 700;
        color: var(--primary-red);
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 7px;
    }

    .vt-body h3 {
        font-size: 16px;
        font-weight: 800;
        color: #1F2853;
        margin-bottom: 8px;
        letter-spacing: -0.02em;
    }

    .vt-body p {
        font-size: 14px;
        color: var(--muted);
        line-height: 1.65;
    }

    .vt-detail {
        margin-top: 10px;
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    .vt-chip {
        font-size: 12px;
        font-weight: 600;
        background: var(--light-bg);
        color: var(--primary-red);
        padding: 3px 10px;
        border-radius: 100px;
        border: 1px solid var(--border-color);
    }

    /* Proof Section */
    .proof {
        padding: 3rem 0;
        background: #1F2853;
        overflow: hidden;
        position: relative;
    }

    .proof::after {
        content: '';
        position: absolute;
        right: -120px;
        top: -80px;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background: rgba(220, 38, 38, 0.08);
        pointer-events: none;
    }

    .proof-inner {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0;
        position: relative;
        z-index: 1;
    }

    @media (max-width: 768px) {
        .proof-inner {
            grid-template-columns: 1fr;
        }
    }

    .proof-left {
        padding-right: 64px;
        border-right: 1px solid rgba(255, 255, 255, 0.08);
    }

    @media (max-width: 768px) {
        .proof-left {
            padding-right: 0;
            border-right: none;
            padding-bottom: 40px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }
    }

    .proof-right {
        padding-left: 64px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    @media (max-width: 768px) {
        .proof-right {
            padding-left: 0;
            padding-top: 40px;
        }
    }

    .proof-left h2 {
        font-size: clamp(28px, 3.5vw, 44px);
        font-weight: 800;
        color: #fff;
        letter-spacing: -0.05em;
        line-height: 1.1;
        margin-bottom: 18px;
    }

    .proof-left h2 em {
        font-style: normal;
        color: #f87171;
    }

    .proof-left p {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.55);
        line-height: 1.8;
        margin-bottom: 28px;
    }

    .btn-proof {
        background: var(--primary-red);
        color: #fff;
        font-size: 15px;
        font-weight: 700;
        padding: 14px 28px;
        border-radius: 10px;
        border: none;
        cursor: pointer;
        font-family: inherit;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s;
    }

    .btn-proof:hover {
        background: #b91c1c;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px -10px var(--primary-red);
    }

    .proof-stats {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .pr-stat {
        display: flex;
        align-items: baseline;
        gap: 16px;
        padding: 20px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.07);
    }

    .pr-stat:last-child {
        border-bottom: none;
    }

    .pr-n {
        font-size: 52px;
        font-weight: 800;
        color: #fff;
        letter-spacing: -0.05em;
        line-height: 1;
        flex-shrink: 0;
        min-width: 100px;
    }

    .pr-info h4 {
        font-size: 16px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 4px;
        letter-spacing: -0.02em;
    }

    .pr-info p {
        font-size: 13.5px;
        color: rgba(255, 255, 255, 0.5);
        line-height: 1.5;
    }

    /* Testimonials Grid */
    .t-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 2rem;
    }

    @media (max-width: 768px) {
        .t-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .t-grid {
            grid-template-columns: 1fr;
        }
    }

    .t-card {
        border-radius: 24px;
        padding: 28px;
        border: 1.5px solid var(--border-color);
        transition: all 0.25s;
        background: #fff;
        box-shadow: var(--card-shadow);
    }

    .t-card:nth-child(2) {
        background: #1F2853;
        border-color: #1F2853;
        color: white;
    }

    .t-card:hover {
        border-color: var(--primary-red);
        box-shadow: var(--card-hover-shadow);
        transform: translateY(-2px);
    }

    .t-stars {
        color: #fbbf24;
        font-size: 13px;
        letter-spacing: 2px;
        margin-bottom: 14px;
    }

    .t-tag {
        font-size: 11px;
        font-weight: 700;
        color: var(--primary-red);
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .t-card:nth-child(2) .t-tag {
        color: #f87171;
    }

    .t-quote {
        font-size: 14.5px;
        color: var(--ink);
        line-height: 1.72;
        font-style: italic;
        margin-bottom: 22px;
    }

    .t-card:nth-child(2) .t-quote {
        color: rgba(255, 255, 255, 0.72);
    }

    .t-person {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .t-av {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(135deg, #1F2853, var(--primary-red));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        font-weight: 800;
        color: #fff;
        flex-shrink: 0;
    }

    .t-name {
        font-size: 14px;
        font-weight: 700;
        color: #1F2853;
    }

    .t-card:nth-child(2) .t-name {
        color: #fff;
    }

    .t-role {
        font-size: 12px;
        color: var(--muted);
    }

    .t-card:nth-child(2) .t-role {
        color: rgba(255, 255, 255, 0.45);
    }

    /* CTA Split */
    .cta-split {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    @media (max-width: 768px) {
        .cta-split {
            grid-template-columns: 1fr;
        }
    }

    .cta-l {
        background: var(--primary-red);
        padding: 80px 64px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    @media (max-width: 768px) {
        .cta-l {
            padding: 48px 28px;
        }
    }

    .cta-l h2 {
        font-size: clamp(26px, 3vw, 40px);
        font-weight: 800;
        color: #fff;
        letter-spacing: -0.04em;
        line-height: 1.15;
        margin-bottom: 14px;
    }

    .cta-l p {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.7);
        line-height: 1.8;
        margin-bottom: 28px;
    }

    .cta-btns {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .btn-cta1 {
        background: #fff;
        color: var(--primary-red);
        font-size: 15px;
        font-weight: 800;
        padding: 14px 28px;
        border-radius: 10px;
        border: none;
        cursor: pointer;
        font-family: inherit;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s;
    }

    .btn-cta1:hover {
        background: var(--light-bg);
        transform: translateY(-2px);
        box-shadow: 0 10px 20px -10px rgba(0, 0, 0, 0.2);
    }

    .btn-cta2 {
        color: #fff;
        font-size: 15px;
        font-weight: 600;
        padding: 14px 28px;
        border-radius: 10px;
        border: 1.5px solid rgba(255, 255, 255, 0.35);
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s;
        text-decoration: none;
    }

    .btn-cta2:hover {
        border-color: #fff;
        background: rgba(255, 255, 255, 0.1);
        transform: translateY(-2px);
    }

    .cta-r {
        background: #1F2853;
        padding: 80px 64px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    @media (max-width: 768px) {
        .cta-r {
            padding: 48px 28px;
        }
    }

    .cta-r h3 {
        font-size: 16px;
        font-weight: 800;
        color: #fff;
        margin-bottom: 20px;
        letter-spacing: -0.02em;
    }

    .inc-list {
        display: flex;
        flex-direction: column;
        gap: 11px;
    }

    .inc-item {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 14.5px;
        color: rgba(255, 255, 255, 0.65);
        line-height: 1.5;
    }

    .inc-dot {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: rgba(220, 38, 38, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-top: 1px;
        font-size: 9px;
        color: #f87171;
        font-weight: 800;
    }

    /* FAQ Section - Corrected Styles */
    .faq {
        padding: 3rem 0;
        background: var(--light-bg);
    }

    .faq-inner {
        display: grid;
        grid-template-columns: 380px 1fr;
        gap: 64px;
        align-items: start;
    }

    @media (max-width: 992px) {
        .faq-inner {
            grid-template-columns: 1fr;
            gap: 40px;
        }
    }

    .faq-left h2 {
        font-size: clamp(24px, 3vw, 34px);
        font-weight: 800;
        color: #1F2853;
        letter-spacing: -0.04em;
        line-height: 1.2;
        margin-bottom: 14px;
    }

    .faq-left p {
        font-size: 15.5px;
        color: var(--muted);
        line-height: 1.8;
        margin-bottom: 28px;
    }

    .faq-cta-box {
        background: #1F2853;
        border-radius: 24px;
        padding: 24px;
        margin-top: 28px;
    }

    .faq-cta-box p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.65);
        line-height: 1.6;
        margin-bottom: 14px;
    }

    .btn-faq {
        width: 100%;
        background: var(--primary-red);
        color: #fff;
        font-family: inherit;
        font-size: 14px;
        font-weight: 700;
        padding: 12px;
        border-radius: 9px;
        border: none;
        cursor: pointer;
        transition: all 0.2s;
    }

    .btn-faq:hover {
        background: #b91c1c;
        transform: translateY(-2px);
    }

    /* Accordion Styles */
    .acc-wrap {
        width: 100%;
    }

    .ai {
        background: white;
        border-radius: 24px;
        margin-bottom: 20px;
        border: 1px solid var(--border-color);
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: var(--card-shadow);
    }

    .ai:hover {
        border-color: rgba(220, 38, 38, 0.3);
        box-shadow: var(--card-hover-shadow);
    }

    .aq {
        width: 100%;
        text-align: left;
        padding: 24px 30px;
        background: white;
        border: none;
        font-size: 16px;
        font-weight: 600;
        color: #1F2853;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: inherit;
        line-height: 1.5;
    }

    .aq:hover {
        color: var(--primary-red);
    }

    .aq.open {
        color: var(--primary-red);
        border-bottom: 1px solid var(--border-color);
    }

    .aa-arr {
        font-size: 14px;
        transition: transform 0.3s ease;
        color: var(--muted);
    }

    .aq.open .aa-arr {
        transform: rotate(180deg);
        color: var(--primary-red);
    }

    .aa {
        padding: 0 30px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease, padding 0.3s ease;
        background: white;
        line-height: 1.7;
        font-size: 15px;
        color: var(--muted);
    }

    .aa.open {
        padding: 15px 30px 30px 30px;
        max-height: 500px;
    }

    @media (max-width: 768px) {
        .aq {
            padding: 20px;
            font-size: 15px;
        }
        
        .aa {
            padding: 0 20px;
            font-size: 14px;
        }
        
        .aa.open {
            padding: 0 20px 20px 20px;
        }
    }

    /* Hero Pricing Card */
    .hero-pricing-card {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border-radius: 28px;
        padding: 36px 32px;
        color: white;
        max-width: 420px;
        margin-left: auto;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        animation: floatCard 5s ease-in-out infinite;
    }

    @keyframes floatCard {
        0% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-10px);
        }
        100% {
            transform: translateY(0px);
        }
    }

    .price-label {
        font-size: 12px;
        letter-spacing: .15em;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.5);
        margin-bottom: 10px;
    }

    .price-title {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .price-row {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .price-row:last-child {
        border-bottom: none;
    }

    .price-red {
        color: #ff5f6a;
        font-weight: 700;
    }

    .divider {
        height: 1px;
        background: rgba(255, 255, 255, 0.12);
        margin: 14px 0;
    }

    .price-badge {
        margin-top: 18px;
        background: linear-gradient(90deg, #1fd1a5, #16a085);
        color: white;
        text-align: center;
        padding: 10px;
        border-radius: 40px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .05em;
    }

    /* Fade Animation */
    .fade {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.55s ease, transform 0.55s ease;
    }

    .fade.in {
        opacity: 1;
        transform: translateY(0);
    }

    /* Modal */
    .mo {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.55);
        z-index: 999;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(4px);
    }

    .mo.show {
        display: flex;
    }

    .md {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 28px;
        padding: 36px;
        max-width: 460px;
        width: 90%;
        position: relative;
        box-shadow: 0 50px 70px -20px rgba(0, 0, 0, 0.3);
    }

    .mc {
        position: absolute;
        top: 16px;
        right: 18px;
        background: none;
        border: none;
        font-size: 22px;
        color: var(--muted);
        cursor: pointer;
    }

    .mf input,
    .mf select {
        width: 100%;
        padding: 13px 16px;
        border: 1.5px solid var(--border-color);
        border-radius: 60px;
        margin-bottom: 12px;
        font-family: inherit;
    }

    .mf input:focus,
    .mf select:focus {
        border-color: var(--primary-red);
        outline: none;
    }

    .mf-btn {
        background: var(--primary-red);
        color: white;
        border: none;
        padding: 14px;
        border-radius: 60px;
        font-weight: 700;
        width: 100%;
        cursor: pointer;
        transition: all 0.2s;
    }

    .mf-btn:hover {
        background: #b91c1c;
        transform: translateY(-2px);
    }

    .breadcrumb-custom span {
        color: #fff;
    }

    @media (max-width: 991px) {
        .hero-pricing-card {
            margin: 40px auto 0;
            max-width: 100%;
        }
    }
</style>

<div class="py-lg-4 py-3"></div>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-12 fade">
                <ul class="breadcrumb-custom">
                    <li><a href="./">Home</a></li>
                    <li><a href="./">Who We help</a></li>
                    <li><span>For Companies</span></li>
                </ul>

                <h1 class="banner-title mb-4">
                    XBRL Filing Your <span class="text-primary-red">Company</span><br>Can Rely On. Every Single Year.
                </h1>

                <p class="text-white-70 lead mb-5">
                    Your company has an annual obligation to file financial statements with ACRA in XBRL format. The question isn't whether to file — it's whether to handle it in-house, piece it together, or trust a proven specialist. Here's why companies choose Xberra Tagger.
                </p>

                <div class="row">
                    <!-- <div class="col-md-3 col-6 mb-3">
                        <div class="stat-card">
                            <div class="stat-number">S$50</div>
                            <div class="stat-label">Starting Price</div>
                        </div>
                    </div> -->
                    <div class="col-md-3 col-6 mb-3">
                        <div class="stat-card">
                            <div class="stat-number">Free</div>
                            <div class="stat-label">Trial Available</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="stat-card">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">Satisfaction</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="stat-card">
                            <div class="stat-number">ISO</div>
                            <div class="stat-label">Certified</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT PRICING CARD -->
            <div class="col-lg-5 col-12 mt-5 mt-lg-0 fade">
                <div class="hero-pricing-card">
                    <div class="price-label">PRICING AT A GLANCE</div>
                    <h4 class="price-title">XBRL Filing Plans</h4>
                    <div class="price-row">
                        <span>Simplified XBRL</span>
                        <!-- <strong class="price-red">S$50</strong> -->
                    </div>
                    <div class="price-row">
                        <span>Full XBRL (Standalone)</span>
                        <strong class="price-red">S$100</strong>
                    </div>
                    <div class="price-row">
                        <span>Full XBRL (Consolidated)</span>
                        <strong class="price-red">S$200</strong>
                    </div>
                    <div class="divider"></div>
                    <div class="price-row">
                        <span>Free Trial</span>
                        <strong>✓ Available</strong>
                    </div>
                    <div class="price-row">
                        <span>Free Amendments</span>
                        <strong>✓ Included</strong>
                    </div>
                    <div class="price-row">
                        <span>Satisfaction Guarantee</span>
                        <strong>✓ Full Refund</strong>
                    </div>
                    <div class="divider"></div>
                    <div class="price-badge">
                        NO HIDDEN COSTS
                    </div>
                </div>
            </div>
        </div>

        <!-- Trust Strip -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="d-flex flex-wrap gap-4 justify-content-start">
                    <span class="ht-item d-flex align-items-center gap-2 text-white-70">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>100% ACRA acceptance</span>
                    </span>
                    <span class="ht-item d-flex align-items-center gap-2 text-white-70">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <span>2–3 business day turnaround</span>
                    </span>
                    <span class="ht-item d-flex align-items-center gap-2 text-white-70">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        <span>Zero amendment fees</span>
                    </span>
                    <span class="ht-item d-flex align-items-center gap-2 text-white-70">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                        <span>All input formats accepted</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TICKER -->
<div class="ticker">
    <div class="ticker-track">
        <span class="tick-item"><span class="bullet">✦</span> 100% ACRA Acceptance Rate</span>
        <span class="tick-item"><span class="bullet">✦</span> 2–3 Business Day Turnaround</span>
        <span class="tick-item"><span class="bullet">✦</span> Zero Amendment Fees</span>
        <span class="tick-item"><span class="bullet">✦</span> Word, Excel & PDF Accepted</span>
        <span class="tick-item"><span class="bullet">✦</span> 500+ Companies Filed</span>
        <span class="tick-item"><span class="bullet">✦</span> Simplified, Full Standalone & Consolidated</span>
        <span class="tick-item"><span class="bullet">✦</span> Direct ACRA BizFile Submission</span>
        <span class="tick-item"><span class="bullet">✦</span> 4.9 Star Average Rating</span>
        <!-- duplicate for seamless loop -->
        <span class="tick-item"><span class="bullet">✦</span> 100% ACRA Acceptance Rate</span>
        <span class="tick-item"><span class="bullet">✦</span> 2–3 Business Day Turnaround</span>
        <span class="tick-item"><span class="bullet">✦</span> Zero Amendment Fees</span>
        <span class="tick-item"><span class="bullet">✦</span> Word, Excel & PDF Accepted</span>
        <span class="tick-item"><span class="bullet">✦</span> 500+ Companies Filed</span>
        <span class="tick-item"><span class="bullet">✦</span> Simplified, Full Standalone & Consolidated</span>
        <span class="tick-item"><span class="bullet">✦</span> Direct ACRA BizFile Submission</span>
        <span class="tick-item"><span class="bullet">✦</span> 4.9 Star Average Rating</span>
    </div>
</div>

<!-- WHY OUTSOURCE -->
<section class="why py-5 bg-light-custom">
    <div class="container">
        <div class="why-top row align-items-end mb-5">
            <div class="col-lg-6 fade">
                <div class="mini-badge"><span>✦</span> THE REAL COST OF HANDLING IT INTERNALLY</div>
                <h2 class="section-title">XBRL Filing Is Specialist Work.<br><span class="text-primary-red">Don't Make It an Internal Problem.</span></h2>
            </div>
            <div class="col-lg-6 fade">
                <p class="text-muted-custom">ACRA's XBRL taxonomy is a specialist standard that changes with regulatory updates. Companies that try to manage it without expert support consistently run into the same three problems — delayed filings, ACRA rejections, and staff time spent on something far outside their core function.</p>
            </div>
        </div>

        <div class="cost-row">
            <div class="cost-card fade">
                <div class="cost-n">01</div>
                <h3>Staff Time Has Real Value</h3>
                <p>Your finance or accounting team's time is better spent on analysis, reporting, and business decisions — not learning XBRL taxonomy structures, downloading BizFile software, and troubleshooting ACRA portal issues. Every hour spent on the XBRL process is an hour not spent on your business.</p>
            </div>
            <div class="cost-card fade">
                <div class="cost-n">02</div>
                <h3>ACRA Rejections Are Costly</h3>
                <p>An incorrectly formatted XBRL file is rejected by ACRA's BizFile system. Each rejection means identifying the error, correcting the file, and resubmitting — all while your deadline advances. Xberra Tagger validates every file against the BizFile taxonomy before submission. Our acceptance rate is 100%.</p>
            </div>
            <div class="cost-card fade">
                <div class="cost-n">03</div>
                <h3>Amendments Arrive Without Warning</h3>
                <p>Auditors raise late queries. Directors request corrections. Numbers change between initial preparation and ACRA submission. When your XBRL provider charges per amendment, every revision becomes a cost conversation. Our amendments are always zero charge — no matter how many rounds.</p>
            </div>
        </div>
    </div>
</section>

<!-- COMPARISON TABLE -->
<section class="compare py-5" id="compare">
    <div class="container">
        <div class="text-center mb-5 fade">
            <div class="mini-badge" style="display: inline-block;">✦ MAKE AN INFORMED DECISION</div>
            <h2 class="section-title">Xberra Tagger vs Doing It Yourself vs Generic Provider</h2>
            <p class="text-muted-custom" style="max-width: 800px; margin: 0 auto;">Before you commit to any approach, compare what each option actually delivers — on the factors that matter most when ACRA filing is on the line.</p>
        </div>

        <div class="fade" style="overflow-x: auto">
            <table class="ctable">
                <thead>
                    <tr>
                        <th></th>
                        <th class="them">DIY / In-House</th>
                        <th class="them">Generic Provider</th>
                        <th class="us">Xberra Tagger <span>Recommended</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Turnaround Time</td>
                        <td class="them">1–3 weeks+</td>
                        <td class="them">5–7 business days</td>
                        <td class="us">2–3 Business Days</td>
                    </tr>
                    <tr>
                        <td>ACRA Acceptance Guarantee</td>
                        <td class="them"><span class="cross">—</span></td>
                        <td class="them"><span class="partial">Not stated</span></td>
                        <td class="us"><span class="check">✓</span> 100% Guaranteed</td>
                    </tr>
                    <tr>
                        <td>Input Format Flexibility</td>
                        <td class="them">Depends on software</td>
                        <td class="them"><span class="partial">Usually PDF only</span></td>
                        <td class="us"><span class="check">✓</span> Word, Excel & PDF</td>
                    </tr>
                    <tr>
                        <td>Amendment Fees</td>
                        <td class="them">Your staff time</td>
                        <td class="them"><span class="cross">Per revision</span></td>
                        <td class="us"><span class="check">✓</span> Zero — always</td>
                    </tr>
                    <tr>
                        <td>Direct ACRA Submission</td>
                        <td class="them"><span class="partial">You manage portal</span></td>
                        <td class="them"><span class="partial">Sometimes</span></td>
                        <td class="us"><span class="check">✓</span> We submit on your behalf</td>
                    </tr>
                    <tr>
                        <td>XBRL Types Covered</td>
                        <td class="them"><span class="partial">Simplified only (typically)</span></td>
                        <td class="them"><span class="">Limited</span></td>
                        <td class="us"><span class="check">✓</span> Simplified, Full & Consolidated</td>
                    </tr>
                    <tr>
                        <td>Dedicated Account Manager</td>
                        <td class="them"><span class="cross">—</span></td>
                        <td class="them"><span class="cross">—</span></td>
                        <td class="us"><span class="check">✓</span> Named contact</td>
                    </tr>
                    <tr>
                        <td>Staff Training Required</td>
                        <td class="them"><span class="cross">Significant</span></td>
                        <td class="them"><span class="cross">Moderate</span></td>
                        <td class="us"><span class="check">✓</span> None</td>
                    </tr>
                    <tr>
                        <td>Official ACRA Confirmation</td>
                        <td class="them"><span class="check">✓</span></td>
                        <td class="them"><span class="partial">Varies</span></td>
                        <td class="us"><span class="check">✓</span> Always provided</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="text-center mt-3 text-muted-custom" style="font-size: 13.5px;">Comparison is indicative based on common industry practices. <a href="./xbrl-filing-services-contact-singapore" style="text-decoration: none;" class="text-primary-red ">Contact us</a> to discuss your specific requirements.</p>
    </div>
</section>

<!-- GUARANTEE -->
<section class="guarantee">
    <div class="container">
        <div class="guarantee-inner">
            <div class="gar-left fade">
                <div class="gar-seal">🛡</div>
                <h2>Three Guarantees We Put in Writing</h2>
                <p>These are not marketing claims. They are the operational commitments every Xberra Tagger client receives — regardless of company size, filing type, or portfolio volume.</p>
            </div>
            <div class="gar-right fade">
                <div class="gar-item">
                    <div class="gar-item-top"><span class="gar-badge">Guarantee 01</span></div>
                    <h4>100% ACRA Filing Acceptance</h4>
                    <p>Every XBRL file we produce is validated against ACRA's BizFile taxonomy before submission. If ACRA rejects a filing for any reason attributable to our work, we correct and resubmit at zero cost. No exceptions, no conditions, no debate.</p>
                </div>
                <div class="gar-item">
                    <div class="gar-item-top"><span class="gar-badge">Guarantee 02</span></div>
                    <h4>Unlimited Amendments at Zero Charge</h4>
                    <p>From the moment you engage us to the moment your filing is confirmed by ACRA, any revision to the XBRL file — whether your financials changed, your auditor raised a query, or a director's name needs correcting — is handled at no additional cost.</p>
                </div>
                <div class="gar-item">
                    <div class="gar-item-top"><span class="gar-badge">Guarantee 03</span></div>
                    <h4>2–3 Business Day Standard Turnaround</h4>
                    <p>From receipt of your signed financial statements to delivery of the completed XBRL package for your review — 2 to 3 business days. If your deadline requires faster turnaround, contact us before uploading and we'll confirm whether expedited processing is available.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="process">
    <div class="container">
        <div class="process-inner">
            <div class="fade">
                <div class="mini-badge"><span>✦</span> HOW THE PROCESS WORKS</div>
                <h2 class="section-title">From Signed Accounts to ACRA Filing — Four Steps, Zero Complexity</h2>
                <p class="text-muted-custom">You don't need XBRL software. You don't need access to BizFile or ACRA's portal. You don't need to understand the taxonomy. Here's everything that happens between receiving your documents and delivering ACRA's confirmation.</p>
                <div class="p-stats">
                    <div class="p-stat">
                        <div class="p-stat-n">2–3</div>
                        <div class="p-stat-l">Business day turnaround</div>
                    </div>
                    <div class="p-stat">
                        <div class="p-stat-n">100%</div>
                        <div class="p-stat-l">ACRA acceptance rate</div>
                    </div>
                    <div class="p-stat">
                        <div class="p-stat-n">500+</div>
                        <div class="p-stat-l">Companies filed annually</div>
                    </div>
                    <div class="p-stat">
                        <div class="p-stat-n">4.9★</div>
                        <div class="p-stat-l">Average client rating</div>
                    </div>
                </div>
            </div>
            <div class="vtl fade">
                <div class="vt-step">
                    <div class="vt-dot">1</div>
                    <div class="vt-body">
                        <div class="vt-tag">Upload</div>
                        <h3>You Share Your Signed Financial Statements</h3>
                        <p>Upload your signed accounts via our secure client portal. Your accountant or auditor prepares these as they normally would. Nothing about their process needs to change — just share the final, signed version with us.</p>
                        <div class="vt-detail"><span class="vt-chip">Word accepted</span><span class="vt-chip">Excel accepted</span><span class="vt-chip">PDF accepted</span></div>
                    </div>
                </div>
                <div class="vt-step">
                    <div class="vt-dot">2</div>
                    <div class="vt-body">
                        <div class="vt-tag">Conversion</div>
                        <h3>We Convert to ACRA-Compliant XBRL</h3>
                        <p>Our XBRL specialists convert your financial statements to XBRL format, applying the correct ACRA taxonomy tags for your company type — Simplified, Full Standalone, or Consolidated. Every file is validated against BizFile before we deliver it for your review.</p>
                        <div class="vt-detail"><span class="vt-chip">Simplified XBRL</span><span class="vt-chip">Full XBRL</span><span class="vt-chip">Consolidated</span></div>
                    </div>
                </div>
                <div class="vt-step">
                    <div class="vt-dot">3</div>
                    <div class="vt-body">
                        <div class="vt-tag">Review & Revise</div>
                        <h3>You Review — We Revise Until You're Satisfied</h3>
                        <p>You receive the completed XBRL package for review within 2–3 business days. If you need changes — whether due to updated financials, director corrections, or auditor revisions — we make them. Revisions are unlimited and always free. Once you're satisfied, you approve and we proceed.</p>
                        <div class="vt-detail"><span class="vt-chip">Unlimited revisions</span><span class="vt-chip">Zero amendment fees</span></div>
                    </div>
                </div>
                <div class="vt-step">
                    <div class="vt-dot">4</div>
                    <div class="vt-body">
                        <div class="vt-tag">Filing</div>
                        <h3>We Submit to ACRA — You Receive Confirmation</h3>
                        <p>We transmit the approved XBRL directly to ACRA through BizFile on your company's behalf. You don't need an ACRA account, BizFile login, or any portal access. Once ACRA processes the filing — typically the same day — we deliver the official filing confirmation to you.</p>
                        <div class="vt-detail"><span class="vt-chip">Same-day ACRA confirmation</span><span class="vt-chip">Official acknowledgement</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROOF -->
<section class="proof">
    <div class="container">
        <div class="proof-inner">
            <div class="proof-left fade">
                <div class="mini-badge" style="color: #f87171; background: rgba(248, 113, 113, 0.1);">✦ THE NUMBERS</div>
                <h2>Results That<br><em class="text-primary-red">Speak for Themselves</em></h2>
                <p>Xberra Tagger has been filing XBRL with ACRA on behalf of companies across Singapore since our founding. These are the operational outcomes our clients consistently experience — not projections, not averages across all industries. Our numbers, our clients.</p>
                <a href="./xbrl-filing-services-contact-singapore"><button class="btn-proof">Start Your Filing ➜</button></a>
            </div>
            <div class="proof-right fade">
                <div class="proof-stats">
                    <div class="pr-stat">
                        <div class="pr-n">500+</div>
                        <div class="pr-info">
                            <h4>Companies Filed With ACRA</h4>
                            <p>Across all XBRL types — Simplified, Full Standalone, and Consolidated — in Singapore</p>
                        </div>
                    </div>
                    <div class="pr-stat">
                        <div class="pr-n">100%</div>
                        <div class="pr-info">
                            <h4>ACRA Acceptance Rate</h4>
                            <p>Zero post-submission rejections attributable to our XBRL conversion across all filings</p>
                        </div>
                    </div>
                    <div class="pr-stat">
                        <div class="pr-n">4.9★</div>
                        <div class="pr-info">
                            <h4>Average Client Rating</h4>
                            <p>Across 500+ Reviews from company directors, finance managers, and corporate secretaries</p>
                        </div>
                    </div>
                    <div class="pr-stat">
                        <div class="pr-n">2–3</div>
                        <div class="pr-info">
                            <h4>Business Day Turnaround</h4>
                            <p>Standard from receipt of signed financial statements to XBRL package delivered for review</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testi py-5">
    <div class="container">
        <div class="d-flex align-items-end justify-content-between flex-wrap gap-3 mb-5">
            <div class="fade">
                <div class="mini-badge"><span>✦</span> CLIENT OUTCOMES</div>
                <h2 class="section-title">What Finance Leaders Say</h2>
                <p class="text-muted-custom">From CFOs to finance managers to company directors — across all company sizes.</p>
            </div>
            <div class="fade" style="font-size: 15px; font-weight: 700; color: var(--muted);">★★★★★ 4.9 / 5 average</div>
        </div>

        <div class="t-grid">
            <div class="t-card fade">
                <div class="t-stars">★★★★★</div>
                <div class="t-tag">Finance Manager · Technology</div>
                <p class="t-quote">We tried handling XBRL in-house for two years. The BizFile system alone took weeks to learn and we still had a rejection. Switched to Xberra Tagger and the first filing was done in 3 days, accepted on first submission. Never going back.</p>
                <div class="t-person">
                    <div class="t-av">S</div>
                    <div>
                        <div class="t-name">Sharon Lim</div>
                        <div class="t-role">Finance Manager, Tech Company, Singapore</div>
                    </div>
                </div>
            </div>
            <div class="t-card fade">
                <div class="t-stars">★★★★★</div>
                <div class="t-tag">CFO · Manufacturing</div>
                <p class="t-quote">What sold us was the amendment policy. Our auditors always raise late queries — every other provider quoted us per revision. With Xberra Tagger, the XBRL gets updated as many times as the auditors need, no additional fees. That alone pays for the service.</p>
                <div class="t-person">
                    <div class="t-av">J</div>
                    <div>
                        <div class="t-name">James K.</div>
                        <div class="t-role">CFO, Manufacturing Group, Singapore</div>
                    </div>
                </div>
            </div>
            <div class="t-card fade">
                <div class="t-stars">★★★★★</div>
                <div class="t-tag">Director · Services</div>
                <p class="t-quote">I didn't know what XBRL was until my corporate secretary explained the obligation. Xberra Tagger handled everything from the first call to ACRA confirmation. Two days. Completely painless. This is exactly what outsourcing should look like.</p>
                <div class="t-person">
                    <div class="t-av">N</div>
                    <div>
                        <div class="t-name">Nora</div>
                        <div class="t-role">Director, Professional Services, Singapore</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ - Corrected Section -->
<section class="faq">
    <div class="container">
        <div class="faq-inner">
            <div class="fade">
                <div class="mini-badge"><span>✦</span> FAQ</div>
                <h2 class="section-title">Questions from Company Decision-Makers</h2>
                <p class="text-muted-custom">Common questions from CFOs, finance managers, and directors evaluating XBRL filing options for their companies.</p>
                <div class="faq-cta-box">
                    <p>Have a specific question about your company's situation? Our team responds within 30 minutes.</p>
                    <a href="./xbrl-filing-services-contact-singapore"><button class="btn-faq">Contact Our Team ➜</button></a>
                </div>
            </div>
            <div class="acc-wrap fade">
                <?php foreach ($faq_items as $index => $faq): ?>
                    <div class="ai">
                        <button class="aq" onclick="toggleFAQ(<?= $index ?>)">
                            <?= $faq['q'] ?>
                            <span class="aa-arr">▼</span>
                        </button>
                        <div class="aa" id="faq-<?= $index ?>">
                            <?= $faq['a'] ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- CTA Split -->
<section class="cta-split">
    <div class="cta-l">
        <h2>Ready to File? Get a Quote in Minutes.</h2>
        <p>Tell us about your company — type, financial year-end, XBRL requirement — and we'll confirm the approach, turnaround, and rate before you commit to anything.</p>
        <div class="cta-btns">
            <a href="./xbrl-filing-services-contact-singapore"><button class="btn-cta1">Get a Quote ➜</button></a>
            <a href="./xbrl-filing-services-contact-singapore" class="btn-cta2">Free Consultation</a>
        </div>
    </div>
    <div class="cta-r">
        <h3>Every Filing Includes</h3>
        <div class="inc-list">
            <div class="inc-item"><span class="inc-dot">✓</span>Obligation confirmation before you commit — XBRL type, deadline, scope</div>
            <div class="inc-item"><span class="inc-dot">✓</span>Conversion from Word, Excel, or PDF at the same rate</div>
            <div class="inc-item"><span class="inc-dot">✓</span>Simplified XBRL, Full Standalone, or Full Consolidated — all covered</div>
            <div class="inc-item"><span class="inc-dot">✓</span>Pre-submission validation against ACRA's BizFile taxonomy</div>
            <div class="inc-item"><span class="inc-dot">✓</span>Unlimited revisions — zero additional fees, no conditions</div>
            <div class="inc-item"><span class="inc-dot">✓</span>Direct ACRA BizFile submission on your behalf</div>
            <div class="inc-item"><span class="inc-dot">✓</span>Official ACRA filing confirmation delivered to your team</div>
            <div class="inc-item"><span class="inc-dot">✓</span>2–3 business day standard turnaround</div>
        </div>
    </div>
</section>

<!-- Trust Strip -->
<div class="container">
    <div class="trust-strip fade">
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
            <span>GDPR Compliant</span>
        </div>
        <div class="trust-badge">
            <svg viewBox="0 0 24 24">
                <path d="M12 2v20M2 12h20" />
            </svg>
            <span>Secure File Transfer</span>
        </div>
        <div class="trust-badge">
            <svg viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10" />
                <path d="M12 2v20M2 12h20" />
            </svg>
            <span>Singapore-Hosted</span>
        </div>
        <div class="trust-badge">
            <svg viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            </svg>
            <span>Satisfaction Guarantee</span>
        </div>
    </div>
</div>

<!-- Final CTA -->
<section class="section-margin">
    <div class="container">
        <div class="bg-blue p-lg-5 p-4 rounded-5 text-center fade">
            <div class="mini-badge" style="background:rgba(255,255,255,0.15); color:white; display:inline-block; margin-bottom: 1.5rem;">
                <span>✦</span> AFFORDABLE ACRA COMPLIANCE
            </div>
            <h2 class="cta-title text-white fw-700 mb-3">
                Simple XBRL Filing
            </h2>
            <p class="cta-desc text-white mb-4">
                Ensure your small company's compliance with Xberra Tagger. Contact us today for a free trial or a custom quote — no XBRL expertise required.
            </p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="./xbrl-filing-services-contact-singapore"><button class="btn-primary-red" style="background:white; color:var(--primary-red); box-shadow:none;">Start Free Trial →</button></a>
                <a href="./xbrl-filing-services-contact-singapore" class="btn-outline-navy" style="border-color:rgba(255,255,255,0.25); color:white;">Get a Custom Quote</a>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<!-- <div class="mo" id="modal">
    <div class="md">
        <button class="mc" onclick="closeModal()">✕</button>
        <h3 style="color: #1F2853;">Get a Quote</h3>
        <p class="text-muted-custom mb-4">We'll confirm your XBRL type, deadline, and rate within 30 minutes.</p>
        <div class="mf">
            <input type="text" placeholder="Name *">
            <input type="email" placeholder="Email Address *">
            <input type="tel" placeholder="Phone Number *">
            <select>
                <option value="" disabled selected>XBRL Type Required</option>
                <option>Simplified XBRL</option>
                <option>Full XBRL (Standalone)</option>
                <option>Full XBRL (Consolidated)</option>
                <option>Not Sure — Please Advise</option>
            </select>
            <button class="mf-btn">Submit</button>
        </div>
    </div>
</div> -->

<script>
    // Modal functions
    // function openModal() {
    //     document.getElementById('modal').classList.add('show');
    // }

    // function closeModal() {
    //     document.getElementById('modal').classList.remove('show');
    // }

    // document.getElementById('modal').addEventListener('click', function(e) {
    //     if (e.target === this) closeModal();
    // });

    // FAQ accordion - Corrected function
    function toggleFAQ(index) {
        const answer = document.getElementById('faq-' + index);
        const button = answer.previousElementSibling;
        
        // Toggle current FAQ
        answer.classList.toggle('open');
        button.classList.toggle('open');
    }

    // Close other FAQs when opening a new one (optional - remove if you want multiple open)
    document.querySelectorAll('.aq').forEach((button, i) => {
        button.addEventListener('click', function() {
            const currentIndex = i;
            const currentAnswer = document.getElementById('faq-' + currentIndex);
            
            // Optional: Uncomment below to close others when opening one
            /*
            document.querySelectorAll('.aa').forEach((ans, j) => {
                if (j !== currentIndex) {
                    ans.classList.remove('open');
                    ans.previousElementSibling.classList.remove('open');
                }
            });
            */
        });
    });

    // Fade-in on scroll
    const fadeObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('in');
        }
    });
}, {
    threshold: 0.1,
    rootMargin: '0px 0px -30px 0px'
});

document.querySelectorAll('.fade').forEach(el => fadeObserver.observe(el));
</script>

<?php include 'footer.php'; ?>