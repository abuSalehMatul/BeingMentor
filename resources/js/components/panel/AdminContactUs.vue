<template>
  <div class="bgc-white bd bdrs-3 p-20 mB-20 mT-15">
    <div class="row">
      <button class="btn btn-sm btn-success" @click.prevent="setStatus('solved')">Only Solved</button>
      <button class="btn btn-sm btn-info" @click.prevent="setStatus('pending')">Only Pending</button>
      <button class="btn btn-sm btn-danger" @click.prevent="setStatus('canceled')">Only Canceled</button>
    </div>
    <div class="row">
      <table class="table table-bordered">
        <thead>
          <th>Name</th>
          <th>Email</th>
          <th>Message</th>
          <th>Status</th>
          <th>Action</th>
        </thead>
        <tbody>
          <tr v-for="contact in contactUss" v-if="contact.status == currentStatus">
            <td>{{contact.name}}</td>
            <td>{{contact.email}}</td>
            <td>{{contact.message}}</td>
            <td>
              <i class="badge badge-info">{{contact.status}}</i>
            </td>
            <td>
              <button class="btn btn-sm btn-success" @click.prevent="changeStatus(contact.id, 'solved')" v-if="contact.status != 'solved'">It solved</button>
              <button class="btn btn-sm btn-info" @click.prevent="changeStatus(contact.id, 'pending')" v-if="contact.status != 'pending'">It Pending</button>
              <button class="btn btn-sm btn-danger" @click.prevent="changeStatus(contact.id, 'canceled')" v-if="contact.status != 'canceled'">It Canceled</button>
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
  name: "admin-contact-us",
  components: {},
  data() {
    return {
      contactUss: "",
      currentStatus: "pending"
    };
  },
  mounted() {
    this.getList();
  },
  methods: {
    getList() {
      client.get(getContactUsRoute).then(response => {
        this.contactUss = response.data;
      });
    },
    setStatus(status) {
      this.currentStatus = status;
    },
    changeStatus(id, status){
      let data = new FormData();
      data.append("id", id);
      data.append("status", status);
      client.post(changeStatusRoute, data).then(response => {
        this.getList();
      });
      
    }
  }
};
</script>

