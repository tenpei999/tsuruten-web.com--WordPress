//ローディングアニメーション
window.onload = function () {
  const spinner = document.getElementById('loading');
  spinner.classList.add('loaded');
}

media();
jQuery(window).on("resize", function () { media(); });

// メディアクエリ
function media() {
  // 横幅を取得
  let width = $(window).width();
  if (width > 1200) {
    // 画面幅が1200pxより上の時

    //pcドロワー;

    jQuery(function () {
      if (jQuery('.self-introduction .c-text--link.c-modal-window__button-open').children(':not(#modal-text)'));
      jQuery('#modal-text').insertAfter('.c-text--link.c-modal-window__button-open');
    });

  } else if (width <= 1200) {
    // 画面幅が1200px以下での時

    //アコーディオンメニュー
    jQuery(function () {
      //クリックで動く
      jQuery(".p-gmenu__button").on("click", function () {
        jQuery(".p-gmenu__button").toggleClass('active');
        jQuery(".p-gmenu--table").toggleClass('c-background--opacity');
        jQuery(".p-gmenu__list.in-table").toggleClass('active');
      });
    });

    jQuery(function () {
      if (jQuery('.p-modal-window').children(':not(#modal-text)'));
      jQuery('#modal-text').insertAfter('.p-modal-window__button-close');
    });

    jQuery(function () {
      jQuery('.js-open').on("click", function () {
        jQuery('.p-modal-window').fadeIn();
        jQuery('.p-modal-window__message-close').fadeIn();
        jQuery('.p-page-top').css('display', 'none');
      });
      jQuery('.js-close').on("click", function () {
        jQuery('.p-modal-window').fadeOut();
        jQuery('.p-modal-window__message-close').fadeOut();
      });
    });
  }
}

//オーバーレイの動きをまとめる
jQuery(function () {
  jQuery('.js-open').on("click", function () {
    jQuery('.c-overlay').fadeIn();
  });
  jQuery('.js-close').on("click", function () {
    jQuery('.c-overlay').fadeOut();
  });
  jQuery('.js-hamburger').on("click", function () {
    jQuery('.c-overlay').fadeToggle(500, 'swing');
  });
});


//スクロールした際の動きを関数でまとめる
function PageTopAnime() {
  let scroll = $(window).scrollTop();
  if (scroll >= 100) {//上から100pxスクロールしたら
    jQuery('.p-page-top').removeClass('DownMove');//#page-topについているDownMoveというクラス名を除く
    jQuery('.p-page-top').addClass('UpMove');//#page-topについているUpMoveというクラス名を付与
  } else {
    if (jQuery('.p-page-top').hasClass('UpMove')) {//すでに#page-topにUpMoveというクラス名がついていたら
      jQuery('.p-page-top').removeClass('UpMove');//UpMoveというクラス名を除き
      jQuery('.p-page-top').addClass('DownMove');//DownMoveというクラス名を#page-topに付与
    }
  }
};

//ページ内リンク
// jQuery(function () {
//   // #で始まるアンカーをクリックした場合に処理
//   jQuery('.p-gmenu__list.in-table li a[href^="#"]').click(function () {

//     //ページ上端からの距離を検知
//     let winHeight = window.pageYOffset;                             
//     // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
//     let adjust = 0;
//     // スクロールの速度
//     let speed = 400; // ミリ秒
//     // アンカーの値取得
//     let href = jQuery(this).attr("href");
//     // 移動先を取得
//     let target = jQuery(href == "#" || href == "" ? 'html' : href);
//     // 移動先を調整
//     let position = target.offset().top - adjust;
//     // スムーススクロール
//     jQuery('body,html, .l-main').animate({ scrollTop: position }, speed, 'swing');
//     return false;
//   });
// });

//視線に追従する雲
window.onscroll = function () {

  let scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
  let Position = scrollTop / 1.9; //スクロール後のポジションを指定（値を大きくすると移動距離が小さくなる）
  let Position2 = scrollTop / 1.5;

  document.querySelector('.layer-10').style.marginTop = Position + 'px';

  document.querySelector('.layer-11').style.marginTop = Position2 + 'px';

};


//前景の山が迫り上がる。
jQuery(function () {
  jQuery(window).on('load', function () {
    document.querySelector('.layer-2').style.marginTop =  '3030px'
    document.querySelector('.layer-2-2').style.marginTop =  '2660px'
    document.querySelector('.layer-2-3').style.marginTop =  '2550px'
  })
  jQuery(window).on('scroll', function () {
    document.querySelector('.layer-2').style.marginTop = 'unset'
    document.querySelector('.layer-2-2').style.marginTop =  'unset'
    document.querySelector('.layer-2-3').style.marginTop =  'unset'
  })
  jQuery(window).on('scroll load', function () {
    let winHeight = window.pageYOffset;                              //ページ上端からの距離を検知
    let elmOffsetY = 2250;                                            //'.layer-2'のY座標における絶対位置
    let winMath = 780 + elmOffsetY;
    let win2Math = 410 + elmOffsetY;
    let win3Math = 250 + elmOffsetY;
    let offsetMove = winMath - winHeight * 0.3333;                             // 'layer-2'のmargin-top を求める条件式
    let offset2Move = win2Math - winHeight * 0.15;                             // 'layer-2'のmargin-top を求める条件式
    let offset3Move = win3Math - winHeight * 0.1;                             // 'layer-2'のmargin-top を求める条件式

    // console.log(winHeight);
    // console.log(winMath);
    // console.log(elmOffsetY);
    // console.log(offsetMove);     
    // console.log("hoge");       

    if (winHeight < 2000) {
      document.querySelector('.layer-2').classList.add('up');
      document.querySelector('.layer-2.up').style.marginTop = offsetMove + 'px';

      //アニメーションをする前の状態を表すクラス名'.upper'を付与し、合わせて'layer-2'を下方に待機させる。
    } else {
      document.querySelector('.layer-2').classList.remove('up');
      document.querySelector('.layer-2').style.marginTop = '2360px';
    }
    if (winHeight < 2000) {
      jQuery('.layer-2-2').addClass('up').css('margin-top', offset2Move + 'px');
      //アニメーションをする前の状態を表すクラス名'.upper'を付与し、合わせて'layer-2'を下方に待機させる。
    } else {
      jQuery('.layer-2-2').removeClass('up').css('margin-top', '2360px');
    }
    if (winHeight < 2000) {
      jQuery('.layer-2-3').addClass('up').css('margin-top', offset3Move + 'px');
      //アニメーションをする前の状態を表すクラス名'.upper'を付与し、合わせて'layer-2'を下方に待機させる。
    } else {
      jQuery('.layer-2-3').removeClass('up').css('margin-top', '2300px');
    }
  });
});



