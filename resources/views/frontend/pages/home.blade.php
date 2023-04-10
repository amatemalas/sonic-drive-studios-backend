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
            </div>
        </div>
    </section>

    {{-- BIO SECTION --}}
    <section class="container text-center py-5 mt-5" data-aos="zoom-in">
        <h1 class="mb-3 text-primary">Tu mezcla profesional a un solo paso</h1>
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
            <div class="col-12 col-md-6">
                <h5 class="text-primary">SERVICIOS</h5>
                <h2 class="mb-3 display-6">Descubre nuestros servicios</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum sint quibusdam tempore deleniti assumenda
                    qui nihil aut voluptatibus non provident possimus quisquam voluptas commodi.</p>
                <div class="my-4">
                    <div class="d-flex">
                        <div class="me-4">
                            <i class="fa-solid fa-microphone fa-xl"></i>
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
                        <div class="me-4">
                            <i class="fa-solid fa-guitar fa-xl"></i>
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
                        <div class="me-4">
                            <i class="fa-solid fa-music fa-xl"></i>
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
            <div class="col-12 col-md-6 p-md-5">
                <picture class="c-image c-image--115 rounded">
                    <img src="{{ asset('images/material.jpg') }}" alt="">
                </picture>
            </div>
        </div>
    </section>

    {{-- SECCIÓN TRABAJOS REALIZADOS --}}
    @include('frontend.partials.works.featured', compact('works'))

    {{-- SECCIÓN INFO EXTRA --}}
    <section class="container py-5" data-aos="zoom-in">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 p-md-5 py-5">
                <picture class="c-image c-image--75 rounded">
                    <img src="{{ asset('images/gear.jpg') }}" alt="">
                </picture>
            </div>

            <div class="col-12 col-md-6">
                <h5 class="text-primary">PRESUPUESTO</h5>
                <h2 class="mb-3 display-6">Cuéntanos tu idea de proyecto</h2>
                <p>¿Estás pensando en iniciar la grabación de tu trabajo? Gracias a nuestro calculador de proyecto podemos darte un precio estimado y, si lo prefieres, puedes enviarnos tu propuesta para poder valorar más en detalle y ponerle fecha y hora para empezar.</p>
                <a class="btn btn-outline-primary" href="{{ route('calculator') }}">
                    Calcula tu presupuesto aquí
                </a>
            </div>
        </div>
    </section>

    {{-- CONTACTA CON NOSOTROS --}}
    <section class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/studio.jpg') }}">
        <div class="container py-5 text-dark">
            <div class="bg-light rounded p-5" data-aos="zoom-in">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="display-6">{{ __('Contacto') }}</h3>
                        @include('frontend.partials.form')
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-4">
                        <iframe id="maps" class="w-100 h-100" src="https://maps.google.com/maps?q=42%20Carrer%20de%20sa%20Torre,%20Santany%C3%AD&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
