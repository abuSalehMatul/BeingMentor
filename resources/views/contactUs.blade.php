<div class="et_pb_section et_pb_section_7 et_pb_with_background et_section_regular" id="contact_us">
    <div class="et_pb_row et_pb_row_14">
        <div class="et_pb_column et_pb_column_4_4 et_pb_column_27  et_pb_css_mix_blend_mode_passthrough et-last-child">
            <div
                class="et_pb_module dsm_dual_heading dsm_dual_heading_4  et_pb_text_align_center et_pb_bg_layout_light">
                <h1> Contact Us </h1>
            </div>
            <form class="form" method="POST" action="{{route('contact.us')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" required>
                </div>
                <div class="form-goup">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-goup">
                    <label for="message">Your Message</label>
                    <textarea class="form-control" rows="5" id="message" name="message" required>
                    </textarea>
                </div>
                <hr>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary mb-5 p-10" value="SEND">
                </div>

            </form>
        </div>
    </div>

</div>
