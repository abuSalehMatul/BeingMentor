<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('mentorcruise/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('mentorcruise/css/bulma.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('mentorcruise/css/mentorcruise-v2.0.0.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('mentorcruise/css/styles.css')}}" />
   
    @include('head')
   
</head>
<body class="home page-template-default page page-id-9 et-tb-has-template et-tb-has-footer et_pb_button_helper_class et_transparent_nav et_fixed_nav et_show_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_left et_cover_background et_pb_gutter windows et_pb_gutters3 et_pb_pagebuilder_layout et_smooth_scroll et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css">
    <div>
        <div id="page-container">
            <div id="et-boc" class="et-boc">
                <style>
                    .dropdownpanel {
                        position: relative;
                        display: inline-block;
                    }
                
                    .dropdownpanel-content {
                        display: none;
                        position: absolute;
                        min-width: 160px;
                        padding: 5px 6px;
                        background: #2673C1;
                        z-index: 1;
                    }
                
                    .dropdownpanel:hover .dropdownpanel-content {
                        display: block;
                        background: #2673C1;
                    }
                
                </style>
                <header id="main-header" data-height-onload="79" style="background: #247FD0">
                    <div class="container clearfix et_menu_container">
                        <div class="logo_container">
                            <span class="logo_helper"></span>
                            <a href="{{url('/')}}">
                                <img src="{{$website->logo}}" alt="BeingMentor" id="logo" data-height-percentage="100" />
                            </a>
                        </div>
                        <div id="et-top-navigation" data-height="79" data-fixed-height="40">
                            <nav id="top-menu-nav">
                                <ul id="top-menu" class="nav" style="background: #247FD0">
                                    <li class="{{ request()->path() == '/' ?
                                     "menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-49" 
                                     : "menu-item menu-item-type-custom menu-item-object-custom menu-item-52" }}">
                                        <a href="{{url('/')}}" aria-current="page">Home</a>
                                    </li>
                
                                    <li class="{{ request()->path() == 'mentor' ?
                                        "menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-49" 
                                        : "menu-item menu-item-type-custom menu-item-object-custom menu-item-52" }}">
                                        <a href="{{route('mentor')}}">Mentors</a>
                                    </li>
                
                                    <li class="{{ request()->path() == 'contact' ?
                                        "menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-49" 
                                        : "menu-item menu-item-type-custom menu-item-object-custom menu-item-52" }}">
                                        <a href="{{url('contact')}}">Contact</a>
                                    </li>
                
                                    <li class="{{ request()->path() == 'about-us' ?
                                        "menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-49" 
                                        : "menu-item menu-item-type-custom menu-item-object-custom menu-item-52" }}">
                                        <a href="{{route('about.us')}}">About</a>
                                    </li>
                
                                    <li class="{{ request()->path() == 'forum' ?
                                        "menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-49" 
                                        : "menu-item menu-item-type-custom menu-item-object-custom menu-item-52" }}">
                                        <a href="{{route('forum')}}">Forum</a>
                                    </li>
                                    @guest
                                    <li class="{{ request()->path() == 'login' ? "menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-49" 
                                        : "menu-item menu-item-type-custom menu-item-object-custom menu-item-52" }}">
                                        <a href="{{route('login')}}">Log-in</a></li>
                                    <li class="{{ request()->path() == 'register' ? "menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-49" 
                                        : "menu-item menu-item-type-custom menu-item-object-custom menu-item-52" }}">
                                        <a href="{{route('register')}}">Register</a></li>
                                    @endguest
                                    @auth
                
                                    <li class="menu-item menu-item-type-custom dropdownpanel menu-item-object-custom menu-item-141">
                                        <a>
                                            {{auth()->user()->first_name}}
                                            <ul class="dropdownpanel-content">
                                                <li>
                                                    <a href="{{route('find.profile')}}">
                                                        My Dashboard
                                                    </a>
                                                </li>
                                                <li>
                                                    <a>
                                                        <form action="{{route('logout')}}" id="logoutform" method="POST">
                                                            @csrf
                                                            <span style="cursor: pointer" onclick="document.getElementById('logoutform').submit()"> Logout</span>
                                                        </form>
                                                    </a>
                                                </li>
                                            </ul>
                                        </a>
                                        
                                    </li>
                                    @endauth
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-141"><a target="blank" href="{{$website->instragram}}"><i class="fab fa-instagram"></i></a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-142"><a target="blank" href="{{$website->facebook}}"><i class="fab fa-facebook"></i></a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-143"><a target="blank" href="{{$website->linkedin}}"><i class="fab fa-linkedin"></i></a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-144"><a target="blank" href="{{$website->twitter}}"><i class="fab fa-twitter-square"></i></a></li>
                
                                </ul>
                            </nav>
                            <div id="et_mobile_nav_menu">
                                <div class="mobile_nav closed">
                                    <span class="select_page">Select Page</span>
                                    <span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
                                </div>
                            </div>
                        </div> <!-- #et-top-navigation -->
                    </div> <!-- .container -->
                    <div class="et_search_outer">
                        <div class="container et_search_form_container">
                            <span class="et_close_search_field"></span>
                        </div>
                    </div>
                </header> <!-- #main-header -->
                
                <div id="et-main-area">
                    <div id="app">
                        <home-page-mentor user_id="front"></home-page-mentor>    
                    </div>
                   
                </div>
                @include('footer')
            </div><!-- #et-boc -->
        </div> <!-- #page-container -->


        {{-- <script type='text/javascript' src="{{asset('wp-content/themes/Divi/js/custom.unifiedc1f9.js?ver=4.4.2')}}"></script> --}}
        <script type='text/javascript' src="{{asset('wp-content/plugins/supreme-modules-pro-for-divi/scripts/frontend-bundle.min91ac.js?ver=2.6.8')}}"></script>
        <script type='text/javascript' src="{{asset('wp-content/themes/Divi/core/admin/js/commonc1f9.js?ver=4.4.2')}}"></script>
        <script type='text/javascript' src="{{asset('wp-includes/js/wp-embed.minc225.js?ver=5.4.1')}}"></script>
        <span class="et_pb_scroll_top et-pb-icon"></span>

    </div>
</body>

</html>
