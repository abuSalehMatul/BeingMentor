<template>
  
  <div
    class="et_pb_section et_pb_section_1 et_pb_section_parallax et_pb_with_background et_section_regular"
  >
    <div class="et_parallax_bg_wrap">
      <div
        class="et_parallax_bg"
        style="background-image: url(/wp-content/uploads/2020/04/background-2.png);"
      ></div>
    </div>
    <div class="et_pb_row et_pb_row_1">
      <div
        class="et_pb_column et_pb_column_4_4 et_pb_column_2 et_pb_css_mix_blend_mode_passthrough et-last-child"
      >
        <div
          class="et_pb_module dsm_dual_heading dsm_dual_heading_0 et_pb_text_align_center et_pb_bg_layout_light"
        >
          <div class="et_pb_module_inner">
            <h1 class="dsm-dual-heading-main et_pb_module_header">
              <span class="dsm-dual-heading-before">How</span>
              <span class="dsm-dual-heading-middle">WE</span>
              <span class="dsm-dual-heading-after">Work</span>
            </h1>
          </div>
        </div>
      </div>
      <!-- .et_pb_column -->
    </div>
    <!-- .et_pb_row -->
    <div class="et_pb_row et_pb_row_2">
      <div
        class="et_pb_column et_pb_column_1_3 et_pb_column_3 et_pb_css_mix_blend_mode_passthrough"
      >
        <div
          class="et_pb_module et_pb_blurb et_pb_blurb_0 et_animated et_pb_text_align_left et_pb_blurb_position_top et_pb_bg_layout_dark"
        >
          <div class="et_pb_blurb_content">
            <div class="et_pb_main_blurb_image">
              <span class="et_pb_image_wrap">
                <img
                  src="wp-content/uploads/2020/04/one.png"
                  alt
                  srcset="wp-content/uploads/2020/04/one.png 512w, wp-content/uploads/2020/04/one-300x300.png 300w, wp-content/uploads/2020/04/one-150x150.png 150w, wp-content/uploads/2020/04/one-480x480.png 480w"
                  sizes="(max-width: 512px) 100vw, 512px"
                  class="et-waypoint et_pb_animation_off"
                />
              </span>
            </div>
            <div class="et_pb_blurb_container">
              <h4 class="et_pb_module_header">
                <span>{{website.how_it_work_title1}}</span>
              </h4>
              <div
                class="et_pb_blurb_description"
              >{{website.how_it_work_description1}}</div>
            </div>
          </div>
          <!-- .et_pb_blurb_content -->
        </div>
        <!-- .et_pb_blurb -->
      </div>
      <!-- .et_pb_column -->
      <div
        class="et_pb_column et_pb_column_1_3 et_pb_column_4 et_pb_css_mix_blend_mode_passthrough"
      >
        <div
          class="et_pb_module et_pb_blurb et_pb_blurb_1 et_animated et_pb_text_align_left et_pb_blurb_position_top et_pb_bg_layout_dark"
        >
          <div class="et_pb_blurb_content">
            <div class="et_pb_main_blurb_image">
              <span class="et_pb_image_wrap">
                <img
                  src="wp-content/uploads/2020/04/two.png"
                  alt
                  srcset="wp-content/uploads/2020/04/two.png 512w, wp-content/uploads/2020/04/two-300x300.png 300w, wp-content/uploads/2020/04/two-150x150.png 150w, https://prototype.beingmentor.pk/wp-content/uploads/2020/04/two-480x480.png 480w"
                  sizes="(max-width: 512px) 100vw, 512px"
                  class="et-waypoint et_pb_animation_off"
                />
              </span>
            </div>
            <div class="et_pb_blurb_container">
              <h4 class="et_pb_module_header">
                <span>{{website.how_it_work_title2}}</span>
              </h4>
              <div
                class="et_pb_blurb_description"
              >{{website.how_it_work_description2}}</div>
            </div>
          </div>
          <!-- .et_pb_blurb_content -->
        </div>
        <!-- .et_pb_blurb -->
      </div>
      <!-- .et_pb_column -->
      <div
        class="et_pb_column et_pb_column_1_3 et_pb_column_5 et_pb_css_mix_blend_mode_passthrough et-last-child"
      >
        <div
          class="et_pb_module et_pb_blurb et_pb_blurb_2 et_animated et_pb_text_align_left et_pb_blurb_position_top et_pb_bg_layout_dark"
        >
          <div class="et_pb_blurb_content">
            <div class="et_pb_main_blurb_image">
              <span class="et_pb_image_wrap">
                <img
                  src="wp-content/uploads/2020/04/three.png"
                  alt
                  srcset="wp-content/uploads/2020/04/three.png 512w, wp-content/uploads/2020/04/three-300x300.png 300w, wp-content/uploads/2020/04/three-150x150.png 150w, wp-content/uploads/2020/04/three-480x480.png 480w"
                  sizes="(max-width: 512px) 100vw, 512px"
                  class="et-waypoint et_pb_animation_off"
                />
              </span>
            </div>
            <div class="et_pb_blurb_container">
              <h4 class="et_pb_module_header">
                <span>{{website.how_it_work_title3}}</span>
              </h4>
              <div
                class="et_pb_blurb_description"
              >{{website.how_it_work_description3}}</div>
            </div>
          </div>
          <!-- .et_pb_blurb_content -->
        </div>
        <!-- .et_pb_blurb -->
      </div>
      <!-- .et_pb_column -->
    </div>
    <!-- .et_pb_row -->
  </div>

  <!-- .et_pb_section -->
  
</template>

<script>
import client from "@/client";
export default {
  name: "how-we-work",
  props: ["website"],
  components: {},
  mounted() {
    
  },
  data() {
    return {};
  },
  methods: {
    formater(data) {
      return data;
    }
  }
};
</script>


