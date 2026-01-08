document.addEventListener('DOMContentLoaded', () => {
    const cookieBanner = document.getElementById('cookieBanner');
    const cookieAccept = document.getElementById('cookieAccept');
    const cookieReject = document.getElementById('cookieReject');
    const cookieClose = document.querySelector('.cookie-banner__close');

    const COOKIE_NAME = 'utrebytes_cookies_consent';
    const COOKIE_EXPIRY = 365; // días

    // Verificar si el usuario ya aceptó/rechazó las cookies
    const hasConsented = getCookie(COOKIE_NAME);

    if (!hasConsented) {
        // Mostrar el banner después de 500ms
        setTimeout(() => {
            cookieBanner.classList.add('show');
        }, 500);
    }

    // Aceptar cookies
    cookieAccept.addEventListener('click', () => {
        setCookie(COOKIE_NAME, 'accepted', COOKIE_EXPIRY);
        closeBanner();
        // Aquí puedes cargar scripts de analítica, etc.
        loadAnalytics();
    });

    // Rechazar cookies
    cookieReject.addEventListener('click', () => {
        setCookie(COOKIE_NAME, 'rejected', COOKIE_EXPIRY);
        closeBanner();
    });

    // Cerrar banner
    cookieClose.addEventListener('click', () => {
        closeBanner();
    });

    function closeBanner() {
        cookieBanner.classList.remove('show');
    }

    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        const expires = 'expires=' + date.toUTCString();
        document.cookie = name + '=' + value + ';' + expires + ';path=/;SameSite=Strict';
    }

    function getCookie(name) {
        const nameEQ = name + '=';
        const cookies = document.cookie.split(';');
        for (let cookie of cookies) {
            cookie = cookie.trim();
            if (cookie.indexOf(nameEQ) === 0) {
                return cookie.substring(nameEQ.length);
            }
        }
        return null;
    }

    function loadAnalytics() {
        // Ejemplo: cargar Google Analytics u otro servicio
        // window.gtag && window.gtag('consent', 'update', { 'analytics_storage': 'granted' });
    }
});
