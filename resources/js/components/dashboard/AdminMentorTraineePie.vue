<template>
  <div class="row">
    <div class="col-md-6 col-sm-12">
      <h2> Mentor vs Trainee </h2>
      <canvas id="mentor_trainee_pie" width="1000" height="550"></canvas>
    </div>
     <div class="col-md-6 col-sm-12">
      <h2> Solved vs Unsolved </h2>
      <canvas id="solved_unsolved" width="1000" height="550"></canvas>
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
      reportData: ""
    };
  },
  mounted() {
    this.getReport();
  },
  methods: {
    
    getReport() {
      client
        .get(
          window.location.origin +
            "/api/get-admin-mentor-trainee-pie" 
        )
        .then(response => {
          this.reportData = response.data;
          this.generateMentorTraineePie();
          this.generateSolvedUnsolvedPie();
        });
    },
   
    generateMentorTraineePie() {
      var ctx = document.getElementById("mentor_trainee_pie").getContext("2d");
      var chart = new Chart(ctx, {
        type: "doughnut",
        data: {
          labels: [
            "Mentor",
            "Trainee",
          ],
          datasets: [
            {
              label: "Mentor vs Trainee",
              backgroundColor: ["rgb(255, 99, 132)", "rgb(25, 199, 132)"],
              borderColor: ["rgb(255, 99, 132)", "rgb(25, 199, 132)"],
              data: [this.reportData.mentors, this.reportData.trainees]
            }
          ]
        },
        options: {}
      });
    },

     generateSolvedUnsolvedPie() {
      var ctx = document.getElementById("solved_unsolved").getContext("2d");
      var chart = new Chart(ctx, {
        type: "doughnut",
        data: {
          labels: [
            "Unsolved",
            "Solved",
          ],
          datasets: [
            {
              label: "Unsolved vs Solved",
              backgroundColor: ["rgb(255, 99, 132)", "rgb(25, 199, 132)"],
              borderColor: ["rgb(255, 99, 132)", "rgb(25, 199, 132)"],
              data: [this.reportData.unsolved, this.reportData.solved]
            }
          ]
        },
        options: {}
      });
    },
  }
};
</script>

