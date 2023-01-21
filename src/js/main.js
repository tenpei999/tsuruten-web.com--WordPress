// 画面をスクロールをしたら動かしたい場合の記述
jQuery(window).on("scroll", function () {
  PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});

// .p-page-topをクリックした際の設定
jQuery(function () {
  jQuery(".p-page-top").on("click", function () {
    let scroll = jQuery(window).scrollTop();
    //スクロール値を取得
    if (scroll > 0) {
      jQuery(this).addClass('floatAnime');
      //クリックしたらfloatAnimeというクラス名が付与
      jQuery('body,html,.l-main').animate({ scrollTop: 0 }, 3000, 'swing', function () {
        //スクロールの速さ。数字が大きくなるほど遅くなる
        jQuery('.p-page-top').removeClass('floatAnime');//上までスクロールしたらfloatAnimeというクラス名を除く
      });
    }
    return false;//リンク自体の無効化
  });
});

//ローディングアニメーション
window.onload = function () {
  const spinner = document.getElementById('loading');
  spinner.classList.add('loaded');
}

//ブール値 true or foals //データ型 ○ ストリング(文字列)　イント(数字) //リスト型○ //タイプスプリクト //視認性が悪い ○ //条件式 //イベントトリガー
//`hoge = ${scroll < trigger && scroll < goal
//リスト型

  //数値
  //移動前の位置 layer-2(margin-top: 2692px;) window(.scrollTop(): 1270px;) -1422px
  //移動後の位置 layer-2(margin-top: 2360px;) window(.scrollTop(): 1602px;) -758px
  //                                 -332px                        +332px   -664
