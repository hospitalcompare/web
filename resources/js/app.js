/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// jquery imported through webpack.mix.js
window.Popper = require('popper.js');
require('bootstrap'); // Required for bootstrap tooltips
import '@fortawesome/fontawesome-free/js/all.min';
import './scripts/global';                                          // Site wide js
import './scripts/global';                          // Site wide scripts
import './scripts/scroll';                          // Smooth scroll
import './scripts/postcode' ;                       // Postcode input
import './scripts/enquiry' ;                        // Private hospital enquiry form
window.Cookies = require('./scripts/cookies');      // Cookie/compare functionallity
import './scripts/compare';                         // Slider for radius of proximity on search page
// window.Vue = require('vue');                        // Vue.js

// Components
import './components/basic/specialoffer';           // Toggling special offer slide out
// import './components/basic/video';                  // Video controller TODO: reinstate video when we have one
import './components/basic/range';                  // Slider for radius of proximity on search page
import './components/basic/popover';                // Trigger bootstrap tooltip
import './components/basic/tooltip';                // Trigger bootstrap popover
import './components/basic/modal';                  // Trigger bootstrap modal

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });

