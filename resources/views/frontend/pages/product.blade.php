@extends('frontend.layouts.default')
@section('title',  $product->title . ' | Sonic Drive Studios')

@section('content')

    @include('frontend.partials.head', [
        'title' => $product->title,
        'subtitle' => $product->productCategory->name,
        'image' => $product->path,
    ])

    <div class="container py-5">
        <div class="row">
            <div class="col-md-3 mb-3">
                <img class="rounded w-100" src="{{ $product->path }}" alt="...">
            </div>
            <div class="col-md-9">
                <h2 class="text-primary">{{ $product->title }}</h2>
                <h4 class="text-muted">{{ $product->productCategory->name }}</h4>
                <div class="badge badge-primary bg-primary fs-5 fw-normal mb-3">{{ $product->price }} €</div>
                <p>Cantidad en stock: {{ $product->stock }}</p>
                <div>{!! $product->description !!}</div>
                <a class="btn btn-primary disabled" href="#" disabled>Obtener</a>
            </div>
        </div>
    </div>
@endsection
