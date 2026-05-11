@if ($paginator->hasPages())
@php

@endphp
<nav class="flex items-center flex-wrap md:flex-row justify-between pt-4 px-4 pb-2" aria-label="Table navigation">
    <div class="flex items-center gap-2">
        <p>Show</p>
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" data-dropdown-placement="bottom" type="button" class="px-3 py-2 text-xs font-medium text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg inline-flex items-center">
            {{$paginator->perPage()}} <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg></button>

        <p> items</p>

        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-24 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="?page_size=10&search={{request('search')}}&semester={{request('semester')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">10</a>
                </li>
                <li>
                    <a href="?page_size=25&search={{request('search')}}&semester={{request('semester')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">25</a>
                </li>
                <li>
                    <a href="?page_size=50&search={{request('search')}}&semester={{request('semester')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">50</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex items-center gap-2">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400 block w-full md:inline md:w-auto">Show <span class="font-semibold text-gray-900 dark:text-white">{{($paginator->currentPage() - 1) * $paginator->perPage() + 1}}-{{$paginator->currentPage() * $paginator->perPage()}}</span> of <span class="font-semibold text-gray-900 dark:text-white">{{$paginator->total()}}</span></span>
        <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
            @if ($paginator->onFirstPage())
            <li>
                <a class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
            </li>
            @else
            <li>
                <a href="{{ $paginator->previousPageUrl() . '&page_size=' . $paginator->perPage() }}&search={{request('search')}}&semester={{request('semester')}}" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
            </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $key => $element)

            @php
            @endphp


            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
            <li>
                <a class=" flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $element }}</a>
            </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
            @if ($key === 0 && count($element) === 2)
            <li>
                <a href="{{ $element[1] . '&page_size=' . $paginator->perPage() }}&search={{request('search')}}&semester={{request('semester')}}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            @elseif ($key === 4 && count($element) === 2)
            @php

            @endphp
            <li>
                <a href="{{ $element[$paginator->lastPage()] . '&page_size=' . $paginator->perPage() }}&search={{request('search')}}&semester={{request('semester')}}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $paginator->lastPage() }}</a>
            </li>
            @else
            @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
            <li>
                <a aria-current=" page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ $page }}</a>
            </li>
            @else
            <li>
                <a href="{{ $url . '&page_size=' . $paginator->perPage() }}&search={{request('search')}}&semester={{request('semester')}}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $page }}</a>
            </li>
            @endif
            @endforeach
            @endif

            @endif
            @endforeach

            @if ($paginator->hasMorePages())
            <li>
                <a href=" {{ $paginator->nextPageUrl() . '&page_size=' . $paginator->perPage() }}&search={{request('search')}}&semester={{request('semester')}}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
            </li>
            @else
            <li>
                <a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
            </li>
            @endif

        </ul>
    </div>

</nav>
@endif