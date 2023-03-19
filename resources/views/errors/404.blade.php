@extends('frontend.layouts.default')
@section('title',  'Error 404 | Sonic Drive Studios')

@section('content')
    {{-- SLIDER --}}
    <section class="bg-gradient text-light">
        <div class="swiper js-slider" data-aos="zoom-in" data-aos-delay="500">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div>
                        <h1>Error 404</h1>
                        <h2>Página no encontrada</h2>
                    </div>
                    <picture class="c-image c-image--background opacity-25">
                        <img src="{{ asset('images/studio.jpg') }}" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </section>
@endsection
