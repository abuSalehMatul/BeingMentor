<template>
  <div :class="selectedClass">
    <h4>Mentors</h4>
    <div v-if="user_id == 'matulPermission'" class="col-md-12 mB-10 col-sm-12">
      <input type="date" v-model="dateRange.fromDate" @change="dateFilter" />
      To
      <input type="date" v-model="dateRange.toDate" @change="dateFilter" />
    </div>
    <div class="input-icons col-md-6">
      <i class="fa fa-search icon"></i>
      <input class="input-field" v-model="searchKey" type="text" placeholder="Search Mentors" @keyup="mentorFilter" />
    </div>
    <hr />
    <span>
      <i
        class="badge badge-danger"
        v-if="user_id == 'matulPermission'"
      >Deactivate mentors will not shown in user search and also they can't perfom regular mentor action</i>
    </span>

    <table class="table table-striped">
      <thead class="thead-dark" v-if="user_id == 'matulPermission'">
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
          <td v-if="user_id == 'matulPermission'">
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
    <div v-if="Object.keys(mentors).length === 0" class="well bg-info">
        <h3 class="text-danger text-center">No Result Found </h3>
    </div>
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
      searchKey: '',
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
      client.put("del/" + mentorId).then(response => {
        this.getMentors();
      });
    },
    active(mentorId) {
      client.put("active/" + mentorId).then(response => {
        this.getMentors();
      });
    },
    connect(mentorUserId){
        let data = new FormData();
        data.append("receiver_id", mentorUserId);
        client
        .post(chatInitializerRoute, data)
        .then(response => {
            console.log(response);
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
            this.meta.current+
            "&key=" + this.searchKey
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
    mentorFilter(){
        this.getMentors();
    }
  }
};
</script>

<style scoped>
.front-mentor-div {
  margin: 30px;
  color: white;
  background-image: url("/images/used_logo.png");
  background-position: 50% 0;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.input-icons i {
  position: absolute;
}

.input-icons {
  width: 100%;
  margin-bottom: 5px;
}

.icon {
  padding: 10px;
  color: green;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 80%;
  padding: 10px;
  text-align: center;
}
</style>

