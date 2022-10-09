@extends('layouts.backend')

@section('title', 'Calendar | Área privada')

@section('content')
    <div id="calendar"></div>
@endsection

@push('scripts')
    <script>
        {{--let events = '{{ $events }}'.replace(/&quot;/g, '"').replace(/&lt;/g, '<').replace(/&gt;/g, '>');--}}

        {{--//tratamiento para campos richeditor--}}
        {{--events = events.replaceAll('<p>', '').replaceAll('</p>', '').replaceAll('\r', '').replaceAll('\n', '').replaceAll('<em>', '').replaceAll('</em>', '').replaceAll('<u>', '').replaceAll('</u>', '').replaceAll('<strong>', '').replaceAll('</strong>', '');--}}
        {{--console.log(events);--}}

        {{--events = JSON.parse(events);--}}

        {{--document.addEventListener('DOMContentLoaded', function () {--}}
        {{--    events.forEach((event) => calendar.addEvent(event));--}}
        {{--});--}}

    </script>
@endpush

@push('styles')
    <style>
        #calendar {
            max-height: 90%;
        }
    </style>
@endpush
