@extends('layouts.backend')

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
        <div class="mb-3">
            <input class="form-control" placeholder="Título" type="text" name="name" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <input class="form-control" placeholder="Banda" type="text" name="band" value="{{ old('band') }}">
        </div>
        <div class="mb-3">
            <input class="form-control" placeholder="Año" type="text" name="year" value="{{ old('year') }}">
        </div>
        <div class="mb-3">
            <input class="form-control" placeholder="Link Spotify" type="text" name="spotify" value="{{ old('spotify') }}">
        </div>
        <div class="mb-3">
            <input class="form-control mb-3" value="{{ old('image') }}" type="file" name="image" id="js-image">
        </div>
        <input class="btn btn-primary" type="submit" value="Crear">
        <a href="{{ route('works.index') }}" class="btn btn-outline-primary">Atrás</a>
    </form>
@endsection
