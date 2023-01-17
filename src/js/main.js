//ハンバーガー
window.addEventListener('DOMContentLoaded', () => {
  document.querySelector('.js-hamburger').addEventListener(
    'click',
    () => {
      document.querySelector('body').classList.toggle('is-open');
      document.querySelector('.p-gmenu--inner').classList.toggle('is-open');
      document.querySelector('.p-page-top').classList.toggle('is-open');
      document.querySelector('.js-hamburger').classList.toggle('is-open');
      document.querySelector('.js-hamburger span').classList.toggle('is-open');
    }
  );
  document.querySelector('.js-open').addEventListener(
    'click',
    () => {
      document.querySelector('body').classList.add('is-open');
    }
  );
});

media();
jQuery(window).on("resize", function () { media(); });

// メディアクエリ
function media() {
  // 横幅を取得
  let width = $(window).width();
  if (width > 1200) {
    // 画面幅が1200pxより上の時

    //pcドロワー
    jQuery(function () {
      jQuery(".item").on("hover", function () {
        jQuery(this).children(".sub-menu").stop().slideToggle();
      });
    });

    jQuery(function () {
      if (jQuery('.self-introduction .c-text--link.c-modal-window__button-open').children(':not(#modal-text)'));
      jQuery('#modal-text').insertAfter('.c-text--link.c-modal-window__button-open');
    });

    jQuery(function () {
      if (jQuery('.p-products').next('.l-aside--left'));
      jQuery('.l-aside--left').prependTo('.l-primary');
    });
    jQuery(function () {
      if (jQuery('.l-aside--left').next('.l-aside--right'));
      jQuery('.l-aside--right').prependTo('.l-primary');
    });

    jQuery(function () {
      jQuery(window).on('load scroll', function () {
        let scrollTop = jQuery(window).scrollTop();
        // console.log(scrollTop);
        if (scrollTop < 500) {
          jQuery('.l-aside--left, .l-aside--right').css('opacity', '0')
        } else {
          jQuery('.l-aside--left').animate({ opacity: 1 }, 2000, 'swing');
          jQuery('.l-aside--right').animate({ opacity: 1 }, 5000, 'swing');
        }
      });
    });

  } else if (width <= 1200) {
    // 画面幅が1200px以下での時

    //アコーディオンメニュー
    jQuery(function () {
      //クリックで動く
      jQuery(".item3, .p-gmenu__button").on("click", function () {
        jQuery(this).toggleClass('active');
        jQuery(".p-gmenu__list.in-table").toggleClass('active');
        jQuery(this).children(".p-gmenu__list.in-table").stop().slideToggle();
      });
    });

    jQuery(function () {
      if (jQuery('.p-modal-window').children(':not(#modal-text)'));
      jQuery('#modal-text').insertAfter('.p-modal-window__button-close');
    });

    jQuery(function () {
      if (jQuery('.l-main').children(':not(.l-aside--left, .l-aside--right)'));
      jQuery('.l-aside--left').insertAfter('.p-products');
      jQuery('.l-aside--right').insertAfter('.l-aside--left');
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
    jQuery(function () {
      jQuery('.l-aside--left, .l-aside--right').css('opacity', '1')
    })
  }
}

//雲に重なったらテキストを黒に
jQuery(window).on('scroll load', function () {
  let offset = window.pageYOffset;
  let width = jQuery(window).width();
  let WidthHigh = width > 1220;
  let WidthLow = width < 1220;
  let scroll = jQuery('.p-posts').offset().top;
  let pcSize = offset > 1550 && offset < 1880 && WidthHigh;
  let mpSize = scroll < 1970 && offset > 1500 && offset < 1900 && WidthLow;

  // console.log(mpSize);
  // console.log(pcSize)
  console.log(offset)
  // console.log(scroll)

  if (pcSize || mpSize) {
    jQuery('.p-posts').addClass('black')
  } else {
    jQuery('.p-posts').removeClass('black')
  }
})

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


//ページ内リンク
jQuery(function () {
  // #で始まるアンカーをクリックした場合に処理
  jQuery('.p-gmenu__list.in-table li a[href^="#"]').click(function () {
    // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
    let adjust = -100;
    // スクロールの速度
    let speed = 400; // ミリ秒
    // アンカーの値取得
    let href = jQuery(this).attr("href");
    // 移動先を取得
    let target = jQuery(href == "#" || href == "" ? 'html' : href);
    // 移動先を調整
    let position = target.offset().top + adjust;
    // スムーススクロール
    jQuery('body,html,.l-main').animate({ scrollTop: position }, speed, 'swing');
    return false;

  });
});


//視線に追従する雲
jQuery(window).on()
jQuery(window).on('scroll', function () {

  let scrollTop = jQuery(window).scrollTop();
  let Position = scrollTop / 1.9; //スクロール後のポジションを指定（値を大きくすると移動距離が小さくなる）
  let Position2 = scrollTop / 1.5;

  if (Position) {
    jQuery('.layer-10').css('margin-top', Position + 'px');
    jQuery('.layer-11').css('margin-top', Position2 + 'px');
  }
});

//前景の山が迫り上がる。
jQuery(function () {
  jQuery(window).on('load', function () {
    jQuery('.layer-2').css('margin-top', '3030px')
    jQuery('.layer-2-2').css('margin-top', '2660px')
    jQuery('.layer-2-3').css('margin-top', '2500px')
  })
  jQuery(window).on('scroll', function () {
    jQuery('.layer-2').css('margin-top', 'unset')
    jQuery('.layer-2-2').css('margin-top', 'unset')
    jQuery('.layer-2-3').css('margin-top', 'unset')
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
      jQuery('.layer-2').addClass('up').css('margin-top', offsetMove + 'px');
      //アニメーションをする前の状態を表すクラス名'.upper'を付与し、合わせて'layer-2'を下方に待機させる。
    } else {
      jQuery('.layer-2').removeClass('up').css('margin-top', '2360px');
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

//ローディングアニメーション
window.onload = function () {
  const spinner = document.getElementById('loading');
  spinner.classList.add('loaded');
}


var unit = 100,
  canvasList, // キャンバスの配列
  info = {}, // 全キャンバス共通の描画情報
  colorList; // 各キャンバスの色情報

/**
* Init function.
* 
* Initialize variables and begin the animation.
*/
function init() {
  info.seconds = 0;
  info.t = 0;
  canvasList = [];
  colorList = [];
  // canvas1個めの色指定
  canvasList.push(document.getElementById("waveCanvas"));
  colorList.push(['rgba(12, 80, 198, 0.75) ']);
  // 各キャンバスの初期化
  for (var canvasIndex in canvasList) {
    var canvas = canvasList[canvasIndex];
    canvas.width = document.documentElement.clientWidth; //Canvasのwidthをウィンドウの幅に合わせる
    canvas.height = 650;//波の高さ
    canvas.contextCache = canvas.getContext("2d");
  }
  // 共通の更新処理呼び出し
  update();
}

function update() {
  for (var canvasIndex in canvasList) {
    var canvas = canvasList[canvasIndex];
    // 各キャンバスの描画
    draw(canvas, colorList[canvasIndex]);
  }
  // 共通の描画情報の更新
  info.seconds = info.seconds + .014;
  info.t = info.seconds * Math.PI;
  // 自身の再起呼び出し
  setTimeout(update, 200);
}

/**
* Draw animation function.
* 
* This function draws one frame of the animation, waits 20ms, and then calls
* itself again.
*/
function draw(canvas, color) {
  // 対象のcanvasのコンテキストを取得
  var context = canvas.contextCache;
  // キャンバスの描画をクリア
  context.clearRect(0, 0, canvas.width, canvas.height);

  //波を描画 drawWave(canvas, color[数字（波の数を0から数えて指定）], 透過, 波の幅のzoom,波の開始位置の遅れ )
  drawWave(canvas, color[0], 1, 2, 0);//drawWave(canvas, color[0],0.5, 3, 0);とすると透過50%の波が出来る
}

/**
* 波を描画
* drawWave(色, 不透明度, 波の幅のzoom, 波の開始位置の遅れ)
*/
function drawWave(canvas, color, alpha, zoom, delay) {
  var context = canvas.contextCache;
  context.fillStyle = color;//塗りの色
  context.globalAlpha = alpha;
  context.beginPath(); //パスの開始
  drawSine(canvas, info.t / 0.5, zoom, delay);
  context.lineTo(canvas.width + 10, canvas.height); //パスをCanvasの右下へ
  context.lineTo(0, canvas.height); //パスをCanvasの左下へ
  context.closePath() //パスを閉じる
  context.fill(); //波を塗りつぶす
}

/**
* Function to draw sine
* 
* The sine curve is drawn in 10px segments starting at the origin. 
* drawSine(時間, 波の幅のzoom, 波の開始位置の遅れ)
*/
function drawSine(canvas, t, zoom, delay) {
  var xAxis = Math.floor(canvas.height / 2);
  var yAxis = 0;
  var context = canvas.contextCache;
  // Set the initial x and y, starting at 0,0 and translating to the origin on
  // the canvas.
  var x = t; //時間を横の位置とする
  var y = Math.sin(x) / zoom;
  context.moveTo(yAxis, unit * y + xAxis); //スタート位置にパスを置く

  // Loop to draw segments (横幅の分、波を描画)
  for (i = yAxis; i <= canvas.width + 10; i += 10) {
    x = t + (-yAxis + i) / unit / zoom;
    y = Math.sin(x - delay) / 3;
    context.lineTo(i, unit * y + xAxis);
  }
}

init();


//ブール値 true or foals //データ型 ○ ストリング(文字列)　イント(数字) //リスト型○ //タイプスプリクト //視認性が悪い ○ //条件式 //イベントトリガー
//`hoge = ${scroll < trigger && scroll < goal
//リスト型

  //数値
  //移動前の位置 layer-2(margin-top: 2692px;) window(.scrollTop(): 1270px;) -1422px
  //移動後の位置 layer-2(margin-top: 2360px;) window(.scrollTop(): 1602px;) -758px
  //                                 -332px                        +332px   -664
