{{-- This layout is for dashboard pages --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('icons/linearicons-free-v1.0.0/style.css') }}">
        <link rel="stylesheet" href="{{ asset('icons/themify-icons/themify-icons.css') }}">
        <!--[if lt IE 8]><!-->
        <link rel="stylesheet" href="{{ asset('icons/themify-icons/ie7/ie7.css') }}">
        <!--<![endif]-->
        @livewireStyles
        @yield('styles')
    </head>
    <body class="font-sans antialiased bg-gray-200">
        <div class="min-h-full" x-data="{sidebar:false}">

            @include('layouts.partials.__sidebar')

            <div class="lg:pl-64 flex flex-col flex-1">
                
                @include('layouts.partials.__topbar')

                <main class="flex-1 pb-8">
                
                {{ isset($slot) ? $slot : '' }}

                @yield('content')

                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
        @yield('scripts')
    </body>
</html>
