@extends('frontend.layouts.default')

@section('title', 'Política de cookies | Sonic Drive Studios')

@section('content')
    
    @include('frontend.partials.head', [
        'title' => 'Política de cookies', 
    ])

    <section class="container py-5 legal" data-aos="zoom-in">
        <p>En Sonic Drive Studios, valoramos la privacidad y la seguridad de nuestros usuarios. Esta política de cookies explica cómo utilizamos las cookies y otras tecnologías similares en nuestro sitio web www.sonicdrivestudios.com (en adelante, el "Sitio") y cómo puedes gestionar tus preferencias.</p>

        <h3>¿Qué son las cookies?</h3>

        <p>Las cookies son pequeños archivos de texto que se descargan en tu dispositivo cuando accedes y utilizas nuestro Sitio. Nos permiten recordar tus preferencias y mejorar tu experiencia de usuario. También nos permiten analizar el uso del Sitio y recopilar información estadística sobre el mismo.</p>

        <h3>¿Qué tipos de cookies utilizamos?</h3>

        <p>Utilizamos cookies de sesión y cookies persistentes en nuestro Sitio. Las cookies de sesión se eliminan automáticamente al cerrar el navegador, mientras que las cookies persistentes permanecen en el dispositivo durante un período de tiempo determinado o hasta que las elimines.</p>

        <p>Además, utilizamos cookies propias y de terceros en nuestro Sitio. Las cookies propias son aquellas que se generan y gestionan por Sonic Drive Studios, mientras que las cookies de terceros son aquellas que son generadas y gestionadas por empresas externas, como Google Analytics.</p>

        <h3>¿Para qué utilizamos las cookies?</h3>

        <p>Utilizamos las cookies para los siguientes fines:</p>

        <ul>
            <li>Mejorar la funcionalidad del Sitio: Utilizamos cookies para recordar tus preferencias y para ofrecerte una experiencia de usuario personalizada.</li>
            <li>Análisis del uso del Sitio: Utilizamos cookies para analizar cómo los usuarios utilizan nuestro Sitio, incluyendo información como el número de visitantes, el tiempo de permanencia en el Sitio y las páginas visitadas. Esto nos ayuda a mejorar el rendimiento y la funcionalidad del Sitio.</li>
            <li>Publicidad: Utilizamos cookies para mostrar anuncios personalizados en nuestro Sitio y en otros sitios web que visitas. Estos anuncios pueden ser proporcionados por terceros y están basados en tus intereses y en tu historial de navegación.</li>
        </ul>

        <h3>¿Cómo puedes gestionar tus preferencias de cookies?</h3>

        <p>Puedes gestionar tus preferencias de cookies en cualquier momento a través de la configuración de tu navegador. Ten en cuenta que si desactivas las cookies, es posible que algunas partes de nuestro Sitio no funcionen correctamente.</p>

        <h3>¿Cómo puedes obtener más información?</h3>

        <p>Si deseas obtener más información sobre nuestras prácticas de privacidad y cookies, por favor consulta nuestra Política de Privacidad en nuestro Sitio.</p>

        <h3>Contacto</h3>

        <p>Si tienes alguna pregunta o comentario sobre nuestra política de cookies, por favor contáctanos a través de nuestro formulario de contacto en nuestro Sitio.</p>
    </section>
@endsection