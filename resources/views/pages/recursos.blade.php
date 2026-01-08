@extends('layouts.app')

@section('title', 'Recursos - UtreBytes')

@section('content')
<div class="recursos-container">
    <!-- Header -->
    <section class="recursos-header" style="background-image: linear-gradient(rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.6)), url('{{ asset('images/heros/hero_recursos.jpg') }}');">
        <div class="container">
            <h1>RECURSOS PARA DESARROLLADORES</h1>
            <p>Todo lo que necesitas para integrar y maximizar nuestras soluciones</p>
        </div>
    </section>

    <!-- Documentación Técnica Section -->
    <section class="recursos-section recursos-docs">
        <div class="container">
            <div class="recursos-subsection-header">
                <h2>Documentación Técnica</h2>
                <p>Accede a nuestra completa documentación técnica y guías de integración</p>
            </div>

            <div class="recursos-grid">
                <!-- Documentación 1 -->
                <div class="recurso-card">
                    <div class="recurso-card__header">
                        <div class="recurso-card__icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h3 class="recurso-card__title">API Documentation</h3>
                    </div>
                    <div class="recurso-card__content">
                        <p class="recurso-card__description">
                            Referencia completa de nuestras APIs con ejemplos de código, endpoints, parámetros y respuestas detalladas.
                        </p>
                        <div class="recurso-card__links">
                            <a href="#" class="recurso-card__link" target="_blank">Ver Documentación</a>
                            <a href="#" class="recurso-card__link" target="_blank">Especificación OpenAPI</a>
                        </div>
                    </div>
                </div>

                <!-- Documentación 2 -->
                <div class="recurso-card">
                    <div class="recurso-card__header">
                        <div class="recurso-card__icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="recurso-card__title">SDK y Bibliotecas</h3>
                    </div>
                    <div class="recurso-card__content">
                        <p class="recurso-card__description">
                            Kits de desarrollo oficiales para JavaScript, Python, PHP, Java y más lenguajes populares.
                        </p>
                        <div class="recurso-card__links">
                            <a href="#" class="recurso-card__link" target="_blank">Descargar SDKs</a>
                            <a href="#" class="recurso-card__link" target="_blank">Repositorio GitHub</a>
                        </div>
                    </div>
                </div>

                <!-- Documentación 3 -->
                <div class="recurso-card">
                    <div class="recurso-card__header">
                        <div class="recurso-card__icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="recurso-card__title">Ejemplos de Código</h3>
                    </div>
                    <div class="recurso-card__content">
                        <p class="recurso-card__description">
                            Ejemplos prácticos listos para usar en diferentes lenguajes de programación y frameworks.
                        </p>
                        <div class="recurso-card__links">
                            <a href="#" class="recurso-card__link" target="_blank">Ver Ejemplos</a>
                            <a href="#" class="recurso-card__link" target="_blank">Descargar Repositorio</a>
                        </div>
                    </div>
                </div>

                <!-- Documentación 4 -->
                <div class="recurso-card">
                    <div class="recurso-card__header">
                        <div class="recurso-card__icon">
                            <i class="fas fa-puzzle-piece"></i>
                        </div>
                        <h3 class="recurso-card__title">Guías de Integración</h3>
                    </div>
                    <div class="recurso-card__content">
                        <p class="recurso-card__description">
                            Pasos detallados para integrar nuestros servicios con tus aplicaciones existentes.
                        </p>
                        <div class="recurso-card__links">
                            <a href="#" class="recurso-card__link" target="_blank">Leer Guías</a>
                            <a href="#" class="recurso-card__link" target="_blank">Casos de Uso</a>
                        </div>
                    </div>
                </div>

                <!-- Documentación 5 -->
                <div class="recurso-card">
                    <div class="recurso-card__header">
                        <div class="recurso-card__icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="recurso-card__title">Seguridad y Autenticación</h3>
                    </div>
                    <div class="recurso-card__content">
                        <p class="recurso-card__description">
                            Información sobre OAuth, JWT, API Keys y mejores prácticas de seguridad en APIs.
                        </p>
                        <div class="recurso-card__links">
                            <a href="#" class="recurso-card__link" target="_blank">Guía de Seguridad</a>
                            <a href="#" class="recurso-card__link" target="_blank">Estándares de Autenticación</a>
                        </div>
                    </div>
                </div>

                <!-- Documentación 6 -->
                <div class="recurso-card">
                    <div class="recurso-card__header">
                        <div class="recurso-card__icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3 class="recurso-card__title">Herramientas y Utilidades</h3>
                    </div>
                    <div class="recurso-card__content">
                        <p class="recurso-card__description">
                            Postman collections, CLI tools, y otras utilidades para acelerar tu desarrollo.
                        </p>
                        <div class="recurso-card__links">
                            <a href="#" class="recurso-card__link" target="_blank">Descargar Herramientas</a>
                            <a href="#" class="recurso-card__link" target="_blank">Ver Utilidades</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog y Artículos Section -->
    <section class="recursos-section recursos-blog">
        <div class="container">
            <div class="recursos-subsection-header">
                <h2>Blog y Artículos</h2>
                <p>Mantente actualizado con nuestras últimas publicaciones sobre tecnología, innovación y mejores prácticas</p>
            </div>

            <div class="blog-grid">
                <!-- Blog Post 1 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="blog-content">
                        <p class="blog-category">Tecnología</p>
                        <h3 class="blog-title">El Futuro de las APIs en 2025</h3>
                        <p class="blog-excerpt">
                            Explora las tendencias más importantes en desarrollo de APIs, desde GraphQL hasta arquitecturas serverless y cómo afectarán a tu desarrollo.
                        </p>
                        <div class="blog-meta">
                            <span class="blog-date">23 de Diciembre, 2025</span>
                            <span class="blog-read-time">5 min lectura</span>
                        </div>
                        <a href="#" class="blog-link" target="_blank">Leer Artículo</a>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="blog-content">
                        <p class="blog-category">Seguridad</p>
                        <h3 class="blog-title">Seguridad en APIs: Guía Completa 2025</h3>
                        <p class="blog-excerpt">
                            Aprende las mejores prácticas para proteger tus APIs contra ataques comunes, implementar OAuth 2.0 correctamente y validar datos de entrada.
                        </p>
                        <div class="blog-meta">
                            <span class="blog-date">18 de Diciembre, 2025</span>
                            <span class="blog-read-time">8 min lectura</span>
                        </div>
                        <a href="#" class="blog-link" target="_blank">Leer Artículo</a>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="blog-content">
                        <p class="blog-category">Performance</p>
                        <h3 class="blog-title">Optimización de Aplicaciones UtreBytes</h3>
                        <p class="blog-excerpt">
                            Descubre cómo optimizar tus consultas a nuestras APIs, implementar caché efectivo y reducir latencia en tus aplicaciones.
                        </p>
                        <div class="blog-meta">
                            <span class="blog-date">12 de Diciembre, 2025</span>
                            <span class="blog-read-time">6 min lectura</span>
                        </div>
                        <a href="#" class="blog-link" target="_blank">Leer Artículo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
