<template>
  <modal :customClass="'sm'">
    <template v-slot:header>
      <h2>We are very Happy that you want to Rate !!</h2>
    </template>
    <template v-slot:body>
      <div class="row">
        <div class="col-md-6 com-sm-12 p-5">
          <img :src="getImageUrl()" class="img-fluid img-thumbnail rounded mx-auto d-block" />
        </div>
        <div class="col-md-6 col-sm-12 p-5">
          <div class="form-group">
            <i>Put your Rating Please (on a scale of 5)</i>
            <input type="number" class="form-control" v-model="rate" />
          </div>
          <div class="form-group">
            <button class="btn btn-info" @click.prevent="submitRate">Rate ...........</button>
          </div>
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
  name: "rating",
  components: {
    modal
  },
  props: ["type", "type_id", "route", "solver"],
  data() {
    return {
      rate: ""
    };
  },
  methods: {
    submitRate() {
      let data = new FormData();
      data.append("rating", this.rate);
      data.append("rateable_type", this.type);
      data.append("rateable_id", this.type_id);
      if(typeof this.solver != 'undefined'){
          data.append('solver', this.solver);
      }
      client.post(this.route, data).then(response => {
          if(response.status >= 200 && response.status < 300){
              location.reload();
          }

      });
    },
    getImageUrl() {
      return window.location.origin + "/" + "images/" + "star-rating.png";
    }
  }
};
</script>
