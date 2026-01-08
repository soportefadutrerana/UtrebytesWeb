import './bootstrap';
import './cookies';
import './chatbot';

const DESKTOP_BREAKPOINT = 1024;

document.addEventListener('DOMContentLoaded', () => {
    const navbars = document.querySelectorAll('.navbar');

    if (!navbars.length) {
        return;
    }

    navbars.forEach((navbar) => {
        const toggle = navbar.querySelector('.navbar__toggle');
        const menu = navbar.querySelector('.navbar__menu');

        if (!toggle || !menu) {
            return;
        }

        const setMenuState = (isOpen) => {
            navbar.classList.toggle('is-open', isOpen);
            toggle.setAttribute('aria-expanded', String(isOpen));
        };

        const closeMenu = () => setMenuState(false);

        toggle.addEventListener('click', () => {
            const nextState = !navbar.classList.contains('is-open');
            setMenuState(nextState);
        });

        const navLinks = menu.querySelectorAll('a');
        navLinks.forEach((link) => {
            link.addEventListener('click', () => {
                if (window.innerWidth < DESKTOP_BREAKPOINT) {
                    closeMenu();
                }
            });
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth >= DESKTOP_BREAKPOINT) {
                closeMenu();
            }
        });
    });

    // Features "Ver más" functionality
    const showMoreBtn = document.getElementById('showMoreBtn');
    if (showMoreBtn) {
        const hiddenCards = document.querySelectorAll('.feature-card.hidden');
        let isExpanded = false;

        showMoreBtn.addEventListener('click', () => {
            isExpanded = !isExpanded;
            
            hiddenCards.forEach((card) => {
                if (isExpanded) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });

            showMoreBtn.classList.toggle('expanded', isExpanded);
            showMoreBtn.textContent = isExpanded 
                ? 'Ver menos características '
                : 'Ver más características ';
            
            const icon = document.createElement('i');
            icon.className = 'fas fa-chevron-down';
            showMoreBtn.appendChild(icon);
        });
    }
});
