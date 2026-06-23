<?php

$page_title = "ACRA Filing Deadline Calculator Singapore | AGM & XBRL Due Date Checker";

$page_meta = "Use our ACRA Filing Deadline Calculator Singapore to calculate AGM, Annual Return, and XBRL filing deadlines quickly and accurately for Singapore companies.";

$page_keywords = "ACRA filing deadline calculator, Singapore AGM deadline, XBRL filing due date, annual return filing Singapore, BizFinx deadline calculator, ACRA due date checker, XBRL filing Singapore, AGM calculator Singapore";

$canonical_url = "https://xberratagger.com.sg/acra-xbrl-filing-deadline-calculator/";

$og_title = "ACRA Filing Deadline Calculator Singapore | AGM & XBRL Due Date Checker";

$og_desc = "Calculate AGM, Annual Return, and XBRL filing deadlines for Singapore companies using our ACRA Filing Deadline Calculator.";

$og_type = "website";

$og_url = "https://xberratagger.com.sg/acra-xbrl-filing-deadline-calculator/";

$full_url = "https://xberratagger.com.sg/acra-xbrl-filing-deadline-calculator/";
$full_default = "https://xberratagger.com.sg/acra-xbrl-filing-deadline-calculator/";

$schema = '
{
  "@context":"https://schema.org",
  "@graph":[
    {
      "@type":"WebPage",
      "@id":"https://xberratagger.com.sg/acra-xbrl-filing-deadline-calculator/",
      "url":"https://xberratagger.com.sg/acra-xbrl-filing-deadline-calculator/",
      "name":"ACRA Filing Deadline Calculator Singapore",
      "description":"Calculate AGM, Annual Return, and XBRL filing deadlines for Singapore companies.",
      "inLanguage":"en-SG"
    },
    {
      "@type":"SoftwareApplication",
      "name":"ACRA Filing Deadline Calculator",
      "applicationCategory":"BusinessApplication",
      "operatingSystem":"Web",
      "offers":{
        "@type":"Offer",
        "price":"0",
        "priceCurrency":"SGD"
      }
    },
    {
      "@type":"Organization",
      "name":"XBRERA Tagger Singapore",
      "url":"https://xberratagger.com.sg",
      "logo":"https://xberratagger.com.sg/images/logo.png",
      "contactPoint":{
        "@type":"ContactPoint",
        "telephone":"+65 60272438",
        "contactType":"customer service",
        "areaServed":"SG",
        "availableLanguage":"English"
      }
    },
    {
      "@type":"FAQPage",
      "mainEntity":[
        {
          "@type":"Question",
          "name":"What is an ACRA Filing Deadline Calculator?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"An ACRA Filing Deadline Calculator helps companies estimate AGM, Annual Return, and XBRL filing deadlines based on company information and financial year end."
          }
        },
        {
          "@type":"Question",
          "name":"Why are filing deadlines important?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Missing filing deadlines can result in penalties, compliance issues, and delayed regulatory processing."
          }
        },
        {
          "@type":"Question",
          "name":"Does every company need XBRL filing?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Not all companies are required to file in XBRL format. Filing obligations depend on company type and reporting requirements."
          }
        },
        {
          "@type":"Question",
          "name":"Can the calculator guarantee compliance deadlines?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"The calculator provides estimated filing timelines. Companies should verify deadlines according to applicable ACRA regulations."
          }
        },
        {
          "@type":"Question",
          "name":"Why should companies prepare filings early?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Early preparation helps avoid validation issues, filing delays, and last-minute compliance complications."
          }
        }
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

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-14px);
    }
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

  .prep-card ul {
    margin-top: .5rem;
    padding-left: 1.1rem;
    color: var(--muted);
    line-height: 2;
    font-size: .88rem;
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

  /* COMPLIANCE BOXES */
  .comp-boxes-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.2rem;
  }

  @media(max-width:640px) {
    .comp-boxes-grid {
      grid-template-columns: 1fr;
    }
  }

  /* INNER CHIP GRIDS */
  .inner-chip-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: .6rem;
  }

  @media(max-width:480px) {
    .inner-chip-grid {
      grid-template-columns: 1fr;
    }
  }

  .inner-chip-grid .span-full {
    grid-column: span 2;
  }

  @media(max-width:480px) {
    .inner-chip-grid .span-full {
      grid-column: span 1;
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

  /* CALCULATOR SECTION */
  .calc-wrap {
    background: var(--white);
    border-radius: var(--r-xl);
    padding: 2.5rem;
    border: 1px solid var(--border);
    box-shadow: var(--shadow-md);
  }

  .calc-form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.25rem;
    margin-bottom: 1.5rem;
  }

  @media(max-width:640px) {
    .calc-form-grid {
      grid-template-columns: 1fr;
    }
  }

  .form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    font-size: .9rem;
    color: var(--navy);
  }

  .form-group input,
  .form-group select {
    width: 100%;
    padding: 13px 14px;
    border: 1.5px solid var(--border);
    border-radius: 12px;
    font-family: var(--ff-body);
    font-size: .9rem;
    color: var(--ink);
    background: var(--bg);
    transition: border-color .2s;
  }

  .form-group input:focus,
  .form-group select:focus {
    outline: none;
    border-color: var(--navy);
  }

  .calc-btn {
    background: var(--navy);
    color: #fff;
    border: none;
    padding: 15px 32px;
    border-radius: 40px;
    cursor: pointer;
    font-size: .95rem;
    font-weight: 700;
    font-family: var(--ff-body);
    transition: all .25s;
    display: block;
    width: 100%;
    margin-top: .5rem;
  }

  .calc-btn:hover {
    background: var(--red);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(220, 38, 38, .25);
  }

  .calc-results {
    margin-top: 2rem;
    display: none;
  }

  .result-box {
    background: var(--bg);
    border-left: 4px solid var(--navy);
    border-radius: 0 var(--r-sm) var(--r-sm) 0;
    padding: 16px 20px;
    margin-bottom: 12px;
    display: flex;
    flex-direction: column;
    gap: 4px;
  }

  .result-box strong {
    font-size: .82rem;
    text-transform: uppercase;
    letter-spacing: .06em;
    color: var(--muted);
    font-weight: 700;
  }

  .result-box span {
    font-size: 1rem;
    font-weight: 700;
    color: var(--navy);
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

  .cta-box>* {
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
    from {
      opacity: 0;
      transform: translateY(24px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .anim {
    animation: fadeUp .65s ease both;
  }

  .anim-d1 {
    animation-delay: .1s;
  }

  .anim-d2 {
    animation-delay: .2s;
  }

  .anim-d3 {
    animation-delay: .3s;
  }

  .anim-d4 {
    animation-delay: .4s;
  }

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
  /* Make entire date input clickable */
/* Wrapper */
.form-group {
  position: relative;
}

/* Date input */
.form-group input[type="date"] {
  position: relative;
  cursor: pointer;
  padding-right: 45px;
}

/* Make entire date field clickable */
.form-group input[type="date"]::-webkit-calendar-picker-indicator {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  cursor: pointer;
  opacity: 0;
}

/* Show calendar icon ONLY for date field */
.form-group:has(input[type="date"])::after {
  content: "📅";
  position: absolute;
  right: 14px;
  top: 70%;
  transform: translateY(-50%);
  pointer-events: none;
  font-size: 18px;
}
/* ── Hero title ── */
.hero-title {
  font-size: 2.8rem; /* >1400px */
}
@media (max-width: 1400px) and (min-width: 1251px) {
  .hero-title { font-size: 2.3rem; }
}
@media (max-width: 1250px) {
  .hero-title { font-size: clamp(1.5rem, 3.5vw, 2.1rem); }
}

/* ── Section titles ── */
.sec-title {
  font-size: 2.5rem; /* >1400px */
}
@media (max-width: 1400px) and (min-width: 1251px) {
  .sec-title { font-size: 2rem; }
}
@media (max-width: 1250px) {
  .sec-title { font-size: clamp(1.4rem, 2.5vw, 1.9rem); }
}

/* ── Section lead ── */
.sec-lead {
  font-size: 1.10rem; /* >1400px */
}
@media (max-width: 1400px) and (min-width: 1251px) {
  .sec-lead { font-size: 1rem; }
}
@media (max-width: 1250px) {
  .sec-lead { font-size: clamp(0.9rem, 1.8vw, 1rem); }
}

/* ── Hero description ── */
.hero-desc {
  font-size: 1rem; /* >1400px */
}
@media (max-width: 1400px) and (min-width: 1251px) {
  .hero-desc { font-size: 0.95rem; }
}
@media (max-width: 1250px) {
  .hero-desc { font-size: clamp(0.85rem, 1.5vw, 0.95rem); }
}

/* ── Stat card numbers ── */
.stat-number {
  font-size: 15px; /* >1400px — kept as px per your original */
}
@media (max-width: 1400px) and (min-width: 1251px) {
  .stat-number { font-size: 14px; }
}
@media (max-width: 1250px) {
  .stat-number { font-size: clamp(11px, 1.2vw, 14px); }
}

/* ── Stat card labels ── */
.stat-label {
  font-size: 0.75rem; /* >1400px */
}
@media (max-width: 1400px) and (min-width: 1251px) {
  .stat-label { font-size: 0.7rem; }
}
@media (max-width: 1250px) {
  .stat-label { font-size: clamp(0.62rem, 1vw, 0.7rem); }
}

/* ── Card headings ── */
.card h3 {
  font-size: 1.15rem; /* >1400px */
}
@media (max-width: 1400px) and (min-width: 1251px) {
  .card h3 { font-size: 1rem; }
}
@media (max-width: 1250px) {
  .card h3 { font-size: clamp(0.9rem, 1.4vw, 1rem); }
}

/* ── Key changes / Annual Return large card headings ── */
.key-changes-grid .card h3 {
  font-size: 2rem; /* >1400px */
}
@media (max-width: 1400px) and (min-width: 1251px) {
  .key-changes-grid .card h3 { font-size: 1.6rem; }
}
@media (max-width: 1250px) {
  .key-changes-grid .card h3 { font-size: clamp(1.2rem, 2vw, 1.5rem); }
}

/* ── Prep card headings ── */
.prep-card h4 {
  font-size: 1.1rem; /* >1400px */
}
@media (max-width: 1400px) and (min-width: 1251px) {
  .prep-card h4 { font-size: 1rem; }
}
@media (max-width: 1250px) {
  .prep-card h4 { font-size: clamp(0.88rem, 1.3vw, 1rem); }
}

/* ── Related services card headings ── */
.bento.bento-2 .card h3 {
  font-size: 1.4rem; /* >1400px */
}
@media (max-width: 1400px) and (min-width: 1251px) {
  .bento.bento-2 .card h3 { font-size: 1.2rem; }
}
@media (max-width: 1250px) {
  .bento.bento-2 .card h3 { font-size: clamp(1rem, 1.5vw, 1.15rem); }
}

/* ── CTA title ── */
.cta-title {
  font-size: 2.6rem; /* >1400px */
}
@media (max-width: 1400px) and (min-width: 1251px) {
  .cta-title { font-size: 2.1rem; }
}
@media (max-width: 1250px) {
  .cta-title { font-size: clamp(1.4rem, 3vw, 2rem); }
}

/* ── Hero card title ── */
.hc-title {
  font-size: 1.3rem; /* >1400px */
}
@media (max-width: 1400px) and (min-width: 1251px) {
  .hc-title { font-size: 1.15rem; }
}
@media (max-width: 1250px) {
  .hc-title { font-size: clamp(1rem, 1.5vw, 1.1rem); }
}

/* ── Calculator section title ── */
.xbrl-calculator .calc-wrap h2 {
  font-size: 2.5rem; /* >1400px */
}
@media (max-width: 1400px) and (min-width: 1251px) {
  .xbrl-calculator .calc-wrap h2 { font-size: 2rem; }
}
@media (max-width: 1250px) {
  .xbrl-calculator .calc-wrap h2 { font-size: clamp(1.4rem, 2.5vw, 1.9rem); }
}

/* ── Form labels ── */
.form-group label {
  font-size: 0.9rem; /* >1400px */
}
@media (max-width: 1400px) and (min-width: 1251px) {
  .for
</style>

<div class="py-lg-4 py-3"></div>

<!-- ════ HERO ════ -->
<section class="hero">
  <div class="wrap">
    <div class="hero-inner">
      <div>
        <ul class="bc">
          <li><a href="/">Home</a></li>
          <li><span>ACRA Filing Deadline Calculator</span></li>
        </ul>
        <h1 class="hero-title">
          ACRA Filing Deadline <em>Calculator</em> Singapore
        </h1>
        <p class="hero-desc">
          Managing corporate filing deadlines is essential for maintaining compliance in Singapore. Missing AGM, Annual Return, or XBRL filing deadlines can lead to penalties, filing complications, and unnecessary compliance risks.
        </p>
        <p class="hero-desc">
          Our ACRA Filing Deadline Calculator helps Singapore companies quickly determine important filing due dates based on their financial year end and filing requirements.
        </p>

        <div class="row hero-stats">

          <div class="col-3 col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="stat-number">AGM</div>
              <div class="stat-label">Deadline</div>
            </div>
          </div>

          <div class="col-3 col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="stat-number">Annual Return</div>
              <div class="stat-label">Filing Deadline</div>
            </div>
          </div>

          <div class="col-3 col-md-6 col-lg-3 ">
            <div class="stat-card">
              <div class="stat-number">XBRL</div>
              <div class="stat-label">Filing Due Date</div>
            </div>
          </div>

          <div class="col-3 col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="stat-number">BizFinx</div>
              <div class="stat-label">Filing Timeline</div>
            </div>
          </div>
        </div>
      </div>

      <div style="padding-top:1rem;" class="mobile-no-padding">
        <div class="hero-card">
          <p class="hc-label">Calculator Quick Reference</p>
          <p class="hc-title">Calculate</p>
          <div class="hc-row"><span>AGM deadline</span><strong>✓</strong></div>
          <div class="hc-row"><span>Annual Return filing deadline</span><strong>✓</strong></div>
          <div class="hc-row"><span>XBRL filing due date</span><strong>✓</strong></div>
          <div class="hc-row"><span>BizFinx filing timeline</span><strong>✓</strong></div>
          <div class="hc-divider"></div>
          <a href="./xbrl-filing-services-contact-singapore" class="hc-btn">Get Filing Deadline Support</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════ CALCULATOR ════ -->
<!-- ════ CALCULATOR ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <p class="badge">✦ Calculator</p>
    <h2 class="sec-title">ACRA Filing Deadline Calculator Singapore</h2>
    <p class="sec-lead" style="margin-bottom:2rem;">Calculate Annual Return and XBRL filing deadlines instantly.</p>

    <div class="calc-wrap">
      <div class="xbrl-calculator">

        <div class="calc-form-grid">
          <div class="form-group">
            <label for="fyeDate">Financial Year End (FYE)</label>
            <input type="date" id="fyeDate">
          </div>
          <div class="form-group">
            <label for="companyType">Company Type</label>
            <select id="companyType">
              <option value="listed">Listed Company</option>
              <option value="private">Non-Listed / Private Company</option>
              <option value="listed-foreign-branch">Listed Foreign Branch</option>
              <option value="private-foreign-branch">Private Foreign Branch</option>
            </select>
          </div>
        </div>

        <button class="calc-btn" onclick="calculateDeadline()">Calculate Deadline</button>

        <div id="result" class="calc-results"></div>
      </div>
    </div>
  </div>
</section>

<!-- ════ WHY FILING MATTERS ════ -->
<section class="sec">
  <div class="wrap">
    <div class="def-grid">
      <div>
        <p class="badge">✦ Why It Matters</p>
        <h2 class="sec-title">Why Filing Deadline Calculation Matters</h2>
        <p class="sec-lead" style="margin-bottom:1rem;">
          Singapore companies must comply with filing obligations regulated by ACRA. Missing statutory deadlines can result in:
        </p>
        <ul class="def-list">
          <li>Financial penalties</li>
          <li>Enforcement actions</li>
          <li>Late filing fees</li>
          <li>Increased compliance scrutiny</li>
          <li>Delays in regulatory processing</li>
        </ul>
      </div>

      <div class="def-box">
        <div class="db-label">ACRA Compliance</div>
        <div class="db-title">Deadline Calculator Benefits</div>
        <div class="db-note">
          <span style="font-size:1.1rem;">📌</span>
          <p>Using a deadline calculator helps companies stay <strong style="color:rgba(255,255,255,.8);">organized and avoid unnecessary filing risks</strong>.</p>
        </div>
        <div class="db-row"><span>Track Important Deadlines</span><span>✓</span></div>
        <div class="db-row"><span>Improve Compliance Planning</span><span>✓</span></div>
        <div class="db-row"><span>Avoid Late Filing Penalties</span><span>✓</span></div>
        <div class="db-row"><span>Prepare Filings Earlier</span><span>✓</span></div>
      </div>
    </div>
    <div class="highlight-box">
      <p>Using a deadline calculator helps companies stay organized and avoid <strong>unnecessary filing risks</strong>.</p>
    </div>
  </div>
</section>

<!-- ════ AGM DEADLINES ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <p class="badge">✦ AGM Deadlines</p>
    <h2 class="sec-title">Understanding AGM Deadlines in Singapore</h2>
    <p class="sec-lead" style="margin-bottom:2.5rem;">
      Companies in Singapore are generally required to hold their Annual General Meeting (AGM) within prescribed timelines after the financial year end.
    </p>

    <div class="bento bento-3" style="margin-bottom:1.5rem;">
      <div class="card dk">
        <div class="card-icon"><svg viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
            <polyline points="22 4 12 14.01 9 11.01" />
          </svg></div>
        <div class="card-tag">Purpose</div>
        <h3>Financial Statements Presentation</h3>
      </div>
      <div class="card lt">
        <div class="card-icon"><svg viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
            <circle cx="9" cy="7" r="4" />
          </svg></div>
        <div class="card-tag">Purpose</div>
        <h3>Shareholder Review</h3>
      </div>
      <div class="card lt">
        <div class="card-icon"><svg viewBox="0 0 24 24">
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <path d="M3 9h18" />
          </svg></div>
        <div class="card-tag">Purpose</div>
        <h3>Director Reporting</h3>
      </div>
      <div class="card red span-3">
        <div class="card-icon"><svg viewBox="0 0 24 24">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
            <polyline points="14 2 14 8 20 8" />
          </svg></div>
        <div class="card-tag">Purpose</div>
        <h3>Compliance Documentation</h3>
        <p>Companies should verify applicable timelines based on their company structure and regulatory obligations.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════ ANNUAL RETURN FILING ════ -->
<section class="sec">
  <div class="wrap">
    <p class="badge">✦ Annual Return</p>
    <h2 class="sec-title">Annual Return Filing Deadlines</h2>
    <p class="sec-lead" style="margin-bottom:2.5rem;">
      After conducting the AGM, companies are typically required to file Annual Returns with ACRA within the specified filing period.
    </p>

    <div class="key-changes-grid">
      <div class="card dk" style="padding:38px;border-radius:34px;">
        <div class="card-tag">Annual Return includes</div>
        <h3 style="font-size:2rem;line-height:1.15;margin-bottom:1.3rem;">What Annual Return Filing Includes</h3>
        <p style="color:rgba(255,255,255,.78);margin-bottom:1rem;">Annual Return filing includes important corporate information that must be submitted to ACRA within the stipulated period.</p>
        <div class="chip-grid">
          <div style="background:rgba(255,255,255,.06);padding:14px 18px;border-radius:14px;color:rgba(255,255,255,.9);">Company information updates</div>
          <div style="background:rgba(255,255,255,.06);padding:14px 18px;border-radius:14px;color:rgba(255,255,255,.9);">Shareholding details</div>
          <div style="background:rgba(255,255,255,.06);padding:14px 18px;border-radius:14px;color:rgba(255,255,255,.9);">Director information</div>
          <div style="background:rgba(255,255,255,.06);padding:14px 18px;border-radius:14px;color:rgba(255,255,255,.9);">Financial reporting submissions</div>
          <div style="background:rgba(255,255,255,.06);padding:14px 18px;border-radius:14px;color:rgba(255,255,255,.9);grid-column:span 2;">Compliance declarations</div>
        </div>
        <p style="color:rgba(255,255,255,.78);margin:0;">Timely filing helps maintain good corporate standing.</p>
      </div>

      <div class="card red" style="padding:38px;border-radius:34px;">
        <div class="card-tag">XBRL Filing</div>
        <h3 style="font-size:2rem;line-height:1.15;margin-bottom:1.3rem;">XBRL Filing Deadlines</h3>
        <p style="color:rgba(255,255,255,.88);margin-bottom:1rem;">Certain Singapore companies are required to submit financial statements in XBRL format.</p>
        <p style="color:#fff;font-weight:600;margin-bottom:1rem;">XBRL filing requirements may depend on:</p>
        <div class="chip-grid">
          <div style="background:rgba(255,255,255,.08);padding:14px 18px;border-radius:14px;color:#fff;">Company type</div>
          <div style="background:rgba(255,255,255,.08);padding:14px 18px;border-radius:14px;color:#fff;">Filing category</div>
          <div style="background:rgba(255,255,255,.08);padding:14px 18px;border-radius:14px;color:#fff;">Reporting obligations</div>
          <div style="background:rgba(255,255,255,.08);padding:14px 18px;border-radius:14px;color:#fff;">Regulatory requirements</div>
        </div>
        <p style="color:rgba(255,255,255,.88);margin:0;">Businesses should ensure their XBRL reports are prepared and validated before submission deadlines.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════ BIZFINX TIMELINE ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <p class="badge">✦ BizFinx Timeline</p>
    <h2 class="sec-title">BizFinx Filing Timeline Considerations</h2>
    <p class="sec-lead" style="margin-bottom:2.5rem;">
      Companies using BizFinx preparation tools should allocate sufficient time for all stages of the filing process.
    </p>

    <div class="prep-grid">
      <div class="prep-card">
        <div class="prep-step">01</div>
        <div class="card-icon" style="margin-bottom:.75rem;">
          <svg viewBox="0 0 24 24">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
            <polyline points="14 2 14 8 20 8" />
          </svg>
        </div>
        <h4>Financial Statement Preparation</h4>
        <p>Allocate sufficient time for accurate preparation of financial statements before beginning the XBRL tagging process.</p>
      </div>
      <div class="prep-card">
        <div class="prep-step">02</div>
        <div class="card-icon" style="margin-bottom:.75rem;">
          <svg viewBox="0 0 24 24">
            <path d="M7 7h10" />
            <path d="M7 12h10" />
            <path d="M7 17h10" />
          </svg>
        </div>
        <h4>XBRL Tagging</h4>
        <p>Complete the XBRL tagging process accurately, ensuring all financial items are correctly mapped to the relevant taxonomy elements.</p>
      </div>
      <div class="prep-card">
        <div class="prep-step">03</div>
        <div class="card-icon" style="margin-bottom:.75rem;">
          <svg viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
            <polyline points="22 4 12 14.01 9 11.01" />
          </svg>
        </div>
        <h4>Validation Review</h4>
        <p>Run thorough validation reviews to identify and resolve any errors or inconsistencies before final submission.</p>
      </div>
      <div class="prep-card">
        <div class="prep-step">04</div>
        <div class="card-icon" style="margin-bottom:.75rem;">
          <svg viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <path d="M12 6v6l4 2" />
          </svg>
        </div>
        <h4>Filing Corrections &amp; Final Submission</h4>
        <p>Address any filing corrections identified during review. Early preparation reduces filing stress and minimizes validation issues.</p>
      </div>
    </div>
    <div class="highlight-box">
      <p>Early preparation reduces filing stress and <strong>minimizes validation issues</strong>.</p>
    </div>
  </div>
</section>

<!-- ════ COMMON MISTAKES ════ -->
<section class="sec">
  <div class="wrap">
    <p class="badge">✦ Common Mistakes</p>
    <h2 class="sec-title">Common Filing Deadline Mistakes</h2>
    <p class="sec-lead" style="margin-bottom:2rem;">Many companies encounter filing delays due to:</p>

    <div class="ch-cards">
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">01</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Incorrect deadline calculation</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">02</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Delayed financial statement preparation</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">03</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">AGM scheduling issues</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">04</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">XBRL validation errors</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">05</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Incomplete disclosures</span>
      </div>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.75rem;transition:all .3s;" onmouseover="this.style.borderColor='var(--red)';this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='none'">
        <span style="width:34px;height:34px;background:rgba(220,38,38,.07);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--red);font-weight:700;font-size:.9rem;">06</span>
        <span style="font-size:.9rem;font-weight:500;color:var(--navy);">Last-minute filing attempts</span>
      </div>
    </div>
    <div class="highlight-box">
      <p>A structured compliance process helps <strong>reduce these risks</strong>.</p>
    </div>
  </div>
</section>

<!-- ════ BENEFITS ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <div class="benefits-layout">
      <div style="flex:1;min-width:0;">
        <p class="badge">✦ Benefits</p>
        <h2 class="sec-title">Benefits of Using an ACRA Filing Deadline Calculator</h2>
        <p style="color:var(--muted);font-size:.95rem;line-height:1.7;margin-bottom:1rem;">Using a filing calculator helps companies:</p>

        <div class="benefit-card-grid">
          <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.1rem 1.25rem;display:flex;align-items:center;gap:.85rem;transition:all .28s;">
            <div style="width:36px;height:36px;background:rgba(220,38,38,.06);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--red)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <path d="M12 6v6l4 2" />
              </svg>
            </div>
            <span style="font-size:.88rem;font-weight:600;color:var(--navy);">Track important deadlines</span>
          </div>
          <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.1rem 1.25rem;display:flex;align-items:center;gap:.85rem;transition:all .28s;">
            <div style="width:36px;height:36px;background:rgba(220,38,38,.06);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--red)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
              </svg>
            </div>
            <span style="font-size:.88rem;font-weight:600;color:var(--navy);">Improve compliance planning</span>
          </div>
          <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.1rem 1.25rem;display:flex;align-items:center;gap:.85rem;transition:all .28s;">
            <div style="width:36px;height:36px;background:rgba(220,38,38,.06);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--red)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="22 4 12 14.01 9 11.01" />
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
              </svg>
            </div>
            <span style="font-size:.88rem;font-weight:600;color:var(--navy);">Avoid late filing penalties</span>
          </div>
          <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.1rem 1.25rem;display:flex;align-items:center;gap:.85rem;transition:all .28s;">
            <div style="width:36px;height:36px;background:rgba(220,38,38,.06);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--red)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
              </svg>
            </div>
            <span style="font-size:.88rem;font-weight:600;color:var(--navy);">Prepare filings earlier</span>
          </div>
          <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.1rem 1.25rem;display:flex;align-items:center;gap:.85rem;transition:all .28s;">
            <div style="width:36px;height:36px;background:rgba(220,38,38,.06);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--red)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                <circle cx="9" cy="7" r="4" />
              </svg>
            </div>
            <span style="font-size:.88rem;font-weight:600;color:var(--navy);">Coordinate with auditors and accountants</span>
          </div>
          <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--r-md);padding:1.1rem 1.25rem;display:flex;align-items:center;gap:.85rem;transition:all .28s;">
            <div style="width:36px;height:36px;background:rgba(220,38,38,.06);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--red)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="18" height="18" rx="2" />
                <path d="M3 9h18" />
              </svg>
            </div>
            <span style="font-size:.88rem;font-weight:600;color:var(--navy);">Manage corporate compliance efficiently</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════ HOW XBRERA TAGGER CAN HELP ════ -->
<section class="sec">
  <div class="wrap">
    <p class="badge">✦ How XBRERA Tagger Singapore Can Help</p>
    <h2 class="sec-title">How XBRERA Tagger Singapore Can Help</h2>
    <p class="sec-lead" style="margin-bottom:2.5rem;">At XBRERA Tagger Singapore, we help businesses manage:</p>

    <div class="bento bento-3">
      <div class="card lt">
        <div class="card-icon"><svg viewBox="0 0 24 24">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
            <polyline points="14 2 14 8 20 8" />
          </svg></div>
        <h3>XBRL Filing Preparation</h3>
      </div>
      <div class="card dk">
        <div class="card-icon"><svg viewBox="0 0 24 24">
            <path d="M3 12h18" />
            <path d="M12 3v18" />
          </svg></div>
        <h3>BizFinx Filing Support</h3>
      </div>
      <div class="card lt">
        <div class="card-icon"><svg viewBox="0 0 24 24">
            <path d="M5 13l4 4L19 7" />
          </svg></div>
        <h3>Annual Return Filing Assistance</h3>
      </div>
      <div class="card dk">
        <div class="card-icon"><svg viewBox="0 0 24 24">
            <path d="M12 2v20" />
            <path d="M2 12h20" />
          </svg></div>
        <h3>Financial Statement Tagging</h3>
      </div>
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24">
            <path d="M4 12h16" />
            <path d="M12 4v16" />
          </svg></div>
        <h3>Validation Reviews</h3>
      </div>
      <div class="card dk">
        <div class="card-icon"><svg viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="9" />
          </svg></div>
        <h3>Filing Compliance Support</h3>
      </div>
    </div>

    <div class="highlight-box">
      <p>Our team supports companies, accounting firms, and compliance professionals <strong>across Singapore</strong>.</p>
    </div>

    <div class="trust-strip">
      <div class="trust-badge">
        <svg viewBox="0 0 24 24">
          <circle cx="12" cy="8" r="6" />
          <path d="M12 14v8" />
          <path d="M8 22h8" />
        </svg>
        <span>ACRA Compliant</span>
      </div>
      <div class="trust-badge">
        <svg viewBox="0 0 24 24">
          <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
          <path d="M7 11V7a5 5 0 0 1 10 0v4" />
        </svg>
        <span>100% Data Security</span>
      </div>
      <div class="trust-badge">
        <svg viewBox="0 0 24 24">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
        </svg>
        <span>100% Acceptance</span>
      </div>
      <div class="trust-badge">
        <svg viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10" />
          <path d="M12 6v6l4 2" />
        </svg>
        <span>Fast Turnaround</span>
      </div>
    </div>
  </div>
</section>

<!-- ════ RELATED SERVICES ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <p class="badge">✦ Related Services</p>
    <h2 class="sec-title">Related Services</h2>
    <p class="sec-lead" style="margin-bottom:2.5rem;">Professional support for all your ACRA filing needs.</p>

    <div class="bento bento-2">
      <div class="card dk" style="padding:2.5rem;">
        <div class="card-tag">Filing Services</div>
        <h3 style="font-size:1.4rem;margin-bottom:.75rem;">XBRL Filing Services Singapore</h3>
        <p>Professional XBRL preparation and filing assistance for Singapore companies.</p>
        <a href="./xbrl-filing-services-contact-singapore" style="display:inline-block;margin-top:1.2rem;background:rgba(255,255,255,.12);color:#fff;padding:10px 20px;border-radius:40px;font-size:.82rem;font-weight:700;transition:all .2s;">Learn More →</a>
      </div>
      <div class="card red" style="padding:2.5rem;">
        <div class="card-tag">Filing Support</div>
        <h3 style="font-size:1.4rem;margin-bottom:.75rem;">BizFinx Filing Support</h3>
        <p>Expert support for BizFinx financial statement preparation and submission.</p>
        <a href="./xbrl-filing-services-contact-singapore" style="display:inline-block;margin-top:1.2rem;background:rgba(255,255,255,.12);color:#fff;padding:10px 20px;border-radius:40px;font-size:.82rem;font-weight:700;transition:all .2s;">Learn More →</a>
      </div>
      <div class="card red" style="padding:2.5rem;">
        <div class="card-tag">Annual Return</div>
        <h3 style="font-size:1.4rem;margin-bottom:.75rem;">Annual Return Filing Assistance</h3>
        <p>Support for timely Annual Return submission and compliance management.</p>
        <a href="./xbrl-filing-services-contact-singapore" style="display:inline-block;margin-top:1.2rem;background:rgba(255,255,255,.12);color:#fff;padding:10px 20px;border-radius:40px;font-size:.82rem;font-weight:700;transition:all .2s;">Learn More →</a>
      </div>
      <div class="card dk" style="padding:2.5rem;">
        <div class="card-tag">Tagging</div>
        <h3 style="font-size:1.4rem;margin-bottom:.75rem;">Financial Statement Tagging</h3>
        <p>Accurate XBRL tagging and validation support.</p>
        <a href="./xbrl-filing-services-contact-singapore" style="display:inline-block;margin-top:1.2rem;background:rgba(255,255,255,.12);color:#fff;padding:10px 20px;border-radius:40px;font-size:.82rem;font-weight:700;transition:all .2s;">Learn More →</a>
      </div>
    </div>
  </div>
</section>

<!-- ════ FAQ ════ -->
<section class="sec">
  <div class="wrap">
    <div style="text-align:center;max-width:600px;margin:0 auto 2.5rem;">
      <p class="badge" style="justify-content:center;display:inline-flex;">FAQ</p>
      <h2 class="sec-title">FAQs</h2>
      <p class="sec-lead" style="margin:0 auto;">Answers to commonly asked questions about ACRA filing deadlines.</p>
    </div>

    <div class="faq-wrap">
      <div class="faq-box">
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">What is an ACRA Filing Deadline Calculator? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">An ACRA Filing Deadline Calculator helps companies estimate AGM, Annual Return, and XBRL filing deadlines based on their company information and financial year end.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">Why are filing deadlines important? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">Missing filing deadlines can result in penalties, compliance issues, and delayed regulatory processing.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">Does every company need XBRL filing? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">Not all companies are required to file in XBRL format. Filing obligations depend on company type and reporting requirements.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">Can the calculator guarantee compliance deadlines? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">The calculator provides estimated filing timelines. Companies should verify deadlines according to applicable ACRA regulations and filing requirements.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">Why should companies prepare filings early? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">Early preparation helps avoid validation issues, filing delays, and last-minute compliance complications.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════ FINAL CTA ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <div class="cta-box">
      <p class="badge" style="background:rgba(255,255,255,.12);color:#fff;display:inline-flex;">✦ Filing Deadline Support</p>
      <h2 class="cta-title">Need assistance with AGM, XBRL, or BizFinx filing deadlines?</h2>
      <p class="cta-desc">Contact XBRERA Tagger Singapore for professional filing support and compliance assistance.</p>
      <div class="btn-row">
        <a href="./xbrl-filing-services-contact-singapore" class="btn-wh">Contact Us</a>
        <a href="./xbrl-filing-services-contact-singapore" class="btn-outline">XBRL Filing Services Singapore</a>
      </div>
    </div>
  </div>
</section>

<script>
  function calculateDeadline() {
    const fyeDate = document.getElementById('fyeDate').value;
    const companyType = document.getElementById('companyType').value;
    const resultBox = document.getElementById('result');

    if (!fyeDate) {
      alert('Please select a Financial Year End date.');
      return;
    }

    const fye = new Date(fyeDate);

    let monthsToAdd = 7;
    let companyLabel = '';

    switch (companyType) {
      case 'listed':
        monthsToAdd = 5;
        companyLabel = 'Listed Company';
        break;
      case 'private':
        monthsToAdd = 7;
        companyLabel = 'Non-Listed / Private Company';
        break;
      case 'listed-foreign-branch':
        monthsToAdd = 6;
        companyLabel = 'Listed Foreign Branch';
        break;
      case 'private-foreign-branch':
        monthsToAdd = 8;
        companyLabel = 'Private Foreign Branch';
        break;
    }

    const deadline = new Date(fye);
    deadline.setMonth(deadline.getMonth() + monthsToAdd);

    if (deadline.getDate() !== fye.getDate()) {
      deadline.setDate(0);
    }

    const formattedFYE = fye.toLocaleDateString('en-SG', {
      day: '2-digit', month: 'long', year: 'numeric'
    });

    const formattedDeadline = deadline.toLocaleDateString('en-SG', {
      day: '2-digit', month: 'long', year: 'numeric'
    });

    resultBox.style.display = 'block';
    resultBox.innerHTML = `
      <h3 style="font-family:var(--ff-head);font-size:1.3rem;font-weight:700;color:var(--navy);margin-bottom:1.25rem;">Calculated Filing Deadlines</h3>
      <div class="result-box">
        <strong>Financial Year End</strong>
        <span>${formattedFYE}</span>
      </div>
      <div class="result-box">
        <strong>Entity Type</strong>
        <span>${companyLabel}</span>
      </div>
      <div class="result-box">
        <strong>ACRA Filing Timeline</strong>
        <span>${monthsToAdd} Months After FYE</span>
      </div>
      <div class="result-box" style="border-left-color:var(--red);">
        <strong>Final XBRL Filing Deadline</strong>
        <span>${formattedDeadline}</span>
      </div>
    `;
  }

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