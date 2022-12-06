@extends('backend.layouts.default')

@section('title', 'Ajustes | Área privada')

@section('content')
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
    <h2 class="mb-4 pb-3 border-bottom">Ajustes generales</h2>
    <form action="">
        <div class="row">
            <div class="col-6">
                <!-- Checked switch -->
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="notifications" checked />
                    <label class="form-check-label" for="notifications">Notificaciones por correo</label>
                </div>
            </div>
            <div class="col-6">
                <a href="{{ route('user.cache.clear') }}" class="btn btn-outline-primary js-cache">Limpiar la caché</a>
            </div>
        </div>
    </form>
@endsection
