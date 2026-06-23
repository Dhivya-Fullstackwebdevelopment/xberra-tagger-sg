<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_meta; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">

    <link rel="alternate" hreflang="en-sg" href="<?php echo $full_url; ?>" />
    <link rel="alternate" hreflang="x-default" href="<?php echo $full_default; ?>" />


    <!-- Geo Targeting -->

    <meta name="geo.region" content="SG" />
    <meta name="geo.placename" content="Singapore" />
    <meta name="geo.position" content="1.3521;103.8198" />
    <meta name="ICBM" content="1.3521, 103.8198" />

    <meta property="og:title" content="<?php echo $og_title; ?>">
    <meta property="og:description" content="<?php echo $og_desc; ?>">
    <meta property="og:type" content="<?php echo $og_type; ?>">
    <meta property="og:url" content="<?php echo $og_url; ?>">
    <meta property="og:image" content="https://xberratagger.com.sg/assets/img/home-page/xberra-Logo.png">
    <meta property="og:site_name" content="Xberra Tagger" />

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="<?php echo $twitter_title; ?>">
    <meta property="twitter:description" content="<?php echo $twitter_desc; ?>">
    <meta name="twitter:image" content="https://xberratagger.com.sg/assets/img/home-page/xberra-Logo.png">

    <meta name="author" content="Xberra Tagger" />




    <?php if (!empty($schema)) : ?>
        <script type="application/ld+json">
            <?php echo $schema; ?>
        </script>
    <?php endif; ?>

    <script>
        (function () {
            function updateViewport() {
                let scale = 1.0;

                if (window.innerWidth >= 1100 && window.innerWidth <= 1450) {
                    scale = 0.6;
                }

                let viewport = document.querySelector('meta[name="viewport"]');

                if (!viewport) {
                    viewport = document.createElement('meta');
                    viewport.name = 'viewport';
                    document.head.appendChild(viewport);
                }

                viewport.setAttribute(
                    'content',
                    `width=device-width, initial-scale=${scale}`
                );
            }

            updateViewport();
            window.addEventListener('resize', updateViewport);
        })();
    </script>

    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/about.css" />
    <link rel="stylesheet" href="./assets/css/pricing.css" />
    <link rel="stylesheet" href="./assets/css/contact.css" />
    <link rel="stylesheet" href="./assets/css/acra.css" />
    <link rel="stylesheet" href="./assets/css/blogs.css" />
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Plus Jakarta Sans Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Favicon -->
    <link rel="icon" href="./assets/img/favicon/favicon xberra.svg">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-P1CVXFFEX4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-P1CVXFFEX4');
    </script>




    <!-- Google Tag Manager -->

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':

                    new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],

                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =

                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);

        })(window, document, 'script', 'dataLayer', 'GTM-T7P5N74C');
    </script>

    <!-- End Google Tag Manager -->


    


</head>

<body>

    <!-- Google Tag Manager (noscript) -->

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7P5N74C"

            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <!-- End Google Tag Manager (noscript) -->

    <header class="main-header">
        <div class="top-header d-lg-block d-none">
            <div class="container-fluid d-flex align-items-center justify-content-between g-5">
                <div>
                    <p class="d-flex align-items-center text-sm fw-500 mb-0 ">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2">
                            <path d="M12 2l2.9 6.6 7.1.6-5.3 4.6 1.6 7-6.3-3.7-6.3 3.7 1.6-7-5.3-4.6 7.1-.6L12 2z" />
                        </svg> &nbsp;
                        XBRL Services Provider for ACRA filing.
                    </p>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <div class="top-header-contact">
                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-phone-alt" viewBox="0 0 512 512"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill="#cf2128"
                                d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
                            </path>
                        </svg>
                        <a class="text-decoration-none text-black fw-500" href="tel:+6560272438"> +65 60272438 </a>
                    </div>
                    <div class="top-header-contact">
                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-mail-bulk" viewBox="0 0 576 512"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill="#cf2128"
                                d="M160 448c-25.6 0-51.2-22.4-64-32-64-44.8-83.2-60.8-96-70.4V480c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32V345.6c-12.8 9.6-32 25.6-96 70.4-12.8 9.6-38.4 32-64 32zm128-192H32c-17.67 0-32 14.33-32 32v16c25.6 19.2 22.4 19.2 115.2 86.4 9.6 6.4 28.8 25.6 44.8 25.6s35.2-19.2 44.8-22.4c92.8-67.2 89.6-67.2 115.2-86.4V288c0-17.67-14.33-32-32-32zm256-96H224c-17.67 0-32 14.33-32 32v32h96c33.21 0 60.59 25.42 63.71 57.82l.29-.22V416h192c17.67 0 32-14.33 32-32V192c0-17.67-14.33-32-32-32zm-32 128h-64v-64h64v64zm-352-96c0-35.29 28.71-64 64-64h224V32c0-17.67-14.33-32-32-32H96C78.33 0 64 14.33 64 32v192h96v-32z">
                            </path>
                        </svg>
                        <a class="text-decoration-none text-black fw-500" href="mailto:hello@xberratagger.com"> hello@xberratagger.com</a>
                    </div>
                </div>


            </div>
        </div>

        <div class="header-container">
            <!-- Logo -->
            <div class="logo">
                <a href="./">
                    <img src="./assets/img/home-page/xberra-Logo.png" alt="Xberra Tagger — XBRL Filing Services Singapore" />
                </a>
            </div>


            <!-- Navigation -->
            <nav class="nav-menu" id="navMenu">
                <ul>
                    <!-- <li><a href="./" class="active">Home</a></li> -->

                    <!-- ACRA WITH SUBMENU -->
                    <li class="has-submenu">
                        <a class="submenu-toggle">
                            ACRA XBRL Filing <span class="arrow">▾</span>
                        </a>

                        <ul class="submenu">
                            <li><a href="./acra-xbrl-filing-singapore">ACRA XBRL Filing</a></li>
                            <li><a href="./outsourced-xbrl-filing-singapore">Outsourced XBRL Filing</a></li>
                            <li><a href="./xbrl-singapore">XBRL Singapore</a></li>
                            <li><a href="./annual-return-filing-acra-singapore">Annual Return Filing</a></li>
                            <li><a href="./xbrl-conversion-services-singapore">XBRL Conversion Services</a></li>
                            
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a class="submenu-toggle">
                            XBRL Guide<span class="arrow">▾</span>
                        </a>

                        <ul class="submenu">
                            <li><a href="./what-is-xbrl-acra-filing-singapore">What is XBRL?</a></li>
                            <li><a href="./why-file-financial-statements-in-xbrl-acra">Why File in XBRL</a></li>
                            <li><a href="./who-should-file-xbrl-acra-singapore">Who Should File in XBRL</a></li>
                            <li><a href="./what-to-file-xbrl-acra-singapore">What to File in XBRL</a></li>
                            <li><a href="./how-to-file-xbrl-acra-singapore">How to File in XBRL</a></li>
                            <li><a href="./common-xbrl-filing-errors-singapore">Common XBRL Filing Errors</a></li>
                            <li><a href="./simplified-xbrl-vs-full-xbrl-singapore">Simplified XBRL vs. Full XBRL</a></li>
                            <!-- <li><a href="./who-we-help-accounting">Who we help accounting</a></li> -->
                        </ul>
                    </li>
                    
                    <li class="has-submenu">
                        <a class="submenu-toggle">
                            Who We Help <span class="arrow">▾</span>
                        </a>

                        <ul class="submenu">
                            <li><a href="./xbrl-filing-services-for-accounting-firms-singapore">Accounting Firms</a></li>
                            <li><a href="./xbrl-filing-for-corporate-secretaries-singapore">Corporate Secretaries</a></li>
                            <li><a href="./xbrl-filing-for-small-companies-singapore-acra">Small Companies</a></li>
                            <li><a href="./xbrl-filing-for-group-companies-singapore">Group Companies</a></li>
                            <li><a href="./xbrl-filing-requirements-companies"> Companies</a></li>
                        </ul>
                    </li>
                    <li><a href="./xbrl-filing-fees-singapore">Pricing</a></li>
                    <li><a href="./blogs/">Blog</a></li>
                    <li class="has-submenu">
                        <a class="submenu-toggle">
                           Resources & Tools<span class="arrow">▾</span>
                        </a>

                        <ul class="submenu">
                            <li><a href="./bizfinx-2026-update-singapore">Bizfinx 2026 Update Singapore</a></li>
                            <li><a href="./acra-xbrl-filing-deadline-calculator">ACRA XBRL Filing Deadline Calculator</a></li>
                        </ul>
                    </li>
                    <li><a href="./xbrl-services-provider-singapore-about">About</a></li>
                    <li><a href="./xbrl-filing-services-contact-singapore">Contact</a></li>
                </ul>
            </nav>

            <!-- RIGHT SIDE (Visible on Desktop) -->
            <div class="header-right gap-3">
                <a class="quote-btn" id="openModal">
                    Get Quote
                    <span class="icon">➜</span>
                </a>

                <a href="https://app.xberratagger.com.sg/" class="quote-btn">
                    Sign in
                    <span class="icon rounded-circle bg-blue text-white p-1" style="font-size: 10px">➜</span>
                </a>
            </div>

            <!-- Hamburger -->
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- CUSTOM MODAL -->
        <div class="custom-modal" id="quoteModal">
            <div class="modal-wrapper">

                <span class="close-modal" id="closeModal">&times;</span>

                <div class="modal-inner">

                    <div class="modal-logo">
                        <img src="./assets/img/home-page/xberra-Logo.png" alt="Xberra Tagger — XBRL Filing Services Singapore">
                    </div>

                    <form class="quote-form">

                        <div class="modal-form">

                            <div class="form-group">
                                <label> Name <span class="text-red">*</span></label>
                                <input type="text" name="firstName" placeholder="Name here">
                            </div>

                            <div class="form-group">
                                <label>Email Address <span class="text-red">*</span></label>
                                <input type="email" name="email" placeholder="Add email">
                            </div>

                            <div class="form-group">
                                <label>Phone Number <span class="text-red">*</span></label>
                                <input type="text" name="phone" placeholder="+65 1234 5678">
                            </div>

                            <div class="form-group">
                                <label>Service You Require</label>
                                <select name="service">
                                    <option value="">Select</option>
                                    <option>Simplified XBRL</option>
                                    <option>Full XBRL (Standalone)</option>
                                    <option>Full XBRL (Consolidated)</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <div class="captcha-wrapper">
                                    <div class="captcha-box" id="captchaBox-1"></div>
                                    <button type="button" class="refresh-btn" id="refreshCaptcha-1">↻</button>
                                </div>
                            </div>
                            <div class="form-group">

                                <input type="text" name="captcha" id="captchaInput-1" class="captcha-input"
                                    placeholder="Enter captcha from the picture">
                            </div>
                        </div>

                        <button type="submit" class="modal-submit">Submit</button>

                </div>
                <div>

                    <div class="mt-3 text-center" id="formResults"></div>
                </div>

                </form>

            </div>

        </div>
        </div>


        <style>
            @media (max-width: 991px) {
                .arrow {
                    float: none;
                }
            }
        </style>



        <script>
            document.addEventListener("DOMContentLoaded", function() {

                const form = document.querySelector(".quote-form");
                if (!form) return;

                const inputs = form.querySelectorAll("input, select");
                const emailInput = form.querySelector('input[name="email"]');
                const phoneInput = form.querySelector('input[name="phone"]');
                const firstName = form.querySelector('[name="firstName"]');

                const formResults = document.getElementById("formResults");

                // CAPTCHA
                const captchaBox = document.getElementById("captchaBox-1");
                const refreshBtn = document.getElementById("refreshCaptcha-1");
                const captchaInput = document.getElementById("captchaInput-1");

                let currentCaptcha = "";

                function generateCaptcha() {
                    const chars = "ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789";
                    currentCaptcha = "";

                    for (let i = 0; i < 6; i++) {
                        currentCaptcha += chars.charAt(Math.floor(Math.random() * chars.length));
                    }

                    displayCaptcha();
                }

                function displayCaptcha() {
                    captchaBox.innerHTML = "";

                    for (let char of currentCaptcha) {
                        const span = document.createElement("span");
                        span.textContent = char;
                        span.style.transform = `rotate(${Math.random() * 30 - 15}deg)`;
                        span.style.display = "inline-block";
                        captchaBox.appendChild(span);
                    }
                }

                refreshBtn.addEventListener("click", generateCaptcha);
                generateCaptcha();

                // ERROR HANDLING
                function showError(input, message) {
                    removeError(input);

                    const error = document.createElement("div");
                    error.className = "error-message";
                    error.innerText = message;

                    input.parentElement.appendChild(error);
                    input.classList.add("error-input");
                }

                function removeError(input) {
                    const existingError = input.parentElement.querySelector(".error-message");
                    if (existingError) existingError.remove();

                    input.classList.remove("error-input");
                }

                inputs.forEach(input => {
                    input.addEventListener("input", function() {
                        removeError(input);
                    });
                });

                // ✅ SINGLE SUBMIT HANDLER
                form.addEventListener("submit", async function(e) {
                    e.preventDefault();

                    let isValid = true;

                    // NAME
                    if (firstName.value.trim() === "") {
                        showError(firstName, "Name is required");
                        isValid = false;
                    }

                    // EMAIL
                    if (emailInput.value.trim() === "") {
                        showError(emailInput, "Email Address is required");
                        isValid = false;
                    } else {
                        const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,}$/i;
                        if (!emailPattern.test(emailInput.value.trim())) {
                            showError(emailInput, "Enter valid Email Address");
                            isValid = false;
                        }
                    }

                    // PHONE
                    if (phoneInput.value.trim() === "") {
                        showError(phoneInput, "Phone Number is required");
                        isValid = false;
                    } else {
                        const phonePattern = /^[0-9+\s]{8,15}$/;
                        if (!phonePattern.test(phoneInput.value.trim())) {
                            showError(phoneInput, "Enter valid Phone Number");
                            isValid = false;
                        }
                    }

                    // CAPTCHA ✅ (merged here)
                    if (captchaInput.value.trim() !== currentCaptcha) {
                        showError(captchaInput, "Captcha does not match");
                        generateCaptcha();
                        captchaInput.value = "";
                        isValid = false;
                    }

                    if (!isValid) return;

                    try {
                        const submitBtn = form.querySelector(".modal-submit");
                        submitBtn.disabled = true;
                        submitBtn.innerText = "Sending...";

                        const formData = new FormData(form);

                        // ADMIN EMAIL
                        const senderResponse = await fetch('heademail_sender', {
                            method: 'POST',
                            body: formData
                        });

                        const senderResult = await senderResponse.json();

                        if (senderResult.status !== "success") {
                            throw new Error(senderResult.message);
                        }

                        // USER EMAIL
                        await fetch('heademail_receiver', {
                            method: 'POST',
                            body: formData
                        });

                        // SAVE TO DATABASE
                        // await fetch('save_quote.php', {
                        //     method: 'POST',
                        //     body: formData
                        // });

                        formResults.style.display = "block";
                        formResults.style.background = "#d4edda";
                        formResults.style.color = "#155724";
                        formResults.innerHTML = "✅ Thank you! We'll respond within 30 minutes.";

                        form.reset();
                        generateCaptcha(); // 🔥 refresh captcha after success

                    } catch (error) {
                        formResults.style.display = "block";
                        formResults.style.background = "#f8d7da";
                        formResults.style.color = "#721c24";
                        formResults.innerHTML = "❌ Something went wrong. Please try again.";

                    } finally {
                        const submitBtn = form.querySelector(".modal-submit");
                        submitBtn.disabled = false;
                        submitBtn.innerText = "Submit";
                    }
                });

            });
        </script>


        <script>
            /* Mobile submenu click */
            document.querySelectorAll(".submenu-toggle").forEach(function(toggle) {

                toggle.addEventListener("click", function(e) {

                    if (window.innerWidth <= 991) {
                        e.preventDefault(); // prevent page redirect
                        this.parentElement.classList.toggle("active");
                    }

                });

            });
        </script>
    </header>