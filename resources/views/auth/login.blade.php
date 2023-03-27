@extends('backend.layouts.auth')

@section('title', 'Login | Área privada')

@section('content')
    <img class="w-25 mb-5" src="{{ asset('images/logo-white-3.png') }}" alt="">
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
