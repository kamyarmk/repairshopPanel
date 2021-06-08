@if ($paginator->hasPages())
    <nav aria-label="Photos Search Navigation">                    
        <ul class="pagination justify-content-end mt-2">
            <li>
                <p class="text-sm text-gray-700 leading-5">
                    {!! __('Showing') !!}
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </li>
            @if ($paginator->onFirstPage())
                <li class="page-item">
                    <span class="page-link" tabindex="-1" aria-label="Previous">
                    {!! __('pagination.previous') !!}
                    </span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1" aria-label="Previous">
                    {!! __('pagination.previous') !!}
                    </a>
                </li>
            @endif
            
            
            
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span aria-disabled="true">
                        <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{ $element }}</span>
                    </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        {!! __('pagination.next') !!}
                    </a>
                </li>
            @else
                <li class="page-item">
                    <span class="page-link" aria-label="Next">
                        {!! __('pagination.next') !!}
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
