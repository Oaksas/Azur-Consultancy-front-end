import Vue from 'vue'
import App from './App.vue'
import VueResource from 'vue-resource'
import VueRouter from 'vue-router'
import AOS from 'aos'
import 'aos/dist/aos.css'

import Routes from './routes';



// Initialize Api
// ApiService.init();
const router =new VueRouter({
  routes:Routes,
  mode:'history'
});


Vue.use(VueResource);
Vue.use(VueRouter);
Vue.forceUpdate;






export const bus =new Vue();
new Vue({
  el: '#app',
  render: h => h(App),
  router:router,
  created () {
    AOS.init()
}
})
