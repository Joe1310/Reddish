<head>
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
</head>
@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled box"><span>{{ $element }}</span></li>
            @endif
        
            {{-- Array Of Links --}}
            @if (is_array($element))
                @php
                    $count = 0;
                @endphp
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active box"><span>{{ $page }}</span></li>
                    @else
                        @if ($page == 1 || $page == $paginator->lastPage() || $page == $paginator->currentPage() - 1 || $page == $paginator->currentPage() + 1)
                            <li class="box"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endif
                    @php
                        $count++;
                    @endphp
                @endforeach
            @endif
        @endforeach
    </ul>
@endif


