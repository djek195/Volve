document.addEventListener('DOMContentLoaded', function () {
    const burger = document.querySelector('.header__burger');
    const headerContent = document.querySelector('.header__content');
    const closeModal = document.querySelector('.header__close');

    burger.addEventListener('click', function () {
        headerContent.classList.add('active');
    });

    closeModal.addEventListener('click', function () {
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
            nextEl: ".related__slide--buttons-next",
            prevEl: ".related__slide--buttons-prev"
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

    const stickyPostsSwiper = new Swiper('.blog__sticky--posts', {
        spaceBetween: 20,
        loop: true,
        // direction: 'horizontal',
        slidesPerView: 1,
        navigation: {
            nextEl: ".blog__sticky--posts-buttons-next",
            prevEl: ".blog__sticky--posts-buttons-prev"
        },
    });

    const readMoreSwiper = new Swiper('.read-more__slider', {
        spaceBetween: 30,
        loop: true,
        slidesPerView: 1,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            650: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 4,
            },
        },
    });

    const categoriesSwipers = document.querySelectorAll('.categories__category');

    categoriesSwipers.forEach((swiper, index) => {
        new Swiper(swiper, {
            spaceBetween: 30,
            loop: false,
            slidesPerView: 1,
            navigation: {
                nextEl: `.categories__buttons-next-${index}`,
                prevEl: `.categories__buttons-prev-${index}`
            },
            breakpoints: {
                650: {
                    slidesPerView: 2,
                },
                991: {
                    slidesPerView: 4,
                },
            },
        });
    });
});

document.querySelectorAll('.footer__navigation h4').forEach(function (header) {
    header.addEventListener('click', function () {
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

const privilegesDropdowns = document.querySelectorAll('.privileges__tabs');

privilegesDropdowns.forEach(dropdown => {
    const selectButton = dropdown.querySelector('.privileges__tabs--select');
    const menu = dropdown.querySelector('.privileges__tabs--menu');
    const caret = dropdown.querySelector('.privileges__tabs--caret');
    const selected = dropdown.querySelector('.privileges__tabs--selected');
    const listItems = dropdown.querySelectorAll('.privileges__tabs--menu li');

    selectButton.addEventListener('click', function () {
        menu.classList.toggle('open');
        caret.classList.toggle('rotate');
    });

    listItems.forEach((item, index) => {
        item.addEventListener('click', function () {
            listItems.forEach(el => el.classList.remove('active'));
            this.classList.add('active');
            selected.textContent = this.textContent;
            menu.classList.remove('open');
            caret.classList.remove('rotate');
        });
    });
});



let page = 1; // keep track of current page

document.querySelector('.archive__button button').addEventListener('click', function () {
    page++; // increment page count
    fetch(`${window.location.origin}/wp-admin/admin-ajax.php?action=load_more_posts&page=${page}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            if (data) {
                document.querySelector('.archive__content').innerHTML += data;
            } else {
                // hide the load more button if there are no more posts
                document.querySelector('.archive__button').style.display = 'none';
            }
        })
        .catch(error => {
            console.error('There has been a problem with your fetch operation:', error);
        });
});