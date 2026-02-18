@extends('layouts.app')

@section('title', 'Inicio - UtreBytes')

@section('content')
        <!-- Hero Section -->
        <section class="hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/heros/hero_background.jpg') }}');">
            <div class="hero-content">
                <h1>Bienvenido a UtreBytes</h1>
                <p>Unidad tecnológica GRUPO LRP 24 HOLDING S.L. 
                <br> 
                Tecnología de vanguardia al servicio de tus necesidades.   
                </p>
                <div class="hero-buttons">
                    <a href="{{ route('caracteristicas') }}" class="btn-primary-white">Consultar servicios</a>
                    <a href="{{ route('utrebytes') }}" class="btn-secondary-white">Conoce Más</a>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features" id="features">
            <div class="container">
                <div class="features-header">
                    <h2>¿Por qué Elegirnos?</h2>
                    <p>Descubre los servicios que ofrecemos para tu proyecto</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/soluciones-digitales.jpg') }}" alt="Desarrollo de Software a Medida" loading="lazy">
                        </div>
                        <h3>Soluciones Digitales a Medida</h3>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/ia-negocio.jpg') }}" alt="Inteligencia Artificial y Modelos Generativos" loading="lazy">
                        </div>
                        <h3>Inteligencia Artificial Aplicada al Negocio</h3>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/erp.jfif') }}" alt="ERP Inteligente" loading="lazy">
                        </div>
                        <h3>ERP Inteligente y Operativo</h3>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/automatizacion-avanzada.jpg') }}" alt="Automatización de Procesos y Agentes Autónomos" loading="lazy">
                        </div>
                        <h3>Automatización Avanzada y Agentes Autónomos</h3>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/ciberseguridad.jpg') }}" alt="Ciberseguridad y Cumplimiento" loading="lazy">
                        </div>
                        <h3>Ciberseguridad y Cumplimiento Normativo</h3>
                    </div>
                    <div class="feature-card hidden">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/bussines-intelillence.jpg') }}" alt="Cloud, DevOps y Escalabilidad" loading="lazy">
                        </div>
                        <h3>Business Intelligence y y Analítica Avanzada</h3>
                    </div>
                    <div class="feature-card hidden">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/soporte-mantenimiento.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                        </div>
                        <h3>Soporte, Mantenimiento y SLA</h3>
                    </div>
                    <div class="feature-card hidden">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/infraestructura-it.jfif') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                        </div>
                        <h3>Infraestructura IT, Comunicaciones y Servicios Cloud</h3>
                    </div>
                </div>
                <div class="features-actions">
                    <button class="btn-show-more" id="showMoreBtn">
                        Ver más Servicios
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta" id="cta" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/heros/hero_background.jpg') }}');">
            <div class="container">
                <h2>¿Quieres Transformar tu Negocio?</h2>
                <p>Únete a decenas de empresas que ya confían en nuestras soluciones. Contacta con nosotros hoy mismo.</p>
                <a href="{{ route('contacto') }}" class="cta-button">Contacta</a>
            </div>
        </section>
        
@endsection