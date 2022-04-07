@extends('layouts.backend')

@section('title', 'Contactos')

@section('content')
    <div class="">
        <h2 class="mb-4 pb-3 border-bottom">Bandeja de entrada</h2>
        <div class="table-responsive">
            <table class="table table-striped" id="js-datatable">
                <thead>
                    <tr>
                        <th><i class="fas fa-eye"></i></th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Fecha recibido</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{!! $contact->is_read ? '<div class="dot bg-success"></div>' : '<div class="dot bg-danger"></div>' !!}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->surname }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->created_at }}</td>
                        <td>
                            <a href="{{ route('contacts.show',['contact' => $contact->id]) }}" class="btn btn-icon waves-effect waves-light">
                                <span class="fa fa-edit"></span>
                            </a>

                            <form action="{{route('contacts.destroy', ['contact' => $contact->id])}}"
                                  class="d-inline" data-element="el usuario">
                                @method('DELETE')
                                <button type="submit" class="btn btn-icon waves-effect waves-light js-submit-deleterow">
                                    <span class="fa fa-trash"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot></tfoot>
            </table>
            @if($contacts->lastPage() > 1)
                <ul class="pagination">
                    @if($contacts->previousPageUrl())
                        <li class="page-item disabled">
                            <a class="page-link" href="{{ $contacts->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                    @endif
                    @for($i=1; $i <= $contacts->lastPage(); $i++)
                        <li class="page-item {{ $i == $contacts->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $contacts->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
                    @if($contacts->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $contacts->nextPageUrl() }}">Next</a>
                        </li>
                    @endif
                </ul>
            @endif
        </div>
    </div>
@endsection
