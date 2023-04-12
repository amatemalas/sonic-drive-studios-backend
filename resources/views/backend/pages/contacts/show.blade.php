@extends('backend.layouts.default')

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
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input class="form-control" readonly type="text" value="{{ $contact->name }}">
                    <label>Nombre</label>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input class="form-control" readonly type="text" value="{{ $contact->surname }}">
                    <label>Apelllidos</label>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input class="form-control" readonly type="text" value="{{ $contact->email }}">
                    <label>Email</label>
                </div>
            </div>
            @if ($contact->phone)    
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input class="form-control" readonly type="text" value="{{ $contact->phone }}">
                        <label>Teléfono</label>
                    </div>
                </div>
            @endif
            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input class="form-control" readonly type="text" value="{{ $contact->subject }}">
                    <label>Motivo de consulta</label>
                </div>
            </div>
            @if ($contact->band)
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input class="form-control" readonly type="text" value="{{ $contact->band }}">
                        <label>Banda</label>
                    </div>
                </div>
            @endif
            @if ($contact->genre)
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input class="form-control" readonly type="text" value="{{ $contact->genre }}">
                        <label>Género</label>
                    </div>
                </div>
            @endif
            @if ($contact->songs !== null)
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="form-floating">
                        <input class="form-control" readonly type="text" value="{{ $contact->songs == 0 ? '+10' : $contact->songs }}">
                        <label>Núm. canciones</label>
                    </div>
                </div>
            @endif
            @if ($contact->members)    
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="form-floating">
                        <input class="form-control" readonly type="text" value="{{ $contact->members }}">
                        <label>Núm. miembros banda</label>
                    </div>
                </div>
            @endif
            @if ($contact->estimation)
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input class="form-control" readonly type="text" value="{{ $contact->estimation }} €">
                        <label>Precio estimado</label>
                    </div>
                </div>
            @endif
            <div class="col-12 mb-3">
                <div class="form-floating">
                    <textarea class="form-control" readonly>{{ $contact->body }}</textarea>
                    <label>Mensaje</label>
                </div>
            </div>
        </div>
        <a href="{{ route('contacts.index') }}" class="btn btn-outline-primary">Atrás</a>
    </form>
@endsection

@push('scripts')
    <script>

    </script>
@endpush
