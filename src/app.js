import App from './components/App.vue';
import Vue from 'vue';
import router from './router'
import VueResource from 'vue-resource'

Vue.use(VueResource);

export default new Vue({
  router,
  render: h => h(App)
});
