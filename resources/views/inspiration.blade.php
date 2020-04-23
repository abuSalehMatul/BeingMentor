<div
    class="et_pb_section et_pb_section_5 et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider et_pb_top_divider">
    <div class="et_pb_row et_pb_row_12">
        <div class="et_pb_column et_pb_column_4_4 et_pb_column_25  et_pb_css_mix_blend_mode_passthrough et-last-child">
            <div
                class="et_pb_module dsm_dual_heading    et_pb_text_align_center et_pb_bg_layout_dark">
                <div class="et_pb_module_inner">
                    <h1 class="dsm-dual-heading-main et_pb_module_header">
                    <span class="dsm-dual-heading-before">
                        {{$website->quote_title1}}
                    </span>
                    </h1>
                </div>
            </div>
            <div class="et_pb_module et_pb_divider et_pb_divider_1 et_pb_divider_position_ et_pb_space">
                <div class="et_pb_divider_internal"></div>
            </div>
            <div class="et_pb_module et_pb_text et_pb_text_5  et_pb_text_align_center et_pb_bg_layout_dark">
                <div class="et_pb_text_inner">
                    @php
                        print_r($website->quote_description1);
                    @endphp
                </div>
            </div>
            <!-- .et_pb_text -->
        </div>
    </div>

</div>
<div
    class="et_pb_section et_pb_section_6 et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider et_pb_top_divider">
    <div class="et_pb_row et_pb_row_13">
        <div class="et_pb_column et_pb_column_4_4 et_pb_column_26  et_pb_css_mix_blend_mode_passthrough et-last-child">
            <div class="et_pb_module dsm_mask_text dsm_mask_text_0 ">
                <div class="et_pb_module_inner">
                    <h2 class="dsm-mask-text et_pb_module_header">{{$website->quote_title2}}
                    </h2>
                </div>
            </div>
            <div class="et_pb_module et_pb_text et_pb_text_6   et_pb_text_align_center et_pb_bg_layout_dark">
                <div class="et_pb_text_inner">
                    @php
                        print_r($website->quote_description2);
                    @endphp
                </div>
            </div>
            <!-- .et_pb_text -->
            <div class="et_pb_module dsm_button dsm_button_1  et_pb_bg_layout_dark">
                <div class="et_pb_module_inner">
                    <div
                        class="et_pb_button_module_wrapper dsm_button_1_wrapper et_pb_button_alignment_center et_pb_module">
                        <a class="et_pb_button et_pb_button_one et_pb_bg_layout_dark dsm-none" href="#"
                            data-dsm-lightbox-id="dsm_button_one_lightbox dsm_button_1">Read
                            More</a><a class="et_pb_button et_pb_button_two et_pb_bg_layout_dark dsm-none" href="{{route('register')}}"
                            data-dsm-lightbox-id="dsm_button_two_lightbox dsm_button_1">Sign
                            Up Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="et_pb_bottom_inside_divider et-no-transition"></div>
</div>
