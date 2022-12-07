@extends('frontend.layouts.default')

@section('title', 'Inicio | Sonic Drive Studios')

@section('content')
    {{-- SLIDER --}}
    <section class="bg-gradient text-light">
        <div class="swiper js-slider" data-aos="zoom-in" data-aos-delay="500">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div>
                        <h2>Bienvenido a Sonic Drive Studios</h2>
                        <p>Grabación, servicios de mezcla, mastering y mucho más para garantizar un excelente resultado</p>
                    </div>
                    <picture class="c-image c-image--background opacity-25">
                        <img src="{{ asset('images/studio.jpg') }}" alt="">
                    </picture>
                </div>
                <div class="swiper-slide">
                    <div>
                        <h2>Bienvenido a Sonic Drive Studios</h2>
                        <p>Grabación, servicios de mezcla, mastering y mucho más para garantizar un excelente resultado</p>
                    </div>
                    <picture class="c-image c-image--background opacity-25">
                        <img src="{{ asset('images/studio.jpg') }}" alt="">
                    </picture>
                </div>
                <div class="swiper-slide">
                    <div>
                        <h2>Bienvenido a Sonic Drive Studios</h2>
                        <p>Grabación, servicios de mezcla, mastering y mucho más para garantizar un excelente resultado</p>
                    </div>
                    <picture class="c-image c-image--background opacity-25">
                        <img src="{{ asset('images/studio.jpg') }}" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    {{-- BIO SECTION --}}
    <section class="container text-center py-5 mt-5" data-aos="zoom-in">
        <h1 class="mb-3">Tu mezcla profesional a un solo paso</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sed nulla debitis id illo voluptatum,
            consectetur fuga assumenda iste quisquam repellendus natus neque doloribus dolorem praesentium totam cum
            molestias repudiandae ipsam atque, a explicabo eaque laborum eligendi? Quos repudiandae ex laborum deserunt
            debitis eaque officiis atque voluptatibus pariatur commodi corrupti dicta mollitia minima magni veniam suscipit,
            error adipisci facere, exercitationem eos possimus in. Eaque eveniet, amet voluptas vitae numquam necessitatibus
            eos nihil cum veniam in nemo, asperiores, excepturi libero minima et repudiandae aliquam quia nobis! Unde sit
            amet nostrum excepturi, doloribus aliquid eos est consequatur neque nisi in praesentium quos?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo quibusdam ullam placeat voluptatem libero,
            nesciunt dolore sequi quasi, totam facilis blanditiis sed quaerat quidem nisi similique beatae magnam in fugit.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam repudiandae dolor ipsa, laboriosam beatae
            nulla, expedita eaque dolorem cupiditate numquam illum nobis ducimus. Odio, officia nulla. Totam recusandae
            officia rem.</p>
    </section>

    {{-- SERVICES SECTION --}}
    <section class="container py-5" data-aos="zoom-in">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 p-5">
                <picture class="c-image c-image--115 rounded">
                    <img src="{{ asset('images/material.jpg') }}" alt="">
                </picture>
            </div>

            <div class="col-12 col-md-6">
                <h5 class="text-primary">SERVICIOS</h5>
                <h2 class="mb-3 display-6">Descubre nuestros servicios</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum sint quibusdam tempore deleniti assumenda
                    qui nihil aut voluptatibus non provident possimus quisquam voluptas commodi.</p>
                <div class="my-4">
                    <div class="d-flex">
                        <div class="">
                            <img class="mb-3" width="100" src="{{ asset('images/micro.png') }}" alt="">
                        </div>
                        <div class="">
                            <h4>Servicio de grabación</h4>
                            <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque
                                necessitatibus nulla optio illum, odio libero labore beatae reiciendis inventore dignissimos
                                sed perferendis nobis possimus, aspernatur aliquam, quae est a vero.</p>
                        </div>
                    </div>
                </div>
                <div class="my-4">
                    <div class="d-flex">
                        <div class="">
                            <img class="mb-3" width="100" src="{{ asset('images/recording.png') }}" alt="">
                        </div>
                        <div class="">
                            <h4>Servicio de grabación</h4>
                            <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque
                                necessitatibus nulla optio illum, odio libero labore beatae reiciendis inventore dignissimos
                                sed perferendis nobis possimus, aspernatur aliquam, quae est a vero.</p>
                        </div>
                    </div>
                </div>
                <div class="my-4">
                    <div class="d-flex">
                        <div class="">
                            <img class="mb-3" width="100" src="{{ asset('images/backline.png') }}" alt="">
                        </div>
                        <div class="">
                            <h4>Servicio de grabación</h4>
                            <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque
                                necessitatibus nulla optio illum, odio libero labore beatae reiciendis inventore dignissimos
                                sed perferendis nobis possimus, aspernatur aliquam, quae est a vero.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECCIÓN TRABAJOS REALIZADOS --}}
    <section class="container-fluid py-5" data-aos="zoom-in">
        <div class="container">
            <div class="d-lg-flex justify-content-between align-items-center">
                <h3 class="display-6 mb-lg-0 mb-3">Trabajos realizados</h3>
                <div class="swiper-buttons">
                    <button class="js-carousel-button-prev">
                        <i class="fa-solid fa-chevron-left fa-xl"></i>
                    </button>
                    <button class="js-carousel-button-next">
                        <i class="fa-solid fa-chevron-right fa-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="swiper js-carousel m-lg-5 mt-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-lg-4">
                                <img src="{{ asset('images/rise-rise.png') }}" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-lg-8 d-flex align-items-center">
                                <div class="card-body">
                                    <h5 class="card-title">Rise on Fire - Rise</h5>
                                    <h6 class="card-subtitle text-muted mb-3">Single</h6>
                                    <p class="card-text">Single grabado para la banda Rise on Fire durante el verano de
                                        2021. Para este trabajo se ha utilizado nuestro Peavey 5150 mezclado con el plugin
                                        Fortin Nameless, GGD para las baterías con el preset P4...</p>
                                    <p class="card-text"><small class="text-muted">Fecha grabación: 11/06/2021 · Fecha
                                            salida: 11/06/2022</small></p>
                                    <div class="btn btn-primary">Ver más</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-lg-4">
                                <img src="{{ asset('images/rise-rise.png') }}" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-lg-8 d-flex align-items-center">
                                <div class="card-body">
                                    <h5 class="card-title">Rise on Fire - Rise</h5>
                                    <h6 class="card-subtitle text-muted mb-3">Single</h6>
                                    <p class="card-text">Single grabado para la banda Rise on Fire durante el verano de
                                        2021. Para este trabajo se ha utilizado nuestro Peavey 5150 mezclado con el plugin
                                        Fortin Nameless, GGD para las baterías con el preset P4...</p>
                                    <p class="card-text"><small class="text-muted">Fecha grabación: 11/06/2021 · Fecha
                                            salida: 11/06/2022</small></p>
                                    <div class="btn btn-primary">Ver más</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACTA CON NOSOTROS --}}
    <section class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/studio.jpg') }}">
        <div class="container py-5">
            <div class="bg-light rounded p-5">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="display-6">{{ __('Contacto') }}</h3>
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">{{ __('Nombre') }}</label>
                                <input type="text" class="form-control" id="name" placeholder="William" required>
                            </div>
                            <div class="col-md-6">
                                <label for="surname" class="form-label">{{ __('Apellidos') }}</label>
                                <input type="text" class="form-control" id="surname" placeholder="Putney" required>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input type="email" class="form-control" id="email" placeholder="something@example.test" required>
                            </div>
                            <div class="col-12">
                                <label for="subject" class="form-label">{{ __('Motivo de consulta') }}</label>
                                <input type="text" class="form-control" id="subject" placeholder="Duda sobre precios o producto" required>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">{{ __('Mensaje') }}</label>
                                <textarea class="form-control" id="message" placeholder="Mensaje" required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="legal" required>
                                    <label class="form-check-label" for="legal">
                                        {{ __('Acepto los términos y condiciones') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">{{ __('Enviar') }}</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-4">
                        <iframe id="maps" class="w-100 h-100" src="https://maps.google.com/maps?q=42%20Carrer%20de%20sa%20Torre,%20Santany%C3%AD&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
