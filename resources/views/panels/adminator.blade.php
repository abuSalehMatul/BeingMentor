<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{asset('images/used_logo.png')}}" />

    <title>{{ config('app.name', 'mentor') }} - @yield('title')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminator.css') }}" rel="stylesheet">
    @stack('css')
    @yield('custom_css')
    <style>
        .customize-header {
            background: #2A82D4 !important;
        }

        .customize-header ul li a {
            font-size: 14px;
            padding-right: 22px;
            vertical-align: baseline;
            background: transparent;
            font-family: Open Sans, Arial, sans-serif;
            color: white !important;
            font-size: 14px;
            font-weight: 600;
        }

    </style>
</head>
<body class="app">
    <div>
        <!-- @Page Loader -->
        <!-- =================================================== -->
        <div id='loader'>
            <div class="spinner"></div>
        </div>

        <script>
            window.addEventListener('load', () => {
                const loader = document.getElementById('loader');
                setTimeout(() => {
                    loader.classList.add('fadeOut');
                }, 300);
            });

        </script>
        <!-- @App Content -->
        <!-- =================================================== -->
        <div>
            <!-- #Left Sidebar ==================== -->
            @include('panels.include.leftbar')
            <!-- #Main ============================ -->
            <div class="page-container" id="app">
                <!-- ### $Topbar ### -->
                @include('panels.include.topbar')
                <!-- ### $App Screen Content ### -->
                <main class='main-content bgc-grey-100'>
                    <div id='mainContent'>
                        <div class="full-container">
                            @yield('container')
                            <!-- ### $App Screen Footer ### -->
                            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
                                <span>Copyright © {{now()->year}}, All rights reserved.</span>
                            </footer>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <!-- Scripts -->
        @yield('route')
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/adminator.js') }}" defer></script>
        @stack('js')
    </div>
</body>
</html>
