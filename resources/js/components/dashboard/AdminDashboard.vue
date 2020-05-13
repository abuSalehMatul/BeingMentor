<template>
  <div class="bgc-white bd bdrs-3 p-20 mB-20 mT-15">
    <div class="col-md-12">
      <admin-over-view></admin-over-view>
    </div>
    <div class="row">
      <admin-mentor-trainee-pie></admin-mentor-trainee-pie>
      <admin-page-hit> </admin-page-hit>
    </div>
    <div class="col-md-12"> 
      <admin-chat-inquire> </admin-chat-inquire>
    </div>
    <div class="col-md-12"> 
      <admin-mentor-performance> </admin-mentor-performance>
    </div>
    <div> 
      <admin-forum-inquire> </admin-forum-inquire>
    </div>
  </div>
</template>

<script>
import AdminChatInquire from "./AdminChatInquire";
import AdminForumInquire from "./AdminForumInquire";
import AdminMentorPerformance from "./AdminMentorPerformance";
import AdminMentorTraineePie from "./AdminMentorTraineePie";
import AdminPageHit from "./AdminPageHit";
import AdminOverView from "./AdminOverView";
import client from "@/client";
export default {
  name: "admin-dashboard",
  components: {
    AdminOverView,
    AdminForumInquire,
    AdminChatInquire,
    AdminMentorPerformance,
    AdminMentorTraineePie,
    AdminPageHit
  },
  data() {
    return {};
  }
};
</script>

