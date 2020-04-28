<template>
  <div class="bgc-white bd bdrs-3 p-20 mB-20 mT-15">
    <div class="row">
      <ul class="list-unstyled col-md-12">
        <li v-for="message in messages"  :class="determineClass(message)" @click="goToChatRoom(message.chat_room_id)" style="cursor:pointer">
          <div class="col-md-3 col-sm-4">
            <img :src="message.sender_image" class="img-fluid img-thumbnail rounded" />
            <b
              class="text-center"
              v-if="message.sender_id != user_id"
            >{{message.sender_first_name}} {{message.sender_last_name}}</b>
            <b v-else>Me</b> At.
            <i>{{message.time}}</i>
          </div>
          <div class="col-md-8 col-sm-8 p-5">{{message.message.substring(0,100)}}</div>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import client from "@/client";
export default {
  name: "message",
  props: ["user_id"],
  components: {},
  mounted() {
    this.getMessage();
  },
  data() {
    return {
      messages: ""
    };
  },
  methods: {
    getMessage() {
      client.get(getMyMessageRoute).then(response => {
        this.messages = response.data;
      });
    },
    determineClass(message){
      if(message.is_viewed == 0){
        return "row unseen m-4 rounded";
      }
      else{
        return "row m-4";
      }
    },
    goToChatRoom(chatRoomId){
        let link = window.location.origin + '/see-message/'+chatRoomId;
        window.location.href = link;
    }
  }
};
</script>

<style scoped>
.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 15%;
  margin: 5px;
  height: auto;
}
.unseen{
  background: whitesmoke;
}
</style>