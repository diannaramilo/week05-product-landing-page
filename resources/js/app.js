// BASH MANILA — landing page interactions
// No framework needed: mobile nav toggle, scroll-reveal, cursor-spotlight
// cards, and the magnetic-clasp click demo, all via vanilla DOM APIs.

document.addEventListener('DOMContentLoaded', () => {
    // Mobile nav toggle — animates open/close via the .is-open class
    // (see .mobile-menu in app.css) instead of an instant hidden/block swap.
    const navToggle = document.getElementById('nav-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    if (navToggle && mobileMenu) {
        navToggle.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.toggle('is-open');
            navToggle.setAttribute('aria-expanded', String(isOpen));
        });
    }

    // Scroll reveal: fade + rise each .reveal element in as it enters view,
    // and reverse it back out when scrolled past — so it replays both ways.
    const revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && revealEls.length) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    entry.target.classList.toggle('is-visible', entry.isIntersecting);
                });
            },
            { threshold: 0.15, rootMargin: '0px 0px -60px 0px' }
        );
        revealEls.forEach((el) => observer.observe(el));
    } else {
        revealEls.forEach((el) => el.classList.add('is-visible'));
    }

    // Cursor spotlight: track the pointer position inside each .spotlight
    // card and expose it as CSS custom properties, so the glow in app.css
    // can follow the cursor with a pure-CSS radial gradient.
    const spotlightEls = document.querySelectorAll('.spotlight');
    if (window.matchMedia('(hover: hover)').matches) {
        spotlightEls.forEach((card) => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                card.style.setProperty('--mx', `${e.clientX - rect.left}px`);
                card.style.setProperty('--my', `${e.clientY - rect.top}px`);
            });
        });
    }

    // Magnetic clasp card: click (or Enter/Space) snaps the two chrome
    // halves together with a small bounce and a pulse ring, then snaps
    // back open — a working demo of the feature rather than a description.
    const claspCard = document.getElementById('clasp-card');
    if (claspCard) {
        const left = document.getElementById('clasp-left');
        const right = document.getElementById('clasp-right');
        const label = document.getElementById('clasp-label');

        const toggleClasp = () => {
            const wasShut = claspCard.getAttribute('aria-pressed') === 'true';
            const isShut = !wasShut;

            claspCard.setAttribute('aria-pressed', String(isShut));
            left.classList.toggle('is-shut', isShut);
            right.classList.toggle('is-shut', isShut);
            if (label) label.textContent = isShut ? 'Locked in.' : 'Tap to click it shut';

            claspCard.classList.remove('clasp-snap');
            // Force reflow so the animation restarts on repeated clicks.
            void claspCard.offsetWidth;
            claspCard.classList.add('clasp-snap');
        };

        claspCard.addEventListener('click', toggleClasp);
        claspCard.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                toggleClasp();
            }
        });
    }
});