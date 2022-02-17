<section class="p-related l-related">
  <div class="l-inner">
    <!-- entry-related -->
    <!-- コピペ　-->
<!-- 終わり-->

    <div class="p-related__title">関連記事</div>
    <!-- /.p-related__title -->
    <div class="p-related__body">
      <?php if( has_category() ) {
        $post_cats = get_the_category();
        $cat_ids = array();
        //所属カテゴリーのIDリストを作っておく
        foreach($post_cats as $cat) {
        $cat_ids[] = $cat->term_id;
        }
      }

      $myposts = get_posts( array(
      'post_type' => 'post', // 投稿タイプ
      'posts_per_page' => '4', // ８件を取得
      'post__not_in' => array( $post->ID ),// 表示中の投稿を除外
      'category__in' => $cat_ids, // この投稿と同じカテゴリーに属する投稿の中から
      'orderby' => 'rand' // ランダムに
      ) );
      if( $myposts ): ?>
      <?php foreach($myposts as $post): setup_postdata($post);?>
        <div class="p-related__item c-card">
          <a href="<?php the_permalink(); ?>" class="c-card__link">
            <div class="c-card__header">
              <?php
                  if (has_post_thumbnail() ) {
                    // アイキャッチ画像が設定されてればミディアムサイズで表示
                    the_post_thumbnail('medium');
                  } else {
                    // なければnoimage画像をデフォルトで表示
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                  }
                  ?>
            </div>
            <div class="c-card__body">
              <div class="c-card__title"><?php the_title(); ?></div>
              <div class="c-card__footer">
                <div class="c-card__genre">
                  <?php
                    $categories = get_the_category();
                    if ( $categories ) {
                      echo $categories[0]->name;
                    }
                    ?>
                  </div>
                <div class="c-card__date">
                  <?php echo get_the_date('Y.m.d'); ?>
                </div>
              </div>
            </div>
          </a>
        </div><!--/.c-card__item-->
      <?php endforeach; wp_reset_postdata(); ?>
      <?php endif; ?>


      <!-- <li class="p-related__item c-card">
        <a href="#" class="c-card__link">
          <div class="c-card__header"><img src=""></div>
          <div class="c-card__body">
            <p class="c-card__title">タイトルが入ります。タイトルが入ります。</p>
            <div class="c-card__footer">
              <span class="c-card__genre">カテゴリ</span>
              <p class="c-card__date"><time datetime="2020-07-20">2020.7.20</time></p>
            </div>
          </div>
        </a>
      </li> -->
    </div>
    <!-- /.p-related__body -->
  </div>
  <!-- /.l-inner -->
    </section>
    <!-- /.related -->
