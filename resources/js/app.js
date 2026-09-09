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

    if (window.matchMedia('(hover: hover)').matches) {
        // Tilt cards: a small 3D lean toward the cursor on the showcase
        // images, for a bit of depth beyond a flat hover state.
        document.querySelectorAll('.tilt-card').forEach((card) => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const px = (e.clientX - rect.left) / rect.width - 0.5;
                const py = (e.clientY - rect.top) / rect.height - 0.5;
                card.style.transform =
                    `perspective(1200px) rotateX(${(-py * 6).toFixed(2)}deg) rotateY(${(px * 6).toFixed(2)}deg) scale(1.015)`;
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = '';
            });
        });

        // Expedition compass: the needle turns to point at the cursor as
        // it moves across the anchor photo in the showcase section.
        const compass = document.querySelector('.expedition-compass');
        const compassTrack = compass ? compass.closest('.compass-track') : null;
        if (compass && compassTrack) {
            const needle = compass.querySelector('.compass-needle');
            compassTrack.addEventListener('mousemove', (e) => {
                const rect = compass.getBoundingClientRect();
                const cx = rect.left + rect.width / 2;
                const cy = rect.top + rect.height / 2;
                const angle = Math.atan2(e.clientY - cy, e.clientX - cx) * (180 / Math.PI) + 90;
                needle.style.transform = `rotate(${angle}deg)`;
            });
            compassTrack.addEventListener('mouseleave', () => {
                needle.style.transform = 'rotate(0deg)';
            });
        }
    }

    // Showcase filmstrip: a swipeable, snap-scrolling gallery. Dots and
    // arrow buttons stay in sync with whichever slide is centered.
    const showcaseTrack = document.querySelector('[data-showcase-track]');
    if (showcaseTrack) {
        const slides = Array.from(showcaseTrack.querySelectorAll('[data-showcase-slide]'));
        const dots = Array.from(document.querySelectorAll('[data-showcase-dot]'));
        const prevBtn = document.querySelector('[data-showcase-prev]');
        const nextBtn = document.querySelector('[data-showcase-next]');
        let activeIndex = 0;

        const setActiveDot = (index) => {
            dots.forEach((dot, i) => {
                const isActive = i === index;
                dot.classList.toggle('bg-bash-ink', isActive);
                dot.classList.toggle('w-8', isActive);
                dot.classList.toggle('bg-bash-ink/20', !isActive);
                dot.classList.toggle('w-1.5', !isActive);
                dot.setAttribute('aria-current', String(isActive));
            });
        };

        const scrollToSlide = (index) => {
            const clamped = Math.max(0, Math.min(index, slides.length - 1));
            const slide = slides[clamped];
            if (slide) slide.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
        };

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            activeIndex = slides.indexOf(entry.target);
                            setActiveDot(activeIndex);
                        }
                    });
                },
                { root: showcaseTrack, threshold: 0.6 }
            );
            slides.forEach((slide) => observer.observe(slide));
        }

        dots.forEach((dot, i) => dot.addEventListener('click', () => scrollToSlide(i)));
        if (prevBtn) prevBtn.addEventListener('click', () => scrollToSlide(activeIndex - 1));
        if (nextBtn) nextBtn.addEventListener('click', () => scrollToSlide(activeIndex + 1));
    }
});