/**
 * Velrox Global Seafood Trading — Main JS
 */
(function () {
    'use strict';

    /* ============================================================
       SCROLL ANIMATIONS
       ============================================================ */
    function initScrollAnimations() {
        var els = document.querySelectorAll(
            '.animate-fade-up, .animate-fade-in, .animate-slide-left, .animate-slide-right'
        );
        if (!els.length) return;

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

        els.forEach(function (el) { observer.observe(el); });
    }

    /* ============================================================
       STICKY HEADER — transparent over hero (homepage), solid elsewhere
       ============================================================ */
    function initStickyHeader() {
        var header = document.getElementById('site-header');
        if (!header) return;

        var hasHero = document.querySelector('.hero-carousel') || document.querySelector('.hero-section');

        function onScroll() {
            if (window.scrollY > 80) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }

        if (hasHero) {
            window.addEventListener('scroll', onScroll, { passive: true });
            onScroll();
        }
        // Inner pages receive .site-header--solid from PHP, no JS needed
    }

    /* ============================================================
       MOBILE MENU
       ============================================================ */
    function initMobileMenu() {
        var toggle   = document.getElementById('mobile-toggle');
        var closeBtn = document.getElementById('mobile-close');
        var menu     = document.getElementById('mobile-menu');
        if (!toggle || !menu) return;

        function openMenu() {
            menu.classList.add('open');
            menu.setAttribute('aria-hidden', 'false');
            toggle.setAttribute('aria-expanded', 'true');
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            menu.classList.remove('open');
            menu.setAttribute('aria-hidden', 'true');
            toggle.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }

        toggle.addEventListener('click', function () {
            if (menu.classList.contains('open')) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        if (closeBtn) closeBtn.addEventListener('click', closeMenu);

        // Close on link click
        var menuLinks = menu.querySelectorAll('a');
        menuLinks.forEach(function (link) {
            link.addEventListener('click', closeMenu);
        });

        // Close on ESC
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeMenu();
        });
    }

    /* ============================================================
       HERO CAROUSEL
       ============================================================ */
    function initHeroCarousel() {
        var carousel = document.querySelector('.hero-carousel');
        if (!carousel) return;

        var slides   = carousel.querySelectorAll('.hero-slide');
        var dots     = carousel.querySelectorAll('.hero-dot');
        var prevBtn  = carousel.querySelector('.hero-prev');
        var nextBtn  = carousel.querySelector('.hero-next');
        var total    = slides.length;
        var current  = 0;
        var timer    = null;
        var interval = 5500;

        function goTo(index) {
            slides[current].classList.remove('active');
            if (dots[current]) dots[current].classList.remove('active');
            current = (index + total) % total;
            slides[current].classList.add('active');
            if (dots[current]) dots[current].classList.add('active');
        }

        function startTimer() {
            clearInterval(timer);
            timer = setInterval(function () { goTo(current + 1); }, interval);
        }

        function stopTimer() { clearInterval(timer); }

        goTo(0);
        startTimer();

        if (prevBtn) {
            prevBtn.addEventListener('click', function () { goTo(current - 1); startTimer(); });
        }
        if (nextBtn) {
            nextBtn.addEventListener('click', function () { goTo(current + 1); startTimer(); });
        }

        dots.forEach(function (dot, i) {
            dot.addEventListener('click', function () { goTo(i); startTimer(); });
        });

        carousel.addEventListener('mouseenter', stopTimer);
        carousel.addEventListener('mouseleave', startTimer);

        // Touch swipe
        var touchStartX = 0;
        carousel.addEventListener('touchstart', function (e) {
            touchStartX = e.changedTouches[0].clientX;
        }, { passive: true });
        carousel.addEventListener('touchend', function (e) {
            var diff = touchStartX - e.changedTouches[0].clientX;
            if (Math.abs(diff) > 50) {
                goTo(diff > 0 ? current + 1 : current - 1);
                startTimer();
            }
        }, { passive: true });
    }

    /* ============================================================
       SMOOTH SCROLL FOR ANCHOR LINKS
       ============================================================ */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
            anchor.addEventListener('click', function (e) {
                var target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    }

    /* ============================================================
       INIT
       ============================================================ */
    document.addEventListener('DOMContentLoaded', function () {
        initScrollAnimations();
        initStickyHeader();
        initMobileMenu();
        initHeroCarousel();
        initSmoothScroll();
    });

})();
