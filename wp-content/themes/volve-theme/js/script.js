document.addEventListener('DOMContentLoaded', function () {
    const burger = document.querySelector('.header__burger');
    const headerContent = document.querySelector('.header__content');
    const closeModal = document.querySelector('.header__close');
    const mobileMenu = document.querySelector('.header__nav--panel');
    const blogLink = document.querySelector('.menu-item-type-custom');
    const backToMainMenu = document.querySelector('.header__nav--panel-sub_back');

    burger.addEventListener('click', () => {
        headerContent.classList.add('active');
    });

    closeModal.addEventListener('click', () => {
        headerContent.classList.remove('active');
        mobileMenu.classList.remove('header__nav--panel-sub_opened');
    });

    blogLink.addEventListener('click', () => {
        mobileMenu.classList.add('header__nav--panel-sub_opened');
    });

    backToMainMenu.addEventListener('click', () => {
        mobileMenu.classList.remove('header__nav--panel-sub_opened');
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

    const postSwiper = new Swiper('.post-slider__slider', {
        spaceBetween: 60,
        loop: true,
        navigation: {
            nextEl: ".post-slider__slide--buttons-next",
            prevEl: ".post-slider__slide--buttons-prev"
        },
    });

    const stickyPostsSwiper = new Swiper('.blog__sticky--posts', {
        spaceBetween: 20,
        loop: true,
        slidesPerView: 1,
        navigation: {
            nextEl: ".blog__sticky--posts-buttons-next",
            prevEl: ".blog__sticky--posts-buttons-prev"
        },
    });

    const readMoreSwiper = new Swiper('.read-more__slider', {
        spaceBetween: 30,
        slidesPerView: 1,
        navigation: {
            nextEl: ".read-more__buttons--next",
            prevEl: ".read-more__buttons--prev"
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
    const privilegesSubtitle = document.querySelector('.privileges__content--subtitles-item_desktop');
    const privilegesLists = document.querySelectorAll('.privileges__content--list');

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

                privilegesSubtitle.textContent = this.textContent;
                privilegesLists.forEach(list => {
                    list.style.display = 'none';
                });

                let list = document.querySelector('.privileges__content--list[data-tab="' + index + '"]');
                list.style.display = '';
            });
        });
    });


    const pricingTabs = document.querySelectorAll('.pricing__tabs');
    const priceBlocks = document.querySelectorAll('.pricing__banner--plans-price');
    const pricingLists = document.querySelectorAll('.pricing__banner--benefits-item_result');

    pricingTabs.forEach(dropdown => {
        const selectButton = dropdown.querySelector('.pricing__tabs--select');
        const menu = dropdown.querySelector('.pricing__tabs--menu');
        const caret = dropdown.querySelector('.pricing__tabs--caret');
        const selected = dropdown.querySelector('.pricing__tabs--selected');
        const listItems = dropdown.querySelectorAll('.pricing__tabs--menu li');

        selectButton.addEventListener('click', function () {
            menu.classList.toggle('open');
            caret.classList.toggle('rotate');
        });

        listItems.forEach(item => {
            item.addEventListener('click', function () {
                listItems.forEach(el => el.classList.remove('active'));

                this.classList.add('active');
                selected.textContent = this.textContent;
                menu.classList.remove('open');
                caret.classList.remove('rotate');

                const tabValue = item.getAttribute('data-tab');

                priceBlocks.forEach(block => {
                    block.classList.remove('pricing__banner--plans-price_active');
                });

                priceBlocks.forEach(block => {
                    if (block.getAttribute('data-tab') === tabValue) {
                        block.classList.add('pricing__banner--plans-price_active');
                    }
                });

                pricingLists.forEach(list => {
                    list.classList.remove('active');
                });

                pricingLists.forEach(list => {
                    if (list.getAttribute('data-tab') === tabValue) {
                        list.classList.add('active');
                    }
                });
            });
        });
    });

    const checkWidth = () => {
        if (window.matchMedia("(min-width: 768px)").matches) {
            priceBlocks.forEach(block => {
                block.classList.add('pricing__banner--plans-price_active');
            });

            pricingLists.forEach(list => {
                list.classList.add('active');
            });
        }
    };
    checkWidth();

    let page = 1;
    const category_id = document.querySelector('.load-more').getAttribute('data-category');
    document.querySelector('.show-more__button button').addEventListener('click', function () {
        page++;
        const url = `${window.location.origin}/wp-admin/admin-ajax.php`;
        const data = new FormData();
        data.append('action', 'load_more_posts');
        data.append('page', page);
        data.append('category_id', category_id);

        let request = new Request(url, {
            method: 'POST',
            body: data
        });

        fetch(request)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(data => {
                const parser = new DOMParser();
                let htmlDocument = parser.parseFromString(data, "text/html");
                let posts = htmlDocument.querySelectorAll('.archive__content--post');
                if (posts.length < 6) {
                    document.querySelector('.show-more__button').style.display = 'none';
                }
                if (data) {
                    document.querySelector('.archive__content').innerHTML += data;
                } else {
                    document.querySelector('.show-more__button').style.display = 'none';
                }
            })
            .catch(error => {
                console.error('There has been a problem with your fetch operation:', error);
            });
    });
    window.addEventListener('load', (event) => {
        const posts = document.querySelectorAll('.archive__content--post');
        if (posts.length < 6) {
            document.querySelector('.show-more__button').style.display = 'none';
        }
    });

});