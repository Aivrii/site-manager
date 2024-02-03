<div :class="{'hidden':!sidebar, 'block':sidebar}" class="fixed inset-0 flex z-40 lg:hidden text-gray-600" role="dialog" aria-modal="true">
  <div class="fixed inset-0 bg-gray-800 bg-opacity-75" aria-hidden="true"></div>
  <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white">
    <div class="absolute top-0 right-0 -mr-12 pt-2">
      <button @click="sidebar = !sidebar" type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
        <span class="sr-only">Close sidebar</span>
        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <div class="flex items-center flex-shrink-0 px-4">
      <img class="h-10 w-10" src="logo.png" alt="{{ config('app.name', 'Laravel') }} logo">
      <span class="pl-4 text-gray-600">
        <span class="font-bold text-1xl">{{ config('app.name', 'Laravel') }}</span><br>
        <span class="font-light text-sm">{{ config('app.slogan', 'Laravel') }}</span>
      </span>
    </div>
    <nav class="mt-5 flex-shrink-0 h-full divide-y divide-cyan-800 overflow-y-auto" aria-label="Sidebar">
      @include('layouts.partials.__menu')
    </nav>
  </div>

  <div class="flex-shrink-0 w-14" aria-hidden="true">
    <!-- Dummy element to force sidebar to shrink to fit close icon -->
  </div>
</div>

<!-- Static sidebar for desktop -->
<div class="hidden lg:flex lg:w-64 lg:flex-col lg:fixed lg:inset-y-0 text-gray-600">
  <div class="flex flex-col flex-grow bg-gray-100 pt-2 pb-4 overflow-y-auto">
    <div class="flex items-center flex-shrink-0 px-4">
      <!-- <img class="h-10 w-10" src="logo.png" alt="{{ config('app.name', 'Laravel') }} logo"> -->
      <span class="pl-4 text-gray-600">
        <span class="font-bold text-1xl">{{ config('app.name', 'Laravel') }}</span><br>
        <span class="font-light text-sm">{{ config('app.slogan', 'Laravel') }}</span>
      </span>
    </div>
    <nav class="mt-5 flex-1 flex flex-col divide-y divide-cyan-800 overflow-y-auto" aria-label="Sidebar">
      @include('layouts.partials.__menu')
    </nav>
  </div>
</div>
