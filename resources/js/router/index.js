import Home from '../pages/Home.vue'
import Drug from '../pages/Drug.vue'
import Search from '../pages/Search.vue'
import { createRouter, createWebHistory } from 'vue-router'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/drug/:slug',
    name: 'Drug',
    component: Drug,
    props: true
  },
  {
    path: '/search',
    name: 'Search',
    component: Search,
  }
]

export default createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior(to) {
    const scroll = {}
    if (to.meta.toTop) scroll.top = 0
    if (to.meta.smoothScroll) scroll.behavior = 'smooth'
    return scroll
  }
})
