<div class="et_pb_section et_pb_section_7 et_pb_with_background et_section_regular contact_us">

    <div class="et_pb_row et_pb_row_14">
        <div class="et_pb_column et_pb_column_4_4 et_pb_column_27  et_pb_css_mix_blend_mode_passthrough et-last-child">
            <div class="et_pb_module dsm_dual_heading dsm_dual_heading_4  et_pb_text_align_center et_pb_bg_layout_light">
                <div class="et_pb_module_inner">
                    <h1 class="dsm-dual-heading-main et_pb_module_header"><span class="dsm-dual-heading-before">Contact</span><span class="dsm-dual-heading-middle"> US</span></h1>
                </div>
            </div>
            <div id="et_pb_contact_form_0" class="et_pb_with_border et_pb_module et_pb_contact_form_0  et_pb_recaptcha_enabled et_pb_contact_form_container clearfix  et_pb_text_align_center" data-form_unique_num="0">
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
