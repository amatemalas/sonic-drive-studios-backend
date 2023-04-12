<div class="row">
    @foreach ($items as $item)
        <div class="col-lg-4 col-md-6 mb-4">
            @include('frontend.partials.works.item')
        </div>
    @endforeach
</div>