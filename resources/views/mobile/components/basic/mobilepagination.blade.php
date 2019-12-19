@if ($paginator->hasPages())
    <div class="mobile-pagination align-items-center d-flex justify-content-between align-items-center p-2 shadow">
        {{-- Previous Page Link --}}
        <div class="p-2 ml-3">
            @if ($paginator->onFirstPage())
                <span class="font-24 col-turq SofiaPro-Medium disabled" aria-hidden="true">@svg('icon-chevron-left', 'pagination-arrow')</span>
            @else
                <a class="font-24 col-turq SofiaPro-Medium " href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">@svg('icon-chevron-left', 'pagination-arrow')</a>
            @endif
        </div>

        <div class="mx-auto">
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <div class="mobile-page-item active text-center" aria-current="page"><span class="mobile-page-link font-22">{{ $page }} of {{$paginator->lastPage()}}</span></div>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        {{-- Next Page Link --}}
        <div class="p-2 mr-3">
            @if ($paginator->hasMorePages())
                <a class="font-24 col-turq SofiaPro-Medium" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">@svg('icon-chevron-right', 'pagination-arrow')</a>
            @else
                <span class="font-24 col-turq SofiaPro-Medium disabled" aria-hidden="true">@svg('icon-chevron-right', 'pagination-arrow')</span>
            @endif
        </div>
    </div>
@endif
