@extends('layouts.backend')

@section('title', 'Ajustes | Área privada')

@section('content')
    <h2 class="mb-4 pb-3 border-bottom">Ajustes generales</h2>
    <form action="{{ route('login.custom') }}" method="post">
        @csrf
        <div class="mb-3">
            <input class="form-control" placeholder="Email" type="text" name="email" id="email">
        </div>
        <div class="mb-3">
            <input class="form-control" placeholder="Password" type="password" name="password" id="password">
        </div>
        <input class="btn btn-primary" type="submit" value="Acceder">
    </form>
@endsection
