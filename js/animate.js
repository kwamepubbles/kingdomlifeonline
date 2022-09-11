$(function (){

    window.sr = ScrollReveal();
    
    if ($(window).width() < 768) {
    
        if ($('.timeline-content').hasClass('js--fadeInLeft')) {
            $('.timeline-content').removeClass('js--fadeInLeft').addClass('js--fadeInRight');
        }
    
        sr.reveal('.js--fadeInRight', {
          origin: 'right',
          distance: '300px',
          easing: 'ease-in-out',
          duration: 800,
        });
    
    } else {
        
        sr.reveal('.js--fadeInLeft', {
          origin: 'left',
          distance: '300px',
            easing: 'ease-in-out',
          duration: 800,
        });
    
        sr.reveal('.js--fadeInRight', {
          origin: 'right',
          distance: '300px',
          easing: 'ease-in-out',
          duration: 800,
        });
    
    }
    
    sr.reveal('.js--fadeInLeft', {
          origin: 'left',
          distance: '300px',
            easing: 'ease-in-out',
          duration: 800,
        });
    
        sr.reveal('.js--fadeInRight', {
          origin: 'right',
          distance: '300px',
          easing: 'ease-in-out',
          duration: 800,
        });
    
    
    });
    

      (function () {
        "use strict";
      
        var carousels = function () {
          $(".owl-carousel").owlCarousel({
            loop: true,
            center: true,
            margin: 0,
            responsiveClass: true,
            nav: false,
            responsive: {
              0: {
                items: 1,
                nav: false },
      
              680: {
                items: 2,
                nav: false,
                loop: false },
      
              1000: {
                items: 3,
                nav: true } } });
        };
      
        (function ($) {
          carousels();
        })(jQuery);
      })();
      //# testimony.js
          