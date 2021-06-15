import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Login from '../views/Login';
import ProductInfo from '../views/ProductInfo';
import Check_in from '../views/Check_in';

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/catalog/:id',
    name: 'ProductInfo',
    component: ProductInfo
  },
  {
    path: '/login',
    name: 'Login',
    component: Login,
    meta: {
      layout: 'login-layout'
    }
  },
  {
    path: '/check_in',
    name: 'Check_in',
    component: Check_in,
    meta:
        {
          layout: 'login-layout'
        }
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
