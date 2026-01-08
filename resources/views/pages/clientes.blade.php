@extends('layouts.app')

@section('title', 'Clientes - UtreBytes')

@section('content')
<div class="container">
    <h1>Nuestros Clientes</h1>
    <p>Empresas que confían en nuestras soluciones</p>

    <section class="mt-5">
        <h2>Casos de Éxito</h2>
        <p>Conoce cómo hemos ayudado a empresas de diversos sectores a transformar su negocio.</p>
    </section>

    <section class="mt-5">
        <h2>Sectores Atendidos</h2>
        <ul>
            <li>Seguros y Aseguradoras</li>
            <li>Logística y Transporte</li>
            <li>Retail y E-commerce</li>
            <li>Servicios Financieros</li>
            <li>Manufactura e Industria</li>
            <li>Salud y Bienestar</li>
        </ul>
    </section>

    <section class="mt-5">
        <h2>Estadísticas</h2>
        <ul>
            <li>500+ clientes satisfechos</li>
            <li>10,000+ proyectos completados</li>
            <li>24/7 soporte disponible</li>
            <li>99.9% uptime garantizado</li>
        </ul>
    </section>

    <section class="mt-5">
        <h2>Testimonios</h2>
        <p>Escucha lo que dicen nuestros clientes sobre su experiencia con UtreBytes.</p>
    </section>

    <section class="mt-5">
        <h2>¿Quieres ser nuestro próximo cliente?</h2>
        <a href="/contacto" class="btn btn-primary">Contacta con nosotros</a>
    </section>
</div>
@endsection
