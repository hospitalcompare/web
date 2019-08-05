/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('jquery');
require('./scripts/vendor/fontawesome')
require('./bootstrap');
require('./scripts/video'); // Video controller
require('./scripts/scroll'); // Smooth scroll
require('./scripts/postcode'); // Postcode input
require('./scripts/year'); // Year in footer
require('./scripts/range'); // Slider for radius of proximity on search page

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

    //COMPARE FUNCTIONALITY
    //Check if we don't have the cookie and set it to 0
    var compareBar = $('.compare-hospitals-bar');
    if (typeof Cookies.get("compareCount") === 'undefined') {
        Cookies.set("compareCount", 0, {expires: 10000});
        Cookies.set("compareHospitalsData", JSON.stringify([{}]), {expires: 10000});
    }

    var compareCount = Cookies.get('compareCount');
    var compareData = JSON.parse(Cookies.get('compareHospitalsData'));

    //Check if we need to show the Compare hospitals div
    if(compareCount > 0) {
        compareBar.show();
        //Populate the table with the given data
        for(i=1; i<=compareCount; i++) {
            var element = compareData[i];
            addHospitalToCompare(element);
        }
    } else {
        compareBar.hide();
    }

    /**
     * Adds the element to the Comparison Table
     *
     * @param element
     */
    function addHospitalToCompare(element) {
        var target = $('#compare_hospitals_table');
        var newRowContent = '<tr id="compare_hospital_id_'+element.id+'"><td>'+element.name+'</td><td>'+element.waitingTime+'</td><td>'+element.userRating+'</td><td>'+element.opCancelled+'</td><td>'+element.qualityRating+'</td><td>'+element.ffRating+'</td><td>'+element.nhsFunded+'</td><td class="remove-hospital" id="remove_id_'+element.id+'">Remove</td></tr>';
        target.append(newRowContent);
    }

    /**
     * Removes a Hospital from the Comparison Table
     * @param targetId
     */
    function removeHospitalFromCompare(targetId) {
        $(targetId).remove();
    }

    //Set the OnClick event for the Compare button
    $(document).on("click touchend", ".sortCatSection3 .compare", function () {
        //Get the Data that is already in the Cookies
        var compareCount    = parseInt(Cookies.get("compareCount"));
        var data            = JSON.parse(Cookies.get("compareHospitalsData"));

        //Load the Cookies with the data that we need for the comparison
        var elementId       = $(this).attr('id');
        var name            = $('#name_'+elementId).text();
        var waitingTime     = $('#waiting_time_'+elementId).text();
        var userRating      = $('#user_rating_'+elementId).text();
        var opCancelled     = $('#op_cancelled_'+elementId).text();
        var qualityRating   = $('#quality_rating_'+elementId).text();
        var ffRating        = $('#ff_rating_'+elementId).text();
        var nhsFunded       = $('#nhs_funded_'+elementId).text();
        var result          = $.grep(data, function(e){ return e.id == elementId; });

        //Check if there are already 3 hospitals for comparison in Cookies
        if(compareCount < 3) {
            //Check if we don't have the hospital in our comparison and add it
            if (result.length === 0) {
                var element = {
                    'id': elementId,
                    'name': name,
                    'waitingTime': waitingTime,
                    'userRating': userRating,
                    'opCancelled': opCancelled,
                    'qualityRating': qualityRating,
                    'ffRating': ffRating,
                    'nhsFunded': nhsFunded
                };
                //Add data to Cookies and send the element to populate the table
                data.push(element);
                addHospitalToCompare(element);
                compareCount = parseInt(compareCount) + 1;
            }
        }

        //Check if we have to remove the data of the element that has been clicked
        if (result.length === 1) {
            // property found, access the foo property using result[0].foo
            data = $.grep(data, function(e){
                return e.id != elementId;
            });
            compareCount = parseInt(compareCount) - 1;
            //Remove the hospital from the comparison table
            removeHospitalFromCompare('#compare_hospital_id_'+elementId);
        }

        //Reset compareCount and compareHospitalsData
        Cookies.set("compareCount", 0, -1);
        Cookies.set("compareHospitalsData", 0, -1);
        //Set them back again
        Cookies.set("compareHospitalsData", JSON.stringify(data), {expires: 10000});
        Cookies.set("compareCount", compareCount, {expires: 10000});

    });
});
