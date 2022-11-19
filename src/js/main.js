//ハンバーガー
window.addEventListener('DOMContentLoaded', ()=>{
  document.querySelector( '.js-hamburger' ).addEventListener(
    'click',
    () => {
      document.querySelector( 'body' ).classList.toggle( 'is-open' );
      document.querySelector( '.js-hamburger' ).classList.toggle( 'is-open' );
      document.querySelector( '.p-gmenu--inner' ).classList.toggle( 'is-open' );
      // document.querySelector( '.p-header__background' ).classList.toggle( 'is-open' );
      document.querySelector( '.c-hamburger' ).classList.toggle( 'is-open' );
    }
  );
});

media();
jQuery(window).on("resize", function(){ media(); });

// メディアクエリ
function media() {
  // 横幅を取得
  let width = $(window).width();
  if(width > 1200) {
    // 画面幅が1200pxより上の時
    
    //pcドロワー
    jQuery(function(){
      jQuery(".item").on("hover", function(){
        jQuery(this).children(".sub-menu").stop().slideToggle();
      });
    });


  jQuery(function(){
    if(jQuery('.self-introduction .c-text--link.c-modal-window__button-open').children(':not(.c-text)'));
    jQuery('.c-text.c-text--sentence').insertAfter('.c-text--link.c-modal-window__button-open');    
  });

  } else if(width <= 1200) {
  // 画面幅が1200px以下での時

    //アコーディオンメニュー
    jQuery(function(){
      //クリックで動く
      jQuery(".item3, .p-gmenu--table").on("click", function(){
        jQuery(this).toggleClass('active');
        jQuery(this).next('nav').slideToggle();
        jQuery(this).children(".sub-menu").stop().slideToggle();
      });
    });

    jQuery(function() {
      if(jQuery('.p-modal-window').children(':not(.c-text.c-text--sentence)'));
      jQuery('.c-text.c-text--sentence').insertAfter('.p-modal-window__button-close');      
      });
    
    jQuery(function () {
      jQuery('.js-open').on("click", function () {
        jQuery('.c-overlay, .p-modal-window').fadeIn();
      });
      jQuery('.js-close').on("click", function () {
        jQuery('.c-overlay, .p-modal-window').fadeOut();
      });
    });
    jQuery(function () {
      jQuery('.contact-link').on("click", function () {
        jQuery('.c-overlay, .p-modal-window--small').fadeIn();
      });
      jQuery('.js-close').on("click", function () {
        jQuery('.c-overlay, .p-modal-window--small').fadeOut();
      });
    });
  }
}

//スクロールした際の動きを関数でまとめる
function PageTopAnime() {
  let scroll = $(window).scrollTop();
  if (scroll >= 100){//上から100pxスクロールしたら
    jQuery('.p-page-top').removeClass('DownMove');//#page-topについているDownMoveというクラス名を除く
    jQuery('.p-page-top').addClass('UpMove');//#page-topについているUpMoveというクラス名を付与
  }else{
    if(jQuery('.p-page-top').hasClass('UpMove')){//すでに#page-topにUpMoveというクラス名がついていたら
      jQuery('.p-page-top').removeClass('UpMove');//UpMoveというクラス名を除き
      jQuery('.p-page-top').addClass('DownMove');//DownMoveというクラス名を#page-topに付与
    }
  }
};

// 画面をスクロールをしたら動かしたい場合の記述
jQuery(window).on("scroll", function () {
  PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});

// .p-page-topをクリックした際の設定
  jQuery(function () {
    jQuery(".p-page-top").on("click", function () {
      let scroll = jQuery(window).scrollTop(); 
        //スクロール値を取得
        if(scroll > 0){
          jQuery(this).addClass('floatAnime'); 
          //クリックしたらfloatAnimeというクラス名が付与
          jQuery('body,html,.l-main').animate({scrollTop: 0}, 3000, 'swing',function(){
                //スクロールの速さ。数字が大きくなるほど遅くなる
                jQuery('.p-page-top').removeClass('floatAnime');//上までスクロールしたらfloatAnimeというクラス名を除く
              }); 
        }
          return false;//リンク自体の無効化
    });
  });
  $(function(){
    // #で始まるアンカーをクリックした場合に処理
    $('.p-gmenu__list.in-table a[href^="#"]').click(function(){
      // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
      let adjust = 0;
      // スクロールの速度
      let speed = 400; // ミリ秒
      // アンカーの値取得
      let href= $(this).attr("href");
      // 移動先を取得
      let target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を調整
      let position = target.offset().top + adjust;
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
    });
  });
  //視線に追従する雲
  jQuery(window).on('scroll', function(){

    let scrollTop = $(window).scrollTop();
    let Position = scrollTop / 1.9; //スクロール後のポジションを指定（値を大きくすると移動距離が小さくなる）
    let Position2 = scrollTop / 1.5;
  
    if(Position){
      jQuery('.layer-10').css('margin-top', Position + 'px');
      jQuery('.layer-11').css('margin-top', Position2 + 'px');
    }
  });
  
  //前景の山が迫り上がる。
  jQuery(function(){
    jQuery(window).on('scroll load', function(){
      let winHeight = window.pageYOffset;                              //ページ上端からの距離を検知
      let elmOffsetY = 2360;                                            //'.layer-2'のY座標における絶対位置
      let winMath = 2360 + elmOffsetY;
      let offsetMove = winMath - winHeight;                             // 'layer-2'のmargin-top を求める条件式
      
      // console.log(winHeight);
      // console.log(winMath);
      // console.log(elmOffsetY);
      // console.log(offsetMove);     
      // console.log("hoge");     

      //アニメーションさせるための条件分岐
      if( winHeight < 2360 ) {
        jQuery('.layer-2').addClass('up').css('margin-top', offsetMove + 'px');
        //アニメーションをする前の状態を表すクラス名'.upper'を付与し、合わせて'layer-2'を下方に待機させる。
      } else {
        jQuery('.layer-2').removeClass('up').css('margin-top', '2360px');
      }
    });
  });

//ブール値 true or foals //データ型 ○ ストリング(文字列)　イント(数字) //リスト型○ //タイプスプリクト //視認性が悪い ○ //条件式 //イベントトリガー
//`hoge = ${scroll < trigger && scroll < goal
//リスト型

  //数値
  //移動前の位置 layer-2(margin-top: 2692px;) window(.scrollTop(): 1270px;) -1422px
  //移動後の位置 layer-2(margin-top: 2360px;) window(.scrollTop(): 1602px;) -758px
  //                                 -332px                        +332px   -664
