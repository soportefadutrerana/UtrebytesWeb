@extends('layouts.app')

@section('title', 'Contacto - UtreBytes')

@section('content')
<!-- Hero Section -->
<section class = "contact-hero" style = "background-image: url('{{ asset ('images/heros/hero_background.jpg') }}');">
    <div class = "container">
        <div class = "contact-hero__panel">
            <span class = "contact-hero__badge">CONTACTO</span>

            <h1>Hablemos de Tu Proyecto</h1>
            <p>
                Estamos aquí para ayudarte a transformar tu negocio.
                Ponte en contacto con nuestro equipo y descubre cómo podemos impulsar tu empresa.
            </p>
        </div>
    </div>
</section>
<!-- Contact Form & Info Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <!-- Form -->
            <div class="contact-form-wrapper">
                <h2>Agendar una Cita</h2>
                <p class="contact-form-subtitle">Completa el formulario y nos pondremos en contacto pronto</p>
                <form class="contact-form" action="{{ route ('contacto.enviar')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre Completo</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>

                    <div class="form-group">
                        <label for="company">Empresa</label>
                        <input type="text" id="company" name="company">
                    </div>

                    <div class="form-group">
                        <label for="service">Servicio de Interés</label>
                        <select id="service" name="service" required>
                            <option value="">Selecciona un servicio</option>
                            <option value="software">Software a Medida</option>
                            <option value="ia">IA y Modelos Generativos</option>
                            <option value="erp">ERP Inteligente</option>
                            <option value="automatizacion">Automatización de Procesos</option>
                            <option value="ciberseguridad">Ciberseguridad</option>
                            <option value="cloud">Cloud y Escalabilidad</option>
                            <option value="bi">Business Intelligence</option>
                            <option value="consultoria">Consultoría Tecnológica</option>
                            <option value="consultoria">Otros</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" name="message" rows="4" placeholder="Cuéntanos ..." required></textarea>
                    </div>

                    <button type="submit" class="btn-submit">Agendar Cita</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="contact-info-wrapper">
                <h2>Información de Contacto</h2>
                
                <div class="contact-info-card">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-content">
                        <h3>Dirección</h3>
                        <p>Calle Principal, 123<br>41710 Utrera, España</p>
                    </div>
                </div>

                <div class="contact-info-card">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h3>Teléfono</h3>
                        <p><a href="tel:+34912345678">+34 91 234 5678</a></p>
                    </div>
                </div>

                <div class="contact-info-card">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h3>Email</h3>
                        <p><a href="mailto:info@utrebytes.com">info@utrebytes.com</a></p>
                    </div>
                </div>

                <div class="contact-info-card">
                    <div class="info-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="info-content">
                        <h3>Soporte 24/7</h3>
                        <p><a href="mailto:soporte@utrebytes.com">soporte@utrebytes.com</a></p>
                    </div>
                </div>

                <div class="contact-hours">
                    <h3>Horario de Atención</h3>
                    <ul>
                        <li><strong>Lunes a Viernes:</strong> 9:00 - 18:00</li>
                        <li><strong>Sábado:</strong> 10:00 - 14:00</li>
                        <li><strong>Domingo:</strong> Cerrado</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="contact-cta" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/heros/hero_background.jpg') }}');">
    <div class="container">
        <h2></h2>
        <p></p>
    </div>
</section>
@endsection
