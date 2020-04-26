<template>
  <div class="bgc-white bd bdrs-3 p-20 mB-20 mT-15">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <chat-list :user_id="own_id"></chat-list>
      </div>
      <div class="col-md-8 col-sm-12">
        <div v-if="ticketForm == true">
          <ticket-form @updateTicket="updateTic"></ticket-form>
        </div>
        <div class="card card-default col-md-12 col-sm-12">
          <div class="card-header row">
            <div class="col-md-3">
              <img
                :src="otherPerson.profile_image"
                class="img-thumbnail rounded col-md-4"
                style="height:100%"
              />
              <i>5start</i>
            </div>
            <div class="col-md-3">
              <h4 class="col-md-12">{{otherPerson.first_name}}</h4>
              <h5 class="col-md-12">{{otherPerson.last_name}}</h5>
            </div>
            <div
              v-for="ticket in tickets"
              class="float-left col-md-6"
              v-if="ticket.status != 'solved'"
            >
              Issue {{ticket.barcode}}
              <h6 style="overflow: hidden;height: 40px;">{{ticket.description.substr(0, 50)}}</h6>
              <i class="badge badge-info">{{ticket.status}}</i>
              <button v-if="ticket.status != 'solved'" class="btn btn-sm btn-success">Solved !</button>
            </div>
          </div>
          <div class="card-body">
            <ul class="list-unstyled" style="height:300px; overflow-y:scroll">
              <li class="p-2"></li>
            </ul>
          </div>
          <div class="col-md-12 row">
            <textarea rows="2" class="form-control" v-model="messageText"></textarea>
          </div>
          <div class="col-md-12">
            <i class="fa fa-angle-double-right" @click="sendMessage()"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import client from "@/client";
import ChatList from "./ChatList";
import TicketForm from "./TicketForm";
import { EventBus } from "@/event-bus";
export default {
  name: "chat-room",
  props: ["room_id", "own_id"],
  components: {
    ChatList,
    TicketForm
  },
  data() {
    return {
      messages: "",
      tickets: [],
      otherPerson: "",
      messageText: "",
      ticketForm: false
    };
  },
  mounted() {
    this.getAllMessage();
  },
  methods: {
    getAllMessage() {
      client.get(getChatRoute).then(response => {
        this.messages = response.data.messages;
        this.tickets = response.data.tickets;
        this.otherPerson = response.data.other_person;
        if (Object.keys(this.tickets).length == 0) {
          this.ticketForm = true;
        }
      });
    },
    sendMessage() {
      if (this.messageText.length > 0) {
        let data = new FormData();
        data.append("message", this.messageText);
        this.messageText = "";
        client.post(sendChatRoute, data).then(response => {});
      }
    },
    updateTic(description) {
      let data = new FormData();
      data.append("description", description);
      client.post(setTicketRoute, data).then(response => {
        this.ticketForm = false;
        this.getAllMessage();
      });
    }
  }
};
</script>
<style scoped>
.fa {
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 44px;
  color: green;
  text-rendering: auto;
  cursor: pointer;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>

