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
            $('.site-main .site-banner').removeClass('banner-bg');
            $('.about-title p').css('color', 'whitesmoke');

            $('.services-title p').css('color', 'whitesmoke');
            $('.services-title a').css('color', 'black');

            $('.tab-content .skill-boxes > .skill_info').css('background', 'unset')
            $('.services').css('background', 'inherit')
            $('.services > .card-body > p').addClass('dark-mode-service_p');
            $('.owl-item p').css('color', 'whitesmoke');


            $('.footer-area').removeClass('footer-bg');
            $('.footer-area').addClass('dark_mode_footer');
            $('.footer-area .social a > i').css('color', 'whitesmoke');
            $('.footer-area .social a').addClass('dark_mode_hover');

            $('form').addClass('dark-form');

        } else {

            $(document.body).removeClass('dark-mode');
            $('.site-main .site-banner').addClass('banner-bg');
            $('.about-title p').css('color', '#777777');

            $('.services-title p').css('color', '#777777');
            $('.services-title a').css('color', '#007bff');
            $('.services > .card-body > p').removeClass('dark-mode-service_p');
            $('.owl-item p').css('color', '#777777');

            $('.footer-area').addClass('footer-bg');
            $('.footer-area').removeClass('dark_mode_footer');
            $('.footer-area .social a').removeClass('dark_mode_hover');

            $('form').removeClass('dark-form');

        }
    })
    /* dark mode end */

    /* Side navigation active design */
    $('aside > ul > li').click(function (e) {
        $('aside > ul > li').removeClass('active_side_nav');
        $(e.currentTarget).addClass('active_side_nav');
    })
    /* Side navigation active design end */
    $('footer form').on('submit', function (e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
    })
});
