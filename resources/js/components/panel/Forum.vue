<template>
  <div>
    <div class="col-md-12">
      <h2>Forum</h2>
    </div>
    <div style="padding:15px" class="row">
      <div class="col-md-6 mB-10 col-sm-6 form-group">
        <input type="date" v-model="dateRange.fromDate" @change="dateFilter" />
        To
        <input type="date" v-model="dateRange.toDate" @change="dateFilter" />
      </div>
      <div class="col-md-6 col-sm6 form-group mb-10">
        <select v-model="selectedTag" class="form-control-sm" @change="dateFilter">
          <option :value="'all'">All</option>
          <option v-for="tag in tags" :value="tag">{{tag}}</option>
        </select>
      </div>
    </div>
    <answer v-if="showAns" :question_id="selectedQuestionId" :question="selectedQuestion"></answer>
    <div class="card content">
      <div v-for="question in questions" class="row" style="padding:15px; margin: 5px">
        <div class="col-md-4">
          <img :src="question.user.profile_image" class="img-fluid img-thumbnail rounded" />
          <b>{{question.user.first_name}} {{question.user.last_name}}</b>
        </div>
        <div class="col-md-2">
          Status:
          <i v-if="question.is_solved == 1" class="badge badge-success">Solved</i>
          <i v-else class="badge badge-warning">Not solved yet</i>
        </div>
        <div class="col-md-2">
          Tag:
          <i class="badge badge-info">{{question.tag}}</i>
        </div>
        <div class="col-md-3">
          Date:
          <i class="fa fa-calendar">{{question.formated_time}}</i>
          <div v-if="user == 'matulPermission'">
            Status:
            <i v-if="question.status == 1" class="badge badge-success">Active</i>
            <i v-else class="badge badge-danger">Deactivated</i>

            <button
              @click.prevent="chageStatus(question.id, 0)"
              v-if="question.status == 1"
              class="btn btn-sm btn-danger"
            >Deactivate it!</button>

            <button
              @click.prevent="chageStatus(question.id, 1)"
              v-else
              class="btn btn-sm btn-success"
            >Activate it!</button>
          </div>
        </div>
        <div class="col-md-12" style="margin:5px">
          <b>
            <i class="badge badge-secondary">QUESTION</i>
          </b>
          <i
            class="fa fa-plus-circle see-answer"
            @click="show(question.id)"
          >See Answers ({{Object.keys(question.answers).length}})</i>
          <i
            class="fa fa-paper-plane"
            style="cursor:pointer"
            @click="giveAns(question.id, question.question)"
          >Give Answer</i>
          <p class>
            <b style="display:block">{{question.title}}</b>
            {{question.question}}
          </p>
        </div>
        <div class="col-md-12 answer" :id="question.id+'answer'" style="display:none">
          <h5>Answers ({{Object.keys(question.answers).length}})</h5>
          <div v-for="answer in question.answers" class="row">
            <div class="col-md-1 vote">
              <i
                class="fa fa-caret-up col-md-12"
                @click="giveVote(answer.id, question.id, 1)"
                style="font-size:45px; color:#51d60a; cursor:pointer"
              ></i>
              <i
                class="fa fa-caret-down col-md-12"
                @click="giveVote(answer.id, question.id, 0)"
                style="font-size:45px; color:#ef0b7a; cursor:pointer"
              ></i>
            </div>
            <div class="col-md-11">
              <div class="col-md-4">
                <img :src="answer.user.profile_image" class="img-fluid img-thumbnail rounded" />
                <i>{{answer.user.first_name}} {{answer.user.last_name}}</i>
                <i
                  class="fa fa-thumbs-up offset-1"
                  style="color:#51d60a"
                >{{getUpVoteCount(answer.vote)}}</i>
                <i class="fa fa-thumbs-down" style="color:#ef0b7a">{{getDownVoteCount(answer.vote)}}</i>
              </div>
              <div class="col-md-12">
                {{answer.answer}}
                <i
                  v-if="answer.is_solver == 1"
                  class="badge badge-success"
                >this answer is marked solved by the questioner</i>
                <h6 style="color:blue;cursor: pointer;">
                  <i
                    v-if="answer.is_solver == 0"
                    @click="markCorrect(answer.id, question.id)"
                    class="fa fa-check-circle"
                  >
                    Mark this corerct
                    <small>(Only the questioner can do it)</small>
                  </i>
                </h6>
              </div>
            </div>
          </div>
        </div>
        <br />
      </div>

      <pagination
        class="display-inline"
        @current="syncPageWithPaginate($event)"
        :total="meta.total"
        :perPage="parseInt(meta.per_page)"
        :currentPage="meta.current"
      ></pagination>
    </div>
  </div>
</template>

<script>
import client from "@/client";
import Pagination from "@comp/lib/Pagination";
import Answer from "./Answer";
export default {
  name: "forum",
  props: ["user"],
  components: {
    Pagination,
    Answer
  },
  data() {
    return {
      dateRange: {
        fromDate: "",
        toDate: new Date().toISOString().substr(0, 10)
      },
      meta: {
        per_page: 10,
        current: 1,
        total: 0
      },
      tags: "",
      showAns: false,
      selectedTag: "all",
      questions: "",
      selectedQuestion: "",
      selectedQuestionId: ""
    };
  },
  mounted() {
    this.setFromDate();
    this.getTags();
    this.getList();
  },
  methods: {
    giveAns(qId, q) {
      this.selectedQuestion = q;
      this.selectedQuestionId = qId;
      this.showAns = true;
    },
    setFromDate() {
      let currentDate = new Date();
      currentDate.setMonth(currentDate.getMonth() - 1);
      this.dateRange.fromDate = currentDate.toISOString().substr(0, 10);
    },
    dateFilter() {
      this.getList();
    },
    getTags() {
      client.get(window.location.origin + "/api/get-tags").then(response => {
        this.tags = response.data;
      });
    },
    syncPageWithPaginate($event) {
      this.meta.current = $event;
      this.getList();
    },
    getList() {
      client
        .get(
          window.location.origin +
            "/api/get-forum/" +
            this.user +
            "?fromDate=" +
            this.dateRange.fromDate +
            "&toDate=" +
            this.dateRange.toDate +
            "&page=" +
            this.meta.current +
            "&tag=" +
            this.selectedTag
        )
        .then(response => {
          this.questions = response.data.data;
          this.meta.per_page = response.data.per_page;
          this.meta.total = response.data.total;
        });
    },
    getUpVoteCount(vote) {
      if (Object.keys(vote).length == 0) return 0;
      let upVote = 0;
      vote.forEach(element => {
        if (element.vote == 1) upVote++;
      });
      return upVote;
    },
    getDownVoteCount(vote) {
      if (Object.keys(vote).length == 0) return 0;
      let downVote = 0;
      vote.forEach(element => {
        if (element.vote == 0) downVote++;
      });
      return downVote;
    },
    giveVote(answerId, questionId, vote) {
      let data = new FormData();
      data.append("question_id", questionId);
      data.append("answer_id", answerId);
      data.append("vote", vote);
      client
        .post(window.location.origin + "/api/give-vote", data)
        .then(response => {
          alert(response.data);
        });
    },
    show(qId) {
      let element = document.getElementById(qId + "answer");
      element.style.display == "block"
        ? (element.style.display = "none")
        : (element.style.display = "block");
    },
    markCorrect(answerId, questionId) {
      let data = new FormData();
      data.append("question_id", questionId);
      data.append("answer_id", answerId);
      client
        .post(window.location.origin + "/api/mark-correct", data)
        .then(response => {
          alert(response.data);
        });
    },
    chageStatus(questionId, status) {
      let data = new FormData();
      data.append("question_id", questionId);
      data.append("status", status);
      client
        .post(window.location.origin + "/api/change-question-status", data)
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
  background-color: #f8fafc;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 13%;
  height: auto;
}
.card{
  background-image: url("/images/bg.png");
  background-position: 50% 0;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  font-weight: 700;
}
.answer {
  border: 1px dotted black;
  padding: 10px;
  color: #48494f;
  background: #ededed;
}
.vote {
  position: relative;
  top: -21px;
  left: 20px;
  cursor: pointer;
}
.see-answer {
  color: #1094ed;
  cursor: pointer;
  margin: 5px;
}
.content {
  /* background-image: url("/images/used_logo_or.png"); */
}
</style>
