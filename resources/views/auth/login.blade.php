
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Being Mentor') }}</title>

    <script type="text/javascript">
        document.documentElement.className = 'js';

    </script>
    <link href="{{ asset('css/adminator.css') }}" rel="stylesheet">
    <script>
        var et_site_url = "{{url('/')}}";
        var et_post_id = '4026';

        function et_core_page_resource_fallback(a, b) {
            "undefined" === typeof b && (b = a.sheet.cssRules && 0 === a.sheet.cssRules.length);
            b && (a.onerror = null, a.onload = null, a.href ? a.href = et_site_url + "/?et_core_page_resource=" + a.id + et_post_id : a.src && (a.src = et_site_url + "/?et_core_page_resource=" + a.id + et_post_id))
        }

    </script>
    <title>Login page | BeingMentor</title>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/"
            , "ext": ".png"
            , "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/"
            , "svgExt": ".svg"
            , "source": {
                "concatemoji": "https:\/\/prototype.beingmentor.pk\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.4.1"
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

        .input-container {
            display: flex;
            width: 100%;
            margin-bottom: 15px;
        }

        .icon {
            padding: 10px;
            background: dodgerblue;
            color: white;
            min-width: 50px;
            text-align: center;
        }

    </style>
    <link rel='stylesheet' id='wp-block-library-css' href="{{asset('wp-includes/css/dist/block-library/style.minc225.css?ver=5.4.1')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='divi-fonts-css' href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='divi-style-css' href="{{asset('wp-content/themes/Divi/stylec1f9.css?ver=4.4.2')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='supreme-modules-pro-for-divi-styles-css' href="{{asset('wp-content/plugins/supreme-modules-pro-for-divi/styles/style.min91ac.css?ver=2.6.8')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href="{{asset('wp-includes/css/dashicons.minc225.css?ver=5.4.1')}}" type='text/css' media='all' />
    <script type='text/javascript' src="{{asset('wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp')}}"></script>
    <script type='text/javascript' src="{{asset('wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1')}}"></script>
    <script type='text/javascript' src="{{asset('wp-content/themes/Divi/core/admin/js/es6-promise.auto.minc225.js?ver=5.4.1')}}"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var et_core_api_spam_recaptcha = {
            "site_key": ""
            , "page_action": {
                "action": "login_page_2"
            }
        };
        /* ]]> */

    </script>
    <script type='text/javascript' src="{{asset('wp-content/themes/Divi/core/admin/js/recaptchac225.js?ver=5.4.1')}}"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <script src="https://kit.fontawesome.com/89ffdc35e7.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{asset('wp-content/uploads/2020/04/cropped-logo-4-32x32.png')}}" sizes="32x32" />
    <link rel="icon" href="{{asset('wp-content/uploads/2020/04/cropped-logo-4-192x192.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{asset('wp-content/uploads/2020/04/cropped-logo-4-180x180.png')}}" />
    <meta name="msapplication-TileImage" content="{{asset('wp-content/uploads/2020/04/cropped-logo-4-270x270.png')}}" />
    <link rel="stylesheet" id="et-core-unified-tb-3941-4026-cached-inline-styles" href="{{asset('wp-content/et-cache/4026/et-core-unified-tb-3941-4026-15905294737853.min.css')}}" onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)" />
</head>

<body class="page-template-default page page-id-4026 et-tb-has-template et-tb-has-footer et_pb_button_helper_class et_transparent_nav et_fixed_nav et_show_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_left et_cover_background et_pb_gutter windows et_pb_gutters3 et_pb_pagebuilder_layout et_smooth_scroll et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css">
    <div id="page-container">
        <div id="et-boc" class="et-boc">
            @include('layouts.topbar')
            <!-- #main-header -->
            <div id="et-main-area">
                <div id="main-content">
                    <article id="post-4026" class="post-4026 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="et-l et-l--post">
                                <div class="et_builder_inner_content et_pb_gutters3">
                                    <div class="et_pb_section et_pb_section_0 et_section_regular">
                                        <div class="et_pb_row et_pb_row_0 et_pb_gutters1">
                                            <div class="et_pb_column et_pb_column_2_3 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
                                                <div class="et_pb_module et_pb_image et_pb_image_0">
                                                    <span class="et_pb_image_wrap ">
                                                        <img src="{{asset('wp-content/uploads/2020/04/login-page.png')}}" alt="" title="" srcset="{{asset('wp-content/uploads/2020/04/login-page.png')}} 1500w, {{asset('wp-content/uploads/2020/04/login-page-1280x1015.png')}} 1280w,
                                                          {{asset('wp-content/uploads/2020/04/login-page-980x777.png')}} 980w, 
                                                          {{asset('wp-content/uploads/2020/04/login-page-480x381.png 480w')}}" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) and (max-width: 980px) 980px, (min-width: 981px) and (max-width: 1280px) 1280px, (min-width: 1281px) 1500px, 100vw" />
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                                <div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_center et_pb_bg_layout_light">
                                                    <div class="et_pb_text_inner">USER LOGIN</div>
                                                </div>
                                                <!-- .et_pb_text -->
                                                <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_center et_pb_bg_layout_light">
                                                    <div class="et_pb_text_inner">log in to manage your account</div>
                                                </div>
                                                <!-- .et_pb_text -->
                                                <form method="post" action="{{route('login')}}">
                                                    <div class="et_pb_module et_pb_image et_pb_image_1">

                                                        @csrf()
                                                        <div class="form-group input-container">
                                                            <i class="fa fa-user icon"></i>
                                                            <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" value="{{old('email')}}" name="email" placeholder="Enter your email">
                                                            @if($errors->has('email'))
                                                            <div class="invalid-feedback">{{$errors->first('email')}}</div>
                                                            @endif
                                                        </div>
                                                        <div class="form-group input-container">
                                                            <i class="fa fa-key icon"></i>
                                                            <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" name="password" placeholder="Enter password">
                                                            @if($errors->has('password'))
                                                            <div class="invalid-feedback">{{$errors->first('password')}}</div>
                                                            @endif
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="peers ai-c jc-sb fxw-nw">
                                                                <div class="peer">
                                                                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                                                        <input type="checkbox" id="remember" name="remember" class="peer">
                                                                        <label for="remember" class=" peers peer-greed js-sb ai-c">
                                                                            <span class="peer peer-greed">Remember Me</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="peer">
                                                                    <label for="remember" class=" peers peer-greed js-sb ai-c">
                                                                        <a href="{{route('password.request')}}" class="peer peer-greed">Forget Password</a>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="et_pb_module dsm_button dsm_button_0 et_pb_bg_layout_light">
                                                        <div class="et_pb_module_inner">
                                                            <div class="et_pb_button_module_wrapper dsm_button_0_wrapper et_pb_button_alignment_center et_pb_module">
                                                                <input type="submit" class="et_pb_button et_pb_button_one et_pb_bg_layout_light dsm-none" data-dsm-lightbox-id="dsm_button_one_lightbox dsm_button_0" value="LOGIN">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="et_pb_module et_pb_text et_pb_text_2  et_pb_text_align_center et_pb_bg_layout_light">
                                                    <div class="et_pb_text_inner">
                                                        <p>We have reputed professional mentors for every subject, whether it is math or business-related topics</p>
                                                    </div>
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
                            </div>
                            <!-- .et-l -->
                        </div>
                        <!-- .entry-content -->
                    </article>
                    <!-- .et_pb_post -->
                </div>
                <!-- #main-content -->
                @include('footer')
                <!-- .et-l -->
            </div>
            <!-- #et-main-area -->
        </div>
        <!-- #et-boc -->
    </div>
    <!-- #page-container -->

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
            "ajaxurl": "https:\/\/prototype.beingmentor.pk\/wp-admin\/admin-ajax.php"
            , "images_uri": "https:\/\/prototype.beingmentor.pk\/wp-content\/themes\/Divi\/images"
            , "builder_images_uri": "https:\/\/prototype.beingmentor.pk\/wp-content\/themes\/Divi\/includes\/builder\/images"
            , "et_frontend_nonce": "38b740e72d"
            , "subscription_failed": "Please, check the fields below to make sure you entered the correct information."
            , "et_ab_log_nonce": "5af0c086f2"
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
            , "page_id": "4026"
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
    <script type='text/javascript' src="{{asset('wp-content/themes/Divi/js/custom.unifiedc1f9.js?ver=4.4.2')}}"></script>
    <script type='text/javascript' src="{{asset('wp-content/plugins/supreme-modules-pro-for-divi/scripts/frontend-bundle.min91ac.js?ver=2.6.8')}}"></script>
    <script type='text/javascript' src="{{asset('wp-content/themes/Divi/core/admin/js/commonc1f9.js?ver=4.4.2')}}"></script>
    <script type='text/javascript' src="{{asset('wp-includes/js/wp-embed.minc225.js?ver=5.4.1')}}"></script>

    <span class="et_pb_scroll_top et-pb-icon"></span>
</body>
</html>
