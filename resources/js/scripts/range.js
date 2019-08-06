
$(document).ready(function () {

// Custom controls for animal sound players
    const rangeParents = document.querySelectorAll('.rangeParent');

    if (rangeParents.length >= 1) {

        Array.from(rangeParents).forEach(function (rangeParent) {

            const range = rangeParent.querySelector('.radiusRange');

            // Build functions

            function handleRangeChange() {

                let currentValue = rangeParent.querySelector('.radiusRange').value;
                rangeParent.querySelector('.currentRadius').innerText = `Max: ${currentValue} Miles`;
            }

            // On page load, add the current radius
            handleRangeChange();

            // Hook up event listeners
            // sliders
            range.addEventListener('change', handleRangeChange);

            // // progress bar
            // let mousedown = false
            // progress.addEventListener('click', scrub)
            // progress.addEventListener('mousemove', function (e) {
            //     if (mousedown) {
            //         scrub(e)
            //     }
            // })
            // progress.addEventListener('mousedown', function () {
            //     mousedown = true
            // })
            // progress.addEventListener('mouseup', function () {
            //     mousedown = false
            // })
        })
    }
})
