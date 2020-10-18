/* Packages for portfolio */
import './package/tag-canvas/tagcanvas';
import './package/responsive-tabs/js/responsive-tabs';
import './package/owl-carousel/js/owl.carousel';
import './package/model/modelo';


/* custom js files */
import './custom/main';
import './custom/float';
import './custom/animation';

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
    $(this).bind("contextmenu", function(event) {
        event.preventDefault();
        alert("Sorry! But you can't inspect in my website");
    });
});

document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
  }
}