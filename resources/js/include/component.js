import Vue from 'vue'

Vue.component('admin-dashboard', require('@/components/dashboard/AdminDashboard.vue').default);
Vue.component('mentor-dashboard', require('@/components/dashboard/MentorDashboard.vue').default);
Vue.component('trainee-dashboard', require('@/components/dashboard/TraineeDashboard.vue').default);
Vue.component('profile', require('@/components/profile/Profile.vue').default);
Vue.component('trainee', require('@/components/panel/Trainee.vue').default);
Vue.component('mentor', require('@/components/panel/mentor.vue').default);
Vue.component('chat-room', require('@/components/panel/ChatRoom.vue').default);
Vue.component('rating', require('@/components/panel/Rating.vue').default);
Vue.component('message', require('@/components/panel/Message.vue').default);
Vue.component('pagination', require('@comp/lib/Pagination').default);
Vue.component('footer-section', require('@comp/FooterSection').default);
Vue.component('how-we-work', require('@comp/HowWeWork').default);
Vue.component('mentor-info', require('@comp/MentorInfo').default);
Vue.component('why-us', require('@comp/WhyUs').default);
Vue.component('index', require('@comp/Index').default);
Vue.component('statistic', require('@comp/Statistic').default);