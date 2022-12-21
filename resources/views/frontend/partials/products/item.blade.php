<div class="shadow h-100">
    <div class="card bg-dark border-0">
        <picture class="c-image c-image--100">
            <img class="card-image" src="{{ $item->path }}" alt="">
        </picture>
        <div class="card-body">
            <h4 class="card-title">{{ $item->title }}</h4>
            <a class="btn btn-primary mt-3" href="{{ route('frontend.products.show', ['product' => $item]) }}">Ver más</a>
        </div>
    </div>
</div>