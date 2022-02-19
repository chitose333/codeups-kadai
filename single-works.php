<?php get_header(); ?>
<section class="p-works-single">
  <div class="l-inner">
    <div class="l-breadcrumb">
      <p><?php bcn_display( ); ?></p>
    </div><!--/.l-breadcrumb-->
    <div class="l-single-inner p-works-single__inner">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts()): the_post(); ?>
          <div class="p-works-single__header c-single-header">
            <h1 class="c-single-header__title"><?php the_title(); ?></h1>
            <p class="c-single-header__subtitle"><?php echo get_the_date('Y.m.d'); ?>
              <span>
              <?php
                $terms = get_the_terms($post->ID, 'works_category');
                foreach($terms as $term) {
                  echo  '<a href=" ' . get_term_link( $term ). ' ">' . $term -> name . '</a>' ;
                }
              ?>
              </span>
            </p>
          </div>
          <div class="p-works-single__swiper">
            <div class="swiper p-works-single__slider">
              <!-- メイン -->
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works-detail/works1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works-detail/works2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works-detail/works4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works-detail/works5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works-detail/works6.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works-detail/works7.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works-detail/works8.jpg" alt=""></div>
              </div>
              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
            <!-- サムネイル -->
            <div class="swiper p-works-single__thumbs">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works-detail/works1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works-detail/works2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works-detail/works4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works-detail/works5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works-detail/works6.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works-detail/works7.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/works-detail/works8.jpg" alt=""></div>
              </div>
            </div>
          </div>
          <!--/.p-works-single__swiper-->
          <div class="p-works-single__points">
            <div class="c-point-item p-works-single__point">
              <p class="c-point-item__title">新郎様・新婦様のご要望</p>
              <p class="c-point-item__text">
                <?php the_field('request'); ?>
              </p>
            </div>
            <!-- /.point-item -->
            <div class="c-point-item p-works-single__point">
              <p class="c-point-item__title">挙式・披露宴を終えられてのご感想
              </p>
              <p class="c-point-item__text">
                <?php the_field('feeling'); ?>
              </p>
            </div>
            <!-- /.point-item -->
            <!-- <div class="c-point-item p-works-single__point">
              <p class="c-point-item__title">その他</p>
              <p class="c-point-item__text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </div> -->
            <!-- /.c-point-item -->
          </div>
          <!-- /.p-works-single__points -->
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <!-- /.p-works-single__inner -->
    <?php get_template_part('pagination'); ?>
  </div><!--/.l-inner-->
</section>
<!-- /.works-single -->
<?php get_footer(); ?>
