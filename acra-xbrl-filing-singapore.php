<?php

$page_title = "ACRA XBRL Filing Services Singapore | BizFinx Filing Experts | Xberra Tagger";

$page_meta = "Professional ACRA XBRL filing services in Singapore. Get expert XBRL conversion, BizFinx validation and BizFile filing support from Xberra Tagger Singapore.";

$page_keywords = "ACRA XBRL filing, Singapore XBRL filing, BizFinx filing Singapore, ACRA filing services, XBRL conversion Singapore, BizFile XBRL filing";

$canonical_url = "https://xberratagger.com.sg/acra-xbrl-filing-singapore/";

$og_title = "ACRA XBRL Filing Services Singapore | BizFinx Filing Experts | Xberra Tagger";

$og_desc = "Professional XBRL conversion, BizFinx validation and ACRA BizFile filing support services in Singapore.";

$og_type = "website";

$og_url = "https://xberratagger.com.sg/acra-xbrl-filing-singapore/";

$full_url = "https://xberratagger.com.sg/acra-xbrl-filing-singapore/";
$full_default = "https://xberratagger.com.sg/acra-xbrl-filing-singapore/";

$schema = '
{
  "@context":"https://schema.org",
  "@graph":[
    {
      "@type":"WebPage",
      "@id":"https://xberratagger.com.sg/acra-xbrl-filing-singapore/",
      "url":"https://xberratagger.com.sg/acra-xbrl-filing-singapore/",
      "name":"ACRA XBRL Filing Services Singapore",
      "description":"Professional ACRA XBRL filing, BizFinx validation and BizFile filing support services in Singapore.",
      "inLanguage":"en-SG"
    },
    {
      "@type":"Service",
      "serviceType":"ACRA XBRL Filing Services",
      "name":"ACRA XBRL Filing Singapore",
      "provider":{
        "@type":"Organization",
        "name":"Xberra Tagger",
        "url":"https://xberratagger.com.sg",
        "logo":"https://xberratagger.com.sg/wp-content/uploads/logo.png",
        "contactPoint":{
          "@type":"ContactPoint",
          "telephone":"+65 60272438",
          "contactType":"customer service",
          "areaServed":"SG",
          "availableLanguage":"English"
        }
      },
      "areaServed":"Singapore",
      "description":"Professional XBRL conversion, BizFinx validation and BizFile filing support services for Singapore companies.",
      "offers":{
        "@type":"Offer",
        "priceCurrency":"SGD",
        "availability":"https://schema.org/InStock"
      }
    },
    {
      "@type":"FAQPage",
      "mainEntity":[
        {
          "@type":"Question",
          "name":"Is ACRA XBRL filing mandatory in Singapore?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Most Singapore incorporated companies are required to file financial statements in XBRL format with ACRA unless specifically exempted."
          }
        },
        {
          "@type":"Question",
          "name":"What is BizFinx?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"BizFinx is ACRA\'s official preparation and validation software used for XBRL filing in Singapore."
          }
        },
        {
          "@type":"Question",
          "name":"How long does ACRA XBRL filing take?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Standard XBRL filing preparation usually takes between 2 to 5 business days depending on company complexity and filing requirements."
          }
        },
        {
          "@type":"Question",
          "name":"Do you support consolidated financial statements?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes. Xberra Tagger supports consolidated accounts and group financial reporting structures for Singapore companies."
          }
        }
      ]
    },
    {
      "@type":"BreadcrumbList",
      "itemListElement":[
        {
          "@type":"ListItem",
          "position":1,
          "name":"Home",
          "item":"https://xberratagger.com.sg"
        },
        {
          "@type":"ListItem",
          "position":2,
          "name":"Services",
          "item":"https://xberratagger.com.sg/services"
        },
        {
          "@type":"ListItem",
          "position":3,
          "name":"ACRA XBRL Filing",
          "item":"https://xberratagger.com.sg/acra-xbrl-filing-singapore"
        }
      ]
    },
    {
      "@type":"Organization",
      "@id":"https://xberratagger.com.sg/#organization",
      "name":"Xberra Tagger",
      "url":"https://xberratagger.com.sg",
      "logo":"https://xberratagger.com.sg/wp-content/uploads/logo.png",
      "contactPoint":{
        "@type":"ContactPoint",
        "telephone":"+65 60272438",
        "contactType":"customer support",
        "areaServed":"Singapore",
        "availableLanguage":"English"
      }
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

  .gap-2 {
    gap: 8px;
  }

  .gap-3 {
    gap: 12px;
  }

  .gap-4 {
    gap: 16px;
  }

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
    .hero-inner {
      grid-template-columns: 1fr;
    }
  }

  @media(max-width:640px) {
    .hero {
      padding: 6rem 0 3rem;
    }
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
    .hero-card {
      animation: none;
    }
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

  .hc-row:last-of-type {
    border-bottom: none;
  }

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
  .sec {
    padding: 2rem 0;
  }

  .sec-alt {
    background: var(--bg);
  }

  @media(max-width:640px) {
    .sec {
      padding: 2.5rem 0;
    }
  }

  /* DEF GRID */
  .def-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2.5rem;
    align-items: start;
  }

  @media(max-width:800px) {
    .def-grid {
      grid-template-columns: 1fr;
    }
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

  .db-row:last-child {
    margin-bottom: 0;
  }

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
  .bento {
    display: grid;
    gap: 1rem;
  }

  .bento-2 {
    grid-template-columns: repeat(2, 1fr);
  }

  .bento-3 {
    grid-template-columns: repeat(3, 1fr);
  }

  .bento-4 {
    grid-template-columns: repeat(4, 1fr);
  }

  @media(max-width:900px) {
    .bento-4 {
      grid-template-columns: repeat(2, 1fr);
    }
    .bento-3 {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media(max-width:580px) {
    .bento-4,
    .bento-3,
    .bento-2 {
      grid-template-columns: 1fr;
    }
  }

  .span-2 {
    grid-column: span 2;
  }

  .span-3 {
    grid-column: span 3;
  }

  @media(max-width:900px) {
    .span-3 {
      grid-column: span 2;
    }
  }

  @media(max-width:580px) {
    .span-2,
    .span-3 {
      grid-column: span 1 !important;
    }
  }

  .span-4 {
    grid-column: span 4;
  }

  @media(max-width:900px) {
    .span-4 {
      grid-column: span 2;
    }
  }

  @media(max-width:580px) {
    .span-4 {
      grid-column: span 1;
    }
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

  .card.dk {
    background: var(--navy);
    border-color: var(--navy);
  }

  .card.red {
    background: var(--red);
    border-color: var(--red);
  }

  .card.lt {
    background: var(--light);
    border-color: var(--border);
  }

  .card h3 {
    font-family: var(--ff-head);
    font-size: 1.15rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: .5rem;
  }

  .card.dk h3,
  .card.red h3 {
    color: #fff;
  }

  .card p {
    font-size: .88rem;
    color: var(--muted);
    line-height: 1.65;
  }

  .card.dk p {
    color: rgba(255, 255, 255, .65);
  }

  .card.red p {
    color: rgba(255, 255, 255, .85);
  }

  .card-tag {
    font-size: .7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .06em;
    color: var(--red);
    margin-bottom: 10px;
  }

  .card.dk .card-tag {
    color: rgba(255, 255, 255, .4);
  }

  .card.red .card-tag {
    color: rgba(255, 255, 255, .6);
  }

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

  .card.dk .card-icon {
    background: rgba(255, 255, 255, .1);
  }

  .card.dk .card-icon svg {
    stroke: #fff;
  }

  .card.red .card-icon {
    background: rgba(255, 255, 255, .15);
  }

  .card.red .card-icon svg {
    stroke: #fff;
  }

  /* PREP STEPS */
  .prep-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.25rem;
  }

  @media(max-width:640px) {
    .prep-grid {
      grid-template-columns: 1fr;
    }
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
    .ch-cards {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media(max-width:580px) {
    .ch-cards {
      grid-template-columns: 1fr;
    }
  }

  /* BENEFITS SECTION */
  .benefits-layout {
    display: flex;
    gap: 3rem;
    align-items: start;
  }

  @media(max-width:800px) {
    .benefits-layout {
      flex-direction: column;
      gap: 2rem;
    }
  }

  .benefit-card-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: .85rem;
    margin-top: .5rem;
  }

  @media(max-width:480px) {
    .benefit-card-grid {
      grid-template-columns: 1fr;
    }
  }

  /* CHIP GRID */
  .chip-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-bottom: 1.2rem;
  }

  @media(max-width:420px) {
    .chip-grid {
      grid-template-columns: 1fr;
    }
  }

  /* KEY CHANGES GRID */
  .key-changes-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 28px;
    margin-top: 2.5rem;
  }

  @media(max-width:700px) {
    .key-changes-grid {
      grid-template-columns: 1fr;
      gap: 18px;
    }
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
    .trust-strip {
      gap: .6rem;
    }
    .trust-badge {
      padding: .6rem .9rem;
    }
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

  .faq-item:last-child {
    border-bottom: none;
  }

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
    .faq-q {
      font-size: .9rem;
      padding: 16px 18px;
    }
  }

  .faq-q:hover {
    background: var(--bg);
  }

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
    .faq-a {
      padding: 0 18px 16px;
    }
  }

  .faq-item.open .faq-a {
    display: block;
  }

  .faq-item.open .faq-arrow {
    transform: rotate(180deg);
  }

  .faq-item.open .faq-q {
    background: var(--bg);
  }

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
    .cta-box {
      padding: 2.5rem 1.5rem;
    }
  }

  .cta-box::before {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 60% 80% at 50% -20%, rgba(220, 38, 38, .2), transparent 60%);
  }

  .cta-box > * {
    position: relative;
    z-index: 1;
  }

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
    .btn-wh,
    .btn-outline {
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

  .highlight-box strong {
    color: var(--red);
  }

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
    .mobile-no-padding {
      padding-top: 0 !important;
    }
    .hero-stats {
      row-gap: 15px !important;
    }
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
    .hero-stats .stat-number {
      font-size: 1rem;
      line-height: 1.3;
    }
    .hero-stats .stat-label {
      font-size: .82rem;
      line-height: 1.4;
    }
  }

  /* Stat Card */
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

  /* Hero title */
  .hero-title {
    font-size: 2.8rem;
  }
  @media (max-width: 1400px) and (min-width: 1251px) {
    .hero-title { font-size: 2.3rem; }
  }
  @media (max-width: 1250px) {
    .hero-title { font-size: clamp(1.5rem, 3.5vw, 2.1rem); }
  }

  /* Section titles */
  .sec-title {
    font-size: 2.5rem;
  }
  @media (max-width: 1400px) and (min-width: 1251px) {
    .sec-title { font-size: 2rem; }
  }
  @media (max-width: 1250px) {
    .sec-title { font-size: clamp(1.4rem, 2.5vw, 1.9rem); }
  }

  /* Section lead */
  .sec-lead {
    font-size: 1.10rem;
  }
  @media (max-width: 1400px) and (min-width: 1251px) {
    .sec-lead { font-size: 1rem; }
  }
  @media (max-width: 1250px) {
    .sec-lead { font-size: clamp(0.9rem, 1.8vw, 1rem); }
  }

  /* Hero description */
  .hero-desc {
    font-size: 1rem;
  }
  @media (max-width: 1400px) and (min-width: 1251px) {
    .hero-desc { font-size: 0.95rem; }
  }
  @media (max-width: 1250px) {
    .hero-desc { font-size: clamp(0.85rem, 1.5vw, 0.95rem); }
  }

  /* Stat card numbers */
  .stat-number {
    font-size: 15px;
  }
  @media (max-width: 1400px) and (min-width: 1251px) {
    .stat-number { font-size: 14px; }
  }
  @media (max-width: 1250px) {
    .stat-number { font-size: clamp(11px, 1.2vw, 14px); }
  }

  /* Stat card labels */
  .stat-label {
    font-size: 0.75rem;
  }
  @media (max-width: 1400px) and (min-width: 1251px) {
    .stat-label { font-size: 0.7rem; }
  }
  @media (max-width: 1250px) {
    .stat-label { font-size: clamp(0.62rem, 1vw, 0.7rem); }
  }

  /* Card headings */
  .card h3 {
    font-size: 1.15rem;
  }
  @media (max-width: 1400px) and (min-width: 1251px) {
    .card h3 { font-size: 1rem; }
  }
  @media (max-width: 1250px) {
    .card h3 { font-size: clamp(0.9rem, 1.4vw, 1rem); }
  }

  /* Key changes large card headings */
  .key-changes-grid .card h3 {
    font-size: 2rem;
  }
  @media (max-width: 1400px) and (min-width: 1251px) {
    .key-changes-grid .card h3 { font-size: 1.6rem; }
  }
  @media (max-width: 1250px) {
    .key-changes-grid .card h3 { font-size: clamp(1.2rem, 2vw, 1.5rem); }
  }

  /* Prep card headings */
  .prep-card h4 {
    font-size: 1.1rem;
  }
  @media (max-width: 1400px) and (min-width: 1251px) {
    .prep-card h4 { font-size: 1rem; }
  }
  @media (max-width: 1250px) {
    .prep-card h4 { font-size: clamp(0.88rem, 1.3vw, 1rem); }
  }

  /* Related services card headings */
  .bento.bento-2 .card h3 {
    font-size: 1.4rem;
  }
  @media (max-width: 1400px) and (min-width: 1251px) {
    .bento.bento-2 .card h3 { font-size: 1.2rem; }
  }
  @media (max-width: 1250px) {
    .bento.bento-2 .card h3 { font-size: clamp(1rem, 1.5vw, 1.15rem); }
  }

  /* CTA title */
  .cta-title {
    font-size: 2.6rem;
  }
  @media (max-width: 1400px) and (min-width: 1251px) {
    .cta-title { font-size: 2.1rem; }
  }
  @media (max-width: 1250px) {
    .cta-title { font-size: clamp(1.4rem, 3vw, 2rem); }
  }

  /* Hero card title */
  .hc-title {
    font-size: 1.3rem;
  }
  @media (max-width: 1400px) and (min-width: 1251px) {
    .hc-title { font-size: 1.15rem; }
  }
  @media (max-width: 1250px) {
    .hc-title { font-size: clamp(1rem, 1.5vw, 1.1rem); }
  }

  /* Form labels */
  .form-group label {
    font-size: 0.9rem;
  }
  @media (max-width: 1400px) and (min-width: 1251px) {
    .form-group label { font-size: 0.85rem; }
  }
  @media (max-width: 1250px) {
    .form-group label { font-size: clamp(0.8rem, 1.2vw, 0.85rem); }
  }
</style>

<div class="py-lg-4 py-3"></div>

<!-- ════ HERO ════ -->
<section class="hero">
  <div class="wrap">
    <div class="hero-inner">
      <div>
        <ul class="bc">
          <li><a href="./index">Home</a></li>
          <li><span>ACRA XBRL Filing Services Singapore</span></li>
        </ul>
        <h1 class="hero-title">
          ACRA XBRL Filing <em>Services</em> Singapore
        </h1>
        <p class="hero-desc">
          Ensure accurate and compliant financial statement submission with professional ACRA XBRL filing services from Xberra Tagger Singapore. We help Singapore companies prepare, validate and submit XBRL financial statements efficiently through the ACRA BizFile system.
        </p>
        <p class="hero-desc">
          Our experienced specialists support businesses, accounting firms and corporate service providers with reliable XBRL conversion, BizFinx validation and filing assistance tailored to Singapore compliance requirements.
        </p>

        <div class="row hero-stats">
          <div class="col-3 col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="stat-number">XBRL</div>
              <div class="stat-label">Conversion</div>
            </div>
          </div>
          <div class="col-3 col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="stat-number">BizFinx</div>
              <div class="stat-label">Validation</div>
            </div>
          </div>
          <div class="col-3 col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="stat-number">BizFile</div>
              <div class="stat-label">Filing Support</div>
            </div>
          </div>
          <div class="col-3 col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="stat-number">2–5 Days</div>
              <div class="stat-label">Turnaround</div>
            </div>
          </div>
        </div>
      </div>

      <div style="padding-top:1rem;" class="mobile-no-padding">
        <div class="hero-card">
          <p class="hc-label">Services Quick Reference</p>
          <p class="hc-title">What We Provide</p>
          <div class="hc-row"><span>XBRL Conversion</span><strong>✓</strong></div>
          <div class="hc-row"><span>BizFinx Validation</span><strong>✓</strong></div>
          <div class="hc-row"><span>BizFile Filing Assistance</span><strong>✓</strong></div>
          <div class="hc-row"><span>Error Rectification</span><strong>✓</strong></div>
          <div class="hc-row"><span>Consolidated Reporting</span><strong>✓</strong></div>
          <div class="hc-divider"></div>
          <a href="./xbrl-filing-services-contact-singapore" class="hc-btn">Get Filing Support</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════ PROFESSIONAL SERVICES ════ -->
<section class="sec">
  <div class="wrap">
    <div class="def-grid">
      <div>
        <p class="badge">✦ Professional Services</p>
        <h2 class="sec-title">Professional ACRA XBRL Filing Services</h2>
        <p class="sec-lead" style="margin-bottom:1rem;">
          ACRA requires most Singapore incorporated companies to submit annual financial statements in XBRL format as part of statutory compliance obligations.
        </p>
        <p style="color:var(--muted);font-size:.95rem;line-height:1.7;margin-bottom:1rem;">
          The filing process involves converting financial statements into structured XBRL format and validating them using BizFinx preparation tools before submission through the BizFile portal.
        </p>
        <p style="color:var(--muted);font-size:.95rem;line-height:1.7;">
          Xberra Tagger Singapore provides complete end-to-end filing support to help businesses reduce filing complexity, minimize rejection risks and meet compliance deadlines confidently.
        </p>
      </div>

      <div class="def-box">
        <div class="db-label">XBRL Filing</div>
        <div class="db-title">What is ACRA XBRL Filing?</div>
        <div class="db-note">
          <span style="font-size:1.1rem;">📌</span>
          <p>ACRA XBRL filing refers to the electronic submission of financial statements in <strong style="color:rgba(255,255,255,.8);">XBRL format through Singapore's BizFile system</strong>.</p>
        </div>
        <div class="db-row"><span>Globally Recognized Standard</span><span>✓</span></div>
        <div class="db-row"><span>Digital Financial Data Processing</span><span>✓</span></div>
        <div class="db-row"><span>ACRA Taxonomy Compliance</span><span>✓</span></div>
        <div class="db-row"><span>BizFinx Validation Required</span><span>✓</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ════ WHO NEEDS TO FILE ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <p class="badge">✦ Who Needs to File</p>
    <h2 class="sec-title">Who Needs to File XBRL with ACRA?</h2>
    <p class="sec-lead" style="margin-bottom:2.5rem;">
      Most Singapore incorporated companies limited by shares are required to file financial statements in XBRL format unless exempted under ACRA regulations.
    </p>

    <div class="bento bento-3" style="margin-bottom:1.5rem;">
      <div class="card dk">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <div class="card-tag">Company Type</div>
        <h3>Private Limited Companies</h3>
      </div>
      <div class="card lt">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg></div>
        <div class="card-tag">Company Type</div>
        <h3>SMEs and Startups</h3>
      </div>
      <div class="card lt">
        <div class="card-icon"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg></div>
        <div class="card-tag">Company Type</div>
        <h3>Holding Companies</h3>
      </div>
      <div class="card lt">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div class="card-tag">Company Type</div>
        <h3>Group Reporting Entities</h3>
      </div>
      <div class="card lt">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
        <div class="card-tag">Company Type</div>
        <h3>Subsidiary Companies</h3>
      </div>
      <div class="card red">
        <div class="card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <div class="card-tag">Also Supported</div>
        <h3>Accounting &amp; Corporate Secretarial Firms</h3>
        <p>Our team supports businesses across various industries with accurate and efficient filing assistance.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════ OUR SERVICES ════ -->
<section class="sec">
  <div class="wrap">
    <p class="badge">✦ Our Services</p>
    <h2 class="sec-title">Our ACRA XBRL Filing Services</h2>
    <p class="sec-lead" style="margin-bottom:2.5rem;">
      Complete end-to-end XBRL filing support tailored to Singapore compliance requirements.
    </p>

    <div class="key-changes-grid">
      <div class="card dk" style="padding:38px;border-radius:34px;">
        <div class="card-tag">Core Services</div>
        <h3 style="font-size:2rem;line-height:1.15;margin-bottom:1.3rem;">XBRL Conversion &amp; Validation</h3>
        <p style="color:rgba(255,255,255,.78);margin-bottom:1rem;">Comprehensive XBRL conversion and BizFinx validation services to ensure your financial statements are compliant and error-free.</p>
        <div class="chip-grid">
          <div style="background:rgba(255,255,255,.06);padding:14px 18px;border-radius:14px;color:rgba(255,255,255,.9);">XBRL Conversion</div>
          <div style="background:rgba(255,255,255,.06);padding:14px 18px;border-radius:14px;color:rgba(255,255,255,.9);">BizFinx Validation</div>
          <div style="background:rgba(255,255,255,.06);padding:14px 18px;border-radius:14px;color:rgba(255,255,255,.9);">Error Rectification</div>
          <div style="background:rgba(255,255,255,.06);padding:14px 18px;border-radius:14px;color:rgba(255,255,255,.9);">BizFile Filing Assistance</div>
          <div style="background:rgba(255,255,255,.06);padding:14px 18px;border-radius:14px;color:rgba(255,255,255,.9);grid-column:span 2;">Consolidated Financial Reporting</div>
        </div>
        <p style="color:rgba(255,255,255,.78);margin:0;">Urgent filing support also available for tight compliance deadlines.</p>
      </div>

      <div class="card red" style="padding:38px;border-radius:34px;">
        <div class="card-tag">Why Choose Us</div>
        <h3 style="font-size:2rem;line-height:1.15;margin-bottom:1.3rem;">Why Businesses Choose Xberra Tagger</h3>
        <p style="color:rgba(255,255,255,.88);margin-bottom:1rem;">Dedicated professionals with expertise in Singapore XBRL compliance requirements.</p>
        <div class="chip-grid">
          <div style="background:rgba(255,255,255,.08);padding:14px 18px;border-radius:14px;color:#fff;">Experienced Specialists</div>
          <div style="background:rgba(255,255,255,.08);padding:14px 18px;border-radius:14px;color:#fff;">Fast Turnaround</div>
          <div style="background:rgba(255,255,255,.08);padding:14px 18px;border-radius:14px;color:#fff;">Affordable Support</div>
          <div style="background:rgba(255,255,255,.08);padding:14px 18px;border-radius:14px;color:#fff;">High Filing Accuracy</div>
        </div>
        <p style="color:rgba(255,255,255,.88);margin:0;">Responsive support throughout the filing and compliance process.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════ FILING PROCESS ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <p class="badge">✦ Filing Process</p>
    <h2 class="sec-title">ACRA XBRL Filing Process</h2>
    <p class="sec-lead" style="margin-bottom:2.5rem;">
      A structured six-step process to ensure accurate, compliant XBRL submission.
    </p>

    <div class="prep-grid">
      <div class="prep-card">
        <div class="prep-step">01</div>
        <div class="card-icon" style="margin-bottom:.75rem;">
          <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        </div>
        <h4>Document Submission</h4>
        <p>Share your audited or management financial statements and supporting documents.</p>
      </div>
      <div class="prep-card">
        <div class="prep-step">02</div>
        <div class="card-icon" style="margin-bottom:.75rem;">
          <svg viewBox="0 0 24 24"><path d="M7 7h10"/><path d="M7 12h10"/><path d="M7 17h10"/></svg>
        </div>
        <h4>Financial Data Mapping</h4>
        <p>Financial statements are converted and mapped into XBRL format.</p>
      </div>
      <div class="prep-card">
        <div class="prep-step">03</div>
        <div class="card-icon" style="margin-bottom:.75rem;">
          <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        </div>
        <h4>BizFinx Validation</h4>
        <p>Validation is completed using BizFinx preparation tools to ensure compliance accuracy.</p>
      </div>
      <div class="prep-card">
        <div class="prep-step">04</div>
        <div class="card-icon" style="margin-bottom:.75rem;">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        </div>
        <h4>Error Review &amp; Correction</h4>
        <p>Validation issues, warnings and inconsistencies are corrected before submission.</p>
      </div>
      <div class="prep-card">
        <div class="prep-step">05</div>
        <div class="card-icon" style="margin-bottom:.75rem;">
          <svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
        </div>
        <h4>Final File Preparation</h4>
        <p>ACRA-ready XBRL files are finalized for filing.</p>
      </div>
      <div class="prep-card">
        <div class="prep-step">06</div>
        <div class="card-icon" style="margin-bottom:.75rem;">
          <svg viewBox="0 0 24 24"><polyline points="22 2 15 22 11 13 2 9 22 2"/></svg>
        </div>
        <h4>Filing Support</h4>
        <p>Optional assistance for submission through the BizFile portal.</p>
      </div>
    </div>

    <div class="highlight-box">
      <p>A structured filing process helps <strong>minimize rejection risks and meet compliance deadlines confidently</strong>.</p>
    </div>
  </div>
</section>

<!-- ════ BENEFITS OF OUTSOURCING ════ -->
<section class="sec">
  <div class="wrap">
    <div class="benefits-layout">
      <div style="flex:1;min-width:0;">
        <p class="badge">✦ Benefits</p>
        <h2 class="sec-title">Benefits of Outsourcing ACRA XBRL Filing</h2>
        <p style="color:var(--muted);font-size:.95rem;line-height:1.7;margin-bottom:1rem;">Outsourcing ACRA XBRL filing helps businesses improve operational efficiency and reduce compliance risks. Benefits include:</p>

        <div class="benefit-card-grid">
          <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.1rem 1.25rem;display:flex;align-items:center;gap:.85rem;transition:all .28s;">
            <div style="width:36px;height:36px;background:rgba(220,38,38,.06);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--red)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
            </div>
            <span style="font-size:.88rem;font-weight:600;color:var(--navy);">Reduced internal workload</span>
          </div>
          <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.1rem 1.25rem;display:flex;align-items:center;gap:.85rem;transition:all .28s;">
            <div style="width:36px;height:36px;background:rgba(220,38,38,.06);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--red)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </div>
            <span style="font-size:.88rem;font-weight:600;color:var(--navy);">Faster filing preparation</span>
          </div>
          <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.1rem 1.25rem;display:flex;align-items:center;gap:.85rem;transition:all .28s;">
            <div style="width:36px;height:36px;background:rgba(220,38,38,.06);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--red)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            </div>
            <span style="font-size:.88rem;font-weight:600;color:var(--navy);">Lower risk of validation errors</span>
          </div>
          <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.1rem 1.25rem;display:flex;align-items:center;gap:.85rem;transition:all .28s;">
            <div style="width:36px;height:36px;background:rgba(220,38,38,.06);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--red)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <span style="font-size:.88rem;font-weight:600;color:var(--navy);">Improved compliance accuracy</span>
          </div>
          <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.1rem 1.25rem;display:flex;align-items:center;gap:.85rem;transition:all .28s;">
            <div style="width:36px;height:36px;background:rgba(220,38,38,.06);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--red)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
            </div>
            <span style="font-size:.88rem;font-weight:600;color:var(--navy);">Access to XBRL expertise</span>
          </div>
          <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.1rem 1.25rem;display:flex;align-items:center;gap:.85rem;transition:all .28s;">
            <div style="width:36px;height:36px;background:rgba(220,38,38,.06);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--red)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            </div>
            <span style="font-size:.88rem;font-weight:600;color:var(--navy);">Better deadline management</span>
          </div>
          <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.1rem 1.25rem;display:flex;align-items:center;gap:.85rem;transition:all .28s;grid-column:span 2;">
            <div style="width:36px;height:36px;background:rgba(220,38,38,.06);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--red)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/></svg>
            </div>
            <span style="font-size:.88rem;font-weight:600;color:var(--navy);">Reduced risk of filing rejection</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════ INDUSTRIES ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <p class="badge">✦ Industries We Support</p>
    <h2 class="sec-title">Industries We Support</h2>
    <p class="sec-lead" style="margin-bottom:2rem;">Xberra Tagger Singapore supports companies across multiple sectors.</p>

    <div class="ch-cards">
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">01</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Technology Companies</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">02</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Trading Businesses</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">03</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Manufacturing Companies</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">04</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Investment Holding Companies</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">05</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Retail Businesses</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">06</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Construction Companies</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">07</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Professional Services Firms</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">08</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Logistics &amp; Transportation Companies</span>
      </div>
    </div>

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
  </div>
</section>

<!-- ════ FAQ ════ -->
<section class="sec">
  <div class="wrap">
    <div style="text-align:center;max-width:600px;margin:0 auto 2.5rem;">
      <p class="badge" style="justify-content:center;display:inline-flex;">FAQ</p>
      <h2 class="sec-title">Frequently Asked Questions</h2>
      <p class="sec-lead" style="margin:0 auto;">Answers to commonly asked questions about ACRA XBRL filing.</p>
    </div>

    <div class="faq-wrap">
      <div class="faq-box">
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">Is ACRA XBRL filing mandatory? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">Yes. Most Singapore incorporated companies are required to submit financial statements in XBRL format unless specifically exempted by ACRA.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">What is BizFinx? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">BizFinx is ACRA's official preparation and validation software used for XBRL filing in Singapore.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">How long does ACRA XBRL filing take? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">Standard filing preparation generally takes between 2 to 5 business days depending on company complexity and filing requirements.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">Can you support urgent filings? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">Yes. Expedited filing support is available for urgent and overdue filing requirements.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">Do you assist with consolidated financial statements? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">Yes. We support consolidated accounts and group reporting structures.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">What documents are required? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">Typically required documents include audited financial statements, trial balance and supporting financial disclosures.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════ FINAL CTA ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <div class="cta-box">
      <p class="badge" style="background:rgba(255,255,255,.12);color:#fff;display:inline-flex;">✦ Filing Support</p>
      <h2 class="cta-title">Need Help with ACRA XBRL Filing?</h2>
      <p class="cta-desc">Partner with Xberra Tagger Singapore for professional XBRL conversion, BizFinx validation and ACRA filing support. Contact our compliance specialists today for reliable and efficient filing assistance.</p>
      <div class="btn-row">
        <a href="./xbrl-filing-services-contact-singapore" class="btn-wh">Contact Us</a>
        <a href="./xbrl-filing-services-contact-singapore" class="btn-outline">Get Filing Support</a>
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
