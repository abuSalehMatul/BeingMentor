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
<header id="main-header" data-height-onload="79">
    <div class="container clearfix et_menu_container">
        <div class="logo_container">
            <span class="logo_helper"></span>
            <a href="{{url('/')}}">
                <img src="{{$website->logo}}" alt="BeingMentor" id="logo" data-height-percentage="100" />
            </a>
        </div>
        <div id="et-top-navigation" data-height="79" data-fixed-height="40">
            <nav id="top-menu-nav">
                <ul id="top-menu" class="nav">
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
