import './bootstrap';

import { createApp } from 'vue'
import Welcome from './vue.vue'

const app = createApp({})

app.component('welcome', Welcome)

app.mount('#app')