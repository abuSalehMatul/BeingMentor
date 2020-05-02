<template>
  <div>
    <h3>Chat Inquires</h3>
    <div class="col-md-12 mB-10 col-sm-12">
      <input type="date" v-model="dateRange.fromDate" @change="dateFilter" />
      To
      <input type="date" v-model="dateRange.toDate" @change="dateFilter" />
    </div>
    <div class="col-md-12">
      <canvas id="myChart" width="600" height="350"></canvas>
    </div>
  </div>
</template>

<script>
import client from "@/client";
export default {
  name: "admin-chat-inquire",
  components: {},
  data() {
    return {
      dateRange: {
        fromDate: "",
        toDate: new Date().toISOString().substr(0, 10)
      },
      chatInquires: "",
      myChart: ""
    };
  },
  mounted() {
    this.setFromDate();
    this.getReport();
  },
  methods: {
    setFromDate() {
      let currentDate = new Date();
      currentDate.setMonth(currentDate.getMonth() - 1);
      this.dateRange.fromDate = currentDate.toISOString().substr(0, 10);
    },
    getReport() {
      client
        .get(
          window.location.origin +
            "/api/get-chat-inquire" +
            "?fromDate=" +
            this.dateRange.fromDate +
            "&toDate=" +
            this.dateRange.toDate
        )
        .then(response => {
          this.chatInquires = response.data;
          this.generateReport();
        });
    },
    dateFilter() {
      if (typeof this.myChart != "undefined") {
        this.myChart.destroy();
      }
      this.getReport();
    },
    generateReport() {
      var ctx = document.getElementById("myChart").getContext("2d");
      this.myChart = new Chart(ctx, {
        type: "horizontalBar",
        data: {
          labels: Object.keys(this.chatInquires),
          barThickness: 4,
          datasets: [
            {
              label: "# Inquires with the date frame",
              data: Object.values(this.chatInquires),
              backgroundColor: [
                "rgba(2, 199, 132, 0.8)",
                "rgba(154, 162, 235, 0.8)",
                "rgba(255, 206, 86, 0.7)",
                "rgba(75, 109, 192, 0.7)",
                "rgba(153, 102, 55, 0.9)",
                "rgba(25, 59, 164, 0.9)",
                "rgba(255, 99, 132, 0.5)",
                "rgba(54, 162, 235, 0.9)",
                "rgba(255, 206, 86, 0.6)",
                "rgba(75, 192, 192, 0.9)",
                "rgba(153, 102, 255, 0.6)",
                "rgba(255, 9, 64, 0.5)",
                "rgba(103, 192, 225, 0.8)",
                "rgba(55, 199, 14, 0.9)"
              ],
              borderColor: [
                "rgba(255, 99, 132, 1)",
                "rgba(54, 162, 235, 1)",
                "rgba(255, 206, 86, 1)",
                "rgba(75, 192, 192, 1)",
                "rgba(153, 102, 255, 1)",
                "rgba(255, 159, 64, 1)",
                "rgba(255, 99, 132, 1)",
                "rgba(54, 162, 235, 1)",
                "rgba(255, 206, 86, 1)",
                "rgba(75, 192, 192, 1)",
                "rgba(153, 102, 255, 1)",
                "rgba(255, 159, 64, 1)",
                "rgba(153, 102, 255, 1)",
                "rgba(255, 159, 64, 1)"
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
            ],
            xAxes: [
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

