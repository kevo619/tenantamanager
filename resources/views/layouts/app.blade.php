<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/buttons.dataTables.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/datatables.net-dt/css/jquery.dataTables.css') }}">
        <link rel="stylesheet" href="{{ asset('css/filepond/dist/filepond.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.dataTables.css') }}" rel="stylesheet">


        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}"  ></script>
        <script src="{{ mix('js/form.js') }}" ></script>
        <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
        <script src="{{ asset('js/Responsive-2.2.7/js/dataTables.responsive.js') }}" ></script>
        <script src="{{ asset('js/JSZip-2.5.0/jszip.js') }}" ></script>
        <script src="{{ asset('js/pdfmake-0.1.36/pdfmake.js') }}" ></script>
        <script src="{{ asset('js/pdfmake-0.1.36/vfs_fonts.js') }}" ></script>
        <script src="{{ asset('js/Buttons-1.7.0/js/dataTables.buttons.js') }}" ></script>


        <!-- Charting library -->
        <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
        <!-- Chartisan -->
        <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
            <!-- Page Content -->
            <main>
                @include('layouts.messages')
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
