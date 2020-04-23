<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{$website->logo}}" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <title>{{ config('app.name', 'Mentor') }} - @yield('title')</title>
    <!-- Styles -->

    {{-- <link href="{{asset('customStyle/anymate.css')}}"> --}}
    <link href="{{ asset('customStyle/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('customStyle/myStyle.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    @yield('css')

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
        <div
            class="et-db et_fixed_nav et_header_style_left et_primary_nav_dropdown_animation_fade et_smooth_scroll et_transparent_nav">
            <!-- #Main ============================ -->
            <div class="page-container et-boc" id="app">
                <!-- ### $Topbar ### -->
                @include('layouts.topbar')
                <!-- ### $App Screen Content ### -->
                <main class='main-content bgc-grey-100'>
                    <div id='mainContent'>
                        <div class="full-container">
                            @yield('container')
                            <!-- ### $App Screen Footer ### -->
                            {{-- <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
                            <span>Copyright © {{now()->year}}, All rights reserved.</span>
                            </footer> --}}
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <!-- Scripts -->
        @yield('route')
        <script src="{{ asset('js/app.js') }}" defer></script>
        @stack('js')
    </div>
</body>

</html>
