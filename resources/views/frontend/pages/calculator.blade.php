@extends('frontend.layouts.default')

@section('content')
    
    @include('frontend.partials.head', [
        'title' => 'Presupuesto', 
    ])

    <div class="container pt-5 pb-3">
        <h2 class="text-primary">Calcula tu presupuesto aquí</h2>
        <form method="POST">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">{{ __('Nombre') }}</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="something@example.test" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <label for="songs" class="form-label">{{ __('Número de canciones') }}</label>
                    <select class="form-select js-calculate" name="songs" id="songs">
                        @foreach (range(1, 9) as $i)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endforeach
                        <option value="0">+10</option>
                    </select>
                </div>
                <div class="col-lg-3 col-md-6">
                    <label for="instruments" class="form-label">{{ __('Número de instrumentos') }}</label>
                    <select class="form-select js-calculate" name="instruments" id="instruments">
                        @foreach (range(1, 9) as $i)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endforeach
                        <option value="0">+10</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-5">
                <div class="js-total badge bg-primary fs-4 fw-normal">
                    Total estimado: <span>0</span> €
                </div>
                <button class="btn btn-primary" type="submit">Enviar mi presupuesto</button>
            </div>
        </form>
    </div>
    <div class="container py-3">
        <hr>
    </div>
    <div class="container py-3 pb-5">
        <h2 class="text-primary">O concierta una cita para tu proyecto a medida</h2>
        <form class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label">{{ __('Nombre') }}</label>
                <input type="text" class="form-control" id="name" placeholder="William" required>
            </div>
            <div class="col-md-6">
                <label for="surname" class="form-label">{{ __('Apellidos') }}</label>
                <input type="text" class="form-control" id="surname" placeholder="Putney" required>
            </div>
            <div class="col-12">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input type="email" class="form-control" id="email" placeholder="something@example.test" required>
            </div>
            <div class="col-12">
                <label for="subject" class="form-label">{{ __('Motivo de consulta') }}</label>
                <input type="text" class="form-control" id="subject" placeholder="Duda sobre precios o producto" required>
            </div>
            <div class="col-12">
                <label for="message" class="form-label">{{ __('Mensaje') }}</label>
                <textarea class="form-control" id="message" placeholder="Mensaje" required></textarea>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="legal" required>
                    <label class="form-check-label" for="legal">
                        {{ __('Acepto los términos y condiciones') }}
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">{{ __('Enviar') }}</button>
            </div>
        </form>
    </div>
@endsection