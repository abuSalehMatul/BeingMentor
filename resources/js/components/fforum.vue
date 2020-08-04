<template style="background:white">
  <div class="et_pb_section et_pb_section_3 et_section_regular et_pb_bottom_divider">
    <main style="background:white;margin-top:20px">
      <div class="container">
        <div class="nav">
          <div class="nav__thread">
            <a :href="(question.id - 1)" class="nav__thread-btn nav__thread-btn--prev">
              <i class="icon-Arrow_Left"></i>Previous
            </a>
            <a :href="parseInt(question.id + 1)" class="nav__thread-btn nav__thread-btn--next">
              Next
              <i class="icon-Arrow_Right"></i>
            </a>
          </div>
        </div>

        <div v-bind:style="styleObject">
          <div class="topics__heading-title">{{question.question}}</div>
          <div class="col-md-12 col-sm-12 p-5">
            <div class="form-group">
              <i></i>
              <textarea class="form-control" rows="10" cols="100" v-model="answer">Please Write your answer </textarea>
            </div>
            <div class="form-group">
              <button
                class="create__btn-create btn btn--type-02"
                @click.prevent="submitAns"
              >Submit ...........</button>
            </div>
          </div>
        </div>

        <div class="topics">
          <div class="topics__heading">
            <h2 class="topics__heading-title">{{question.title}}</h2>
            <div class="topics__heading-info">
              <a href="#" class="category">
                <i class="bg-3ebafa"></i>
                {{question.ticket != null ? question.ticket.inquire: '' }}
              </a>
              <div class="tags">
                <a href="#" class="bg-4f80b0">{{question.tag}}</a>
              </div>
              <i
                class="fa fa-paper-plane"
                style="cursor:pointer"
                @click="giveAns(question.id, question.question)"
              >Give Answer</i>
            </div>
          </div>
          <div class="topics__body">
            <div class="topics__content">
              <div class="topic">
                <div class="topic__head">
                  <div class="topic__avatar">
                    <a href="#" class="avatar">
                      <img :src="question.user.profile_image" alt="avatar" />
                    </a>
                  </div>
                  <div class="topic__caption">
                    <div class="topic__name">
                      <a href="#">{{question.user.first_name}}</a>
                    </div>
                    <div class="topic__date">
                      <i class="icon-Watch_Later"></i>
                      {{question.formated_time}}
                    </div>
                  </div>
                </div>
                <div class="topic__content">
                  <div class="topic__text">
                    <p>{{question.question}}</p>
                  </div>
                  <div class="topic__footer">
                    <div class="topic__footer-likes"></div>
                  </div>
                </div>
              </div>

              <div class="topic topic--comment" v-for="answer in question.answers">
                <div class="topic__head">
                  <div class="topic__avatar">
                    <a href="#" class="avatar">
                      <img :src="answer.user.profile_image" alt="avatar" />
                    </a>
                  </div>
                  <div class="topic__caption">
                    <div class="topic__name">
                      <a href="#">{{answer.user.first_name}}</a>
                    </div>
                    <div class="topic__date">
                      <i class="icon-Watch_Later"></i>
                      {{answer.formated_time}}
                    </div>
                  </div>
                </div>
                <div class="topic__content">
                  <div class="topic__text">
                    <p>{{answer.answer}}</p>
                  </div>
                  <div class="topic__footer">
                    <div class="topic__footer-likes">
                      <div>
                        <a href="#">
                          <i class="fa fa-thumbs-up"></i>
                        </a>
                        <span>{{getUpVoteCount(answer.vote)}}</span>
                      </div>
                      <div>
                        <a href="#">
                          <i class="fa fa-thumbs-down"></i>
                        </a>
                        <span>{{getDownVoteCount(answer.vote)}}</span>
                      </div>
                      <div>
                        <a href="#">
                          <i class="fas fa-check" v-if="answer.is_solver == 1">Solved!!</i>
                          <i
                            style="postion:relative;left:80%"
                            v-else
                            @click.prevent="markCorrect(answer.id, question.id)"
                          >Mark corerct</i>
                        </a>
                      </div>
                      <div
                        @click="vote(1, answer.id, question.id)"
                        style="position:relative;left:60%;cursor:pointer; color:green"
                      >
                        <i class="fas fa-chevron-up">Up-vote</i>
                      </div>
                      <div
                        @click="vote(0, answer.id, question.id)"
                        style="position:relative;left:70%;cursor:pointer; color:red"
                      >
                        <i class="fas fa-chevron-down">Down-vote</i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>

<script>
import client from "@/client";
import Answer from "@comp/panel/Answer";
export default {
  name: "fforum",
  props: ["question"],
  components: { Answer },
  data() {
    return {
      showAns: false,
      answer: ""
    };
  },
  computed: {
    styleObject() {
      return this.showAns == true ? "display:block" : "display:none";
    }
  },
  mounted() {},
  methods: {
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
    vote(vote, answerId, questionId) {
      if (confirm("Sure?")) {
        this.giveVote(answerId, questionId, vote);
      }
    },
    giveAns(qId, q) {
      this.selectedQuestion = q;
      this.selectedQuestionId = qId;
      this.showAns = !this.showAns;
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
    submitAns() {
      let data = new FormData();
      data.append("question_id", this.question.id);
      data.append("answer", this.answer);
      client
        .post(window.location.origin + "/api/save-answer", data)
        .then(response => {
          if (response.status >= 200 && response.status < 300) {
            location.reload();
          }
        });
    }
  }
};
</script>

<style scoped>
</style>



