<?php if( is_archive() || is_home() ) : ?>
  <div class="c-pagination l-pagination">
    <div class="c-pagination__container">
    <?php the_posts_pagination(
      array(
          'mid_size'      => 0, // 現在ページの左右に表示するページ番号の数
          'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
          'prev_text'     => __( 'PREV'), // 「前へ」リンクのテキスト
          'next_text'     => __( 'NEXT'), // 「次へ」リンクのテキスト
          'type'          => 'plain', // 戻り値の指定 (plain/list)
      )
    ); ?>
      <!-- <div class="c-pagination__prev c-prev">
        <a href="">PREV</a>
      </div>
      <div class="c-pagination__btn c-page-btn is-now">
        <a href="">1</a>
      </div>
      <div class="c-pagination__btn c-page-btn">
        <a href="">2</a>
      </div>
      <div class="c-pagination__btn c-page-btn">
        <a href="">3</a>
      </div>
      <div class="c-pagination__btn c-page-btn">
        <a href="">4</a>
      </div>
      <div class="c-pagination__next c-next">
        <a href="">NEXT</a>
      </div> -->
    </div>
  </div><!--/.c-pagination-->
<?php else: ?>
  <div class="c-single-pagination l-single-pagination">
    <div class="c-pagination__container">
      <!-- <div class="c-pagination__prev c-prev">
        <?php previous_post_link('%link', '&laquo; %title'); ?>
      </div> -->
      <?php if( get_previous_post_link() ) : ?>
      <div class="c-pagination__prev c-prev">
        <?php previous_post_link('%link', '&laquo; %title'); ?>
      </div>
      <?php endif; ?>
      <div class="c-pagination__btn c-page-btn is-now">
        <?php if(get_post_type() === 'post'):  ?>
          <a href="<?php echo esc_url( home_url( '/news' ) ); ?>">一覧</a>
        <?php elseif(get_post_type() === 'works'):  ?>
          <a href="<?php echo esc_url( home_url( '/works' ) ); ?>">一覧</a>
        <?php else: ?>
          <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">一覧</a>
        <?php endif; ?>
      </div>
      <?php if( get_next_post_link() ) : ?>
      <div class="c-pagination__next c-next">
        <?php next_post_link('%link', '%title &raquo;'); ?>
      </div>
    <?php endif; ?>

    </div>
  </div><!--/.c-single-pagination-->
<?php endif; ?>
