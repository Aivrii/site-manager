
<div class="grid grid-cols-1 md:grid-cols-2">
    <div class="self-center">
        <div class="dataTables_info">Showing <span id="offsetCounter">{{ ++$pagination["offset"] }}</span> to <span id="limitCounter">{!! $pagination["total"] > $pagination["limit"] ? $pagination["limit"] : $pagination["total"] !!}</span> of <span>{{ $pagination["total"] }}</span> entries</div>
    </div>
    <div class="grid justify-end">
        <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
            <div class="text-center dark:text-gray-100">
                <a href="javascript:void(0)" aria-disabled="true" tabindex="-1"  @click="await previousPage()" class="relative inline-flex justify-center items-center space-x-2 border px-4 py-2 -mr-px leading-6 hover:z-10 focus:z-10 active:z-10 border-gray-200 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:active:border-gray-700 bg-white dark:bg-gray-800 text-gray-300 dark:text-gray-600 rounded-l-lg" id="previousPage"><span class="ti-angle-left"></span></a>
                @for ($i = $pagination['currentPage']; $i <= $pagination['totalPages']; $i++)
                    @if ($i <= 5)
                        <a href="javascript:void(0)" tabindex="0" @click="await fetchPage({{ $i }})" class="relative inline-flex justify-center items-center space-x-2 border px-4 py-1 -mr-px leading-6 hover:z-10 focus:z-10 active:z-10 border-gray-200 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:active:border-gray-700 text-gray-800 hover:text-red-900 hover:border-red-300 hover:shadow-sm focus:ring focus:ring-gray-300 focus:ring-opacity-25 dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600 dark:focus:ring-opacity-40 {!! $i == $pagination['currentPage'] ? 'font-semibold text-red-500 bg-red-100' : 'bg-white dark:bg-gray-800' !!}">{{ $i }}</a>
                    @elseif ($i == 6)
                        <a href="javascript:void(0)" tabindex="0" class="relative inline-flex justify-center items-center space-x-2 border px-4 py-1 -mr-px leading-6 hover:z-10 focus:z-10 active:z-10 border-gray-200 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:active:border-gray-700 text-gray-800 focus:ring focus:ring-gray-300 focus:ring-opacity-25 dark:text-gray-300 dark:focus:ring-gray-600 dark:focus:ring-opacity-40 bg-gray-100 dark:bg-gray-700/75">...</a>
                    @endif
                @endfor
                @if($pagination["totalPages"] > 1 && $pagination["totalPages"] > 5)
                    <a href="javascript:void(0)" tabindex="0" @click="await fetchPage({{ ceil($pagination['totalPages']) }})" class="relative inline-flex justify-center items-center space-x-2 border px-4 py-1 -mr-px leading-6 hover:z-10 focus:z-10 active:z-10 border-gray-200 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:active:border-gray-700 text-gray-800 hover:text-red-900 hover:border-red-300 hover:shadow-sm focus:ring focus:ring-gray-300 focus:ring-opacity-25 dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600 dark:focus:ring-opacity-40 {!! $i == $pagination['currentPage'] ? 'font-semibold text-red-500 bg-red-100' : 'bg-white dark:bg-gray-800' !!}">{{ ceil($pagination["totalPages"]) }}</a>
                @endif
                <a href="javascript:void(0)" tabindex="0" @click="await nextPage()" class="relative inline-flex justify-center items-center space-x-2 border px-4 py-2 -mr-px leading-6 hover:z-10 focus:z-10 active:z-10 border-gray-200 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:active:border-gray-700 bg-white dark:bg-gray-800 text-gray-800 hover:text-gray-900 hover:border-gray-300 hover:shadow-sm focus:ring focus:ring-gray-300 focus:ring-opacity-25 dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600 dark:focus:ring-opacity-40 rounded-r-lg"><span class="ti-angle-right"></span></a>
            </div>
        </div>
    </div>
</div>
