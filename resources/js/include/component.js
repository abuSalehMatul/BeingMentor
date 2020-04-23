import Vue from 'vue'

Vue.component('admin-dashboard', require('@/components/dashboard/AdminDashboard.vue').default);
Vue.component('mentor-dashboard', require('@/components/dashboard/MentorDashboard.vue').default);
Vue.component('trainee-dashboard', require('@/components/dashboard/TraineeDashboard.vue').default);
Vue.component('profile', require('@/components/profile/Profile.vue').default);
Vue.component('trainee', require('@/components/panel/trainee.vue').default);
Vue.component('mentor', require('@/components/panel/mentor.vue').default);
Vue.component('pagination', require('@comp/lib/Pagination').default);
Vue.component('footer-section', require('@comp/FooterSection').default);
Vue.component('how-we-work', require('@comp/HowWeWork').default);
Vue.component('why-us', require('@comp/WhyUs').default);
Vue.component('index', require('@comp/Index').default);