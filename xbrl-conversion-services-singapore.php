<?php

$page_title = "XBRL Conversion Services Singapore | ACRA XBRL Filing Experts | Xberra Tagger";
$page_meta = "Professional XBRL conversion services in Singapore for ACRA filing compliance. Convert financial statements into ACRA-compliant XBRL with fast turnaround, expert validation, and direct BizFile submission by Xberra Tagger.";
$page_keywords = "XBRL Conversion Services Singapore, ACRA XBRL Filing, XBRL Filing Singapore, Singapore XBRL Service Provider, ACRA BizFile Filing, Financial Statement Conversion Singapore, Simplified XBRL Singapore, Full XBRL Conversion, Consolidated XBRL Filing, XBRL Tagging Services Singapore, XBRL Filing Company Singapore, ACRA Compliance Services, XBRL Experts Singapore, Xberra Tagger Singapore";
$canonical_url = "https://xberratagger.com.sg/xbrl-conversion-services-singapore";
$og_title = "XBRL Conversion Services Singapore | Xberra Tagger";
$og_desc = "Fast and accurate XBRL conversion services for Singapore companies. ACRA-compliant XBRL preparation, validation, and BizFile filing support.";
$og_type = "website";
$og_url = "https://xberratagger.com.sg/xbrl-conversion-services-singapore";
$full_url = "https://xberratagger.com.sg/xbrl-conversion-services-singapore";
$full_default = "https://xberratagger.com.sg/xbrl-conversion-services-singapore";

$schema = '
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "name": "Xberra Tagger Singapore",
      "url": "https://xberratagger.com.sg",
      "logo": "https://xberratagger.com.sg/logo.png",
      "email": "hello@xberratagger.com",
      "telephone": "+65 60272438",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "10 Anson Road, #33-10C, International Plaza",
        "addressLocality": "Singapore",
        "postalCode": "079903",
        "addressCountry": "SG"
      },
      "sameAs": [
        "https://xberratagger.com.sg"
      ]
    },
    {
      "@type": "WebSite",
      "name": "Xberra Tagger Singapore",
      "url": "https://xberratagger.com.sg",
      "publisher": {
        "@type": "Organization",
        "name": "Xberra Tagger Singapore"
      }
    },
    {
      "@type": "Service",
      "serviceType": "XBRL Conversion Services Singapore",
      "provider": {
        "@type": "Organization",
        "name": "Xberra Tagger Singapore"
      },
      "areaServed": {
        "@type": "Country",
        "name": "Singapore"
      },
      "description": "Professional XBRL conversion and ACRA filing services for Singapore companies including Simplified XBRL, Full XBRL, and Consolidated XBRL filings.",
      "url": "https://xberratagger.com.sg/xbrl-conversion-services-singapore"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://xberratagger.com.sg"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "XBRL Conversion Services Singapore",
          "item": "https://xberratagger.com.sg/xbrl-conversion-services-singapore"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What documents are required for XBRL conversion?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Signed financial statements in PDF, Word, or Excel format are typically required for XBRL conversion."
          }
        },
        {
          "@type": "Question",
          "name": "How long does XBRL conversion take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most standard XBRL conversions are completed within 2\u20133 business days depending on complexity."
          }
        },
        {
          "@type": "Question",
          "name": "Do you handle ACRA filing submission?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Xberra Tagger can submit completed XBRL filings directly through ACRA BizFile on behalf of companies."
          }
        },
        {
          "@type": "Question",
          "name": "Can you handle consolidated XBRL filings?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We support Full XBRL Consolidated filings for group companies and holding entities."
          }
        },
        {
          "@type": "Question",
          "name": "Do you support accounting firms with multiple clients?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We provide bulk filing support, dedicated account management, and volume pricing for accounting firms."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "headline": "XBRL Conversion Services Singapore",
      "author": {
        "@type": "Person",
        "name": "Manivannan Ganesan"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Xberra Tagger Singapore"
      },
      "mainEntityOfPage": "https://xberratagger.com.sg/xbrl-conversion-services-singapore",
      "articleSection": "XBRL Filing Services",
      "keywords": [
        "XBRL Conversion Singapore",
        "ACRA XBRL Filing",
        "XBRL Services Singapore",
        "Financial Statement Conversion",
        "BizFile Filing"
      ]
    }
  ]
}
';

include 'header.php'; ?>

<style>
  :root {
    --red: #dc2626;
    --red-dk: #b91c1c;
    --navy: #1F2853;
    --navy-dk: #0f1a3a;
    --bg: #f8fafc;
    --white: #fff;
    --border: #e2e8f0;
    --ink: #1c1f2e;
    --muted: #4b5563;
    --light: #f1f5f9;
    --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.06);
    --shadow-md: 0 8px 24px rgba(0, 0, 0, 0.08);
    --shadow-lg: 0 20px 48px rgba(0, 0, 0, 0.12);
    --r-sm: 12px;
    --r-md: 20px;
    --r-lg: 28px;
    --r-xl: 36px;
    --ff-head: 'Syne', sans-serif;
    --ff-body: 'DM Sans', sans-serif;
  }

  *,
  *::before,
  *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  html {
    font-size: 16px;
    scroll-behavior: smooth;
  }

  body {
    font-family: var(--ff-body);
    background: var(--white);
    color: var(--ink);
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
  }

  a {
    text-decoration: none;
  }

  img {
    max-width: 100%;
  }

  .wrap {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 28px;
  }

  @media(max-width:640px) {
    .wrap {
      padding: 0 18px;
    }
  }

  .sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    overflow: hidden;
    clip: rect(0 0 0 0);
  }

  .text-center {
    text-align: center;
  }

  .flex {
    display: flex;
  }

  .items-center {
    align-items: center;
  }

  .gap-2 { gap: 8px; }
  .gap-3 { gap: 12px; }
  .gap-4 { gap: 16px; }

  .badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-family: var(--ff-head);
    font-size: .72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .08em;
    color: var(--red);
    background: rgba(220, 38, 38, .07);
    padding: 5px 14px;
    border-radius: 40px;
    margin-bottom: 14px;
  }

  .sec-title {
    font-family: var(--ff-head);
    font-size: clamp(1.5rem, 4vw, 2.5rem);
    font-weight: 700;
    color: var(--navy);
    line-height: 1.15;
    margin-bottom: 12px;
  }

  .sec-lead {
    font-size: clamp(1rem, 2.2vw, 1.10rem);
    color: var(--muted);
    line-height: 1.7;
    max-width: 680px;
  }

  .bc {
    list-style: none;
    padding-left: 0 !important;
    display: flex;
    flex-wrap: wrap;
    gap: 4px;
    margin-bottom: 22px;
  }

  .bc li {
    display: inline-flex;
    align-items: center;
  }

  .bc a {
    color: rgba(255, 255, 255, .55);
    font-size: .85rem;
    transition: color .2s;
  }

  .bc a:hover {
    color: #fff;
  }

  .bc li+li:before {
    content: "›";
    color: rgba(255, 255, 255, .3);
    margin: 0 6px;
  }

  .bc span {
    color: #fff;
    font-size: .85rem;
  }

  /* HERO */
  .hero {
    background: var(--navy);
    padding: 9rem 0 4rem;
    position: relative;
    overflow: hidden;
  }

  .hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 80% 60% at 70% -20%, rgba(220, 38, 38, .18), transparent 60%), radial-gradient(ellipse 50% 80% at -10% 100%, rgba(255, 255, 255, .04), transparent);
  }

  .hero-inner {
    display: grid;
    grid-template-columns: 70% 1fr;
    gap: 3rem;
    align-items: start;
    position: relative;
    z-index: 1;
  }

  @media(max-width:900px) {
    .hero-inner { grid-template-columns: 1fr; }
  }

  @media(max-width:640px) {
    .hero { padding: 6rem 0 3rem; }
  }

  .hero-title {
    font-family: var(--ff-head);
    font-size: clamp(1.5rem, 5vw, 2.8rem);
    font-weight: 700;
    color: #fff;
    line-height: 1.1;
    margin-bottom: 20px;
  }

  .hero-title em {
    font-style: normal;
    color: var(--red);
  }

  .hero-desc {
    color: rgba(255, 255, 255, .65);
    font-size: 1rem;
    line-height: 1.75;
    margin-bottom: 1rem;
    max-width: 700px;
  }

  .hero-card {
    background: rgba(255, 255, 255, .07);
    border: 1px solid rgba(255, 255, 255, .14);
    backdrop-filter: blur(16px);
    border-radius: var(--r-xl);
    padding: 32px 28px;
    color: #fff;
    animation: floatY 7s ease-in-out infinite;
  }

  @media(max-width:900px) {
    .hero-card { animation: none; }
  }

  @keyframes floatY {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-14px); }
  }

  .hc-label {
    font-size: .68rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .14em;
    color: rgba(255, 255, 255, .4);
    margin-bottom: 8px;
  }

  .hc-title {
    font-family: var(--ff-head);
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 20px;
  }

  .hc-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 11px 0;
    border-bottom: 1px solid rgba(255, 255, 255, .07);
  }

  .hc-row:last-of-type { border-bottom: none; }

  .hc-row span {
    color: rgba(255, 255, 255, .55);
    font-size: .88rem;
  }

  .hc-row strong {
    font-size: .88rem;
    color: #fff;
    font-weight: 600;
  }

  .hc-divider {
    height: 1px;
    background: rgba(255, 255, 255, .1);
    margin: 18px 0;
  }

  .hc-btn {
    display: block;
    text-align: center;
    background: linear-gradient(135deg, #10b981, #059669);
    padding: 13px;
    border-radius: 40px;
    font-size: .85rem;
    font-weight: 700;
    letter-spacing: .04em;
    color: #fff;
    transition: all .25s;
  }

  .hc-btn:hover {
    transform: translateY(-2px);
    filter: brightness(1.1);
  }

  /* SECTIONS */
  .sec { padding: 2rem 0; }
  .sec-alt { background: var(--bg); }

  @media(max-width:640px) {
    .sec { padding: 2.5rem 0; }
  }

  /* DEF GRID */
  .def-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2.5rem;
    align-items: start;
  }

  @media(max-width:800px) {
    .def-grid { grid-template-columns: 1fr; }
  }

  .def-list {
    margin-top: .75rem;
    padding-left: 1.2rem;
    color: var(--muted);
    line-height: 2.1;
    font-size: .95rem;
  }

  .def-box {
    background: var(--navy);
    border-radius: var(--r-lg);
    padding: 2rem;
  }

  .db-label {
    font-size: .66rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .14em;
    color: rgba(255, 255, 255, .28);
    margin-bottom: 8px;
  }

  .db-title {
    font-family: var(--ff-head);
    font-size: 1rem;
    font-weight: 700;
    color: #fff;
    margin-bottom: 1rem;
  }

  .db-note {
    display: flex;
    gap: 10px;
    margin-bottom: 1.2rem;
  }

  .db-note p {
    font-size: .82rem;
    color: rgba(255, 255, 255, .45);
    line-height: 1.6;
  }

  .db-row {
    display: flex;
    justify-content: space-between;
    background: rgba(255, 255, 255, .05);
    border-radius: 10px;
    padding: 12px 14px;
    margin-bottom: 8px;
  }

  .db-row:last-child { margin-bottom: 0; }

  .db-row span:first-child {
    color: rgba(255, 255, 255, .38);
    font-size: .8rem;
  }

  .db-row span:last-child {
    color: #6ee7b7;
    font-weight: 700;
    font-size: .88rem;
  }

  /* BENTO */
  .bento { display: grid; gap: 1rem; }
  .bento-2 { grid-template-columns: repeat(2, 1fr); }
  .bento-3 { grid-template-columns: repeat(3, 1fr); }
  .bento-4 { grid-template-columns: repeat(4, 1fr); }

  @media(max-width:900px) {
    .bento-4 { grid-template-columns: repeat(2, 1fr); }
    .bento-3 { grid-template-columns: repeat(2, 1fr); }
  }

  @media(max-width:580px) {
    .bento-4, .bento-3, .bento-2 { grid-template-columns: 1fr; }
  }

  .span-2 { grid-column: span 2; }
  .span-3 { grid-column: span 3; }

  @media(max-width:900px) {
    .span-3 { grid-column: span 2; }
  }

  @media(max-width:580px) {
    .span-2, .span-3 { grid-column: span 1 !important; }
  }

  .card {
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: var(--r-lg);
    padding: 1.75rem;
    transition: all .35s cubic-bezier(.16, 1, .3, 1);
  }

  .card:hover {
    transform: translateY(-6px);
    box-shadow: var(--shadow-lg);
    border-color: rgba(220, 38, 38, .15);
  }

  .card.dk { background: var(--navy); border-color: var(--navy); }
  .card.red { background: var(--red); border-color: var(--red); }
  .card.lt { background: var(--light); border-color: var(--border); }

  .card h3 {
    font-family: var(--ff-head);
    font-size: 1.15rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: .5rem;
  }

  .card.dk h3, .card.red h3 { color: #fff; }

  .card p {
    font-size: .88rem;
    color: var(--muted);
    line-height: 1.65;
  }

  .card.dk p { color: rgba(255, 255, 255, .65); }
  .card.red p { color: rgba(255, 255, 255, .85); }

  .card-tag {
    font-size: .7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .06em;
    color: var(--red);
    margin-bottom: 10px;
  }

  .card.dk .card-tag { color: rgba(255, 255, 255, .4); }
  .card.red .card-tag { color: rgba(255, 255, 255, .6); }

  .card-icon {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
    background: rgba(220, 38, 38, .06);
  }

  .card-icon svg {
    width: 22px;
    height: 22px;
    stroke: var(--red);
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .card.dk .card-icon { background: rgba(255, 255, 255, .1); }
  .card.dk .card-icon svg { stroke: #fff; }
  .card.red .card-icon { background: rgba(255, 255, 255, .15); }
  .card.red .card-icon svg { stroke: #fff; }

  /* PREP STEPS */
  .prep-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.25rem;
  }

  @media(max-width:640px) {
    .prep-grid { grid-template-columns: 1fr; }
  }

  .prep-card {
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: var(--r-lg);
    padding: 1.75rem;
    transition: all .3s ease;
    position: relative;
    overflow: hidden;
  }

  .prep-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
    border-color: rgba(220, 38, 38, .2);
  }

  .prep-step {
    font-family: var(--ff-head);
    font-size: 4rem;
    font-weight: 700;
    color: #eef0f4;
    position: absolute;
    bottom: 1rem;
    right: 1.5rem;
    line-height: 1;
  }

  .prep-card h4 {
    font-family: var(--ff-head);
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: .5rem;
  }

  .prep-card p {
    font-size: .9rem;
    color: var(--muted);
    line-height: 1.65;
    position: relative;
    z-index: 1;
  }

  /* COMMON CHALLENGES */
  .ch-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1rem;
  }

  @media(max-width:900px) {
    .ch-cards { grid-template-columns: repeat(2, 1fr); }
  }

  @media(max-width:580px) {
    .ch-cards { grid-template-columns: 1fr; }
  }

  /* BENEFITS SECTION */
  .benefits-layout {
    display: flex;
    gap: 3rem;
    align-items: start;
  }

  @media(max-width:800px) {
    .benefits-layout { flex-direction: column; gap: 2rem; }
  }

  .benefit-card-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: .85rem;
    margin-top: .5rem;
  }

  @media(max-width:480px) {
    .benefit-card-grid { grid-template-columns: 1fr; }
  }

  /* CHIP GRID */
  .chip-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-bottom: 1.2rem;
  }

  @media(max-width:420px) {
    .chip-grid { grid-template-columns: 1fr; }
  }

  /* KEY CHANGES GRID */
  .key-changes-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 28px;
    margin-top: 2.5rem;
  }

  @media(max-width:700px) {
    .key-changes-grid { grid-template-columns: 1fr; gap: 18px; }
  }

  /* TRUST STRIP */
  .trust-strip {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    justify-content: center;
    padding: 1.5rem 0;
    border-top: 1px solid var(--border);
    border-bottom: 1px solid var(--border);
  }

  .trust-badge {
    display: flex;
    align-items: center;
    gap: .6rem;
    padding: .7rem 1.2rem;
    border: 1.5px solid var(--border);
    border-radius: 100px;
    background: var(--white);
    transition: all .2s;
  }

  .trust-badge:hover {
    border-color: var(--red);
    transform: translateY(-2px);
    box-shadow: 0 6px 14px rgba(220, 38, 38, .1);
  }

  .trust-badge svg {
    width: 18px;
    height: 18px;
    stroke: var(--red);
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .trust-badge span {
    font-weight: 600;
    color: var(--navy);
    font-size: .82rem;
  }

  @media(max-width:480px) {
    .trust-strip { gap: .6rem; }
    .trust-badge { padding: .6rem .9rem; }
  }

  /* FAQ */
  .faq-wrap {
    max-width: 780px;
    margin: 0 auto;
  }

  .faq-box {
    border: 1px solid var(--border);
    border-radius: var(--r-lg);
    overflow: hidden;
  }

  .faq-item {
    border-bottom: 1px solid var(--border);
  }

  .faq-item:last-child { border-bottom: none; }

  .faq-q {
    width: 100%;
    background: var(--white);
    border: none;
    padding: 20px 24px;
    text-align: left;
    font-family: var(--ff-body);
    font-size: .97rem;
    font-weight: 600;
    color: var(--navy);
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: .2s;
    gap: 12px;
  }

  @media(max-width:640px) {
    .faq-q { font-size: .9rem; padding: 16px 18px; }
  }

  .faq-q:hover { background: var(--bg); }

  .faq-arrow {
    transition: transform .3s;
    font-size: .72rem;
    color: var(--red);
    flex-shrink: 0;
  }

  .faq-a {
    display: none;
    padding: 0 24px 20px;
    font-size: .92rem;
    color: var(--muted);
    line-height: 1.75;
  }

  @media(max-width:640px) {
    .faq-a { padding: 0 18px 16px; }
  }

  .faq-item.open .faq-a { display: block; }
  .faq-item.open .faq-arrow { transform: rotate(180deg); }
  .faq-item.open .faq-q { background: var(--bg); }

  /* CTA */
  .cta-box {
    background: var(--navy);
    border-radius: var(--r-xl);
    padding: 4rem 3rem;
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  @media(max-width:640px) {
    .cta-box { padding: 2.5rem 1.5rem; }
  }

  .cta-box::before {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 60% 80% at 50% -20%, rgba(220, 38, 38, .2), transparent 60%);
  }

  .cta-box > * { position: relative; z-index: 1; }

  .cta-title {
    font-family: var(--ff-head);
    font-size: clamp(1.8rem, 4vw, 2.6rem);
    font-weight: 700;
    color: #fff;
    line-height: 1.15;
    margin-bottom: 1rem;
  }

  .cta-desc {
    color: rgba(255, 255, 255, .7);
    font-size: 1rem;
    line-height: 1.7;
    margin-bottom: 2rem;
    max-width: 560px;
    margin-left: auto;
    margin-right: auto;
  }

  .btn-row {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
  }

  .btn-wh {
    display: inline-block;
    background: #fff;
    color: var(--red);
    padding: 14px 32px;
    border-radius: 40px;
    font-weight: 700;
    font-size: .95rem;
    transition: all .25s;
  }

  .btn-wh:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(0, 0, 0, .15);
  }

  .btn-outline {
    display: inline-block;
    border: 2px solid rgba(255, 255, 255, .25);
    color: #fff;
    padding: 14px 32px;
    border-radius: 40px;
    font-weight: 700;
    font-size: .95rem;
    transition: all .25s;
    background: transparent;
  }

  .btn-outline:hover {
    background: rgba(255, 255, 255, .1);
    transform: translateY(-2px);
  }

  @media(max-width:480px) {
    .btn-wh, .btn-outline {
      width: 100%;
      text-align: center;
      padding: 14px 20px;
    }
  }

  /* HIGHLIGHT BOX */
  .highlight-box {
    background: #ffffff;
    border-left: 4px solid var(--red);
    border-radius: 0 var(--r-sm) var(--r-sm) 0;
    padding: 1.25rem 1.5rem;
    margin-top: 1.5rem;
  }

  .highlight-box p {
    color: var(--navy);
    font-size: .95rem;
    font-weight: 500;
    line-height: 1.65;
  }

  .highlight-box strong { color: var(--red); }

  /* ANIMATIONS */
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .anim { animation: fadeUp .65s ease both; }
  .anim-d1 { animation-delay: .1s; }
  .anim-d2 { animation-delay: .2s; }
  .anim-d3 { animation-delay: .3s; }
  .anim-d4 { animation-delay: .4s; }

  @media (max-width: 767px) {
    .mobile-no-padding { padding-top: 0 !important; }
    .hero-stats { row-gap: 15px !important; }
    .hero-stats .col-3 {
      width: 50% !important;
      flex: 0 0 50%;
      max-width: 50%;
    }
    .hero-stats .stat-card {
      height: 100%;
      padding: 18px 12px;
      text-align: center;
    }
    .hero-stats .stat-number { font-size: 1rem; line-height: 1.3; }
    .hero-stats .stat-label { font-size: .82rem; line-height: 1.4; }
  }

  .stat-card {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 20px;
    padding: 20px 16px;
    text-align: center;
    backdrop-filter: blur(4px);
    transition: transform 0.2s ease, background 0.2s ease;
  }

  .stat-card:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: translateY(-4px);
  }

  .stat-number {
    font-size: 15px;
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
  /* Tablet: 2 columns */
  @media (max-width: 900px) {
    .wrap { padding: 0 20px; }
    .sec-alt { padding: 2.5rem 0; }
    [style*="grid-template-columns: repeat(4, 1fr)"] {
      grid-template-columns: repeat(2, 1fr) !important;
      gap: 1.25rem !important;
    }
  }

  /* Mobile: 1 column */
  @media (max-width: 580px) {
    .wrap { padding: 0 16px; }
    .sec-alt { padding: 2rem 0; }
    [style*="grid-template-columns: repeat(4, 1fr)"] {
      grid-template-columns: 1fr !important;
      gap: 1rem !important;
    }
    .badge { font-size: 0.65rem !important; padding: 4px 12px !important; }
    .sec-title { font-size: 1.5rem !important; }
    .sec-lead { font-size: 0.95rem !important; }
    [style*="padding: 0.85rem 2.5rem;"] {
      padding: 0.75rem 1.8rem !important;
      width: 100% !important;
      text-align: center !important;
    }
  }

  /* Small mobile fine-tuning */
  @media (max-width: 400px) {
    [style*="padding: 1.75rem 1.5rem;"] {
      padding: 1.25rem 1rem !important;
    }
    [style*="width: 48px; height: 48px;"] {
      width: 40px !important;
      height: 40px !important;
    }
    [style*="width: 48px; height: 48px;"] svg {
      width: 20px !important;
      height: 20px !important;
    }
  }

  .hero-title { font-size: 2.8rem; }
  @media (max-width: 1400px) and (min-width: 1251px) { .hero-title { font-size: 2.3rem; } }
  @media (max-width: 1250px) { .hero-title { font-size: clamp(1.5rem, 3.5vw, 2.1rem); } }

  .sec-title { font-size: 2.5rem; }
  @media (max-width: 1400px) and (min-width: 1251px) { .sec-title { font-size: 2rem; } }
  @media (max-width: 1250px) { .sec-title { font-size: clamp(1.4rem, 2.5vw, 1.9rem); } }

  .sec-lead { font-size: 1.10rem; }
  @media (max-width: 1400px) and (min-width: 1251px) { .sec-lead { font-size: 1rem; } }
  @media (max-width: 1250px) { .sec-lead { font-size: clamp(0.9rem, 1.8vw, 1rem); } }

  .hero-desc { font-size: 1rem; }
  @media (max-width: 1400px) and (min-width: 1251px) { .hero-desc { font-size: 0.95rem; } }
  @media (max-width: 1250px) { .hero-desc { font-size: clamp(0.85rem, 1.5vw, 0.95rem); } }

  .stat-number { font-size: 15px; }
  @media (max-width: 1400px) and (min-width: 1251px) { .stat-number { font-size: 14px; } }
  @media (max-width: 1250px) { .stat-number { font-size: clamp(11px, 1.2vw, 14px); } }

  .stat-label { font-size: 0.75rem; }
  @media (max-width: 1400px) and (min-width: 1251px) { .stat-label { font-size: 0.7rem; } }
  @media (max-width: 1250px) { .stat-label { font-size: clamp(0.62rem, 1vw, 0.7rem); } }

  .card h3 { font-size: 1.15rem; }
  @media (max-width: 1400px) and (min-width: 1251px) { .card h3 { font-size: 1rem; } }
  @media (max-width: 1250px) { .card h3 { font-size: clamp(0.9rem, 1.4vw, 1rem); } }

  .key-changes-grid .card h3 { font-size: 2rem; }
  @media (max-width: 1400px) and (min-width: 1251px) { .key-changes-grid .card h3 { font-size: 1.6rem; } }
  @media (max-width: 1250px) { .key-changes-grid .card h3 { font-size: clamp(1.2rem, 2vw, 1.5rem); } }

  .prep-card h4 { font-size: 1.1rem; }
  @media (max-width: 1400px) and (min-width: 1251px) { .prep-card h4 { font-size: 1rem; } }
  @media (max-width: 1250px) { .prep-card h4 { font-size: clamp(0.88rem, 1.3vw, 1rem); } }

  .bento.bento-2 .card h3 { font-size: 1.4rem; }
  @media (max-width: 1400px) and (min-width: 1251px) { .bento.bento-2 .card h3 { font-size: 1.2rem; } }
  @media (max-width: 1250px) { .bento.bento-2 .card h3 { font-size: clamp(1rem, 1.5vw, 1.15rem); } }

  .cta-title { font-size: 2.6rem; }
  @media (max-width: 1400px) and (min-width: 1251px) { .cta-title { font-size: 2.1rem; } }
  @media (max-width: 1250px) { .cta-title { font-size: clamp(1.4rem, 3vw, 2rem); } }

  .hc-title { font-size: 1.3rem; }
  @media (max-width: 1400px) and (min-width: 1251px) { .hc-title { font-size: 1.15rem; } }
  @media (max-width: 1250px) { .hc-title { font-size: clamp(1rem, 1.5vw, 1.1rem); } }

  .form-group label { font-size: 0.9rem; }
  @media (max-width: 1400px) and (min-width: 1251px) { .form-group label { font-size: 0.85rem; } }
  @media (max-width: 1250px) { .form-group label { font-size: clamp(0.8rem, 1.2vw, 0.85rem); } }
</style>

<div class="py-lg-4 py-3"></div>

<!-- ════ HERO ════ -->
<section class="hero">
  <div class="wrap">
    <div class="hero-inner">
      <div>
        <ul class="bc">
          <li><a href="./index">Home</a></li>
          <li><span>XBRL Conversion Services Singapore</span></li>
        </ul>
        <h1 class="hero-title">
          XBRL Conversion Services <em>Singapore</em>
        </h1>
        <p class="hero-desc">
          Singapore companies are required to file financial statements in XBRL format with ACRA through BizFile. Converting financial statements into ACRA-compliant XBRL requires technical expertise, accurate taxonomy mapping, and proper validation to avoid filing rejections and compliance issues.
        </p>
        <p class="hero-desc">
          Xberra Tagger Singapore provides professional XBRL conversion and filing services for companies, accounting firms, auditors, and corporate secretarial firms across Singapore. We help businesses convert financial statements into regulator-ready XBRL reports with faster turnaround, secure processing, and end-to-end filing support.
        </p>

        <div class="row hero-stats">
          <div class="col-3 col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="stat-number">XBRL</div>
              <div class="stat-label">Conversion Services</div>
            </div>
          </div>
          <div class="col-3 col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="stat-number">ACRA</div>
              <div class="stat-label">Compliant Filing</div>
            </div>
          </div>
          <div class="col-3 col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="stat-number">2–3 Days</div>
              <div class="stat-label">Standard Turnaround</div>
            </div>
          </div>
          <div class="col-3 col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="stat-number">BizFile</div>
              <div class="stat-label">Filing Support</div>
            </div>
          </div>
        </div>
      </div>

      <div style="padding-top:1rem;" class="mobile-no-padding">
        <div class="hero-card">
          <p class="hc-label">Services Quick Reference</p>
          <p class="hc-title">What We Provide</p>
          <div class="hc-row"><span>Simplified XBRL Conversion</span><strong>✓</strong></div>
          <div class="hc-row"><span>Full XBRL Conversion</span><strong>✓</strong></div>
          <div class="hc-row"><span>Consolidated XBRL Conversion</span><strong>✓</strong></div>
          <div class="hc-row"><span>ACRA BizFile Filing Support</span><strong>✓</strong></div>
          <div class="hc-row"><span>Accounting Firm Support</span><strong>✓</strong></div>
          <a href="./xbrl-filing-services-contact-singapore" class="hc-btn">Get Conversion Support</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════ WHAT IS XBRL CONVERSION ════ -->
<section class="sec">
  <div class="wrap">
    <div class="def-grid">
      <div>
        <p class="badge">✦ What is XBRL Conversion</p>
        <h2 class="sec-title">Professional ACRA XBRL Filing &amp; Conversion Services</h2>
        <p class="sec-lead" style="margin-bottom:1rem;">
          Our XBRL specialists assist businesses in preparing accurate XBRL reports that comply with ACRA filing requirements. Whether you require Simplified XBRL, Full XBRL, or Consolidated XBRL filings, we provide complete support from conversion to BizFile submission.
        </p>
        <p style="color:var(--muted);font-size:.95rem;line-height:1.7;">
          We work with SMEs, holding companies, foreign subsidiaries, accounting firms, and audit firms requiring efficient and scalable XBRL filing support in Singapore.
        </p>
      </div>

      <div class="def-box">
        <div class="db-label">XBRL Conversion Process</div>
        <div class="db-title">What XBRL Conversion Involves</div>
        <div class="db-note">
          <span style="font-size:1.1rem;">📌</span>
          <p>XBRL conversion transforms financial statements into <strong style="color:rgba(255,255,255,.8);">machine-readable XBRL format using ACRA taxonomy standards</strong>.</p>
        </div>
        <div class="db-row"><span>Financial Data Mapping</span><span>✓</span></div>
        <div class="db-row"><span>Taxonomy Tagging</span><span>✓</span></div>
        <div class="db-row"><span>Validation Checks</span><span>✓</span></div>
        <div class="db-row"><span>Error Correction</span><span>✓</span></div>
        <div class="db-row"><span>BizFile Compatibility Testing</span><span>✓</span></div>
      </div>
    </div>

    <div class="highlight-box">
      <p>Improper conversion can lead to filing rejections, validation errors, and compliance delays. <strong>Professional XBRL support helps businesses avoid these risks.</strong></p>
    </div>
  </div>
</section>

<!-- ════ OUR XBRL CONVERSION SERVICES ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <p class="badge">✦ Our Services</p>
    <h2 class="sec-title">Our XBRL Conversion Services in Singapore</h2>
    <p class="sec-lead" style="margin-bottom:2.5rem;">
      We provide comprehensive XBRL conversion and filing support for businesses across Singapore.
    </p>

    <div class="bento bento-3" style="margin-bottom:1.5rem;">
      <div class="card dk">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
        <div class="card-tag">Service</div>
        <h3>Simplified XBRL Conversion</h3>
        <p>We help eligible Singapore companies prepare Simplified XBRL filings accurately and efficiently according to ACRA filing guidelines. Our team ensures proper financial statement mapping while minimizing filing complexity for SMEs and exempt private companies.</p>
      </div>
      <div class="card lt">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M7 7h10"/><path d="M7 12h10"/><path d="M7 17h10"/></svg></div>
        <div class="card-tag">Service</div>
        <h3>Full XBRL Conversion</h3>
        <p>For companies requiring Full XBRL filing, we prepare complete taxonomy-based reports including Statement of Financial Position, Profit &amp; Loss Statement, Cash Flow Statement, Notes to Financial Statements, and financial disclosures. Every report is validated against ACRA taxonomy requirements before submission.</p>
      </div>
      <div class="card lt">
        <div class="card-icon"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg></div>
        <div class="card-tag">Service</div>
        <h3>Consolidated XBRL Conversion</h3>
        <p>We support holding companies and group entities requiring Full XBRL Consolidated filings. Our specialists handle consolidated financial statements, multi-entity reporting, intercompany disclosures, and group reporting structures with accurate taxonomy mapping and compliance-focused review.</p>
      </div>
      <div class="card red span-3">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
        <div class="card-tag">Service</div>
        <h3>ACRA BizFile Filing Support</h3>
        <p>Beyond XBRL preparation, we assist businesses with direct BizFile filing submission support to reduce compliance risks and filing errors. Our filing support helps businesses avoid submission rejections, validation mismatches, incorrect filing formats, and delayed compliance submissions.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════ XBRL SUPPORT FOR ACCOUNTING FIRMS ════ -->
<section class="sec">
  <div class="wrap">
    <div class="def-grid">
      <div>
        <p class="badge">✦ Accounting Firm Support</p>
        <h2 class="sec-title">XBRL Support for Accounting Firms</h2>
        <p class="sec-lead" style="margin-bottom:1rem;">
          We provide dedicated XBRL support for accounting firms, auditors, and corporate secretarial firms managing multiple client entities.
        </p>
        <p style="color:var(--muted);font-size:.95rem;line-height:1.7;">
          For firms managing large filing volumes, outsourcing XBRL preparation improves operational efficiency and reduces internal workload.
        </p>
      </div>

      <div class="def-box">
        <div class="db-label">Firm Support Services</div>
        <div class="db-title">What We Offer Accounting Firms</div>
        <div class="db-note">
          <span style="font-size:1.1rem;">📌</span>
          <p>Our services are <strong style="color:rgba(255,255,255,.8);">designed to scale with your client portfolio</strong> during peak filing periods.</p>
        </div>
        <div class="db-row"><span>Bulk Filing Support</span><span>✓</span></div>
        <div class="db-row"><span>Dedicated Account Management</span><span>✓</span></div>
        <div class="db-row"><span>Volume Pricing</span><span>✓</span></div>
        <div class="db-row"><span>Faster Turnaround</span><span>✓</span></div>
        <div class="db-row"><span>Consolidated Monthly Invoicing</span><span>✓</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ════ WHY CHOOSE XBERRA TAGGER ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <p class="badge">✦ Why Choose Us</p>
    <h2 class="sec-title">Why Businesses Choose Xberra Tagger Singapore</h2>
    <p class="sec-lead" style="margin-bottom:2.5rem;">
      Businesses across Singapore choose Xberra Tagger for reliable, accurate, and scalable XBRL filing support.
    </p>

    <div class="bento bento-3" style="margin-bottom:1.5rem;">
      <div class="card lt">
        <div class="card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <div class="card-tag">Why Choose Us</div>
        <h3>Fast Turnaround Time</h3>
        <p>Most standard XBRL filings are completed within 2–3 business days depending on complexity and revisions. This helps businesses avoid last-minute compliance pressure and late filing penalties.</p>
      </div>
      <div class="card lt">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
        <div class="card-tag">Why Choose Us</div>
        <h3>ACRA-Compliant Validation</h3>
        <p>Every XBRL report undergoes validation checks before submission to minimize filing rejection risks and ensure compliance accuracy.</p>
      </div>
      <div class="card lt">
        <div class="card-icon"><svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
        <div class="card-tag">Why Choose Us</div>
        <h3>Secure Financial Data Handling</h3>
        <p>We follow secure document handling procedures to protect sensitive financial information throughout the conversion and filing process.</p>
      </div>
      <div class="card dk">
        <div class="card-icon"><svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
        <div class="card-tag">Why Choose Us</div>
        <h3>Transparent Pricing</h3>
        <p>Our pricing structure is transparent with no hidden charges, unnecessary amendment fees, or unexpected billing.</p>
      </div>
      <div class="card red span-2">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
        <div class="card-tag">Why Choose Us</div>
        <h3>Support for Multiple Financial Formats</h3>
        <p>We accept financial statements in PDF, Word, Excel, and Audited Financial Statements, allowing businesses to submit files without additional formatting work.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════ INDUSTRIES WE SERVE ════ -->
<section class="sec">
  <div class="wrap">
    <p class="badge">✦ Industries We Serve</p>
    <h2 class="sec-title">Industries We Serve</h2>
    <p class="sec-lead" style="margin-bottom:2rem;">We provide XBRL conversion services for:</p>

    <div class="ch-cards">
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">01</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">SMEs</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">02</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Private Limited Companies</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">03</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Holding Companies</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">04</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Group Entities</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">05</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Foreign Subsidiaries</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">06</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Accounting Firms</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">07</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Audit Firms</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">08</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Corporate Secretarial Firms</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">09</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Investment Holding Companies</span>
      </div>
    </div>
  </div>
</section>

<!-- ════ OUR XBRL CONVERSION PROCESS ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <p class="badge">✦ Our Process</p>
    <h2 class="sec-title">Our XBRL Conversion Process</h2>
    <p class="sec-lead" style="margin-bottom:2.5rem;">
      Our streamlined process helps businesses complete filings quickly and accurately.
    </p>

    <div class="prep-grid">
      <div class="prep-card">
        <div class="prep-step">01</div>
        <div class="card-icon" style="margin-bottom:.75rem;">
          <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        </div>
        <h4>Share Financial Statements</h4>
        <p>Send your signed financial statements in PDF, Word, or Excel format along with filing details.</p>
      </div>
      <div class="prep-card">
        <div class="prep-step">02</div>
        <div class="card-icon" style="margin-bottom:.75rem;">
          <svg viewBox="0 0 24 24"><path d="M7 7h10"/><path d="M7 12h10"/><path d="M7 17h10"/></svg>
        </div>
        <h4>XBRL Mapping &amp; Tagging</h4>
        <p>Our specialists convert financial statements into ACRA-compliant XBRL using proper taxonomy mapping and tagging standards.</p>
      </div>
      <div class="prep-card">
        <div class="prep-step">03</div>
        <div class="card-icon" style="margin-bottom:.75rem;">
          <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        </div>
        <h4>Validation &amp; Quality Review</h4>
        <p>We perform detailed validation checks and internal quality reviews before submission.</p>
      </div>
      <div class="prep-card">
        <div class="prep-step">04</div>
        <div class="card-icon" style="margin-bottom:.75rem;">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/></svg>
        </div>
        <h4>ACRA Filing Submission</h4>
        <p>Upon approval, we assist with direct BizFile filing submission and provide filing confirmation.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════ COMMON CHALLENGES & BENEFITS ════ -->
<section class="sec">
  <div class="wrap">
    <div class="key-changes-grid">
      <div class="card dk" style="padding:38px;border-radius:34px;">
        <div class="card-tag">Common Challenges</div>
        <h3 style="font-size:2rem;line-height:1.15;margin-bottom:1.3rem;">Common XBRL Filing Challenges in Singapore</h3>
        <p style="color:rgba(255,255,255,.78);margin-bottom:1rem;">Many Singapore businesses face challenges with:</p>
        <div class="chip-grid">
          <div style="background:rgba(255,255,255,.06);padding:14px 18px;border-radius:14px;color:rgba(255,255,255,.9);">Understanding ACRA Taxonomy Requirements</div>
          <div style="background:rgba(255,255,255,.06);padding:14px 18px;border-radius:14px;color:rgba(255,255,255,.9);">Resolving Validation Errors</div>
          <div style="background:rgba(255,255,255,.06);padding:14px 18px;border-radius:14px;color:rgba(255,255,255,.9);">Mapping Disclosures Accurately</div>
          <div style="background:rgba(255,255,255,.06);padding:14px 18px;border-radius:14px;color:rgba(255,255,255,.9);">Handling Consolidated Reporting</div>
          <div style="background:rgba(255,255,255,.06);padding:14px 18px;border-radius:14px;color:rgba(255,255,255,.9);">Meeting Filing Deadlines</div>
          <div style="background:rgba(255,255,255,.06);padding:14px 18px;border-radius:14px;color:rgba(255,255,255,.9);">Limited Internal XBRL Expertise</div>
        </div>
        <p style="color:rgba(255,255,255,.78);margin:0;">Professional XBRL support helps businesses reduce these compliance burdens significantly.</p>
      </div>

      <div class="card red" style="padding:38px;border-radius:34px;">
        <div class="card-tag">Benefits of Outsourcing</div>
        <h3 style="font-size:2rem;line-height:1.15;margin-bottom:1.3rem;">Benefits of Outsourcing XBRL Conversion Services</h3>
        <p style="color:rgba(255,255,255,.88);margin-bottom:1rem;">Outsourcing XBRL conversion services allows businesses to:</p>
        <div class="chip-grid">
          <div style="background:rgba(255,255,255,.08);padding:14px 18px;border-radius:14px;color:#fff;">Save Accounting Team Time</div>
          <div style="background:rgba(255,255,255,.08);padding:14px 18px;border-radius:14px;color:#fff;">Improve Filing Accuracy</div>
          <div style="background:rgba(255,255,255,.08);padding:14px 18px;border-radius:14px;color:#fff;">Reduce Compliance Risks</div>
          <div style="background:rgba(255,255,255,.08);padding:14px 18px;border-radius:14px;color:#fff;">Meet Deadlines Efficiently</div>
          <div style="background:rgba(255,255,255,.08);padding:14px 18px;border-radius:14px;color:#fff;">Avoid Software Learning Curves</div>
          <div style="background:rgba(255,255,255,.08);padding:14px 18px;border-radius:14px;color:#fff;">Scale Filings for Multiple Entities</div>
        </div>
        <p style="color:rgba(255,255,255,.88);margin:0;">For accounting and corporate secretarial firms, outsourcing also improves productivity during peak filing seasons.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════ WHO NEEDS XBRL FILING ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <div class="benefits-layout">
      <div style="flex:1;min-width:0;">
        <p class="badge">✦ Who Needs XBRL Filing</p>
        <h2 class="sec-title">Who Needs XBRL Filing in Singapore?</h2>
        <p style="color:var(--muted);font-size:.95rem;line-height:1.7;margin-bottom:1rem;">
          Most Singapore-incorporated companies limited by shares are required to file financial statements in XBRL format with ACRA unless exempted. Depending on the company structure and reporting obligations, filing requirements may include:
        </p>

        <div class="benefit-card-grid">
          <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.1rem 1.25rem;display:flex;align-items:center;gap:.85rem;transition:all .28s;">
            <div style="width:36px;height:36px;background:rgba(220,38,38,.06);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--red)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
            </div>
            <span style="font-size:.88rem;font-weight:600;color:var(--navy);">Simplified XBRL</span>
          </div>
          <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.1rem 1.25rem;display:flex;align-items:center;gap:.85rem;transition:all .28s;">
            <div style="width:36px;height:36px;background:rgba(220,38,38,.06);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--red)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10"/><path d="M7 12h10"/><path d="M7 17h10"/></svg>
            </div>
            <span style="font-size:.88rem;font-weight:600;color:var(--navy);">Full XBRL</span>
          </div>
          <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.1rem 1.25rem;display:flex;align-items:center;gap:.85rem;transition:all .28s;grid-column:span 2;">
            <div style="width:36px;height:36px;background:rgba(220,38,38,.06);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--red)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
            </div>
            <span style="font-size:.88rem;font-weight:600;color:var(--navy);">Full XBRL Consolidated</span>
          </div>
        </div>

        <div class="highlight-box" style="margin-top:1.5rem;">
          <p>Choosing the correct filing format is important to <strong>avoid submission complications and compliance issues</strong>.</p>
        </div>
      </div>
    </div>

    <div class="trust-strip" style="margin-top:2rem;">
      <div class="trust-badge">
        <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        <span>ACRA Compliant</span>
      </div>
      <div class="trust-badge">
        <svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        <span>Secure Processing</span>
      </div>
      <div class="trust-badge">
        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        <span>2–3 Day Turnaround</span>
      </div>
      <div class="trust-badge">
        <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
        <span>Expert XBRL Team</span>
      </div>
    </div>
  </div>
</section>

<section class="sec sec-alt" style="background: #f8fafc; padding: 3rem 0;">
  <div class="wrap" style="max-width: 1180px; margin: 0 auto; padding: 0 28px;">

    <!-- Section header -->
    <div style="text-align: center; max-width: 760px; margin: 0 auto 3rem;">
      <span class="badge" style="display: inline-flex; align-items: center; gap: 6px; font-family: 'Syne', sans-serif; font-size: .72rem; font-weight: 700; text-transform: uppercase; letter-spacing: .08em; color: #dc2626; background: rgba(220, 38, 38, .07); padding: 5px 14px; border-radius: 40px; margin-bottom: 14px;">✦ Why Choose Us</span>
      <h2 class="sec-title" style="font-family: 'Syne', sans-serif; font-size: clamp(1.5rem, 4vw, 2.5rem); font-weight: 700; color: #1F2853; line-height: 1.15; margin-bottom: 1rem;">Why Choose Xberra Tagger?</h2>
      <p class="sec-lead" style="font-size: clamp(1rem, 2.2vw, 1.10rem); color: #4b5563; line-height: 1.7; max-width: 680px; margin: 0 auto;">
        Xberra Tagger Singapore helps businesses simplify complex ACRA compliance requirements through accurate XBRL conversion, validation, and filing support.
      </p>
    </div>

    <!-- Four-column value props - responsive grid -->
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem; margin-bottom: 2.5rem;">
      
      <!-- Card 1: Simplify Compliance -->
      <div style="background: #ffffff; border-radius: 24px; padding: 1.75rem 1.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.03); border: 1px solid #eef2f6; transition: all 0.25s ease;" 
           onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 16px 32px rgba(0,0,0,0.06)';" 
           onmouseout="this.style.transform='none'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.03)';">
        <div style="width: 48px; height: 48px; background: rgba(220, 38, 38, 0.06); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.25rem;">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
        </div>
        <h3 style="font-family: 'Syne', sans-serif; font-size: 1.1rem; font-weight: 700; color: #1F2853; margin-bottom: 0.5rem;">Simplify Compliance</h3>
        <p style="font-size: 0.9rem; color: #4b5563; line-height: 1.6; margin: 0;">We demystify ACRA taxonomy and validation, so your team stays focused on core finance work, not filing complexities.</p>
      </div>

      <!-- Card 2: Expert Support -->
      <div style="background: #ffffff; border-radius: 24px; padding: 1.75rem 1.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.03); border: 1px solid #eef2f6; transition: all 0.25s ease;" 
           onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 16px 32px rgba(0,0,0,0.06)';" 
           onmouseout="this.style.transform='none'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.03)';">
        <div style="width: 48px; height: 48px; background: rgba(220, 38, 38, 0.06); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.25rem;">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h3 style="font-family: 'Syne', sans-serif; font-size: 1.1rem; font-weight: 700; color: #1F2853; margin-bottom: 0.5rem;">Expert XBRL Team</h3>
        <p style="font-size: 0.9rem; color: #4b5563; line-height: 1.6; margin: 0;">Our specialists bring deep experience in taxonomy mapping, error resolution, and ACRA filing standards — every time.</p>
      </div>

      <!-- Card 3: Scalable Solutions -->
      <div style="background: #ffffff; border-radius: 24px; padding: 1.75rem 1.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.03); border: 1px solid #eef2f6; transition: all 0.25s ease;" 
           onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 16px 32px rgba(0,0,0,0.06)';" 
           onmouseout="this.style.transform='none'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.03)';">
        <div style="width: 48px; height: 48px; background: rgba(220, 38, 38, 0.06); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.25rem;">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
        </div>
        <h3 style="font-family: 'Syne', sans-serif; font-size: 1.1rem; font-weight: 700; color: #1F2853; margin-bottom: 0.5rem;">Scalable Solutions</h3>
        <p style="font-size: 0.9rem; color: #4b5563; line-height: 1.6; margin: 0;">From one-off filings to high-volume multi-entity support, we adapt to your firm's workload and filing calendar.</p>
      </div>

      <!-- Card 4: End-to-End Filing -->
      <div style="background: #ffffff; border-radius: 24px; padding: 1.75rem 1.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.03); border: 1px solid #eef2f6; transition: all 0.25s ease;" 
           onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 16px 32px rgba(0,0,0,0.06)';" 
           onmouseout="this.style.transform='none'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.03)';">
        <div style="width: 48px; height: 48px; background: rgba(220, 38, 38, 0.06); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.25rem;">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        </div>
        <h3 style="font-family: 'Syne', sans-serif; font-size: 1.1rem; font-weight: 700; color: #1F2853; margin-bottom: 0.5rem;">End-to-End Filing</h3>
        <p style="font-size: 0.9rem; color: #4b5563; line-height: 1.6; margin: 0;">We handle conversion, validation, and BizFile submission — so you get a fully completed filing with confirmation.</p>
      </div>
    </div>

    <!-- Description / trust footer -->
    <div style="max-width: 820px; margin: 0 auto 1.8rem; text-align: center;">
      <p style="font-size: clamp(0.92rem, 1.6vw, 0.98rem); color: #1F2853; line-height: 1.7; font-weight: 450;">
        We work closely with finance teams, accounting firms, auditors, and corporate secretarial firms to ensure every filing is completed accurately and on time.
      </p>
      <p style="font-size: clamp(0.9rem, 1.4vw, 0.95rem); color: #4b5563; line-height: 1.6; margin-top: 0.5rem;">
        Whether you need one-time filing support or ongoing multi-entity assistance, our scalable XBRL solutions are designed to support your compliance requirements efficiently.
      </p>
    </div>

    <!-- CTA link -->
    <div style="text-align: center;">
      <a href="./xbrl-filing-services-contact-singapore" style="display: inline-block; background: #1F2853; color: #fff; padding: 0.85rem 2.5rem; border-radius: 40px; font-weight: 700; font-size: clamp(0.9rem, 1.2vw, 0.95rem); letter-spacing: 0.02em; transition: all 0.25s; box-shadow: 0 4px 12px rgba(31, 40, 83, 0.15); border: 1px solid transparent;" 
         onmouseover="this.style.background='#dc2626'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 24px rgba(220,38,38,0.20)';" 
         onmouseout="this.style.background='#1F2853'; this.style.transform='none'; this.style.boxShadow='0 4px 12px rgba(31,40,83,0.15)';">
        Get started with Xberra Tagger →
      </a>
    </div>
  </div>
</section>



<!-- ════ FAQ ════ -->
<section class="sec">
  <div class="wrap">
    <div style="text-align:center;max-width:600px;margin:0 auto 2.5rem;">
      <p class="badge" style="justify-content:center;display:inline-flex;">FAQ</p>
      <h2 class="sec-title">Frequently Asked Questions</h2>
      <p class="sec-lead" style="margin:0 auto;">Answers to commonly asked questions about XBRL conversion services.</p>
    </div>

    <div class="faq-wrap">
      <div class="faq-box">
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">What documents are required for XBRL conversion? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">We typically require signed financial statements in PDF, Word, or Excel format along with company filing details.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">How long does XBRL conversion take? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">Most standard filings are completed within 2–3 business days depending on filing complexity and revision requirements.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">Do you provide ACRA filing support? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">Yes. We assist businesses with direct BizFile filing submission support.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">Can you handle consolidated XBRL filings? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">Yes. We support Full XBRL Consolidated filings for holding companies and group entities.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">Do you support accounting firms and corporate secretarial firms? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">Yes. We provide bulk filing support, volume pricing, and dedicated account management for professional firms managing multiple clients.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">Is XBRL filing mandatory in Singapore? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">Most Singapore-incorporated companies limited by shares are required to file financial statements in XBRL format with ACRA unless specifically exempted.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════ FINAL CTA ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <div class="cta-box">
      <p class="badge" style="background:rgba(255,255,255,.12);color:#fff;display:inline-flex;">✦ Get Started</p>
      <h2 class="cta-title">Convert Your Financial Statements into ACRA-Compliant XBRL</h2>
      <p class="cta-desc">Contact our team to discuss your XBRL conversion requirements, filing timelines, and service options for your business or firm.</p>
      <div class="btn-row">
        <a href="./xbrl-filing-services-contact-singapore" class="btn-wh">Contact Us</a>
        <a href="./xbrl-filing-services-contact-singapore" class="btn-outline">Get Conversion Support</a>
      </div>
    </div>
  </div>
</section>

<script>
  function tFAQ(btn) {
    var item = btn.closest('.faq-item');
    var isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(function(el) {
      el.classList.remove('open');
    });
    if (!isOpen) item.classList.add('open');
  }
</script>

<?php include 'footer.php'; ?>
