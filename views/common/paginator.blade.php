@if ($paginator->hasPages())
    <div>
        <div class="pure-button-group">
            {{-- Previous Page Link --}}
            @if (!$paginator->onFirstPage())
                <a class="pure-button" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                       aria-label="@lang('pagination.previous')">«</a>
            @endif

            {{-- Todo: insert page numbers --}}

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="pure-button" href="{{ $paginator->nextPageUrl() }}" rel="next"
                       aria-label="@lang('pagination.next')">»</a>
            @endif
        </div>
    </div>
@endif
