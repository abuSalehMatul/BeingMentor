<template>
  <div class="bgc-white bd bdrs-3 p-20 mB-20 mT-15">
    <h4>Trainees</h4>
    <input type="date" v-model="dateRange.fromDate" @change="dateFilter" />
    To
    <input type="date" v-model="dateRange.toDate" @change="dateFilter" />
    <br />

    <table class="table">
      <thead>
        <th>Image</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Title</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Description</th>
        <th>Created at</th>
      </thead>
      <tbody>
        <tr v-for="trainee in trainees">
          <td>
            <img
              :src="trainee.user.profile_image"
              class="img-fluid img-thumbnail rounded mx-auto d-block"
            />
          </td>
          <td>{{trainee.user.first_name}}</td>
          <td>{{trainee.user.last_name}}</td>
          <td>{{trainee.title}}</td>
          <td>{{trainee.user.mobile}}</td>
          <td>
            <address>{{trainee.user.address}}</address>
          </td>
          <td>{{trainee.description}}</td>
          <td>{{trainee.formated_date}}</td>
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
  name: "trainee",
  components: { Pagination },
  props: ["user_id"],

  data() {
    return {
      trainees: "",
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
    this.getTrainee();
  },
  methods: {
    setFromDate() {
      let currentDate = new Date();
      currentDate.setMonth(currentDate.getMonth() - 1);
      this.dateRange.fromDate = currentDate.toISOString().substr(0, 10);
    },
    syncPageWithPaginate($event) {
      this.meta.current = $event;
      this.getTrainee();
    },
    getTrainee() {
      client
        .get(
          getTraineeRoute +
            "?fromDate=" +
            this.dateRange.fromDate +
            "&toDate=" +
            this.dateRange.toDate +
            "&page=" +
            this.meta.current
        )
        .then(response => {
          this.trainees = response.data.trainees.data;
          this.meta.per_page = response.data.trainees.per_page;
          this.meta.total = response.data.trainees.total;
        });
    },
    dateFilter() {
      this.getTrainee();
    }
  }
};
</script>

