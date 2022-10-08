@extends('layouts.backend')

@section('title', 'Productos | Área privada')

@section('content')
    <div class="">
        <h2 class="mb-4 pb-3 border-bottom">Productos</h2>
        <div class="table-responsive">
            <table class="table table-striped" id="js-datatable">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a href="{{ route('products.edit',['product' => $product->id]) }}" class="btn btn-icon waves-effect waves-light">
                                <span class="fa fa-edit"></span>
                            </a>

                            <form action="{{route('products.destroy', ['product' => $product->id])}}"
                                  class="d-inline" data-element="el usuario">
                                @method('DELETE')
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
            @if($products->lastPage() > 1)
                <ul class="pagination">
                    @if($products->previousPageUrl())
                        <li class="page-item disabled">
                            <a class="page-link" href="{{ $products->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Anterior</a>
                        </li>
                    @endif
                    @for($i=1; $i <= $products->lastPage(); $i++)
                        <li class="page-item {{ $i == $products->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
                    @if($products->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $products->nextPageUrl() }}">Siguiente</a>
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
                url: "{{ route('contacts.paginate') }}/" + url.searchParams.get('page'),
                type : 'get',
                success: function(response) {
                    $('body').html(response);
                },
            });
        });
    </script>
@endpush
