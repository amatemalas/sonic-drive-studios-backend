@extends('frontend.layouts.default')

@section('title', 'Contacto | Sonic Drive Studios')

@section('content')
    
    @include('frontend.partials.head', [
        'title' => 'Contacto', 
    ])

    <div class="container py-5">
        <h2 class="text-primary">{{ __('Contacta con nosotros') }}</h2>
        @include('frontend.partials.form')
    </div>
@endsection