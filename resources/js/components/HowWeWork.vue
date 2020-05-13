<template>
  <div id="how-it-works">
    <div
      class="et_pb_section et_pb_section_1 et_pb_section_parallax et_pb_with_background et_section_regular"
    >
      <div class="et_parallax_bg_wrap">
        <div class="et_parallax_bg" style="background-image: url('images/background-2.png');"></div>
      </div>
      <div class="et_pb_row et_pb_row_1">
        <div
          class="et_pb_column et_pb_column_4_4 et_pb_column_2 et_pb_css_mix_blend_mode_passthrough et-last-child"
        >
          <div
            class="et_pb_module dsm_dual_heading dsm_dual_heading_0 et_pb_text_align_center et_pb_bg_layout_light"
          >
            <div class="et_pb_module_inner">
              <h1 class="dsm-dual-heading-main et_pb_module_header how-we-work">
                <span>How</span>
                <span style="color:#0c71c3">WE</span>
                <span>Work?</span>
              </h1>
            </div>
          </div>
        </div>
      </div>
      <div class="et_pb_row et_pb_row_2">
        <div
          style=" background-color: #1fb6ea;"
          class="et_pb_column et_pb_column_1_3 et_pb_column_3 et_pb_css_mix_blend_mode_passthrough first-div"
        >
          <div>
            <img :src="website.how_it_work_image_one" class="howToPic" />
          </div>
          <div>
            <h4 class="howToTitle">
              <span>{{website.how_it_work_title1}}</span>
            </h4>
            <p class="howToPeragraph" v-html="formater(website.how_it_work_description1)"></p>
          </div>
        </div>
        <!-- .et_pb_column -->
        <div
          style="background-color: #3644AF;"
          class="et_pb_column et_pb_column_1_3 et_pb_column_4 et_pb_css_mix_blend_mode_passthrough first-div"
        >
          <div>
            <img :src="website.how_it_work_image_two" class="howToPic" />
          </div>
          <div>
            <h4 class="howToTitle">
              <span>{{website.how_it_work_title2}}</span>
            </h4>
            <p class="howToPeragraph" v-html="formater(website.how_it_work_description2)"></p>
          </div>
        </div>

        <div
          style="background-color: #2A3443;"
          class="et_pb_column et_pb_column_1_3 et_pb_column_5 et_pb_css_mix_blend_mode_passthrough et-last-child first-div"
        >
          <div>
            <img :src="website.how_it_work_image_three" class="howToPic" />
          </div>
          <div>
            <h4 class="howToTitle">
              <span>{{website.how_it_work_title3}}</span>
            </h4>
            <p class="howToPeragraph" v-html="formater(website.how_it_work_description3)"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import client from "@/client";
export default {
  name: "how-we-work",
  props: ["website"],
  components: {},
  mounted() {
    console.log(this.website);
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
<style scoped>
.first-div {
  box-shadow: 2px 2px 3px dimgrey;
  border-radius: 5px 5px 5px 5px;
  overflow: hidden;
  padding-top: 60px !important;
  padding-right: 30px !important;
  padding-bottom: 60px !important;
  padding-left: 40px !important;
}
.how-we-work {
  font-family: Open Sans, Arial, sans-serif;
  font-style: normal;
  line-height: 97px;
  font-size: 97px !important;
  font-weight: 800 !important;
  letter-spacing: -4px !important;
}
.how-we-work span {
  border-style: solid;
  display: inline-block;
  vertical-align: middle;
  white-space: pre-wrap;
}
</style>

