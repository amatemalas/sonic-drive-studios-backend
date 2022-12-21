<div class="row">
    @foreach ($items as $item)
        <div class="col-lg-4 col-md-6">
            @include('frontend.partials.products.item')
        </div>
    @endforeach
</div>