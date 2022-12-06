@extends('backend.layouts.default')

@section('title', 'Ver evento | Área privada')

@section('content')

    <h2 class="mb-4 pb-3 border-bottom">Ver evento</h2>
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
    <form method="post" action="{{ route('events.update', compact('event')) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input class="form-control" placeholder="Título" type="text" name="title" value="{{ $event->title }}">
        </div>
        <div class="mb-3">
            <textarea class="form-control mb-3" placeholder="Descripción" value="{{ $event->description }}" type="file" name="description" accept="audio/*"></textarea>
        </div>
        <div class="mb-3">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="js-customer-exists" {{ $event->customer ? 'checked' : '' }}>
                <label class="form-check-label" for="js-customer-exists">Cliente existente</label>
              </div>
        </div>
        <div class="mb-3 js-customer d-none">
            <select class="form-select" name="customer_id" id="customer">
                <option value="" selected disabled>Cliente</option>
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }} {{ $event->customer->id == $customer->id ? 'checked' : '' }}">{{ $customer->name }} ({{ $customer->band }})</option>
                @endforeach
            </select>
        </div>
        <div class="row mb-3">
            <div class="col-6">
                <input class="form-control" placeholder="Fecha" type="datetime-local" name="start" value="{{ $event->start }}">
            </div>
            <div class="col-6">
                <input class="form-control" placeholder="Fecha" type="datetime-local" name="end" value="{{ $event->end }}">
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-1">
                <a href="{{ route('events.index') }}" class="btn btn-outline-primary">Atrás</a>
            </div>
            <div class="col-1 text-end">
                <form action="{{route('events.destroy', compact('event'))}}"
                    class="d-inline" data-element="el evento">
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger js-submit-deleterow">
                      <span class="fa fa-trash"></span>
                  </button>
              </form>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
    </script>
@endpush
