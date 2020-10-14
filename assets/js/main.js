$(document).ready(function() {

    /* main navigation menu active functionality */
    $('.header_area .navbar-nav > li:not(.dark_mode_toggler)').on('click', function(e) {
        $('.header_area .navbar-nav > li:not(.dark_mode_toggler)').removeClass('active');
        $(e.currentTarget).addClass('active');
    })

    /* project area buttons active link functionality */
    let $btns = $('.project-area .button-group button');
    $btns.click(function(e) {

        $('.project-area .button-group button').removeClass('active');
        e.target.classList.add('active');
        var containerEl = document.querySelector('.project-area .grid');
        mixitup(containerEl)
    })
    $('.project-area .button-group #btn1').trigger('click');

    $('.project-area .grid .img img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
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
            $(window).scroll(function() {
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
    $('.nav-item  #checkbox').click(function(e) {
        if ($('.nav-item > .switch > #checkbox').prop('checked') == true) {
            sendDark_mode_session('dark_mode', $(e.currentTarget).attr('data-url'));
        } else {
            sendDark_mode_session('normal_mode', $(e.currentTarget).attr('data-url'));
        }
    })

    function sendDark_mode_session(mode, url) {
        $.ajax({
            url: url + '/session.php',
            data: {
                mode
            },
            type: 'post',
            success: function(res) {
                console.log(res);
                if (res == 'on') {
                    $(document.body).addClass('dark-mode');
                    dark_mode();
                }
                if (res == 'off') {
                    $(document.body).removeClass('dark-mode');
                    normal_mode();
                }
            }
        })
    }
    if ($(document.body).attr('class') == 'dark-mode') {
        dark_mode()
    } else {
        normal_mode();
    }

    function dark_mode() {

        $('.site-main .site-banner').removeClass('banner-bg');
        $('.about-title p').css('color', 'whitesmoke');
        $('.about-area .text-anim_container > span').css('color', 'whitesmoke');

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
    }

    function normal_mode() {
        $('.site-main .site-banner').addClass('banner-bg');
        $('.about-title p').css('color', '#777777');
        $('.about-area .text-anim_container > span').css('color', '#777777');

        $('.services-title p').css('color', '#777777');
        $('.services-title a').css('color', '#007bff');
        $('.services > .card-body > p').removeClass('dark-mode-service_p');
        $('.owl-item p').css('color', '#777777');


        $('.footer-area').addClass('footer-bg');
        $('.footer-area').removeClass('dark_mode_footer');
        $('.footer-area .social a').removeClass('dark_mode_hover');

        $('form').removeClass('dark-form');
    }
    /* dark mode end */

    /* Side navigation active design */
    $('aside > ul > li').click(function(e) {
        $('aside > ul > li').removeClass('active_side_nav');
        $(e.currentTarget).addClass('active_side_nav');
    })
    /* Side navigation active design end */

    /* send email on form submit */
    $('footer form').on('submit', function(e) {
        e.preventDefault();
        let formData = $(this).serialize();
        $.ajax({
            url: $(e.currentTarget).find('#url').val() + '/email.php',
            data: formData,
            type: 'post',
            success: function(res) {
                console.log(res);
                switch (res) {
                    case 'wrong':
                        $(e.currentTarget).prepend(`
                            <div class="alert alert-danger" role="alert">
                                Something went wrong
                            </div>
                        `);
                        break;

                    case 'empty':
                        $(e.currentTarget).prepend(`
                            <div class="alert alert-warning" role="alert">
                                Name or email is required
                            </div>
                        `);
                        break;

                    case 'sent':
                        $(e.currentTarget).prepend(`
                            <div class="alert alert-success" role="alert">
                                Email sent successfully. Check inbox within a day.
                            </div>
                        `);
                        break;

                    default:
                        $(e.currentTarget).prepend(`
                            <div class="alert alert-danger" role="alert">
                                Something went wrong
                            </div>
                        `);
                        break;
                }
            }
        })
    })
    /* end of form submit */

    /* scroll to pages */
    $('.header_area .navbar-nav a, aside > ul > li > a, .services-area .sroll_to_contact').click(function(e) {
        e.preventDefault();
        let sec_id = $(e.currentTarget).attr('href');
        var sec = document.getElementById(sec_id);
        sec.scrollIntoView();
    })
    /* end of scroll pages */

    /* link redirection prevent */
    $('#myCanvasContainer ul li a, .project-area .our-project .project_hover .btn').click(function(e) {
        e.preventDefault();
    })

    /* Typing animation */
    var typed = new Typed(".about-area .text-anim", {
        strings: [``, `I have variety of skills that I can implement it on my work with accuracy. Therefore I
                                 work hard not only to deliver
                                 high performance to my clients but also I starve to learn new tech so that I can ensure
                                 a diverse contribution to my
                                 work and also in web dev sector.
                                 Also my dream is to develop a tech company/organization that will contribute in computer
                                 technology in future.`],
        typeSpeed: 17,
        cursorChar: '<i class="fas fa-i-cursor"></i>',
    });

});