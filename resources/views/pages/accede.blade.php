@extends('layouts.app')

@section('title', 'Accede - UtreBytes')

@section('content')
<div class="container">
    <h1>Accede a tu Cuenta</h1>

    <section class="mt-5">
        <div class="auth-container">
            <form method="POST" action="#" class="login-form">
                @csrf
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required autocomplete="email">
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required autocomplete="current-password">
                </div>

                <div class="form-group">
                    <label for="remember">
                        <input type="checkbox" id="remember" name="remember">
                        Recuérdame
                    </label>
                </div>

                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
            </form>

            <div class="auth-links mt-4">
                <p>¿No tienes cuenta? <a href="/registro">Regístrate aquí</a></p>
                <p><a href="/recuperar-contrasena">¿Olvidaste tu contraseña?</a></p>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <h2>¿Necesitas ayuda?</h2>
        <p>Si tienes problemas para acceder a tu cuenta, contacta con nuestro equipo de soporte.</p>
        <p><a href="/contacto" class="btn btn-secondary">Contactar Soporte</a></p>
    </section>
</div>
@endsection
