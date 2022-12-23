@extends('backend.layouts.default')

@section('title', 'Editar trabajo | Área privada')

@section('content')

    <h2 class="mb-4 pb-3 border-bottom">Editar trabajo</h2>
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
    <form action="{{ route('works.update', ['work' => $work]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6 col-12">
                <input class="form-control" placeholder="Título" type="text" name="name" value="{{ $work->name }}">
            </div>
            <div class="col-md-6 col-12">
                <select class="form-select" name="type" id="type">
                    <option value="" disabled>Tipo</option>
                    <option value="Single" {{ $work->type === 'Single' ? 'selected' : '' }}>Single</option>
                    <option value="EP" {{ $work->type === 'EP' ? 'selected' : '' }}>EP</option>
                    <option value="LP" {{ $work->type === 'LP' ? 'selected' : '' }}>LP</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 col-12">
                <input class="form-control" placeholder="Banda" type="text" name="band" value="{{ $work->band }}">
            </div>
            <div class="col-md-6 col-12">
                <input class="form-control" placeholder="Año" type="text" name="year" value="{{ $work->year }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 col-12">
                <input class="form-control" placeholder="Género" type="text" name="genre" value="{{ $work->genre }}">
            </div>
            <div class="col-md-6 col-12">
                <input class="form-control" placeholder="Link Spotify" type="text" name="spotify" value="{{ $work->spotify }}">
            </div>
        </div>
        <div class="mb-3">
            <textarea class="form-control" placeholder="Descripción" type="text" name="description">{{ $work->description }}</textarea>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12">
                <div class="mb-3">
                    <input class="form-control mb-3" value="{{ $work->image }}" type="file" name="image" id="js-image">
        
                    @if($work->image)
                        <img class="rounded" id="js-image-preview" src="{{ $work->path }}" />
                    @endif
                </div>
            </div>
            <div class="col-sm-6 col-12">
                <div class="mb-3">
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#songModalCreate">Crear canciones</button>
                    <div id="songsList">
                        @include('backend.pages.works.songs.list', ['songs' => $work->songs])
                    </div>
                </div>
            </div>
        </div>
        <input class="btn btn-primary" type="submit" value="Actualizar">
        <a href="{{ route('works.index') }}" class="btn btn-outline-primary">Atrás</a>
    </form>
@endsection

@include('backend.pages.works.songs.create', ['work' => $work])