<template>
  <div>
    <div
      class="et_pb_section et_pb_section_3   et_section_regular section_has_divider et_pb_bottom_divider"
    >
      <div class="et_pb_row et_pb_row_10 ">
        <div
          class="et_pb_column et_pb_column_1_4 et_pb_column_18 et_pb_css_mix_blend_mode_passthrough"
        >
          <div
            class="et_pb_module   et_pb_text_align_center et_pb_bg_layout_dark et_pb_with_title"
            data-number-value="200"
            data-number-separator
          >
            <div class="percent">
              <p>
                <span class="percent-value">77</span>
              </p>
            </div>
            <h3 class="title">Mentors</h3>
          </div>
          <!-- .et_pb_number_counter -->
        </div>
        <!-- .et_pb_column -->
        <div
          class="et_pb_column et_pb_column_1_4 et_pb_column_19 et_pb_css_mix_blend_mode_passthrough"
        >
          <div
            class="et_pb_module   et_pb_text_align_center et_pb_bg_layout_dark et_pb_with_title"
            data-number-value="54"
            data-number-separator
          >
            <div class="percent">
              <p>
                <span class="percent-value"></span>
                <span class="percent-sign"></span>
              </p>
            </div>
            <h3 class="title">Problems</h3>
          </div>
          <!-- .et_pb_number_counter -->
        </div>
        <!-- .et_pb_column -->
        <div
          class="et_pb_column et_pb_column_1_4 et_pb_column_20 et_pb_css_mix_blend_mode_passthrough"
        >
          <div
            class="et_pb_module    et_pb_text_align_center et_pb_bg_layout_dark et_pb_with_title"
            data-number-value="12"
            data-number-separator
          >
            <div class="percent">
              <p>
                <span class="percent-value"></span>
                <span class="percent-sign"></span>
              </p>
            </div>
            <h3 class="title">Problem Solved</h3>
          </div>
          <!-- .et_pb_number_counter -->
        </div>
        <!-- .et_pb_column -->
        <div
          class="et_pb_column et_pb_column_1_4 et_pb_column_21 et_pb_css_mix_blend_mode_passthrough et-last-child"
        >
          <div
            class="et_pb_module    et_pb_text_align_center et_pb_bg_layout_dark et_pb_with_title"
            data-number-value="906"
            data-number-separator
          >
            <div class="percent">
              <p>
                <span class="percent-value"></span>
                <span class="percent-sign"></span>
              </p>
            </div>
            <h3 class="title">Online Users</h3>
          </div>
          <!-- .et_pb_number_counter -->
        </div>
      </div>
     
    </div>
  </div>
</template>

<script>
import client from "@/client";
export default {
  name: "statistic",
  components: {},
  data() {
    return {};
  },
  mounted(){
      this.getStatistics();
  },
  methods: {
      getStatistics(){
          client.get(window.location.origin + '/api/statistics').then(response => {
        
      });
      }
  }
};
</script>

