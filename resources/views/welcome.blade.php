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
                    <h2>¿Por qué elegirnos?</h2>
                    <p>Descubre los servicios que ofrecemos para tu proyecto</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/servicio_1.jpg') }}" alt="Desarrollo de Software a Medida" loading="lazy">
                        </div>
                        <h3>Soluciones digitales a medida</h3>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/servicio_2.jpg') }}" alt="Inteligencia Artificial y Modelos Generativos" loading="lazy">
                        </div>
                        <h3>Inteligencia Artificial aplicada al negocio</h3>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/servicio_4.jpg') }}" alt="ERP Inteligente" loading="lazy">
                        </div>
                        <h3>ERP inteligente y operativo</h3>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/servicio_5.jpg') }}" alt="Automatización de Procesos y Agentes Autónomos" loading="lazy">
                        </div>
                        <h3>Automatización avanzada y agentes autónomos</h3>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/servicio_6.jpg') }}" alt="Ciberseguridad y Cumplimiento" loading="lazy">
                        </div>
                        <h3>Ciberseguridad y cumplimiento normativo</h3>
                    </div>
                    <div class="feature-card hidden">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/servicio_7.jpg') }}" alt="Cloud, DevOps y Escalabilidad" loading="lazy">
                        </div>
                        <h3>Business Intelligence y y analítica avanzada</h3>
                    </div>
                    <div class="feature-card hidden">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/servicio_9.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                        </div>
                        <h3>Soporte, mantenimiento y SLA</h3>
                    </div>
                    <div class="feature-card hidden">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/servicio_8.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                        </div>
                        <h3>Infraestructura IT, Comunicaciones y Servicios Cloud</h3>
                    </div>
                </div>
                <div class="features-actions">
                    <button class="btn-show-more" id="showMoreBtn">
                        Ver más servicios
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta" id="cta" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/heros/hero_background.jpg') }}');">
            <div class="container">
                <h2>¿Quieres transformar tu negocio?</h2>
                <p>Únete a decenas de empresas que ya confían en nuestras soluciones. Contacta con nosotros hoy mismo.</p>
                <a href="{{ route('contacto') }}" class="cta-button">Contacta</a>
            </div>
        </section>
        
@endsection