@extends('backend.layouts.default')

@section('title', 'Editar canción | Área privada')

@section('content')

    <h2 class="mb-4 pb-3 border-bottom">Editar canción de {{ $song->work->band }}</h2>
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
    <form action="{{ route('songs.update', ['song' => $song]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input class="form-control" placeholder="Título" type="text" name="title" value="{{ $song->title }}">
        </div>
        <div class="mb-3">
            <input class="form-control mb-3" value="{{ $song->sample }}" type="file" name="sample" id="js-sample" accept="audio/*">
            @if ($song->sample)
                <audio controls>
                    <source src="{{ $song->path }}">
                </audio>
            @endif
        </div>
        <input class="btn btn-primary" type="submit" value="Actualizar">
        <a href="{{ route('works.edit', ['work' => $song->work]) }}" class="btn btn-outline-primary">Atrás</a>
    </form>
@endsection
