function initBoletimExpandableTexts() {
    const wraps = Array.from(document.querySelectorAll('.boletim-feed__text-wrap'));

    wraps.forEach((wrap) => {
        const textEl = wrap.querySelector('.boletim-feed__text');
        const toggle = wrap.querySelector('.boletim-feed__toggle');
        const label = toggle?.querySelector('.boletim-feed__toggle-label');

        if (!textEl || !toggle || !label) {
            return;
        }

        const getCollapsedHeight = () => getComputedStyle(wrap).getPropertyValue('--boletim-text-max-height').trim() || '7.5rem';

        const updateToggle = () => {
            if (wrap.classList.contains('is-animating') || wrap.classList.contains('is-expanded')) {
                toggle.hidden = false;
                wrap.classList.add('has-overflow');
                return;
            }

            textEl.style.maxHeight = '';
            const hasOverflow = textEl.scrollHeight > textEl.clientHeight + 2;
            toggle.hidden = !hasOverflow;
            wrap.classList.toggle('has-overflow', hasOverflow);
        };

        const formatHeight = (value) => (typeof value === 'number' ? `${value}px` : value);

        const runHeightTransition = (fromHeight, toHeight, onComplete) => {
            wrap.classList.add('is-animating');
            textEl.style.maxHeight = formatHeight(fromHeight);

            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    textEl.style.maxHeight = formatHeight(toHeight);
                });
            });

            const handleEnd = (event) => {
                if (event.propertyName !== 'max-height' || event.target !== textEl) {
                    return;
                }

                textEl.removeEventListener('transitionend', handleEnd);
                wrap.classList.remove('is-animating');
                onComplete();
            };

            textEl.addEventListener('transitionend', handleEnd);
        };

        toggle.addEventListener('click', () => {
            const isExpanded = wrap.classList.contains('is-expanded');

            if (wrap.classList.contains('is-animating')) {
                return;
            }

            if (isExpanded) {
                const collapsedHeight = getCollapsedHeight();
                const startHeight = textEl.scrollHeight;

                wrap.classList.add('is-collapsing');
                wrap.classList.remove('is-expanded');
                label.textContent = 'Mostrar mais';
                toggle.setAttribute('aria-expanded', 'false');

                runHeightTransition(startHeight, collapsedHeight, () => {
                    wrap.classList.remove('is-collapsing');
                    textEl.style.maxHeight = '';
                    updateToggle();
                });

                return;
            }

            const startHeight = textEl.getBoundingClientRect().height;
            const endHeight = textEl.scrollHeight;

            wrap.classList.remove('is-collapsing');
            wrap.classList.add('is-expanded');
            label.textContent = 'Mostrar menos';
            toggle.setAttribute('aria-expanded', 'true');

            runHeightTransition(startHeight, endHeight, () => {
                textEl.style.maxHeight = 'none';
            });
        });

        updateToggle();

        if ('ResizeObserver' in window) {
            const observer = new ResizeObserver(updateToggle);
            observer.observe(textEl);
        } else {
            window.addEventListener('resize', updateToggle);
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initBoletimExpandableTexts();

    const videos = Array.from(document.querySelectorAll('.boletim-feed video'));

    if (videos.length && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                const video = entry.target;

                if (entry.isIntersecting) {
                    video.play().catch(() => {
                        // Alguns navegadores bloqueiam autoplay até a primeira interação.
                    });
                    return;
                }

                video.pause();
            });
        }, {
            threshold: 0.55,
        });

        videos.forEach((video) => {
            video.muted = true;
            observer.observe(video);
        });
    }

    const lightbox = document.getElementById('boletim-lightbox');
    const lightboxImg = document.getElementById('boletim-lightbox-img');
    const lightboxClose = document.querySelector('.boletim-lightbox__close');
    const lightboxTriggers = Array.from(document.querySelectorAll('.boletim-lightbox-trigger'));
    const pageAside = document.querySelector('aside');

    if (!lightbox || !lightboxImg || !lightboxClose || !lightboxTriggers.length) {
        return;
    }

    function syncLightboxBounds() {
        let rightGap = 0;

        if (pageAside) {
            const asideRect = pageAside.getBoundingClientRect();

            if (asideRect.width > 0 && asideRect.right > asideRect.left) {
                rightGap = Math.max(0, asideRect.width);
            }
        }

        lightbox.style.setProperty('--boletim-lightbox-right-gap', `${rightGap}px`);
    }

    function openLightbox(src, alt) {
        lightboxImg.src = src || '';
        lightboxImg.alt = alt || '';
        document.documentElement.style.overflow = 'hidden';
        document.body.style.overflow = 'hidden';
        syncLightboxBounds();
        lightbox.classList.add('active');
        lightbox.setAttribute('aria-hidden', 'false');
    }

    function closeLightbox() {
        lightbox.classList.remove('active');
        lightbox.setAttribute('aria-hidden', 'true');
        lightboxImg.src = '';
        document.documentElement.style.overflow = '';
        document.body.style.overflow = '';
    }

    syncLightboxBounds();
    window.addEventListener('resize', syncLightboxBounds);

    lightboxTriggers.forEach((trigger) => {
        trigger.addEventListener('click', () => {
            const image = trigger.querySelector('img');
            openLightbox(trigger.dataset.full || image?.src, image?.alt || '');
        });
    });

    lightboxClose.addEventListener('click', closeLightbox);

    lightbox.addEventListener('click', (event) => {
        if (event.target === lightbox) {
            closeLightbox();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && lightbox.classList.contains('active')) {
            closeLightbox();
        }
    });
});
