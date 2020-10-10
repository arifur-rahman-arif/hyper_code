$(document).ready(function () {


    let $btns = $('.project-area .button-group button');


    $btns.click(function (e) {

        $('.project-area .button-group button').removeClass('active');
        e.target.classList.add('active');
        var containerEl = document.querySelector('.project-area .grid');
        mixitup(containerEl)
    })



    $('.project-area .button-group #btn1').trigger('click');

    $('.project-area .grid .test-popup-link').magnificPopup({
        type: 'image',
        gallery: { enabled: true }
    });


    // Owl-carousel

    $('.site-main .about-area .owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            560: {
                items: 2
            }
        }
    })

    // sticky navigation menu

    let nav_offset_top = $('.header_area').height() + 180;
    function navbarFixed() {
        if ($('.header_area').length) {
            $(window).scroll(function () {
                let scroll = $(window).scrollTop();
                if (scroll >= nav_offset_top) {
                    $('.navbar-collapse').removeClass('show');
                    $('#aside_nav').addClass('aside-nav');
                } else {
                    $('#aside_nav').removeClass('aside-nav');
                }
            })
        }
    }

    navbarFixed();

    /* Dark Mode functionality */
    $('.nav-item  #checkbox').click(function (e) {
        if ($('.nav-item > .switch > #checkbox').prop('checked') == true) {
            $(document.body).addClass('dark-mode');
            $('.site-main .site-banner').css('background-image', 'none');
            $('.about-title p').css('color', 'whitesmoke');
            $('.services-title p').css('color', 'whitesmoke');
            $('.services-title a').css('color', 'black');
            $('.tab-content .skill-boxes > .skill_info').css('background', 'unset')
            $('.services').css('background', 'inherit')
            $('.services > .card-body > p').addClass('dark-mode-service_p');
            $('.owl-item p').css('color', 'whitesmoke');

            $('.footer-area').css('background-image', 'none');
            $('.footer-area').addClass('dark_mode_footer');
            $('.footer-area .social a > i').css('color', 'whitesmoke');
            $('.footer-area .social a').addClass('dark_mode_hover');

        } else {
            $(document.body).removeClass('dark-mode');
        }
    })
});
