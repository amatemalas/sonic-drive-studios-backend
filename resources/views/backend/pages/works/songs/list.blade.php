<div class="table-responsive mt-2">
    <table class="table table-striped" id="js-datatable">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Preview</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody class="overflow-auto" style="max-height: 200px">
        @foreach($songs as $song)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $song->title }}</td>
                <td>
                    <audio controls>
                        <source src="{{ $song->path }}" type="audio/mp3">
                    </audio>
                </td>
                <td>
                    <a href="{{ route('songs.edit',['song' => $song->id]) }}" class="btn btn-icon waves-effect waves-light">
                        <span class="fa fa-edit"></span>
                    </a>

                    <button type="button" class="btn btn-icon waves-effect waves-light js-submit-deleterow" data-action="{{ route('songs.destroy', ['song' => $song->id]) }}" data-token="{{ csrf_token() }}">
                        <span class="fa fa-trash"></span>
                    </button>
            </tr>
        @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
</div>

@push('scripts')
    <script>
        $('.js-submit-deleterow').click(function (e) {
            e.preventDefault();
            const result = confirm("Do you really want to delete record?");
                
            if (result) {
                $.ajax({
                    url: $(this).data('action'),
                    type : 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $(this).data('token')
                    },
                    success: function(response) {
                        $('#songsList').html(response);
                        window.location.reload();
                    },
                });
            }
            
        });
    </script>
@endpush