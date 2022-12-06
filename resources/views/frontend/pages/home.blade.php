@extends('frontend.layouts.default')

@section('title', 'Inicio | Sonic Drive Studios')

@section('content')
    {{-- SLIDER --}}
    <section class="bg-gradient text-light">
        <div class="swiper" data-aos="zoom-in" data-aos-delay="500">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div>
                        <h2>Bienvenido a Sonic Drive Studios</h2>
                        <p>Grabación, servicios de mezcla, mastering y mucho más para garantizar un excelente resultado</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <h2>Bienvenido a Sonic Drive Studios</h2>
                        <p>Grabación, servicios de mezcla, mastering y mucho más para garantizar un excelente resultado</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <h2>Bienvenido a Sonic Drive Studios</h2>
                        <p>Grabación, servicios de mezcla, mastering y mucho más para garantizar un excelente resultado</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SERVICES SECTION --}}
    <section class="container py-5 mt-5" data-aos="zoom-in">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <img class="rounded" src="https://picsum.photos/500/700" alt="">
            </div>

            <div class="col-12 col-md-6">
                <h5 class="text-muted">SERVICIOS</h5>
                <h2 class="mb-3 display-5">Descubre nuestros servicios</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum sint quibusdam tempore deleniti assumenda qui nihil aut voluptatibus non provident possimus quisquam voluptas commodi.</p>
                <div class="my-4">
                    <div class="d-flex">
                        <div class="">
                            <img class="mb-3" width="100" src="{{ asset('images/micro.png') }}" alt="">
                        </div>
                        <div class="">
                            <h4>Servicio de grabación</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque necessitatibus nulla optio illum, odio libero labore beatae reiciendis inventore dignissimos sed perferendis nobis possimus, aspernatur aliquam, quae est a vero.</p>
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
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque necessitatibus nulla optio illum, odio libero labore beatae reiciendis inventore dignissimos sed perferendis nobis possimus, aspernatur aliquam, quae est a vero.</p>
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
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque necessitatibus nulla optio illum, odio libero labore beatae reiciendis inventore dignissimos sed perferendis nobis possimus, aspernatur aliquam, quae est a vero.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection