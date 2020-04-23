<template>
  <div class="bgc-white bd bdrs-3 p-20 mB-20 mT-15">
    <h4>Mentors</h4>
    <input type="date" v-model="dateRange.fromDate" @change="dateFilter" />
    To
    <input type="date" v-model="dateRange.toDate" @change="dateFilter" />
    <br />
    <hr />
    <span>
      <i
        class="badge badge-danger"
      >Deactivate mentors will not shown in user search and also they can't perfom regular mentor action</i>
    </span>

    <table class="table table-striped">
      <thead class="thead-dark">
        <th>Image</th>
        <th>Status</th>
        <th>First Name</th>
        <th>Last Name</th>
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
          <td>
            <i v-if="mentor.user.status == 1" class="badge badge-success">Active</i>
            <i v-if="mentor.user.status == 0" class="badge badge-danger">Unactive</i>
          </td>
          <td>{{mentor.user.first_name}}</td>
          <td>{{mentor.user.last_name}}</td>
          <td>{{mentor.title}}</td>
          <td>
            <i v-for="tag in mentor.tags" class="badge badge-secondary">{{tag}}</i>
          </td>
          <td>{{mentor.user.mobile}}</td>
          <td>
            <address>{{mentor.user.address}}</address>
          </td>
          <td>{{mentor.description}}</td>
          <td nowrap>{{mentor.formated_date}}</td>
          <td>
            <button class="btn btn-sm btn-danger" @click.prevent="del(mentor.id)">Delete</button>
            <button
              v-if="mentor.user.status == 0"
              class="btn btn-sm btn-info"
              @click.prevent="active(mentor.id)"
            >Activate</button>
          </td>
        </tr>
      </tbody>
    </table>

    <pagination
      class="display-inline"
      @current="syncPageWithPaginate($event)"
      :total="meta.total"
      :perPage="parseInt(meta.per_page)"
      :currentPage="meta.current"
    ></pagination>
  </div>
</template>

<script>
import client from "@/client";
import Pagination from "@comp/lib/Pagination";
export default {
  name: "mentor",
  components: { Pagination },
  props: ["user_id"],

  data() {
    return {
      mentors: "",
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
    syncPageWithPaginate($event) {
      this.meta.current = $event;
      this.getMentors();
    },
    del(mentorId) {
      client.put("del/"+mentorId)
        .then(response => {
          this.getMentors();
        });
    },
    active(mentorId) {
      client.put("active/"+mentorId)
        .then(response => {
          this.getMentors();
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
            this.meta.current
        )
        .then(response => {
          this.mentors = response.data.mentors.data;
          this.meta.per_page = response.data.mentors.per_page;
          this.meta.total = response.data.mentors.total;
        });
    },
    dateFilter() {
      this.getMentors();
    }
  }
};
</script>

