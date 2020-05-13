<template>
  <modal :customClass="'sm'">
    
    <template v-slot:body>
        <div  class="rh-body">
        <div class="col-md-12 com-sm-12 p-5">
                {{question}}
        </div>
        <div class="col-md-12 col-sm-12 p-5">
          <div class="form-group">
            <i>Please Write your answer</i>
            <textarea class="form-control" v-model="answer"> </textarea>
          </div>
          <div class="form-group">
            <button class="btn btn-info" @click.prevent="submitAns">Submit ...........</button>
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
  name: "answer",
  components: {
    modal
  },
  props: ["question", "question_id"],
  data() {
    return {
      answer: ""
    };
  },
  methods: {
    submitAns() {
      let data = new FormData();
      data.append("question_id", this.question_id);
      data.append("answer", this.answer);
      client.post(window.location.origin + "/api/save-answer", data).then(response => {
          if(response.status >= 200 && response.status < 300){
              location.reload();
          }

      });
    },
  }
};
</script>
<style scoped>
.rh-body{
    background: #3644AF;
    color: white;
}
</style>
