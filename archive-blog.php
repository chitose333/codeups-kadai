<?php get_header(); ?>
<div class="p-sub-main p-blog-mainview">
    <h1 class="p-sub-main__title">ブログ</h1>
  </div><!--/.news-mainview-->
  <div class="l-inner">
    <div class="l-breadcrumb">
      <p><?php bcn_display( ); ?></p>
    </div><!--/.l-breadcrumb-->
    <div class="p-sub-blog__category c-category">
      <a href="#" class="c-category__btn c-category__btn--active">ALL</a>
      <a href="#" class="c-category__btn">カテゴリ1</a>
      <a href="#" class="c-category__btn">カテゴリ2</a>
      <a href="#" class="c-category__btn">カテゴリ3</a>
    </div>
    <?php if ( have_posts() ) : ?>
    <ul class="c-cards p-sub-blog__items">
      <?php while ( have_posts() ) : the_post(); ?>
      <li class="p-sub-blog__item c-card">
        <!-- <div class="c-card__is-new">
          <span class="">New</span>
        </div> -->
        <a href="<?php the_permalink(); ?>" class="c-card__link">
          <div class="c-card__header">
            <?php
            if (has_post_thumbnail() ) {
              // アイキャッチ画像が設定されてれば大サイズで表示
              the_post_thumbnail('large');
              } else {
              // なければnoimage画像をデフォルトで表示
              echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
              }
            ?>
          </div>
          <div class="c-card__body">
            <p class="c-card__title"><?php the_title(); ?></p>
            <p class="c-card__text"><?php the_excerpt(); ?></p>
            <div class="c-card__footer">
              <p class="c-card__genre">
              <?php echo esc_html( get_the_terms( get_the_ID(), 'blog_category' )[0]->name ); ?>
              </p>
              <p class="c-card__date"><time datetime="<?php echo get_the_date('Y/m/d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time></p>
            </div>
          </div>
        </a>
      </li><!--/.c-card__item-->
      <?php endwhile;?>
    </ul><!--/.c-card__list-->
    <?php endif; ?>

    <?php get_template_part('pagination'); ?>

  </div>
  <!--/.l-inner-->
<?php get_footer(); ?>
