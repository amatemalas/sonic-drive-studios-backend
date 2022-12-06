@extends('backend.layouts.default')

@section('title', 'Dashboard')

@section('content')
    <div class="text-center">
        <h1>¡Bienvenido {{ auth()->user()->name }}!</h1>
        <h2>Tienes <span class="badge bg-primary rounded-pill" style="width: 30px;height: 30px;padding: 5px;">{{ $notifications }}</span> nuevas notificaciones</h2>
    </div>
@endsection
