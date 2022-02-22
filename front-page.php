<?php get_header(); ?>
  <div class="p-top-mainview">
    <div class="wrap">
      <div class="swiper-container u-desktop">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slide-img">
              <!-- <img class="u-mobile" src="<?php echo get_template_directory_uri(); ?>/images/sp/sp-MV1.jpg" alt="img1"> -->
              <img class="" src="<?php echo get_template_directory_uri(); ?>/images/pc/pc-MV4.jpg" alt="img1">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-img">
              <!-- <img class="u-mobile" src="<?php echo get_template_directory_uri(); ?>/images/sp/sp-MV2.jpg" alt="img2"> -->
              <img class="" src="<?php echo get_template_directory_uri(); ?>/images/pc/pc-MV5.jpg" alt="img1">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-img">
              <!-- <img class="u-mobile" src="<?php echo get_template_directory_uri(); ?>/images/sp/sp-MV3.jpg" alt="img3"> -->
              <img class="" src="<?php echo get_template_directory_uri(); ?>/images/pc/pc-MV6.jpg" alt="img1">
            </div>
          </div>
        </div>
      </div><!--/.swiper-container /.u-desktop-->
      <div class="swiper-container u-mobile">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slide-img">
              <img class="" src="<?php echo get_template_directory_uri(); ?>/images/sp/sp-MV4.jpg" alt="img1">
              <!-- <img class="" src="<?php echo get_template_directory_uri(); ?>/images/pc/pc-MV1.jpg" alt="img1"> -->
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-img">
              <img class="" src="<?php echo get_template_directory_uri(); ?>/images/sp/sp-MV5.jpg" alt="img2">
              <!-- <img class="" src="<?php echo get_template_directory_uri(); ?>/images/pc/pc-MV2.jpg" alt="img1"> -->
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-img">
              <img class="" src="<?php echo get_template_directory_uri(); ?>/images/sp/sp-MV6.jpg" alt="img3">
              <!-- <img class="" src="<?php echo get_template_directory_uri(); ?>/images/pc/pc-MV3.jpg" alt="img1"> -->
            </div>
          </div>
        </div>
      </div><!--/.swiper-container /.u-mobile-->
      <!-- Add Pagination
      <div class="swiper-pagination"></div> -->
    </div>
    <div class="p-top-mainview__titlebox">
      <h1 class="p-top-mainview__title">大切な人たちと、最高の時間</h1>
      <p class="p-top-mainview__subtitle">あなたに最適のウェディングを。</p>
    </div>
  </div><!--/.top-mainview-->
  <div class="p-top-news p-news l-inner">
  <?php
    $args = array(
    'post_type' => 'post',
    'posts_per_page' => '3',
  );
    $the_query = new WP_Query($args);
  ?>
  <?php if( $the_query -> have_posts() ): ?>
  <ul class="p-top-news__list">
    <?php while( $the_query -> have_posts()): $the_query -> the_post(); ?>
        <li class="p-top-news__item p-news-item">
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
            <a href="<?php the_permalink(); ?>" class="p-news-item__titletext">
              <?php the_title(); ?>
            </a>
          </div>
          <!-- /.news__item__body -->
        </li>
        <!-- /.news__item -->
        <?php endwhile;?>
        <?php wp_reset_postdata(); ?>
      </ul><!-- /.news__list -->
      <?php endif; ?>
      <div class="p-top-news__footer">
          <a  class="p-top-news__button" href="<?php echo esc_url( home_url( '/news' ) ); ?>">すべて見る</a>
      </div>
  </div>
  <!-- /.news -->


  <section class="p-top-content l-section p-top-content-margin">
    <div class="p-top-content__header c-section__headers">
      <div class="l-inner">
        <div class="c-section-title__container">
          <h2 class="c-section-title">サービス</h2>
          <span class="c-section-title__sub">Service</span>
        </div>
      </div>
    </div><!--/.content__header-->
    <ul class="p-top-content__list">
      <li class="p-top-content__item p-top-content-unit">
        <a href="<?php echo esc_url( home_url( '/content' ) ); ?>">
          <div class="p-top-content-unit__body">
            <div class="p-top-content-unit__img p-content__img1"></div>
            <p>挙式</p>
          </div>
        </a>
      </li>
      <li class="p-top-content__item p-top-content-unit">
        <a href="<?php echo esc_url( home_url( '/content' ) ); ?>">
          <div class="p-top-content-unit__body">
            <div class="p-top-content-unit__img p-content__img2"></div>
            <p>披露宴</p>
          </div>
        </a>
      </li>
      <li class="p-top-content__item p-top-content-unit">
        <a href="<?php echo esc_url( home_url( '/content' ) ); ?>">
          <div class="p-top-content-unit__body">
            <div class="p-top-content-unit__img p-content__img3"></div>
            <p>フォトサービス</p>
          </div>
        </a>
      </li>
      <li class="p-top-content__item p-top-content-unit">
        <a href="<?php echo esc_url( home_url( '/content' ) ); ?>">
          <div class="p-top-content-unit__body">
            <div class="p-top-content-unit__img p-content__img4"></div>
            <p>２次会など</p>
          </div>
        </a>
      </li>
    </ul>
  </section>
  <section class="top-works l-section">
    <div class="l-inner">
      <div class="top-works__header c-section__header">
        <div class="c-section-title__container">
          <h2 class="c-section-title">挙式・披露宴のご紹介</h2>
          <span class="c-section-title__sub c-section-title__sub--right">Works</span>
        </div>
      </div>
    </div>
    <div class="p-top-works__bg">
      <div class="p-top-works__container">
          <div class="p-top-works__img">
            <!-- Swiper START -->
            <div class="swiper-container">
              <?php
                $args = array(
                'post_type' => 'works',
                'posts_per_page' => '3',
              );
                $the_query = new WP_Query($args);
              ?>
              <?php if( $the_query -> have_posts() ): ?>
              <div class="swiper-wrapper">
                <?php while( $the_query -> have_posts()): $the_query -> the_post(); ?>
                <div class="swiper-slide">
                  <?php the_post_thumbnail('large'); ?>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              </div>
              <?php endif; ?>
            </div>
            <div class="swiper-pagination"></div>
            <!-- Swiper END -->
          </div><!--/.top-works__img-->
          <div class="p-top-works__body">
            <div class="c-util-body">
              <h3 class="c-util-body__title">私たちのホームパーティに招待したような披露宴にしたかった。</h3>
              <p class="c-util-body__text">きてくれた友人たちから口々に「とても良い会だった」と言ってもらえ、とても安心した。
              私たちのホームパーティーにみんなを招待したようなものにしたかったので、
              まさに理想的な雰囲気で楽しく・とても賑やかで良かったです！  </p>
              <div class="c-util-link__container util-body__footer">
                <a class="c-util-link" href="<?php echo esc_url( home_url( '/works' ) ); ?>">詳しく見る</a>
              </div>
            </div>
          </div><!--/.top-works__body-->
      </div><!--/.top-works__container-->
    </div><!-- /.top-works__bg -->
  </section>
  <!-- /.top-works -->
  <section class="p-top-overview l-section">
    <div class="p-top-overview__header c-section__header l-inner">
      <div class="c-section-title__container">
        <h2 class="c-section-title">企業概要</h2>
        <span class="c-section-title__sub">Overview</span>
      </div>
    </div>
    <div class="p-top-overview__bg">
      <div class="p-top-overview__container">
        <div class="p-top-overview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/works8.jpg" alt="">
        </div><!--/.p-top-overview__img-->
        <div class="c-util-body p-top-overview__body">
          <h3 class="c-util-body__title">大切な人と、最高の時間。</h3>
          <p class="c-util-body__text">当社では「大切な人と最高の時間」を過ごしてほしいとの思いから、あなたに最適なウェディングをご提案させていただきます。</p>
          <div class="c-util-link__container util-body__footer">
            <a class="c-util-link" href="<?php echo esc_url( home_url( '/overview' ) ); ?>">詳しく見る</a>
          </div>
        </div><!--/.p-top-overview__body-->
      </div><!-- /.p-top-overview__container -->
    </div><!--/.p-top-overview__bg-->
  </section>
  <!-- /.p-top-overview section -->
  <section id="blog" class="p-top-blog l-section">
    <div class="l-inner">
      <div class="p-top-blog__header c-section__header">
        <div class="c-section-title__container">
          <h2 class="c-section-title">ブログ</h2>
          <span class="c-section-title__sub c-section-title__sub--right">Blog</span>
        </div>
      </div><!--/.blog__header-->
      <?php
        $args = array(
          'post_type' => 'blog',
          'posts_per_page' => '3',
        );
        $the_query = new WP_Query($args);
      ?>
      <?php if( $the_query -> have_posts() ): ?>
      <ul class="c-cards p-blog__items">
        <?php while( $the_query -> have_posts()): $the_query -> the_post(); ?>
        <li class="c-cards__item c-card p-top-blog__item">
          <!-- <div class="c-card__is-new">
            <span class="">New</span>
          </div>
        .p-sub-blog__item:not(:first-child)-->
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
                <span class="c-card__genre">
                  <?php echo esc_html( get_the_terms( get_the_ID(), 'blog_category' )[0]->name ); ?>
                </span>
                <p class="c-card__date"><time datetime="<?php echo get_the_date('Y/m/d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time></p>
              </div>
            </div>
          </a>
        </li><!--/.c-card__item-->
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </ul><!--/.c-card__list-->
      <?php endif; ?>
      <div class="p-top-blog__footer">
        <div class="c-util-link__container">
          <a class="c-util-link" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">詳しく見る</a>
        </div>
      </div>
    </div><!--/.l-inner-->
  </section>
  <!-- /.blog section -->
  <?php get_footer(); ?>
