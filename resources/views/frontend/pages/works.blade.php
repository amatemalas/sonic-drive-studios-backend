@extends('frontend.layouts.default')
@section('title', 'Trabajos | Sonic Drive Studios')

@section('content')
    
    @include('frontend.partials.head', [
        'title' => 'Trabajos', 
    ])

    <div class="container py-5">
        @include('frontend.partials.works.list', ['items' => $works])
    </div>
@endsection