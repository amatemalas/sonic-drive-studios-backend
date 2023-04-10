<form id="contactForm" class="row g-3">
    @csrf
    <div class="col-md-6">
        <label for="name" class="form-label">{{ __('Nombre') }}</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="William">
    </div>
    <div class="col-md-6">
        <label for="surname" class="form-label">{{ __('Apellidos') }}</label>
        <input type="text" class="form-control" id="surname" name="surname" placeholder="Putney">
    </div>
    <div class="col-12">
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="something@example.test">
    </div>
    <div class="col-12">
        <label for="subject" class="form-label">{{ __('Motivo de consulta') }}</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Duda sobre precios o producto">
    </div>
    <div class="col-12">
        <label for="message" class="form-label">{{ __('Mensaje') }}</label>
        <textarea class="form-control" id="message" placeholder="Mensaje" name="body"></textarea>
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="legal" name="legal">
            <label class="form-check-label" for="legal">
                {{ __('Acepto los términos y condiciones') }}
            </label>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">{{ __('Enviar') }}</button>
    </div>
</form>
<div id="feedback" class="alert fade my-3"></div>

@push('scripts')
    <script>
        $('#contactForm').submit(function (e) {
            e.preventDefault();
            const form = $(this);
            const data = new FormData(this);
            $.ajax({
                url: "{{ route('frontend.contact.store') }}",
                type : 'post',
                data,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                success: function(response) {
                    $('.border-danger').removeClass('border-danger');
                    $('#feedback').html(response.message);

                    if (response.status === 'ok') {
                        $('input').removeClass('border-danger');
                        $('#feedback').addClass('alert-success');
                        form[0].reset();
                    } else if (response.status === 'ko') {
                        $('#feedback').addClass('alert-danger');
                        $('input[name=' + response.field + ']').addClass('border-danger');
                        $('input[name=' + response.field + ']').focus();
                    } else {
                        $('#feedback').addClass('alert-warning');
                    }

                    $('#feedback').addClass('show');

                    setTimeout(function () {
                        $('#feedback').removeClass('show');
                        $('#feedback').removeClass('alert-danger alert-success alert-warning');
                    }, 5000);
                },
            });
            return false;
        });
    </script>
@endpush