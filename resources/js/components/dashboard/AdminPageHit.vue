<template>
  <div>
    <h3>Pages Hits</h3>
    <div class="col-md-12 mB-10 col-sm-12">
      <input type="date" v-model="dateRange.fromDate" @change="dateFilter" />
      To
      <input type="date" v-model="dateRange.toDate" @change="dateFilter" />
    </div>
  </div>
</template>

<script>
import client from "@/client";
export default {
  name: "admin-page-hit",
  props: ["user_id"],
  components: {},
  data() {
    return {
      hits: "",
      dateRange: {
        fromDate: "",
        toDate: new Date().toISOString().substr(0, 10)
      },
      myChart: ''
    };
  },
  mounted() {
    this.setFromDate();
    this.getList();
  },
  methods: {
    dateFilter() {
      if (typeof this.myChart != "undefined") {
        this.myChart.destroy();
      }
      this.getReport();
    },
    setFromDate() {
      let currentDate = new Date();
      currentDate.setMonth(currentDate.getMonth() - 1);
      this.dateRange.fromDate = currentDate.toISOString().substr(0, 10);
    },
    getList() {
      client
        .get(
          window.location.origin +
            "/api/get-pages-hit" +
            "?fromDate=" +
            this.dateRange.fromDate +
            "&toDate=" +
            this.dateRange.toDate
        )
        .then(response => {
            this.hits = response.data;
        });
    }
  }
};
</script>

