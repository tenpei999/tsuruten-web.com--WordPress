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
  slidesPerView: 1,
  loop: false,
  speed: 1500,
  mousewheel: true,
  visibilityFullFit: true,
  onlyExternal: false,
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
  }

});

//アニメーション 初期化
const flipAnimationOther = {
  'animation': '',
  'opacity': 0
}

function swipe_action() {

  let bg3Obj = document.querySelector('.p-concept__bg.bg-3-before');
  let bg3Anime = {
    'animation': 'Scale 10s ease-in', 
    'scale': '2.5'
  }

  if (swiperConcept.activeIndex == 3) {
    Object.assign(bg3Obj.style, bg3Anime)
  } else {
    Object.assign(bg3Obj.style, flipAnimationOther)
  }
}

function swipe_actionText() {
  media();
  window.addEventListener("resize", function() {
    media();
  });

  // メディアクエリ
  function media() {
    // 横幅を取得
    let width = window.innerWidth;

    //オブジェクト タイトル
    let secondTitleObj = document.querySelector('.slide-1 .slide-inner .p-concept__title--flip.first')
    let thirdTitleObj = document.querySelector('.slide-2 .slide-inner .p-concept__title--flip.second')
    let fourthTitleObj = document.querySelector('.slide-3 .slide-inner .p-concept__title--flip.third')

    //オブジェクト テキスト
    let secondTextObj = document.querySelector('.p-concept__text.second')
    let thirdTextObj = document.querySelector('.p-concept__text.third')
    let fourthTextObj = document.querySelector('.p-concept__text.fourth')

    //オブジェクト トップに戻る
    let toFrontPageObj = document.querySelector('.p-concept__to-front-page span')


    //アニメーション タイトル
    let secondTitleFadeInStyle = {
      'animation': 'conceptTextSecondTitle 10s ease-in-out',
      'opacity': '1'
    }
    let thirdTitleFadeInStyle = {
      'animation': 'conceptTextThirdTitle 10s ease-in-out',
      'opacity': '1'
    }
    let fourthTitleFadeInStyle = {
      'animation': 'conceptTextFourthTitle 10s ease-in-out',
      'opacity': '1'
    }

    //アニメーション テキスト
    let secondTextFadeInStyle = {
      'animation': 'conceptTextSecondText 10s ease-in-out',
      'opacity': '1'
    }
    let thirdTextFadeInStyle = {
      'animation': 'conceptTextThirdText 10s ease-in-out', 'opacity': '1'
    }
    let fourthTextFadeInStyle = {
      'animation': 'conceptTextFourthText 10s ease-in-out',
      'opacity': '1'
    }

    //アニメーション トップページに戻る
    let toFrontPageStyle = {
      'animation': 'toFrontText 10s', 'opacity': '1'
    }

    if (width > 767) {

      if (swiperConcept.activeIndex == 1) {
        Object.assign(secondTitleObj.style, secondTitleFadeInStyle);
        Object.assign(secondTextObj.style, secondTextFadeInStyle);
      } else {
        Object.assign(secondTitleObj.style, flipAnimationOther);
        Object.assign(secondTextObj.style, flipAnimationOther);
      }
      if (swiperConcept.activeIndex == 2) {
        Object.assign(thirdTitleObj.style, thirdTitleFadeInStyle);
        Object.assign(thirdTextObj.style, thirdTextFadeInStyle);
      } else {
        Object.assign(thirdTitleObj.style, flipAnimationOther);
        Object.assign(thirdTextObj.style, flipAnimationOther);
      }
      if (swiperConcept.activeIndex == 3) {
        Object.assign(fourthTitleObj.style, fourthTitleFadeInStyle);
        Object.assign(fourthTextObj.style, fourthTextFadeInStyle);
        Object.assign(toFrontPageObj.style, toFrontPageStyle);
      } else {
        Object.assign(fourthTitleObj.style, flipAnimationOther);
        Object.assign(fourthTextObj.style, flipAnimationOther);
      }
    }
  }
}
