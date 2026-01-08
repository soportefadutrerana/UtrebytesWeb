@extends('layouts.app')

@section('title', 'Términos y Cookies - UtreBytes')

@section('content')
<!-- Hero Section -->
<section class="legal-hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('images/heros/hero_background.jpg') }}');">
    <div class="container">
        <h1>Términos y Cookies</h1>
        <p>Política de privacidad y uso de cookies de UtreBytes</p>
    </div>
</section>

<!-- Legal Content Section -->
<section class="legal-content">
    <div class="container">
        <div class="legal-wrapper">
            <!-- Tabla de contenidos -->
            <aside class="legal-sidebar">
                <div class="legal-toc">
                    <h3>Contenido</h3>
                    <ul>
                        <li><a href="#terminos">Términos de Servicio</a></li>
                        <li><a href="#cookies">Política de Cookies</a></li>
                        <li><a href="#privacidad">Privacidad</a></li>
                        <li><a href="#responsabilidad">Responsabilidad</a></li>
                        <li><a href="#cambios">Cambios en la Política</a></li>
                    </ul>
                </div>
            </aside>

            <!-- Contenido principal -->
            <main class="legal-main">
                <!-- Términos de Servicio -->
                <section id="terminos" class="legal-section">
                    <h2>Términos de Servicio</h2>
                    
                    <h3>1. Aceptación de Términos</h3>
                    <p>Al acceder y utilizar este sitio web (en adelante, "el Sitio"), usted acepta estar vinculado por los términos y condiciones de este aviso. Si no está de acuerdo con alguno de estos términos, le rogamos que no utilice este Sitio.</p>

                    <h3>2. Uso Licito del Sitio</h3>
                    <p>Usted acepta utilizar este Sitio únicamente para propósitos legales y de una manera que no infrinja los derechos de terceros ni restrinja o inhiba el uso y disfrute del Sitio por parte de cualquier tercero. El comportamiento prohibido incluye acosar o causar angustia o inconveniente a cualquier persona, transmitir contenido obsceno u ofensivo o interrumpir el flujo normal de diálogo dentro de nuestros sitios web.</p>

                    <h3>3. Propiedad Intelectual</h3>
                    <p>Todo el contenido incluido en este Sitio, tales como textos, gráficos, logos, imágenes, clips de audio, descargas digitales, compilaciones de datos y software, es propiedad de UtreBytes o de sus proveedores de contenido y está protegido por las leyes de derechos de autor internacionales.</p>

                    <h3>4. Limitación de Responsabilidad</h3>
                    <p>El contenido de este Sitio se proporciona "tal cual". UtreBytes no proporciona garantías, expresas o implícitas, de ningún tipo con respecto al Sitio, incluyendo pero no limitado a las garantías de comerciabilidad, idoneidad para un propósito particular y no infracción.</p>

                    <h3>5. Enlaces Externos</h3>
                    <p>Este Sitio contiene enlaces a sitios web de terceros. UtreBytes no es responsable de la disponibilidad, precisión, contenido, publicidad, productos, servicios o cualquier otra material de tales sitios web externos.</p>
                </section>

                <!-- Política de Cookies -->
                <section id="cookies" class="legal-section">
                    <h2>Política de Cookies</h2>

                    <h3>1. ¿Qué son las Cookies?</h3>
                    <p>Las cookies son pequeños archivos de texto que se almacenan en su dispositivo cuando visita un sitio web. Estos archivos permiten al sitio reconocer su dispositivo y recordar información sobre sus visitas anteriores.</p>

                    <h3>2. Tipos de Cookies que Utilizamos</h3>
                    <p><strong>Cookies Esenciales:</strong> Estas cookies son necesarias para que el sitio funcione correctamente. Incluyen autenticación, seguridad y características de accesibilidad.</p>
                    <p><strong>Cookies de Análisis:</strong> Utilizamos herramientas como Google Analytics para recopilar información sobre cómo los visitantes utilizan nuestro Sitio. Esta información nos ayuda a mejorar su experiencia.</p>
                    <p><strong>Cookies de Marketing:</strong> Estas cookies se utilizan para rastrear a los visitantes en múltiples sitios web para mostrar anuncios relevantes y personalizados.</p>
                    <p><strong>Cookies de Preferencias:</strong> Estas cookies recuerdan las preferencias del usuario, como el idioma y la región, para proporcionar una experiencia personalizada.</p>

                    <h3>3. Control de Cookies</h3>
                    <p>La mayoría de los navegadores web permiten algún nivel de control sobre las cookies. Puede optar por aceptar o rechazar las cookies, así como eliminar las cookies que ya haya recibido. Sin embargo, tenga en cuenta que desactivar las cookies puede afectar la funcionalidad de este Sitio.</p>

                    <h3>4. Cookies de Terceros</h3>
                    <p>También permitimos que terceros establezcan cookies en nuestro Sitio para fines de análisis, publicidad y redes sociales. Estos terceros incluyen pero no se limitan a Google, Facebook y LinkedIn.</p>

                    <h3>5. Duración de las Cookies</h3>
                    <p>Algunas cookies se eliminarán cuando cierre su navegador (cookies de sesión), mientras que otras permanecerán en su dispositivo durante un período determinado (cookies persistentes). La duración de cada cookie se indica en nuestro Banner de Cookies.</p>
                </section>

                <!-- Privacidad -->
                <section id="privacidad" class="legal-section">
                    <h2>Privacidad</h2>

                    <h3>1. Información que Recopilamos</h3>
                    <p>Recopilamos información que usted nos proporciona directamente, como cuando completa un formulario de contacto o se suscribe a nuestra newsletter. También recopilamos información sobre cómo interactúa con nuestro Sitio, incluida la información de su dispositivo, ubicación aproximada e historial de navegación.</p>

                    <h3>2. Cómo Utilizamos su Información</h3>
                    <p>Utilizamos la información recopilada para:</p>
                    <ul>
                        <li>Responder a sus consultas y solicitudes</li>
                        <li>Mejorar y personalizar su experiencia en nuestro Sitio</li>
                        <li>Enviarle información sobre nuestros productos y servicios</li>
                        <li>Cumplir con nuestras obligaciones legales y reglamentarias</li>
                        <li>Analizar tendencias de uso y desarrollar nuevas características</li>
                    </ul>

                    <h3>3. Seguridad de Datos</h3>
                    <p>UtreBytes implementa medidas de seguridad técnicas, administrativas y físicas apropiadas para proteger su información personal contra acceso no autorizado, alteración, divulgación o destrucción.</p>

                    <h3>4. Retención de Datos</h3>
                    <p>Conservaremos su información personal durante el tiempo que sea necesario para cumplir con los propósitos para los cuales fue recopilada, o según sea requerido por la ley.</p>

                    <h3>5. Derechos del Usuario</h3>
                    <p>Usted tiene derecho a acceder, rectificar, suprimir o limitar el uso de su información personal. Para ejercer estos derechos, por favor póngase en contacto con nosotros a través del formulario de contacto en nuestro Sitio.</p>
                </section>

                <!-- Responsabilidad -->
                <section id="responsabilidad" class="legal-section">
                    <h2>Responsabilidad</h2>

                    <h3>1. Renuncia de Responsabilidad</h3>
                    <p>UtreBytes no será responsable por ningún daño directo, indirecto, incidental, especial, consecuente o punitivo resultante de o relacionado con su acceso a, uso de o imposibilidad de usar el Sitio, incluso si UtreBytes ha sido informado de la posibilidad de tales daños.</p>

                    <h3>2. Disponibilidad del Servicio</h3>
                    <p>Aunque nos esforzamos por mantener el Sitio disponible y funcional, UtreBytes no garantiza que el Sitio estará disponible en todo momento o sin interrupciones. El Sitio puede experimentar tiempo de inactividad para mantenimiento, actualizaciones de seguridad u otros motivos.</p>

                    <h3>3. Contenido de Terceros</h3>
                    <p>UtreBytes no es responsable por ningún contenido proporcionado por terceros o que aparezca en el Sitio a través de enlaces u otros medios, incluida la exactitud, la integridad, la legalidad o la naturaleza del contenido.</p>
                </section>

                <!-- Cambios en la Política -->
                <section id="cambios" class="legal-section">
                    <h2>Cambios en la Política</h2>

                    <h3>1. Modificaciones</h3>
                    <p>UtreBytes se reserva el derecho de modificar estos Términos y Cookies en cualquier momento. Los cambios entrarán en vigencia inmediatamente después de la publicación en el Sitio. Su uso continuado del Sitio después de la publicación de cambios constituye su aceptación de los términos modificados.</p>

                    <h3>2. Fecha de Última Actualización</h3>
                    <p>Estos términos y cookies fueron actualizados por última vez el 24 de diciembre de 2025.</p>

                    <h3>3. Contacto</h3>
                    <p>Si tiene preguntas o inquietudes sobre estos Términos y Cookies, por favor <a href="{{ route('contacto') }}">póngase en contacto con nosotros</a>.</p>
                </section>
            </main>
        </div>
    </div>
</section>
@endsection
