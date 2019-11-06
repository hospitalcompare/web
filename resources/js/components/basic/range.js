// Handle the dynamic changes for the radius range input
// Possible alternative methodology: https://codepen.io/sgestrella/pen/rPWOKv https://css-tricks.com/custom-interactive-range-inputs/
$(document).ready(function () {
    // Get the value of the width of the range handle
    var rangeHandleSize = getComputedStyle(document.documentElement)
        .getPropertyValue('--range-handle-size');

    // Divide the range handle size by two to get the spacing value
    var rangeSpacing = (parseInt(rangeHandleSize.replace(/px/,"")) / 2);
    // var rangeSpacing = parseInt(rangeHandleSize) / 2;

// First let's set the colors of our sliders
    const settings = {
        fill: '#00cecd',
        background: '#ebebeb'
    };

// First find all our sliders
    const sliders = document.querySelectorAll('.range-slider');

// Iterate through that list of sliders
// ... this call goes through our array of sliders [slider1,slider2,slider3] and inserts them one-by-one into the code block below with the variable name (slider). We can then access each of them by calling slider
    Array.prototype.forEach.call(sliders,(slider) => {
        // Look inside our slider for our input add an event listener
//   ... the input inside addEventListener() is looking for the input action, we could change it to something like change
        slider.querySelector('input').addEventListener('input', (event) => {
            // 1. apply our value to the span
            var vals = [0, 5, 10, 25, 50, 100, 200, 600];

            // slider.querySelector('.range-slider__value').innerHTML = `${vals[event.target.value] } Miles`;
            // 2. apply our fill to the input
            applyFill(event.target);
            fillTicks(event.target);
        });

        // Apply fills on pageload
        applyFill(slider.querySelector('input'));
        fillTicks(slider.querySelector('input'));
    });

// This function applies the fill to our sliders by using a linear gradient background
    function applyFill(slider) {
        // Let's turn our value into a percentage to figure out how far it is in between the min and max of our input
        const percentage = 100*(slider.value-slider.min)/(slider.max-slider.min);
        // now we'll create a linear gradient that separates at the above point
        // Our background color will change here
        const bg = `linear-gradient(
                    90deg, white ${rangeSpacing - 1}px, 
                    ${settings.fill} ${rangeSpacing}px, 
                    ${settings.fill} ${percentage}%, 
                    ${settings.background} ${percentage+0.1}%, 
                    ${settings.background} calc(100% - ${rangeSpacing}px), 
                    white calc(100% - ${rangeSpacing - 1 }px))`;
        slider.style.background = bg;
    }

    // This function applies the 'active' colour to ticks up to the new range value
    function fillTicks(input) {
        // Select the ticks
        let ticks = input.parentElement.querySelectorAll('.range-label');
        // Convert from Nodelist to array
        ticks = Array.from(ticks);
        // ticks.forEach(tick => {
        //     console.log(tick.classList);
        // });
        // console.log(ticks);
        // Remove fill and active class from the ticks
        ticks.forEach(tick => tick.classList.remove('active', 'fill'));
        // Get the tick corresponding to new value
        ticks[ input.value - 1 ].classList.add('active');
        // For the ticks, from array position 0 to the new value (-1) apply the fill class to colour them green
        for(let i = 0; i < input.value; i++ ) {
            ticks[i].classList.add('fill');
        }
    }
});
