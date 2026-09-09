// BASH MANILA — landing page interactions
// No framework needed: mobile nav toggle + scroll-reveal via IntersectionObserver.

document.addEventListener('DOMContentLoaded', () => {
    // Mobile nav toggle
    const navToggle = document.getElementById('nav-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    if (navToggle && mobileMenu) {
        navToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            navToggle.setAttribute(
                'aria-expanded',
                mobileMenu.classList.contains('hidden') ? 'false' : 'true'
            );
        });
    }

    // Scroll reveal: fade + rise each [data-reveal] section in as it enters view
    const revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && revealEls.length) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.15, rootMargin: '0px 0px -60px 0px' }
        );
        revealEls.forEach((el) => observer.observe(el));
    } else {
        revealEls.forEach((el) => el.classList.add('is-visible'));
    }
});
