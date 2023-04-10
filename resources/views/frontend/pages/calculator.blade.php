@extends('frontend.layouts.default')

@section('title', 'Calcula tu presupuesto | Sonic Drive Studios')

@section('content')
    
    @include('frontend.partials.head', [
        'title' => 'Presupuesto', 
    ])

    <div class="container pt-5 pb-3">
        <h2 class="text-primary">{{ __('Calcula tu presupuesto aquí') }}</h2>
        <form id="calculateForm" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">{{ __('Nombre') }}</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="surname" class="form-label">{{ __('Apellidos') }}</label>
                    <input type="text" class="form-control" id="surname" name="surname" placeholder="Doe" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="something@example.test" required>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <label for="songs" class="form-label">{{ __('Número de canciones') }}</label>
                    <select class="form-select js-calculate" name="songs" id="songs">
                        @foreach (range(1, 9) as $i)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endforeach
                        <option value="0">+10</option>
                    </select>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <label for="instruments" class="form-label">{{ __('Número de instrumentos') }}</label>
                    <select class="form-select js-calculate" name="instruments" id="instruments">
                        @foreach (range(1, 9) as $i)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endforeach
                        <option value="0">+10</option>
                    </select>
                </div>
            </div>
            <div class="d-flex flex-md-row flex-column justify-content-between mt-5">
                <div class="js-total badge bg-primary fs-4 fw-normal mb-3">
                    Total estimado: ~<span id="estimation">0</span> €
                </div>
                <button class="btn btn-primary mb-3" type="submit">Calcular mi presupuesto</button>
            </div>
        </form>
    </div>
    <div class="container py-3">
        <hr>
    </div>
    <div class="container py-3 pb-5">
        <h2 class="text-primary">O concierta una cita para tu proyecto a medida</h2>
        @include('frontend.partials.form')
    </div>
@endsection

@push('scripts')
    <script>
        $('#calculateForm').submit(function (e) {
            e.preventDefault();
            var data = new FormData(this);
            $.ajax({
                url: "{{ route('calculator.calculate') }}",
                type : 'post',
                data,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                success: function(response) {
                    $('#estimation').html(response);
                },
            });
            return false;
        });
    </script>
@endpush