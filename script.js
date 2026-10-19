/* ==========================================================================
   DoodleSphere - Interactive Landing Page Logic
   ========================================================================== */

/**
 * CONFIGURATION: Single Configurable Purchase URL
 * Pointing directly to Razorpay Payment Page
 */
const PURCHASE_URL = "https://rzp.io/rzp/TdlY7r59";

document.addEventListener('DOMContentLoaded', function () {

    /* ===== WIRE UP ALL PURCHASE CTA BUTTONS ===== */
    const purchaseButtons = document.querySelectorAll('.js-purchase-btn');
    purchaseButtons.forEach(btn => {
        btn.setAttribute('href', PURCHASE_URL);
        btn.addEventListener('click', function (e) {
            // Optional analytics hook can be added here
            console.log('Redirecting to purchase URL:', PURCHASE_URL);
        });
    });

    /* ===== MOBILE NAVBAR TOGGLE ===== */
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const mobileDrawer = document.getElementById('mobileNavDrawer');

    if (hamburgerBtn && mobileDrawer) {
        hamburgerBtn.addEventListener('click', function () {
            const isOpen = mobileDrawer.classList.toggle('active');
            hamburgerBtn.setAttribute('aria-expanded', isOpen);

            const spans = hamburgerBtn.querySelectorAll('span');
            if (isOpen) {
                spans[0].style.transform = 'translateY(8.5px) rotate(45deg)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'translateY(-8.5px) rotate(-45deg)';
            } else {
                spans.forEach(s => { s.style.transform = ''; s.style.opacity = ''; });
            }
        });

        // Close when clicking mobile nav links
        mobileDrawer.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function () {
                mobileDrawer.classList.remove('active');
                hamburgerBtn.setAttribute('aria-expanded', 'false');
                hamburgerBtn.querySelectorAll('span').forEach(s => {
                    s.style.transform = '';
                    s.style.opacity = '';
                });
            });
        });

        // Close when clicking outside
        document.addEventListener('click', function (e) {
            if (!hamburgerBtn.contains(e.target) && !mobileDrawer.contains(e.target)) {
                mobileDrawer.classList.remove('active');
                hamburgerBtn.setAttribute('aria-expanded', 'false');
                hamburgerBtn.querySelectorAll('span').forEach(s => {
                    s.style.transform = '';
                    s.style.opacity = '';
                });
            }
        });
    }

    /* ===== STICKY NAVBAR SCROLL SHADOW ===== */
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', function () {
        if (window.scrollY > 40) {
            navbar.style.boxShadow = '0 4px 20px rgba(16, 27, 85, 0.09)';
        } else {
            navbar.style.boxShadow = '0 2px 8px rgba(16, 27, 85, 0.04)';
        }
    });

    /* ===== SMOOTH SCROLLING FOR ANCHOR LINKS ===== */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#' || targetId === '') return;
            const targetEl = document.querySelector(targetId);
            if (targetEl) {
                e.preventDefault();
                const headerOffset = 80;
                const elementPosition = targetEl.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    /* ===== WORKSHEET PREVIEW HOVER & CLICK EXPAND ===== */
    const worksheetCards = document.querySelectorAll('.worksheet-card');
    worksheetCards.forEach(card => {
        card.addEventListener('click', function () {
            // Subtle click bounce effect
            this.style.transform = 'scale(0.97)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
        });
    });

    console.log('DoodleSphere landing page initialized successfully.');
});
