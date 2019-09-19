
$(document).ready(function () {
    // I've added annotations to make this easier to follow along at home. Good luck learning and check out my other pens if you found this useful


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
            var vals = [0, 5, 10, 25, 50, 75, 100, 600];

            // slider.querySelector('.range-slider__value').innerHTML = `${vals[event.target.value] } Miles`;
            // 2. apply our fill to the input
            applyFill(event.target);

            // Select the ticks
            const ticks = slider.querySelectorAll('.range-label');
            console.log(ticks);
            // Remove fill and active class from the ticks
            ticks.forEach(tick => tick.classList.remove('active', 'fill'));
            ticks.forEach(tick => console.log(tick.classList));
            // Get the tick corresponding to new value
            ticks[ event.target.value - 1 ].classList.add('active');
            // For the ticks, from array position 0 to the new value (-1) apply the fill class to colout them green
            for(let i = 0; i < event.target.value; i++ ) {
                ticks[i].classList.add('fill');
            }

        });


        // Don't wait for the listener, apply it now!
        applyFill(slider.querySelector('input'));
        // fillTicks(slider.querySelector('input'));
    });

// This function applies the fill to our sliders by using a linear gradient background
    function applyFill(slider) {
        // Let's turn our value into a percentage to figure out how far it is in between the min and max of our input
        const percentage = 100*(slider.value-slider.min)/(slider.max-slider.min);
        // now we'll create a linear gradient that separates at the above point
        // Our background color will change here
        const bg = `linear-gradient(90deg, white 9.9px, ${settings.fill} 10px, ${settings.fill} ${percentage}%, ${settings.background} ${percentage+0.1}%, ${settings.background} calc(100% - 10px), white calc(100% - 9.9px))`;
        slider.style.background = bg;


    }
    function fillTicks(slider) {

    }
})
