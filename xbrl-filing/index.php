
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simplified XBRL Filing Singapore — Free for First-Time Filers | XberraTagger</title>
<style>
/* ============================================================
   Xberra Tagger — Landing Page Design System
   Ink/Paper base, red primary action, market accent (gold/teal)
   ============================================================ */

@import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap');

:root{
  --ink: #10182B;
  --ink-2: #1B2740;
  --ink-3: #29395C;
  --paper: #F6F3EC;
  --paper-2: #ECE6D8;
  --white: #FFFFFF;
  --red: #D6402C;
  --red-dark: #B5331F;
  --green: #2F8F5B;
  --muted: #5C6577;
  --line: #DDD8C8;
  --line-dark: #324061;
  --accent: #C99A3B; /* overridden per-market */
  --accent-soft: #F1E6CC;
  --radius: 4px;
  --maxw: 1180px;
  --font-display: 'Space Grotesk', sans-serif;
  --font-body: 'Inter', sans-serif;
  --font-mono: 'JetBrains Mono', monospace;
}

*{box-sizing:border-box;}
html{scroll-behavior:smooth;}
body{
  margin:0;
  font-family:var(--font-body);
  background:var(--paper);
  color:var(--ink);
  line-height:1.55;
  -webkit-font-smoothing:antialiased;
}
img,svg{display:block;}
a{color:inherit;text-decoration:none;}
ul{margin:0;padding:0;list-style:none;}
.wrap{max-width:var(--maxw);margin:0 auto;padding:0 32px;}
@media (max-width:720px){ .wrap{padding:0 20px;} }

h1,h2,h3{font-family:var(--font-display);margin:0;letter-spacing:-0.01em;}

.eyebrow{
  display:inline-flex;align-items:center;gap:6px;
  font-family:var(--font-mono);font-size:12px;font-weight:600;
  letter-spacing:0.02em;color:var(--accent);
  text-transform:none;
}
.eyebrow::before{content:'<';opacity:0.6;}
.eyebrow::after{content:'>';opacity:0.6;}

:focus-visible{outline:2px solid var(--accent);outline-offset:2px;}

/* ---------- buttons ---------- */
.btn{
  display:inline-flex;align-items:center;justify-content:center;gap:8px;
  font-family:var(--font-body);font-weight:600;font-size:14.5px;
  padding:13px 24px;border-radius:var(--radius);border:1px solid transparent;
  cursor:pointer;transition:transform .15s ease, box-shadow .15s ease, background .15s ease;
  white-space:nowrap;
}
.btn:hover{transform:translateY(-1px);}
.btn-primary{background:var(--red);color:#fff;}
.btn-primary:hover{background:var(--red-dark);box-shadow:0 6px 16px rgba(214,64,44,.28);}
.btn-ghost{background:transparent;color:#fff;border-color:rgba(255,255,255,.35);}
.btn-ghost:hover{border-color:#fff;}
.btn-dark{background:var(--ink);color:#fff;}
.btn-dark:hover{background:var(--ink-2);}
.btn-outline-ink{background:transparent;color:var(--ink);border-color:var(--ink);}
.btn-outline-ink:hover{background:var(--ink);color:#fff;}
.btn-sm{padding:9px 16px;font-size:13px;}

/* ---------- header ---------- */
header.site{
  position:sticky;top:0;z-index:50;
  background:var(--ink);
  border-bottom:1px solid var(--line-dark);
}
.header-row{
  display:flex;align-items:center;justify-content:space-between;
  height:72px;color:#fff;
}
.logo{display:flex;flex-direction:column;line-height:1.1;}
.logo .name{
  font-family:var(--font-display);font-weight:700;font-size:19px;color:#fff;
  display:flex;align-items:center;gap:2px;
}
.logo .name .tagmark{color:var(--accent);}
.logo .tagline{font-family:var(--font-mono);font-size:10.5px;color:#9aa6c0;margin-top:2px;}
nav.main{display:flex;align-items:center;gap:28px;}
nav.main a{font-size:14px;color:#cfd6e8;font-weight:500;}
nav.main a:hover{color:#fff;}
.header-contact{display:flex;align-items:center;gap:18px;}
.contact-item{display:flex;align-items:center;gap:7px;font-size:13px;color:#cfd6e8;font-family:var(--font-mono);}
.contact-item svg{width:15px;height:15px;flex-shrink:0;}
@media (max-width:980px){
  nav.main, .header-contact .contact-item{display:none;}
}

/* ---------- hero ---------- */
.hero{
  background:
    radial-gradient(900px 500px at 85% -10%, rgba(201,154,59,.14), transparent 60%),
    var(--ink);
  color:#fff;
  padding:72px 0 56px;
  position:relative;
  overflow:hidden;
}
.hero-grid{display:grid;grid-template-columns:1.05fr 0.95fr;gap:56px;align-items:start;}
@media (max-width:920px){ .hero-grid{grid-template-columns:1fr;gap:40px;} }

.badge-pill{
  display:inline-flex;align-items:center;gap:8px;
  background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.16);
  border-radius:100px;padding:6px 14px;
  font-family:var(--font-mono);font-size:11.5px;letter-spacing:.04em;color:var(--accent);
  margin-bottom:22px;
}
.badge-pill .dot{width:6px;height:6px;border-radius:50%;background:var(--accent);}

.hero h1{
  font-size:clamp(32px,4vw,46px);font-weight:700;line-height:1.12;color:#fff;
  margin-bottom:20px;
}
.hero h1 .hl{color:var(--accent);}
.hero p.lead{font-size:16.5px;color:#bcc5dd;max-width:480px;margin-bottom:28px;}
.hero-ctas{display:flex;gap:14px;flex-wrap:wrap;margin-bottom:30px;}
.trust-row{display:flex;gap:22px;flex-wrap:wrap;}
.trust-row span{
  display:flex;align-items:center;gap:7px;font-size:13px;color:#aab4cc;font-weight:500;
}
.trust-row svg{width:15px;height:15px;color:var(--green);flex-shrink:0;}

/* plan card — terminal/tag-output styling, the signature element */
.plan-card{
  background:var(--ink-2);
  border:1px solid var(--line-dark);
  border-radius:10px;
  overflow:hidden;
  box-shadow:0 30px 60px -20px rgba(0,0,0,.5);
}
.plan-card-top{
  display:flex;align-items:center;gap:8px;
  padding:13px 18px;background:#141E36;border-bottom:1px solid var(--line-dark);
}
.plan-card-top .tlc{width:10px;height:10px;border-radius:50%;}
.plan-card-top .tlc.r{background:#E5564A;}
.plan-card-top .tlc.y{background:#E8B23D;}
.plan-card-top .tlc.g{background:#3FAE6E;}
.plan-card-top .title{
  margin-left:8px;font-family:var(--font-mono);font-size:12px;color:#7d88a8;
}
.plan-card-body{padding:24px 22px 8px;font-family:var(--font-mono);font-size:13.5px;}
.plan-card-body .open-tag{color:var(--accent);}
.plan-card-body .row{
  display:flex;justify-content:space-between;gap:14px;
  padding:10px 0 10px 18px;border-bottom:1px dashed rgba(255,255,255,.08);
}
.plan-card-body .row:last-of-type{border-bottom:none;}
.plan-card-body .k{color:#8b96b6;}
.plan-card-body .v{color:#fff;font-weight:600;}
.plan-card-body .v.accent{color:var(--accent);}
.plan-card-body .close-tag{color:var(--accent);margin-top:6px;display:block;}
.plan-card-cta{padding:18px 22px 22px;}
.plan-card-cta .btn{width:100%;}
.plan-card-cta .note{
  text-align:center;font-size:11.5px;color:#7d88a8;margin-top:10px;font-family:var(--font-mono);
}

/* stats bar */
.stats{background:var(--paper-2);border-bottom:1px solid var(--line);}
.stats-grid{
  display:grid;grid-template-columns:repeat(4,1fr);
  padding:30px 0;
}
.stats-grid .stat{
  text-align:center;padding:0 14px;border-right:1px solid var(--line);
}
.stats-grid .stat:last-child{border-right:none;}
.stat .num{font-family:var(--font-display);font-size:30px;font-weight:700;color:var(--ink);}
.stat .lbl{font-family:var(--font-mono);font-size:11px;color:var(--muted);letter-spacing:.02em;margin-top:4px;text-transform:uppercase;}
@media (max-width:760px){
  .stats-grid{grid-template-columns:repeat(2,1fr);gap:18px 0;}
  .stats-grid .stat:nth-child(2){border-right:none;}
  .stats-grid .stat{border-right:1px solid var(--line);}
}

/* generic section spacing */
section{padding:84px 0;}
.section-head{max-width:640px;margin:0 auto 48px;text-align:center;}
.section-head h2{font-size:clamp(24px,3vw,32px);margin-top:14px;}
.section-head p{color:var(--muted);font-size:15.5px;margin-top:12px;}

/* features grid */
.feat-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;}
@media (max-width:860px){ .feat-grid{grid-template-columns:1fr 1fr;} }
@media (max-width:560px){ .feat-grid{grid-template-columns:1fr;} }
.feat-card{
  background:var(--white);border:1px solid var(--line);border-radius:8px;
  padding:24px 22px;
}
.feat-icon{
  width:38px;height:38px;border-radius:7px;
  background:var(--accent-soft);display:flex;align-items:center;justify-content:center;
  margin-bottom:16px;
}
.feat-icon svg{width:19px;height:19px;color:var(--accent);}
.feat-card h3{font-size:16px;margin-bottom:6px;}
.feat-card p{font-size:13.8px;color:var(--muted);margin:0;}

/* challenges split */
.challenge-wrap{
  display:grid;grid-template-columns:1fr 56px 1fr;align-items:center;gap:0;
}
@media (max-width:820px){ .challenge-wrap{grid-template-columns:1fr;} .challenge-wrap .arrow{display:none;} }
.challenge-col{background:var(--white);border:1px solid var(--line);border-radius:8px;padding:28px 26px;}
.challenge-col h3{font-size:14px;font-family:var(--font-mono);letter-spacing:.02em;margin-bottom:18px;display:flex;align-items:center;gap:8px;}
.challenge-col.bad h3{color:var(--red);}
.challenge-col.good h3{color:var(--green);}
.challenge-col li{
  display:flex;gap:10px;align-items:flex-start;font-size:14.5px;padding:9px 0;
  border-bottom:1px solid var(--line);
}
.challenge-col li:last-child{border-bottom:none;}
.mark{flex-shrink:0;width:18px;height:18px;border-radius:50%;display:flex;align-items:center;justify-content:center;margin-top:1px;}
.mark.bad{background:#FBE7E3;color:var(--red);}
.mark.good{background:#E1F1E7;color:var(--green);}
.mark svg{width:10px;height:10px;}
.challenge-wrap .arrow{display:flex;justify-content:center;color:var(--line);}
.challenge-wrap .arrow svg{width:30px;height:30px;}

/* steps */
.steps-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:0;position:relative;}
@media (max-width:860px){ .steps-grid{grid-template-columns:1fr 1fr;gap:24px;} }
@media (max-width:560px){ .steps-grid{grid-template-columns:1fr;} }
.step{position:relative;padding:0 18px;}
.step:first-child{padding-left:0;}
.step:last-child{padding-right:0;}
.step::after{
  content:'';position:absolute;top:18px;right:-1px;width:calc(100% - 18px);
  border-top:1px dashed var(--line);
}
.step:last-child::after{display:none;}
@media (max-width:860px){ .step::after{display:none;} }
.step .idx{
  font-family:var(--font-mono);font-weight:600;font-size:14px;color:var(--accent);
  margin-bottom:14px;display:inline-block;
}
.step h3{font-size:15.5px;margin-bottom:6px;}
.step p{font-size:13.5px;color:var(--muted);margin:0;}

/* pricing */
.price-grid{display:grid;grid-template-columns:1fr auto 1fr;gap:28px;align-items:center;}
@media (max-width:760px){ .price-grid{grid-template-columns:1fr;} .price-grid .or-divider{display:none;} }
.price-card{
  background:var(--ink);color:#fff;border-radius:10px;padding:34px 30px;position:relative;overflow:hidden;
}
.price-card.alt{background:var(--white);color:var(--ink);border:1px solid var(--line);}
.price-ribbon{
  position:absolute;top:22px;right:-44px;transform:rotate(35deg);
  background:var(--accent);color:var(--ink);font-family:var(--font-mono);
  font-size:10px;font-weight:700;letter-spacing:.02em;padding:5px 50px;
  white-space:nowrap;text-align:center;
}
.price-card .pre{font-family:var(--font-mono);font-size:12px;color:var(--green);margin-bottom:10px;}
.price-card.alt .pre{color:var(--red);}
.price-card .amount{font-family:var(--font-display);font-size:38px;font-weight:700;margin-bottom:8px;}
.price-card .desc{font-size:13.8px;color:#a9b3cc;margin-bottom:22px;}
.price-card.alt .desc{color:var(--muted);}
.or-divider{
  width:46px;height:46px;border-radius:50%;border:1px solid var(--line);
  display:flex;align-items:center;justify-content:center;
  font-family:var(--font-mono);font-size:12px;color:var(--muted);background:var(--paper);
}

/* who-can-use */
.who-grid{display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:start;}
@media (max-width:820px){ .who-grid{grid-template-columns:1fr;gap:28px;} }
.who-list li{
  display:flex;align-items:center;gap:12px;font-size:15.5px;padding:13px 0;border-bottom:1px solid var(--line);
}
.who-list li:last-child{border-bottom:none;}
.who-list .mark.good{width:22px;height:22px;}
.who-list .mark.good svg{width:12px;height:12px;}
.callout{
  background:var(--paper-2);border:1px solid var(--line);border-radius:8px;padding:28px;
}
.callout-icon{
  width:42px;height:42px;border-radius:50%;background:var(--ink);display:flex;align-items:center;justify-content:center;margin-bottom:16px;
}
.callout-icon svg{width:20px;height:20px;color:var(--accent);}
.callout h3{font-size:17px;margin-bottom:8px;}
.callout p{font-size:14px;color:var(--muted);margin-bottom:18px;}

/* why choose */
.why-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;}
@media (max-width:860px){ .why-grid{grid-template-columns:1fr 1fr;} }
@media (max-width:560px){ .why-grid{grid-template-columns:1fr;} }
.why-item{text-align:left;}
.why-icon{
  width:44px;height:44px;border-radius:8px;background:var(--ink);
  display:flex;align-items:center;justify-content:center;margin-bottom:14px;
}
.why-icon svg{width:20px;height:20px;color:var(--accent);}
.why-item h3{font-size:15.5px;margin-bottom:6px;}
.why-item p{font-size:13.5px;color:var(--muted);margin:0;}

/* warning banner */
.warn-banner{
  background:#FBEEEA;border:1px solid #F0CFC4;border-radius:10px;padding:30px 32px;
  display:flex;flex-wrap:wrap;gap:24px;align-items:center;justify-content:space-between;
}
.warn-left{display:flex;gap:16px;align-items:flex-start;max-width:560px;}
.warn-icon{
  width:38px;height:38px;border-radius:8px;background:var(--red);display:flex;align-items:center;justify-content:center;flex-shrink:0;
}
.warn-icon svg{width:19px;height:19px;color:#fff;}
.warn-left h3{font-size:16.5px;margin-bottom:6px;color:var(--red-dark);}
.warn-left p{font-size:13.8px;color:#7a5048;margin:0;}
.warn-tags{display:flex;gap:8px;flex-wrap:wrap;}
.warn-tags span{
  font-family:var(--font-mono);font-size:11px;background:#fff;border:1px solid #F0CFC4;
  color:var(--red-dark);padding:6px 10px;border-radius:100px;
}
.warn-right{flex-shrink:0;}

/* testimonials */
.testi-row{
  display:flex;gap:18px;overflow-x:auto;scroll-snap-type:x mandatory;padding-bottom:8px;
  scrollbar-width:none;
}
.testi-row::-webkit-scrollbar{display:none;}
.testi-card{
  scroll-snap-align:start;flex:0 0 280px;background:var(--white);border:1px solid var(--line);
  border-radius:8px;padding:24px 22px;
}
.testi-stars{color:var(--accent);font-size:13px;margin-bottom:12px;letter-spacing:2px;}
.testi-card p{font-size:14px;color:var(--ink);margin:0 0 18px;}
.testi-who{display:flex;align-items:center;gap:10px;}
.testi-avatar{width:32px;height:32px;border-radius:50%;background:var(--ink-2);flex-shrink:0;}
.testi-name{font-size:13px;font-weight:600;}
.testi-role{font-size:11.5px;color:var(--muted);}
.testi-dots{display:flex;justify-content:center;gap:7px;margin-top:22px;}
.testi-dots span{width:7px;height:7px;border-radius:50%;background:var(--line);}
.testi-dots span.active{background:var(--accent);}

/* faq */
.faq-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px 28px;}
@media (max-width:760px){ .faq-grid{grid-template-columns:1fr;} }
details.faq-item{
  border-bottom:1px solid var(--line);padding:16px 0;
}
details.faq-item summary{
  cursor:pointer;list-style:none;font-size:15px;font-weight:600;
  display:flex;justify-content:space-between;align-items:center;gap:12px;
}
details.faq-item summary::-webkit-details-marker{display:none;}
details.faq-item summary::after{
  content:'+';font-family:var(--font-mono);font-size:18px;color:var(--accent);flex-shrink:0;transition:transform .15s;
}
details.faq-item[open] summary::after{content:'\2212';}
details.faq-item .a{font-size:13.8px;color:var(--muted);margin-top:10px;padding-right:20px;}

/* bottom cta */
.bottom-cta{
  background:
    radial-gradient(700px 400px at 10% 110%, rgba(214,64,44,.16), transparent 60%),
    var(--ink);
  color:#fff;border-radius:14px;padding:44px 40px;
  display:flex;flex-wrap:wrap;gap:30px;align-items:center;justify-content:space-between;
}
.bottom-cta-left{max-width:460px;}
.bottom-cta-left h2{font-size:24px;color:#fff;margin-bottom:8px;}
.bottom-cta-left p{font-size:14px;color:#aab4cc;margin:0;}
.bottom-cta-right{display:flex;flex-direction:column;gap:14px;align-items:flex-end;}
.bottom-cta-btns{display:flex;gap:10px;flex-wrap:wrap;}
.bottom-badges{display:flex;gap:16px;flex-wrap:wrap;}
.bottom-badges span{
  display:flex;align-items:center;gap:6px;font-size:12px;color:#aab4cc;font-family:var(--font-mono);
}
.bottom-badges svg{width:13px;height:13px;color:var(--accent);}
@media (max-width:700px){ .bottom-cta-right{align-items:flex-start;} }

/* footer */
footer.site{background:var(--ink-2);color:#aab4cc;padding:44px 0 28px;}
.footer-top{
  display:flex;justify-content:space-between;align-items:flex-start;flex-wrap:wrap;gap:24px;
  padding-bottom:28px;border-bottom:1px solid var(--line-dark);margin-bottom:22px;
}
.footer-links{display:flex;gap:24px;font-size:13px;flex-wrap:wrap;}
.footer-links a:hover{color:#fff;}
.footer-bottom{display:flex;justify-content:space-between;flex-wrap:wrap;gap:10px;font-size:12px;color:#717da0;}

/* reduced motion */
@media (prefers-reduced-motion: reduce){
  html{scroll-behavior:auto;}
  .btn{transition:none;}
}

:root{ --accent: #2B8C8C; --accent-soft: #D9EDED; }
</style>
</head>
<body>

<header class="site">
  <div class="wrap header-row">
    <div class="logo">
      <span class="name">XberraTagger<span class="tagmark">.sg</span></span>
      <span class="tagline">XBRL Filing Made Simple</span>
    </div>
    <nav class="main">
      <a href="#">ACRA XBRL Filing</a>
      <a href="#">Simplified XBRL Filing</a>
      <a href="#">Pricing</a>
      <a href="#">Resources</a>
      <a href="#">About</a>
    </nav>
    <div class="header-contact">
      <span class="contact-item"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.1-.7.1-.2.3-.7 1-1 1.2-.2.2-.4.2-.6.1-1.6-.8-2.7-1.7-3.5-3.1-.2-.3-.1-.5.1-.7l.5-.6c.2-.2.2-.4.1-.7-.1-.3-.6-1.5-.8-2-.2-.4-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.7.7-1 1.5-1 2.5.1 1.6 1.1 3.2 2.5 4.5 1.7 1.6 3.1 2.3 5 2.8.5.1 1 .1 1.4-.1.5-.2 1.4-.9 1.6-1.5.2-.5.2-1 .1-1.1-.1-.1-.2-.1-.3-.2z"/><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5.1-1.3A10 10 0 1 0 12 2z" fill="none" stroke="currentColor" stroke-width="1.4"/></svg>WhatsApp</span>
      <span class="contact-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.5c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.7 2z"/></svg>+65 3158 1054</span>
      <a href="#cta" class="btn btn-primary btn-sm">Check Eligibility</a>
    </div>
  </div>
</header>

<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <span class="badge-pill"><span class="dot"></span>BUILT FOR SINGAPORE COMPANIES</span>
      <h1>Simplified XBRL Filing — Free for First-Time Filers, From <span class="hl">$30</span> for Eligible Companies</h1>
      <p class="lead">First-time ACRA filers may qualify for free Simplified XBRL preparation. Need urgent filing? Get submission-ready XBRL prepared in as fast as 2 hours.</p>
      <div class="hero-ctas">
        <a href="#cta" class="btn btn-primary">Check Free Eligibility</a>
        <a href="#" class="btn btn-ghost"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.1-.7.1-.2.3-.7 1-1 1.2-.2.2-.4.2-.6.1-1.6-.8-2.7-1.7-3.5-3.1-.2-.3-.1-.5.1-.7l.5-.6c.2-.2.2-.4.1-.7-.1-.3-.6-1.5-.8-2-.2-.4-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.7.7-1 1.5-1 2.5.1 1.6 1.1 3.2 2.5 4.5 1.7 1.6 3.1 2.3 5 2.8.5.1 1 .1 1.4-.1.5-.2 1.4-.9 1.6-1.5.2-.5.2-1 .1-1.1-.1-.1-.2-.1-.3-.2z"/><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5.1-1.3A10 10 0 1 0 12 2z" fill="none" stroke="currentColor" stroke-width="1.4"/></svg>WhatsApp Support</a>
      </div>
      <div class="trust-row">
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg>ACRA-Compliant</span>
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg>2-Hour Turnaround</span>
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg>Singapore Specialists</span>
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg>Secure & Confidential</span>
      </div>
    </div>
    <div class="plan-card">
      <div class="plan-card-top">
        <span class="tlc r"></span><span class="tlc y"></span><span class="tlc g"></span>
        <span class="title">xbrl-plan.json</span>
      </div>
      <div class="plan-card-body">
        <span class="open-tag">&lt;filing&gt;</span>
        <div class="row"><span class="k">first_time:</span><span class="v accent">"FREE"</span></div>
        <div class="row"><span class="k">fast_track:</span><span class="v ">"$30"</span></div>
        <div class="row"><span class="k">turnaround:</span><span class="v ">"2h"</span></div>
        <div class="row"><span class="k">compliance:</span><span class="v ">"guaranteed"</span></div>
        <div class="row"><span class="k">support:</span><span class="v ">"dedicated"</span></div>
        <span class="close-tag">&lt;/filing&gt;</span>
      </div>
      <div class="plan-card-cta">
        <a href="#cta" class="btn btn-primary">Get Started</a>
        <p class="note">No obligation. Response within minutes.</p>
      </div>
    </div>
  </div>
</section>

<div class="stats">
  <div class="wrap stats-grid">
    <div class="stat"><div class="num">500+</div><div class="lbl">Companies Served</div></div>
    <div class="stat"><div class="num">2 Hrs</div><div class="lbl">Fast Turnaround</div></div>
    <div class="stat"><div class="num">100%</div><div class="lbl">ACRA-Compliant</div></div>
    <div class="stat"><div class="num">4.9★</div><div class="lbl">Client Satisfaction</div></div>
  </div>
</div>

<section>
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">what-you-get</span>
      <h2>Everything You Need for Simplified XBRL Filing</h2>
      <p>From free first-time filing assistance to urgent same-day XBRL preparation, Xberra Tagger helps Singapore companies stay compliant without complexity.</p>
    </div>
    <div class="feat-grid">
      <div class="feat-card">
        <div class="feat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12v9H4v-9"/><path d="M2 7h20v5H2zM12 22V7M12 7C9 7 7 5 7 3.5A2.5 2.5 0 0 1 12 3a2.5 2.5 0 0 1 5 .5C17 5 15 7 12 7z"/></svg></div>
        <h3>Free First-Time Filing</h3>
        <p>Eligible companies receive Simplified XBRL preparation at zero cost.</p>
      </div>
      <div class="feat-card">
        <div class="feat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z"/></svg></div>
        <h3>$30 Fast-Track Filing</h3>
        <p>Urgent filing support with 2-hour turnaround.</p>
      </div>
      <div class="feat-card">
        <div class="feat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6z"/></svg></div>
        <h3>ACRA-Compliant Preparation</h3>
        <p>Prepared according to Singapore filing requirements.</p>
      </div>
      <div class="feat-card">
        <div class="feat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg></div>
        <h3>Submission-Ready XBRL</h3>
        <p>Receive ready-to-submit files without software hassles.</p>
      </div>
      <div class="feat-card">
        <div class="feat-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.1-.7.1-.2.3-.7 1-1 1.2-.2.2-.4.2-.6.1-1.6-.8-2.7-1.7-3.5-3.1-.2-.3-.1-.5.1-.7l.5-.6c.2-.2.2-.4.1-.7-.1-.3-.6-1.5-.8-2-.2-.4-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.7.7-1 1.5-1 2.5.1 1.6 1.1 3.2 2.5 4.5 1.7 1.6 3.1 2.3 5 2.8.5.1 1 .1 1.4-.1.5-.2 1.4-.9 1.6-1.5.2-.5.2-1 .1-1.1-.1-.1-.2-.1-.3-.2z"/><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5.1-1.3A10 10 0 1 0 12 2z" fill="none" stroke="currentColor" stroke-width="1.4"/></svg></div>
        <h3>WhatsApp Support</h3>
        <p>Direct assistance throughout the filing process.</p>
      </div>
      <div class="feat-card">
        <div class="feat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a9 9 0 0 1-15.5 6.3M3 12a9 9 0 0 1 15.5-6.3M3 18v-5h5M21 6v5h-5"/></svg></div>
        <h3>Same-Day Amendments</h3>
        <p>Quick corrections and revisions if required.</p>
      </div>
    </div>
  </div>
</section>

<section style="padding-top:0;">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">before-vs-after</span>
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

<section style="padding-top:0;">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">process</span>
      <h2>Simplified XBRL Filing in 4 Simple Steps</h2>
    </div>
    <div class="steps-grid">
      <div class="step">
        <span class="idx">[01]</span>
        <h3>Submit Financial Statements</h3>
        <p>Upload your financial statements securely.</p>
      </div>
      <div class="step">
        <span class="idx">[02]</span>
        <h3>Eligibility Review</h3>
        <p>We verify if you qualify for FREE or $30 filing.</p>
      </div>
      <div class="step">
        <span class="idx">[03]</span>
        <h3>XBRL Preparation & Validation</h3>
        <p>We prepare and validate the XBRL file.</p>
      </div>
      <div class="step">
        <span class="idx">[04]</span>
        <h3>Receive Submission-Ready Files</h3>
        <p>Receive your finalized XBRL package ready for ACRA submission.</p>
      </div>
    </div>
  </div>
</section>

<section style="padding-top:0;">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">pricing</span>
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
        <div class="price-ribbon" style="background:var(--ink);color:#fff;">FAST &amp; AFFORDABLE</div>
        <div class="pre">// urgent filing</div>
        <div class="amount">$30</div>
        <div class="desc">Fast-track Simplified XBRL preparation.</div>
        <a href="#cta" class="btn btn-dark">Start Filing</a>
      </div>
    </div>
  </div>
</section>

<section style="padding-top:0;">
  <div class="wrap">
    <div class="who-grid">
      <div>
        <span class="eyebrow">eligibility</span>
        <h2 style="margin-top:14px;margin-bottom:20px;font-size:26px;">Who Can Use Simplified XBRL Filing?</h2>
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

<section style="padding-top:0;">
  <div class="wrap">
    <div class="section-head" style="margin-bottom:36px;">
      <span class="eyebrow">why-us</span>
      <h2>Why Singapore Companies Choose XberraTagger</h2>
    </div>
    <div class="why-grid">
      <div class="why-item">
        <div class="why-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg></div>
        <h3>Fast Turnaround</h3>
        <p>Get urgent XBRL preparation support in as fast as 2 hours.</p>
      </div>
      <div class="why-item">
        <div class="why-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6z"/></svg></div>
        <h3>ACRA Compliance</h3>
        <p>Prepared according to current ACRA filing requirements.</p>
      </div>
      <div class="why-item">
        <div class="why-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.6 13.4 12 22 2 12V2h10z"/><circle cx="7" cy="7" r="1.2" fill="currentColor" stroke="none"/></svg></div>
        <h3>Affordable Pricing</h3>
        <p>Free or fixed-cost XBRL preparation without hidden charges.</p>
      </div>
      <div class="why-item">
        <div class="why-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.1-.7.1-.2.3-.7 1-1 1.2-.2.2-.4.2-.6.1-1.6-.8-2.7-1.7-3.5-3.1-.2-.3-.1-.5.1-.7l.5-.6c.2-.2.2-.4.1-.7-.1-.3-.6-1.5-.8-2-.2-.4-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.7.7-1 1.5-1 2.5.1 1.6 1.1 3.2 2.5 4.5 1.7 1.6 3.1 2.3 5 2.8.5.1 1 .1 1.4-.1.5-.2 1.4-.9 1.6-1.5.2-.5.2-1 .1-1.1-.1-.1-.2-.1-.3-.2z"/><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5.1-1.3A10 10 0 1 0 12 2z" fill="none" stroke="currentColor" stroke-width="1.4"/></svg></div>
        <h3>Dedicated Support</h3>
        <p>WhatsApp and email assistance throughout the filing process.</p>
      </div>
    </div>
  </div>
</section>

<section style="padding-top:0;">
  <div class="wrap">
    <div class="warn-banner">
      <div class="warn-left">
        <div class="warn-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 1 21h22z"/><path d="M12 9v5M12 17h.01"/></svg></div>
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

<section style="padding-top:0;">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">trusted-by</span>
      <h2>Trusted by Singapore Companies</h2>
    </div>
    <div class="testi-row">
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <p>"Fast and reliable service. Got our XBRL done within 2 hours!"</p>
        <div class="testi-who">
          <div class="testi-avatar"></div>
          <div>
            <div class="testi-name">Sarah Lim</div>
            <div class="testi-role">SME Founder</div>
          </div>
        </div>
      </div>
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <p>"We recommend Xberra Tagger to all our clients. Professional and hassle-free."</p>
        <div class="testi-who">
          <div class="testi-avatar"></div>
          <div>
            <div class="testi-name">Michael Tan</div>
            <div class="testi-role">Accounting Firm</div>
          </div>
        </div>
      </div>
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <p>"Great support via WhatsApp. Very responsive and helpful team."</p>
        <div class="testi-who">
          <div class="testi-avatar"></div>
          <div>
            <div class="testi-name">Jason Ng</div>
            <div class="testi-role">Startup Founder</div>
          </div>
        </div>
      </div>
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <p>"Affordable and efficient. Perfect for small companies like ours."</p>
        <div class="testi-who">
          <div class="testi-avatar"></div>
          <div>
            <div class="testi-name">Priya K.</div>
            <div class="testi-role">Finance Manager</div>
          </div>
        </div>
      </div>
    </div>
    <div class="testi-dots">
      <span class="active"></span><span class=""></span><span class=""></span><span class=""></span>
    </div>
  </div>
</section>

<section style="padding-top:0;">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">faq</span>
      <h2>Frequently Asked Questions</h2>
    </div>
    <div class="faq-grid">
      <details class="faq-item">
        <summary>What is Simplified XBRL?</summary>
        <div class="a">Simplified XBRL is ACRA's streamlined financial reporting format for eligible smaller Singapore companies, replacing full XBRL filing requirements.</div>
      </details>
      <details class="faq-item">
        <summary>Do you submit to ACRA?</summary>
        <div class="a">We prepare your submission-ready XBRL files; final submission via BizFinx to ACRA is completed by your company or appointed filer.</div>
      </details>
      <details class="faq-item">
        <summary>Who qualifies for free filing?</summary>
        <div class="a">Eligible first-time ACRA filers who meet the qualifying criteria receive Simplified XBRL preparation at no cost.</div>
      </details>
      <details class="faq-item">
        <summary>What documents are needed?</summary>
        <div class="a">You'll need your latest financial statements. Our team will confirm any additional documents during the eligibility review.</div>
      </details>
      <details class="faq-item">
        <summary>Is the $30 fee fixed?</summary>
        <div class="a">Yes — $30 fast-track filing is a fixed, transparent price with no hidden charges.</div>
      </details>
      <details class="faq-item">
        <summary>Is support included?</summary>
        <div class="a">Yes, dedicated WhatsApp and email support is included throughout the filing process.</div>
      </details>
    </div>
  </div>
</section>

<section id="cta" style="padding-top:0;">
  <div class="wrap">
    <div class="bottom-cta">
      <div class="bottom-cta-left">
        <h2>Ready to File Your Simplified XBRL?</h2>
        <p>Fast, compliant, and affordable XBRL filing support for Singapore companies.</p>
      </div>
      <div class="bottom-cta-right">
        <div class="bottom-cta-btns">
          <a href="#" class="btn btn-primary">Check Eligibility</a>
          <a href="#" class="btn btn-dark" style="background:var(--ink-2);border:1px solid var(--line-dark);">Start Filing</a>
          <a href="#" class="btn btn-ghost"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.1-.7.1-.2.3-.7 1-1 1.2-.2.2-.4.2-.6.1-1.6-.8-2.7-1.7-3.5-3.1-.2-.3-.1-.5.1-.7l.5-.6c.2-.2.2-.4.1-.7-.1-.3-.6-1.5-.8-2-.2-.4-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.7.7-1 1.5-1 2.5.1 1.6 1.1 3.2 2.5 4.5 1.7 1.6 3.1 2.3 5 2.8.5.1 1 .1 1.4-.1.5-.2 1.4-.9 1.6-1.5.2-.5.2-1 .1-1.1-.1-.1-.2-.1-.3-.2z"/><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5.1-1.3A10 10 0 1 0 12 2z" fill="none" stroke="currentColor" stroke-width="1.4"/></svg>WhatsApp Us</a>
        </div>
        <div class="bottom-badges">
          <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg>Secure & Confidential</span>
          <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg>No Hidden Fees</span>
          <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg>Response within 15 mins</span>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="site">
  <div class="wrap">
    <div class="footer-top">
      <div class="logo">
        <span class="name" style="color:#fff;">XberraTagger<span class="tagmark">.sg</span></span>
        <span class="tagline">XBRL Filing Made Simple</span>
      </div>
      <div class="footer-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <a href="#">Contact Us</a>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2024 Xberra Tagger Pte. Ltd.. All rights reserved.</span>
      <span>+65 3158 1054 · hello@xberratagger.com.sg</span>
    </div>
  </div>
</footer>
</body>
</html>