/* DoodleSphere – script.js */
document.addEventListener('DOMContentLoaded', function () {

    /* ===== MOBILE NAV ===== */
    const hamburger = document.getElementById('hamburger');
    const navMenu   = document.getElementById('navMenu');

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function () {
            navMenu.classList.toggle('open');
            const spans = hamburger.querySelectorAll('span');
            if (navMenu.classList.contains('open')) {
                spans[0].style.transform = 'rotate(45deg) translate(5.5px, 6px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translate(5.5px, -6px)';
            } else {
                spans.forEach(s => { s.style.transform = ''; s.style.opacity = ''; });
            }
        });
        // Close when a link is clicked
        navMenu.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', () => {
                navMenu.classList.remove('open');
                hamburger.querySelectorAll('span').forEach(s => { s.style.transform = ''; s.style.opacity = ''; });
            });
        });
        // Close on outside click
        document.addEventListener('click', e => {
            if (!hamburger.contains(e.target) && !navMenu.contains(e.target)) {
                navMenu.classList.remove('open');
                hamburger.querySelectorAll('span').forEach(s => { s.style.transform = ''; s.style.opacity = ''; });
            }
        });
    }

    /* ===== STICKY NAVBAR SHADOW ===== */
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 60) {
            navbar.style.boxShadow = '0 4px 28px rgba(0,0,0,0.12)';
        } else {
            navbar.style.boxShadow = '0 2px 15px rgba(0,0,0,0.07)';
        }
    });

    /* ===== FAQ ACCORDION ===== */
    document.querySelectorAll('.faq-q').forEach(btn => {
        btn.addEventListener('click', function () {
            const item   = this.closest('.faq-item');
            const isOpen = item.classList.contains('open');
            // close all
            document.querySelectorAll('.faq-item').forEach(i => {
                i.classList.remove('open');
                i.querySelector('.faq-q').setAttribute('aria-expanded', 'false');
            });
            if (!isOpen) {
                item.classList.add('open');
                this.setAttribute('aria-expanded', 'true');
            }
        });
    });

    /* ===== SMOOTH SCROLL ===== */
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                const top = target.getBoundingClientRect().top + window.scrollY - 76;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });

    /* ===== SCROLL REVEAL ===== */
    const revealEls = document.querySelectorAll(
        '.b-icon-item, .perf-card, .review-card, .faq-item, ' +
        '.hero-left, .hero-right, .col-text, .col-img, ' +
        '.digital-left, .digital-center, .digital-right, ' +
        '.step, .banner-title, .banner-sub, .center-title, ' +
        '.accent-title, .section-h3, .cta-h2, .cta-sub, .cta-words'
    );
    revealEls.forEach((el, i) => {
        el.classList.add('anim');
        if (i % 3 === 1) el.classList.add('delay-1');
        if (i % 3 === 2) el.classList.add('delay-2');
    });

    const io = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                io.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -30px 0px' });

    revealEls.forEach(el => io.observe(el));

    /* ===== BUTTON RIPPLE EFFECT ===== */
    document.querySelectorAll('.btn-orange-large, .btn-outline-orange').forEach(btn => {
        btn.addEventListener('click', function (e) {
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const ripple = document.createElement('span');
            ripple.style.cssText = `
                position:absolute; width:${size}px; height:${size}px;
                left:${e.clientX - rect.left - size / 2}px;
                top:${e.clientY - rect.top - size / 2}px;
                background:rgba(255,255,255,0.38); border-radius:50%;
                transform:scale(0); animation:ripple .6s linear;
                pointer-events:none;
            `;
            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);
            setTimeout(() => ripple.remove(), 620);
        });
    });

    /* Inject ripple keyframe once */
    const style = document.createElement('style');
    style.textContent = '@keyframes ripple{to{transform:scale(2.5);opacity:0}}';
    document.head.appendChild(style);

    /* ===== ANIMATED COUNTERS ===== */
    function animCount(el, target, dur = 1800) {
        let start = null;
        function step(ts) {
            if (!start) start = ts;
            const progress = Math.min((ts - start) / dur, 1);
            const val = Math.floor(progress * target);
            el.textContent = val.toLocaleString() + '+';
            if (progress < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }

    const countObs = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el  = entry.target;
                const num = parseInt(el.textContent.replace(/[^0-9]/g, ''));
                if (num > 0) animCount(el, num);
                countObs.unobserve(el);
            }
        });
    }, { threshold: 0.6 });

    document.querySelectorAll('.b-icon-item strong').forEach(el => {
        if (/\d/.test(el.textContent)) countObs.observe(el);
    });

});
