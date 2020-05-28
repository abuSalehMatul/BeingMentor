{{-- <header id="main-header" data-height-onload="79">
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
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home ">
                <a href="{{ url('/') }}" class="{{ request()->path() == '/' ? "current_link" : '' }}" aria-current="page">Home</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home '">
                <a class="{{ request()->path() == 'mentor' ? "current_link" : '' }}" href="{{route('mentor')}}">Mentors</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                <a class="{{ request()->path() == 'contact' ? "current_link" : '' }}" href="{{url('contact')}}">Contact</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                <a class="{{ request()->path() == 'about-us' ? "current_link" : '' }}" href="{{route('about.us')}}">About</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                <a class="{{ request()->path() == 'forum' ? "current_link" : '' }}" href="{{route('forum')}}">Forum</a></li>
            @guest
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-141">
                <a href="{{route('login')}}">Log-in</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-142">
                <a href="{{route('register')}}">Sign Up</a></li>
            @endguest
            @auth
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-141">
                <a href="{{route('find.profile')}}">
                    My Panel </a></li>
            @endauth

        </ul>
    </nav>
    <div id="et_mobile_nav_menu">
        <div class="mobile_nav closed">
            <span class="select_page">Select Page</span>
            <span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
        </div>
    </div>
</div>
</div>
<div class="et_search_outer">
    <div class="container et_search_form_container">
        <form role="search" method="get" class="et-search-form" action="https://www.beingmentor.pk/">
            <input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" /> </form>
        <span class="et_close_search_field"></span>
    </div>
</div>
</header> --}}

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
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-141">
                        <a href="{{route('login')}}">Log-in</a></li>
                    @endguest
                    @auth
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-141">
                        <a href="{{route('find.profile')}}">
                            My Panel </a></li>
                    @endauth
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-141"><a href="{{$website->instragram}}"><i class="fab fa-instagram"></i></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-142"><a href="{{$website->facebook}}"><i class="fab fa-facebook"></i></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-143"><a href="{{$website->linkedin}}"><i class="fab fa-linkedin"></i></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-144"><a href="{{$website->twitter}}"><i class="fab fa-twitter-square"></i></a></li>

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
