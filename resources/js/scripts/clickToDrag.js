
window.clickToDrag = function(selector) {
// Click and drag to scroll *********************************************************** //
    const slider = document.querySelector(selector);
    let isDown = false;
    let startX;
    let scrollLeft;
    let multiplier = 1;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
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
        const walk = (x - startX) * multiplier;
        slider.scrollLeft = scrollLeft - walk;
    });
};

if($('.synergy-ad-list').length)
    // Init on the synergy ad list
    clickToDrag('.synergy-ad-list');
