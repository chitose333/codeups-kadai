<?php get_header(); ?>
<div class="p-sub-main p-works-mainview">
    <h1 class="p-sub-main__title">制作実績</h1>
  </div><!--/.works-mainview-->
  <div class="l-inner">
    <div class="l-breadcrumb">
      <p><?php bcn_display( ); ?></p>
    </div><!--/.l-breadcrumb-->
    <div class="p-works__category c-category">
      <a href="#" class="c-category__btn c-category__btn--active">ALL</a>
      <a href="#" class="c-category__btn">カテゴリ1</a>
      <a href="#" class="c-category__btn">カテゴリ2</a>
      <a href="#" class="c-category__btn">カテゴリ3</a>
    </div>
    <div class="p-sub-works__list p-sub-works-list">
      <div class="p-sub-works-item">
        <a href="">
          <div class="p-sub-works-item__img"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-1.jpg" alt=""></div>
          <div class="p-sub-works-item__cate">
            <p>カテゴリ1</p>
          </div>
          <!-- /.sub-works__cate -->
          <div class="p-sub-works-item__title">
            <p>CodeUps株式会社</p>
          </div><!--/.sub-works__title-->
        </a>
      </div><!--/.p-sub-works-item-->
      <div class="p-sub-works-item">
        <a href="">
          <div class="p-sub-works-item__img"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-1.jpg" alt=""></div>
          <div class="p-sub-works-item__cate">
            <p>カテゴリ1</p>
          </div>
          <!-- /.sub-works__cate -->
          <div class="p-sub-works-item__title">
            <p>CodeUps株式会社</p>
          </div><!--/.sub-works__title-->
        </a>
      </div><!--/.p-sub-works-item-->
      <div class="p-sub-works-item">
        <a href="">
          <div class="p-sub-works-item__img"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-1.jpg" alt=""></div>
          <div class="p-sub-works-item__cate">
            <p>カテゴリ1</p>
          </div>
          <!-- /.sub-works__cate -->
          <div class="p-sub-works-item__title">
            <p>CodeUps株式会社</p>
          </div><!--/.sub-works__title-->
        </a>
      </div><!--/.p-sub-works-item-->
      <div class="p-sub-works-item">
        <a href="">
          <div class="p-sub-works-item__img"><img src="<?php echo get_template_directory_uri(); ?>/images/works/works-1.jpg" alt=""></div>
          <div class="p-sub-works-item__cate">
            <p>カテゴリ1</p>
          </div>
          <!-- /.sub-works__cate -->
          <div class="p-sub-works-item__title">
            <p>CodeUps株式会社</p>
          </div><!--/.sub-works__title-->
        </a>
      </div><!--/.p-sub-works-item-->
    </div>
    <!-- /.works__list -->

    <?php get_template_part('pagination'); ?>

  </div><!--/.l-inner-->

<?php get_footer(); ?>
