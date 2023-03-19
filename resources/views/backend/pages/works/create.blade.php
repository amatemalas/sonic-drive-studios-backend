@extends('backend.layouts.default')

@section('title', 'Crear trabajo | Área privada')

@section('content')

    <h2 class="mb-4 pb-3 border-bottom">Crear trabajo</h2>
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
    <form action="{{ route('works.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6 col-12">
                <div class="form-floating">
                    <input class="form-control" placeholder="Título" type="text" name="name" value="{{ old('name') }}">
                    <label>Título</label>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-floating">
                    <select class="form-select" name="type" id="type">
                        <option value="" disabled selected>Tipo</option>
                        <option value="Single">Single</option>
                        <option value="EP">EP</option>
                        <option value="LP">LP</option>
                    </select>
                    <label>Tipo</label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 col-12">
                <div class="form-floating">
                    <input class="form-control" placeholder="Banda" type="text" name="band" value="{{ old('band') }}">
                    <label>Banda</label>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-floating">
                    <input class="form-control" placeholder="Año" type="text" name="year" value="{{ old('year') }}">
                    <label>Año</label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 col-12">
                <div class="form-floating">
                    <input class="form-control" placeholder="Género" type="text" name="genre" value="{{ old('genre') }}">
                    <label>Género</label>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-floating">
                    <input class="form-control" placeholder="Spotify URI" type="text" name="spotify" value="{{ old('spotify') }}">
                    <label>Spotify URI</label>
                </div>
            </div>
        </div>
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
                    <div class="form-floating mb-3">
                        <textarea class="ckeditor form-control" name="{{ $locale }}[description]">{{ old($locale . '.description') }}</textarea>
                        <label>Descripción [{{ mb_strtoupper($locale) }}]</label>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mb-3">
            <input class="form-control mb-3" value="{{ old('image') }}" type="file" name="image" id="js-image">
        </div>
        <input class="btn btn-primary" type="submit" value="Crear">
        <a href="{{ route('works.index') }}" class="btn btn-outline-primary">Atrás</a>
    </form>
@endsection
