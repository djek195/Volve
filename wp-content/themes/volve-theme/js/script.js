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
});

document.querySelectorAll('.footer__navigation h4').forEach(function(header) {
    header.addEventListener('click', function() {
        this.parentNode.classList.toggle('open');
    });
});
