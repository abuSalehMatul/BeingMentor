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
                                        <div class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider">
                                            @include('index')
                                            <div class="et_pb_bottom_inside_divider et-no-transition"></div>
                                        </div> <!-- .et_pb_section -->
                                            @include('howWeWork')
                                            @include('mentorInfo')
                                            @include('statistic')
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
                                                            <p style="text-align: left;">
                                                                {{$website->quote_description1}}
                                                            </p>
                                                        </div>
                                                    </div> <!-- .et_pb_text -->
                                                </div> <!-- .et_pb_column -->
                                                <div class="et_pb_column et_pb_column_1_3 et_pb_column_23  et_pb_css_mix_blend_mode_passthrough">
                                                    <div class="et_pb_module dsm_flipbox dsm_flipbox_2">
                                                        <div class="et_pb_module_inner">
                                                            <div class="dsm-flipbox dsm-flipbox-effect-right">
                                                                <div class="et_pb_module dsm_flipbox_child dsm_flipbox_child_4 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">
                                                                    <div class="et_pb_module_inner">
                                                                        <div class="dsm_flipbox_child_image"><span class="dsm_flipbox_child_image_wrap"><img src="{{asset('images/chat-icon.png')}}" alt="" /></span></div>
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
                                                                        <div class="dsm_flipbox_child_image"><span class="dsm_flipbox_child_image_wrap"><img src="{{asset('images/calls-icon.png')}}" alt="" /></span></div>
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
                                                </div> <!-- .et_pb_column -->
                                                <div class="et_pb_column et_pb_column_1_3 et_pb_column_24  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                                    <div class="et_pb_module dsm_flipbox dsm_flipbox_4">

                                                        <div class="et_pb_module_inner">
                                                            <div class="dsm-flipbox dsm-flipbox-effect-right">
                                                                <div class="et_pb_module dsm_flipbox_child dsm_flipbox_child_8 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">
                                                                    <div class="et_pb_module_inner">
                                                                        <div class="dsm_flipbox_child_image"><span class="dsm_flipbox_child_image_wrap">
                                                                            <img src="{{asset('images/goals-icon.png')}}" alt="" /></span>
                                                                        </div>
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
                                                                        <div class="dsm_flipbox_child_image"><span class="dsm_flipbox_child_image_wrap">
                                                                            <img src="{{asset('images/code-icon.png')}}" alt="" /></span></div>
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
                                                </div> <!-- .et_pb_column -->
                                            </div> <!-- .et_pb_row -->

                                        </div> <!-- .et_pb_section -->
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
                                                        <div class="et_pb_text_inner">
                                                            {{$website->why_us_description}}
                                                        </div>
                                                    </div> <!-- .et_pb_text -->
                                                </div> <!-- .et_pb_column -->
                                            </div> <!-- .et_pb_row -->
                                            <div class="et_pb_bottom_inside_divider et-no-transition"></div>
                                        </div> <!-- .et_pb_section -->
                                        <div class="et_pb_section et_pb_section_6 et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider et_pb_top_divider">
                                            <div class="et_pb_row et_pb_row_13">
                                                <div class="et_pb_column et_pb_column_4_4 et_pb_column_26  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                                    <div class="et_pb_module dsm_mask_text dsm_mask_text_0 et_animated">
                                                        <div class="et_pb_module_inner">
                                                            <h2 class="dsm-mask-text et_pb_module_header">Become A Mentor</h2>
                                                        </div>
                                                    </div>
                                                    <div class="et_pb_module et_pb_text et_pb_text_6 et_animated  et_pb_text_align_center et_pb_bg_layout_dark">
                                                        <div class="et_pb_text_inner">
                                                            {{$website->quote_description2}}
                                                        </div>
                                                    </div> <!-- .et_pb_text -->
                                                    <div class="et_pb_module dsm_button dsm_button_1 et_animated et_pb_bg_layout_dark">
                                                        <div class="et_pb_module_inner">
                                                            <div class="et_pb_button_module_wrapper dsm_button_1_wrapper et_pb_button_alignment_center et_pb_module">
                                                                <a class="et_pb_button et_pb_button_one et_pb_bg_layout_dark dsm-none" href="#" data-dsm-lightbox-id="dsm_button_one_lightbox dsm_button_1">Read More</a>
                                                                <a class="et_pb_button et_pb_button_two et_pb_bg_layout_dark dsm-none" href="{{url('/register')}}" data-dsm-lightbox-id="dsm_button_two_lightbox dsm_button_1">Sign Up Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- .et_pb_column -->
                                            </div> <!-- .et_pb_row -->
                                            <div class="et_pb_bottom_inside_divider et-no-transition"></div>
                                        </div> <!-- .et_pb_section -->
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
                                                            <form class="et_pb_contact_form clearfix" method="POST" action="{{route('contact.us')}}">
                                                                <p class="et_pb_contact_field et_pb_contact_field_0 et_pb_contact_field_half" data-id="name" data-type="input">
                                                                    @csrf
                                                                    <label for="et_pb_contact_name_0" class="et_pb_contact_form_label">Name</label>
                                                                    <input type="text" id="et_pb_contact_name_0" class="input" value="" name="name" data-required_mark="required" data-field_type="input" data-original_id="name" placeholder="Name" required>
                                                                </p>
                                                                <p class="et_pb_contact_field et_pb_contact_field_1 et_pb_contact_field_half et_pb_contact_field_last" data-id="email" data-type="email">
                                                                    <label for="et_pb_contact_email_0" class="et_pb_contact_form_label">Email Address</label>
                                                                    <input type="text" id="et_pb_contact_email_0" class="input" value="" name="email" data-required_mark="required" data-field_type="email" data-original_id="email" placeholder="Email Address" required>
                                                                </p>
                                                                <p class="et_pb_contact_field et_pb_contact_field_2 et_pb_contact_field_last" data-id="message" data-type="text">

                                                                    <label for="et_pb_contact_message_0" class="et_pb_contact_form_label">Message</label>
                                                                    <textarea name="message" id="et_pb_contact_message_0" class="et_pb_contact_message input" data-required_mark="required" data-field_type="text" data-original_id="message" placeholder="Message" required></textarea>
                                                                </p>
                                                                <input type="hidden" value="et_contact_proccess" name="et_pb_contactform_submit_0" />
                                                                <div class="et_contact_bottom_container">

                                                                    <input type="submit"  class="et_pb_contact_submit et_pb_button" value="Submit">
                                                                </div>
                                                                
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
        @yield('route')

    </div>
</body>

</html>
