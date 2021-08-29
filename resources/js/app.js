require('./bootstrap');

//window.Vue = require('vue');
import Vue from 'vue'
window.axios = require('axios');

import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)


Vue.component('example-component', require('./components/exampleComponent.vue').default);
Vue.component('image-preview', require('./components/imagepreview/FeatureImage.vue').default);
Vue.component('first-image', require('./components/imagepreview/FirstImage.vue').default);
Vue.component('second-image', require('./components/imagepreview/SecondImage.vue').default);
Vue.component('category-dropdown', require('./components/CategoryDropDown.vue').default);
Vue.component('country-dropdown', require('./components/AdressDropDown.vue').default);
Vue.component('message', require('./components/Message.vue').default);
Vue.component('show-number', require('./components/ShowPhoneNumber.vue').default);
Vue.component('save-ad', require('./components/SaveAd.vue').default);

Vue.component('test', require('./components/Test.vue').default);

Vue.component('conversation', require('./components/Conversation.vue').default);


const app = new Vue({
    el: '#app',
});