@extends('layouts.backend')

@section('title', 'Perfil | Área privada')

@section('content')

    <h2 class="mb-4 pb-3 border-bottom">Editar perfil</h2>
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
    <form action="{{ route('users.update', ['user' => $user]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input class="form-control" placeholder="Email" type="text" name="email" id="email" value="{{ $user->email }}">
        </div>
        <div class="mb-3">
            <input class="form-control" placeholder="Password" type="password" name="password" id="password">
        </div>
        <div class="mb-3">
            <input class="form-control" placeholder="Confirm password" type="password" name="confirm_password" id="confirm_password">
        </div>
        <div class="mb-3">
            <input class="form-control" value="{{ $user->image }}" type="file" name="image" id="js-image">

            @if($user->image)
                <img id="js-image-preview" src="{{ asset('storage/' .  $user->image) }}" />
            @endif
        </div>
        <input class="btn btn-primary" type="submit" value="Guardar">
    </form>
@endsection

@push('scripts')
    <script>

    </script>
@endpush
