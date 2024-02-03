<div class="pl-2 space-y-0.5">
  <a href="{{route('dashboard')}}" class="font-mediumbold group flex items-center px-8 py-3 text-sm leading-6 font-medium rounded-l-md {!! Route::is('dashboard') ? 'text-gray-600 bg-gray-200 border-l-8 border-l-gray-800': 'hover:text-gray-600 hover:bg-gray-200' !!}">
    <span class="ti-dashboard mr-4 flex-shrink-0 text-2xl font-medium"></span>
    {{__('Dashboard')}}
  </a>
  <a href="{{route('subscriptions.index')}}" class="font-mediumbold group flex items-center px-8 py-3 text-sm leading-6 font-medium rounded-l-md {!! Route::is('pages.index') ? 'text-gray-600 bg-gray-200 border-l-8 border-l-gray-800': 'hover:text-gray-600 hover:bg-gray-200' !!}">
    <span class="ti-files mr-4 flex-shrink-0 text-2xl font-medium"></span>
    {{__('Subscriptions')}}
  </a>
  <a href="{{route('payments.index')}}" class="font-mediumbold group flex items-center px-8 py-3 text-sm leading-6 font-medium rounded-l-md {!! Route::is('scripts.index') ? 'text-gray-600 bg-gray-200 border-l-8 border-l-gray-800': 'hover:text-gray-600 hover:bg-gray-200' !!}">
    <span class="ti-shortcode mr-4 flex-shrink-0 text-2xl font-medium"></span>
    {{__('Payments')}}
  </a>
  <a href="{{route('users.index')}}" class="font-mediumbold group flex items-center px-8 py-3 text-sm leading-6 font-medium rounded-l-md {!! Route::is('mailer.index') ? 'text-gray-600 bg-gray-200 border-l-8 border-l-gray-800': 'hover:text-gray-600 hover:bg-gray-200' !!}">
    <span class="ti-location-arrow mr-4 flex-shrink-0 text-2xl font-medium"></span>
    {{__('Users')}}
  </a>
  <a href="{{route('profile.show')}}" class="font-mediumbold group flex items-center px-8 py-3 text-sm leading-6 font-medium rounded-l-md {!! Route::is('profile.show') ? 'text-gray-600 bg-gray-200 border-l-8 border-l-gray-800': 'hover:text-gray-600 hover:bg-gray-200' !!}">
    <span class="ti-user mr-4 flex-shrink-0 text-2xl font-medium"></span>
    {{__('Profile')}}
  </a>

</div>
