{{-- SLIDER --}}
<section class="bg-gradient text-light position-relative">
    <div class="c-head text-center" data-aos="zoom-in">
        <div>
            <h1>{{ $title }}</h1>
            @if (isset($subtitle))
                <h3>{{ $subtitle }}</h3>
            @endif
        </div>
        <picture class="c-image c-image--background opacity-25 z-index-front">
            @if (isset($image))
                <img src="{{ $image }}" alt="">
            @else
                <img src="{{ asset('images/studio.jpg') }}" alt="">
            @endif
        </picture>
    </div>
</section>