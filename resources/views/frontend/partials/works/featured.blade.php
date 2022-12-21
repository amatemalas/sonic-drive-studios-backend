<section class="container-fluid py-5" data-aos="zoom-in">
    <div class="container">
        <div class="d-lg-flex justify-content-between align-items-center">
            <h3 class="display-6 mb-lg-0 mb-3 text-primary">Trabajos realizados</h3>
            <div class="swiper-buttons">
                <button class="js-carousel-button-prev text-light mx-2">
                    <i class="fa-solid fa-arrow-left fa-xl"></i>
                </button>
                <button class="js-carousel-button-next text-light mx-2">
                    <i class="fa-solid fa-arrow-right fa-xl"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="swiper js-carousel">
        <div class="swiper-wrapper">
            @foreach ($works as $work)
                <div class="swiper-slide">
                    <div class="card my-5 mx-3 bg-gradient border-0 shadow">
                        <div class="row g-0">
                            <div class="col-lg-4">
                                <picture class="card-img c-image c-image--100">
                                    <img src="{{ $work->path }}" alt="...">
                                </picture>
                            </div>
                            <div class="col-lg-8 d-flex align-items-center position-relative overflow-hidden">
                                <img class="card-banner" src="{{ $work->path }}" alt="...">
                                <div class="card-body z-index-1">
                                    <h4 class="card-title">{{ $work->name }} ({{ $work->type }})</h4>
                                    <h5 class="card-subtitle text-muted mb-3">
                                        {{ $work->band }}
                                    </h5>
                                    <div class="card-text">
                                        {{ $work->year }} {{ count($work->songs) > 0 ? ' · ' . count($work->songs) . ' canción/es' : '' }} 
                                    </div>
                                    <a href="{{ route('frontend.works.show', compact('work')) }}" class="btn btn-primary mt-3">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="text-center">
        <a href="{{ route('frontend.works.index') }}" class="btn btn-primary">
            Ver todos los trabajos
        </a>
    </div>
</section>