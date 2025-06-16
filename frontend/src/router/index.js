import { createRouter, createWebHistory } from 'vue-router'

import UserTopPage from '../views/User/TopPage.vue'
import AdminDashboard from '../views/Admin/Dashboard.vue'

const routes = [
  {
    path: '/',
    name: 'user-top',
    component: UserTopPage
  },
  {
    path: '/admin/dashboard',
    name: 'admin-dashboard',
    component: AdminDashboard
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
