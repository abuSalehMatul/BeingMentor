<template>
  <div>
    <mentor-over-view></mentor-over-view>
    <div class="row">
      <mentor-trainee-bar-chart></mentor-trainee-bar-chart>
    </div>
  </div>
</template>

<script>
import client from "@/client";
import MentorTraineeBarChart from "./MentorTraineeBarChart";
import MentorOverView from "./MentorOverView";
export default {
  name: "mentor-dashboard",
  components: {
    MentorTraineeBarChart, MentorOverView
  },
  data() {
    return {};
  }
};
</script>

