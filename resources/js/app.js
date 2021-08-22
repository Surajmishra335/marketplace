require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');

Vue.component('example-component', require('./components/exampleComponent.vue').default);
Vue.component('image-preview', require('./components/imagepreview/FeatureImage.vue').default);
Vue.component('first-image', require('./components/imagepreview/FirstImage.vue').default);
Vue.component('second-image', require('./components/imagepreview/SecondImage.vue').default);
Vue.component('category-dropdown', require('./components/CategoryDropDown.vue').default);
Vue.component('country-dropdown', require('./components/AdressDropDown.vue').default);


const app = new Vue({
    el: '#app',
});