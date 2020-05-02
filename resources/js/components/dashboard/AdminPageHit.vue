<template>
  <div>
   
    <div class="col-md-12 mB-10 col-sm-12">
         <h3>Pages Hits</h3>
      <input type="date" v-model="dateRange.fromDate" @change="dateFilter" />
      To
      <input type="date" v-model="dateRange.toDate" @change="dateFilter" />
    </div>
    <div class="col-md-12">
      <canvas id="pagesHit" width="900" height="400"></canvas>
    </div>
  </div>
</template>

<script>
import client from "@/client";
export default {
  name: "admin-page-hit",
  components: {},
  data() {
    return {
      hits: "",
      dateRange: {
        fromDate: "",
        toDate: new Date().toISOString().substr(0, 10)
      },
      myChart: ""
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
      this.getList();
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
          this.generateChart();
        });
    },
    generateChart() {
      var ctx = document.getElementById("pagesHit");
      this.myChart = new Chart(ctx, {
        type: "bar",
         barThickness: 7,
        data: {
          labels: Object.keys(this.hits),
          datasets: [
            {
              label: "# Pages Hit by Date",
              data: Object.values(this.hits),
              backgroundColor: [
                "#ff2052",
                "#cd20ff",
                "#52ff20",
                "#2052ff",
                "#ffcd20",
                "#20ffcd",
                "#ff5e20"
              ],
              borderColor: [
                "#ff2052",
                "#cd20ff",
                "#52ff20",
                "#2052ff",
                "#ffcd20",
                "#20ffcd",
                "#ff5e20"
              ],
              borderWidth: 2
            }
          ]
        },
        options: {
          scales: {
            yAxes: [
              {
                ticks: {
                  beginAtZero: true
                }
              }
            ]
          }
        }
      });
    }
  }
};
</script>

