<section class="p-related l-related">
  <div class="l-inner">
    <div class="p-related__title">関連記事</div>
    <!-- 投稿ページだったら -->
    <?php if(get_post_type() === 'post'):  ?>
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
                <p class="c-card__title"><?php the_title(); ?></p>
                <div class="c-card__footer">
                  <p class="c-card__genre">
                    <?php
                      $categories = get_the_category();
                      if ( $categories ) {
                        echo $categories[0]->name;
                      }
                      ?>
                  </p>
                  <p class="c-card__date">
                    <?php echo get_the_date('Y.m.d'); ?>
                  </p>
                </div>
              </div>
            </a>
          </div><!--/.c-card__item-->
        <?php endforeach; wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <!-- /.p-related__body -->
    </div>
  <!-- 投稿の記事ページ以外だったら -->
  <?php else: ?>
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
        'post_type' => 'blog', // 投稿タイプ
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
                <p class="c-card__title"><?php the_title(); ?></p>
                <div class="c-card__footer">
                  <p class="c-card__genre">
                    <?php echo esc_html( get_the_terms( get_the_ID(), 'blog_category' )[0]->name ); ?>
                  </p>
                  <p class="c-card__date">
                    <?php echo get_the_date('Y.m.d'); ?>
                  </p>
                </div>
              </div>
            </a>
          </div><!--/.c-card__item-->
        <?php endforeach; wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <!-- /.p-related__body -->
    </div>
  <?php endif; ?>
  <!-- /.l-inner -->
</section>
<!-- /.related -->
