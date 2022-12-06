@extends('frontend.layouts.default')

@section('title', 'Inicio | Sonic Drive Studios')

@section('content')
    @include('frontend.partials.navbar')

    <!-- IMAGEN DE FONDO DEL HEADER -->
    <div class="hero back-primary"></div>

    <!-- CARDS -->
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <p class="section-title">¿Qué Hacemos?</p>
            </div>
            <div class="row">
                <p class="section-subtitle">Nuestras Especialidades</p>
            </div>
            <div class="row h-100 mt-3">
                <div
                    class="col-1 my-auto text-right"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <a
                        class="btn boton-cards"
                        href="#carouselCards"
                        role="button"
                        data-slide="prev"
                    >
                        <i class="fa fa-arrow-left fa-2x"></i>
                    </a>
                </div>
                <div class="col-10">
                    <div
                        id="carouselCards"
                        class="carousel slide"
                        data-ride="carousel"
                        data-aos="zoom-in"
                        data-aos-duration="1000"
                    >
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <img
                                                class="img-fluid"
                                                src="images/academia-de-sonido-estudio-durango.jpg"
                                            />
                                            <div class="card-body">
                                                <h4
                                                    class="card-title font-weight-bold"
                                                >
                                                    Grabaciones
                                                </h4>
                                                <p class="card-text">
                                                    Estudio Durango cuenta
                                                    con dos salas
                                                    perfectamente equipadas
                                                    para la grabación de
                                                    instrumentos. Desde
                                                    voces hasta baterías,
                                                    con material profesional
                                                    y todas las comodidades
                                                    para que los artistas
                                                    trabajen en un ambiente
                                                    relajado.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <img
                                                class="img-fluid"
                                                src="images/grabaciones-estudio-durango.jpg"
                                            />
                                            <div class="card-body">
                                                <h4
                                                    class="card-title font-weight-bold"
                                                >
                                                    Mezcla y mastering
                                                </h4>
                                                <p class="card-text">
                                                    Mezclamos y masterizamos
                                                    canciones hayan sido
                                                    grabadas en Estudio
                                                    Durango o en tu propia
                                                    casa por ti mismo. Nos
                                                    centramos en que los
                                                    temas suenen de manera
                                                    profesional en
                                                    plataformas como
                                                    Spotify, Youtube o
                                                    iTunes entre otras.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <img
                                                class="img-fluid"
                                                src="images/mezcla-y-mastering-estudio-durango.jpg"
                                            />
                                            <div class="card-body">
                                                <h4
                                                    class="card-title font-weight-bold"
                                                >
                                                    Cursos y Tutoriales de
                                                    Sonido
                                                </h4>
                                                <p class="card-text">
                                                    Aprende a grabar,
                                                    mezclar y masterizar con
                                                    nosotros en la sección
                                                    Cursos y Tutoriales.
                                                    Creamos clases sobre
                                                    grabación, mezcla,
                                                    mastering; o simplemente
                                                    del funcionamiento de un
                                                    estudio de grabación.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <img
                                                class="img-fluid"
                                                src="images/control_estudio_durango.jpg"
                                            />
                                            <div class="card-body">
                                                <h4
                                                    class="card-title font-weight-bold"
                                                >
                                                    Asesoría privada
                                                </h4>
                                                <p class="card-text">
                                                    Asesoría privada y
                                                    personalizada. Te
                                                    ayudamos en tu situación
                                                    concreta, sea cual sea,
                                                    vía videollamada o
                                                    llamada convencional.
                                                </p>
                                                <p class="card-text">
                                                    Nos encanta compartir,
                                                    ayudar y enseñar.
                                                    Cuéntanos tu caso y
                                                    saquemos el mayor
                                                    partido posible a tus
                                                    herramientas.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-1 my-auto"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <a
                        class="btn boton-cards"
                        href="#carouselCards"
                        role="button"
                        data-slide="next"
                    >
                        <i class="fa fa-arrow-right fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- TABS -->
    <section class="pt-5">
        <div class="container" data-aos="zoom-in" data-aos-duration="1000">
            <div class="row">
                <p class="section-title">¿Cómo Trabajamos?</p>
            </div>
            <div class="row">
                <p class="section-subtitle">Áreas de Trabajo</p>
            </div>
            <div class="row mt-3">
                <div class="col-xs-12">
                    <nav>
                        <div
                            class="nav nav-tabs nav-fill"
                            id="nav-tab"
                            role="tablist"
                        >
                            <a
                                class="nav-item nav-link active"
                                id="nav-home-tab"
                                data-toggle="tab"
                                href="#nav-home"
                                role="tab"
                                aria-controls="nav-home"
                                aria-selected="true"
                                >Sala de Grabación</a
                            >
                            <a
                                class="nav-item nav-link"
                                id="nav-profile-tab"
                                data-toggle="tab"
                                href="#nav-profile"
                                role="tab"
                                aria-controls="nav-profile"
                                aria-selected="false"
                                >Sala de Control</a
                            >
                            <a
                                class="nav-item nav-link"
                                id="nav-contact-tab"
                                data-toggle="tab"
                                href="#nav-contact"
                                role="tab"
                                aria-controls="nav-contact"
                                aria-selected="false"
                                >Zona de Relax</a
                            >
                            <a
                                class="nav-item nav-link"
                                id="nav-about-tab"
                                data-toggle="tab"
                                href="#nav-about"
                                role="tab"
                                aria-controls="nav-about"
                                aria-selected="false"
                                >El Taller</a
                            >
                        </div>
                    </nav>
                    <div
                        class="tab-content py-3 px-3 px-sm-0"
                        id="nav-tabContent"
                    >
                        <div
                            class="tab-pane fade show active"
                            id="nav-home"
                            role="tabpanel"
                            aria-labelledby="nav-home-tab"
                        >
                            <div class="row">
                                <div class="col-6">
                                    <p class="tab-content-title">
                                        Sala de Grabación
                                    </p>
                                    <p>
                                        Tratamiento acústico, iluminación
                                        cálida y climatización independiente
                                        son las características de la Sala
                                        de Grabación de Estudio Durango.
                                    </p>
                                    <p>
                                        Queremos que te sientas como en casa
                                        creando un ambiente relajado. Esa es
                                        nuestra filosofía para obtener lo
                                        mejor de cada artista.
                                    </p>
                                </div>
                                <div class="col-5 offset-1">
                                    <img
                                        src="images/sala_grabacion_estudio_durango.jpg"
                                        width="100%"
                                        height="auto"
                                    />
                                </div>
                            </div>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="nav-profile"
                            role="tabpanel"
                            aria-labelledby="nav-profile-tab"
                        >
                            <div class="row">
                                <div class="col-6">
                                    <p class="tab-content-title">
                                        Sala de Control
                                    </p>
                                    <p>
                                        El tratamiento acústico y los
                                        diferentes sistemas de monitores nos
                                        facilitan la toma de decisiones.
                                    </p>
                                    <p>
                                        Previos de gama alta, compresores y
                                        ecualizadores analógicos, plugins y
                                        muchas más herramientas para un
                                        acabado profesional a un nivel
                                        competitivo.
                                    </p>
                                </div>
                                <div class="col-5 offset-1">
                                    <img
                                        src="images/control_estudio_durango.jpg"
                                        width="100%"
                                        height="auto"
                                    />
                                </div>
                            </div>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="nav-contact"
                            role="tabpanel"
                            aria-labelledby="nav-contact-tab"
                        >
                            <div class="row">
                                <div class="col-6">
                                    <p class="tab-content-title">
                                        Zona de Relax
                                    </p>
                                    <p>
                                        Haz los retoques finales a tu
                                        proyecto o simplemente relájate un
                                        rato mientras no estés grabando.
                                    </p>
                                    <p>
                                        Disponemos de bebidas frías y snacks
                                        en Estudio Durango, aunque también
                                        te recomendamos salir a despejarte y
                                        disfrutar de las maravillosas
                                        vistas.
                                    </p>
                                </div>
                                <div class="col-5 offset-1">
                                    <img
                                        src="images/zona_relax_estudio_durango.jpg"
                                        width="100%"
                                        height="auto"
                                    />
                                </div>
                            </div>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="nav-about"
                            role="tabpanel"
                            aria-labelledby="nav-about-tab"
                        >
                            <div class="row">
                                <div class="col-6">
                                    <p class="tab-content-title">
                                        El Taller
                                    </p>
                                    <p>
                                        Los problemas aparecen en los
                                        momentos más inesperados, pero en
                                        Estudio Durango contamos con todo lo
                                        necesario para que ninguna sesión se
                                        vea interrumpida por fallos
                                        técnicos.
                                    </p>
                                    <p>
                                        Reparación de instrumentos,
                                        soldadura, creación de cables,
                                        previos, etc...
                                    </p>
                                </div>
                                <div class="col-5 offset-1">
                                    <img
                                        src="images/el_tallercito_estudio_durango.jpg"
                                        width="100%"
                                        height="auto"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AUDIO PLAYERS -->
    <section class="pt-5">
        <div class="parallax">
            <div class="container">
                <div
                    class="row pt-4"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <p class="section-title" style="color: white">
                        Trabajos Realizados
                    </p>
                </div>
                <div
                    class="row pt-4"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <div class="col-4 offset-1">
                        <div class="card p-2">
                            <div class="card-block">
                                <h4 class="card-title font-weight-bold">
                                    They Pray
                                </h4>
                                <div class="mp3-audio">
                                    <audio controls class="mp3-auido">
                                        <source
                                            src="audios/1 - The Pray.wav"
                                            type="audio/wav"
                                        />
                                        Your browser does not support the
                                        audio element.
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 offset-2">
                        <div class="card p-2">
                            <div class="card-block">
                                <h4 class="card-title font-weight-bold">
                                    Hated by Gods
                                </h4>
                                <div class="mp3-audio">
                                    <audio controls class="mp3-auido">
                                        <source
                                            src="audios/2 - Hated by Gods.wav"
                                            type="audio/wav"
                                        />
                                        Your browser does not support the
                                        audio element.
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="row pt-4"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <div class="col-4 offset-1">
                        <div class="card p-2">
                            <div class="card-block">
                                <h4 class="card-title font-weight-bold">
                                    Mistaken
                                </h4>
                                <div class="mp3-audio">
                                    <audio controls class="mp3-auido">
                                        <source
                                            src="audios/3 - Mistaken.wav"
                                            type="audio/wav"
                                        />
                                        Your browser does not support the
                                        audio element.
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 offset-2">
                        <div class="card p-2">
                            <div class="card-block">
                                <h4 class="card-title font-weight-bold">
                                    Collapse
                                </h4>
                                <div class="mp3-audio">
                                    <audio controls class="mp3-auido">
                                        <source
                                            src="audios/4 - Collapse.wav"
                                            type="audio/wav"
                                        />
                                        Your browser does not support the
                                        audio element.
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="row pt-4 pb-4"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <div class="col-4 offset-1">
                        <div class="card p-2">
                            <div class="card-block">
                                <h4 class="card-title font-weight-bold">
                                    The End of Everything
                                </h4>
                                <div class="mp3-audio">
                                    <audio controls class="mp3-auido">
                                        <source
                                            src="audios/5 - The End of Everything.wav"
                                            type="audio/wav"
                                        />
                                        Your browser does not support the
                                        audio element.
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 offset-2">
                        <div class="card p-2">
                            <div class="card-block">
                                <h4 class="card-title font-weight-bold">
                                    The Pray
                                </h4>
                                <div class="mp3-audio">
                                    <audio controls class="mp3-auido">
                                        <source
                                            src="audios/1 - The Pray.wav"
                                            type="audio/wav"
                                        />
                                        Your browser does not support the
                                        audio element.
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EQUIPO -->
    <section class="pt-5">
        <div class="container">
            <div class="row" data-aos="zoom-in" data-aos-duration="1000">
                <p class="section-title">Equipo</p>
            </div>
            <div class="row pt-4">
                <div
                    class="col-6"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <img src="images/recording.png" alt="" />
                </div>
                <div
                    class="col-6"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <img src="images/hardware.png" alt="" />
                </div>
            </div>
            <div class="row">
                <div
                    class="col-6"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <p class="section-subtitle">
                        RECORDING / MONITORING / CONVERTERS
                    </p>
                </div>
                <div
                    class="col-6"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <p class="section-subtitle">HARDWARE / OUTBOARD</p>
                </div>
            </div>
            <div class="row">
                <div
                    class="col-6"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <hr class="border border-dark" />
                </div>
                <div
                    class="col-6"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <hr class="border border-dark" />
                </div>
            </div>
            <div class="row">
                <div
                    class="col-6"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <p>
                        Raindirk Audio Concorde 2000 24 channel<br />
                        Otari MX5050 1/2” reel to reel<br />
                        Antelope Orion 32<br />
                        Apple Mac Pro<br />
                        Cubase Pro<br />
                        Quested S7<br />
                        Behringer Truth B2031
                    </p>
                </div>
                <div
                    class="col-6"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <p>
                        TL Audio PA 2001 Valve Preamp<br />
                        Neve 5012 Duo Preamp<br />
                        Neve 5043 Duo Comp<br />
                        TL Audio C1 Valve Compressor<br />
                        TL Audio 5051 Valve Processor<br />
                        SR CV Spring Reverb
                    </p>
                </div>
            </div>
            <div class="row pt-4">
                <div
                    class="col-6"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <img src="images/micro.png" alt="" />
                </div>
                <div
                    class="col-6"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <img src="images/backline.png" alt="" />
                </div>
            </div>
            <div class="row">
                <div
                    class="col-6"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <p class="section-subtitle">MICROPHONES</p>
                </div>
                <div
                    class="col-6"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <p class="section-subtitle">BACKLINE</p>
                </div>
            </div>
            <div class="row">
                <div
                    class="col-6"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <hr class="border border-dark" />
                </div>
                <div
                    class="col-6"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <hr class="border border-dark" />
                </div>
            </div>
            <div class="row">
                <div
                    class="col-6"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <p>
                        SE Electronics Ribbon R-1 (x2)<br />
                        Rode NT5 (x2)<br />
                        Shure SM57 (x4)<br />
                        Shure SM 58<br />
                        Shure 52A<br />
                        Senheisser 421 (x2)<br />
                        Sontronics Orpheus<br />
                        Beyerdynamic Opus 88 (x4)<br />
                        Beyerdynamic TG D70
                    </p>
                </div>
                <div
                    class="col-6"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                >
                    <p>
                        Drum kit: (Kirchhoff 22×20 Drum Bass, Gretsch
                        Catalina club Snare, Tama Stagestar 12” Tom and 14”
                        Floor tom, Zildjian 14”, 16”, 18”, 20” hit hat,
                        crash & ride K cymbals)<br />
                        Gibson Les Paul<br />
                        Fender Squier Jazzmaster<br />
                        Fender Blues Junior guitar amp<br />
                        KORG Microkorg<br />
                        Teenage Engineering OP-1<br />
                        Yamaha Electone<br />
                        Epiphone Valve Senior Amp<br />
                        Marshall JCM 2000 Dual super lead guitar amp<br />
                        Laney RB4 Bass amp<br />
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- MAPS -->
    <section class="pt-5">
        <div class="map-section">
            <div class="container">
                <div class="row">
                    <p class="section-title" style="color: white">
                        Contacto
                    </p>
                </div>
                <div class="row">
                    <div class="col-6 px-3 py-3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12343.659874651566!2d3.138628!3d39.335512!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2320f1b4dd9ff9d5!2sSonic%20Drive%20Studios!5e0!3m2!1ses!2ses!4v1649680257498!5m2!1ses!2ses"
                            width="100%"
                            height="480px"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
                    </div>
                    <div class="col-6 px-2 py-2">
                        <form action="">
                            <div class="campo-formulario mb-3">
                                <label for="inputNombre" class="form-label"
                                    >Nombre</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    name="Nombre"
                                    id="inputNombre"
                                    aria-describedby="helpId"
                                    placeholder="Nombre(*)"
                                />
                            </div>
                            <div class="campo-formulario mb-4">
                                <label for="inputEmail" class="form-label"
                                    >Email</label
                                >
                                <input
                                    type="email"
                                    class="form-control"
                                    name="Email"
                                    id="inputEmail"
                                    aria-describedby="emailHelpId"
                                    placeholder="Email(*)"
                                />
                            </div>
                            <div class="campo-formulario mb-3">
                                <label for="inputSelect" class="form-label"
                                    >Tipo Petición</label
                                >
                                <select
                                    class="form-select"
                                    name="Select"
                                    id="inputSelect"
                                >
                                    <option selected>------</option>
                                    <option value="Single">Single</option>
                                    <option value="EP">EP</option>
                                    <option value="Disco">Disco</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="campo-formulario mb-3">
                                <label for="inputArea" class="form-label"
                                    >Mensaje</label
                                >
                                <textarea
                                    class="form-control"
                                    name="Area"
                                    id="inputArea"
                                    rows="3"
                                    placeholder="Mensaje(*)"
                                ></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Enviar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <section class="pt-5">
        <footer class="footer-99382">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 pr-md-5">
                        <a href="#" class="footer-site-logo d-block mb-4"
                            >Colorlib</a
                        >
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Eligendi quasi perferendis
                            ratione perspiciatis accusantium.
                        </p>
                    </div>
                    <div class="col-md">
                        <h3>Discover</h3>
                        <ul class="list-unstyled nav-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <h3>About</h3>
                        <ul class="list-unstyled nav-links">
                            <li><a href="#">Clients</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Journal</a></li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <h3>Help</h3>
                        <ul class="list-unstyled nav-links">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Partners</a></li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <h3>Follow Us</h3>
                        <ul class="social list-unstyled">
                            <li>
                                <a href="#" class="pl-0"
                                    ><span class="icon-instagram"></span
                                ></a>
                            </li>
                            <li>
                                <a href="#"
                                    ><span class="icon-twitter"></span
                                ></a>
                            </li>
                            <li>
                                <a href="#"
                                    ><span class="icon-facebook"></span
                                ></a>
                            </li>
                            <li>
                                <a href="#"
                                    ><span class="icon-pinterest"></span
                                ></a>
                            </li>
                            <li>
                                <a href="#"
                                    ><span class="icon-dribbble"></span
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <div class="copyright mt-5 pt-5">
                            <p>
                                <small
                                    >&copy; 2019&mdash;2020 All Rights
                                    Reserved.</small
                                >
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
@endsection