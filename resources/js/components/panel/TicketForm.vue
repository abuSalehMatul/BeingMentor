<template>
  <modal :customClass="'sm'">
    <template v-slot:header>
      <h4
        class="col-md-12 col-sm-12 c-grey-900 p-20"
      >It Seems a New Issue that you want to discuss. Please Tell us About It.</h4>
    </template>
    <template v-slot:body>
      <div class="col-md-12 col-sm-12">
        <div class="form-group">
          <label>Select topic</label>
          <select class="form-control-sm" v-model="selectedKey" @change="changeOptions">
            <option v-for="key in keys">{{key}}</option>
          </select>
          <label>On Subject of ?</label>
          <select class="form-control-sm" v-model="selectedOption">
            <option v-for="option in options">{{option}}</option>
          </select>
        </div>

        <div class="form-group">
          <label>Please a short about this</label>
          <textarea class="form-control" v-model="description"></textarea>
        </div>
        <div class="form-group">
          <button class="btn btn-info" value="Submit The issue!" @click.prevent="emitData">Submit</button>
        </div>
      </div>
    </template>
  </modal>
</template>
<script>
import client from "@/client";
import modal from "@comp/lib/Modal";
import { EventBus } from "@/event-bus";

export default {
  name: "ticket-form",
  components: {
    modal
  },
  props: ['type'],
  data() {
    return {
      description: "",
      allData: "",
      keys: "",
      selectedKey: "",
      options: "",
      selectedOption: ""
    };
  },
  mounted() {
    this.getInquires();
  },
  methods: {
    getInquires() {
      client
        .get(window.location.origin + "/api/get-inquires")
        .then(response => {
          this.allData = response.data;
          this.keys = Object.keys(response.data);
          this.selectedKey = this.keys[0];
          this.options = response.data[this.selectedKey];
          this.selectedOption = this.options[0];
        });
    },
    emitData() {
      this.$emit("updateTicket", [this.description, this.selectedOption, this.type]);
    },
    changeOptions() {
      this.options = this.allData[this.selectedKey];
      this.selectedOption = this.options[0];
    }
  }
};
</script>
