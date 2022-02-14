<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description" content="descriptionです" />
  <meta name="keywords" content="keywordsいれるよ" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <!-- <link rel="”icon”" href="./images/common/" /> -->
  <!--google-fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="./css/styles.css">
  <!--swiper-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.js"></script>
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script defer src="./js/script.js"></script>
</head>
<body>
  <?php wp_body_open(); ?>
  <!-- <div class="c-bg-border"></div>
  <div class="c-bg-border2"></div> -->
  <header class="l-header">
    <div class="l-header__inner">
      <div class="l-header__logo">
        <a class="logo__link" href="#">
          <img src="./images/common/CodeUps.png" alt="">
        </a>
      </div>
      <a id="MenuButton" href="#" class="sp-header__drawer c-hamburger js-drawer-open">
        <span></span>
        <span></span>
        <span></span>
      </a>
      <nav class="l-header__drawer c-drawer-menu">
        <ul class="c-drawer-menu__items">
          <li class="c-drawer-menu__item"><a href="">トップ</a></li>
          <li class="c-drawer-menu__item"><a href="">お知らせ</a></li>
          <li class="c-drawer-menu__item"><a href="">事業内容</a></li>
          <li class="c-drawer-menu__item"><a href="">制作実績</a></li>
          <li class="c-drawer-menu__item"><a href="">企業概要</a></li>
          <li class="c-drawer-menu__item"><a href="">ブログ</a></li>
          <li class="c-drawer-menu__item"><a href="">お問い合わせ</a></li>
        </ul>
      </nav>
      <nav class="l-header__nav c-pc-nav">
        <ul class="c-pc-nav__items">
          <li class="c-pc-nav__item"><a href="">お知らせ</a></li>
          <li class="c-pc-nav__item"><a href="">事業内容</a></li>
          <li class="c-pc-nav__item"><a href="">制作実績</a></li>
          <li class="c-pc-nav__item"><a href="">企業概要</a></li>
          <li class="c-pc-nav__item"><a href="">ブログ</a></li>
          <li class="c-pc-nav__item c-pc-nav__item--white"><a href="">お問い合わせ</a></li>
        </ul>
      </nav>
    </div><!--header__inner-->
    <?php wp_head(); ?>
  </header>
  <!-- /.header -->
  <div class="js-drawer-menu"></div>