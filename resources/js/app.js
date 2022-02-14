/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import { createApp } from 'vue';
import router from './router'
import app from './App.vue'


let drudz = createApp(app)
drudz.use(router)
drudz.mount('#app')