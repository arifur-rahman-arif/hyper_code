/* Packages for portfolio */
import './package/tag-canvas/tagcanvas';
import './package/responsive-tabs/js/responsive-tabs';
import './package/owl-carousel/js/owl.carousel';
import './package/model/modelo';


/* custom js files */
import './custom/animation';
import './custom/float';
import './custom/main';

/* code */
(function($) {
    $('.nav-tabs').responsiveTabs();
})(jQuery);
$(document).ready(function() {
    $('#myCanvas').tagcanvas({
        animTiming: "Smooth",
        depth: 0.99,
        outlineColour: 'transparent',
        centreImage: './build/img/logo.png',
    });
});