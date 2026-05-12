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
       STICKY HEADER
       ============================================================ */
    function initStickyHeader() {
        var header = document.getElementById('site-header');
        if (!header) return;

        function onScroll() {
            if (window.scrollY > 40) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
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
       HERO PARALLAX
       ============================================================ */
    function initParallax() {
        var heroBg = document.getElementById('hero-parallax');
        if (!heroBg) return;

        function onScroll() {
            var scrollY = window.scrollY;
            heroBg.style.transform = 'translateY(' + (scrollY * 0.3) + 'px)';
        }
        window.addEventListener('scroll', onScroll, { passive: true });
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
        initParallax();
        initSmoothScroll();
    });

})();
