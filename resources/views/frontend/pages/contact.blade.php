@extends('frontend.layouts.default')

@section('title', 'Contacto | Sonic Drive Studios')

@section('content')
    
    @include('frontend.partials.head', [
        'title' => 'Contacto', 
    ])

    <div class="container py-5">
        <h2 class="text-primary">{{ __('Contacta con nosotros') }}</h2>
        <form id="contactForm" class="row g-3">
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

@push('scripts')
    <script>
        $('#contactForm').submit(function (e) {
            e.preventDefault();
            var data = new FormData(this);
            $.ajax({
                url: "{{ route('contacts.store') }}",
                type : 'post',
                data,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                success: function(response) {
                    $('#feedback').html(response);
                },
            });
            return false;
        });
    </script>
@endpush