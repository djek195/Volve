document.addEventListener('DOMContentLoaded', function() {
    const burger = document.querySelector('.header__burger');
    const headerContent = document.querySelector('.header__content');
    const closeModal = document.querySelector('.header__close');

    burger.addEventListener('click', function() {
        headerContent.classList.add('active');
    });

    closeModal.addEventListener('click', function() {
        headerContent.classList.remove('active');
    });


    const swiper = new Swiper(".swiper-slider", {
        centeredSlides: true,
        slidesPerView: 1,
        grabCursor: true,
        freeMode: false,
        loop: true,
        mousewheel: false,
        keyboard: {
            enabled: true
        },

        // Enabled autoplay mode
        // autoplay: {
        //     delay: 3000,
        //     disableOnInteraction: false
        // },


        // If we need navigation
        navigation: {
            nextEl: ".swiper__buttons--next",
            prevEl: ".swiper__buttons--prev"
        },
    });

});

document.querySelectorAll('.footer__navigation h4').forEach(function(header) {
    header.addEventListener('click', function() {
        this.parentNode.classList.toggle('open');
    });
});

