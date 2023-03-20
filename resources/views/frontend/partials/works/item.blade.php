<div class="shadow h-100" data-aos="zoom-in">
    <div class="card bg-gradient border-0">
        <picture class="c-image c-image--100">
            <img class="card-image" src="{{ $item->path }}" alt="">
        </picture>
        <div class="card-body">
            <h4 class="card-title">{{ $item->name }} ({{ $item->type }})</h4>
            <h5 class="card-subtitle text-muted">
                {{ $item->band }}
            </h5>
            <div class="card-text">
                {{ $item->year }} · {{ count($item->songs) }} canción/es
            </div>
            <a class="btn btn-primary mt-3" href="{{ route('frontend.works.show', ['work' => $item]) }}">Ver más</a>
        </div>
    </div>
</div>