// 画面をスクロールをしたら動かしたい場合の記述
// .p-page-topをクリックした際の設定

  document.querySelector(".p-page-top").addEventListener("click", () => {
    const scroll = document.documentElement.scrollTop || document.body.scrollTop;
    //スクロール値を取得
    if (scroll > 0) {
      document.querySelector('.p-page-top').classList.add('floatAnime');
      //クリックしたらfloatAnimeというクラス名が付与
      jQuery('body,html,.l-main').animate({ scrollTop: 0 }, 3000, 'swing', function () {
        //スクロールの速さ。数字が大きくなるほど遅くなる
        document.querySelector('.p-page-top').classList.remove('floatAnime');//上までスクロールしたらfloatAnimeというクラス名を除く
      });
    }
    return false;//リンク自体の無効化
  });

'scroll load'.split(' ').forEach((inokichiDown) => {
  window.addEventListener(inokichiDown, () => {

    let winHeight = window.pageYOffset;
    console.log(winHeight);
    if (winHeight >= 100) {//上から100pxスクロールしたら
      document.querySelector('.p-page-top').classList.remove('DownMove');//#page-topについているDownMoveというクラス名を除く
      document.querySelector('.p-page-top').classList.add('UpMove');//#page-topについているUpMoveというクラス名を付与
    } else {
      //すでに#page-topにUpMoveというクラス名がついていたら
      document.querySelector('.p-page-top').classList.add('UpMove');//UpMoveというクラス名を除き
      document.querySelector('.p-page-top').classList.add('DownMove');//DownMoveというクラス名を#page-topに付与
    }
  })
})

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
