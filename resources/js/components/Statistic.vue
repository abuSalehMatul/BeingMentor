<template>
  <div>
     <div
      class="et_pb_section et_pb_section_3 et_section_regular section_has_divider et_pb_bottom_divider"
    >
      <div class="et_pb_row et_pb_row_10">
        <div
          class="et_pb_column et_pb_column_1_4 et_pb_column_18 et_pb_css_mix_blend_mode_passthrough"
        >
          <div
            class="et_pb_module et_pb_text_align_center et_pb_bg_layout_dark et_pb_with_title"
            data-number-value="200"
            data-number-separator
          >
            <p>
              <span class="percent-value number">{{mentors}}</span>
              <span class="title">Mentors</span>
            </p>
          </div>
          <!-- .et_pb_number_counter -->
        </div>
        <!-- .et_pb_column -->
        <div
          class="et_pb_column et_pb_column_1_4 et_pb_column_19 et_pb_css_mix_blend_mode_passthrough"
        >
          <div
            class="et_pb_module et_pb_text_align_center et_pb_bg_layout_dark et_pb_with_title"
            data-number-value="54"
            data-number-separator
          >
            <p>
              <span class="percent-value number">{{problems}}</span>
              <span class="title">Problems</span>
            </p>
          </div>
          <!-- .et_pb_number_counter -->
        </div>
        <!-- .et_pb_column -->
        <div
          class="et_pb_column et_pb_column_1_4 et_pb_column_20 et_pb_css_mix_blend_mode_passthrough"
        >
          <div
            class="et_pb_module et_pb_text_align_center et_pb_bg_layout_dark et_pb_with_title"
            data-number-value="12"
            data-number-separator
          >
            <p>
              <span class="percent-value number">{{solves}}</span>
              <span class="title">Problem Solved</span>
            </p>
          </div>
          <!-- .et_pb_number_counter -->
        </div>
        <!-- .et_pb_column -->
        <div
          class="et_pb_column et_pb_column_1_4 et_pb_column_21 et_pb_css_mix_blend_mode_passthrough et-last-child"
        >
          <div
            class="et_pb_module et_pb_text_align_center et_pb_bg_layout_dark et_pb_with_title"
            data-number-value="906"
            data-number-separator
          >
            <p>
              <span class="percent-value number number">{{onlines}}</span>
              <span class="title">Online Users</span>
            </p>
          </div>
          <!-- .et_pb_number_counter -->
        </div>
      </div>
    </div>
    <!-- .et_pb_section -->
  </div>
</template>

<script>
import client from "@/client";
export default {
  name: "statistic",
  components: {},
  data() {
    return {
      mentors: "",
      problems: "",
      solves: "",
      onlines: ""
    };
  },
  mounted() {
    this.getStatistics();
  },
  methods: {
    getStatistics() {
      client.get(window.location.origin + "/api/statistics").then(response => {
        this.mentors = response.data.mentors;
        this.onlines = response.data.online;
        this.solves = response.data.solved;
        this.problems = response.data.problems;
      });
    }
  }
};
</script>
<style scoped>
.number {
  font-size: 60px;
  display: block;
  line-height: 90px;
  font-style: normal;
  color: #ffffff !important;
  font-weight: 700;
  font-family: "Montserrat", Helvetica, Arial, Lucida, sans-serif;
}
.title {
  font-size: 18px;
  line-height: 18px;
  font-style: normal;
  font-weight: 500;
  font-family: "Montserrat", Helvetica, Arial, Lucida, sans-serif;
  text-transform: uppercase;
  color: #ffffff !important;
}
</style>

