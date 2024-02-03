<div class="grid grid-cols-1 md:grid-cols-2">
    <div class="self-center">
        <label>
            Show 
            <select
                class="border px-3 py-2 rounded-lg border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:focus:border-blue-500 w-16" id="limit" @change="await handleSearchFilter()">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            entries
        </label>
    </div>
    <div class="grid justify-end">
        <label>
            Search:
            <input type="search" class="border placeholder-gray-500 ml-2 px-3 py-2 rounded-lg border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:focus:border-blue-500 dark:placeholder-gray-400" id="search" @keyup="await handleSearchFilter()">
        </label>
    </div>
</div>