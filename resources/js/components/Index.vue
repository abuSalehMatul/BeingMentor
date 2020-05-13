<template>
  <div>
    <div
      class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider"
    >
      <div class="et_pb_row et_pb_row_0">
        <div
          class="et_pb_column et_pb_column_1_2 et_pb_column_0 et_pb_css_mix_blend_mode_passthrough"
        >
          <div
            class="et_pb_module et_pb_text et_pb_text_0 et_pb_text_align_left et_pb_bg_layout_light"
          >
            <div class="et_pb_text_inner index-title">Being Mentors Powers Academic Progress.</div>
          </div>
          <!-- .et_pb_text -->
          <div
            class="et_pb_module et_pb_text et_pb_text_1 et_pb_text_align_left et_pb_bg_layout_light"
          >
            <div class="title-des">
              <h5 class="animated infinite bounce delay-2s index-des">
                 {{website.index_description}}
              </h5>
            </div>
          </div>
          <!-- .et_pb_text -->
        </div>
        <!-- .et_pb_column -->
        <div
          class="et_pb_column et_pb_column_1_2 et_pb_column_1 et_pb_css_mix_blend_mode_passthrough et-last-child"
        >
          <div class="et_pb_module dsm_flipbox dsm_flipbox_0">
            <div class="et_pb_module_inner" @click="updateTransition()">
              <div class="dsm-flipbox dsm-flipbox-slide-left">
                <div
                  class="et_pb_module dsm_flipbox_child dsm_flipbox_child_0 et_pb_bg_layout_light dsm_flipbox_icon_position_top"
                >
                  <div class="et_pb_module_inner">
                    <div class="dsm_flipbox_wrapper et_pb_text_align_center index-qoute">
                      <h4 class="dsm-title et_pb_module_header ">Academic Mentorship</h4>
                      <span class="dsm-subtitle">
                        For students &
                        coaching
                      </span>
                    </div>
                  </div>
                </div>
                <div style="cursor:pointer"
                  class="et_pb_module dsm_flipbox_child dsm_flipbox_child_1 et_pb_bg_layout_light dsm_flipbox_icon_position_top"
                >
                  <div class="et_pb_module_inner">
                    <div class="dsm_flipbox_wrapper et_pb_text_align_left">
                      <span class="badge badge-info">Click for more details</span>
                      <div class="dsm-content">
                        We provide opportunities, resources, and tools for everyone
                        related to the education and training field. We assist potential leaders and
                        researchers in getting expertise in this field. Being mentors facilitates
                        everyone
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="parent">
              <div class="box1" style="display:none">
                  <i class="text-danger float-right" @click="updateTransition()">&#967; </i>
                <ul>
                  <li>
                    <i>&#10148; Mentors and coaches</i>
                  </li>
                  <li>
                    <i>&#10148; Students and learners</i>
                  </li>
                  <li>
                    <i>&#10148; Private and public schools</i>
                  </li>
                  <li>
                    <i>&#10148; Nonprofit organization</i>
                  </li>
                  <li>
                    <i>&#10148; Academic support institutions</i>
                  </li>
                  <li>
                    <i>&#10148; Tutoring companies</i>
                  </li>
                  <li>
                    <i>&#10148; Knowledge seekers</i>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="et_pb_module dsm_flipbox dsm_flipbox_1">
            <div class="et_pb_module_inner">
              <div class="dsm-flipbox dsm-flipbox-slide-left">
                <div
                  class="et_pb_module dsm_flipbox_child dsm_flipbox_child_2 et_pb_bg_layout_light dsm_flipbox_icon_position_top"
                >
                  <div class="et_pb_module_inner">
                    <div class="dsm_flipbox_wrapper et_pb_text_align_center index-qoute">
                      <h4 class="dsm-title et_pb_module_header">Professionals</h4>
                      <span class="dsm-subtitle">
                        For students &
                        coaching
                      </span>
                    </div>
                  </div>
                </div>
                <div style="cursor:pointer"
                  class="et_pb_module dsm_flipbox_child dsm_flipbox_child_3 et_pb_bg_layout_light dsm_flipbox_icon_position_top"
                >
                  <div class="et_pb_module_inner" @click="updateTransition1()">
                    <div class="dsm_flipbox_wrapper et_pb_text_align_left">
                      <div class="dsm-content">
                        If you are a professional and educated trainer, you may
                        find here the resources to interact with your students and provide assistance
                        for their daily assignments, school tests, and educational process. Just
                        register on our website as a mentor and find your potential mentees. Whether you
                        have an MBA degree or engineering expertise, you will find here opportunities to
                        be hired. You may help the trainees in
                        <span
                          class="badge badge-info"
                        >Click for more details</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="parent">
              <div class="box2" style="display:none">
                   <i class="text-danger float-right" @click="updateTransition1()">&#967; </i>
                <ul>
                  <li>
                    <i>&#10148; Routine academic assignments</i>
                  </li>
                  <li>
                    <i>&#10148; Solving the exercises</i>
                  </li>
                  <li>
                    <i>&#10148; Writing research papers and thesis</i>
                  </li>
                  <li>
                    <i>&#10148; Extensive research</i>
                  </li>
                  <li>
                    <i>&#10148; Preparation for admission tests</i>
                  </li>
                  <li>
                    <i>&#10148; Teaching textbooks and syllabus completion</i>
                  </li>
                  <li>
                    <i>&#10148; Developing curriculum for private education entities</i>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import client from "@/client";
export default {
  name: "index",
  components: {},
  data() {
    return {};
  },
  props: ['website'],
  mounted() {

  },
  methods: {
    updateTransition() {
      var el = document.querySelector("div.box1");

      if (el) {
        el.className = "box";
        el.style.display = "block";
      } else {
        el = document.querySelector("div.box");
        el.className = "box1";
        let self = this;
        setTimeout(function() {
          self.hideBox();
        }, 1000);
      }

      return el;
    },
    updateTransition1() {
      var el = document.querySelector("div.box2");

      if (el) {
        el.className = "box3";
        el.style.display = "block";
      } else {
        el = document.querySelector("div.box3");
        el.className = "box2";
        let self = this;
        setTimeout(function() {
          self.hideBox1();
        }, 1000);
      }

      return el;
    },
    hideBox() {
      let el = document.querySelector("div.box1");
      el.style.display = "none";
    },
    hideBox1() {
      let el = document.querySelector("div.box2");
      el.style.display = "none";
    }
  }
};
</script>
<style scoped>
.index-title{
  font-family: Open Sans, Arial, sans-serif;
  line-height: 51px;
  font-size: 39px;
  color: #ffffff;
}
.index-des{
  font-family: Open Sans, Arial, sans-serif;
  line-height: 30px;
  font-size: 23px;
  color: #ffffff;
}
.index-qoute{
   font-family: Open Sans, Arial, sans-serif;
   color: #ffffff;
}
.index-qoute .dsm-content{
  font-size: 14px;
  font-weight: 600;
  font-style: normal;
  line-height: 0;
}
</style>

