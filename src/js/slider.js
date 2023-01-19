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

  on: {
    // 切り替わりのアニメーションが終了したとき
    slideChangeTransitionEnd: function () {
      swipe_action(),
      swipe_actionText();
    }
  },

});

function swipe_action() {
  if (swiperConcept.activeIndex == 3) {
    jQuery('.p-concept__bg.bg-3-before').css('animation', 'Scale 10s ease-in');
    jQuery('.p-concept__bg.bg-3-before').css('scale', '2.5');
  } else {
    jQuery('.p-concept__bg.bg-3-before').css('animation', '');
    jQuery('.p-concept__bg.bg-3-before').css('scale', '0');
  }
}

function swipe_actionText() {
  if (swiperConcept.activeIndex == 1) {
    jQuery('.slide-1 .slide-inner .p-concept__title--flip.first').css('animation', 'conceptTextSecondTitle 2.5s ease-in');
    jQuery('.slide-1 .slide-inner .p-concept__title--flip.first').css('opacity', '1');
    jQuery('.p-concept__text.second').css('animation', 'conceptTextSecondText 1s ease');
    jQuery('.p-concept__text.second').css('opacity', '1');
  } else {
    jQuery('.slide-1 .slide-inner .p-concept__title--flip.first').css('animation', '');
    jQuery('.slide-1 .slide-inner .p-concept__title--flip.first').css('opacity', '0');
    jQuery('.p-concept__text.second').css('animation', '');
    jQuery('.p-concept__text.second').css('opacity', '0');
  }
}
