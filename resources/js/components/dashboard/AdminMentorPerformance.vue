<template>
  <div class="">
    <h3>Mentor Performance</h3>
    <div class="col-md-12 mB-10 col-sm-12">
      <input type="date" v-model="dateRange.fromDate" @change="dateFilter" />
      To
      <input type="date" v-model="dateRange.toDate" @change="dateFilter" />
    </div>
    <div class="card">
        <table class="table">
            <thead>
                <th>Image</th>
                <th>Name</th>
                <th>Assign Quires</th>
                <th> Solved Quires</th>
                <th> Open Quires</th>
                <th> Rating</th>
            </thead>
            <tbody>
                <tr v-for="mentor in performances">
                    <td>
                        <img :src="mentor.profile_image"  class="img-fluid img-thumbnail rounded" style="width: 60px">
                    </td>
                    <td>
                        <b> {{mentor.first_name}}</b>  {{mentor.last_name}}
                        <small> {{mentor.email}} </small>
                    </td>
                    <td>
                        {{mentor.assign_quire}}
                    </td>
                    <td>
                        {{mentor.solved_quire}}
                    </td>
                    <td>
                        {{mentor.open_quire}}
                    </td>
                    <td>
                        {{mentor.rating}}
                    </td>
                </tr>
            </tbody>
        </table>
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
  name: "admin-mentor-performance",
  components: {},
  data() {
    return {
      dateRange: {
        fromDate: "",
        toDate: new Date().toISOString().substr(0, 10)
      },
      meta: {
        per_page: 10,
        current: 1,
        total: 0
      },
      performances: ''
    };
  },
  mounted() {
    this.setFromDate();
    this.getMentorPerformance();
  },
  methods: {
    setFromDate() {
      let currentDate = new Date();
      currentDate.setMonth(currentDate.getMonth() - 1);
      this.dateRange.fromDate = currentDate.toISOString().substr(0, 10);
    },
    syncPageWithPaginate($event) {
      this.meta.current = $event;
      this.getMentorPerformance();
    },
    getMentorPerformance() {
      client.get(
        window.location.origin +
          "/api/get-mentor-performance" +
          "?fromDate=" +
          this.dateRange.fromDate +
          "&toDate=" +
          this.dateRange.toDate +
          "&page=" +
          this.meta.current
      )
      .then(response => {
          this.performances = response.data.data
          this.meta.per_page = response.data.per_page;
          this.meta.total = response.data.total;;
      })

    },
    dateFilter() {
      this.getMentorPerformance();
    },
  }
};
</script>

