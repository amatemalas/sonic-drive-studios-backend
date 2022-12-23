@extends('frontend.layouts.default')
@section('title',  $work->name . ' | Sonic Drive Studios')

@section('content')
    
    @include('frontend.partials.head', [
        'title' => $work->name, 
        'subtitle' => $work->band,
        'image' => $work->path,
    ])

    <div class="container pt-4">
        <ul class="c-breadcrumbs" data-aos="fade-up">
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="{{ route('frontend.works.index') }}">Trabajos</a></li>
            <li>{{ $work->band }}</li>
            <li>{{ $work->name }}</li>
        </ul>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3 mb-3" data-aos="fade-right">
                <img class="rounded w-100" src="{{ $work->path }}" alt="...">
            </div>
            <div class="col-md-9" data-aos="fade-left">
                <h2 class="text-primary">{{ $work->name }} ({{ $work->type }})</h2>
                <h4>{{ $work->band }}</h4>
                <h4>{{ $work->year }}</h4>
                <div class="d-flex my-2">
                    <span class="badge bg-primary fs-6 fw-normal me-2">{{ $work->genre }}</span>
                </div>
                <p>{{ $work->description }}</p>
            </div>
        </div>

        <div class="row mt-5" data-aos="fade-right">
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
        @if (count($relatedWorks) > 0)
            <div class="row mt-5" data-aos="fade-right">
                <h3 class="text-primary mb-4">Otros trabajos de {{ $work->band }}</h3>
                <div class="swiper js-carousel">
                    <div class="swiper-wrapper mb-2">
                        @foreach ($relatedWorks as $work)
                            <div class="swiper-slide">
                                <div class="shadow h-100">
                                    <div class="card bg-dark border-0">
                                        <picture class="c-image c-image--100">
                                            <img class="card-image" src="{{ $work->path }}" alt="">
                                        </picture>
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $work->name }} ({{ $work->type }})</h4>
                                            <h5 class="card-subtitle text-muted">
                                                {{ $work->band }}
                                            </h5>
                                            <div class="card-text">
                                                {{ $work->year }} · {{ count($work->songs) }} canción/es
                                            </div>
                                            <a class="btn btn-primary mt-3" href="{{ route('frontend.works.show', ['work' => $work]) }}">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
