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


    const swiper = new Swiper('.experience__swiper', {
        spaceBetween: 60,
        direction: 'horizontal',
        slidesPerView: 1,
        grabCursor: true,
        freeMode: false,
        loop: true,
        mousewheel: false,
        keyboard: {
            enabled: true
        },
        navigation: {
            nextEl: ".experience__swiper--buttons-next",
            prevEl: ".experience__swiper--buttons-prev"
        },
        breakpoints: {
            655: {
                direction: 'vertical',
            },
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
    });

    const relatedSwiper = new Swiper('.related__slider', {
        spaceBetween: 60,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            650: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 3,
            },
        },
    });
});

document.querySelectorAll('.footer__navigation h4').forEach(function(header) {
    header.addEventListener('click', function() {
        this.parentNode.classList.toggle('open');
    });
});

document.querySelectorAll('.tabs__tab').forEach(tab => {
    tab.addEventListener('click', () => {
        const index = tab.dataset.tab;

        document.querySelectorAll('.tabs__tab, .tabs__content').forEach(el => {
            el.classList.remove('active');
        });

        document.querySelector(`.tabs__tab[data-tab="${index}"]`).classList.add('active');
        document.querySelector(`.tabs__content[data-tab="${index}"]`).classList.add('active');
    });
});


