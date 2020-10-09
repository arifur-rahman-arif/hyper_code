$(document).ready(function () {
    function bouncing_ball() {
        var tl = gsap.timeline({ repeat: -1, yoyo: true, paused: true });
        tl
            .to(
                '.ball_container',
                {
                    x: "random([-10, 80, 50, -7, -5, 40, -20])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
            )
            .to(
                '.ball_container',
                {
                    y: "random([10, 90, 50, 75, 50, 43, 34])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                "-=1"
            )
            .to(
                '.ball_container',
                {
                    x: "random([10, 90, 50, 75, 50, 43, 34])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                // "-=2"
            )
            .to(
                '.ball_container',
                {
                    y: "random([-10, 80, 50, -7, -5])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                "-=1"

            )
            .to(
                '.ball_container',
                {
                    x: "random([-10, 80, 50, -5, -25, 40, -7])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
            )
            .to(
                '.ball_container',
                {
                    y: "random([10, 90, 50, 75, 50, 43, 34])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                "-=1"
            )
            .to(
                '.ball_container',
                {
                    x: "random([-10, 80, 50, -5, -25, 40, -7])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
            )
            .to(
                '.ball_container',
                {
                    y: "random([10, 90, 50, 75, 50, 43, 34])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                "-=1"
            )
            .to(
                '.ball_container',
                {
                    x: "random([-10, 80, 50, -5, -25, 40, -7])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
            )
            .to(
                '.ball_container',
                {
                    y: "random([10, 90, 50, 75, 50, 43, 34])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                "-=1"
            )
            .to(
                '.ball_container',
                {
                    x: "random([-10, 80, 50, -5, -25, 40, -7])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
            )
            .to(
                '.ball_container',
                {
                    y: "random([10, 90, 50, 75, 50, 43, 34])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                "-=1"
            )
            .to(
                '.ball_container',
                {
                    x: "random([-10, 80, 50, -5, -25, 40, -7])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
            )
            .to(
                '.ball_container',
                {
                    y: "random([10, 90, 50, 75, 50, 43, 34])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                "-=1"
            )
            .to(
                '.ball_container',
                {
                    x: "random([-10, 80, 50, -5, -25, 40, -7])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
            )
            .to(
                '.ball_container',
                {
                    y: "random([10, 90, 50, 75, 50, 43, 34])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                "-=1"
            )
            .to(
                '.ball_container',
                {
                    x: "random([-10, 80, 50, -5, -25, 40, -7])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
            )
            .to(
                '.ball_container',
                {
                    y: "random([10, 90, 50, 75, 50, 43, 34])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                "-=1"
            )
            .to(
                '.ball_container',
                {
                    x: "random([-10, 80, 50, -5, -25, 40, -7])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
            )
            .to(
                '.ball_container',
                {
                    y: "random([10, 90, 50, 75, 50, 43, 34])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                "-=1"
            )
            .to(
                '.ball_container',
                {
                    x: "random([-10, 80, 50, -5, -25, 40, -7])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
            )
            .to(
                '.ball_container',
                {
                    y: "random([10, 90, 50, 75, 50, 43, 34])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                "-=1"
            )
            .to(
                '.ball_container',
                {
                    x: "random([-10, 80, 50, -5, -25, 40, -7])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
            )
            .to(
                '.ball_container',
                {
                    y: "random([10, 90, 50, 75, 50, 43, 34])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                "-=1"
            )
            .to(
                '.ball_container',
                {
                    x: "random([-10, 80, 50, -5, -25, 40, -7])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
            )
            .to(
                '.ball_container',
                {
                    y: "random([10, 90, 50, 75, 50, 43, 34])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                "-=1"
            )
            .to(
                '.ball_container',
                {
                    x: "random([-10, 80, 50, -5, -25, 40, -7])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
            )
            .to(
                '.ball_container',
                {
                    y: "random([10, 90, 50, 75, 50, 43, 34])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                "-=1"
            )
            .to(
                '.ball_container',
                {
                    x: "random([-10, 80, 50, -5, -25, 40, -7])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
            )
            .to(
                '.ball_container',
                {
                    y: "random([10, 90, 50, 75, 50, 43, 34])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                "-=1"
            )
            .to(
                '.ball_container',
                {
                    x: "random([-10, 80, 50, -5, -25, 40, -7])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
            )
            .to(
                '.ball_container',
                {
                    y: "random([10, 90, 50, 75, 50, 43, 34])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                "-=1"
            )
            .to(
                '.ball_container',
                {
                    x: "random([-10, 80, 50, -5, -25, 40, -7])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
            )
            .to(
                '.ball_container',
                {
                    y: "random([10, 90, 50, 75, 50, 43, 34])",
                    ease: 'none',
                    duration: 1, ease: "none",
                    stagger: { // wrap advanced options in an object
                        from: "random",
                        grid: "auto",
                        ease: "none"
                    }
                },
                "-=1"
            );
        $('#bounce_tab').click(function () {
            tl.play();
        })
    }
    bouncing_ball();

})
