<template>
  <div class="bgc-white bd bdrs-3 p-20 mB-20 mT-15">
    <div class="col-md-12">
      <table class="table">
        <thead v-if="user == 'matulPermission'">
          <th>Image</th>
          <th>Name</th>
          <th>Story</th>
          <th>Time</th>
          <th>Action</th>
        </thead>
        <tbody>
          <tr v-for="story in stories">
            <td style="width: 280px">
              <img
                :src="story.user.profile_image"
                class="img-fluid img-thumbnail rounded mx-auto d-block"
              />
            </td>
            <td>
              {{story.user.first_name}}
              {{story.user.last_name}}
            </td>
            <td>
              <p>{{story.story}}</p>
            </td>
            <td nowrap> <i class="fa fa-calendar"></i> {{story.formated_time}}</td>
            <td v-if="user== 'matulPermission'">
              <button
                v-if="story.status == 0"
                @click.prevent="changePublish(1, story.id)"
                class="btn btn-sm btn-success"
              >Publish</button>
              <button
                v-else
                @click.prevent="changePublish(0, story.id)"
                class="btn btn-sm btn-danger"
              >Unpublish</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import client from "@/client";
export default {
  name: "success-story",
  props: ["user"],
  components: {},
  data() {
    return {
      stories: ""
    };
  },
  mounted() {
    this.getList();
  },
  methods: {
    getList() {
      client
        .get(window.location.origin + "/api/get-success-story/" + this.user)
        .then(response => {
          this.stories = response.data;
        });
    },
    changePublish(newState, id) {
      let data = new FormData();
      data.append("new_status", newState);
      data.append("id", id);
      client
        .post(window.location.origin + "/api/change-success-status", data)
        .then(response => {
          this.getList();
        });
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
  max-width: 17%;
  height: auto;
}
.bgc-white, .bgcH-white:hover {
    background-color: #ffffff !important;
}
.p-20 {
    padding: 20px !important;
}
.mT-15 {
    margin-top: 15px !important;
}
.bd {
    border: 1px solid rgba(0, 0, 0, 0.0625) !important;
}
</style>

