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

    document.querySelector('.c-text--link.c-modal-window__button-open').parentNode.insertBefore(document.getElementById("modal-text"), 
    document.querySelector('.c-text--link.c-modal-window__button-open').nextElementSibling);

  } else if (width <= 1200) {
    // 画面幅が1200px以下での時

    //アコーディオンメニュー
    //クリックで動く
    document.querySelector(".p-gmenu__button").addEventListener('click', () => {
      document.querySelector(".p-gmenu__button").classList.toggle('active');
      document.querySelector(".p-gmenu--table").classList.toggle('c-background--opacity');
      document.querySelector(".p-gmenu__list.in-table").classList.toggle('active');
    })

    document.querySelector(".p-modal-window__button-close").parentNode.insertBefore(document.getElementById("modal-text"), 
    document.querySelector(".p-modal-window__button-close").nextElementSibling);

    document.querySelector('.c-text--link.c-modal-window__button-open').addEventListener("click", () => {
      jQuery('.p-modal-window, .c-overlay, .p-modal-window__message-close').fadeIn();
      document.querySelector('.p-page-top').style.display = 'none';
    });
    document.querySelector('.p-modal-window__message-close').addEventListener("click", () => {
      jQuery('.p-modal-window, .p-modal-window__message-close, .c-overlay').fadeOut();
      document.querySelector('.p-page-top').style.display = 'unset';
    });
  }
}

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
function init() {
  window.addEventListener('load', () => {
    document.querySelector('.layer-2').style.marginTop = '3030px'
    document.querySelector('.layer-2-2').style.marginTop = '2660px'
    document.querySelector('.layer-2-3').style.marginTop = '2550px'
  })

  window.addEventListener('scroll', () => {
    document.querySelector('.layer-2').style.marginTop = 'unset'
    document.querySelector('.layer-2-2').style.marginTop = 'unset'
    document.querySelector('.layer-2-3').style.marginTop = 'unset'
  })

  'scroll load'.split(' ').forEach((MountainUp) => {
    window.addEventListener(MountainUp, () => {

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
        document.querySelector('.layer-2-2').classList.add('up');
        document.querySelector('.layer-2-2.up').style.marginTop = offset2Move + 'px';
        document.querySelector('.layer-2-3').classList.add('up');
        document.querySelector('.layer-2-3.up').style.marginTop = offset3Move + 'px';

        //アニメーションをする前の状態を表すクラス名'.upper'を付与し、合わせて'layer-2'を下方に待機させる。
      } else {
        document.querySelector('.layer-2').classList.remove('up');
        document.querySelector('.layer-2').style.marginTop = '2360px';
        document.querySelector('.layer-2-2').classList.remove('up');
        document.querySelector('.layer-2-2').style.marginTop = '2360px';
        document.querySelector('.layer-2-3').classList.remove('up');
        document.querySelector('.layer-2-3').style.marginTop = '2300px';
      }
    })
  })
};

init();