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
        // autoplay: {
        //     delay: 3000,
        //     disableOnInteraction: false
        // },
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

const faqElements = document.querySelectorAll('.faq__content--text');
faqElements.forEach(el => {
    el.addEventListener('click', () => {
        el.classList.toggle('open');
    });
})

const dropdowns = document.querySelectorAll('.tab__dropdown');

dropdowns.forEach(dropdown => {
    const selectButton = dropdown.querySelector('.select');
    const caretIcon = dropdown.querySelector('.caret');
    const menu = dropdown.querySelector('.tab__dropdown--menu');
    const options = dropdown.querySelectorAll('.tab__dropdown--menu li');
    const selectedOption = dropdown.querySelector('.selected');

    selectButton.addEventListener('click', () => {
        menu.classList.toggle('select-clicked');
        caretIcon.classList.toggle('caret-rotate');
        menu.classList.toggle('tab__dropdown--menu-open');
    });

    options.forEach((option, index) => {
        option.addEventListener('click', () => {
            selectedOption.innerText = option.innerText;
            selectButton.classList.remove('select-clicked');
            caretIcon.classList.remove('caret-rotate');
            menu.classList.remove('tab__dropdown--menu-open');

            options.forEach(opt => {
                opt.classList.remove('active');
            });

            option.classList.add('active');

            const contentItems = document.querySelectorAll('.tab__content');
            contentItems.forEach(content => {
                content.classList.remove('active');
            });
            contentItems[index].classList.add('active');
        });
    });
});
