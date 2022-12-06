@extends('frontend.layouts.default')

@section('title', 'Inicio | Sonic Drive Studios')

@section('content')
    <div class="swiper bg-secondary">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('images/logo-white.png') }}" />
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/logo-white.png') }}" />
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/logo-white.png') }}" />
            </div>
        </div>
    </div>
@endsection