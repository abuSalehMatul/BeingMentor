<template>
  <div>
     
    <div class="row">
      <mentor-trainee-bar-chart></mentor-trainee-bar-chart>
    </div>
  </div>
</template>

<script>
import client from "@/client";
import MentorTraineeBarChart from "./MentorTraineeBarChart";


export default {
  name: "trainee-dashboard",
  components: {
    MentorTraineeBarChart
  },
  data() {
    return {};
  }
};
</script>

