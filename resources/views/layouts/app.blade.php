<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes">
    <title>@yield('title', config('app.name', 'UtreBytes'))</title>
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="navbar__inner">
            <a class="navbar__brand" href="{{ route('inicio') }}">
                <img src="{{ asset('images/logo2.png') }}" alt="UtreBytes" class="navbar__logo">
            </a>

            <button class="navbar__toggle" type="button" aria-label="Abrir menú" aria-expanded="false" aria-controls="navbarMenu">
                <span aria-hidden="true"></span>
            </button>

            <ul class="navbar__menu" id="navbarMenu">
                <li><a class="navbar__link" href="{{ route('inicio') }}">Inicio</a></li>
                <li class="navbar__dropdown">
                    <a class="navbar__link" href="{{ route('caracteristicas') }}">
                        Servicios
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="navbar__dropdown-menu">
                        <li>
                            <a href="{{ route('caracteristicas') }}" class="navbar__dropdown-item">
                                <div class="navbar__dropdown-content">
                                    <div>
                                        <span class="navbar__dropdown-title">Soluciones digitales a medida</span>
                                        <span class="navbar__dropdown-desc">Software personalizado para tu negocio</span>
                                    </div>
                                    <svg class="navbar__dropdown-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="16 18 22 12 16 6"></polyline>
                                        <polyline points="8 6 2 12 8 18"></polyline>
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('caracteristicas') }}" class="navbar__dropdown-item">
                                <div class="navbar__dropdown-content">
                                    <div>
                                        <span class="navbar__dropdown-title">Inteligencia Artificial</span>
                                        <span class="navbar__dropdown-desc">IA integrada y orientada a resultados</span>
                                    </div>
                                    <svg class="navbar__dropdown-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <path d="M12 1v6m0 6v6M4.22 4.22l4.24 4.24m5.08 5.08l4.24 4.24M1 12h6m6 0h6M4.22 19.78l4.24-4.24m5.08-5.08l4.24-4.24"></path>
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('caracteristicas') }}" class="navbar__dropdown-item">
                                <div class="navbar__dropdown-content">
                                    <div>
                                        <span class="navbar__dropdown-title">ERP Inteligente y operativo</span>
                                        <span class="navbar__dropdown-desc">Gestión empresarial potenciada con IA</span>
                                    </div>
                                    <svg class="navbar__dropdown-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M12 6v6l4 2"></path>
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('caracteristicas') }}" class="navbar__dropdown-item">
                                <div class="navbar__dropdown-content">
                                    <div>
                                        <span class="navbar__dropdown-title">Automatización y agentes autónomos</span>
                                        <span class="navbar__dropdown-desc">Convertimos procesos repetitivos en sistemas automáticos</span>
                                    </div>
                                    <svg class="navbar__dropdown-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="9" cy="21" r="1"></circle>
                                        <circle cx="20" cy="21" r="1"></circle>
                                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('caracteristicas') }}" class="navbar__dropdown-item">
                                <div class="navbar__dropdown-content">
                                    <div>
                                        <span class="navbar__dropdown-title">Business Intelligence</span>
                                        <span class="navbar__dropdown-desc">Analítica y datos convertidos en decisiones</span>
                                    </div>
                                    <svg class="navbar__dropdown-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <line x1="12" y1="2" x2="12" y2="22"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('caracteristicas') }}" class="navbar__dropdown-item">
                                <div class="navbar__dropdown-content">
                                    <div>
                                        <span class="navbar__dropdown-title">Ciberseguridad</span>
                                        <span class="navbar__dropdown-desc">Seguridad informática y normativas</span>
                                    </div>
                                    <svg class="navbar__dropdown-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('caracteristicas') }}" class="navbar__dropdown-item">
                                <div class="navbar__dropdown-content">
                                    <div>
                                        <span class="navbar__dropdown-title">Soporte, mantenimiento y SLA</span>
                                        <span class="navbar__dropdown-desc">Acompañamiento continuo post entrega</span>
                                    </div>
                                    <svg class="navbar__dropdown-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 1 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('caracteristicas') }}" class="navbar__dropdown-item">
                                <div class="navbar__dropdown-content">
                                    <div>
                                        <span class="navbar__dropdown-title">Infraestructura IT, Comunicaciones y Cloud</span>
                                        <span class="navbar__dropdown-desc">Soluciones completas de infraestructura tecnológica</span>
                                    </div>
                                    <svg class="navbar__dropdown-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li><a class="navbar__link" href="{{ route('recursos') }}">Recursos</a></li>
                <li><a class="navbar__link" href="{{ route('utrebytes') }}">Conócenos</a></li>
                <li><a class="navbar__link" href="{{ route('partners') }}">Clientes</a></li>
                <!-- <li><a class="navbar__link" href="{{ route('clientes') }}">Clientes</a></li> -->
                <li><a class="navbar__link" href="{{ route('contacto') }}">Contacto</a></li>
                <!-- <li class="navbar__menu-item--cta">
                    <a class="navbar__link navbar__link--cta" href="{{ route('accede') }}">Accede</a>
                </li> -->
            </ul>
        </div>
    </nav>

    <!-- Main Content -->

        @yield('content')

    <!-- Chatbot Widget -->
    @include('components.chatbot-widget')

    <!-- Cookie Banner -->
    @include('components.cookie-banner')
    <footer>
            <div class="footer-content">
                <div class="footer-section">
                    <h4>UtreBytes</h4>
                    <p>Soluciones tecnológicas innovadoras para el futuro de tu negocio.</p>
                </div>
                <div class="footer-section">
                    <h4>Producto</h4>
                    <ul>
                        <li><a href="{{ route('caracteristicas') }}">Servicios</a></li>
                        <li><a href="{{ route('caracteristicas') }}">Precios</a></li>
                        <li><a href="#">Seguridad</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Empresa</h4>
                    <ul>
                        <li><a href="{{ route('utrebytes') }}">Acerca de</a></li>
                        <li><a href="{{ route('recursos') }}">Blog</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="{{ route('terminos-cookies') }}">Términos y Cookies</a></li>
                        <li><a href="#">Datos</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-bottom">
                <p class="footer-text">&copy; 2025 UtreBytes. Todos los derechos reservados.</p>
                <div class="footer-links">
                    <a href="https://x.com/?lang=es">Twitter</a>
                    <a href="https://es.linkedin.com/">LinkedIn</a>
                    <a href="https://github.com/?locale=es">GitHub</a>
                </div>
            </div>
        </footer>
</body>
</html>
