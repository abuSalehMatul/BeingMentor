<template>
  <div class="bgc-white bd bdrs-3 p-20 mB-20 mT-15">
    <div class="row">
      <div v-for="tag in tagNameArr" class="col-md-4 col-sm-4">
        <i class="badge badge-success">{{tag}}</i>
        <button class="badge badge-danger" @click.prevent="remove(tag)">&#967;</button>
      </div>
    </div>
    <div class="form-group col-md-5">
      <label>Add A Tag</label>
      <input type="text" v-model="newItem" class="form-control" />
      <button class="btn btn-sm btn-success" @click.prevent="add()">Add</button>
    </div>
    <div>
      <button class="btn btn-info col-md-12" @click.prevent="save()">Save</button>
    </div>
  </div>
</template>

<script>
import client from "@/client";
export default {
  name: "admin-tag",
  components: {},
  data() {
    return {
      tags: "",
      tagNameArr: [],
      newItem: ""
    };
  },
  mounted() {
    this.getList();
  },
  methods: {
    getList() {
      client.get(getTagRoute).then(response => {
        this.tags = response.data;
        this.tagNameArr = [];
        this.tags.forEach(element => {
          this.tagNameArr.push(element.tag);
        });
      });
    },
    save(){
        let data = new FormData();
        data.append('tags', this.tagNameArr);
        client.post(saveTagRoute, data)
        .then(response => {
            this.getList();
        });
    },
    remove(tag) {
      this.tagNameArr = _.remove(this.tagNameArr, function(n) {
        return n != tag;
      });
    },
    add() {
      this.tagNameArr.push(this.newItem);
      this.newItem = '';
    }
  }
};
</script>

