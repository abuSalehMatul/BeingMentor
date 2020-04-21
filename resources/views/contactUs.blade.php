<div class="et_pb_section et_pb_section_7 et_pb_with_background et_section_regular">
    <div class="et_pb_row et_pb_row_14">
        <div class="et_pb_column et_pb_column_4_4 et_pb_column_27  et_pb_css_mix_blend_mode_passthrough et-last-child">
            <div
                class="et_pb_module dsm_dual_heading dsm_dual_heading_4  et_pb_text_align_center et_pb_bg_layout_light">
                <h1> Contact Us </h1>
            </div>
            <form class="form" method="post" action="https://www.beingmentor.pk/">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="form-goup">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="name" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-goup">
                    <label for="name">Your Message</label>
                    <textarea class="form-control" rows="5">
                    </textarea>
                </div>
                <hr>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mb-5 p-10">Send</button>
                </div>

            </form>
        </div>
    </div>

</div>
