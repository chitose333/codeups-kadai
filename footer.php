<!--コンタクトページだったら-->
<?php if( is_page('47', '50') ) : ?>
  <!-- footerのみ表示-->
  <footer class="p-footer">
    <div class="p-footer__container">
      <div class="p-footer__logo"><img src="./images/common/CodeUps.png" alt=""></div>
      <nav class="p-footer__menu">
        <ul class="p-footer__menu__items">
          <li class="p-footer__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a></li>
          <li class="p-footer__menu__item"><a href="<?php echo esc_url( home_url( '/news' ) ); ?>">お知らせ</a></li>
          <li class="p-footer__menu__item"><a href="<?php echo esc_url( home_url( '/content' ) ); ?>">事業内容</a></li>
          <li class="p-footer__menu__item"><a href="<?php echo esc_url( home_url( '/overview' ) ); ?>">企業概要</a></li>
          <li class="p-footer__menu__item"><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">ブログ</a></li>
        </ul>
      </nav>
    </div><!--/.p-footer__container-->
    <div class="p-footer__copyright">
      <p> &copy; 2022 C-links Inc.</p>
    </div>
  </footer>
  <div class="c-pagetop">
    <!-- <a href="#" class="pagetop__link"> -->
      <div class="c-pagetop__icon"></div>
    <!-- </a> -->
  </div>
  <?php wp_footer(); ?>
</body>
</html>

<?php else: ?>
  <!-- コンタクトページ以外だったら -->
  <section class="p-contact">
  <div class="p-contact__bg">
    <div class="p-contact__container l-inner">
      <div class="p-contact__header c-section__header">
        <div class="c-section-title__container">
          <h2 class="c-section-title">お問い合わせ</h2>
          <span class="c-section-title__sub">Contact</span>
        </div>
      </div><!--/.p-top-contact__header-->
      <div class="p-contact__body">
        <p class="p-contact__text">いつでも挙式場や披露宴会場のご見学ができます。<br>お気軽にご連絡くださいませ。</p>
      </div>
      <div class="p-contact__footer">
        <div class="c-util-link__container">
          <a class="c-util-link c-util-link--contact" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">お問い合わせへ</a>
        </div>
      </div>
    </div><!--/.p-top-contact__container-->
  </div><!--/.p-top-contact__bg-->
</section>
<!-- /.p-top-contact section -->
<footer class="p-footer">
    <div class="p-footer__container">
      <div class="p-footer__logo"><img src="./images/common/CodeUps.png" alt=""></div>
      <nav class="p-footer__menu">
        <ul class="p-footer__menu__items">
          <li class="p-footer__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a></li>
          <li class="p-footer__menu__item"><a href="<?php echo esc_url( home_url( '/news' ) ); ?>">お知らせ</a></li>
          <li class="p-footer__menu__item"><a href="<?php echo esc_url( home_url( '/content' ) ); ?>">事業内容</a></li>
          <li class="p-footer__menu__item"><a href="<?php echo esc_url( home_url( '/overview' ) ); ?>">企業概要</a></li>
          <li class="p-footer__menu__item"><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">ブログ</a></li>
          <li class="p-footer__menu__item p-footer__menu__item--p-top-contact"><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">お問い合わせ</a></li>
        </ul>
      </nav>
    </div><!--/.p-footer__container-->
    <div class="p-footer__copyright">
      <p> &copy; 2022 C-links Inc.</p>
    </div>
  </footer>
  <div class="c-pagetop">
    <a href="#" class="pagetop__link">
      <div class="c-pagetop__icon"></div>
    </a>
  </div>
  <?php wp_footer(); ?>
</body>
</html>

<?php endif; ?>
