import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/crops',
      name: 'Crops',     
      component: () => import('../views/crops/CropView.vue')
    },
    {
      path: '/services',
      name: 'Services',     
      component: () => import('../views/ServiceView.vue')
    },
    {
      path: '/contact',
      name: 'Contact',
      component: () => import('../views/ContactView.vue')
    },
    {
      path: '/products',
      name: 'Products',
      component: () => import('../views/ProductsView.vue')
    },
    {
      path: '/addCrop',
      name: 'addCrop',
      component: () => import('../views/crops/AddCrop.vue')
    },
    {
      path: '/crop/:id/edit',
      name: 'editcrop',

      component: () => import('../views/crops/EditCrop.vue')
    },
    {
      path: '/login',
      name: 'login',

      component: () => import('../views/auth/Login.vue')
    },
    {
      path: '/register',
      name: 'register',

      component: () => import('../views/auth/Register.vue')
    }
  ]
})

export default router
