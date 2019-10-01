/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// jquery imported through webpack.mix.js
// VENDOR
window.Popper = require('popper.js');
import 'webpack-jquery-ui/datepicker';                      // Jquery UI datepicker
import 'webpack-jquery-ui/css';                             // Styling for the above
import 'bootstrap';                                         // Required for bootstrap tooltips
import 'bootstrap-select';                                  // Searchable dropdowns
import 'cookieconsent';                                     // Cookie consent plugin
import '@fortawesome/fontawesome-free/js/all.min';
import './scripts/vendor/stickybits';                       // Position: sticky stuff https://www.npmjs.com/package/stickybits
import 'jquery-validation';                                 // Frontend form validation
import 'jquery-validation/dist/additional-methods.min';     // Plugin for jquery validate

// UTILITIES
import './scripts/global';                                  // Global Script used for multiple pages
import './scripts/scroll';                                  // Smooth scroll
import './scripts/postcode' ;                               // Postcode input
window.Cookies = require('./scripts/cookies');              // Cookie/compare functionality
import './scripts/gmapInit';                                // Gmaps modal
import './scripts/sticky';                                  // Make the search header sticky on scroll
// window.Vue = require('vue');                             // Vue.js

// COMPONENTS
import './components/compare';
import './components/doctor';

// Components > Basic
// import './components/basic/video';                       // Video controller TODO: reinstate video when we have one
import './components/basic/specialoffer';                   // Toggling special offer slide out
import './components/basic/range';                          // Slider for radius of proximity on search page
import './components/basic/popover';                        // Trigger bootstrap tooltip
import './components/basic/tooltip';                        // Trigger bootstrap popover
import './components/basic/modalNhs';                       // Trigger bootstrap modal
import './components/basic/modalPrivate';                   // Trigger bootstrap modal
import './components/enquiry' ;                             // Private hospital enquiry form

// PAGES
import './pages/homepage';                                  // Jquery used for the Homepage
import './pages/resultspage';                               // Jquery used for the Results Page
import './pages/faqspage';                                  // Jquery used for the FAQs Page
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

