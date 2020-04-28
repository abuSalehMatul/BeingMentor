<template>
  <div class="row mT-15">
    <div class="col-sm-3">
      <div class="layers bd bgc-white p-20">
        <h6>
          <span class="c-indigo-500 bgc-indigo-50 pX-15 pY-5">{{myRating}}</span>
          <span>My Rating</span>
        </h6>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="layers bd bgc-white p-20">
        <h6>
          <span class="c-deep-purple-500 bgc-deep-purple-50 pX-15 pY-5">{{Mysolve}}</span>
          <span>Solved Issue</span>
        </h6>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="layers bd bgc-white p-20">
        <h6>
          <span class="c-orange-500 bgc-orange-50 pX-15 pY-5">{{myMessage}}</span>
          <span>Received Message</span>
        </h6>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="layers bd bgc-white p-20">
        <h6>
          <span class="c-green-500 bgc-green-50 pX-15 pY-5">{{myVote}}</span>
          <span>Vote</span>
        </h6>
      </div>
    </div>
  </div>
</template>

<script>
import client from "@/client";
export default {
  name: "mentor-over-view",
  data() {
    return {
      myVote: "",
      myMessage: "",
      myRating: "",
      Mysolve: ""
    };
  },
  mounted() {
    this.getTopInfoData();
  },
  methods: {
    getTopInfoData() {
      client.get(window.location.origin + '/api/mentor-overview').then(response => {
        this.myVote = response.data.my_vote;
        this.myMessage = response.data.my_message;
        this.myRating = response.data.my_rating;
        this.Mysolve = response.data.my_solve;
      });
    }
  }
};
</script>

<style scoped>
</style>
