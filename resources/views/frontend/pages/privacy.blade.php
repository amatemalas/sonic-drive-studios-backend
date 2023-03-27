@extends('frontend.layouts.default')

@section('title', 'Política de privacidad | Sonic Drive Studios')

@section('content')
    
    @include('frontend.partials.head', [
        'title' => 'Política de privacidad', 
    ])

    <section class="container py-5 legal" data-aos="zoom-in">
        <p>En Sonic Drive Studios, nos comprometemos a proteger la privacidad de nuestros usuarios. Esta política de privacidad describe cómo recopilamos, utilizamos, divulgamos y protegemos la información que recopilamos a través de nuestro sitio web www.sonicdrivestudios.com (en adelante, el "Sitio") y los servicios que ofrecemos.</p>

        <h3>¿Qué información recopilamos?</h3>

        <p>Recopilamos información personal y no personal de nuestros usuarios. La información personal es información que te identifica directamente, como tu nombre, dirección de correo electrónico y número de teléfono. La información no personal es información que no te identifica directamente, como el tipo de navegador que utilizas y la dirección IP de tu dispositivo.</p>

        <p>Recopilamos la información que nos proporcionas cuando te registras en nuestro Sitio, te comunicas con nosotros por correo electrónico o completas un formulario en nuestro Sitio. También recopilamos información automáticamente a través de cookies y otras tecnologías similares.</p>

        <h3>¿Cómo utilizamos la información que recopilamos?</h3>

        <p>Utilizamos la información que recopilamos para los siguientes fines:</p>

        <ul>
            <li>Proporcionar los servicios de Sonic Drive Studios: Utilizamos tu información para proporcionarte los servicios que solicitaste, como la producción musical, la grabación y la mezcla de audio.</li>
            <li>Mejorar nuestro Sitio: Utilizamos la información para mejorar la funcionalidad y la calidad de nuestro Sitio.</li>
            <li>Comunicarnos contigo: Utilizamos tu información para comunicarnos contigo sobre los servicios que ofrecemos, para responder a tus preguntas y para proporcionarte información relevante.</li>
            <li>Marketing: Podemos utilizar tu información para enviarte información sobre nuevos servicios y ofertas que creemos que pueden interesarte.</li>
        </ul>

        <h3>¿Compartimos la información que recopilamos?</h3>

        <p>No vendemos, alquilamos ni compartimos tu información personal con terceros, excepto cuando sea necesario para proporcionarte los servicios que solicitaste, cumplir con la ley o proteger nuestros derechos y propiedad.</p>

        <p>Podemos compartir información no personal con terceros para fines de análisis y mejora del Sitio y de nuestros servicios.</p>

        <h3>¿Cómo protegemos tu información?</h3>

        <p>Tomamos medidas de seguridad para proteger tu información contra el acceso no autorizado, el uso o la divulgación. Sin embargo, ten en cuenta que ningún método de transmisión por Internet o de almacenamiento electrónico es completamente seguro.</p>

        <h3>¿Cómo puedes acceder y controlar tu información?</h3>

        <p>Puedes acceder, corregir y eliminar tu información personal en cualquier momento a través de tu cuenta en nuestro Sitio. También puedes optar por no recibir correos electrónicos de marketing haciendo clic en el enlace de cancelación de suscripción en los correos electrónicos que te enviamos.</p>

        <h3>¿Cómo puedes obtener más información?</h3>

        <p>Si deseas obtener más información sobre nuestras prácticas de privacidad, por favor consulta nuestra Política de Cookies en nuestro Sitio.</p>

        <h3>Contacto</h3>

        <p>Si tienes alguna pregunta o comentario sobre nuestra política de privacidad, por favor contáctanos a través de nuestro <a href="{{ route('frontend.contact.index') }}">formulario de contacto</a> en nuestro Sitio.</p>
    </section>
@endsection