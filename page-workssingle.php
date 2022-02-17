<?php get_header(); ?>
<section class="p-works-single">
  <div class="l-inner">
    <div class="l-breadcrumb">
      <p><?php bcn_display( ); ?></p>
    </div><!--/.l-breadcrumb-->
    <div class="l-single-inner p-works-single__inner">
      <div class="p-works-single__header c-single-header">
        <h1 class="c-single-header__title">〇〇株式会社様 制作実績</h1>
        <p class="c-single-header__subtitle">2020/06/13<span>カテゴリ１</span></p>
      </div>
      <div class="p-works-single__swiper">
        <div class="swiper p-works-single__slider">
          <!-- メイン -->
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/single-works/works-detail__1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/single-works/works-detail__3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/single-works/works-detail__4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/single-works/works-detail__5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/single-works/works-detail__6.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/single-works/works-detail__7.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/single-works/works-detail__8.jpg" alt=""></div>
          </div>
          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <!-- サムネイル -->
        <div class="swiper p-works-single__thumbs">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/single-works/works-detail__1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/single-works/works-detail__3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/single-works/works-detail__4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/single-works/works-detail__5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/single-works/works-detail__6.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/single-works/works-detail__7.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/single-works/works-detail__8.jpg" alt=""></div>
          </div>
        </div>
      </div>
      <!--/.p-works-single__swiper-->
      <div class="p-works-single__points">
        <div class="c-point-item p-works-single__point">
          <p class="c-point-item__title">制作のポイント</p>
          <p class="c-point-item__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </div>
        <!-- /.point-item -->
        <div class="c-point-item p-works-single__point">
          <p class="c-point-item__title">デザインのポイント</p>
          <p class="c-point-item__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </div>
        <!-- /.point-item -->
        <div class="c-point-item p-works-single__point">
          <p class="c-point-item__title">その他</p>
          <p class="c-point-item__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </div>
        <!-- /.c-point-item -->
      </div>
      <!-- /.p-works-single__points -->
    </div>
    <!-- /.p-works-single__inner -->
    <?php get_template_part('single-pagination'); ?>
    <?php get_template_part('related'); ?>
  </div><!--/.l-inner-->
</section>
<!-- /.works-single -->
<?php get_footer(); ?>
