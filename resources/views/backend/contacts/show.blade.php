@extends('layouts.backend')

@section('title', 'Editar contacto | Área privada')

@section('content')

    <h2 class="mb-4 pb-3 border-bottom">Ver contacto</h2>
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
    <form action="{{ route('contacts.update', ['contact' => $contact]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input class="form-control" readonly type="text" value="{{ $contact->name }}">
        </div>
        <div class="mb-3">
            <input class="form-control" readonly type="text" value="{{ $contact->surname }}">
        </div>
        <div class="mb-3">
            <input class="form-control" readonly type="text" value="{{ $contact->email }}">
        </div>
        <div class="mb-3">
            <input class="form-control" readonly type="text" value="{{ $contact->phone }}">
        </div>
        <div class="mb-3">
            <input class="form-control" readonly type="text" value="{{ $contact->subject }}">
        </div>
        <div class="mb-3">
            <textarea class="form-control" readonly>{{ $contact->body }}</textarea>
        </div>
        <a href="{{ route('contacts.index') }}" class="btn btn-outline-primary">Atrás</a>
    </form>
@endsection

@push('scripts')
    <script>

    </script>
@endpush
