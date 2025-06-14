// Initialize Swiper slider if present
window.addEventListener('DOMContentLoaded', function () {
    var slider = document.querySelector('.swiper');
    if (slider && typeof Swiper !== 'undefined') {
        new Swiper(slider, {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });
    }

    // Mobile navigation toggle
    var toggle = document.querySelector('.menu-toggle');
    var menu = document.querySelector('#primary-menu');
    if (toggle && menu) {
        toggle.addEventListener('click', function () {
            menu.classList.toggle('toggled');
            this.classList.toggle('active');
        });

        // Close the menu after a navigation link is clicked
        var links = menu.querySelectorAll('a');
        links.forEach(function (link) {
            link.addEventListener('click', function () {
                if (menu.classList.contains('toggled')) {
                    menu.classList.remove('toggled');
                    toggle.classList.remove('active');
                }
            });
        });
    }
});
