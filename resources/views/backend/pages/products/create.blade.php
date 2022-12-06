@extends('backend.layouts.default')

@section('title', 'Crear producto | Área privada')

@section('content')

    <h2 class="mb-4 pb-3 border-bottom">Crear producto</h2>
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
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
            @foreach (config()->get('translatable.locales') as $locale)
                <li class="nav-item">
                    <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ $locale }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $locale }}" type="button">{{ Str::upper($locale) }}</button>
                </li>
            @endforeach
        </ul>
        <div class="tab-content" id="myTabContent">
            @foreach (config()->get('translatable.locales') as $locale)
                <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ $locale }}" role="tabpanel" aria-labelledby="{{ $locale }}-tab">
                    <div class="row mb-3">
                        <div class="col-md-6 col-12">
                            <input class="form-control" placeholder="Título [{{ Str::upper($locale) }}]" type="text" name="{{ $locale }}[title]" value="{{ old('title') }}">
                        </div>
                        <div class="col-md-6 col-12">
                            <select class="form-select" name="{{ $locale }}[category]" id="category">
                                <option selected disabled>Categoría [{{ Str::upper($locale) }}]</option>
                                @foreach ($categoryOptions as $category)
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="ckeditor form-control" name="{{ $locale }}[description]">{{ old('description') }}</textarea>
                    </div>
                </div>
            @endforeach
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 col-12 mb-3">
                <div class="input-group">
                    <button type="button" class="input-group-text js-stock">+</button>
                    <button type="button" class="input-group-text js-stock">-</button>
                    <input class="form-control" placeholder="Stock" type="number" name="stock">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="input-group">
                    <div class="input-group-text">€</div>
                    <input class="form-control" placeholder="Precio" type="number" name="price" value="{{ old('price') }}">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <input class="form-control mb-3" value="{{ old('image') }}" type="file" name="image" id="js-image">
        </div>
        <input class="btn btn-primary" type="submit" value="Crear">
        <a href="{{ route('products.index') }}" class="btn btn-outline-primary">Atrás</a>
    </form>
@endsection

@push('scripts')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            $('.js-stock').click(function (e) {
                e.preventDefault();
                let stock = $('input[name=stock]');

                if ($(this).text() === '+') {
                    stock.val(parseInt(stock.val()) + 1);
                    return;
                }

                if (stock.val() == 0) {
                    return;
                }

                stock.val(parseInt(stock.val()) - 1);
            });
        });
    </script>
@endpush
