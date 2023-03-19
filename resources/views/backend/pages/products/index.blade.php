@extends('backend.layouts.default')

@section('title', 'Productos | Área privada')

@section('content')
    <div class="">
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
        <h2 class="mb-4 pb-3 border-bottom d-flex justify-content-between">Productos <a href="{{ route('products.create') }}" class="btn btn-primary">Crear</a></h2>
        <div class="table-responsive">
            <table class="table table-striped" id="js-datatable">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->price }} €</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <a href="{{ route('products.edit',['product' => $product]) }}" class="btn btn-icon waves-effect waves-light">
                                <span class="fa fa-edit"></span>
                            </a>

                            <form action="{{route('products.destroy', ['product' => $product])}}"
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
            @include('backend.partials.pagination', ['collection' => $products])
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
