@extends('layouts.app')

@section('title', 'Acerca de UtreBytes')

@section('content')
<!-- Hero Section -->
<section class = "about-hero" style = "background-image: url('{{ asset ('images/heros/hero_background.jpg')}}');>
    <div class = "container">
        <h1>Conócenos</h1>
        <p>La unidad tecnológica del GRUPO LRP 24 HOLDING dedicada a la transformación digital.</p>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="about-grid">
            <div class="about-content">
                <h2>Nuestra Historia</h2>
                <p>UtreBytes nace como la unidad tecnológica del GRUPO LRP 24 HOLDING con la visión de transformar la forma en que las empresas utilizan la tecnología. Desde nuestros inicios, hemos apostado por la innovación, la calidad y la excelencia en el servicio, siendo un socio estratégico para empresas que buscan crecer en el mundo digital.</p>
                <p>Contamos con un equipo multidisciplinario de profesionales expertos en desarrollo de software, inteligencia artificial, consultoría y transformación digital, listos para convertir tus desafíos en oportunidades de crecimiento.</p>
            </div>
            <div class="about-image">
                <img src="{{ asset('images/about/about_1.jpg') }}" alt="Equipo UtreBytes">
            </div>
        </div>
    </div>
</section>
<!-- Facilities Section -->
<section class="about-section about-section--facilities">
    <div class="container">
        <div class="about-grid">
            <div class="about-image">
                <img src="{{ asset('images/about/about_2.jpg') }}" alt="Instalaciones UtreBytes">
            </div>
            <div class="about-content">
                <h2>Nuestras Instalaciones</h2>
                <p>Contamos con instalaciones modernas y completamente equipadas, diseñadas para fomentar la colaboración, la creatividad y la productividad de nuestro equipo.</p>
                <p>Nuestras oficinas disponen de espacios abiertos para el trabajo colaborativo, salas de reuniones equipadas con tecnología de última generación, áreas de descanso y relajación, y una infraestructura de red de alta velocidad que garantiza el mejor rendimiento en todos nuestros proyectos.</p>
                <p>Estamos comprometidos con la sostenibilidad y utilizamos energías renovables, sistemas de climatización eficientes y materiales ecológicos en nuestras instalaciones, reflejando nuestros valores corporativos en el día a día.</p>
            </div>
        </div>
    </div>
</section>
<!-- Mission, Vision, Values Section -->
<section class="about-mvv">
    <div class="container">
        <div class="mvv-grid">
            <!-- Misión -->
            <div class="mvv-card">
                <div class="mvv-image">
                    <img src="{{ asset('images/about/mision.jpg') }}" alt="Misión">
                </div>
                <div class="mvv-content">
                    <h3>Misión</h3>
                    <p>Proporcionar soluciones tecnológicas innovadoras que ayuden a las empresas a crecer, mejorar su eficiencia operativa y adaptarse al mundo digital con excelencia.</p>
                </div>
            </div>

            <!-- Visión -->
            <div class="mvv-card">
                <div class="mvv-image">
                    <img src="{{ asset('images/about/vision.jpg') }}" alt="Visión">
                </div>
                <div class="mvv-content">
                    <h3>Visión</h3>
                    <p>Ser el socio tecnológico de confianza para empresas que buscan transformación digital, innovación y crecimiento sostenible en un mundo cada vez más conectado.</p>
                </div>
            </div>

            <!-- Valores -->
            <div class="mvv-card">
                <div class="mvv-image">
                    <img src="{{ asset('images/about/valores.jpg') }}" alt="Valores">
                </div>
                <div class="mvv-content">
                    <h3>Valores</h3>
                    <ul class="values-list">
                        <li><strong>Innovación</strong></li>
                        <li><strong>Calidad</strong></li>
                        <li><strong>Transparencia</strong></li>
                        <li><strong>Sostenibilidad</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
