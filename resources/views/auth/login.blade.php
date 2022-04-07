@extends('layouts.auth')

@section('title', 'Login | Área privada')

@section('content')
    <img class="w-50 mb-5" src="{{ asset('images/logo-black.png') }}" alt="">
    <form action="{{ route('login.custom') }}" method="post">
        @csrf
        <div class="mb-3">
            <input class="form-control" placeholder="Email" type="text" name="email" id="email">
        </div>
        <div class="mb-3">
            <input class="form-control" placeholder="Password" type="password" name="password" id="password">
        </div>
        <input class="btn btn-primary w-50" type="submit" value="Acceder">
    </form>
@endsection
