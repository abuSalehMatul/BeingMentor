<template>
  <div class="bgc-white bd bdrs-3 p-20 mB-20 mT-15 col-md-12">
      <h3>My Messages OverView</h3>
    <canvas id="myChart" width="1000" height="350"></canvas>
  </div>
</template>

<script>
import client from "@/client";
import Chart from "chart.js";
export default {
  name: "mentor-trainee-bar-chart",
  components: {},
  mounted() {
    this.getData();
    
  },
  data() {
    return {
        barChartData: '',
        levels: [],
        sendData: [],
        receivedData: []
    };
  },
  methods: {
    getData() {
        client.get(window.location.origin + '/api/get-bar-chart-men-trainee').then(response => {
            this.barChartData = response.data;
            this.barChartData.forEach(element => {
                this.levels.push(element.date);
                this.sendData.push(element.sent);
                this.receivedData.push(element.received);
            });
            this.getChart();
      });
    },
    getChart() {
      var ctx = document.getElementById("myChart").getContext("2d");
      var myChart = new Chart(ctx, {
        type: "bar",
        data: {
          labels: this.levels,
          datasets: [
            {
              label: "My Send Message",
              data: this.sendData,
              backgroundColor: [
                "rgba(255, 99, 132, 0.8)",
              ],
              borderColor: [
                "rgba(255, 99, 132, 1)",
              ],
              borderWidth: 1
            },
             {
              label: "My Received Message",
              data: this.receivedData,
              backgroundColor: [
                
                "rgba(193, 102, 255, 0.9)",
              
              ],
              borderColor: [
                
                "rgba(193, 102, 255, 1)",
               
              ],
              borderWidth: 1
            }

          ]
        },
        options: {
         scales: {
            xAxes: [{
                stacked: true
            }],
            yAxes: [{
                stacked: true
            }]
        }
        }
      });
    }
  }
};
</script>

