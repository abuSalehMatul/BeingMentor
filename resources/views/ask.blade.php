{{-- @extends('layouts.app')
@section('container')
<article id="post-9" class="post-9 page type-page status-publish hentry">
    <div class="entry-content">
        <div class="et-l et-l--post">
            <div class="et_builder_inner_content et_pb_gutters3">

                <form method="post" class="row" style="padding:10px" action="{{ route('save.question') }}">
                    @csrf
                    <div class="form-group col-md-6 ">
                        <label> Title of the question </label>
                        <input type="text" name="title" class="form-control" required placeholder="your question tilte">
                    </div>
                    <div class="col-md-6 form-group ">
                        <label> Select Tag </label>
                        <select class="form-control" name="tag" required>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag }}"> {{ $tag }} </option>
                            @endforeach
                        </select>
                        <label> Select Type </label>
                        <select class="form-control" name="inquire" required>
                            @foreach ($inquires as $inquire)
                                <option value="{{ $inquire }}"> {{ $inquire }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                        <label> Question </label>
                        <textarea class="form-control" name="question" placeholder="question" required>
                            </textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="submit" class="btn btn-success">
                    </div>

                </form>

            </div>
        </div>
    </div>
</article>
@include('footer')
@endsection --}}
















<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Divi v.4.4.2" name="generator" />
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

    </style>
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <link rel='stylesheet' id='divi-fonts-css'
        href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext'
        type='text/css' media='all' />
    <link rel='stylesheet' id='divi-style-css' href="{{ asset('wp-content/themes/Divi/stylec1f9.css?ver=4.4.2') }}"
        type='text/css' media='all' />

    <link rel='stylesheet' id='et-builder-googlefonts-cached-css'
        href='https://fonts.googleapis.com/css?family=Fredoka+One%3Aregular%7CMuli%3A200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic&amp;ver=5.4.1#038;subset=latin,latin-ext'
        type='text/css' media='all' />

    <script type='text/javascript' src="{{ asset('wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp') }}"></script>
    <script type='text/javascript' src="{{ asset('wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1') }}">
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />


    <script src="https://kit.fontawesome.com/89ffdc35e7.js" crossorigin="anonymous"></script>

    <link rel="icon" href="{{ asset('wp-content/uploads/2020/04/cropped-logo-4-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('wp-content/uploads/2020/04/cropped-logo-4-192x192.png') }}" sizes="192x192" />

    <link rel="stylesheet" id="et-core-unified-tb-3941-200-cached-inline-styles"
        href="../wp-content/et-cache/200/et-core-unified-tb-3941-200-15867165467904.min.css"
        onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)" />
</head>

<body
    class="page-template-default page page-id-200 et-tb-has-template et-tb-has-footer et_pb_button_helper_class et_transparent_nav et_fixed_nav et_show_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_left et_cover_background et_pb_gutter windows et_pb_gutters3 et_pb_pagebuilder_layout et_smooth_scroll et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css">
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
            <header id="main-header" style="background-color: #2980D2;" data-height-onload="79">
                <div class="container clearfix et_menu_container">
                    <div class="logo_container">
                        <span class="logo_helper"></span>
                        <a href="{{ url('/') }}">
                            <img src="{{ $website->logo }}" alt="BeingMentor" id="logo" data-height-percentage="100"
                                width="100px" />
                        </a>
                    </div>
                    <div id="et-top-navigation" data-height="79" data-fixed-height="40">
                        <nav id="top-menu-nav">
                            <ul id="top-menu" class="nav">
                                <li
                                    class="{{ request()->path() == '/' ? 'menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-49' : 'menu-item menu-item-type-custom menu-item-object-custom menu-item-52' }}">
                                    <a href="{{ url('/') }}" aria-current="page">Home</a>
                                </li>

                                <li
                                    class="{{ request()->path() == 'mentor' ? 'menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-49' : 'menu-item menu-item-type-custom menu-item-object-custom menu-item-52' }}">
                                    <a href="{{ route('mentor') }}">Mentors</a>
                                </li>

                                <li
                                    class="{{ request()->path() == 'contact' ? 'menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-49' : 'menu-item menu-item-type-custom menu-item-object-custom menu-item-52' }}">
                                    <a href="{{ url('contact') }}">Contact</a>
                                </li>

                                <li
                                    class="{{ request()->path() == 'about-us' ? 'menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-49' : 'menu-item menu-item-type-custom menu-item-object-custom menu-item-52' }}">
                                    <a href="{{ route('about.us') }}">About</a>
                                </li>

                                <li
                                    class="{{ request()->path() == 'forum' ? 'menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-49' : 'menu-item menu-item-type-custom menu-item-object-custom menu-item-52' }}">
                                    <a href="{{ route('forum') }}">Forum</a>
                                </li>
                                @guest
                                    <li
                                        class="{{ request()->path() == 'login' ? 'menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-49' : 'menu-item menu-item-type-custom menu-item-object-custom menu-item-52' }}">
                                        <a href="{{ route('login') }}">Log-in</a></li>
                                    <li
                                        class="{{ request()->path() == 'register' ? 'menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-49' : 'menu-item menu-item-type-custom menu-item-object-custom menu-item-52' }}">
                                        <a href="{{ route('register') }}">Register</a></li>
                                @endguest
                                @auth

                                    <li
                                        class="menu-item menu-item-type-custom dropdownpanel menu-item-object-custom menu-item-141">
                                        <a>
                                            {{ auth()->user()->first_name }}
                                            <ul class="dropdownpanel-content">
                                                <li>
                                                    <a href="{{ route('find.profile') }}">
                                                        My Dashboard
                                                    </a>
                                                </li>
                                                <li>
                                                    <a>
                                                        <form action="{{ route('logout') }}" id="logoutform" method="POST">
                                                            @csrf
                                                            <span style="cursor: pointer"
                                                                onclick="document.getElementById('logoutform').submit()">
                                                                Logout</span>
                                                        </form>
                                                    </a>
                                                </li>
                                            </ul>
                                        </a>

                                    </li>
                                @endauth
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-141"><a
                                        target="blank" href="{{ $website->instragram }}"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-142"><a
                                        target="blank" href="{{ $website->facebook }}"><i
                                            class="fab fa-facebook"></i></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-143"><a
                                        target="blank" href="{{ $website->linkedin }}"><i
                                            class="fab fa-linkedin"></i></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-144"><a
                                        target="blank" href="{{ $website->twitter }}"><i
                                            class="fab fa-twitter-square"></i></a></li>

                            </ul>
                        </nav>
                       
                    </div> <!-- #et-top-navigation -->
                </div> <!-- .container -->
               
            </header> <!-- #main-header -->

            <div id="et-main-area">
                <div id="main-content">
                    <main>
                        <form action="{{ route('save.question') }}" method="POST">
                            @csrf
                        <div class="container">
                            <div class="create">
                                <div class="create__head">
                                    <div class="create__title"><img src="{{ asset('New_Topic.svg') }}"
                                            alt="New topic">Create New Thread</div>
                                </div>
                                <div class="create__section">
                                    <label class="create__label" for="title">Thread Title</label>
                                    <input type="text" class="form-control"  name="title" id="title" placeholder="Title" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="create__section">
                                            <label class="create__label" for="category">Select Category</label>
                                            <label class="custom-select">
                                                <select id="category"  name="inquire" required>
                                                    @foreach ($inquires as $inquire)
                                                        <option value="{{ $inquire }}"> {{ $inquire }} </option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="create__section">
                                            <label class="create__label" for="sub-category">Tag</label>
                                            <label class="custom-select">
                                                <select id="sub-category" name="tag" required>
                                                    @foreach ($tags as $tag)
                                                        <option value="{{ $tag }}"> {{ $tag }} </option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="create__section create__textarea">
                                    <label class="create__label" for="description">Question</label>

                                    <textarea class="form-control"  name="question" placeholder="question" required>

                                    </textarea>
                                </div>


                                <div class="create__footer">
                                    <a href="{{url('/')}}" class="create__btn-cansel btn">Cancel</a>
                                    <input type="submit" value="Create" class="create__btn-create btn btn--type-02">
                                </div>
                            </div>

                        </div>
                        </form>
                    </main>

                    <!-- MAIN -->
                </div> <!-- #main-content -->
                @include('footer')
            </div> <!-- #et-main-area -->


        </div><!-- #et-boc -->
    </div> <!-- #page-container -->
    <span class="et_pb_scroll_top et-pb-icon"></span>
</body>

</html>
