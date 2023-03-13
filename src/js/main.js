window.addEventListener('DOMContentLoaded', function() {
  const pageTop = document.querySelector('.p-page-top');
  const mainContent = document.querySelector('.l-main');
  
  pageTop.addEventListener('click', function() {
    const scroll = document.documentElement.scrollTop || document.body.scrollTop;
    
    if (scroll > 0) {
      pageTop.classList.add('floatAnime');

      let startTime;
      let duration = 3000;
      let scrollTopStart = scroll;
      let mainScrollTopStart = mainContent.scrollTop;

      function scrollAnimation(currentTime) {
        if (!startTime) {
          startTime = currentTime;
        }

        const timeElapsed = currentTime - startTime;
        const scrollTop = easeOutQuad(timeElapsed, scrollTopStart, -scrollTopStart, duration);
        const mainScrollTop = easeOutQuad(timeElapsed, mainScrollTopStart, -mainScrollTopStart, duration);
        
        window.scrollTo(0, scrollTop);
        mainContent.scrollTo(0, mainScrollTop);

        if (timeElapsed < duration) {
          requestAnimationFrame(scrollAnimation);
        } else {
          pageTop.classList.remove('floatAnime');
        }
      }

      function easeOutQuad(t, b, c, d) {
        t /= d;
        return -c * t*(t-2) + b;
      }

      requestAnimationFrame(scrollAnimation);
    }

    return false;
  });
});
// jQuery(function () {
//   const pageTop = document.querySelector('.p-page-top');
  
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

    const winHeight = window.pageYOffset;
    const pageTop = document.querySelector('.p-page-top');

    if (winHeight >= 100) {//上から100pxスクロールしたら
      pageTop.classList.add('UpMove');//#page-topについているUpMoveというクラス名を付与
      pageTop.classList.remove('DownMove');//#page-topについているDownMoveというクラス名を除く
    } else {
      //すでに#page-topにUpMoveというクラス名がついていたら
      pageTop.classList.remove('UpMove');//UpMoveというクラス名を除き
      pageTop.classList.add('DownMove');//DownMoveというクラス名を#page-topに付与
    }
  })
})

//ローディングアニメーション
window.onload = function () {
  const spinner = document.getElementById('loading');
  spinner.classList.add('loaded');
}