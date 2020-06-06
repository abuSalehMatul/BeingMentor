
<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript">
        document.documentElement.className = 'js';

    </script>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script> --}}

    <script>
        var et_site_url = "{{url('/')}}";
        var et_post_id = '4037';

        function et_core_page_resource_fallback(a, b) {
            "undefined" === typeof b && (b = a.sheet.cssRules && 0 === a.sheet.cssRules.length);
            b && (a.onerror = null, a.onload = null, a.href ? a.href = et_site_url + "/?et_core_page_resource=" + a.id + et_post_id : a.src && (a.src = et_site_url + "/?et_core_page_resource=" + a.id + et_post_id))
        }

    </script>
    <title>REgistration form | BeingMentor</title>
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel="alternate" type="application/rss+xml" title="BeingMentor &raquo; Feed" href="https://prototype.beingmentor.pk/feed/" />
    <link rel="alternate" type="application/rss+xml" title="BeingMentor &raquo; Comments Feed" href="https://prototype.beingmentor.pk/comments/feed/" />
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

    </style>
    <link rel='stylesheet' id='wp-block-library-css' href="{{asset('wp-includes/css/dist/block-library/style.minc225.css?ver=5.4.1')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='divi-fonts-css' href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='divi-style-css' href="{{asset('wp-content/themes/Divi/stylec1f9.css?ver=4.4.2')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='supreme-modules-pro-for-divi-styles-css' href="{{asset('wp-content/plugins/supreme-modules-pro-for-divi/styles/style.min91ac.css?ver=2.6.8')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href="{{asset('wp-includes/css/dashicons.minc225.css?ver=5.4.1')}}" type='text/css' media='all' />
    {{-- <script type='text/javascript' src="{{asset('wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp')}}"></script>
    <script type='text/javascript' src="{{asset('wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1')}}"></script> --}}

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" /> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type='text/javascript' src="{{asset('wp-content/themes/Divi/core/admin/js/es6-promise.auto.minc225.js?ver=5.4.1')}}"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var et_core_api_spam_recaptcha = {
            "site_key": ""
            , "page_action": {
                "action": "registration_form"
            }
        };
        /* ]]> */

    </script>
    <script type='text/javascript' src="{{asset('wp-content/themes/Divi/core/admin/js/recaptchac225.js?ver=5.4.1')}}"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <style>
        .select2-container--default.select2-container--focus .select2-selection--multiple {
            background: #0C71C3 !important;
            color: #ffffff;
            font-weight: 700;
            outline: 0;
            padding: 0 5px;
        }

        .select2-container--default .select2-selection--multiple {
            background-color: #0C71C3;
            border-radius: 21px;
            cursor: text;
            padding: 8px;
        }

        .select2-search__field::-webkit-input-placeholder {
            color: #ffffff;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #e4e4e4;
            color: black;
            border-radius: 4px;
            cursor: default;
            float: left;
            margin-right: 5px;
            margin-top: 5px;
            padding: 0 5px;
        }

    </style>
    <script src="https://kit.fontawesome.com/89ffdc35e7.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{asset('wp-content/uploads/2020/04/cropped-logo-4-32x32.png')}}" sizes="32x32" />
    <link rel="icon" href="{{asset('wp-content/uploads/2020/04/cropped-logo-4-192x192.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{asset('wp-content/uploads/2020/04/cropped-logo-4-180x180.png')}}" />
    <link rel="stylesheet" id="et-core-unified-tb-3941-4037-cached-inline-styles" href="{{asset('wp-content/et-cache/4037/et-core-unified-tb-3941-4037-15911602354909.min.css')}}" onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)" />
</head>
<body class="page-template-default page page-id-4037 et-tb-has-template et-tb-has-footer et_pb_button_helper_class et_transparent_nav et_fixed_nav et_show_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_left et_cover_background et_pb_gutter windows et_pb_gutters3 et_pb_pagebuilder_layout et_smooth_scroll et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css">
    <div id="page-container">
        <div id="et-boc" class="et-boc">
            @include('layouts.topbar')
            <div id="et-main-area">
                <div id="main-content">
                    <article id="post-4037" class="post-4037 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="et-l et-l--post">
                                <div class="et_builder_inner_content et_pb_gutters3">
                                    <div class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular">
                                        <div class="et_pb_row et_pb_row_0">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                                <div class="et_pb_module dsm_dual_heading dsm_dual_heading_0  et_pb_text_align_center et_pb_bg_layout_light">
                                                    <div class="et_pb_module_inner">
                                                        <h1 class="dsm-dual-heading-main et_pb_module_header"><span class="dsm-dual-heading-before">Registration</span><span class="dsm-dual-heading-middle">Form</span></h1>
                                                    </div>
                                                </div>
                                                <div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_center et_pb_bg_layout_light">
                                                    <div class="et_pb_text_inner">
                                                        <p>Do you want an online mentor to help you with your academic issues?<br />
                                                            Fill this form and get registered here
                                                        </p>
                                                    </div>
                                                </div> <!-- .et_pb_text -->
                                            </div> <!-- .et_pb_column -->
                                        </div> <!-- .et_pb_row -->
                                        <div class="et_pb_row et_pb_row_1">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                                <div id="et_pb_contact_form_0" class="et_pb_module et_pb_contact_form_0 et_pb_contact_form_container clearfix" data-form_unique_num="0">
                                                    <div class="et-pb-contact-message"></div>
                                                    <div class="et_pb_contact">
                                                        <form class="et_pb_contact_form clearfix" method="POST" action="{{ route('register.user.store') }}" enctype="multipart/form-data">
                                                            @csrf
                                                            <p class="et_pb_contact_field et_pb_contact_field_0 et_pb_contact_field_half" data-id="name" data-type="input">
                                                                <label for="et_pb_contact_name_0" class="et_pb_contact_form_label">Name</label>
                                                                <input type="text" required id="et_pb_contact_name_0" class="input {{ $errors->has('firstName') ? ' is-invalid' : '' }}" value="{{ old('firstName') }}" name="firstName" data-required_mark="required" data-field_type="input" data-original_id="name" placeholder="Name">
                                                                @if ($errors->has('firstName'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>Name field is required</strong>
                                                                </span>
                                                                @endif
                                                            </p>

                                                            <p class="et_pb_contact_field et_pb_contact_field_1 et_pb_contact_field_half et_pb_contact_field_last" data-id="email_2" data-type="input">
                                                                <label for="et_pb_contact_email_2_0" class="et_pb_contact_form_label">Email Adress</label>
                                                                <input type="text" required id="et_pb_contact_email_2_0" class="input {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" name="email" data-required_mark="required" data-field_type="input" data-original_id="email_2" placeholder="Email Adress">
                                                                @if ($errors->has('email'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                                @endif
                                                            </p>
                                                            <p class="et_pb_contact_field et_pb_contact_field_2 et_pb_contact_field_half" data-id="mobile_number" data-type="input">
                                                                <label for="et_pb_contact_mobile_number_0" class="et_pb_contact_form_label">Mobile Number</label>
                                                                <input type="text" required id="et_pb_contact_mobile_number_0" class="input {{ $errors->has('mobile') ? ' is-invalid' : '' }}" value="{{ old('mobile') }}" name="mobile" data-required_mark="required" data-field_type="input" data-original_id="mobile_number" placeholder="Mobile Number">
                                                                @if ($errors->has('mobile'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('mobile') }}</strong>
                                                                </span>
                                                                @endif
                                                            </p>
                                                            <p class="et_pb_contact_field et_pb_contact_field_3 et_pb_contact_field_half et_pb_contact_field_last" data-id="email" data-type="email">
                                                                <label for="et_pb_contact_email_0" class="et_pb_contact_form_label">Give a Title</label>
                                                                <input type="text" required id="et_pb_contact_email_0" class="input {{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ old('title') }}" name="title" data-required_mark="required" data-field_type="email" data-original_id="email" placeholder="Give a Title">
                                                                @if ($errors->has('title'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('title') }}</strong>
                                                                </span>
                                                                @endif
                                                            </p>
                                                            <p class="et_pb_contact_field et_pb_contact_field_4 et_pb_contact_field_half" data-id="field_4" data-type="select">
                                                                <label for="et_pb_contact_field_4_0" class="et_pb_contact_form_label">Register as </label>
                                                                <select id="et_pb_contact_field_4_0" required class="et_pb_contact_select input {{ $errors->has('user_type') ? ' is-invalid' : '' }}" name="user_type" onchange="setType(this)" data-required_mark="required" data-field_type="select" data-original_id="field_4" value="{{ old('user_type') }}">
                                                                    <option value="">Register as </option>
                                                                    <option value="Mentor">Mentor</option>
                                                                    <option value="Mentee">Mentee</option>
                                                                </select>
                                                                @if ($errors->has('user_type'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('user_type') }}</strong>
                                                                </span>
                                                                @endif
                                                            </p>
                                                            <p class="et_pb_contact_field et_pb_contact_field_5 et_pb_contact_field_half et_pb_contact_field_last" data-id="field_4_2" data-type="select">
                                                                <label for="et_pb_contact_field_4_2_0" class="et_pb_contact_form_label">Select Your Plan</label>
                                                                @php
                                                                $plans = DB::table('packages')->get();
                                                                @endphp
                                                                <select id="et_pb_contact_field_4_2_0" required class="et_pb_contact_select input" name="package" data-required_mark="required" data-field_type="select" data-original_id="field_4_2">
                                                                    <option value="">Select Your Plan</option>
                                                                    @foreach($plans as $plan)
                                                                    <option value="{{$plan->id}}">{{$plan->name}} ${{$plan->price}}/{{$plan->duration}} Months</option>
                                                                    @endforeach

                                                                </select>
                                                            </p>
                                                            <p class="et_pb_contact_field et_pb_contact_field_6 et_pb_contact_field_last" data-id="field_5" data-type="text">
                                                                <label for="et_pb_contact_field_5_0" class="et_pb_contact_form_label">Description</label>
                                                                <textarea name="description" required id="et_pb_contact_field_5_0" class="et_pb_contact_message input {{ $errors->has('description') ? ' is-invalid' : '' }}" data-required_mark="required" data-field_type="text" data-original_id="field_5" placeholder="Description">
                                                                {{ old('description') }}
                                                                </textarea>
                                                                @if ($errors->has('description'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('description') }}</strong>
                                                                </span>
                                                                @endif
                                                            </p>
                                                            <p class="et_pb_contact_field et_pb_contact_field_7 et_pb_contact_field_half" data-id="password" data-type="input">
                                                                <label for="et_pb_contact_password_0" class="et_pb_contact_form_label">Password</label>
                                                                <input type="text" id="et_pb_contact_password_0" required class="input {{ $errors->has('password') ? ' is-invalid' : '' }}" value="{{ old('password') }}" name="password" data-required_mark="required" data-field_type="input" data-original_id="password" placeholder="Password">
                                                                @if ($errors->has('password'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('password') }}</strong>
                                                                </span>
                                                                @endif
                                                            </p>
                                                            <p class="et_pb_contact_field et_pb_contact_field_8 et_pb_contact_field_half et_pb_contact_field_last" data-id="confirm_password" data-type="input">
                                                                <label for="et_pb_contact_confirm_password_0" class="et_pb_contact_form_label">Confirm Password</label>
                                                                <input type="text" id="et_pb_contact_confirm_password_0" required class="input {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" data-required_mark="required" data-field_type="input" data-original_id="confirm_password" placeholder="Confirm Password">
                                                                @if ($errors->has('password_confirmation'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                                </span>
                                                                @endif
                                                            </p>
                                                            <p class="et_pb_contact_field et_pb_contact_field_9 et_pb_contact_field_last" data-id="tags" data-type="input">
                                                                <label for="et_pb_contact_tags_0" class="et_pb_contact_form_label">Your Profile Tag</label>
                                                                {{-- <select id="et_pb_contact_tags_0" class="itemName form-control" style="width:500px;" name="itemName"></select> --}}
                                                                <select id="et_pb_contact_tags_0" class="itemName form-control" name="itemName[]" multiple="multiple" style="width:500px; padding:10px">

                                                                </select>
                                                                @if ($errors->has('itemName'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('itemName') }}</strong>
                                                                </span>
                                                                @endif
                                                            </p>
                                                            <p class="et_pb_contact_field et_pb_contact_field_10 et_pb_contact_field_last" data-id="field_10" data-type="checkbox">
                                                                <label for="et_pb_contact_field_10_0" class="et_pb_contact_form_label">Upload Your Last Academic Certificate</label>
                                                                <input class="et_pb_checkbox_handle" type="hidden" name="et_pb_contact_field_10_0" data-required_mark="required" data-field_type="checkbox" data-original_id="field_10">
                                                                <span class="et_pb_contact_field_options_wrapper">
                                                                    <span class="et_pb_contact_field_options_title" style="color: white;">Upload Your Last Academic Certificate</span>
                                                                    <span class="et_pb_contact_field_options_list">
                                                                        <span class="et_pb_contact_field_checkbox">
                                                                            <input type="file" required id="et_pb_contact_field_10_10_0" name="academic_certificate" class="input {{ $errors->has('academic_certificate') ? ' is-invalid' : '' }}" value="Upload" data-id="-1">

                                                                        </span>
                                                                    </span>
                                                                </span>

                                                            </p>
                                                            <input type="hidden" value="et_contact_proccess" name="et_pb_contactform_submit_0" />
                                                            <div class="et_contact_bottom_container">
                                                                @php
                                                                $num1 = rand(0,10);
                                                                $num2 = rand(10,50);
                                                                $sum = $num1 + $num2;
                                                                @endphp
                                                                <input type="hidden" value="{{$sum}}" name="sum">
                                                                <div class="et_pb_contact_right">
                                                                    <p class="clearfix">
                                                                        <span class="et_pb_contact_captcha_question">{{$num1}} + {{$num2}}</span> =
                                                                        <input type="text" size="2" class="input {{ $errors->has('sum') ? ' is-invalid' : '' }} et_pb_contact_captcha" data-first_digit="5" data-second_digit="3" value="" name="sum_confirmation" data-required_mark="required" autocomplete="disabled">
                                                                    </p>
                                                                </div> <!-- .et_pb_contact_right -->
                                                                @if ($errors->has('sum'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('sum') }}</strong>
                                                                </span>
                                                                @endif
                                                                @if ($errors->has('sum_confirmation'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('sum_confirmation') }}</strong>
                                                                </span>
                                                                @endif
                                                                <input type="submit" required name="et_builder_submit_button" class="et_pb_contact_submit et_pb_button" value="Submit">
                                                            </div>
                                                            <input type="hidden" id="_wpnonce-et-pb-contact-form-submitted-0" name="_wpnonce-et-pb-contact-form-submitted-0" value="41f5524915" />

                                                        </form>
                                                    </div> <!-- .et_pb_contact -->
                                                </div> <!-- .et_pb_contact_form_container -->

                                            </div> <!-- .et_pb_column -->
                                        </div> <!-- .et_pb_row -->
                                    </div> <!-- .et_pb_section -->
                                </div><!-- .et_builder_inner_content -->
                            </div><!-- .et-l -->
                        </div> <!-- .entry-content -->
                    </article> <!-- .et_pb_post -->
                </div> <!-- #main-content -->
                @include('footer')
            </div> <!-- #et-main-area -->
        </div><!-- #et-boc -->
    </div> <!-- #page-container -->

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

    <script>
        function setType(object) {
            if (object.value == 'Mentor') {
                document.getElementById("et_pb_contact_field_4_2_0").disabled = true;
                document.getElementById("et_pb_contact_tags_0").disabled = false;
            } else {
                document.getElementById("et_pb_contact_field_4_2_0").disabled = false;
                document.getElementById("et_pb_contact_tags_0").disabled = true;
            }
        }

    </script>
    <script type="text/javascript">
        $('.itemName').select2({
            placeholder: 'Select a Tag'
            , ajax: {
                url: "{{url('api/get-tags-for-register')}}"
                , dataType: 'json'
                , delay: 250
                , processResults: function(data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.tag
                                , id: item.id
                            }
                        })
                    };
                }
                , cache: true
            }
        });

    </script>
    <span class="et_pb_scroll_top et-pb-icon"></span>
</body>
</html>
