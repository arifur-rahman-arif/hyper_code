/* Typing animation */
function Typing_anim() {
    var typed = new Typed(".about-area .text-anim", {
        strings: [``, `I have variety of skills that I can implement it on my work with accuracy. Therefore I
                                 work hard not only to deliver
                                 high performance to my clients but also I starve to learn new tech so that I can ensure
                                 a diverse contribution to my
                                 work and also in web dev sector.
                                 Also my dream is to develop a tech company/organization that will contribute in computer
                                 technology in future.`],
        typeSpeed: 10,
        cursorChar: '<i class="fas fa-i-cursor"></i>',
    });
}
ScrollTrigger.create({
    trigger: ".text-anim_container",
    start: "top 65%",
    once: true,
    onEnter: () => {
        Typing_anim();
    },
});

var svg = document.querySelector('.site-main .site-banner .site-title svg path');
var role_title = document.querySelector('.site-main .site-banner .site-title .role_title');

var timeline_1 = gsap.timeline();
timeline_1.from(
        '.header_area .navbar', {
            opacity: 0,
            duration: 1,
            y: -100
        }
    )
    .to(
        svg, {
            duration: 3,
            strokeDashoffset: '0px',
            // fill: '#000',
        },
        "+=0.5"
    )
    .to(
        svg, {
            duration: 1.5,
            fill: '#000',
            onStart: function() {
                role_title_typing();
            }
        }
    )

function role_title_typing() {
    var typed = new Typed('.site-main .site-banner .site-title .role_title', {
        strings: [
            '',
            'Developer <img class="ml-2" width="45" height="45" src="./assets/img/role/code.svg" />',
            'Designer <img class="ml-2" width="45" height="45" src="./assets/img/role/designer.svg" />',
            'Doer <img class="ml-2" width="40" height="40" src="./assets/img/role/doer.svg" />'
        ],
        typeSpeed: 60,
        showCursor: false,
        loop: true,
        loopCount: Infinity,
        backSpeed: 50,
    });
}

/* Skill arrow animation */
var skill_arrow = gsap.timeline({
    repeat: -1,
    yoyo: true,
});

skill_arrow.to(
    '.arrow_icon > i', {
        duration: 1,
        y: 25,
        color: '#4458dc'
    }
);