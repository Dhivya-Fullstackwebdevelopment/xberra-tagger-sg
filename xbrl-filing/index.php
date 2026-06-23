<?php

$page_title = "Simplified XBRL Filing Singapore — Free for First-Time Filers | XberraTagger";

$page_meta = "First-time ACRA filers may qualify for free Simplified XBRL preparation. Need urgent filing? Get submission-ready XBRL prepared in as fast as 2 hours.";

$page_keywords = "Simplified XBRL filing Singapore, free XBRL filing, ACRA XBRL first-time filer, fast XBRL filing Singapore, XberraTagger";

$canonical_url = "https://xberratagger.com.sg/simplified-xbrl-filing-singapore/";

$og_title = "Simplified XBRL Filing Singapore — Free for First-Time Filers | XberraTagger";

$og_desc = "First-time ACRA filers may qualify for free Simplified XBRL preparation. Fast, compliant, affordable XBRL filing support for Singapore companies.";

$og_type = "website";

$og_url = "https://xberratagger.com.sg/simplified-xbrl-filing-singapore/";

$full_url = "https://xberratagger.com.sg/simplified-xbrl-filing-singapore/";
$full_default = "https://xberratagger.com.sg/simplified-xbrl-filing-singapore/";

$schema = '
{
  "@context":"https://schema.org",
  "@graph":[
    {
      "@type":"WebPage",
      "@id":"https://xberratagger.com.sg/simplified-xbrl-filing-singapore/",
      "url":"https://xberratagger.com.sg/simplified-xbrl-filing-singapore/",
      "name":"Simplified XBRL Filing Singapore",
      "description":"Free Simplified XBRL filing for first-time ACRA filers. Fast-track XBRL preparation from $30 for eligible Singapore companies.",
      "inLanguage":"en-SG"
    },
    {
      "@type":"Service",
      "serviceType":"Simplified XBRL Filing Services",
      "name":"Simplified XBRL Filing Singapore",
      "provider":{
        "@type":"Organization",
        "name":"Xberra Tagger",
        "url":"https://xberratagger.com.sg",
        "logo":"https://xberratagger.com.sg/wp-content/uploads/logo.png",
        "contactPoint":{
          "@type":"ContactPoint",
          "telephone":"+65 3158 1054",
          "contactType":"customer service",
          "areaServed":"SG",
          "availableLanguage":"English"
        }
      },
      "areaServed":"Singapore",
      "description":"Free Simplified XBRL preparation for eligible first-time ACRA filers. Fast-track filing from $30 with 2-hour turnaround.",
      "offers":{
        "@type":"Offer",
        "priceCurrency":"SGD",
        "price":"0",
        "availability":"https://schema.org/InStock"
      }
    },
    {
      "@type":"FAQPage",
      "mainEntity":[
        {
          "@type":"Question",
          "name":"What is Simplified XBRL?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Simplified XBRL is ACRA\'s streamlined financial reporting format for eligible smaller Singapore companies, replacing full XBRL filing requirements."
          }
        },
        {
          "@type":"Question",
          "name":"Who qualifies for free filing?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Eligible first-time ACRA filers who meet the qualifying criteria receive Simplified XBRL preparation at no cost."
          }
        },
        {
          "@type":"Question",
          "name":"Is the $30 fee fixed?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes — $30 fast-track filing is a fixed, transparent price with no hidden charges."
          }
        },
        {
          "@type":"Question",
          "name":"How fast is the turnaround?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Urgent XBRL preparation can be completed in as fast as 2 hours for fast-track orders."
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
          "name":"Simplified XBRL Filing",
          "item":"https://xberratagger.com.sg/simplified-xbrl-filing-singapore"
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
        "telephone":"+65 3158 1054",
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
    --red:      #dc2626;
    --red-dk:   #b91c1c;
    --navy:     #1F2853;
    --navy-dk:  #0f1a3a;
    --bg:       #f8fafc;
    --white:    #fff;
    --border:   #e2e8f0;
    --ink:      #1c1f2e;
    --muted:    #4b5563;
    --light:    #f1f5f9;
    --green:    #10b981;

    --shadow-sm: 0 2px 8px rgba(0,0,0,.06);
    --shadow-md: 0 8px 24px rgba(0,0,0,.08);
    --shadow-lg: 0 20px 48px rgba(0,0,0,.12);

    --r-sm: 12px;
    --r-md: 20px;
    --r-lg: 28px;
    --r-xl: 36px;

    /* Fonts come from header.php — declared here as fallback */
    --ff-head: 'Syne', sans-serif;
    --ff-body: 'DM Sans', sans-serif;
  }

  /* ---- reset (scoped to page content only) ---- */
  .page-body *, .page-body *::before, .page-body *::after {
    box-sizing: border-box;
  }

  /* ---- shared utilities ---- */
  .wrap {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 28px;
  }
  @media (max-width: 640px) { .wrap { padding: 0 18px; } }

  /* ---- badge / eyebrow ---- */
  .badge, .eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-family: var(--ff-head);
    font-size: .72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .08em;
    color: var(--red);
    background: rgba(220,38,38,.07);
    padding: 5px 14px;
    border-radius: 40px;
    margin-bottom: 14px;
  }

  /* ---- section titles ---- */
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

  /* ---- buttons ---- */
  .btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-family: var(--ff-body);
    font-weight: 700;
    font-size: .95rem;
    padding: 14px 32px;
    border-radius: 40px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    transition: transform .2s, box-shadow .2s, background .2s;
    white-space: nowrap;
  }
  .btn:hover { transform: translateY(-2px); }
  .btn-primary  { background: var(--red); color: #fff; }
  .btn-primary:hover  { background: var(--red-dk); box-shadow: 0 12px 28px rgba(220,38,38,.25); }
  .btn-ghost    { background: transparent; color: #fff; border: 2px solid rgba(255,255,255,.3); }
  .btn-ghost:hover    { background: rgba(255,255,255,.1); }
  .btn-dark     { background: var(--navy); color: #fff; }
  .btn-dark:hover     { background: var(--navy-dk); }
  .btn-outline-ink { background: transparent; color: var(--ink); border: 2px solid var(--ink); }
  .btn-outline-ink:hover { background: var(--ink); color: #fff; }
  .btn-sm { padding: 9px 22px; font-size: .85rem; }
  @media (max-width: 480px) {
    .btn-primary, .btn-dark, .btn-ghost, .btn-outline-ink {
      width: 100%; text-align: center; padding: 14px 20px;
    }
  }


  .hero {
    background: var(--navy);
    padding: 9rem 0 4rem;
    position: relative;
    overflow: hidden;
  }
  .hero::before {
    content: "";
    position: absolute; inset: 0;
    background:
      radial-gradient(ellipse 80% 60% at 70% -20%, rgba(220,38,38,.18), transparent 60%),
      radial-gradient(ellipse 50% 80% at -10% 100%, rgba(255,255,255,.04), transparent);
  }
  .hero-inner {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 3rem;
    align-items: start;
    position: relative;
    z-index: 1;
  }
  @media (max-width: 900px) { .hero-inner { grid-template-columns: 1fr; } }
  @media (max-width: 640px) { .hero { padding: 6rem 0 3rem; } }

  .badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,.07);
    border: 1px solid rgba(255,255,255,.14);
    border-radius: 100px;
    padding: 6px 16px;
    font-family: var(--ff-head);
    font-size: .72rem;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: rgba(255,255,255,.75);
    margin-bottom: 22px;
  }
  .badge-pill .dot {
    width: 6px; height: 6px;
    border-radius: 50%;
    background: var(--red);
  }

  .hero-title {
    font-family: var(--ff-head);
    font-size: clamp(1.5rem, 5vw, 2.8rem);
    font-weight: 700;
    color: #fff;
    line-height: 1.1;
    margin-bottom: 20px;
  }
  .hero-title .hl { color: var(--red); font-style: normal; }

  .hero-desc {
    color: rgba(255,255,255,.65);
    font-size: 1rem;
    line-height: 1.75;
    margin-bottom: 1rem;
    max-width: 580px;
  }
  .hero-ctas { display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 30px; }

  .trust-row { display: flex; gap: 22px; flex-wrap: wrap; }
  .trust-row span {
    display: flex; align-items: center; gap: 7px;
    font-size: 13px; color: rgba(255,255,255,.55); font-weight: 500;
  }
  .trust-row svg { width: 15px; height: 15px; color: var(--green); flex-shrink: 0; }

  /* plan card */
  .hero-card {
    background: rgba(255,255,255,.07);
    border: 1px solid rgba(255,255,255,.14);
    backdrop-filter: blur(16px);
    border-radius: var(--r-xl);
    overflow: hidden;
    box-shadow: var(--shadow-lg);
    animation: floatY 7s ease-in-out infinite;
    color: #fff;
  }
  @media (max-width: 900px) { .hero-card { animation: none; } }
  @keyframes floatY {
    0%,100% { transform: translateY(0); }
    50%      { transform: translateY(-14px); }
  }

  .hc-top {
    display: flex; align-items: center; gap: 8px;
    padding: 13px 18px;
    background: rgba(0,0,0,.25);
    border-bottom: 1px solid rgba(255,255,255,.08);
  }
  .hc-top .tlc { width: 10px; height: 10px; border-radius: 50%; }
  .hc-top .tlc.r { background: #E5564A; }
  .hc-top .tlc.y { background: #E8B23D; }
  .hc-top .tlc.g { background: #3FAE6E; }
  .hc-top .file-name {
    margin-left: 8px;
    font-family: var(--ff-body);
    font-size: 12px;
    color: rgba(255,255,255,.35);
  }

  .hc-body {
    padding: 24px 22px 8px;
    font-family: var(--ff-body);
    font-size: 13.5px;
  }
  .hc-body .open-tag,
  .hc-body .close-tag { color: var(--red); display: block; }
  .hc-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 11px 0 11px 18px;
    border-bottom: 1px solid rgba(255,255,255,.07);
  }
  .hc-row:last-of-type { border-bottom: none; }
  .hc-row .k { color: rgba(255,255,255,.45); }
  .hc-row .v { color: #fff; font-weight: 600; }
  .hc-row .v.accent { color: var(--red); }

  .hc-label {
    font-size: .68rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: .14em;
    color: rgba(255,255,255,.4);
    margin-bottom: 8px;
  }
  .hc-title {
    font-family: var(--ff-head);
    font-size: 1.3rem; font-weight: 700;
    margin-bottom: 20px;
  }
  .hc-divider { height: 1px; background: rgba(255,255,255,.1); margin: 18px 0; }
  .hc-cta {
    padding: 18px 22px 22px;
  }
  .hc-cta .btn { width: 100%; justify-content: center; }
  .hc-cta .note {
    text-align: center;
    font-size: 11.5px;
    color: rgba(255,255,255,.35);
    margin-top: 10px;
  }

  /* hero stat cards */
  .hero-stats { display: flex; gap: 12px; flex-wrap: wrap; margin-top: 2rem; }
  .stat-card {
    background: rgba(255,255,255,.1);
    border: 1px solid rgba(255,255,255,.2);
    border-radius: 20px;
    padding: 18px 20px;
    text-align: center;
    flex: 1; min-width: 110px;
    backdrop-filter: blur(4px);
    transition: transform .2s, background .2s;
  }
  .stat-card:hover { background: rgba(255,255,255,.15); transform: translateY(-4px); }
  .stat-number { font-family: var(--ff-head); font-size: 1rem; font-weight: 700; color: #fff; line-height: 1.2; }
  .stat-label {
    color: rgba(255,255,255,.65);
    font-size: .72rem; text-transform: uppercase;
    letter-spacing: .04em; margin-top: 5px; font-weight: 500;
  }

  
  .sec { padding: 1.5rem 0; }
  .sec-alt { background: var(--bg); }
  @media (max-width: 640px) { .sec { padding: 2.5rem 0; } }

  /* ---- card system ---- */
  .card {
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: var(--r-lg);
    padding: 1.75rem;
    transition: all .35s cubic-bezier(.16,1,.3,1);
  }
  .card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); border-color: rgba(220,38,38,.15); }
  .card.dk  { background: var(--navy); border-color: var(--navy); }
  .card.red { background: var(--red);  border-color: var(--red); }
  .card.lt  { background: var(--light); border-color: var(--border); }

  .card h3 { font-family: var(--ff-head); font-size: 1.05rem; font-weight: 700; color: var(--navy); margin-bottom: .5rem; }
  .card.dk h3, .card.red h3 { color: #fff; }
  .card p   { font-size: .88rem; color: var(--muted); line-height: 1.65; }
  .card.dk p  { color: rgba(255,255,255,.65); }
  .card.red p { color: rgba(255,255,255,.85); }

  .card-tag {
    font-size: .7rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: .06em;
    color: var(--red); margin-bottom: 10px;
  }
  .card.dk .card-tag  { color: rgba(255,255,255,.4); }
  .card.red .card-tag { color: rgba(255,255,255,.6); }

  .card-icon {
    width: 42px; height: 42px; border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 1rem;
    background: rgba(220,38,38,.06);
  }
  .card-icon svg { width: 22px; height: 22px; stroke: var(--red); fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
  .card.dk  .card-icon { background: rgba(255,255,255,.1); }
  .card.dk  .card-icon svg { stroke: #fff; }
  .card.red .card-icon { background: rgba(255,255,255,.15); }
  .card.red .card-icon svg { stroke: #fff; }

  /* ---- stats bar ---- */
  .stats-bar { background: var(--bg); border-bottom: 1px solid var(--border); }
  .stats-grid {
    display: grid;
    grid-template-columns: repeat(4,1fr);
    padding: 30px 0;
  }
  .stats-grid .stat-item {
    text-align: center; padding: 0 14px;
    border-right: 1px solid var(--border);
  }
  .stats-grid .stat-item:last-child { border-right: none; }
  .stat-item .num { font-family: var(--ff-head); font-size: 30px; font-weight: 700; color: var(--navy); }
  .stat-item .lbl { font-family: var(--ff-body); font-size: 11px; color: var(--muted); letter-spacing: .04em; margin-top: 4px; text-transform: uppercase; }
  @media (max-width: 760px) {
    .stats-grid { grid-template-columns: repeat(2,1fr); gap: 18px 0; }
    .stats-grid .stat-item:nth-child(2) { border-right: none; }
  }

  /* ---- section head ---- */
  .section-head { max-width: 640px; margin: 0 auto 3rem; text-align: center; }
  .section-head h2 { font-family: var(--ff-head); font-size: clamp(1.4rem, 3vw, 2rem); color: var(--navy); margin-top: 10px; }
  .section-head p { color: var(--muted); font-size: .97rem; margin-top: 12px; line-height: 1.7; }

  /* ---- features grid ---- */
  .feat-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 1rem; }
  @media (max-width: 860px) { .feat-grid { grid-template-columns: 1fr 1fr; } }
  @media (max-width: 560px) { .feat-grid { grid-template-columns: 1fr; } }

  /* ---- challenge split ---- */
  .challenge-wrap {
    display: grid;
    grid-template-columns: 1fr 56px 1fr;
    align-items: center;
  }
  @media (max-width: 820px) {
    .challenge-wrap { grid-template-columns: 1fr; }
    .challenge-wrap .arrow { display: none; }
  }
  .challenge-col {
    background: var(--white); border: 1px solid var(--border);
    border-radius: var(--r-lg); padding: 28px 26px;
  }
  .challenge-col h3 {
    font-family: var(--ff-head); font-size: .78rem; font-weight: 700;
    letter-spacing: .08em; text-transform: uppercase;
    margin-bottom: 18px; display: flex; align-items: center; gap: 8px;
  }
  .challenge-col.bad h3  { color: var(--red); }
  .challenge-col.good h3 { color: var(--green); }
  .challenge-col li {
    display: flex; gap: 10px; align-items: flex-start;
    font-size: .9rem; padding: 9px 0;
    border-bottom: 1px solid var(--border); color: var(--muted);
  }
  .challenge-col li:last-child { border-bottom: none; }
  .mark {
    flex-shrink: 0; width: 18px; height: 18px;
    border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-top: 1px;
  }
  .mark.bad  { background: rgba(220,38,38,.08); color: var(--red); }
  .mark.good { background: rgba(16,185,129,.1);  color: var(--green); }
  .mark svg  { width: 10px; height: 10px; }
  .challenge-wrap .arrow { display: flex; justify-content: center; color: var(--border); }
  .challenge-wrap .arrow svg { width: 30px; height: 30px; }

  /* ---- steps / process ---- */
  .prep-grid { display: grid; grid-template-columns: repeat(4,1fr); position: relative; }
  @media (max-width: 860px) { .prep-grid { grid-template-columns: 1fr 1fr; gap: 24px; } }
  @media (max-width: 560px) { .prep-grid { grid-template-columns: 1fr; } }

  .prep-step-card { position: relative; padding: 0 18px; }
  .prep-step-card:first-child { padding-left: 0; }
  .prep-step-card:last-child  { padding-right: 0; }
  .prep-step-card::after {
    content: ''; position: absolute; top: 18px; right: -1px;
    width: calc(100% - 18px);
    border-top: 1px dashed var(--border);
  }
  .prep-step-card:last-child::after { display: none; }
  @media (max-width: 860px) { .prep-step-card::after { display: none; } }

  .step-idx {
    font-family: var(--ff-head); font-weight: 700; font-size: .85rem;
    color: var(--red); margin-bottom: 14px; display: inline-block;
  }
  .prep-step-card h4 { font-family: var(--ff-head); font-size: 1rem; color: var(--navy); margin-bottom: 6px; font-weight: 700; }
  .prep-step-card p  { font-size: .85rem; color: var(--muted); margin: 0; }

  /* ---- pricing ---- */
  .price-grid {
    display: grid; grid-template-columns: 1fr auto 1fr;
    gap: 28px; align-items: center;
  }
  @media (max-width: 760px) {
    .price-grid { grid-template-columns: 1fr; }
    .price-grid .or-divider { display: none; }
  }
  .price-card {
    background: var(--navy); color: #fff;
    border-radius: var(--r-xl); padding: 34px 30px;
    position: relative; overflow: hidden;
  }
  .price-card.alt {
    background: var(--white); color: var(--ink);
    border: 1px solid var(--border);
  }
  .price-ribbon {
    position: absolute; top: 22px; right: -44px;
    transform: rotate(35deg);
    background: var(--red); color: #fff;
    font-family: var(--ff-head); font-size: 10px; font-weight: 700;
    letter-spacing: .04em; padding: 5px 50px;
    white-space: nowrap; text-align: center;
  }
  .price-card .pre  { font-family: var(--ff-body); font-size: 12px; color: var(--green); margin-bottom: 10px; }
  .price-card.alt .pre { color: var(--red); }
  .price-card .amount { font-family: var(--ff-head); font-size: 42px; font-weight: 700; margin-bottom: 8px; }
  .price-card .desc  { font-size: .88rem; color: rgba(255,255,255,.6); margin-bottom: 22px; }
  .price-card.alt .desc { color: var(--muted); }
  .or-divider {
    width: 46px; height: 46px; border-radius: 50%;
    border: 1px solid var(--border);
    display: flex; align-items: center; justify-content: center;
    font-family: var(--ff-body); font-size: 12px;
    color: var(--muted); background: var(--bg);
  }

  /* ---- who-grid ---- */
  .who-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start; }
  @media (max-width: 820px) { .who-grid { grid-template-columns: 1fr; gap: 28px; } }

  .who-grid h2 { font-family: var(--ff-head); font-size: clamp(1.4rem, 2.5vw, 1.75rem); color: var(--navy); margin: 14px 0 20px; }
  .who-list li {
    display: flex; align-items: center; gap: 12px;
    font-size: .97rem; padding: 13px 0;
    border-bottom: 1px solid var(--border); color: var(--ink);
  }
  .who-list li:last-child { border-bottom: none; }
  .who-list .mark.good { width: 22px; height: 22px; }
  .who-list .mark.good svg { width: 12px; height: 12px; }

  .callout {
    background: var(--bg); border: 1px solid var(--border);
    border-radius: var(--r-lg); padding: 28px;
  }
  .callout-icon {
    width: 42px; height: 42px; border-radius: 50%;
    background: var(--navy);
    display: flex; align-items: center; justify-content: center; margin-bottom: 16px;
  }
  .callout-icon svg { width: 20px; height: 20px; color: #fff; }
  .callout h3 { font-family: var(--ff-head); font-size: 1.05rem; color: var(--navy); margin-bottom: 8px; }
  .callout p  { font-size: .88rem; color: var(--muted); margin-bottom: 18px; line-height: 1.65; }

  /* ---- why grid ---- */
  .why-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 24px; }
  @media (max-width: 860px) { .why-grid { grid-template-columns: 1fr 1fr; } }
  @media (max-width: 560px) { .why-grid { grid-template-columns: 1fr; } }

  .why-icon {
    width: 44px; height: 44px; border-radius: 12px;
    background: rgba(220,38,38,.06);
    display: flex; align-items: center; justify-content: center; margin-bottom: 14px;
  }
  .why-icon svg { width: 20px; height: 20px; stroke: var(--red); fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
  .why-item h3 { font-family: var(--ff-head); font-size: 1rem; color: var(--navy); margin-bottom: 6px; font-weight: 700; }
  .why-item p  { font-size: .875rem; color: var(--muted); margin: 0; line-height: 1.65; }

  /* ---- warning banner ---- */
  .warn-banner {
    background: #fff5f5; border: 1px solid rgba(220,38,38,.2);
    border-radius: var(--r-lg); padding: 30px 32px;
    display: flex; flex-wrap: wrap; gap: 24px;
    align-items: center; justify-content: space-between;
  }
  .warn-left { display: flex; gap: 16px; align-items: flex-start; max-width: 560px; }
  .warn-icon {
    width: 42px; height: 42px; border-radius: 12px;
    background: var(--red);
    display: flex; align-items: center; justify-content: center; flex-shrink: 0;
  }
  .warn-icon svg { width: 20px; height: 20px; stroke: #fff; fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
  .warn-left h3 { font-family: var(--ff-head); font-size: 1.05rem; color: var(--red-dk); margin-bottom: 6px; }
  .warn-left p  { font-size: .88rem; color: var(--muted); margin: 0; line-height: 1.65; }
  .warn-tags { display: flex; gap: 8px; flex-wrap: wrap; }
  .warn-tags span {
    font-family: var(--ff-body); font-size: 11px;
    background: #fff; border: 1px solid rgba(220,38,38,.2);
    color: var(--red-dk); padding: 6px 12px;
    border-radius: 100px; font-weight: 600;
  }
  .warn-right { flex-shrink: 0; }

  /* ---- testimonials ---- */
  .testi-row {
    display: flex; gap: 18px;
    overflow-x: auto; scroll-snap-type: x mandatory;
    padding-bottom: 8px; scrollbar-width: none;
  }
  .testi-row::-webkit-scrollbar { display: none; }
  .testi-card {
    scroll-snap-align: start; flex: 0 0 280px;
    background: var(--white); border: 1px solid var(--border);
    border-radius: var(--r-lg); padding: 24px 22px;
    transition: all .35s cubic-bezier(.16,1,.3,1);
  }
  .testi-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
  .testi-stars { color: #f59e0b; font-size: 13px; margin-bottom: 12px; letter-spacing: 2px; }
  .testi-card p { font-size: .88rem; color: var(--ink); margin: 0 0 18px; line-height: 1.65; }
  .testi-who { display: flex; align-items: center; gap: 10px; }
  .testi-avatar { width: 32px; height: 32px; border-radius: 50%; background: var(--navy); flex-shrink: 0; }
  .testi-name { font-family: var(--ff-head); font-size: 13px; font-weight: 700; color: var(--navy); }
  .testi-role { font-size: 11.5px; color: var(--muted); }
  .testi-dots { display: flex; justify-content: center; gap: 7px; margin-top: 22px; }
  .testi-dots span { width: 7px; height: 7px; border-radius: 50%; background: var(--border); }
  .testi-dots span.active { background: var(--red); }

  /* ---- FAQ ---- */
  .faq-wrap { max-width: 780px; margin: 0 auto; }
  .faq-box { border: 1px solid var(--border); border-radius: var(--r-lg); overflow: hidden; }
  .faq-item { border-bottom: 1px solid var(--border); }
  .faq-item:last-child { border-bottom: none; }
  .faq-q {
    width: 100%; background: var(--white); border: none;
    padding: 20px 24px; text-align: left;
    font-family: var(--ff-head); font-size: .97rem; font-weight: 600;
    color: var(--navy); cursor: pointer;
    display: flex; justify-content: space-between; align-items: center; gap: 12px;
    transition: .2s;
  }
  .faq-q:hover { background: var(--bg); }
  .faq-arrow { transition: transform .3s; font-size: .72rem; color: var(--red); flex-shrink: 0; }
  .faq-a { display: none; padding: 0 24px 20px; font-size: .92rem; color: var(--muted); line-height: 1.75; }
  .faq-item.open .faq-a { display: block; }
  .faq-item.open .faq-arrow { transform: rotate(180deg); }
  .faq-item.open .faq-q { background: var(--bg); }
  @media (max-width: 640px) {
    .faq-q { font-size: .9rem; padding: 16px 18px; }
    .faq-a { padding: 0 18px 16px; }
  }

  /* ---- CTA box ---- */
  .cta-box {
    background: var(--navy); border-radius: var(--r-xl);
    padding: 4rem 3rem; text-align: center;
    position: relative; overflow: hidden;
  }
  @media (max-width: 640px) { .cta-box { padding: 2.5rem 1.5rem; } }
  .cta-box::before {
    content: ""; position: absolute; inset: 0;
    background: radial-gradient(ellipse 60% 80% at 50% -20%, rgba(220,38,38,.2), transparent 60%);
  }
  .cta-box > * { position: relative; z-index: 1; }
  .cta-title {
    font-family: var(--ff-head);
    font-size: clamp(1.8rem, 4vw, 2.6rem);
    font-weight: 700; color: #fff;
    line-height: 1.15; margin-bottom: 1rem;
  }
  .cta-desc {
    color: rgba(255,255,255,.7); font-size: 1rem;
    line-height: 1.7; margin-bottom: 2rem;
    max-width: 560px; margin-left: auto; margin-right: auto;
  }
  .btn-row { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; }
  .btn-wh {
    display: inline-block; background: #fff; color: var(--red);
    padding: 14px 32px; border-radius: 40px;
    font-family: var(--ff-body); font-weight: 700; font-size: .95rem;
    transition: all .25s;
  }
  .btn-wh:hover { transform: translateY(-2px); box-shadow: 0 12px 28px rgba(0,0,0,.15); }
  .btn-outline-wh {
    display: inline-block; border: 2px solid rgba(255,255,255,.25);
    color: #fff; padding: 14px 32px; border-radius: 40px;
    font-family: var(--ff-body); font-weight: 700; font-size: .95rem;
    background: transparent; transition: all .25s;
  }
  .btn-outline-wh:hover { background: rgba(255,255,255,.1); transform: translateY(-2px); }

  /* ---- trust strip ---- */
  .trust-strip {
    display: flex; gap: 1rem; flex-wrap: wrap;
    justify-content: center;
    padding: 1.5rem 0;
    border-top: 1px solid var(--border);
    border-bottom: 1px solid var(--border);
    margin-top: 2.5rem;
  }
  .trust-badge {
    display: flex; align-items: center; gap: .6rem;
    padding: .7rem 1.2rem;
    border: 1.5px solid var(--border); border-radius: 100px;
    background: var(--white); transition: all .2s;
  }
  .trust-badge:hover { border-color: var(--red); transform: translateY(-2px); box-shadow: 0 6px 14px rgba(220,38,38,.1); }
  .trust-badge svg { width: 18px; height: 18px; stroke: var(--red); fill: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }
  .trust-badge span { font-family: var(--ff-body); font-weight: 600; color: var(--navy); font-size: .82rem; }

  /* ---- chip grid ---- */
  .chip-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 1.2rem; }
  @media (max-width: 420px) { .chip-grid { grid-template-columns: 1fr; } }

  /* ---- key changes / 2-col cards ---- */
  .key-changes-grid { display: grid; grid-template-columns: repeat(2,1fr); gap: 28px; margin-top: 2.5rem; }
  @media (max-width: 700px) { .key-changes-grid { grid-template-columns: 1fr; gap: 18px; } }

  /* ---- highlight box ---- */
  .highlight-box {
    background: var(--white); border-left: 4px solid var(--red);
    border-radius: 0 var(--r-sm) var(--r-sm) 0;
    padding: 1.25rem 1.5rem; margin-top: 1.5rem;
  }
  .highlight-box p { color: var(--navy); font-size: .95rem; font-weight: 500; line-height: 1.65; }
  .highlight-box strong { color: var(--red); }

  /* ---- accessibility ---- */
  :focus-visible { outline: 2px solid var(--red); outline-offset: 2px; }
  @media (prefers-reduced-motion: reduce) {
    html { scroll-behavior: auto; }
    .hero-card { animation: none; }
    .btn, .card, .testi-card { transition: none; }
  }
</style>

<div class="py-lg-4 py-3"></div>

<!-- ════ HERO ════ -->
<section class="hero">
  <div class="wrap">
    <div class="hero-inner">
      <div>
        <ul class="bc" style="list-style:none;padding-left:0;display:flex;flex-wrap:wrap;gap:4px;margin-bottom:22px;">
          <li style="display:inline-flex;align-items:center;"><a href="./index" style="color:rgba(255,255,255,.55);font-size:.85rem;">Home</a></li>
          <li style="display:inline-flex;align-items:center;color:rgba(255,255,255,.3);margin:0 6px;">›</li>
          <li style="display:inline-flex;align-items:center;"><span style="color:#fff;font-size:.85rem;">Simplified XBRL Filing Singapore</span></li>
        </ul>

        <span class="badge-pill"><span class="dot"></span>BUILT FOR SINGAPORE COMPANIES</span>

        <h1 class="hero-title">
          Simplified XBRL Filing — Free for First-Time Filers, From <em class="hl">$30</em> for Eligible Companies
        </h1>
        <p class="hero-desc">
          First-time ACRA filers may qualify for free Simplified XBRL preparation. Need urgent filing? Get submission-ready XBRL prepared in as fast as 2 hours.
        </p>
        <p class="hero-desc">
          Our specialists support Singapore companies, accounting firms and corporate service providers with fast, accurate and affordable XBRL filing assistance.
        </p>

        <div class="hero-ctas">
          <a href="#cta" class="btn btn-primary">Check Free Eligibility</a>
          <a href="#" class="btn btn-ghost">
            <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16"><path d="M17.5 14.4c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.1-.7.1-.2.3-.7 1-1 1.2-.2.2-.4.2-.6.1-1.6-.8-2.7-1.7-3.5-3.1-.2-.3-.1-.5.1-.7l.5-.6c.2-.2.2-.4.1-.7-.1-.3-.6-1.5-.8-2-.2-.4-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.7.7-1 1.5-1 2.5.1 1.6 1.1 3.2 2.5 4.5 1.7 1.6 3.1 2.3 5 2.8.5.1 1 .1 1.4-.1.5-.2 1.4-.9 1.6-1.5.2-.5.2-1 .1-1.1-.1-.1-.2-.1-.3-.2z"/><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5.1-1.3A10 10 0 1 0 12 2z" fill="none" stroke="currentColor" stroke-width="1.4"/></svg>
            WhatsApp Support
          </a>
        </div>

        <div class="trust-row">
          <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg>ACRA-Compliant</span>
          <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg>2-Hour Turnaround</span>
          <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg>Singapore Specialists</span>
          <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg>Secure &amp; Confidential</span>
        </div>

        <div class="hero-stats">
          <div class="stat-card"><div class="stat-number">FREE</div><div class="stat-label">First-Time Filing</div></div>
          <div class="stat-card"><div class="stat-number">$30</div><div class="stat-label">Fast-Track Filing</div></div>
          <div class="stat-card"><div class="stat-number">2 Hrs</div><div class="stat-label">Turnaround</div></div>
          <div class="stat-card"><div class="stat-number">500+</div><div class="stat-label">Companies Served</div></div>
        </div>
      </div>

      <div style="padding-top:1rem;">
        <div class="hero-card">
          <div class="hc-top">
            <span class="tlc r"></span><span class="tlc y"></span><span class="tlc g"></span>
            <span class="file-name">xbrl-plan.json</span>
          </div>
          <div class="hc-body">
            <span class="open-tag">&lt;filing&gt;</span>
            <div class="hc-row"><span class="k">first_time:</span><span class="v accent">"FREE"</span></div>
            <div class="hc-row"><span class="k">fast_track:</span><span class="v">"$30"</span></div>
            <div class="hc-row"><span class="k">turnaround:</span><span class="v">"2h"</span></div>
            <div class="hc-row"><span class="k">compliance:</span><span class="v">"guaranteed"</span></div>
            <div class="hc-row"><span class="k">support:</span><span class="v">"dedicated"</span></div>
            <span class="close-tag">&lt;/filing&gt;</span>
          </div>
          <div class="hc-cta">
            <a href="#cta" class="btn btn-primary">Get Started</a>
            <p class="note" style="text-align:center;font-size:11.5px;color:rgba(255,255,255,.35);margin-top:10px;">No obligation. Response within minutes.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════ STATS BAR ════ -->
<div class="stats-bar">
  <div class="wrap stats-grid">
    <div class="stat-item"><div class="num">500+</div><div class="lbl">Companies Served</div></div>
    <div class="stat-item"><div class="num">2 Hrs</div><div class="lbl">Fast Turnaround</div></div>
    <div class="stat-item"><div class="num">100%</div><div class="lbl">ACRA-Compliant</div></div>
    <div class="stat-item"><div class="num">4.9★</div><div class="lbl">Client Satisfaction</div></div>
  </div>
</div>

<!-- ════ WHAT YOU GET ════ -->
<section class="sec">
  <div class="wrap">
    <div class="section-head">
      <p class="badge">✦ What You Get</p>
      <h2>Everything You Need for Simplified XBRL Filing</h2>
      <p>From free first-time filing assistance to urgent same-day XBRL preparation, Xberra Tagger helps Singapore companies stay compliant without complexity.</p>
    </div>
    <div class="feat-grid">
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M20 12v9H4v-9"/><path d="M2 7h20v5H2zM12 22V7M12 7C9 7 7 5 7 3.5A2.5 2.5 0 0 1 12 3a2.5 2.5 0 0 1 5 .5C17 5 15 7 12 7z"/></svg></div>
        <h3>Free First-Time Filing</h3>
        <p>Eligible companies receive Simplified XBRL preparation at zero cost.</p>
      </div>
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z"/></svg></div>
        <h3>$30 Fast-Track Filing</h3>
        <p>Urgent filing support with 2-hour turnaround.</p>
      </div>
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6z"/></svg></div>
        <h3>ACRA-Compliant Preparation</h3>
        <p>Prepared according to Singapore filing requirements.</p>
      </div>
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg></div>
        <h3>Submission-Ready XBRL</h3>
        <p>Receive ready-to-submit files without software hassles.</p>
      </div>
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M17.5 14.4c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.1-.7.1-.2.3-.7 1-1 1.2-.2.2-.4.2-.6.1-1.6-.8-2.7-1.7-3.5-3.1-.2-.3-.1-.5.1-.7l.5-.6c.2-.2.2-.4.1-.7-.1-.3-.6-1.5-.8-2-.2-.4-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.7.7-1 1.5-1 2.5.1 1.6 1.1 3.2 2.5 4.5 1.7 1.6 3.1 2.3 5 2.8.5.1 1 .1 1.4-.1.5-.2 1.4-.9 1.6-1.5.2-.5.2-1 .1-1.1-.1-.1-.2-.1-.3-.2z"/><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5.1-1.3A10 10 0 1 0 12 2z" fill="none" stroke="currentColor" stroke-width="1.4"/></svg></div>
        <h3>WhatsApp Support</h3>
        <p>Direct assistance throughout the filing process.</p>
      </div>
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M21 12a9 9 0 0 1-15.5 6.3M3 12a9 9 0 0 1 15.5-6.3M3 18v-5h5M21 6v5h-5"/></svg></div>
        <h3>Same-Day Amendments</h3>
        <p>Quick corrections and revisions if required.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════ BEFORE VS AFTER ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <div class="section-head">
      <p class="badge">✦ Before vs After</p>
      <h2>Filing Doesn't Have to Be Complicated</h2>
    </div>
    <div class="challenge-wrap">
      <div class="challenge-col bad">
        <h3>COMMON FILING CHALLENGES</h3>
        <ul>
          <li><span class="mark bad"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 6l12 12M18 6L6 18"/></svg></span>Confusing ACRA requirements</li>
          <li><span class="mark bad"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 6l12 12M18 6L6 18"/></svg></span>Tight filing deadlines</li>
          <li><span class="mark bad"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 6l12 12M18 6L6 18"/></svg></span>Expensive service providers</li>
          <li><span class="mark bad"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 6l12 12M18 6L6 18"/></svg></span>XBRL validation issues</li>
          <li><span class="mark bad"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 6l12 12M18 6L6 18"/></svg></span>Limited internal expertise</li>
        </ul>
      </div>
      <div class="arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></div>
      <div class="challenge-col good">
        <h3>HOW XBERRA TAGGER HELPS</h3>
        <ul>
          <li><span class="mark good"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg></span>Free filing for eligible first-time companies</li>
          <li><span class="mark good"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg></span>2-hour expedited preparation</li>
          <li><span class="mark good"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg></span>Fixed transparent pricing</li>
          <li><span class="mark good"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg></span>ACRA-compliant XBRL validation</li>
          <li><span class="mark good"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg></span>Dedicated filing assistance</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ════ PROCESS ════ -->
<section class="sec">
  <div class="wrap">
    <p class="badge">✦ Filing Process</p>
    <h2 class="sec-title">Simplified XBRL Filing in 4 Simple Steps</h2>
    <p class="sec-lead" style="margin-bottom:2.5rem;">A straightforward process from document submission to submission-ready XBRL files.</p>

    <div class="prep-grid">
      <div class="prep-step-card">
        <span class="step-idx">[01]</span>
        <div class="card-icon" style="margin-bottom:.75rem;"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
        <h4>Submit Financial Statements</h4>
        <p>Upload your financial statements securely.</p>
      </div>
      <div class="prep-step-card">
        <span class="step-idx">[02]</span>
        <div class="card-icon" style="margin-bottom:.75rem;"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
        <h4>Eligibility Review</h4>
        <p>We verify if you qualify for FREE or $30 filing.</p>
      </div>
      <div class="prep-step-card">
        <span class="step-idx">[03]</span>
        <div class="card-icon" style="margin-bottom:.75rem;"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
        <h4>XBRL Preparation &amp; Validation</h4>
        <p>We prepare and validate the XBRL file.</p>
      </div>
      <div class="prep-step-card">
        <span class="step-idx">[04]</span>
        <div class="card-icon" style="margin-bottom:.75rem;"><svg viewBox="0 0 24 24"><polyline points="22 2 15 22 11 13 2 9 22 2"/></svg></div>
        <h4>Receive Submission-Ready Files</h4>
        <p>Receive your finalized XBRL package ready for ACRA submission.</p>
      </div>
    </div>

    <div class="highlight-box">
      <p>A structured filing process helps <strong>minimize rejection risks and meet compliance deadlines confidently</strong>.</p>
    </div>
  </div>
</section>

<!-- ════ PRICING ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <div class="section-head">
      <p class="badge">✦ Pricing</p>
      <h2>Free or Fixed-Cost Pricing</h2>
      <p>Transparent pricing. No hidden fees.</p>
    </div>
    <div class="price-grid">
      <div class="price-card">
        <div class="price-ribbon">BEST FOR NEW FILERS</div>
        <div class="pre">// eligible first-timers</div>
        <div class="amount">FREE</div>
        <div class="desc">For eligible first-time ACRA filers.</div>
        <a href="#cta" class="btn btn-primary">Check Eligibility</a>
      </div>
      <div class="or-divider">OR</div>
      <div class="price-card alt">
        <div class="price-ribbon" style="background:var(--navy);color:#fff;">FAST &amp; AFFORDABLE</div>
        <div class="pre">// urgent filing</div>
        <div class="amount">$30</div>
        <div class="desc">Fast-track Simplified XBRL preparation.</div>
        <a href="#cta" class="btn btn-dark">Start Filing</a>
      </div>
    </div>
  </div>
</section>

<!-- ════ WHO CAN USE ════ -->
<section class="sec">
  <div class="wrap">
    <div class="who-grid">
      <div>
        <p class="badge">✦ Eligibility</p>
        <h2>Who Can Use Simplified XBRL Filing?</h2>
        <ul class="who-list">
          <li><span class="mark good"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg></span>ACRA registered companies</li>
          <li><span class="mark good"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg></span>Small private companies</li>
          <li><span class="mark good"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg></span>Dormant companies</li>
          <li><span class="mark good"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg></span>First-time XBRL filers</li>
        </ul>
      </div>
      <div class="callout">
        <div class="callout-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.9M16 3.1a4 4 0 0 1 0 7.8"/></svg></div>
        <h3>Not sure if your company qualifies?</h3>
        <p>Our team can help verify your eligibility quickly and at no obligation.</p>
        <a href="#cta" class="btn btn-outline-ink">Check Eligibility Now</a>
      </div>
    </div>
  </div>
</section>

<!-- ════ WHY CHOOSE ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <div class="section-head" style="margin-bottom:2.5rem;">
      <p class="badge">✦ Why Us</p>
      <h2>Why Singapore Companies Choose XberraTagger</h2>
    </div>
    <div class="why-grid">
      <div class="why-item">
        <div class="why-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg></div>
        <h3>Fast Turnaround</h3>
        <p>Get urgent XBRL preparation support in as fast as 2 hours.</p>
      </div>
      <div class="why-item">
        <div class="why-icon"><svg viewBox="0 0 24 24"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6z"/></svg></div>
        <h3>ACRA Compliance</h3>
        <p>Prepared according to current ACRA filing requirements.</p>
      </div>
      <div class="why-item">
        <div class="why-icon"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg></div>
        <h3>Affordable Pricing</h3>
        <p>Free or fixed-cost XBRL preparation without hidden charges.</p>
      </div>
      <div class="why-item">
        <div class="why-icon"><svg viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M17.5 14.4c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.1-.7.1-.2.3-.7 1-1 1.2-.2.2-.4.2-.6.1-1.6-.8-2.7-1.7-3.5-3.1-.2-.3-.1-.5.1-.7l.5-.6c.2-.2.2-.4.1-.7-.1-.3-.6-1.5-.8-2-.2-.4-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.7.7-1 1.5-1 2.5.1 1.6 1.1 3.2 2.5 4.5 1.7 1.6 3.1 2.3 5 2.8.5.1 1 .1 1.4-.1.5-.2 1.4-.9 1.6-1.5.2-.5.2-1 .1-1.1-.1-.1-.2-.1-.3-.2z"/><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5.1-1.3A10 10 0 1 0 12 2z" fill="none" stroke="currentColor" stroke-width="1.4"/></svg></div>
        <h3>Dedicated Support</h3>
        <p>WhatsApp and email assistance throughout the filing process.</p>
      </div>
    </div>

    <div class="trust-strip">
      <div class="trust-badge"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg><span>ACRA Compliant</span></div>
      <div class="trust-badge"><svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg><span>100% Data Security</span></div>
      <div class="trust-badge"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg><span>100% Acceptance</span></div>
      <div class="trust-badge"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg><span>Fast Turnaround</span></div>
    </div>
  </div>
</section>

<!-- ════ WARNING BANNER ════ -->
<section class="sec">
  <div class="wrap">
    <div class="warn-banner">
      <div class="warn-left">
        <div class="warn-icon"><svg viewBox="0 0 24 24"><path d="M12 2 1 21h22z"/><path d="M12 9v5M12 17h.01"/></svg></div>
        <div>
          <h3>Avoid ACRA Late Filing Penalties</h3>
          <p>Inaccurate submissions may result in penalties and compliance issues. Get your Simplified XBRL filing completed accurately and on time.</p>
        </div>
      </div>
      <div class="warn-tags">
        <span>Financial Penalties</span>
        <span>Compliance Risks</span>
        <span>Filing Delays</span>
        <span>Rejected Submissions</span>
      </div>
      <div class="warn-right"><a href="#cta" class="btn btn-primary">File Your XBRL Now</a></div>
    </div>
  </div>
</section>

<!-- ════ TESTIMONIALS ════ -->
<section class="sec sec-alt">
  <div class="wrap">
    <div class="section-head">
      <p class="badge">✦ Trusted By</p>
      <h2>Trusted by Singapore Companies</h2>
    </div>
    <div class="testi-row">
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <p>"Fast and reliable service. Got our XBRL done within 2 hours!"</p>
        <div class="testi-who"><div class="testi-avatar"></div><div><div class="testi-name">Sarah Lim</div><div class="testi-role">SME Founder</div></div></div>
      </div>
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <p>"We recommend Xberra Tagger to all our clients. Professional and hassle-free."</p>
        <div class="testi-who"><div class="testi-avatar"></div><div><div class="testi-name">Michael Tan</div><div class="testi-role">Accounting Firm</div></div></div>
      </div>
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <p>"Great support via WhatsApp. Very responsive and helpful team."</p>
        <div class="testi-who"><div class="testi-avatar"></div><div><div class="testi-name">Jason Ng</div><div class="testi-role">Startup Founder</div></div></div>
      </div>
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <p>"Affordable and efficient. Perfect for small companies like ours."</p>
        <div class="testi-who"><div class="testi-avatar"></div><div><div class="testi-name">Priya K.</div><div class="testi-role">Finance Manager</div></div></div>
      </div>
    </div>
    <div class="testi-dots">
      <span class="active"></span><span></span><span></span><span></span>
    </div>
  </div>
</section>

<!-- ════ FAQ ════ -->
<section class="sec">
  <div class="wrap">
    <div style="text-align:center;max-width:600px;margin:0 auto 2.5rem;">
      <p class="badge" style="justify-content:center;display:inline-flex;">FAQ</p>
      <h2 class="sec-title">Frequently Asked Questions</h2>
      <p class="sec-lead" style="margin:0 auto;">Answers to commonly asked questions about Simplified XBRL filing.</p>
    </div>
    <div class="faq-wrap">
      <div class="faq-box">
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">What is Simplified XBRL? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">Simplified XBRL is ACRA's streamlined financial reporting format for eligible smaller Singapore companies, replacing full XBRL filing requirements.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">Do you submit to ACRA? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">We prepare your submission-ready XBRL files; final submission via BizFinx to ACRA is completed by your company or appointed filer.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">Who qualifies for free filing? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">Eligible first-time ACRA filers who meet the qualifying criteria receive Simplified XBRL preparation at no cost.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">Can you support urgent filings? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">Yes. Expedited filing support with 2-hour turnaround is available for urgent and overdue filing requirements.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">Is the $30 fee fixed? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">Yes — $30 fast-track filing is a fixed, transparent price with no hidden charges.</div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="tFAQ(this)">What documents are needed? <span class="faq-arrow">▼</span></button>
          <div class="faq-a">You'll need your latest financial statements. Our team will confirm any additional documents during the eligibility review.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════ FINAL CTA ════ -->
<section class="sec sec-alt" id="cta">
  <div class="wrap">
    <div class="cta-box">
      <p class="badge" style="background:rgba(255,255,255,.12);color:#fff;display:inline-flex;">✦ Filing Support</p>
      <h2 class="cta-title">Ready to File Your Simplified XBRL?</h2>
      <p class="cta-desc">Fast, compliant, and affordable XBRL filing support for Singapore companies.</p>
      <div class="btn-row">
        <a href="./xbrl-filing-services-contact-singapore" class="btn-wh">Check Eligibility</a>
        <a href="./xbrl-filing-services-contact-singapore" class="btn-outline-wh">Get Filing Support</a>
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