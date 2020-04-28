<template>
  <div>
    <div class="et_pb_section et_pb_section_2 et_section_regular">
      <div class="et_pb_row et_pb_row_3">
        <div
          class="et_pb_column et_pb_column_4_4 et_pb_column_6 et_pb_css_mix_blend_mode_passthrough et-last-child"
        >
          <div
            class="et_pb_module et_pb_text et_pb_text_2 et_pb_text_align_center et_pb_bg_layout_light"
          >
            <div class="et_pb_text_inner">1-On-1 Information Mentors</div>
          </div>
          <!-- .et_pb_text -->
          <div
            class="et_pb_module et_pb_search et_pb_search_0 et_pb_text_align_center et_pb_bg_layout_light"
          >
            <form class="et_pb_searchform">
              <div>
                <label class="screen-reader-text">
                  Search
                  for:
                </label>
                <input
                  type="text"
                  @keyup="mentorFilter"
                  v-model="searchKey"
                  placeholder="Search Your Mentor Now"
                  class="et_pb_s"
                  style="color:black"
                />
                <input type="submit" value="Search" class="et_pb_searchsubmit" />
              </div>
            </form>
            <div v-if="showMentor">
              <table class="table card">
                <tbody>
                  <tr v-for="mentor in mentors">
                    <td>
                      <img
                        :src="mentor.user.profile_image"
                        class="img-fluid img-thumbnail rounded mx-auto d-block"
                      />
                    </td>

                    <td>{{mentor.user.first_name}}</td>
                    <td>{{mentor.user.last_name}}</td>
                    <td>
                      <i class="fa fa-star">{{mentor.rating}}</i>
                    </td>
                    <td>{{mentor.title}}</td>
                    <td>
                      <i
                        v-for="tag in mentor.tags"
                        class="badge badge-info text-2xl"
                        style="color:white"
                      >{{tag}}</i>
                    </td>

                    <td>
                      <p
                        style="height: 70px; transition: height 300ms; overflow:hidden;color:skyblue"
                        @click="displayMore(mentor.id)"
                        :id="mentor.id"
                      >{{mentor.description}}</p>
                    </td>
                    <td>
                      <button
                        class="btn btn-sm btn-success"
                        @click="connect(mentor.user.id)"
                      >Contact</button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div v-if="Object.keys(mentors).length === 0" class="bg-gray-500">
                <h3 class="text-sm text-monospace text-danger">No Result Found</h3>
              </div>
              <pagination
                class="display-inline"
                @current="syncPageWithPaginate($event)"
                :total="meta.total"
                :perPage="parseInt(meta.per_page)"
                :currentPage="meta.current"
              ></pagination>
            </div>
          </div>
          <!-- .et_pb_text -->
        </div>
      </div>
      <!-- .et_pb_row -->
      <div class="et_pb_row et_pb_row_4">
        <div
          class="et_pb_column et_pb_column_1_2 et_pb_column_7 et_pb_css_mix_blend_mode_passthrough"
        >
          <div
            class="et_pb_module et_pb_blurb et_pb_blurb_3 et_pb_text_align_left et_pb_blurb_position_left et_pb_bg_layout_light"
          >
            <div class="et_pb_blurb_content">
              <div class="et_pb_main_blurb_image">
                <span class="et_pb_image_wrap">
                  <span class="et-waypoint et_pb_animation_off et-pb-icon">&#xe104;</span>
                </span>
              </div>
              <div class="et_pb_blurb_container">
                <h6 class="et_pb_module_header">
                  <span>Branding</span>
                </h6>
                <div class="et_pb_blurb_description">
                  <p>In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam.</p>
                </div>
              </div>
            </div>
            <!-- .et_pb_blurb_content -->
          </div>
          <!-- .et_pb_blurb -->
        </div>
        <!-- .et_pb_column -->
        <div
          class="et_pb_column et_pb_column_1_2 et_pb_column_8 et_pb_css_mix_blend_mode_passthrough et-last-child"
        >
          <div
            class="et_pb_module et_pb_blurb et_pb_blurb_4 et_pb_text_align_left et_pb_blurb_position_left et_pb_bg_layout_light"
          >
            <div class="et_pb_blurb_content">
              <div class="et_pb_main_blurb_image">
                <span class="et_pb_image_wrap">
                  <span class="et-waypoint et_pb_animation_off et-pb-icon">&#xe00e;</span>
                </span>
              </div>
              <div class="et_pb_blurb_container">
                <h6 class="et_pb_module_header">
                  <span>Web Design</span>
                </h6>
                <div class="et_pb_blurb_description">
                  <p>In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam.</p>
                </div>
              </div>
            </div>
            <!-- .et_pb_blurb_content -->
          </div>
          <!-- .et_pb_blurb -->
        </div>
      </div>
      <!-- .et_pb_row -->
      <div class="et_pb_row et_pb_row_5">
        <div
          class="et_pb_column et_pb_column_1_2 et_pb_column_9 et_pb_css_mix_blend_mode_passthrough"
        >
          <div
            class="et_pb_module et_pb_blurb et_pb_blurb_5 et_pb_text_align_left et_pb_blurb_position_left et_pb_bg_layout_light"
          >
            <div class="et_pb_blurb_content">
              <div class="et_pb_main_blurb_image">
                <span class="et_pb_image_wrap">
                  <span class="et-waypoint et_pb_animation_off et-pb-icon">&#xe0e9;</span>
                </span>
              </div>
              <div class="et_pb_blurb_container">
                <h6 class="et_pb_module_header">
                  <span>
                    Search Engine
                    Optimization
                  </span>
                </h6>
                <div class="et_pb_blurb_description">
                  <p>In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam.</p>
                </div>
              </div>
            </div>
            <!-- .et_pb_blurb_content -->
          </div>
          <!-- .et_pb_blurb -->
        </div>
        <!-- .et_pb_column -->
        <div
          class="et_pb_column et_pb_column_1_2 et_pb_column_10 et_pb_css_mix_blend_mode_passthrough et-last-child"
        >
          <div
            class="et_pb_module et_pb_blurb et_pb_blurb_6 et_pb_text_align_left et_pb_blurb_position_left et_pb_bg_layout_light"
          >
            <div class="et_pb_blurb_content">
              <div class="et_pb_main_blurb_image">
                <span class="et_pb_image_wrap">
                  <span class="et-waypoint et_pb_animation_off et-pb-icon">&#xe109;</span>
                </span>
              </div>
              <div class="et_pb_blurb_container">
                <h6 class="et_pb_module_header">
                  <span>
                    Information
                    Architecture
                  </span>
                </h6>
                <div class="et_pb_blurb_description">
                  <p>In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam.</p>
                </div>
              </div>
            </div>
            <!-- .et_pb_blurb_content -->
          </div>
          <!-- .et_pb_blurb -->
        </div>
      </div>
      <!-- .et_pb_row -->
      <div class="et_pb_row et_pb_row_6">
        <div
          class="et_pb_column et_pb_column_1_2 et_pb_column_11 et_pb_css_mix_blend_mode_passthrough"
        >
          <div
            class="et_pb_module et_pb_blurb et_pb_blurb_7 et_pb_text_align_left et_pb_blurb_position_left et_pb_bg_layout_light"
          >
            <div class="et_pb_blurb_content">
              <div class="et_pb_main_blurb_image">
                <span class="et_pb_image_wrap">
                  <span class="et-waypoint et_pb_animation_off et-pb-icon">&#x68;</span>
                </span>
              </div>
              <div class="et_pb_blurb_container">
                <h6 class="et_pb_module_header">
                  <span>
                    Content
                    Strategy
                  </span>
                </h6>
                <div class="et_pb_blurb_description">
                  <p>In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam.</p>
                </div>
              </div>
            </div>
            <!-- .et_pb_blurb_content -->
          </div>
          <!-- .et_pb_blurb -->
        </div>
        <!-- .et_pb_column -->
        <div
          class="et_pb_column et_pb_column_1_2 et_pb_column_12 et_pb_css_mix_blend_mode_passthrough et-last-child"
        >
          <div
            class="et_pb_module et_pb_blurb et_pb_blurb_8 et_pb_text_align_left et_pb_blurb_position_left et_pb_bg_layout_light"
          >
            <div class="et_pb_blurb_content">
              <div class="et_pb_main_blurb_image">
                <span class="et_pb_image_wrap">
                  <span class="et-waypoint et_pb_animation_off et-pb-icon">&#xe007;</span>
                </span>
              </div>
              <div class="et_pb_blurb_container">
                <h6 class="et_pb_module_header">
                  <span>
                    Business
                    Consulting
                  </span>
                </h6>
                <div class="et_pb_blurb_description">
                  <p>In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam.</p>
                </div>
              </div>
            </div>
            <!-- .et_pb_blurb_content -->
          </div>
          <!-- .et_pb_blurb -->
        </div>
      </div>
      <!-- .et_pb_row -->
      <div class="et_pb_row et_pb_row_7">
        <div
          class="et_pb_column et_pb_column_4_4 et_pb_column_13 et_pb_css_mix_blend_mode_passthrough et-last-child"
        >
          <div
            class="et_pb_module dsm_dual_heading dsm_dual_heading_1 et_pb_text_align_center et_pb_bg_layout_light"
          >
            <div class="et_pb_module_inner">
              <h1 class="dsm-dual-heading-main et_pb_module_header">
                <span class="dsm-dual-heading-before">Our</span>
                <span class="dsm-dual-heading-middle">Top</span>
                <span class="dsm-dual-heading-after">Mentors</span>
              </h1>
            </div>
          </div>
          <div
            class="et_pb_module et_pb_text et_pb_text_3 et_pb_text_align_center et_pb_bg_layout_light"
          >
            <div class="et_pb_text_inner">
              <p>Our mentors are very professional and well trained to guide everyone in right direction</p>
            </div>
          </div>
          <!-- .et_pb_text -->
        </div>
      </div>
      <!-- .et_pb_row -->
      <div class="et_pb_row et_pb_row_8">
        <div v-for="(mentor,index) in mentors" v-if="index < 3" style="margin:15px"
          class="et_pb_column et_pb_column_1_3 et_pb_column_16 et_pb_css_mix_blend_mode_passthrough et-last-child"
        >
          <div
            class="et_pb_module et_pb_blurb et_pb_blurb_11 et_pb_text_align_center et_pb_blurb_position_top et_pb_bg_layout_dark"
          >
            <div class="et_pb_blurb_content">
              <div class="et_pb_main_blurb_image">
                <span class="et_pb_image_wrap">
                  <img :src="mentor.user.profile_image" alt class=" et_pb_animation_top" />
                </span>
              </div>
              <div class="et_pb_blurb_container">
                <h1 class="et_pb_module_header">
                  <span>{{mentor.user.first_name}} {{mentor.user.last_name}}</span>
                </h1>
                <div class="et_pb_blurb_description">
                  <p>
                    {{mentor.title}}
                  </p>
                  <p>
                      {{mentor.description}}
                  </p>
                </div>
              </div>
            </div>
            <!-- .et_pb_blurb_content -->
          </div>
          <!-- .et_pb_blurb -->
        </div>
      </div>
      <!-- .et_pb_row -->
      <div class="et_pb_row et_pb_row_9">
        <div
          class="et_pb_column et_pb_column_4_4 et_pb_column_17 et_pb_css_mix_blend_mode_passthrough et-last-child"
        >
          <div class="et_pb_module dsm_button dsm_button_0 et_pb_bg_layout_light">
            <div class="et_pb_module_inner">
              <div
                class="et_pb_button_module_wrapper dsm_button_0_wrapper et_pb_button_alignment_center et_pb_module"
              >
                <a
                  class="et_pb_button et_pb_button_one et_pb_bg_layout_light dsm-none"
                  :href="'/mentor'"
                  data-dsm-lightbox-id="dsm_button_one_lightbox dsm_button_0"
                >
                  See
                  More
                </a>
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
import Pagination from "@comp/lib/Pagination";
export default {
  name: "mentor-info",
  components: {
    Pagination
  },
  props: ["user_id"],
  data() {
    return {
      mentors: "",
      searchKey: "",
      dateRange: {
        fromDate: "",
        toDate: new Date().toISOString().substr(0, 10)
      },
      meta: {
        per_page: 10,
        current: 1,
        total: 0
      },
      showMentor: false
    };
  },
  mounted() {
    this.setFromDate();
    this.getMentors();
  },
  methods: {
    setFromDate() {
      let currentDate = new Date();
      currentDate.setMonth(currentDate.getMonth() - 1);
      this.dateRange.fromDate = currentDate.toISOString().substr(0, 10);
    },
    displayMore(mentorId) {
      let div = document.getElementById(mentorId);
      div.style.height = "100%";
    },
    syncPageWithPaginate($event) {
      this.meta.current = $event;
      this.getMentors();
    },
    connect(mentorUserId) {
      let data = new FormData();
      data.append("receiver_id", mentorUserId);
      client.post(chatInitializerRoute, data).then(response => {
        window.location.href = response.data;
      });
    },
    getMentors() {
      client
        .get(
          getMentorRoute +
            "?fromDate=" +
            this.dateRange.fromDate +
            "&toDate=" +
            this.dateRange.toDate +
            "&page=" +
            this.meta.current +
            "&key=" +
            this.searchKey
        )
        .then(response => {
          this.mentors = response.data.mentors.data;
          this.meta.per_page = response.data.mentors.per_page;
          this.meta.total = response.data.mentors.total;
        });
    },
    mentorFilter() {
      if (this.searchKey.length > 0) {
        this.showMentor = true;
      } else {
        this.showMentor = false;
      }
      this.getMentors();
    }
  }
};
</script>

