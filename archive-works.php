<?php get_header(); ?>
<div class="p-sub-main p-works-mainview">
    <h1 class="p-sub-main__title">挙式・披露宴のご紹介</h1>
  </div><!--/.works-mainview-->
  <div class="l-inner">
    <div class="l-breadcrumb">
      <p><?php bcn_display( ); ?></p>
    </div><!--/.l-breadcrumb-->
    <div class="p-works__category c-category">
      <?php if(get_queried_object_id()): ?><!--現在のタームが空じゃなかったら、ALLは変色しない-->
      <a class="c-category__btn" href="<?php echo esc_url( home_url( '/works' ) ); ?>">ALL</a>
      <?php else: ?><!--現在のタームが空だったら、ALLは変色する-->
        <a class="c-category__btn is-active" href="<?php echo esc_url( home_url( '/works' ) ); ?>">ALL</a>
      <?php endif; ?>
      <?php
        $genre_terms = get_terms( 'works_category', array( 'hide_empty' => true ) );
        foreach ( $genre_terms as $genre_term ) :
      ?>
        <?php if($genre_term->term_id == get_queried_object_id()): ?>
          <!--foreachで取得してきたタームと現在のタームのIDが一致したら、変色-->
          <a class="c-category__btn is-active" href="<?php echo esc_url( get_term_link( $genre_term, 'genre' ) ); ?>">
          <?php echo esc_html( $genre_term->name ); ?>
          </a>
        <?php else: ?><!--foreachで取得してきたタームと現在のタームのIDが一致しなかったら-->
            <a class="c-category__btn" href="<?php echo esc_url( get_term_link( $genre_term, 'genre' ) ); ?>">
        <?php echo esc_html( $genre_term->name ); ?>
        </a>
        <?php endif; ?>
      <?php
        endforeach;
      ?>
      <!-- <a href="#" class="c-category__btn c-category__btn--active">ALL</a>
      <a href="#" class="c-category__btn">カテゴリ1</a>
      <a href="#" class="c-category__btn">カテゴリ2</a>
      <a href="#" class="c-category__btn">カテゴリ3</a> -->
    </div>
    <?php if ( have_posts()) : ?>
    <div class="p-sub-works__list p-sub-works-list">
      <?php while (have_posts()) : the_post(); ?>
      <div class="p-sub-works-item">
        <a href="<?php the_permalink(); ?>">
          <div class="p-sub-works-item__img">
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
          <div class="p-sub-works-item__cate">
            <p>
              <?php echo esc_html( get_the_terms( get_the_ID(), 'works_category' )[0]->name ); ?>
            </p>
          </div>
          <!-- /.sub-works__cate -->
          <div class="p-sub-works-item__title">
            <p><?php the_title(); ?></p>
          </div><!--/.sub-works__title-->
        </a>
      </div><!--/.p-sub-works-item-->
      <?php endwhile; ?>
    </div>
    <!-- /.works__list -->
    <?php endif; ?>
    <?php get_template_part('pagination'); ?>

  </div><!--/.l-inner-->

<?php get_footer(); ?>
