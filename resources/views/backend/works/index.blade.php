@extends('layouts.backend')

@section('title', 'Contactos')

@section('content')
    <div class="">

        <h2 class="mb-4 pb-3 border-bottom d-flex justify-content-between">Trabajos realizados <a href="{{ route('works.create') }}" class="btn btn-primary">Crear</a></h2>
        @if (session('status-message'))
            <div class="alert alert-{{session('status')}}">
                {{ session('status-message') }}
            </div>
        @endif

        @if (session('errors'))
            <div class="alert alert-danger mb-3">
                <ul class="">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-striped" id="js-datatable">
                <thead>
                <tr>
                    <th></th>
                    <th>Nombre</th>
                    <th>Banda</th>
                    <th>Año</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($works as $work)
                    <tr>
                        <td class="w-25"><img width="100px" src="{{ $work->path }}" class="rounded-circle me-2"></td>
                        <td>{{ $work->name }}</td>
                        <td>{{ $work->band }}</td>
                        <td>{{ $work->year }}</td>
                        <td>
                            <a href="{{ route('works.edit',['work' => $work->id]) }}" class="btn btn-icon waves-effect waves-light">
                                <span class="fa fa-edit"></span>
                            </a>

                            <form action="{{route('works.destroy', ['work' => $work->id])}}" method="post"
                                  class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-icon waves-effect waves-light js-submit-deleterow">
                                    <span class="fa fa-trash"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot></tfoot>
            </table>
            @if($works->lastPage() > 1)
                <ul class="pagination">
                    @if($works->previousPageUrl())
                        <li class="page-item disabled">
                            <a class="page-link" href="{{ $works->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Anterior</a>
                        </li>
                    @endif
                    @for($i=1; $i <= $works->lastPage(); $i++)
                        <li class="page-item {{ $i == $works->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $works->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
                    @if($works->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $works->nextPageUrl() }}">Siguiente</a>
                        </li>
                    @endif
                </ul>
            @endif
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.pagination a').click(function (e) {
            e.preventDefault();
            const url = new URL($(this).attr('href'));
            $.ajax({
                url: "{{ route('works.paginate') }}/" + url.searchParams.get('page'),
                type : 'get',
                success: function(response) {
                    $('body').html(response);
                },
            });
        });
    </script>
@endpush
