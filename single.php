<?php get_header(); ?>
<section class="l-single p-single">
    <div class="l-inner">
      <div class="l-breadcrumb">
        <p><?php bcn_display( ); ?></p>
      </div><!--/.l-breadcrumb-->
      <div class="l-single-inner p-single-container">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="p-single__header">
              <h1><?php the_title(); ?></h1>
              <p class="p-single__date">
                <?php echo get_the_date('Y/m/d'); ?>
              </p>
              <div class="p-single__cat">
                <?php the_category(); ?>
              </div>
              <!-- entry-tag-items -->
              <?php $post_tags = get_the_tags(); ?>
              <div class="entry-tag-items">
              <!-- <div class="entry-tag-head">タグ</div> -->
              <?php if ( $post_tags ) : ?>
              <?php foreach ( $post_tags as $tag ) : ?>
              <div class="entry-tag-item"><a href="<?php echo esc_url( get_tag_link($tag->term_id) ); ?>"><?php echo esc_html( $tag->name ); ?></a></div><!-- /entry-tag-item -->
              <?php endforeach; ?>
              <?php endif; ?>
              </div><!-- /entry-tag-items -->
            </div>
            <!-- /.p-single__header -->
          <!-- <?php
            if (has_post_thumbnail() ) {
            // アイキャッチ画像が設定されてれば大サイズで表示
            the_post_thumbnail('large');
            } else {
            // なければnoimage画像をデフォルトで表示
            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
            }
          ?> -->
          <?php the_content(); ?>
<!--
          <div class="single-blog__img">
            <img src="./assets/images/single-blog/single-blog.jpg" alt="">
          </div> -->
          <!-- <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

          <h2 class="blog-heading2">見出し２</h2>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          <ul class="single-blog__ul">
            <li class="single-blog__li">リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li class="single-blog__li">リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li class="single-blog__li">リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li class="single-blog__li">リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
          </ul>
          <ol class="single-blog__ol">
            <li class="single-blog__ol-li">リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li class="single-blog__ol-li">リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li class="single-blog__ol-li">リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li class="single-blog__ol-li">リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
          </ol> -->
        </div>
          <?php endwhile;?>
        <?php endif; ?>

      </div>
      <!-- /.single-blog__inner -->

      <?php get_template_part('single-pagination'); ?>
      <?php get_template_part('related'); ?>

    </div><!--/.l-inner-->
  </section>
  <!-- /.single-works -->

<?php get_footer(); ?>
