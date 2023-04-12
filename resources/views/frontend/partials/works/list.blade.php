@foreach ($years as $year)
    <div class="row my-4">
        <h3 class="border-bottom border-secondary mb-4 pb-2">
            {{ $year }}
        </h3>
        @foreach ($items as $item)
            @if ($item->year == $year)
                <div class="col-lg-4 col-md-6 mb-4">
                    @include('frontend.partials.works.item')
                </div>
            @endif
        @endforeach
    </div>
@endforeach