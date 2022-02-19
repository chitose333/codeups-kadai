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
