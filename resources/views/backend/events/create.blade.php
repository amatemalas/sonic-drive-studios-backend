<div class="modal fade" id="eventModalCreate" tabindex="-1" aria-labelledby="eventModalCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eventModalCreateLabel">Crear evento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="songCreateForm" action="{{ route('songs.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control" placeholder="Título" type="text" name="title" value="{{ old('title') }}">
                </div>
                <div class="mb-3">
                    <textarea class="form-control mb-3" placeholder="Descripción" value="{{ old('description') }}" type="file" name="description" accept="audio/*"></textarea>
                </div>
                <div class="mb-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="js-customer-exists">
                        <label class="form-check-label" for="js-customer-exists">Cliente existente</label>
                      </div>
                </div>
                <div class="mb-3 js-customer d-none">
                    <select class="form-select" name="customer_id" id="customer">
                        <option value="" selected disabled>Cliente</option>
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->name }} ({{ $customer->band }})</option>
                        @endforeach
                    </select>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <input class="form-control" placeholder="Fecha" type="datetime-local" name="start" value="{{ old('start') }}">
                    </div>
                    <div class="col-6">
                        <input class="form-control" placeholder="Fecha" type="datetime-local" name="end" value="{{ old('end') }}">
                    </div>
                </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary js-store">Crear</button>
        </div>
      </div>
    </div>
  </div>
  
  @push('scripts')
    <script>
        $('#js-customer-exists').change(function (e) {
            $('.js-customer').toggleClass('d-none');
        })

        $('.js-store').click(function (e) {
            $('#songCreateForm').submit();
        })
      
        $('#songCreateForm').submit(function (e) {
            e.preventDefault();
            var data = new FormData(this);
            // data.append('sample', $('#js-sample')[0].files[0]);
            $.ajax({
                url: "{{ route('events.store') }}",
                type : 'post',
                data,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                success: function(response) {
                    $('#request-update').html(response);
                    $('.btn-close').click();
                    window.location.reload();
    
                },
            });
            return false;
        });
    </script>
  @endpush