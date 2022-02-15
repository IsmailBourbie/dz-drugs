/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import { createApp } from 'vue';
import router from './router'

import App from './App.vue'

import SvgIcon from "./components/SvgIcon.vue";


let drudz = createApp(App)

drudz.component('svg-icon', SvgIcon)

drudz.use(router)

drudz.mount('#app')