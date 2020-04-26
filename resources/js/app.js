require('./bootstrap');
require('./include/component');
import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)
const app = new Vue({
    el: '#app'
});