@if ($paginator->hasPages())
    <div class="row mobile-pagination align-items-center">
        {{-- Previous Page Link --}}
        <div class="col-3 mobile-prev-page">
            @if ($paginator->onFirstPage())
                <span class="font-24 col-turq SofiaPro-Medium disabled" aria-hidden="true">@svg('icon-chevron-down')</span>
            @else
                <a class="font-24 col-turq SofiaPro-Medium " href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">@svg('icon-chevron-down')</a>
            @endif
        </div>

        <div class="col-6 mobile-current-page">
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <div class="mobile-page-item active text-center" aria-current="page"><span class="mobile-page-link">{{ $page }} of {{$paginator->lastPage()}}</span></div>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        <div class="col-3 mobile-next-page">
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="font-24 col-turq SofiaPro-Medium" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">@svg('icon-chevron-down')</a>
            @else
                <span class="font-24 col-turq SofiaPro-Medium disabled" aria-hidden="true">@svg('icon-chevron-down')</span>
            @endif
        </div>
    </div>
@endif
