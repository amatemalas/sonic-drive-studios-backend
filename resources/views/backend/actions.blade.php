<a href="{{ route('contacts.edit',['contact' => $contact->id]) }}" class="btn btn-icon waves-effect waves-light">
    <span class="fa fa-edit"></span>
</a>

<form action="{{route('contacts.destroy', ['contact' => $contact->id])}}"
      class="d-inline" data-element="el usuario">
    @method('DELETE')
    <button type="submit" class="btn btn-icon waves-effect waves-light js-submit-deleterow">
        <span class="fa fa-trash-o"></span>
    </button>
</form>

<a href="{{ route('impersonate', ['id' => $contact->id]) }}" class="btn btn-icon waves-effect waves-light">
    <span class="fa fa-sign-out"></span>
</a>
