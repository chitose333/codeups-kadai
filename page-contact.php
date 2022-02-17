<?php get_header(); ?>
<div class="p-sub-main p-contact-mainview">
    <h1 class="p-sub-main__title">お問い合わせ</h1>
  </div><!--/.news-mainview-->
  <section class="p-contact">
    <div class="l-inner">
      <div class="l-breadcrumb">
        <p><?php bcn_display( ); ?></p>
      </div><!--/.l-breadcrumb-->
      <?php echo do_shortcode('[contact-form-7 id="49" title="コンタクトフォーム 1"]'); ?>

    </div><!--/.l-inner-->
  </section>
  <!-- /.page-contact -->

<?php get_footer(); ?>
