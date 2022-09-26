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

var swiper = new Swiper(".slide-content", {
  slidesPerView: 3,
  spaceBetween: 25,
  loop: true,
  centerSlide: 'true',
  fade: 'true',
  grabCursor: 'true',
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints:{
      0: {
          slidesPerView: 1,
      },
      520: {
          slidesPerView: 2,
      },
      950: {
          slidesPerView: 2,
      },
  },
});
