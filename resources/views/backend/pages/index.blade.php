@extends('backend.layouts.default')

@section('title', 'Dashboard | Área privada')

@section('content')
    <div class="text-center">
        <h1>¡Bienvenido {{ auth()->user()->name }}!</h1>
        <h2>Tienes <span class="badge bg-primary rounded-pill" style="padding: 5px;">{{ $notifications }}</span> {{ $notifications == 1 ? 'nueva notificación' : 'nuevas notificaciones' }}</h2>
    </div>
@endsection
