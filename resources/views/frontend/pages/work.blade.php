@extends('frontend.layouts.default')

@section('content')
    {{-- SLIDER --}}
    <section class="bg-gradient text-light">
        <div class="c-head text-center" data-aos="zoom-in" data-aos-delay="500">
            <div>
                <h1>{{ $work->name }}</h1>
                <h3>{{ $work->band }}</h3>
            </div>
            <picture class="c-image c-image--background opacity-25">
                <img src="{{ $work->path }}" alt="...">
            </picture>
        </div>
    </section>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3">
                <img class="rounded w-100" src="{{ $work->path }}" alt="...">
            </div>
            <div class="col-md-9">
                <h2 class="text-primary">{{ $work->name }}</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic saepe minima dignissimos excepturi, accusamus voluptatum. Magnam, voluptates. Ducimus excepturi fuga corrupti amet nihil exercitationem nostrum, perferendis quaerat magnam consectetur aut.</p>
            </div>
        </div>
        
    </div>
@endsection