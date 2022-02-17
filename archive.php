<?php get_header(); ?>
  <div class="p-sub-main p-news-mainview">
    <h1 class="p-sub-main__title">お知らせ</h1>
  </div><!--/.news-mainview-->
  <div class="l-inner">
    <div class="l-breadcrumb">
      <p><?php bcn_display( ); ?></p>
    </div><!--/.l-breadcrumb-->
  </div>
  <section class="p-news-section">
    <div class="l-inner">
      <?php if ( have_posts() ) : ?>
      <ul class="p-news__list">
          <?php while ( have_posts() ) : the_post(); ?>
        <li class="p-news__item p-news-item">
          <div class="p-news-item__header">
            <p class="p-news-item__date"><time datetime="<?php echo get_the_date('Y/m/d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time></p>
            <p class="p-news-item__genre">
              <?php
            $categories = get_the_category();
            if ( $categories ) {
              echo $categories[0]->name;
            }
            ?>
          </p>
          </div>
          <div class="p-news-item__title">
            <a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="p-news-item__titletext"><?php the_title(); ?></a>
          </div>
          <!-- /.p-news__item__body -->
        </li>
          <?php endwhile;?>
        </ul><!-- /.news__list -->
        <?php endif; ?>

      <?php get_template_part('pagination'); ?>
    </div>
    <!--l-inner-->
  </section>
  <!-- /.news-section -->
<?php get_footer(); ?>
