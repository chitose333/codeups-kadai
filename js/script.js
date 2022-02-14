
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.pagetop');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  //ドロワーメニュー
  $("#MenuButton").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-open").toggleClass("open");
    $(".c-drawer-menu").toggleClass("open");
    $(".js-drawer-menu__bg").toggleClass("open");
    $("html").toggleClass("is-fixed");

  });


  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });


  //headerの背景色変化
  $( window ).on( 'scroll', function () {
    // let mainview = $('mainview').innerHeight();
    if ( jQuery('.p-top-mainview').height() < jQuery( this ).scrollTop() ) {
      jQuery( '.l-header' ).addClass( 'change-color' );
    } else {
      jQuery( '.l-header' ).removeClass( 'change-color' );
    }
  });

  //mainviewのswiper
  let swipeOption = {
    loop: true,
    effect: 'fade',
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 2000,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    }
  }
  new Swiper('.swiper-container', swipeOption);

    //   制作実績詳細のスライダー
  // サムネイル
  var thumbs = new Swiper ('.p-works-single__thumbs', {
    slidesPerView: 'auto',
    // spaceBetween: 8,
    breakpoints: {
      300: {
        spaceBetween: 24,
      },
      768: {
        spaceBetween: 8,
      }
    },
    centeredSlides: true,
    loop: true,
    slideToClickedSlide: true,
  });
  //メイン
  var slider = new Swiper ('.p-works-single__slider', {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    loopedSlides: 8, //スライドの枚数と同じ値を指定
    autoplay: {
      delay: 4000,
      disableOnInteraction: true,
    },
    speed:2000,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
  });
  //4系～
  //メインとサムネイルを紐づける
  thumbs.controller.control = slider;
  slider.controller.control = thumbs;

});
