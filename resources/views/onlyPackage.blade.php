<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    @include('head')
</head>
<body class="home page-template-default page page-id-9 et-tb-has-template et-tb-has-footer et_pb_button_helper_class et_transparent_nav et_fixed_nav et_show_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_left et_cover_background et_pb_gutter windows et_pb_gutters3 et_pb_pagebuilder_layout et_smooth_scroll et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css">
    <div>
        <div id="page-container">
            <div id="et-boc" class="et-boc">
                @include('layouts.topbar')
                <div id="et-main-area">
                    <div id="main-content">
                        <article id="post-9" class="post-9 page type-page status-publish hentry">
                            <div class="entry-content" id="app">
                                <div class="et-l et-l--post">

                                    <div class="et_builder_inner_content et_pb_gutters3">
                                        @php
                                        $message = Session::get('package-message');
                                        @endphp
                                        @if($message)
                                        <div class="card-title">
                                            <h3 class="text-center text-danger"> {{$message}} </h3>
                                        </div>
                                        @endif
                                        @include('packages')
                                    </div><!-- .et_builder_inner_content -->
                                </div><!-- .et-l -->
                            </div> <!-- .entry-content -->
                        </article> <!-- .et_pb_post -->
                    </div> <!-- #main-content -->

                    @include('footer')
                </div> <!-- #et-main-area -->
            </div><!-- #et-boc -->
        </div> <!-- #page-container -->

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
                "ajaxurl": "https:\/\/prototype.beingmentor.pk\/wp-admin\/admin-ajax.php"
                , "images_uri": "https:\/\/prototype.beingmentor.pk\/wp-content\/themes\/Divi\/images"
                , "builder_images_uri": "https:\/\/prototype.beingmentor.pk\/wp-content\/themes\/Divi\/includes\/builder\/images"
                , "et_frontend_nonce": "f49b107184"
                , "subscription_failed": "Please, check the fields below to make sure you entered the correct information."
                , "et_ab_log_nonce": "ab0da289ff"
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
        <script type='text/javascript' src="{{asset('wp-content/themes/Divi/js/custom.unifiedc1f9.js?ver=4.4.2')}}"></script>
        <script type='text/javascript' src="{{asset('wp-content/plugins/supreme-modules-pro-for-divi/scripts/frontend-bundle.min91ac.js?ver=2.6.8')}}"></script>
        <script type='text/javascript' src="{{asset('wp-content/themes/Divi/core/admin/js/commonc1f9.js?ver=4.4.2')}}"></script>
        <script type='text/javascript' src="{{asset('wp-includes/js/wp-embed.minc225.js?ver=5.4.1')}}"></script>
        <span class="et_pb_scroll_top et-pb-icon"></span>


    </div>
</body>

</html>
