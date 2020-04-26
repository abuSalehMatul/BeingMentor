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
              <li class="p-2 row" v-for="message in messageList" :class="selectedClass(message.sender_id)">
                <div class="col-md-4">
                  <img :src="message.sender_image" class="img-fluid img-thumbnail-chat-box rounded" />

                  <b class="name">{{message.sender_first_name}} <i>{{message.sender_last_name}}</i></b>

                  <br />
                  <i class="">Time:(GMT+00 ) {{message.time}}</i>
                </div>
                <div class="col-md-8">
                  <p>{{message.message}}</p>
                </div>
              </li>
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
import Echo from "laravel-echo";
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
      ticketForm: false,
      messageList: []
    };
  },

  created() {
    this.getAllMessage();
    this.templateListener();
  },
  methods: {
    selectedClass(userId) {
      if (userId == this.own_id) {
        return "col-md-12 messageList senderLi";
      } else {
        return "col-md-12 messageList receiverLi";
      }
    },
    templateListener() {
      let myEcho = new Echo({
        broadcaster: "pusher",
        key: "0e5cf0c84ce38e9e8dd5",
        cluster: "ap2",
        encrypted: true,

        auth: {
          headers: {
            "X-CSRF-TOKEN": laravel_token
          }
        }
      });
      myEcho.private("send-message").listen("SendMessageEvent", e => {
        console.log(e);
      });
    },
    getAllMessage() {
      client.get(getChatRoute).then(response => {
        this.messages = response.data.messages;
        this.tickets = response.data.tickets;
        this.otherPerson = response.data.other_person;
        if (Object.keys(this.tickets).length == 0) {
          this.ticketForm = true;
        }
        this.prepareMessageList();
      });
    },
    prepareMessageList() {
      let data;
      let self = this;
      _.forEach(this.messages, function(value, key) {
        data = {
          sender_id: value.sender.id,
          message: value.message,
          time: value.formated_time,
          is_file: value.is_file,
          sender_first_name: value.sender.first_name,
          sender_last_name: value.sender.last_name,
          sender_image: value.sender.profile_image
        };
        self.messageList.push(data);
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
.img-thumbnail-chat-box {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: 40px;
}
.messageList{
 margin: 2px;
    border: 1px solid beige;
    box-shadow: 1px 1px beige;
    font-size: 14px;

}
.name{
    padding: 1px;
}
.senderLi{
     background: radial-gradient(#dde3fd, transparent);
}
.receiverLi{
 background: radial-gradient(rgb(250, 253, 251), transparent);
}
</style>

