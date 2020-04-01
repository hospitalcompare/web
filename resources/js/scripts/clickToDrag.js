
window.clickToDrag = function(selector) {
// Click and drag to scroll *********************************************************** //
    const sliders = document.querySelectorAll(selector);
    let isDown = false;
    let startX, startY;
    let scrollLeft;
    let multiplier = 1;

    sliders.forEach(slider => {
        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            startY = e.pageY - slider.offsetTop;
            scrollLeft = slider.scrollLeft;
            scrollTop = slider.scrollTop;
        });

        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;  // stop the fn from running
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const y = e.pageY - slider.offsetTop;
            const walkX = (x - startX) * multiplier;
            const walkY = (y - startY) * multiplier;
            slider.scrollLeft = scrollLeft - walkX;
            slider.scrollTop = scrollTop - walkY;
        });
    })


};

if($('.synergy-ad-list').length)
    // Init on the synergy ad list
    clickToDrag('.synergy-ad-list');

if($('.table-scroll').length)
    // Init on the synergy ad list
    clickToDrag('.table-scroll');
