<template>
  <div>
    <div class="row"></div>
  </div>
</template>

<script>
import client from "@/client";
export default {
  name: "profile",
  components: {},
  data() {
    return {
      profile: ""
    };
  },
  mounted() {
    this.getProfile();
  },
    methods: {
    getProfile() {
        client.get(getProfileRoute).then(response => {
            this.profile = response.data;
      });
    },
  },
};
</script>

