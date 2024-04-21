@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->url(1) }}">&lsaquo;&lsaquo;</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            @if($y=$paginator->currentPage()-3>1)
                @for( $y=$paginator->currentPage()-3; $y<$paginator->currentPage(); $y++ )
                    <li class="page-item  @if($paginator->currentPage() == $y ) {{ "active" }} @endif">
                        <a href="?{{ $paginator->getPageName() }}={{ $y }} "><span class="page-link">{{ $y }}</span></a>
                    </li>
                @endfor
            @endif

            <li class="page-item active">
                <a href="?{{ $paginator->getPageName() }}={{ $paginator->currentPage() }} "><span class="page-link">{{ $paginator->currentPage() }}</span></a>
            </li>

            @if($paginator->currentPage()+4 < $paginator->lastPage())
                @for( $x=$paginator->currentPage()+1; $x < $paginator->currentPage()+4; $x++ )
                    <li class="page-item">
                        <a href="?{{ $paginator->getPageName() }}={{ $x }} "><span class="page-link">{{ $x }}</span></a>
                    </li>
                @endfor
            @endif
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href=" {{ $paginator->url($paginator->lastPage()) }} ">&rsaquo;&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>

@endif
