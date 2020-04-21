import Vue from 'vue'

Vue.component('admin-dashboard', require('@/components/dashboard/AdminDashboard.vue').default);
Vue.component('mentor-dashboard', require('@/components/dashboard/MentorDashboard.vue').default);
Vue.component('trainee-dashboard', require('@/components/dashboard/TraineeDashboard.vue').default);
Vue.component('profile', require('@/components/profile/Profile.vue').default);