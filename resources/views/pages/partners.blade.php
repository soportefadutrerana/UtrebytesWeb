@extends('layouts.app')

@section('title', 'Clientes - UtreBytes')

@section('content')
<div class="partners-container">
    <!-- Header -->
    <section class="partners-header" style="background-image: linear-gradient(rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.6)), url('{{ asset('images/heros/hero_partners.jpg') }}');">
        <div class="container">
            <h1>GRUPO LRP 24 HOLDING S.L.</h1>
            <p>Descubre las empresas que forman parte de nuestro ecosistema empresarial</p>
        </div>
    </section>

    <!-- Partners Grid -->
    <section class="partners-section">
        <div class="container">
            <div class="partners-grid">
                <!-- Partner 1 -->
                <div class="partner-card" style="animation-delay: 0.1s;">
                    <div class="partner-card__image">
                        <img src="{{ asset('images/partners/cuco-formaciones.jpg') }}" alt="CUCO Formaciones" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22300%22%3E%3Crect fill=%22%23c0a040%22 width=%22400%22 height=%22300%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 font-size=%2224%22 fill=%22white%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22%3ECUCO Formaciones%3C/text%3E%3C/svg%3E'">
                    </div>
                    <div class="partner-card__content">
                        <h3>CUCO Formaciones S.L.</h3>
                        <p class="partner-card__category">Formación Profesional</p>
                        <p class="partner-card__description">
                            Formación técnica, talleres y programas de reciclaje profesional diseñados para potenciar el talento y la capacidad de tu equipo.
                        </p>
                        <div class="partner-card__tags">
                            <span class="tag">Capacitación</span>
                            <span class="tag">Talleres</span>
                            <span class="tag">Reciclaje</span>
                        </div>
                    </div>
                </div>

                <!-- Partner 2 -->
                <div class="partner-card" style="animation-delay: 0.2s;">
                    <div class="partner-card__image">
                        <img src="{{ asset('images/partners/lincoser-construcciones.jpg') }}" alt="Lincoser Construcciones" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22300%22%3E%3Crect fill=%22%23a88c2d%22 width=%22400%22 height=%22300%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 font-size=%2224%22 fill=%22white%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22%3ELincoser Construcciones%3C/text%3E%3C/svg%3E'">
                    </div>
                    <div class="partner-card__content">
                        <h3>Lincoser Construcciones S.L.</h3>
                        <p class="partner-card__category">Construcción e Ingeniería</p>
                        <p class="partner-card__description">
                            Construcción, reformas y obra civil con estándares de calidad y seguridad internacionales.
                        </p>
                        <div class="partner-card__tags">
                            <span class="tag">Construcción</span>
                            <span class="tag">Reformas</span>
                            <span class="tag">Obra Civil</span>
                        </div>
                    </div>
                </div>

                <!-- Partner 3 -->
                <div class="partner-card" style="animation-delay: 0.3s;">
                    <div class="partner-card__image">
                        <img src="{{ asset('images/partners/fad_remake.png') }}" alt="Fad Reparaciones" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22300%22%3E%3Crect fill=%22%23d4af37%22 width=%22400%22 height=%22300%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 font-size=%2224%22 fill=%22%231a1a1a%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22%3EFAD Reparaciones%3C/text%3E%3C/svg%3E'">
                    </div>
                    <div class="partner-card__content">
                        <h3>Fad Reparaciones S.L.</h3>
                        <p class="partner-card__category">Servicios de Reparación</p>
                        <p class="partner-card__description">
                            Servicios de fontanería, tuberías industriales y reparaciones especializadas con profesionales certificados.
                        </p>
                        <div class="partner-card__tags">
                            <span class="tag">Fontanería</span>
                            <span class="tag">Tuberías</span>
                            <span class="tag">Reparaciones</span>
                        </div>
                    </div>
                </div>

                <!-- Partner 4 -->
                <div class="partner-card" style="animation-delay: 0.4s;">
                    <div class="partner-card__image">
                        <img src="{{ asset('images/partners/utrerana_remake.png') }}" alt="Utrerana de Cerrajería" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22300%22%3E%3Crect fill=%22%23c0a040%22 width=%22400%22 height=%22300%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 font-size=%2224%22 fill=%22white%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22%3EUtrerana de Cerrajería%3C/text%3E%3C/svg%3E'">
                    </div>
                    <div class="partner-card__content">
                        <h3>Utrerana de Cerrajería S.L.</h3>
                        <p class="partner-card__category">Cerrajería y Metalistería</p>
                        <p class="partner-card__description">
                            Cerrajería, carpintería metálica y automatismos con soluciones personalizadas para seguridad y acceso.
                        </p>
                        <div class="partner-card__tags">
                            <span class="tag">Cerrajería</span>
                            <span class="tag">Metálica</span>
                            <span class="tag">Automatismos</span>
                        </div>
                    </div>
                </div>

                <!-- Partner 5 -->
                <div class="partner-card" style="animation-delay: 0.5s;">
                    <div class="partner-card__image">
                        <img src="{{ asset('images/partners/ucalsol.jpg') }}" alt="Ucalsol" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22300%22%3E%3Crect fill=%22%23a88c2d%22 width=%22400%22 height=%22300%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 font-size=%2224%22 fill=%22white%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22%3EUcalsol%3C/text%3E%3C/svg%3E'">
                    </div>
                    <div class="partner-card__content">
                        <h3>Ucalsol S.L.</h3>
                        <p class="partner-card__category">Metalistería Industrial</p>
                        <p class="partner-card__description">
                            Estructuras metálicas y calderería de alta precisión para proyectos industriales y comerciales.
                        </p>
                        <div class="partner-card__tags">
                            <span class="tag">Estructuras</span>
                            <span class="tag">Calderería</span>
                            <span class="tag">Industrial</span>
                        </div>
                    </div>
                </div>

                <!-- Partner 6 -->
                <div class="partner-card" style="animation-delay: 0.6s;">
                    <div class="partner-card__image">
                        <img src="{{ asset('images/partners/siigoo-consultores.jpg') }}" alt="SIIGOO Consultores" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22300%22%3E%3Crect fill=%22%23d4af37%22 width=%22400%22 height=%22300%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 font-size=%2224%22 fill=%22%231a1a1a%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22%3ESIIGOO Consultores%3C/text%3E%3C/svg%3E'">
                    </div>
                    <div class="partner-card__content">
                        <h3>SIIGOO Consultores S.L.</h3>
                        <p class="partner-card__category">Consultoría Empresarial</p>
                        <p class="partner-card__description">
                            Consultoría, administración, contabilidad y gestoría para optimizar tu gestión empresarial.
                        </p>
                        <div class="partner-card__tags">
                            <span class="tag">Consultoría</span>
                            <span class="tag">Contabilidad</span>
                            <span class="tag">Gestoría</span>
                        </div>
                    </div>
                </div>

                <!-- Partner 7 -->
                <div class="partner-card" style="animation-delay: 0.7s;">
                    <div class="partner-card__image">
                        <img src="{{ asset('images/partners/maderarte-utrera.jpg') }}" alt="Maderarte Utrera" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22300%22%3E%3Crect fill=%22%23c0a040%22 width=%22400%22 height=%22300%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 font-size=%2224%22 fill=%22white%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22%3EMaderarte Utrera%3C/text%3E%3C/svg%3E'">
                    </div>
                    <div class="partner-card__content">
                        <h3>Maderarte Utrera S.L.</h3>
                        <p class="partner-card__category">Carpintería de Madera</p>
                        <p class="partner-card__description">
                            Carpintería de madera y acabados de calidad para proyectos residenciales y comerciales.
                        </p>
                        <div class="partner-card__tags">
                            <span class="tag">Carpintería</span>
                            <span class="tag">Madera</span>
                            <span class="tag">Acabados</span>
                        </div>
                    </div>
                </div>

                <!-- Partner 8 -->
                <div class="partner-card" style="animation-delay: 0.8s;">
                    <div class="partner-card__image">
                        <img src="{{ asset('images/partners/metralux.jpg') }}" alt="Metralux" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22300%22%3E%3Crect fill=%22%23a88c2d%22 width=%22400%22 height=%22300%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 font-size=%2224%22 fill=%22white%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22%3EMetralux%3C/text%3E%3C/svg%3E'">
                    </div>
                    <div class="partner-card__content">
                        <h3>Metralux S.L.</h3>
                        <p class="partner-card__category">Carpintería de Aluminio</p>
                        <p class="partner-card__description">
                            Carpintería de aluminio y PVC: ventanas, mamparas y persianas con diseño moderno.
                        </p>
                        <div class="partner-card__tags">
                            <span class="tag">Aluminio</span>
                            <span class="tag">PVC</span>
                            <span class="tag">Ventanas</span>
                        </div>
                    </div>
                </div>

                <!-- Partner 9 -->
                <div class="partner-card" style="animation-delay: 0.9s;">
                    <div class="partner-card__image">
                        <img src="{{ asset('images/partners/utrebytes.jpg') }}" alt="UtreBytes" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22300%22%3E%3Crect fill=%22%231a1a1a%22 width=%22400%22 height=%22300%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 font-size=%2224%22 fill=%22%23d4af37%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22%3EUtreBytes%3C/text%3E%3C/svg%3E'">
                    </div>
                    <div class="partner-card__content">
                        <h3>UTREBYTES S.L.</h3>
                        <p class="partner-card__category">Tecnología e Innovación</p>
                        <p class="partner-card__description">
                            Unidad tecnológica: IA, ERP, automatización y soporte IT para transformación digital.
                        </p>
                        <div class="partner-card__tags">
                            <span class="tag">IA</span>
                            <span class="tag">ERP</span>
                            <span class="tag">Tecnología</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="partners-cta" style="background-image: linear-gradient(rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.6)), url('{{ asset('images/heros/hero_partners.jpg') }}');">
        <div class="container">
            <h2>Trabajamos juntos para tu éxito</h2>
            <p>Descubre cómo nuestro ecosistema de empresas puede ayudarte a crecer</p>
            <a href="{{ route('contacto') }}" class="cta-button">Contacta con nosotros</a>
        </div>
    </section>
</div>
@endsection
