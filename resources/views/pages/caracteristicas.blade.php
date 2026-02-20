@extends('layouts.app')

@section('title', 'Servicios - UtreBytes')

@section('content')
<div class="characteristics-container">
    <section class="services-hero" style="background-image: url('{{ asset('images/heros/hero_servicios.jpg') }}');">
        <div class="container">
            
            <div class="services-hero__panel">
                <span class="services-hero__badge">SOLUCIONES TECNOLÓGICAS AVANZADAS</span>

                <h1>Nuestros Servicios<br>para Impulsar tu Empresa</h1>

                <p>
                    Descubre todas las soluciones digitales, inteligencia artificial,
                    automatización e infraestructura que convierten a UtreBytes
                    en tu socio tecnológico estratégico.
                </p>

                <div class="services-hero__buttons">
                    <a href="{{ route('contacto') }}" class="btn-primary">Solicitar Asesoría</a>
                    <a href="{{ route('caracteristicas') }}" class="btn-secondary">Ver Servicios</a>
                </div>
            </div>

        </div>
    </section>

    <!-- Features Grid -->
    <section class="characteristics-section">
        <div class="container">
            <div class="characteristics-grid">
                <!-- Feature 1 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__image">
                        <img src="{{ asset('images/servicios/servicio_1.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Soluciones Digitales a Medida</h3>
                        <p class="characteristic-card__description">
                            Diseñamos y desarrollamos software alineado con procesos reales de negocio.
                        </p>
                        <ul class="characteristic-card__details">
                            <li>Aplicaciones web y móviles escalables.</li>
                            <li>Desarrollo de plataformas empresariales a medida.</li>
                            <li>Integración avanzada con sistemas externos (APIs, ERPs, CRMs).</li>
                            <li>Arquitectura moderna, metodologías ágiles y pruebas automatizadas.</li>
                        </ul>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__image">
                        <img src="{{ asset('images/servicios/servicio_2.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Inteligencia Artificial Aplicada al Negocio</h3>
                        <p class="characteristic-card__description">
                            IA integrada y orientada a resultados.
                        </p>
                        <ul class="characteristic-card__details">
                            <li>IA generativa integrada en procesos internos.</li>
                            <li>Clasificación automática de documentos y expedientes.</li>
                            <li>Análisis inteligente de datos y predicción de eventos.</li>
                            <li>Asistentes virtuales internos y externos</li>
                        </ul>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>


                <!-- Feature 4 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__image">
                        <img src="{{ asset('images/servicios/servicio_4.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                    </div>
                    <div class="characteristic-card__content">
                        <h3>ERP Inteligente y Operativo</h3>
                        <p class="characteristic-card__description">
                            Sistema ERP para optimizar operaciones de tu negocio.
                        </p>
                        <ul class="characteristic-card__details">
                            <li>Planificación de trabajos y órdenes operativas.</li>
                            <li>Gestión de inventario y recursos.</li>
                            <li>Facturación automática y reporting en tiempo real.</li>
                            <li>Integración con IA para optimizar flujos.</li>
                        </ul>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__image">
                        <img src="{{ asset('images/servicios/servicio_5.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Automatización Avanzada y Agentes Autónomos</h3>
                        <p class="characteristic-card__description">
                            Convertimos procesos repetitivos en sistemas automáticos.
                        </p>
                        <ul class="characteristic-card__details">
                            <li>Chatbots y asistentes conversacionales a medida.</li>
                            <li>Automatización de flujos empresariales (RPA / n8n).</li>
                            <li>Procesamiento automático de documentos y correos.</li>
                            <li>Agentes autónomos para tareas recurrentes</li>
                        </ul>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__image">
                        <img src="{{ asset('images/servicios/servicio_7.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Business Intelligence y y Analítica Avanzada</h3>
                        <p class="characteristic-card__description">
                            Datos convertidos en decisiones.
                        </p>
                        <ul class="characteristic-card__details">
                            <li>Cuadros de mando en Power BI y soluciones personalizadas.</li>
                            <li>Análisis operativo y financiero.</li>
                            <li>KPIs en tiempo real integrados con sistemas internos.</li>
                        </ul>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>
                <!-- Feature 7 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__image">
                        <img src="{{ asset('images/servicios/servicio_6.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Ciberseguridad y Cumplimiento Normativo</h3>
                        <p class="characteristic-card__description">
                            Seguridad informática y normativas.
                        </p>
                        <ul class="characteristic-card__details">
                            <li>Adecuación a normativas y estándares (ISO 27001, RGPD).</li>
                            <li>Documentación técnica y de seguridad.</li>
                        </ul>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>
                <!-- Feature 8 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__image">
                        <img src="{{ asset('images/servicios/servicio_8.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Infraestructura IT, Comunicaciones y Servicios Cloud</h3>
                        <p class="characteristic-card__description">
                            Soluciones completas de infraestructura tecnológica para empresas.
                        </p>
                        <ul class="characteristic-card__details">
                            <li>Centralitas virtuales y comunicaciones unificadas (B2Com).</li>
                            <li>Servidores en la nube.</li>
                            <li>Hosting profesional.</li>
                            <li>Dominios y gestión DNS.</li>
                        </ul>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>
                <!-- Feature 9 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__image">
                        <img src="{{ asset('images/servicios/servicio_9.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Soporte, Mantenimiento y SLA</h3>
                        <p class="characteristic-card__description">
                            Acompañamiento continuo post entrega.
                        </p>
                        <ul class="characteristic-card__details">
                            <li>Soporte técnico especializado.</li>
                            <li>Monitorización proactiva de sistemas.</li>
                            <li>Acuerdos SLA adaptados al cliente.</li>
                        </ul>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
<section class="characteristics-cta">
        <div class="container">
            <h2>¿No lo Tienes Claro?</h2>
            <p>Contrátanos y Descubre Qué Necesitas</p>
            <a href="{{ route('contacto') }}" class="cta-button">Solicita una Consulta Gratuita</a>
        </div>
    </section>
</div>
@endsection
    