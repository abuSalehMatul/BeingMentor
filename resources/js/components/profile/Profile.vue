<template>
  <div class="bgc-white bd bdrs-3 p-20 mB-20 mT-15">
    <div class="row">
      <div class="col-md-5 col-sm-12">
        <label class>
          <b>First Name:</b>
        </label>
        <input type="text" v-model="profile.first_name" class="form-control" />
        <hr />
        <!-- <label class>
          <b>Last Name:</b>
        </label>
        <input type="text" v-model="profile.last_name" class="form-control" />-->
        <hr />
        <label class>
          <b>Email:</b>
        </label>
        <input type="text" v-model="profile.email" class="form-control" />
        <hr />
        <label class>
          <b>Address:</b>
        </label>
        <input type="text" v-model="profile.address" class="form-control" />
        <hr />
        <label class>
          <b>Mobile:</b>
        </label>
        <input type="text" v-model="profile.mobile" class="form-control" />
      </div>
      <div class="col-md-7 col-sm-12">
        <img :src="profile.profile_image" class="img-fluid img-thumbnail rounded mx-auto d-block" />
        <div class="offset-3">
          <h3>Upload a new picture</h3>
          <input type="file" @change="fileChange($event)" />
        </div>
      </div>
    </div>
    <hr />
    <br />
    <div v-if="profile.roles[0].name == 'trainee'" class="col-md-12 col-sm-12">
      <label>Title of Mine</label>
      <input type="text" v-model="profile.trainee.title" class="form-control" />
      <label>My descriptio</label>
      <textarea
        v-if="profile.trainee.description"
        v-model="profile.trainee.description"
        class="form-control"
      ></textarea>
    </div>

    <div v-if="profile.roles[0].name == 'mentor'" class="col-md-12 col-sm-12">
      <label>Title of Mine</label>
      <input type="text" v-model="profile.mentor.title" class="form-control" />
      <label>My descriptio</label>
      <textarea
        v-if="profile.mentor.description"
        v-model="profile.mentor.description"
        class="form-control"
      ></textarea>
      <div class="col-md-6">
        <label class="typo__label">Your Tags</label>
        <multiselect
          v-model="value"
          tag-placeholder="Add this as new tag"
          placeholder="Search or add a tag"
          label="name"
          track-by="name"
          :options="options"
          :multiple="true"
          :taggable="true"
          @tag="addTag"
        ></multiselect>
      </div>
    </div>

    <br />
    <div class="col-md-12">
      <button class="btn btn-success" @click="update()">Save</button>
    </div>
  </div>
</template>

<script>
import client from "@/client";
import Multiselect from "vue-multiselect";
export default {
  name: "profile",
  components: { Multiselect },
  data() {
    return {
      profile: "",
      image: "",
      title: "",
      allTags: "",
      userTags: "",
      value: [],
      options: []
    };
  },
  mounted() {
    this.getProfile();
  },
  methods: {
    addTag(newTag) {
      const tag = {
        name: newTag,
        code: newTag.substring(0, 2) + Math.floor(Math.random() * 10000000)
      };
      this.options.push(tag);
      this.value.push(tag);
    },
    getProfile() {
      client.get(getProfileRoute).then(response => {
        this.profile = response.data.data;
        if (this.profile.roles[0].name == "mentor") {
          this.allTags = response.data.all_tags;
          this.userTags = response.data.user_tags;
          this.processTags();
        }
      });
    },
    processTags() {
      this.userTags.forEach(element => {
        this.value.push({ name: element });
      });
      this.allTags.forEach(element => {
        this.options.push({ name: element });
      });
    },
    fileChange(event) {
      if (!_.isEmpty(event.target.files) && event.target.files.length > 0) {
        this.image = event.target.files[0];
      }
    },
    update() {
      client
        .post(updateProfileRoute, this.formatProfileData())
        .then(response => {
          if (response.status == 200) {
            this.getProfile();
            alert("update successfull");
          } else {
            alert(
              "something went wrong. plese check your input data and try again"
            );
          }
        });
    },
    formatProfileData() {
      let self = this;
      let data = new FormData();
      data.append("first_name", self.profile.first_name);
      data.append("last_name", self.profile.last_name);
      data.append("mobile", self.profile.mobile);
      data.append("address", self.profile.address);
      data.append("email", self.profile.email);
      if (self.profile.roles[0].name == "trainee") {
        data.append("title", self.profile.trainee.title);
        data.append("description", self.profile.trainee.description);
      }
      if (self.profile.roles[0].name == "mentor") {
        let selectedTag = [];
        data.append("title", self.profile.mentor.title);
        data.append("description", self.profile.mentor.description);
        self.value.forEach(element => {
          selectedTag.push(element["name"]);
        });
        data.append("tags", selectedTag);
      }
      data.append("image", self.image);
      return data;
    }
  }
};
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

