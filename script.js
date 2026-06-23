
document.addEventListener("DOMContentLoaded", function () {

  const dropdown = document.querySelector(".country-dropdown");

  if (dropdown) {

    const button = dropdown.querySelector(".dropdown-btn");
    const countryLabels = document.querySelectorAll(".country-label");

    const url = window.location.pathname.toLowerCase();

    let countryText = "🌍 Global";

    if (url.includes("/sg/")) {
      countryText = "🌍 Singapore";
    } 
    else if (url.includes("/my/")) {
      countryText = "🌍 Malaysia";
    }

    countryLabels.forEach(label => {
      label.textContent = countryText;
    });

    button.addEventListener("click", function (e) {
      e.stopPropagation();
      dropdown.classList.toggle("active");
    });

    document.addEventListener("click", function (e) {
      if (!dropdown.contains(e.target)) {
        dropdown.classList.remove("active");
      }
    });

  }

});





//hamburger menu script
document.addEventListener("DOMContentLoaded", function () {

  const hamburger = document.getElementById("hamburger");
  const navMenu = document.getElementById("navMenu");

  if (hamburger && navMenu) {
    hamburger.addEventListener("click", function () {
      navMenu.classList.toggle("active");
    });
  }

});


/* HERO ANIMATION */
document.addEventListener("DOMContentLoaded", () => {
  const hero = document.querySelector(".hero-content");

  setTimeout(() => {
    hero.classList.add("active");
  }, 300);
});


// counter script
document.addEventListener("DOMContentLoaded", function () {

  const counters = document.querySelectorAll(".counter-number");

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const counter = entry.target;
        const target = +counter.getAttribute("data-target");
        let count = 0;
        const speed = 2000; // total animation time
        const increment = target / (speed / 16);

        function updateCount() {
          count += increment;
          if (count < target) {
            counter.textContent = Math.ceil(count);
            requestAnimationFrame(updateCount);
          } else {
            counter.textContent = target;
          }
        }

        updateCount();
        observer.unobserve(counter);
      }
    });
  }, { threshold: 0.6 });

  counters.forEach(counter => {
    observer.observe(counter);
  });

});


// why section js
const whyCards = document.querySelectorAll(".why-card");

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("active");
    }
  });
}, { threshold: 0.2 });

whyCards.forEach(card => observer.observe(card));




// quote model open

const openBtn = document.getElementById("openModal");
const modal = document.getElementById("quoteModal");
const closeBtn = document.getElementById("closeModal");

openBtn.addEventListener("click", () => {
  modal.style.display = "flex";
  document.body.style.overflow = "hidden";
});

closeBtn.addEventListener("click", () => {
  modal.style.display = "none";
  document.body.style.overflow = "auto";
});

window.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.style.display = "none";
    document.body.style.overflow = "auto";
  }
});


// flip cards
const flipCards = document.querySelectorAll(".flip-card");

flipCards.forEach(card => {

  // Desktop hover
  card.addEventListener("mouseenter", () => {
    if (window.innerWidth > 992) {
      card.classList.add("flipped");
    }
  });

  card.addEventListener("mouseleave", () => {
    if (window.innerWidth > 992) {
      card.classList.remove("flipped");
    }
  });

  // Mobile tap
  card.addEventListener("click", () => {
    if (window.innerWidth <= 992) {
      card.classList.toggle("flipped");
    }
  });

});



//form

document.getElementById("contactForm").addEventListener("submit", function (e) {
  e.preventDefault();

  alert("Thank you! Your message has been submitted.");

  this.reset();
});






//captcha script
const captchaBox = document.getElementById("captchaBox");
const refreshBtn = document.getElementById("refreshCaptcha");
const captchaInput = document.getElementById("captchaInput");
const form = document.querySelector(".contact-form");

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

form.addEventListener("submit", function (e) {
  if (captchaInput.value !== currentCaptcha) {
    e.preventDefault();
    alert("Captcha does not match. Please try again.");
    generateCaptcha();
    captchaInput.value = "";
  }
});

// Generate first captcha on page load
generateCaptcha();



// testimonial slider
const slider = document.querySelector(".testimonial-slider");

let scrollAmount = 0;

setInterval(() => {
  scrollAmount += 320;
  if (scrollAmount >= slider.scrollWidth - slider.clientWidth) {
    scrollAmount = 0;
  }
  slider.scrollTo({
    left: scrollAmount,
    behavior: "smooth"
  });
}, 4000);


// Scroll To Top Functionality
