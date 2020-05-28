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
                                            <a class="btn btn-sm btn-info" href="{{url('add-success')}}"> Add My Success Story </a>
                                            <success-story user="front"></success-story>
                                            <div class="et_pb_bottom_inside_divider et-no-transition"></div>
                                        </div> <!-- .et_pb_section -->
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('footer')



