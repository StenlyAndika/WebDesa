/**
 * WEBSITE: https://themefisher.com
 * TWITTER: https://twitter.com/themefisher
 * FACEBOOK: https://www.facebook.com/themefisher
 * GITHUB: https://github.com/themefisher/
 */
 const srl = ScrollReveal({
  origin: 'right',
  distance: '50px',
  duration: 1000,
  delay: 200,
  reset: true
});

srl.reveal('.pop-left',{});

const srr = ScrollReveal({
  origin: 'left',
  distance: '50px',
  duration: 1000,
  delay: 200,
  reset: true
});

srr.reveal('.pop-right',{});

const srd = ScrollReveal({
  origin: 'top',
  distance: '50px',
  duration: 1000,
  delay: 200,
  reset: true
});

srd.reveal('.pop-down',{});

const sru = ScrollReveal({
  origin: 'bottom',
  distance: '50px',
  duration: 1000,
  delay: 200,
  reset: true
});

sru.reveal('.pop-up',{});

(function ($) {
  'use strict';
  
  $(window).on('scroll', function () {
		//.Scroll to top show/hide
    var scrollToTop = $('.scroll-top-to'),
      scroll = $(window).scrollTop();
    if (scroll >= 200) {
      scrollToTop.fadeIn(200);
    } else {
      scrollToTop.fadeOut(100);
    }
  });
	// // scroll-to-top
  $('.scroll-top-to').on('click', function () {
    $('body,html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });

  $(document).ready(function() {
    
    if ($(window).width() < 992) {
      $('.main-nav .dropdown-toggle').on('click', function () {
        $(this).siblings('.dropdown-menu').animate({
          height: 'toggle'
        }, 300);
      });
    }

  });

})(jQuery);