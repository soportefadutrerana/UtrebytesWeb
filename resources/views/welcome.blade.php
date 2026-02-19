@extends('layouts.app')

@section('title', 'Inicio - UtreBytes')

@section('content')

<!-- HERO -->
<section class="hero-pro" style="background-image: linear-gradient(rgba(5,10,20,.78), rgba(5,10,20,.9)), url('{{ asset('images/heros/hero_background.jpg') }}');">
    <div class="hero-pro__content container">

        <span class="hero-pro__badge">
            Unidad Tecnológica GRUPO LRP 24 HOLDING
        </span>

        <h1>
            Transformación Digital Avanzada<br>
            para Empresas que Quieren Crecer
        </h1>

        <p>
            Soluciones con inteligencia artificial, automatización y software a medida
            para optimizar procesos, reducir costes y escalar tu negocio.
        </p>

        <div class="hero-pro__buttons">
            <a href="{{ route('contacto') }}" class="btn-primary">Solicitar Asesoría</a>
            <a href="{{ route('caracteristicas') }}" class="btn-secondary">Ver Servicios</a>
        </div>

    </div>
</section>


<!-- TRUST / VENTAJAS -->
<section class="trust">
    <div class="container">

        <div class="section-head">
            <h2>Nuestra Ventaja Tecnológica</h2>
            <p>Soluciones Diseñadas para Resultados Reales</p>
        </div>

        <div class="trust-grid">

            <div class="trust-card">
                <div class="trust-icon">🤖</div>
                <h3>IA Aplicada al Negocio</h3>
                <p>Automatizamos procesos y mejoramos la toma de decisiones.</p>
            </div>

            <div class="trust-card">
                <div class="trust-icon">💻</div>
                <h3>Software a Medida</h3>
                <p>Desarrollos adaptados a las necesidades de cada empresa.</p>
            </div>

            <div class="trust-card">
                <div class="trust-icon">🛠</div>
                <h3>Soporte Continuo</h3>
                <p>Acompañamiento técnico antes, durante y después.</p>
            </div>

            <div class="trust-card">
                <div class="trust-icon">☁️</div>
                <h3>Infraestructura Segura</h3>
                <p>Sistemas cloud preparados para escalar y proteger.</p>
            </div>

        </div>
    </div>
</section>


<!-- IMPACTO (BLOQUE OSCURO PRO) -->
<section class="impact-pro">
    <div class="container">

        <div class="section-head light">
            <h2>Impacto en tu Empresa</h2>
            <p>Resultados Medibles mediante Tecnología Inteligente</p>
        </div>

        <div class="impact-grid">

            <div class="impact-card">
                <span>+40%</span>
                <p>Mejora de Productividad</p>
            </div>

            <div class="impact-card">
                <span>-30%</span>
                <p>Reducción de Costes</p>
            </div>

            <div class="impact-card">
                <span>24/7</span>
                <p>Automatización</p>
            </div>

            <div class="impact-card">
                <span>Escalable</span>
                <p>Infraestructura Preparada</p>
            </div>

        </div>
    </div>
</section>


<!-- CTA FINAL -->
<section class="cta-pro">
    <div class="container">

        <h2>¿Listo para Dar el Salto Tecnológico?</h2>

        <p>
            Analizamos tu empresa y diseñamos una solución adaptada a tus objetivos.
        </p>

        <a href="{{ route('contacto') }}" class="btn-primary btn-large">
            Solicitar Diagnóstico
        </a>

    </div>
</section>

@endsection
