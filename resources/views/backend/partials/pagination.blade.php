@if($collection->lastPage() > 1)
    <ul class="pagination">
        @if($collection->previousPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $collection->previousPageUrl() }}">Anterior</a>
            </li>
        @endif
        @for($i=1; $i <= $collection->lastPage(); $i++)
            <li class="page-item {{ $i == $collection->currentPage() ? 'active' : '' }}">
                <a class="page-link" href="{{ $collection->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        @if($collection->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $collection->nextPageUrl() }}">Siguiente</a>
            </li>
        @endif
    </ul>
@endif