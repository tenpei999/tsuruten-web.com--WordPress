const pageTop = document.querySelector('.p-page-top');
const lMain = document.querySelector('.l-main');

const scrollListener = () => {
  if (window.scrollY <= 0) {
    pageTop.classList.remove('floatAnime');
    window.removeEventListener('scroll', scrollListener);
  }
};

pageTop.addEventListener('click', () => {
  pageTop.classList.add('floatAnime');
  window.addEventListener('scroll', scrollListener);
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
  setTimeout(() => {
    lMain.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }, 100);
});

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