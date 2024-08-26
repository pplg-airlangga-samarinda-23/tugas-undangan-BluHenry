document.addEventListener('DOMContentLoaded', function() {
    const corossel = document.querySelector ('.corossel');
    const images = corossel.querySelectorAll ('img');
    const prevBtn = corossel.querySelector ('.Prev');
    const nextBtn = corossel.querySelector ('.Next')
    let currentIndex = 0;

    let intervalid;

    function showImage(index) {
        images[currentIndex].classList.remove('active');
        images[index].classList.add('active');
        currentIndex = index;
    }

    function previmage() {
        let index = currentIndex - 1;
        if (index < 0) index = images.length - 1;
        showImage(index);

    }

    function nextimage() {
        let index = currentIndex + 1;
        if ( index >= images.length) index = 0;
        showImage(index);
    }

    function startAutoSlide() {
        intervalid = setInterval(nextimage, 3000);
    }



    prevBtn.addEventListener('click', function () {
        previmage();


    });

    nextBtn.addEventListener('click', function () {
        nextimage();
    });

    startAutoSlide();




});