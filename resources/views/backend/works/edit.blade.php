@extends('layouts.backend')

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
        <div class="mb-3">
            <input class="form-control" placeholder="Título" type="text" name="name" value="{{ $work->name }}">
        </div>
        <div class="mb-3">
            <input class="form-control" placeholder="Banda" type="text" name="band" value="{{ $work->band }}">
        </div>
        <div class="mb-3">
            <input class="form-control" placeholder="Año" type="text" name="year" value="{{ $work->year }}">
        </div>
        <div class="mb-3">
            <input class="form-control" placeholder="Link Spotify" type="text" name="spotify" value="{{ $work->spotify }}">
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
                        @include('backend.works.songs.list', ['songs' => $work->songs])
                    </div>
                </div>
            </div>
        </div>
        <input class="btn btn-primary" type="submit" value="Actualizar">
        <a href="{{ route('works.index') }}" class="btn btn-outline-primary">Atrás</a>
    </form>
@endsection

@include('backend.works.songs.create', ['work' => $work])