<div class="modal fade" id="songModalCreate" tabindex="-1" aria-labelledby="songModalCreateLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="songModalCreateLabel">Crear canción</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="songCreateForm" action="{{ route('songs.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="work_id" value="{{ $work->id }}">
            <div class="mb-3">
                <input class="form-control" placeholder="Título" type="text" name="title" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <input class="form-control mb-3" value="{{ old('sample') }}" type="file" name="sample" id="js-sample" accept="audio/*">
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
    $('.js-store').click(function (e) {
      $('#songCreateForm').submit();
    })
    
    $('#songCreateForm').submit(function (e) {
      e.preventDefault();
      var data = new FormData(this);
      data.append('sample', $('#js-sample')[0].files[0]);
      $.ajax({
          url: "{{ route('songs.store') }}",
          type : 'post',
          data,
          processData: false,
          contentType: false,
          headers: {
              'X-CSRF-TOKEN': $('input[name="_token"]').val()
          },
          success: function(response) {
              $('#songsList').html(response);
              $('.btn-close').click();
              window.location.reload();

          },
      });
      return false;
    });
  </script>
@endpush