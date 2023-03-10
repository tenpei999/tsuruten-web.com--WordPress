//ローディングアニメーション
window.onload = function () {
  const spinner = document.getElementById('loading');
  spinner.classList.add('loaded');
}

media();
window.addEventListener('resize', function () { media(); })

// メディアクエリ
function media() {
  // 横幅を取得
  const width = $(window).width();
  const modalButton = document.querySelector('.c-text--link.c-modal-window__button-open');
  const modalButtonClose = document.querySelector(".p-modal-window__button-close");
  const modalMessageClose = document.querySelector(".p-modal-window__message-close");
  const modalFadeOut = document.querySelector('.modal-fade-out')
  const accordionButton = document.querySelector(".p-gmenu__button");
  const table = document.querySelector(".p-gmenu--table");
  const list = document.querySelector(".p-gmenu__list.in-table");
  const pageTop = document.querySelector('.p-page-top');


  if (width > 1200) {
    // 画面幅が1200pxより上の時

    modalButton.parentNode.insertBefore(document.getElementById("modal-text"),modalButton.nextElementSibling);

  } else if (width <= 1200) {
    // 画面幅が1200px以下での時

    //アコーディオンメニュー
    //クリックで動く
    accordionButton.addEventListener('click', () => {
      accordionButton.classList.toggle('active');
      table.classList.toggle('c-background--opacity');
      list.classList.toggle('active');
    })

    modalButtonClose.parentNode.insertBefore(document.getElementById("modal-text"),modalButtonClose.nextElementSibling);

    modalButton.addEventListener("click", () => {
      modalFadeOut.fadeIn();
      pageTop.style.display = 'none';
    });
    modalMessageClose.addEventListener("click", () => {
      modalFadeOut.fadeOut();
      pageTop.style.display = 'unset';
    });
  }
}

const layer2 = document.querySelector('.layer-2');
const layer22 = document.querySelector('.layer-2-2'); 
const layer23 = document.querySelector('.layer-2-3'); 
const layer10 = document.querySelector('.layer-10'); 
const layer11 = document.querySelector('.layer-11'); 

const layer2Up = document.querySelector('.layer-2.up');
const layer22Up = document.querySelector('.layer-2-2.up');
const layer23Up = document.querySelector('.layer-2-3.up');


//視線に追従する雲
window.onscroll = function () {
                          //ページ上端からの距離を検知
  const elmOffsetY = 0;
  const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
  const position = elmOffsetY + scrollTop / 1.9;
  const Position2 = elmOffsetY + scrollTop / 1.5;

  layer10.style.marginTop = position + 'px';
  layer11.style.marginTop = Position2 + 'px';

};


//前景の山が迫り上がる。
function init() {
  window.addEventListener('load', () => {
    layer2.style.marginTop = '3030px'
    layer22.style.marginTop = '2660px'
    layer23.style.marginTop = '2550px'
  })

  const showMountain = () => {
    console.log('マウンテいん');
  }

  const MountainObserver = new IntersectionObserver(showMountain);

  MountainObserver.observe();

  window.addEventListener('scroll', () => {
    [layer2, layer22, layer23].forEach(ele => ele.style.marginTop = 'unset');
  })

  'scroll load'.split(' ').forEach((MountainUp) => {
    window.addEventListener(MountainUp, () => {

      const winHeight = window.pageYOffset;                              //ページ上端からの距離を検知
      const elmOffsetY = 2250;                                            //'.layer-2'のY座標における絶対位置
      const winStart = 780;
      const win2Start = 410;
      const win3Start = 250;
      const offsetMove = winStart + elmOffsetY - winHeight * 0.3333;                             // 'layer-2'のmargin-top を求める条件式
      const offset2Move = win2Start + elmOffsetY - winHeight * 0.15;                             // 'layer-2'のmargin-top を求める条件式
      const offset3Move = win3Start + elmOffsetY - winHeight * 0.1;                             // 'layer-2'のmargin-top を求める条件式

      // console.log(winHeight);
      // console.log(winMath);
      // console.log(elmOffsetY);
      // console.log(offsetMove);     
      // console.log("hoge");       

      if (winHeight < 2000) {
        [layer2, layer22, layer23].forEach(ele => ele.classList.add('up'));
        layer2Up.style.marginTop = offsetMove + 'px';
        layer22Up.style.marginTop = offset2Move + 'px';
        layer23Up.style.marginTop = offset3Move + 'px';

        //アニメーションをする前の状態を表すクラス名'.up'を付与し、合わせて'layer-2'を下方に待機させる。
      } else {
        [layer2, layer22, layer23].forEach(ele => {ele.style.marginTop = '2360px';ele.classList.remove('up');});
      }
    })
  })
};

init();
