<template>
  <div>
    <div class="row"></div>
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
        messages: ''
    };
  },
  methods: {
    getMessage() {
      client.get(getMyMessageRoute).then(response => {
        
      });
    }
  }
};
</script>

