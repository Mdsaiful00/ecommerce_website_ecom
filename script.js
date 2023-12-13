const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    } )
}


if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    } )
}





var swiper = new Swiper(".home-slider", {
   loop: true,
   spaceBetween: 20,
   grabCursor: true,
   effect: "flip",
   autoplay: {
      dealy: 250,
      disableOnIntraction: false,
   },
   pagination: {
      el: ".swiper-pagination",
      clickable: true,
   },
});

var swiper = new Swiper(".category-slider", {
   loop: true,
   spaceBetween: 20,
   grabCursor: true,
   autoplay: {
      dealy: 250,
      disableOnIntraction: false,
   },
   pagination: {
      el: ".swiper-pagination",
      clickable: true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
      },
      650: {
         slidesPerView: 3,
      },
      768: {
         slidesPerView: 4,
      },
      1024: {
         slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable: true,
   },
   breakpoints: {
      550: {
         slidesPerView: 2,
      },
      768: {
         slidesPerView: 2,
      },
      1024: {
         slidesPerView: 3,
      },
   },
});

AOS.init({
   offset: 150,
   duration: 1000,
});
new WOW().init({
   loop: true,
});

$(function () {
   $('.tlt').textillate({
      loop: true,
      minDisplayTime: 100,
   });
});

