<template>
  <div>
    <!-- <div :class="selectedClass">
      <h4 v-if="user_id != 'website'">Mentors</h4>
      <div v-if="user_id == 'matulPermission'" class="col-md-12 mB-10 col-sm-12">
        <input type="date" v-model="dateRange.fromDate" @change="dateFilter" />
        To
        <input type="date" v-model="dateRange.toDate" @change="dateFilter" />
      </div>
      <div class="input-icons col-md-6" v-if="user_id != 'website'">
        <i class="fa fa-search icon"></i>
        <input
          class="input-field"
          v-model="searchKey"
          type="text"
          placeholder="Search Mentors"
          @keyup="mentorFilter"
        />
      </div>
      <hr />
      <span>

        <i
          class="badge badge-danger"
          v-if="user_id == 'matulPermission'"
        >Deactivate mentors will not shown in user search and also they can't perfom regular mentor action</i>
      </span>

      <table class="table card">
        <thead class="thead-dark" v-if="user_id == 'matulPermission'">
          <th>Image</th>
          <th>Status</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Rating</th>
          <th>Title</th>
          <th>Tags</th>
          <th>Mobile</th>
          <th>Address</th>
          <th>Description</th>
          <th>Created at</th>
          <th>Action</th>
        </thead>
        <tbody>
          <tr v-for="mentor in mentors">
            <td>
              <img
                :src="mentor.user.profile_image"
                class="img-fluid img-thumbnail rounded mx-auto d-block"
              />
            </td>
            <td v-if="user_id == 'matulPermission'">
              <i v-if="mentor.user.status == 1" class="badge badge-success">Active</i>
              <i v-if="mentor.user.status == 0" class="badge badge-danger">Unactive</i>
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
            <td v-if="user_id == 'matulPermission'">{{mentor.user.mobile}}</td>
            <td pre v-if="user_id != 'website'">
              <small style="font-size:10px">{{mentor.user.address}}</small>
            </td>
            <td>
              <p
                style="height: 70px; transition: height 300ms; overflow:hidden;color:skyblue"
                @click="displayMore(mentor.id)"
                :id="mentor.id"
              >{{mentor.description}}</p>
            </td>
            <td nowrap v-if="user_id != 'website'">
              <small>
                Joins at:
                <i class="fa fa-calendar"></i>
              </small>
              {{mentor.formated_date}}
            </td>
            <td v-if="user_id == 'matulPermission'">
              <button class="btn btn-sm btn-danger" @click.prevent="del(mentor.id)">Delete</button>
              <button
                v-if="mentor.user.status == 0"
                class="btn btn-sm btn-info"
                @click.prevent="active(mentor.id)"
              >Activate</button>
            </td>
            <td v-else>
              <button class="btn btn-sm btn-success" @click="connect(mentor.user.id)">Contact</button>
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
    </div>-->

    <!-- new page  -->

    <div id="main-content" style="margin-top:75px">
      <article id="post-9" class="post-9 page type-page status-publish hentry">
        <div class="section-grey">
          <section class="container section">
            <h1 class="title top" style="text-align: center!important">Browse Mentors</h1>
            <form role="search" class="et_pb_searchform">
              <div>
                <label class="screen-reader-text" for="s">Search for:</label>
                <input
                  class="input-field-search"
                  v-model="searchKey"
                  type="text"
                  placeholder="Search Mentors"
                  @keyup="mentorFilter"
                />

                <input type="submit" value="Search" class="input-field-button" />
              </div>
            </form>

            <div class="box" v-for="mentor in mentors">
              <div class="columns">
                <div class="column is-2">
                  <a>
                    <figure class="image is-round" style="margin: 0 auto; max-width: 120px;">
                      <img :src="mentor.user.profile_image" alt="Nathan Lara" />
                    </figure>
                  </a>
                </div>
                <div class="column is-7 mentorcard-main-column" style=" position: relative">
                  <a href="https://mentorcruise.com/mentor/NathanLara/">
                    <h3
                      class="title is-4 title-blue nametag"
                      style="font-size: 1.2rem; font-weight: bold;"
                    >
                      {{mentor.user.first_name}}&nbsp;
                      <span
                        class="tag is-primary"
                        style="margin-left: 5px;"
                      >
                        <i class="fa fa-calendar" style="margin-right: 5px;"></i>
                        {{mentor.formated_date}}
                      </span>
                    </h3>
                  </a>
                  <span
                    class="has-text-grey"
                    style="font-size: 1.1rem; font-weight: 500;"
                  >{{mentor.title}}</span>
                  <br />
                  <div
                    class="star-rating-display"
                    v-if="mentor.rating != 0"
                    :data-rating="getMentorRating(mentor.rating)"
                  ></div>
                  <div v-else>
                    <i class="fa fa-star"></i>
                    <b class="has-text-blue">{{mentor.rating}}</b>&nbsp;
                  </div>
                  <span class="rating-display" v-if="mentor.rating != 0">
                    <b class="has-text-blue">{{mentor.rating}}</b>&nbsp;
                    <span class="has-text-grey-light"></span>
                  </span>

                  <span
                    class="has-text-blue"
                    style="font-size: 0.9rem; font-weight: 500; font-family: 'Inter UI', sans-serif;"
                  >
                    <p>{{mentor.description}}</p>
                  </span>
                  <div class="tags" style=" margin-top: 2rem;">
                    <span class="tag is-primary" v-for="tag in mentor.tags">{{tag}}</span>
                    <!-- <span class="tag">Data Science</span>
                    <span class="tag">Business &amp; Management</span>
                    <span class="tag">Resume</span>
                    <span class="tag">LinkedIn</span>-->
                  </div>
                </div>
                <div class="column is-3" style="text-align: center; padding: 1rem;">
                  <a
                    class="blue-btn"
                    style="padding: 8px 0; width: 100%; text-align: center; margin-top: 1em;"
                    @click.prevent="connect(mentor.user.id)"
                  >
                    <b>&nbsp;Apply for Mentorship&nbsp;</b>
                  </a>
                </div>
              </div>
            </div>
            <pagination
               class="myPagination"
              @current="syncPageWithPaginate($event)"
              :total="meta.total"
              :perPage="parseInt(meta.per_page)"
              :currentPage="meta.current"
            ></pagination>
          </section>
        </div>
      </article>
    </div>
  </div>
</template>

<script>
import client from "@/client";
import Pagination from "@comp/lib/Pagination";

export default {
  name: "home-page-mentor",
  components: { Pagination },
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
      }
    };
  },
  computed: {
    selectedClass: function() {
      if (this.user_id == "matulPermission") {
        return "bgc-white bd bdrs-3 p-20 mB-20 mT-15";
      }
      if (this.user_id === "front") {
        return "front-mentor-div";
      }
    }
  },
  mounted() {
    this.setFromDate();
    this.getMentors();
  },
  methods: {
    getMentorRating(rating) {
      return Math.floor(rating);
    },
    displayMore(mentorId) {
      let div = document.getElementById(mentorId);
      div.style.height = "100%";
    },
    setFromDate() {
      let currentDate = new Date();
      currentDate.setMonth(currentDate.getMonth() - 10);
      this.dateRange.fromDate = currentDate.toISOString().substr(0, 10);
    },
    syncPageWithPaginate($event) {
      this.meta.current = $event;
      this.getMentors();
    },
    del(mentorId) {
      client.put("del/" + mentorId).then(response => {
        this.getMentors();
      });
    },
    active(mentorId) {
      client.put("active/" + mentorId).then(response => {
        this.getMentors();
      });
    },
    connect(mentorUserId) {
      let data = new FormData();
      data.append("receiver_id", mentorUserId);
      client
        .post(window.location.origin + "/chat-initialize", data)
        .then(response => {
          window.location.href = response.data;
        });
    },
    getMentors() {
      client
        .get(
          window.location.origin +
            "/api/get-mentor/" +
            this.user_id +
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

    dateFilter() {
      this.getMentors();
    },
    mentorFilter() {
      this.getMentors();
    }
  }
};
</script>

<style scoped>
@media screen and (max-width: 768px) {
  #home-nav {
    background: transparent;
    height: 4rem;
    padding: 0;
  }

  .nav-menu.nav-right {
    background-color: #e4ebf0;
  }
}
.front-mentor-div {
  margin: 30px;
  color: white;
  background-image: url("/images/used_logo.png");
  background-position: 50% 0;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.input-field-button{
    padding: 4px 19px;
    background:  #247FD0;
    font-family: sans-serif;
    font-weight: 800;
    color: white;
    font-size: 27px;
    margin: -6px 1px 0px 27px;
     box-shadow: 1px 2px 11px 9px rgba(0,0,0,.2), 0px 1px 3px 1px rgba(0,0,0,.2);
}
.input-field-search{
   box-shadow: 1px 2px 11px 9px rgba(0,0,0,.2), 0px 1px 3px 1px rgba(0,0,0,.2);
    padding: 10px 230px;
    margin: 10px 0px 14px 114px;
    border: 1px solid whitesmoke;
    color:  #247FD0;
    font-size: 20px;

}

.display-inline {
  display: inline;
}


.top {
    font-size: 71px;
    text-align: center !important;
    line-height: 64px;
    color: #247FD0;
    font-family: fantasy;
}
</style>

