<!DOCTYPE html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{$website->logo}}" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <title>{{ config('app.name', 'Mentor') }} - @yield('title')</title>
    {{-- <link href="{{ asset('customStyle/myStyle.css')}}" rel="stylesheet"> --}}

    <script type="text/javascript">
        document.documentElement.className = 'js';

    </script>

    <script>
        var et_site_url = "{{url('/')}}";
        var et_post_id = '9';

        function et_core_page_resource_fallback(a, b) {
            "undefined" === typeof b && (b = a.sheet.cssRules && 0 === a.sheet.cssRules.length);
            b && (a.onerror = null, a.onload = null, a.href ? a.href = et_site_url + "/?et_core_page_resource=" + a.id + et_post_id : a.src && (a.src = et_site_url + "/?et_core_page_resource=" + a.id + et_post_id))
        }

    </script>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "{{url('/')}}"
            , "ext": ".png"
            , "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/"
            , "svgExt": ".svg"
            , "source": {
                "concatemoji": "https:\/\/www.beingmentor.pk\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.4"
            }
        };
        /*! This file is auto-generated */
        ! function(e, a, t) {
            var r, n, o, i, p = a.createElement("canvas")
                , s = p.getContext && p.getContext("2d");

            function c(e, t) {
                var a = String.fromCharCode;
                s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, e), 0, 0);
                var r = p.toDataURL();
                return s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, t), 0, 0), r === p.toDataURL()
            }

            function l(e) {
                if (!s || !s.fillText) return !1;
                switch (s.textBaseline = "top", s.font = "600 32px Arial", e) {
                    case "flag":
                        return !c([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) && (!c([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !c([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]));
                    case "emoji":
                        return !c([55357, 56424, 55356, 57342, 8205, 55358, 56605, 8205, 55357, 56424, 55356, 57340], [55357, 56424, 55356, 57342, 8203, 55358, 56605, 8203, 55357, 56424, 55356, 57340])
                }
                return !1
            }

            function d(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (i = Array("flag", "emoji"), t.supports = {
                    everything: !0
                    , everythingExceptFlag: !0
                }, o = 0; o < i.length; o++) t.supports[i[o]] = l(i[o]), t.supports.everything = t.supports.everything && t.supports[i[o]], "flag" !== i[o] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[i[o]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (r = t.source || {}).concatemoji ? d(r.concatemoji) : r.wpemoji && r.twemoji && (d(r.twemoji), d(r.wpemoji)))
        }(window, document, window._wpemojiSettings);

    </script>
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
    <!-- Styles -->

    {{-- <link href="{{asset('customStyle/anymate.css')}}"> --}}
 <link rel='stylesheet' id='wp-block-library-css' href="{{asset('customStyle/style.min91d5.css?ver=5.4')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='divi-fonts-css' href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='divi-style-css' href="{{asset('customStyle/stylec1f9.css?ver=4.4.2')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='supreme-modules-pro-for-divi-styles-css' href="{{asset('customStyle/style.min91ac.css?ver=2.6.8')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='et-builder-googlefonts-cached-css' href='https://fonts.googleapis.com/css?family=Montserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CUbuntu%3A300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%7CABeeZee%3Aregular%2Citalic&amp;ver=5.4#038;subset=latin,latin-ext'
        type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href="{{asset('customStyle/dashicons.min91d5.css?ver=5.4')}}" type='text/css' media='all' />
    <script type='text/javascript' src="{{ asset('customJs/jquery4a5f.js?ver=1.12.4-wp')}}"></script>
    <script type='text/javascript' src="{{ asset('customJs/jquery-migrate.min330a.js?ver=1.4.1')}}"></script>
    <script type='text/javascript' src="{{ asset('customJs/es6-promise.auto.min91d5.js?ver=5.4')}}"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var et_core_api_spam_recaptcha = {
            "site_key": "",
            "page_action": {
                "action": "www_beingmentor_pk"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src="{{ asset('customJs/recaptcha91d5.js?ver=5.4')}}"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @yield('css')

</head>

<body class="home page-template-default page page-id-9 et-tb-has-template et-tb-has-footer et_pb_button_helper_class et_transparent_nav et_fixed_nav et_show_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_left et_cover_background et_pb_gutter windows et_pb_gutters3 et_pb_pagebuilder_layout et_smooth_scroll et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css">
    <div id="page-container">
        <div id="et-boc" class="et-boc">



            <header id="main-header" data-height-onload="79">
                <div class="container clearfix et_menu_container">
                    <div class="logo_container">
                        <span class="logo_helper"></span>
                        <a href="index.html">
                            <img src="wp-content/uploads/2020/04/logo-4.png" alt="BeingMentor" id="logo" data-height-percentage="100" />
                        </a>
                    </div>
                    <div id="et-top-navigation" data-height="79" data-fixed-height="40">
                        <nav id="top-menu-nav">
                            <ul id="top-menu" class="nav">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-49"><a href="index.html" aria-current="page">Home</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-52"><a href="http://mentors/">Mentors</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-50"><a href="contact-us/index.html">Contact</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-51"><a href="about/index.html">About</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-141"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-142"><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-143"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-144"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                            </ul>
                        </nav>




                        <div id="et_mobile_nav_menu">
                            <div class="mobile_nav closed">
                                <span class="select_page">Select Page</span>
                                <span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
                            </div>
                        </div>
                    </div>
                    <!-- #et-top-navigation -->
                </div>
                <!-- .container -->
                <div class="et_search_outer">
                    <div class="container et_search_form_container">
                        <form role="search" method="get" class="et-search-form" action="https://www.beingmentor.pk/">
                            <input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" /> </form>
                        <span class="et_close_search_field"></span>
                    </div>
                </div>
            </header>
            <!-- #main-header -->
            <div id="et-main-area">

                <div id="main-content">



                    <article id="post-9" class="post-9 page type-page status-publish hentry">


                        <div class="entry-content">
                            <div class="et-l et-l--post">
                                <div class="et_builder_inner_content et_pb_gutters3">
                                    <div class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider">




                                        <div class="et_pb_row et_pb_row_0">
                                            <div class="et_pb_column et_pb_column_1_2 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">Being Mentors Powers Academic Progress.</div>
                                                </div>
                                                <!-- .et_pb_text -->
                                                <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_left et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">Our online platform connects students to life changing one-on-one academic support.</div>
                                                </div>
                                                <!-- .et_pb_text -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_2 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module dsm_flipbox dsm_flipbox_0">




                                                    <div class="et_pb_module_inner">
                                                        <div class="dsm-flipbox dsm-flipbox-slide-left">
                                                            <div class="et_pb_module dsm_flipbox_child dsm_flipbox_child_0 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">




                                                                <div class="et_pb_module_inner">



                                                                    <div class="dsm_flipbox_wrapper et_pb_text_align_center">
                                                                        <h4 class="dsm-title et_pb_module_header">Academic Mentorship</h4>
                                                                        <span class="dsm-subtitle">For students & coaching</span>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="et_pb_module dsm_flipbox_child dsm_flipbox_child_1 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">




                                                                <div class="et_pb_module_inner">



                                                                    <div class="dsm_flipbox_wrapper et_pb_text_align_left">


                                                                        <div class="dsm-content">Being Mentor technology is used by top private schools, tutoring companies, and non-profit academic support programs.</div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="et_pb_module dsm_flipbox dsm_flipbox_1">




                                                    <div class="et_pb_module_inner">
                                                        <div class="dsm-flipbox dsm-flipbox-slide-left">
                                                            <div class="et_pb_module dsm_flipbox_child dsm_flipbox_child_2 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">




                                                                <div class="et_pb_module_inner">



                                                                    <div class="dsm_flipbox_wrapper et_pb_text_align_center">
                                                                        <h4 class="dsm-title et_pb_module_header">Professionals</h4>
                                                                        <span class="dsm-subtitle">For students & coaching</span>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="et_pb_module dsm_flipbox_child dsm_flipbox_child_3 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">




                                                                <div class="et_pb_module_inner">



                                                                    <div class="dsm_flipbox_wrapper et_pb_text_align_left">


                                                                        <div class="dsm-content">Being Mentor technology is used by top private schools, tutoring companies, and non-profit academic support programs.</div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->

                                        <div class="et_pb_bottom_inside_divider et-no-transition"></div>
                                    </div>
                                    <!-- .et_pb_section -->
                                    <div class="et_pb_section et_pb_section_1 et_pb_section_parallax et_pb_with_background et_section_regular">

                                        <div class="et_parallax_bg_wrap">
                                            <div class="et_parallax_bg" style="background-image: url(wp-content/uploads/2020/04/background-2.png);"></div>
                                        </div>


                                        <div class="et_pb_row et_pb_row_1">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_2  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module dsm_dual_heading dsm_dual_heading_0  et_pb_text_align_center et_pb_bg_layout_light">




                                                    <div class="et_pb_module_inner">
                                                        <h1 class="dsm-dual-heading-main et_pb_module_header"><span class="dsm-dual-heading-before">How</span><span class="dsm-dual-heading-middle"> WE</span><span class="dsm-dual-heading-after"> Work</span></h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->
                                        <div class="et_pb_row et_pb_row_2">
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_3  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module et_pb_blurb et_pb_blurb_0 et_animated  et_pb_text_align_left  et_pb_blurb_position_top et_pb_bg_layout_dark">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="wp-content/uploads/2020/04/one.png" alt="" srcset="https://www.beingmentor.pk/wp-content/uploads/2020/04/one.png 512w, https://www.beingmentor.pk/wp-content/uploads/2020/04/one-480x480.png 480w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 512px, 100vw" class="et-waypoint et_pb_animation_off" /></span></div>
                                                        <div class="et_pb_blurb_container">
                                                            <h4 class="et_pb_module_header"><span>Search Your Mentor</span></h4>
                                                            <div class="et_pb_blurb_description">Nowadays, we consider BeingMentor to be powered by our over 100 mentors worldwide, It was initially built by a single person, on weekends and evenings. </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_4  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module et_pb_blurb et_pb_blurb_1 et_animated  et_pb_text_align_left  et_pb_blurb_position_top et_pb_bg_layout_dark">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="wp-content/uploads/2020/04/two.png" alt="" srcset="https://www.beingmentor.pk/wp-content/uploads/2020/04/two.png 512w, https://www.beingmentor.pk/wp-content/uploads/2020/04/two-480x480.png 480w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 512px, 100vw" class="et-waypoint et_pb_animation_off" /></span></div>
                                                        <div class="et_pb_blurb_container">
                                                            <h4 class="et_pb_module_header"><span>Apply For Mentorship</span></h4>
                                                            <div class="et_pb_blurb_description">You can choose a mentor from our world&#8217;s best professional mentors and apply for their mentorship. All the mentors are we educated and keen to help everyone</div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_5  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module et_pb_blurb et_pb_blurb_2 et_animated  et_pb_text_align_left  et_pb_blurb_position_top et_pb_bg_layout_dark">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="wp-content/uploads/2020/04/three.png" alt="" srcset="https://www.beingmentor.pk/wp-content/uploads/2020/04/three.png 512w, https://www.beingmentor.pk/wp-content/uploads/2020/04/three-480x480.png 480w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 512px, 100vw" class="et-waypoint et_pb_animation_off" /></span></div>
                                                        <div class="et_pb_blurb_container">
                                                            <h4 class="et_pb_module_header"><span>Consult</span></h4>
                                                            <div class="et_pb_blurb_description">We are strong believers that education in some way should be accessible to everyone. In 2018 alone &#8211; our first year &#8211; we were able to help over 200 people find a mentor. </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->


                                    </div>
                                    <!-- .et_pb_section -->
                                    <div class="et_pb_section et_pb_section_2 et_section_regular">




                                        <div class="et_pb_row et_pb_row_3">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_6  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module et_pb_text et_pb_text_2  et_pb_text_align_center et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">1-On-1 Information Mentors</div>
                                                </div>
                                                <!-- .et_pb_text -->
                                                <div class="et_pb_module et_pb_search et_pb_search_0  et_pb_text_align_center et_pb_bg_layout_light">


                                                    <form role="search" method="get" class="et_pb_searchform" action="https://www.beingmentor.pk/">
                                                        <div>
                                                            <label class="screen-reader-text" for="s">Search for:</label>
                                                            <input type="text" name="s" placeholder="Search Your Mentor Now" class="et_pb_s" />
                                                            <input type="hidden" name="et_pb_searchform_submit" value="et_search_proccess" />

                                                            <input type="hidden" name="et_pb_include_posts" value="yes" />
                                                            <input type="hidden" name="et_pb_include_pages" value="yes" />
                                                            <input type="submit" value="Search" class="et_pb_searchsubmit">
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- .et_pb_text -->
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->
                                        <div class="et_pb_row et_pb_row_4">
                                            <div class="et_pb_column et_pb_column_1_2 et_pb_column_7  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module et_pb_blurb et_pb_blurb_3  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et-pb-icon">&#xe104;</span></span>
                                                        </div>
                                                        <div class="et_pb_blurb_container">
                                                            <h6 class="et_pb_module_header"><span>Branding</span></h6>
                                                            <div class="et_pb_blurb_description">
                                                                <p>In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_2 et_pb_column_8  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module et_pb_blurb et_pb_blurb_4  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et-pb-icon">&#xe00e;</span></span>
                                                        </div>
                                                        <div class="et_pb_blurb_container">
                                                            <h6 class="et_pb_module_header"><span>Web Design</span></h6>
                                                            <div class="et_pb_blurb_description">
                                                                <p>In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->
                                        <div class="et_pb_row et_pb_row_5">
                                            <div class="et_pb_column et_pb_column_1_2 et_pb_column_9  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module et_pb_blurb et_pb_blurb_5  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et-pb-icon">&#xe0e9;</span></span>
                                                        </div>
                                                        <div class="et_pb_blurb_container">
                                                            <h6 class="et_pb_module_header"><span>Search Engine Optimization</span></h6>
                                                            <div class="et_pb_blurb_description">
                                                                <p>In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_2 et_pb_column_10  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module et_pb_blurb et_pb_blurb_6  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et-pb-icon">&#xe109;</span></span>
                                                        </div>
                                                        <div class="et_pb_blurb_container">
                                                            <h6 class="et_pb_module_header"><span>Information Architecture</span></h6>
                                                            <div class="et_pb_blurb_description">
                                                                <p>In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->
                                        <div class="et_pb_row et_pb_row_6">
                                            <div class="et_pb_column et_pb_column_1_2 et_pb_column_11  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module et_pb_blurb et_pb_blurb_7  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et-pb-icon">&#x68;</span></span>
                                                        </div>
                                                        <div class="et_pb_blurb_container">
                                                            <h6 class="et_pb_module_header"><span>Content Strategy</span></h6>
                                                            <div class="et_pb_blurb_description">
                                                                <p>In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_2 et_pb_column_12  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module et_pb_blurb et_pb_blurb_8  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et-pb-icon">&#xe007;</span></span>
                                                        </div>
                                                        <div class="et_pb_blurb_container">
                                                            <h6 class="et_pb_module_header"><span>Business Consulting</span></h6>
                                                            <div class="et_pb_blurb_description">
                                                                <p>In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->
                                        <div class="et_pb_row et_pb_row_7">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_13  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module dsm_dual_heading dsm_dual_heading_1  et_pb_text_align_center et_pb_bg_layout_light">




                                                    <div class="et_pb_module_inner">
                                                        <h1 class="dsm-dual-heading-main et_pb_module_header"><span class="dsm-dual-heading-before">Our</span><span class="dsm-dual-heading-middle"> Top</span><span class="dsm-dual-heading-after"> Mentors</span></h1>
                                                    </div>
                                                </div>
                                                <div class="et_pb_module et_pb_text et_pb_text_3  et_pb_text_align_center et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">
                                                        <p>Our mentors are very professional and well trained to guide everyone in right direction</p>
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->
                                        <div class="et_pb_row et_pb_row_8">
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_14  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module et_pb_blurb et_pb_blurb_9  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="wp-content/uploads/2020/04/portraits-circle-small_5.png" alt="" class="et-waypoint et_pb_animation_top" /></span></div>
                                                        <div class="et_pb_blurb_container">
                                                            <h1 class="et_pb_module_header"><span>Aparna Mishra</span></h1>
                                                            <div class="et_pb_blurb_description">
                                                                <p>A Corporate Professional for 18 years and 10 years of Entrepreneurial experience.<br /> Worked in the domains of Sales, Strategy, Marketing &#038; Operations in the sectors like Media, Telecom
                                                                    and FMCG.</p>
                                                                <p>I would like to mentor those people who are serious &#038; passionate about their work.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_15  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module et_pb_blurb et_pb_blurb_10  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="wp-content/uploads/2020/04/portraits-circle-small_2.png" alt="" class="et-waypoint et_pb_animation_top" /></span></div>
                                                        <div class="et_pb_blurb_container">
                                                            <h1 class="et_pb_module_header"><span>Richard Parasad</span></h1>
                                                            <div class="et_pb_blurb_description">
                                                                <p>A Corporate Professional for 18 years and 10 years of Entrepreneurial experience.<br /> Worked in the domains of Sales, Strategy, Marketing &#038; Operations in the sectors like Media, Telecom
                                                                    and FMCG.</p>
                                                                <p>I would like to mentor those people who are serious &#038; passionate about their work.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_16  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module et_pb_blurb et_pb_blurb_11  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="wp-content/uploads/2020/04/portraits-circle-small_3.png" alt="" class="et-waypoint et_pb_animation_top" /></span></div>
                                                        <div class="et_pb_blurb_container">
                                                            <h1 class="et_pb_module_header"><span>Aparna Mishra</span></h1>
                                                            <div class="et_pb_blurb_description">
                                                                <p>A Corporate Professional for 18 years and 10 years of Entrepreneurial experience.<br /> Worked in the domains of Sales, Strategy, Marketing &#038; Operations in the sectors like Media, Telecom
                                                                    and FMCG.</p>
                                                                <p>I would like to mentor those people who are serious &#038; passionate about their work.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->
                                        <div class="et_pb_row et_pb_row_9">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_17  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module dsm_button dsm_button_0 et_pb_bg_layout_light">




                                                    <div class="et_pb_module_inner">
                                                        <div class="et_pb_button_module_wrapper dsm_button_0_wrapper et_pb_button_alignment_center et_pb_module">
                                                            <a class="et_pb_button et_pb_button_one et_pb_bg_layout_light dsm-none" href="#" data-dsm-lightbox-id="dsm_button_one_lightbox dsm_button_0">See More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->


                                    </div>
                                    <!-- .et_pb_section -->
                                    <div class="et_pb_section et_pb_section_3 et_animated et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider">




                                        <div class="et_pb_row et_pb_row_10 et_animated">
                                            <div class="et_pb_column et_pb_column_1_4 et_pb_column_18  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module et_pb_number_counter et_pb_number_counter_0 et_animated  et_pb_text_align_center et_pb_bg_layout_dark et_pb_with_title" data-number-value="200" data-number-separator="">


                                                    <div class="percent">
                                                        <p><span class="percent-value"></span><span class="percent-sign"></span></p>
                                                    </div>
                                                    <h3 class="title">Mentors</h3>
                                                </div>
                                                <!-- .et_pb_number_counter -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_4 et_pb_column_19  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module et_pb_number_counter et_pb_number_counter_1 et_animated  et_pb_text_align_center et_pb_bg_layout_dark et_pb_with_title" data-number-value="54" data-number-separator="">


                                                    <div class="percent">
                                                        <p><span class="percent-value"></span><span class="percent-sign"></span></p>
                                                    </div>
                                                    <h3 class="title">Problems</h3>
                                                </div>
                                                <!-- .et_pb_number_counter -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_4 et_pb_column_20  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module et_pb_number_counter et_pb_number_counter_2 et_animated  et_pb_text_align_center et_pb_bg_layout_dark et_pb_with_title" data-number-value="12" data-number-separator="">


                                                    <div class="percent">
                                                        <p><span class="percent-value"></span><span class="percent-sign"></span></p>
                                                    </div>
                                                    <h3 class="title">Problem Solved</h3>
                                                </div>
                                                <!-- .et_pb_number_counter -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_4 et_pb_column_21  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module et_pb_number_counter et_pb_number_counter_3 et_animated  et_pb_text_align_center et_pb_bg_layout_dark et_pb_with_title" data-number-value="906" data-number-separator="">


                                                    <div class="percent">
                                                        <p><span class="percent-value"></span><span class="percent-sign"></span></p>
                                                    </div>
                                                    <h3 class="title">Online Users</h3>
                                                </div>
                                                <!-- .et_pb_number_counter -->
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->

                                        <div class="et_pb_bottom_inside_divider et-no-transition"></div>
                                    </div>
                                    <!-- .et_pb_section -->
                                    <div class="et_pb_section et_pb_section_4 et_section_regular">




                                        <div class="et_pb_row et_pb_row_11">
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_22  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module dsm_dual_heading dsm_dual_heading_2  et_pb_text_align_left et_pb_bg_layout_light">




                                                    <div class="et_pb_module_inner">
                                                        <h1 class="dsm-dual-heading-main et_pb_module_header"><span class="dsm-dual-heading-before">WHY</span><span class="dsm-dual-heading-middle"> US</span></h1>
                                                    </div>
                                                </div>
                                                <div class="et_pb_module et_pb_divider et_pb_divider_0 et_pb_divider_position_ et_pb_space">
                                                    <div class="et_pb_divider_internal"></div>
                                                </div>
                                                <div class="et_pb_module et_pb_text et_pb_text_4 et_animated  et_pb_text_align_left et_pb_bg_layout_dark">


                                                    <div class="et_pb_text_inner">
                                                        <p style="text-align: left;">Step up your career game plan, prep up interviews, job search &amp; promotion. Your mentor will listen to your doubts, give solutions (all drawn from their experience) and take you where you want
                                                            to be.</p>
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_23  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module dsm_flipbox dsm_flipbox_2">




                                                    <div class="et_pb_module_inner">
                                                        <div class="dsm-flipbox dsm-flipbox-effect-right">
                                                            <div class="et_pb_module dsm_flipbox_child dsm_flipbox_child_4 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">




                                                                <div class="et_pb_module_inner">


                                                                    <div class="dsm_flipbox_child_image"><span class="dsm_flipbox_child_image_wrap"><img src="wp-content/uploads/2020/04/chat-icon.png" alt="" /></span></div>
                                                                    <div class="dsm_flipbox_wrapper et_pb_text_align_center">
                                                                        <h1 class="dsm-title et_pb_module_header">Chat</h1>



                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="et_pb_module dsm_flipbox_child dsm_flipbox_child_5 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">




                                                                <div class="et_pb_module_inner">



                                                                    <div class="dsm_flipbox_wrapper et_pb_text_align_center">
                                                                        <h4 class="dsm-title et_pb_module_header">Stay guided, always.</h4>
                                                                        <span class="dsm-subtitle">Have 1-on-1 interaction with your mentors to discuss your progress, roadblocks you face in assignments, career/job etc. Your mentor acts as an accountability partner, thereby accelerating your learning.</span>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="et_pb_module dsm_flipbox dsm_flipbox_3">




                                                    <div class="et_pb_module_inner">
                                                        <div class="dsm-flipbox dsm-flipbox-effect-right">
                                                            <div class="et_pb_module dsm_flipbox_child dsm_flipbox_child_6 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">




                                                                <div class="et_pb_module_inner">


                                                                    <div class="dsm_flipbox_child_image"><span class="dsm_flipbox_child_image_wrap"><img src="wp-content/uploads/2020/04/calls-icon.png" alt="" /></span></div>
                                                                    <div class="dsm_flipbox_wrapper et_pb_text_align_center">
                                                                        <h1 class="dsm-title et_pb_module_header">Video Calls</h1>



                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="et_pb_module dsm_flipbox_child dsm_flipbox_child_7 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">




                                                                <div class="et_pb_module_inner">



                                                                    <div class="dsm_flipbox_wrapper et_pb_text_align_center">
                                                                        <h4 class="dsm-title et_pb_module_header">Stuck? Never again.</h4>
                                                                        <span class="dsm-subtitle">Nothing like getting your doubts being cleared via 1-on-1 video calls with your mentor. Depending on the complexity and urgency of your needs, hop on a quick call.</span>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_24  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module dsm_flipbox dsm_flipbox_4">




                                                    <div class="et_pb_module_inner">
                                                        <div class="dsm-flipbox dsm-flipbox-effect-right">
                                                            <div class="et_pb_module dsm_flipbox_child dsm_flipbox_child_8 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">




                                                                <div class="et_pb_module_inner">


                                                                    <div class="dsm_flipbox_child_image"><span class="dsm_flipbox_child_image_wrap"><img src="wp-content/uploads/2020/04/goals-icon.png" alt="" /></span></div>
                                                                    <div class="dsm_flipbox_wrapper et_pb_text_align_center">
                                                                        <h1 class="dsm-title et_pb_module_header">Learn what matters</h1>



                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="et_pb_module dsm_flipbox_child dsm_flipbox_child_9 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">




                                                                <div class="et_pb_module_inner">



                                                                    <div class="dsm_flipbox_wrapper et_pb_text_align_center">
                                                                        <h4 class="dsm-title et_pb_module_header">WEEKLY GOALS & ACTIVITIES</h4>
                                                                        <span class="dsm-subtitle">Work on assignments that keeps you focused & consistent. Your mentor challenges you with weekly tasks that are designed to take your skills to the next level & help you accomplish long-term goals.</span>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="et_pb_module dsm_flipbox dsm_flipbox_5">




                                                    <div class="et_pb_module_inner">
                                                        <div class="dsm-flipbox dsm-flipbox-effect-right">
                                                            <div class="et_pb_module dsm_flipbox_child dsm_flipbox_child_10 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">




                                                                <div class="et_pb_module_inner">


                                                                    <div class="dsm_flipbox_child_image"><span class="dsm_flipbox_child_image_wrap"><img src="wp-content/uploads/2020/04/code-icon.png" alt="" /></span></div>
                                                                    <div class="dsm_flipbox_wrapper et_pb_text_align_center">
                                                                        <h1 class="dsm-title et_pb_module_header">Get answers faster.</h1>



                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="et_pb_module dsm_flipbox_child dsm_flipbox_child_11 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">




                                                                <div class="et_pb_module_inner">



                                                                    <div class="dsm_flipbox_wrapper et_pb_text_align_center">
                                                                        <h4 class="dsm-title et_pb_module_header">HANDS-ON CODING SUPPORT</h4>
                                                                        <span class="dsm-subtitle">Your mentors can help you with fixing smaller bugs, hinting at potential code issues to help resolve your queries in your personal projects. Code help for commercial projects is not entertained.</span>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->


                                    </div>
                                    <!-- .et_pb_section -->
                                    <div class="et_pb_section et_pb_section_5 et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider et_pb_top_divider">
                                        <div class="et_pb_top_inside_divider et-no-transition"></div>



                                        <div class="et_pb_row et_pb_row_12">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_25  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module dsm_dual_heading dsm_dual_heading_3 et_animated  et_pb_text_align_center et_pb_bg_layout_dark">




                                                    <div class="et_pb_module_inner">
                                                        <h1 class="dsm-dual-heading-main et_pb_module_header"><span class="dsm-dual-heading-before">Say Bye to </span><span class="dsm-dual-heading-middle">Self-Doubt, </span><span class="dsm-dual-heading-after">Hello to Confidence</span></h1>
                                                    </div>
                                                </div>
                                                <div class="et_pb_module et_pb_divider et_pb_divider_1 et_pb_divider_position_ et_pb_space">
                                                    <div class="et_pb_divider_internal"></div>
                                                </div>
                                                <div class="et_pb_module et_pb_text et_pb_text_5 et_animated  et_pb_text_align_center et_pb_bg_layout_dark">


                                                    <div class="et_pb_text_inner">Step up your career game plan, prep up interviews, job search &amp; promotion. Your mentor will listen to your doubts, give solutions (all drawn from their experience) and take you where you want to
                                                        be.
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->

                                        <div class="et_pb_bottom_inside_divider et-no-transition"></div>
                                    </div>
                                    <!-- .et_pb_section -->
                                    <div class="et_pb_section et_pb_section_6 et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider et_pb_top_divider">




                                        <div class="et_pb_row et_pb_row_13">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_26  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module dsm_mask_text dsm_mask_text_0 et_animated">




                                                    <div class="et_pb_module_inner">
                                                        <h2 class="dsm-mask-text et_pb_module_header">Become A Mentor</h2>
                                                    </div>
                                                </div>
                                                <div class="et_pb_module et_pb_text et_pb_text_6 et_animated  et_pb_text_align_center et_pb_bg_layout_dark">


                                                    <div class="et_pb_text_inner">You give the guidance, we handle the network, discoverability, mentee assignment, payment, tooling and knowledge transfers. Help young professionals around the world with reaching their goals.</div>
                                                </div>
                                                <!-- .et_pb_text -->
                                                <div class="et_pb_module dsm_button dsm_button_1 et_animated et_pb_bg_layout_dark">




                                                    <div class="et_pb_module_inner">
                                                        <div class="et_pb_button_module_wrapper dsm_button_1_wrapper et_pb_button_alignment_center et_pb_module">
                                                            <a class="et_pb_button et_pb_button_one et_pb_bg_layout_dark dsm-none" href="#" data-dsm-lightbox-id="dsm_button_one_lightbox dsm_button_1">Read More</a><a class="et_pb_button et_pb_button_two et_pb_bg_layout_dark dsm-none"
                                                                href="#" data-dsm-lightbox-id="dsm_button_two_lightbox dsm_button_1">Sign Up Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->

                                        <div class="et_pb_bottom_inside_divider et-no-transition"></div>
                                    </div>
                                    <!-- .et_pb_section -->
                                    <div class="et_pb_section et_pb_section_7 et_pb_with_background et_section_regular">




                                        <div class="et_pb_row et_pb_row_14">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_27  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module dsm_dual_heading dsm_dual_heading_4  et_pb_text_align_center et_pb_bg_layout_light">




                                                    <div class="et_pb_module_inner">
                                                        <h1 class="dsm-dual-heading-main et_pb_module_header"><span class="dsm-dual-heading-before">Contact</span><span class="dsm-dual-heading-middle"> US</span></h1>
                                                    </div>
                                                </div>
                                                <div id="et_pb_contact_form_0" class="et_pb_with_border et_pb_module et_pb_contact_form_0 et_animated et_pb_recaptcha_enabled et_pb_contact_form_container clearfix  et_pb_text_align_center" data-form_unique_num="0">



                                                    <div class="et-pb-contact-message"></div>

                                                    <div class="et_pb_contact">
                                                        <form class="et_pb_contact_form clearfix" method="post" action="https://www.beingmentor.pk/">
                                                            <p class="et_pb_contact_field et_pb_contact_field_0 et_pb_contact_field_half" data-id="name" data-type="input">


                                                                <label for="et_pb_contact_name_0" class="et_pb_contact_form_label">Name</label>
                                                                <input type="text" id="et_pb_contact_name_0" class="input" value="" name="et_pb_contact_name_0" data-required_mark="required" data-field_type="input" data-original_id="name" placeholder="Name">
                                                            </p>
                                                            <p class="et_pb_contact_field et_pb_contact_field_1 et_pb_contact_field_half et_pb_contact_field_last" data-id="email" data-type="email">


                                                                <label for="et_pb_contact_email_0" class="et_pb_contact_form_label">Email Address</label>
                                                                <input type="text" id="et_pb_contact_email_0" class="input" value="" name="et_pb_contact_email_0" data-required_mark="required" data-field_type="email" data-original_id="email" placeholder="Email Address">
                                                            </p>
                                                            <p class="et_pb_contact_field et_pb_contact_field_2 et_pb_contact_field_last" data-id="message" data-type="text">


                                                                <label for="et_pb_contact_message_0" class="et_pb_contact_form_label">Message</label>
                                                                <textarea name="et_pb_contact_message_0" id="et_pb_contact_message_0" class="et_pb_contact_message input" data-required_mark="required" data-field_type="text" data-original_id="message" placeholder="Message"></textarea>
                                                            </p>
                                                            <input type="hidden" value="et_contact_proccess" name="et_pb_contactform_submit_0" />
                                                            <div class="et_contact_bottom_container">

                                                                <button type="submit" name="et_builder_submit_button" class="et_pb_contact_submit et_pb_button">Submit</button>
                                                            </div>
                                                            <input type="hidden" id="_wpnonce-et-pb-contact-form-submitted-0" name="_wpnonce-et-pb-contact-form-submitted-0" value="0273dfd618" /><input type="hidden" name="_wp_http_referer" value="/" />
                                                        </form>
                                                    </div>
                                                    <!-- .et_pb_contact -->
                                                </div>
                                                <!-- .et_pb_contact_form_container -->

                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->


                                    </div>
                                    <!-- .et_pb_section -->
                                </div>
                                <!-- .et_builder_inner_content -->
                            </div>
                            <!-- .et-l -->
                        </div>
                        <!-- .entry-content -->


                    </article>
                    <!-- .et_pb_post -->



                </div>
                <!-- #main-content -->

                <footer class="et-l et-l--footer">
                    <div class="et_builder_inner_content et_pb_gutters3">
                        <div class="et_pb_section et_pb_section_0_tb_footer et_pb_with_background et_section_regular">




                            <div class="et_pb_row et_pb_row_0_tb_footer">
                                <div class="et_pb_column et_pb_column_1_4 et_pb_column_0_tb_footer  et_pb_css_mix_blend_mode_passthrough">


                                    <div class="et_pb_module et_pb_text et_pb_text_0_tb_footer  et_pb_text_align_center et_pb_bg_layout_light">


                                        <div class="et_pb_text_inner">
                                            <p>Explore</p>
                                        </div>
                                    </div>
                                    <!-- .et_pb_text -->
                                    <div class="et_pb_module et_pb_text et_pb_text_1_tb_footer  et_pb_text_align_center et_pb_bg_layout_light">


                                        <div class="et_pb_text_inner">
                                            <p><i><u><span style="color: #ffffff;"><a style="color: #ffffff;" href="#">Become a Mentor</a></span></u></i><br />Home<br /> <span style="color: #ffffff;"></span>About Us<br />Mentors<br /> <span style="color: #ffffff;"></span>Success
                                                Stories
                                                <br /> <span style="color: #ffffff;"></span></p>
                                            <p><span style="color: #ffffff;"></span></p>
                                        </div>
                                    </div>
                                    <!-- .et_pb_text -->
                                </div>
                                <!-- .et_pb_column -->
                                <div class="et_pb_column et_pb_column_1_4 et_pb_column_1_tb_footer  et_pb_css_mix_blend_mode_passthrough">


                                    <div class="et_pb_module et_pb_text et_pb_text_2_tb_footer  et_pb_text_align_center et_pb_bg_layout_light">


                                        <div class="et_pb_text_inner">
                                            <p>Help &#038; Support</p>
                                        </div>
                                    </div>
                                    <!-- .et_pb_text -->
                                    <div class="et_pb_module et_pb_text et_pb_text_3_tb_footer  et_pb_text_align_center et_pb_bg_layout_light">


                                        <div class="et_pb_text_inner">
                                            <p><i><u><span style="color: #ffffff;"></span></u></i>Help Center<br />Contact Us<br />How It works<br />Terms &#038; Policy<span style="color: #ffffff;"></span></p>
                                            <p>&nbsp;</p>
                                        </div>
                                    </div>
                                    <!-- .et_pb_text -->
                                </div>
                                <!-- .et_pb_column -->
                                <div class="et_pb_column et_pb_column_1_4 et_pb_column_2_tb_footer  et_pb_css_mix_blend_mode_passthrough">


                                    <div class="et_pb_module et_pb_text et_pb_text_4_tb_footer  et_pb_text_align_center et_pb_bg_layout_light">


                                        <div class="et_pb_text_inner">
                                            <p>Contact Us</p>
                                        </div>
                                    </div>
                                    <!-- .et_pb_text -->
                                    <div class="et_pb_module et_pb_text et_pb_text_5_tb_footer  et_pb_text_align_center et_pb_bg_layout_light">


                                        <div class="et_pb_text_inner">
                                            <p><span style="color: #ffffff;"></span><strong>Give us a call:</strong><br /><span style="color: #ffffff;"><a style="color: #ffffff;" href="#"><span>+92 300 2601507</span></a>
                                                </span><br /> <span style="color: #ffffff;"></span><strong>Email Us:</strong><br /> <span>info@beingmentor.pk</span><br /> <span style="color: #ffffff;"></span></p>
                                        </div>
                                    </div>
                                    <!-- .et_pb_text -->
                                </div>
                                <!-- .et_pb_column -->
                                <div class="et_pb_column et_pb_column_1_4 et_pb_column_3_tb_footer  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                    <div class="et_pb_module et_pb_text et_pb_text_6_tb_footer  et_pb_text_align_center et_pb_bg_layout_light">


                                        <div class="et_pb_text_inner"><img src="wp-content/uploads/2020/04/logo-4-300x76.png" width="300" height="76" alt="" class="wp-image-145 alignnone size-medium" /></div>
                                    </div>
                                    <!-- .et_pb_text -->
                                    <div class="et_pb_module et_pb_text et_pb_text_7_tb_footer  et_pb_text_align_center et_pb_bg_layout_dark">


                                        <div class="et_pb_text_inner">
                                            <p>BeingMentor is an independent education platform with the goal to connect you with the mentor you deserve</p>
                                        </div>
                                    </div>
                                    <!-- .et_pb_text -->
                                </div>
                                <!-- .et_pb_column -->


                            </div>
                            <!-- .et_pb_row -->
                            <div class="et_pb_row et_pb_row_1_tb_footer">
                                <div class="et_pb_column et_pb_column_4_4 et_pb_column_4_tb_footer  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                    <div class="et_pb_module et_pb_divider et_pb_divider_0_tb_footer et_pb_divider_position_ et_pb_space">
                                        <div class="et_pb_divider_internal"></div>
                                    </div>
                                    <div class="et_pb_module et_pb_text et_pb_text_8_tb_footer  et_pb_text_align_center et_pb_bg_layout_light">


                                        <div class="et_pb_text_inner">Copyright ©&#xfe0f;2020 BeingMentor.pk All Right Reserved by Shmael</div>
                                    </div>
                                    <!-- .et_pb_text -->
                                </div>
                                <!-- .et_pb_column -->


                            </div>
                            <!-- .et_pb_row -->


                        </div>
                        <!-- .et_pb_section -->
                    </div>
                    <!-- .et_builder_inner_content -->
                </footer>
                <!-- .et-l -->
            </div>
            <!-- #et-main-area -->


        </div>
        <!-- #et-boc -->
    </div>
    <!-- #page-container -->
        <script type="text/javascript">
            var et_animation_data = [{
                "class": "et_pb_blurb_0"
                , "style": "slideBottom"
                , "repeat": "once"
                , "duration": "1000ms"
                , "delay": "0ms"
                , "intensity": "10%"
                , "starting_opacity": "0%"
                , "speed_curve": "ease-in-out"
            }, {
                "class": "et_pb_blurb_1"
                , "style": "slideBottom"
                , "repeat": "once"
                , "duration": "1000ms"
                , "delay": "0ms"
                , "intensity": "10%"
                , "starting_opacity": "0%"
                , "speed_curve": "ease-in-out"
            }, {
                "class": "et_pb_blurb_2"
                , "style": "slideBottom"
                , "repeat": "once"
                , "duration": "1000ms"
                , "delay": "0ms"
                , "intensity": "10%"
                , "starting_opacity": "0%"
                , "speed_curve": "ease-in-out"
            }, {
                "class": "et_pb_section_3"
                , "style": "zoom"
                , "repeat": "once"
                , "duration": "1000ms"
                , "delay": "0ms"
                , "intensity": "50%"
                , "starting_opacity": "0%"
                , "speed_curve": "ease-in-out"
            }, {
                "class": "et_pb_row_10"
                , "style": "flipTop"
                , "repeat": "once"
                , "duration": "1000ms"
                , "delay": "0ms"
                , "intensity": "50%"
                , "starting_opacity": "0%"
                , "speed_curve": "ease-in-out"
            }, {
                "class": "et_pb_number_counter_0"
                , "style": "zoom"
                , "repeat": "once"
                , "duration": "1000ms"
                , "delay": "0ms"
                , "intensity": "50%"
                , "starting_opacity": "0%"
                , "speed_curve": "ease-in-out"
            }, {
                "class": "et_pb_number_counter_1"
                , "style": "zoom"
                , "repeat": "once"
                , "duration": "1000ms"
                , "delay": "100ms"
                , "intensity": "50%"
                , "starting_opacity": "0%"
                , "speed_curve": "ease-in-out"
            }, {
                "class": "et_pb_number_counter_2"
                , "style": "zoom"
                , "repeat": "once"
                , "duration": "1000ms"
                , "delay": "200ms"
                , "intensity": "50%"
                , "starting_opacity": "0%"
                , "speed_curve": "ease-in-out"
            }, {
                "class": "et_pb_number_counter_3"
                , "style": "zoom"
                , "repeat": "once"
                , "duration": "1000ms"
                , "delay": "300ms"
                , "intensity": "50%"
                , "starting_opacity": "0%"
                , "speed_curve": "ease-in-out"
            }, {
                "class": "et_pb_text_4"
                , "style": "fade"
                , "repeat": "once"
                , "duration": "1000ms"
                , "delay": "0ms"
                , "intensity": "50%"
                , "starting_opacity": "0%"
                , "speed_curve": "ease-in-out"
            }, {
                "class": "dsm_dual_heading_3"
                , "style": "slideLeft"
                , "repeat": "once"
                , "duration": "1000ms"
                , "delay": "0ms"
                , "intensity": "50%"
                , "starting_opacity": "0%"
                , "speed_curve": "ease-in-out"
            }, {
                "class": "et_pb_text_5"
                , "style": "fade"
                , "repeat": "once"
                , "duration": "1000ms"
                , "delay": "0ms"
                , "intensity": "50%"
                , "starting_opacity": "0%"
                , "speed_curve": "ease-in-out"
            }, {
                "class": "dsm_mask_text_0"
                , "style": "slideLeft"
                , "repeat": "once"
                , "duration": "1000ms"
                , "delay": "0ms"
                , "intensity": "50%"
                , "starting_opacity": "0%"
                , "speed_curve": "ease-in-out"
            }, {
                "class": "et_pb_text_6"
                , "style": "zoom"
                , "repeat": "once"
                , "duration": "1000ms"
                , "delay": "0ms"
                , "intensity": "50%"
                , "starting_opacity": "0%"
                , "speed_curve": "ease-in-out"
            }, {
                "class": "dsm_button_1"
                , "style": "fade"
                , "repeat": "once"
                , "duration": "1000ms"
                , "delay": "0ms"
                , "intensity": "50%"
                , "starting_opacity": "0%"
                , "speed_curve": "ease-in-out"
            }, {
                "class": "et_pb_contact_form_0"
                , "style": "zoom"
                , "repeat": "once"
                , "duration": "1000ms"
                , "delay": "0ms"
                , "intensity": "50%"
                , "starting_opacity": "0%"
                , "speed_curve": "ease-in-out"
            }];

        </script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var DIVI = {
                "item_count": "%d Item"
                , "items_count": "%d Items"
            };
            var et_shortcodes_strings = {
                "previous": "Previous"
                , "next": "Next"
            };
            var et_pb_custom = {
                "ajaxurl": "https:\/\/www.beingmentor.pk\/wp-admin\/admin-ajax.php"
                , "images_uri": "https:\/\/www.beingmentor.pk\/wp-content\/themes\/Divi\/images"
                , "builder_images_uri": "https:\/\/www.beingmentor.pk\/wp-content\/themes\/Divi\/includes\/builder\/images"
                , "et_frontend_nonce": "f4910cfbd2"
                , "subscription_failed": "Please, check the fields below to make sure you entered the correct information."
                , "et_ab_log_nonce": "5c09aa47e4"
                , "fill_message": "Please, fill in the following fields:"
                , "contact_error_message": "Please, fix the following errors:"
                , "invalid": "Invalid email"
                , "captcha": "Captcha"
                , "prev": "Prev"
                , "previous": "Previous"
                , "next": "Next"
                , "wrong_captcha": "You entered the wrong number in captcha."
                , "wrong_checkbox": "Checkbox"
                , "ignore_waypoints": "no"
                , "is_divi_theme_used": "1"
                , "widget_search_selector": ".widget_search"
                , "ab_tests": []
                , "is_ab_testing_active": ""
                , "page_id": "9"
                , "unique_test_id": ""
                , "ab_bounce_rate": "5"
                , "is_cache_plugin_active": "no"
                , "is_shortcode_tracking": ""
                , "tinymce_uri": ""
            };
            var et_frontend_scripts = {
                "builderCssContainerPrefix": "#et-boc"
                , "builderCssLayoutPrefix": "#et-boc .et-l"
            };
            var et_pb_box_shadow_elements = [];
            var et_pb_motion_elements = {
                "desktop": []
                , "tablet": []
                , "phone": []
            };
            /* ]]> */

        </script>
        <script type='text/javascript' src="{{asset('customJs/custom.unifiedc1f9.js')}}"></script>
        <script type='text/javascript' src="{{asset('customJs/frontend-bundle.min91ac.js')}}"></script>
        <script type='text/javascript' src="{{asset('customJs/commonc1f9.js')}}"></script>
        <script type='text/javascript' src="{{asset('customJs/wp-embed.min91d5.js')}}"></script>

    <span class="et_pb_scroll_top et-pb-icon"></span>
</body>

<!-- Mirrored from www.beingmentor.pk/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2020 14:40:58 GMT -->

</html>