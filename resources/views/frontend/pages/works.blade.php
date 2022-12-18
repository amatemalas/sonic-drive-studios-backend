@extends('frontend.layouts.default')

@section('content')
    {{-- SLIDER --}}
    <section class="bg-gradient text-light">
        <div class="c-head text-center" data-aos="zoom-in" data-aos-delay="500">
            <div>
                <h1>Trabajos</h1>
            </div>
            <picture class="c-image c-image--background opacity-25">
                <img src="{{ asset('images/studio.jpg') }}" alt="">
            </picture>
        </div>
    </section>
    <div class="container py-5">
        @include('frontend.partials.works.list', ['items' => $works])
    </div>
@endsection