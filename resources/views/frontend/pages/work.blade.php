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
    <div class="container pt-4">
        <ul class="c-breadcrumbs">
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="{{ route('frontend.works.index') }}">Trabajos</a></li>
            <li>{{ $work->band }}</li>
            <li>{{ $work->name }}</li>
        </ul>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3">
                <img class="rounded w-100" src="{{ $work->path }}" alt="...">
            </div>
            <div class="col-md-9">
                <h2 class="text-primary">{{ $work->name }} ({{ $work->type }})</h2>
                <h4>{{ $work->band }}</h4>
                <h4>{{ $work->year }}</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic saepe minima dignissimos excepturi,
                    accusamus voluptatum. Magnam, voluptates. Ducimus excepturi fuga corrupti amet nihil exercitationem
                    nostrum, perferendis quaerat magnam consectetur aut.</p>
            </div>
        </div>

        <div class="row mt-5">
            @if ($work->spotify)
                <div class="col-12">
                    <h2 class="text-primary">Escuchar en Spotify</h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/{{ $work->spotify }}?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                </div>
            @else
                <div class="col-12">
                    <h2 class="text-primary">Lista de canciones</h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <h4 class="text-primary mb-4">Canciones</h4>
                    <div class="accordion" id="songsAccordion">
                        @foreach ($work->songs as $song)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{ $loop->index }}" aria-expanded="true" aria-controls="collapse-{{ $loop->index }}">
                                        {{ $song->title }}
                                    </button>
                                </h2>
                                <div id="collapse-{{ $loop->index }}" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#songsAccordion">
                                    <div class="accordion-body">
                                        <audio controls="controls">
                                            <source src="{{ storage_path($song->sample) }}" type="audio/wav" />
                                            <source src="{{ storage_path($song->sample) }}" type="audio/mp3" />
                                            Your browser does not support the audio element.
                                        </audio>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

    </div>
@endsection
