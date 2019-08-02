/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

// Video controller
require('./scripts/video');
require('./scripts/scroll');

$( document ).ready(function() {
    // Output time (year) dynamically
    var date = new Date();
    var thisyear = date.getFullYear();
    $('#thisYear').text(thisyear);

    //Hide first option tag value from displaying in select element options
    // $('.firstOption').hide();




    //POSTCODE Autocomplete
    $('.postcode-autocomplete-cont').hide();
    $('.homePostCodeParent #input_postcode').on('input',function(e) {
        var postcode = $(this).val();
        $.ajax({
            url: 'api/getLocations/'+postcode,
            type: 'GET',
            headers: {
                'Authorization':  'Bearer mBu7IB6nuxh8RVzJ61f4',
            },
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            data: {},
            success: function (data) {
                // var json_obj = $.parseJSON(data);//parse JSON
                var ajaxBox = $(".homePostCodeParent .postcode-autocomplete-cont .ajax-box");
                ajaxBox.empty(); // remove old options
                //Check if we have at least one result in our data
                if(!$.isEmptyObject(data.data.result)) {
                    $.each(data.data.result, function(key, obj) { //$.parseJSON() method is needed unless chrome is throwing error.
                        ajaxBox.append("<p class='postcode-item' >"+ obj.postcode +"</p>");
                    });
                    $('.postcode-autocomplete-cont').show();
                } else {
                    alert('Invalid Postcode! Please try again.');
                }
            },
            error: function (data) {
                alert('Something went wrong! Please try again.')
            },
        });
    });

    $('.ajax-box').on('click', '.postcode-item', function(){
        var newPostcode = $(this).text();
        var parent      = $('.homePostCodeParent #input_postcode');
        var ajaxBox     = $('.postcode-autocomplete-cont .ajax-box');
        parent.val(newPostcode);
        ajaxBox.empty();
        $('.postcode-autocomplete-cont').hide();
    });
});
