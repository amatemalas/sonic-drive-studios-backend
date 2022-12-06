@extends('backend.layouts.default')

@section('title', 'Calendar | Área privada')

@section('content')
    @csrf
    <div class="row mb-2">
        <div class="col-2">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eventModalCreate">
                Nuevo evento
            </button>
        </div>
    </div>
    <div id="calendar"></div>
@endsection

@include('backend.pages.events.create', compact('customers'))

@push('scripts')
    <script>
        $(document).ready(function () {
            let events = '{{ $events }}'.replace(/&quot;/g, '"').replace(/&lt;/g, '<').replace(/&gt;/g, '>');

            //tratamiento para campos richeditor
            events = events.replaceAll('<p>', '').replaceAll('</p>', '').replaceAll('\r', '').replaceAll('\n', '').replaceAll('<em>', '').replaceAll('</em>', '').replaceAll('<u>', '').replaceAll('</u>', '').replaceAll('<strong>', '').replaceAll('</strong>', '');

            events = JSON.parse(events);

            events.forEach((event) => {
                window.calendar.addEvent(event);
            });
        });
    </script>
@endpush

@push('styles')
    <style>
        #calendar {
            max-height: 90%;
        }

        .fc-event {
            cursor: pointer;
        }
    </style>
@endpush
