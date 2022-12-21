@extends('frontend.layouts.default')
@section('title', 'Productos | Sonic Drive Studios')

@section('content')

    @include('frontend.partials.head', ['title' => 'Productos'])

    <div class="container py-5">
        @include('frontend.partials.products.list', ['items' => $products])
    </div>
@endsection