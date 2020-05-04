<template>
  <div class="bgc-white bd bdrs-3 p-20 mB-20 mT-15">
    <div class="row">
      <!-- <div class="col-md-4 col-sm-12">
        <chat-list :user_id="own_id"></chat-list>
      </div>-->
      <div class="col-md-6" v-if="ratingForm">
        <rating :type="type" :ticket_id="ticketId" :route="ratingRoute" :type_id="otherPerson.id"></rating>
      </div>
      <div class="col-md-12 col-sm-12">
        <div v-if="ticketForm == true">
          <ticket-form :type="ticketType" @updateTicket="updateTic"></ticket-form>
        </div>
        <div class="card card-default col-md-12 col-sm-12">
          <div class="card-header row">
            <div class="col-md-1">
              <img :src="otherPerson.profile_image" class="img-thumbnail rounded col-md-4" />
            </div>
            <div class="col-md-3">
              <h4 class="col-md-12">{{otherPerson.first_name}} {{otherPerson.last_name}}</h4>
            </div>
            <div class="row">
              <div v-for="ticket in tickets" class v-if="ticket.status != 'solved'">
                Issue {{ticket.barcode}}
                <i class="badge badge-info">{{ticket.status}}</i>
                <span v-if="ticket.opner_user_id == own_id">
                  <button
                    v-if="ticket.status != 'solved'"
                    @click.prevent="solveTicket(ticket.id)"
                    class="btn btn-sm btn-success"
                  >Solved !</button>
                </span>

                <h6 style="overflow: hidden;height: 40px;">{{ticket.description.substr(0, 50)}}</h6>
              </div>
            </div>
          </div>
          <div class="card-body col-md-12">
            <ul
              class="list-unstyled col-md-12"
              style="height:300px; overflow-y:scroll"
              v-chat-scroll
            >
              <li
                class="p-2 row"
                v-for="message in messageList"
                :class="selectedClass(message.sender_id)"
              >
                <div class="col-md-3">
                  <img :src="message.sender_image" class="img-fluid img-thumbnail-chat-box rounded" />

                  <b class="name">
                    {{message.sender_first_name}}
                    <i>{{message.sender_last_name}}</i>
                  </b>

                  <br />
                  <i class>Time:(GMT+00 ) {{message.time}}</i>
                </div>
                <div class="col-md-9">
                  <a v-if="message.is_video == 1" :href="message.message" target="blank">
                    <b>Join in this link for Video calling: 
                      <small> This link will expire after 1000s </small>
                    </b>
                    <br />
                    {{message.message}}
                  </a>
                  <p v-else>{{message.message}}</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-12 row">
            <textarea rows="1" class="form-control" v-model="messageText"></textarea>
          </div>
          <div class="col-md-10">
            <i class="fa fa-angle-double-right" @click="sendMessage()"></i>
            <i class="fa fa-camera-retro" @click="initialeVideo()"></i>
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
import Rating from "./Rating";
import { EventBus } from "@/event-bus";
import Echo from "laravel-echo";
export default {
  name: "chat-room",
  props: ["room_id", "own_id"],
  components: {
    ChatList,
    TicketForm,
    Rating
  },
  data() {
    return {
      messages: "",
      tickets: [],
      otherPerson: "",
      messageText: "",
      ticketForm: false,
      ratingForm: false,
      messageList: [],
      ratingRoute: "",
      ticketId: "",
      type: "",
      ticketType: "chat"
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
        if (e.message.receiver.id == this.own_id) {
          let formatedReturnMessage;
          formatedReturnMessage = {
            sender_id: e.message.sender.id,
            message: e.message.message,
            time: e.message.formated_time,
            is_file: e.message.is_file,
            is_video: e.message.is_video,
            sender_first_name: e.message.sender.first_name,
            sender_last_name: e.message.sender.last_name,
            sender_image: e.message.sender.profile_image
          };
          this.messageList.push(formatedReturnMessage);
        }
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
        this.messageList =[];
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
          is_video: value.is_video,
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
        let tem = this.messageText;
        this.messageText = "";
        client.post(sendChatRoute, data).then(response => {
          let formatedReturnMessage;
          formatedReturnMessage = {
            sender_id: this.own_id,
            message: tem,
            time: response.data.formated_time,
            is_file: typeof response.data.is_file == "undefined" ? 0 : 1,
            sender_first_name: response.data.sender.first_name,
            sender_last_name: response.data.sender.last_name,
            sender_image: response.data.sender.profile_image
          };
          this.messageList.push(formatedReturnMessage);
        });
      }
    },
    solveTicket(ticketId) {
      this.type = "App\\User";
      this.ticketId = ticketId;
      this.ratingRoute = postTicketRoute;
      this.ratingForm = true;
    },
    initialeVideo() {
      this.ticketType = "video";
      this.ticketForm = true;
    },
    updateTic(ticketData) {
      let data = new FormData();
      data.append("description", ticketData[0]);
      data.append("inquire", ticketData[1]);
      data.append("type", ticketData[2]);
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

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  height: auto;
  max-width: 68px !important;
  max-height: 60px !important;
}
.img-thumbnail-chat-box {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: 40px;
}
.messageList {
  margin: 2px;
  border: 1px solid beige;
  box-shadow: 1px 1px beige;
  font-size: 14px;
}
.name {
  padding: 1px;
}
.senderLi {
  background: radial-gradient(#dde3fd, transparent);
}
.receiverLi {
  background: radial-gradient(rgb(250, 253, 251), transparent);
}
</style>

