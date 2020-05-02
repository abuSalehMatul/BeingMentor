<template class="p-10 m-5">
  <div class="card p-10">
    <div class="offset-3">
      <input type="date" v-model="dateRange.fromDate" @change="dateFilter" />
      To
      <input type="date" v-model="dateRange.toDate" @change="dateFilter" />
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <h2>Mentor vs Trainee</h2>
        <canvas id="mentor_trainee_pie" width="1000" height="550"></canvas>
      </div>
      <div class="col-md-6 col-sm-12">
        <h2>Solved vs Unsolved</h2>
        <canvas id="solved_unsolved" width="1000" height="550"></canvas>
      </div>
    </div>
  </div>
</template>

<script>
import client from "@/client";
export default {
  name: "admin-mentor-trainee-pie",
  props: ["user_id"],
  components: {},
  data() {
    return {
      reportData: "",
      dateRange: {
        fromDate: "",
        toDate: new Date().toISOString().substr(0, 10)
      },
      mentorTraineechart: "",
      solveUnsolveChart: ""
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
            "/api/get-admin-mentor-trainee-pie" +
            "?fromDate=" +
            this.dateRange.fromDate +
            "&toDate=" +
            this.dateRange.toDate
        )
        .then(response => {
          this.reportData = response.data;
          this.generateMentorTraineePie();
          this.generateSolvedUnsolvedPie();
        });
    },
    dateFilter() {
      if (typeof this.mentorTraineechart != "undefined") {
        this.mentorTraineechart.destroy();
      }
      if (typeof this.solveUnsolveChart != "undefined") {
        this.solveUnsolveChart.destroy();
      }
      this.getReport();
    },

    generateMentorTraineePie() {
      var ctx = document.getElementById("mentor_trainee_pie").getContext("2d");
      this.mentorTraineechart = new Chart(ctx, {
        type: "doughnut",
        data: {
          labels: ["Mentor", "Trainee"],
          datasets: [
            {
              label: "Mentor vs Trainee",
              backgroundColor: ["#cd20ff", "#2052ff"],
              borderColor: ["#cd20ff", "#2052ff"],
              data: [this.reportData.mentors, this.reportData.trainees]
            }
          ]
        },
        options: {}
      });
    },

    generateSolvedUnsolvedPie() {
      var ctx = document.getElementById("solved_unsolved").getContext("2d");
      this.solveUnsolveChart = new Chart(ctx, {
        type: "doughnut",
        data: {
          labels: ["Unsolved", "Solved"],
          datasets: [
            {
              label: "Unsolved vs Solved",
              backgroundColor: ["#ff2052", "#52ff20"],
              borderColor: ["#ff2052", "#52ff20"],
              data: [this.reportData.unsolved, this.reportData.solved]
            }
          ]
        },
        options: {}
      });
    }
  }
};
</script>

