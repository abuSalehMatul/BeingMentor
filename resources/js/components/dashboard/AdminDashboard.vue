<template>
  <div>
      <div class="col-md-12">
          <admin-over-view> </admin-over-view>
      </div>
    <div class="row">
        <mentor-trainee-bar-chart> </mentor-trainee-bar-chart>
    </div>
  </div>
</template>

<script>
import MentorTraineeBarChart from "./MentorTraineeBarChart";
import AdminOverView from "./AdminOverView";
import client from "@/client";
export default {
  name: "admin-dashboard",
  components: {
    AdminOverView,
    MentorTraineeBarChart
  },
  data() {
    return {};
  }
};
</script>

