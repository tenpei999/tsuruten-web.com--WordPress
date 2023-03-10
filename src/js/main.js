// 画面をスクロールをしたら動かしたい場合の記述
// .p-page-topをクリックした際の設定
const pageTop = document.querySelector('.p-page-top');

pageTop.addEventListener('click', function() {
  const scroll = document.documentElement.scrollTop || document.body.scrollTop;
  //スクロール値を取得
  if (scroll > 0) {
    pageTop.classList.add('floatAnime');
    //クリックしたらfloatAnimeというクラス名が付与
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
    //スクロールの速さ。数字が大きくなるほど遅くなる
    setTimeout(() => {
      pageTop.classList.remove('floatAnime');
    }, 3000);
  }
  return false;//リンク自体の無効化
});

// jQuery(function () {
//   jQuery(".p-page-top").on("click", function () {
//     const scroll = document.documentElement.scrollTop || document.body.scrollTop;
//     //スクロール値を取得
//     if (scroll > 0) {
//       pageTop.classList.add('floatAnime');
//       //クリックしたらfloatAnimeというクラス名が付与
//       jQuery('body,html,.l-main').animate({ scrollTop: 0 }, 3000, 'swing', function () {
//         //スクロールの速さ。数字が大きくなるほど遅くなる
//         pageTop.classList.remove('floatAnime');
//       });
//     }
//     return false;//リンク自体の無効化
//   });

// });


'scroll load'.split(' ').forEach((inokichiDown) => {
  window.addEventListener(inokichiDown, () => {

    let winHeight = window.pageYOffset;
    if (winHeight >= 100) {//上から100pxスクロールしたら
      pageTop.classList.add('UpMove');//#page-topについているUpMoveというクラス名を付与
      pageTop.classList.remove('DownMove');//#page-topについているDownMoveというクラス名を除く
    } else {
      //すでに#page-topにUpMoveというクラス名がついていたら
      pageTop.classList.add('UpMove');//UpMoveというクラス名を除き
      pageTop.classList.add('DownMove');//DownMoveというクラス名を#page-topに付与
    }
  })
})

//ローディングアニメーション
window.onload = function () {
  const spinner = document.getElementById('loading');
  spinner.classList.add('loaded');
}