@extends('backend.layouts.default')

@section('title', 'Contactos | Área privada')

@section('content')
    <div class="">
        <h2 class="mb-4 pb-3 border-bottom">Bandeja de entrada</h2>
        <div class="table-responsive">
            <table class="table table-striped" id="js-datatable">
                <thead>
                    <tr>
                        <th><i class="fas fa-eye"></i></th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Fecha recibido</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{!! $contact->is_read ? '<div class="dot bg-success"></div>' : '<div class="dot bg-danger"></div>' !!}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->surname }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->created_at }}</td>
                        <td>
                            <a href="{{ route('contacts.show', ['contact' => $contact->id]) }}" class="btn btn-icon waves-effect waves-light">
                                <span class="fa fa-eye"></span>
                            </a>

                            <form action="{{ route('contacts.destroy', ['contact' => $contact->id]) }}"
                                  class="d-inline" data-element="el usuario">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-icon waves-effect waves-light js-submit-deleterow" data-action="{{ route('contacts.destroy', ['contact' => $contact->id]) }}" data-token="{{ csrf_token() }}">
                                    <span class="fa fa-trash"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot></tfoot>
            </table>
            @include('backend.partials.pagination', ['collection' => $contacts])
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.pagination a').click(function (e) {
            e.preventDefault();
            const url = new URL($(this).attr('href'));
            $.ajax({
                url: "{{ route('contacts.paginate') }}/" + url.searchParams.get('page'),
                type : 'get',
                success: function(response) {
                    $('body').html(response);
                },
            });
        });

        $('.js-submit-deleterow').click(function (e) {
            e.preventDefault();
            const result = confirm("Do you really want to delete record?");
            
            if (result) {
                $.ajax({
                    url: $(this).data('action'),
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $(this).data('token')
                    },
                    complete: function(response) {
                        window.location.reload();
                    },
                });
            }
            
        });
    </script>
@endpush
