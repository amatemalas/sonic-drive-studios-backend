@extends('frontend.layouts.default')

@section('title', 'Sobre nosotros | Sonic Drive Studios')

@section('content')
    
    @include('frontend.partials.head', [
        'title' => 'Sobre Nosotros', 
    ])

    <div class="container py-5">

        <section class="container text-center py-5 mt-5" data-aos="zoom-in">
            <h1 class="mb-3 text-primary">Tu mezcla profesional a un solo paso</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sed nulla debitis id illo voluptatum,
                consectetur fuga assumenda iste quisquam repellendus natus neque doloribus dolorem praesentium totam cum
                molestias repudiandae ipsam atque, a explicabo eaque laborum eligendi? Quos repudiandae ex laborum deserunt
                debitis eaque officiis atque voluptatibus pariatur commodi corrupti dicta mollitia minima magni veniam suscipit,
                error adipisci facere, exercitationem eos possimus in. Eaque eveniet, amet voluptas vitae numquam necessitatibus
                eos nihil cum veniam in nemo, asperiores, excepturi libero minima et repudiandae aliquam quia nobis! Unde sit
                amet nostrum excepturi, doloribus aliquid eos est consequatur neque nisi in praesentium quos?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo quibusdam ullam placeat voluptatem libero,
                nesciunt dolore sequi quasi, totam facilis blanditiis sed quaerat quidem nisi similique beatae magnam in fugit.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam repudiandae dolor ipsa, laboriosam beatae
                nulla, expedita eaque dolorem cupiditate numquam illum nobis ducimus. Odio, officia nulla. Totam recusandae
                officia rem.</p>
        </section>

        <section class="container py-5" data-aos="zoom-in">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 p-md-5 py-5">
                    <picture class="c-image c-image--75 rounded">
                        <img src="{{ asset('images/gear.jpg') }}" alt="">
                    </picture>
                </div>
    
                <div class="col-12 col-md-6">
                    <h5 class="text-primary">PRESUPUESTO</h5>
                    <h2 class="mb-3 display-6">Cuéntanos tu idea de proyecto</h2>
                    <p>¿Estás pensando en iniciar la grabación de tu trabajo? Gracias a nuestro calculador de proyecto podemos darte un precio estimado y, si lo prefieres, puedes enviarnos tu propuesta para poder valorar más en detalle y ponerle fecha y hora para empezar.</p>
                    {{-- <a class="btn btn-outline-primary" href="{{ route('calculator') }}">
                        Calcula tu presupuesto aquí
                    </a> --}}
                </div>
            </div>
        </section>

        <section class="container py-5" data-aos="zoom-in">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h5 class="text-primary">PRESUPUESTO</h5>
                    <h2 class="mb-3 display-6">Cuéntanos tu idea de proyecto</h2>
                    <p>¿Estás pensando en iniciar la grabación de tu trabajo? Gracias a nuestro calculador de proyecto podemos darte un precio estimado y, si lo prefieres, puedes enviarnos tu propuesta para poder valorar más en detalle y ponerle fecha y hora para empezar.</p>
                    {{-- <a class="btn btn-outline-primary" href="{{ route('calculator') }}">
                        Calcula tu presupuesto aquí
                    </a> --}}
                </div>
                <div class="col-12 col-md-6 p-md-5 py-5">
                    <picture class="c-image c-image--75 rounded">
                        <img src="{{ asset('images/gear.jpg') }}" alt="">
                    </picture>
                </div>
            </div>
        </section>
    </div>
@endsection