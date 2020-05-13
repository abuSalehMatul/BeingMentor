<template>
  <div>
    <footer class="et-l et-l--footer">
      <div class="et_builder_inner_content et_pb_gutters3">
        <div
          class="et_pb_section et_pb_section_0_tb_footer et_pb_with_background et_section_regular"
        >
          <div class="et_pb_row et_pb_row_0_tb_footer">
            <div
              class="et_pb_column et_pb_column_1_4 et_pb_column_0_tb_footer et_pb_css_mix_blend_mode_passthrough"
            >
              <div
                class="et_pb_module et_pb_text et_pb_text_0_tb_footer et_pb_text_align_center et_pb_bg_layout_light"
              >
                <div class="et_pb_text_inner">
                  <p>Explore</p>
                </div>
              </div>
              <!-- .et_pb_text -->
              <div
                class="et_pb_module et_pb_text et_pb_text_1_tb_footer et_pb_text_align_center et_pb_bg_layout_light"
              >
                <div class="et_pb_text_inner">
                  <p>
                    <i>
                      <u>
                        <span style="color: #ffffff;">
                          <a style="color: #ffffff;" href="/register">
                            Become a
                            Mentor
                          </a>
                        </span>
                      </u>
                    </i>
                    <br /><a href="/login" style="color: #ffffff;">Home</a>
                    <br />
                    <span></span><a :href="'/about-us'" style="color: #ffffff;">About Us </a>
                    <br /><a :href="'/mentor'" style="color: #ffffff;">Mentors</a>
                    <br />
                    <a style="color: #ffffff;" :href="'/success-story'">Success Stories</a>
                  </p>

                </div>
              </div>
              <!-- .et_pb_text -->
            </div>
            <!-- .et_pb_column -->
            <div
              class="et_pb_column et_pb_column_1_4 et_pb_column_1_tb_footer et_pb_css_mix_blend_mode_passthrough"
            >
              <div
                class="et_pb_module et_pb_text et_pb_text_2_tb_footer et_pb_text_align_center et_pb_bg_layout_light"
              >
                <div class="et_pb_text_inner">
                  <p>Help &#038; Support</p>
                </div>
              </div>
              <!-- .et_pb_text -->
              <div
                class="et_pb_module et_pb_text et_pb_text_3_tb_footer et_pb_text_align_center et_pb_bg_layout_light"
              >
                <div class="et_pb_text_inner">
                  <p>
                    <i>
                      <u>
                        <span style="color: #ffffff;"></span>
                      </u>
                    </i>Help Center
                    <br /><a :href="'/contact'" style="color:#ffffff"> Contact Us </a>
                    <br /> <a href="#how-it-works" style="color:#ffffff">How It works </a>
                    <br /><a :href="'/term-policy'" style="color:#ffffff">Terms &#038; Policy </a>
                    <span style="color: #ffffff;"></span>
                  </p>
                  <p>&nbsp;</p>
                </div>
              </div>
              <!-- .et_pb_text -->
            </div>
            <!-- .et_pb_column -->
            <div
              class="et_pb_column et_pb_column_1_4 et_pb_column_2_tb_footer et_pb_css_mix_blend_mode_passthrough"
            >
              <div
                class="et_pb_module et_pb_text et_pb_text_4_tb_footer et_pb_text_align_center et_pb_bg_layout_light"
              >
                <div class="et_pb_text_inner">
                  <p>Contact Us</p>
                </div>
              </div>
              <!-- .et_pb_text -->
              <div
                class="et_pb_module et_pb_text et_pb_text_5_tb_footer et_pb_text_align_center et_pb_bg_layout_light"
              >
                <div class="et_pb_text_inner">
                  <p>
                    <span style="color: #ffffff;"></span>
                    <strong>
                      Give us a
                      call:
                    </strong>
                    <br />
                    <span style="color: #ffffff;">
                      <a style="color: #ffffff;" href="#">
                        <span>
                          {{website.mobile}}, {{website.mobile1}}
                        </span>
                      </a>
                    </span>
                    <br />
                    <span style="color: #ffffff;"></span>
                    <strong>Email Us:</strong>
                    <br />
                    <span>{{website.email}}</span>
                    <br />
                    <span style="color: #ffffff;"></span>
                  </p>
                </div>
              </div>
              <!-- .et_pb_text -->
            </div>
            <!-- .et_pb_column -->
            <div
              class="et_pb_column et_pb_column_1_4 et_pb_column_3_tb_footer et_pb_css_mix_blend_mode_passthrough et-last-child"
            >
              <div
                class="et_pb_module et_pb_text et_pb_text_6_tb_footer et_pb_text_align_center et_pb_bg_layout_light"
              >
                <div class="et_pb_text_inner">
                  <img
                    :src="'/images/beingmentor.PNG'"
                    width="300"
                    height="76"
                    alt
                    class="wp-image-145 alignnone size-medium"
                  />
                </div>
              </div>
              <!-- .et_pb_text -->
              <div
                class="et_pb_module et_pb_text et_pb_text_7_tb_footer et_pb_text_align_center et_pb_bg_layout_dark"
              >
                <div class="et_pb_text_inner">
                  <p v-html="website.footer_quote">

                  </p>
                </div>
              </div>
              <!-- .et_pb_text -->
            </div>
          </div>
          <!-- .et_pb_row -->
          <div class="et_pb_row et_pb_row_1_tb_footer">
            <div
              class="et_pb_column et_pb_column_4_4 et_pb_column_4_tb_footer et_pb_css_mix_blend_mode_passthrough et-last-child"
            >
              <div
                class="et_pb_module et_pb_divider et_pb_divider_0_tb_footer et_pb_divider_position_ et_pb_space"
              >
                <div class="et_pb_divider_internal"></div>
              </div>
              <div
                class="et_pb_module et_pb_text et_pb_text_8_tb_footer et_pb_text_align_center et_pb_bg_layout_light"
              >
                <div class="et_pb_text_inner">
                  Copyright ©&#xfe0f;2020 BeingMentor.pk All Right Reserved by
                  Shmael
                </div>
              </div>
              <!-- .et_pb_text -->
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
import client from "@/client";
export default {
  name: "footer-section",
  components: {},
  props: ['website'],
  data() {
    return {};
  }
};
</script>

