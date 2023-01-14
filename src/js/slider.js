const swiper = new Swiper('.swiper', {

  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },

  effect: "coverflow",

  centeredSlides: true,

  slidesPerView: 2,

  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
const swiperConcept = new Swiper('.swiper-concept', {

  direction: 'vertical',
  effect: 'slide',
  slidesPerView: 1,
  loop: false,
  speed: 1500,
  mousewheel: true,
  visibilityFullFit: true,
  onlyExternal: true,
  scrollContainer: true,
  effect: 'fade',
  touchRatio: 3,

  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
},
  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },

});