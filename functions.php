<?php
/**
* CSSとJavaScriptの読み込み
*/
function my_scripts(){
  wp_enqueue_style('GoogleFonts', 'https://fonts.googleapis.com/css?family=Julius+Sans+One&family|Noto+Sans+JP:wght@300;400;500&display=swap');

  wp_enqueue_style('Swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css');

  wp_enqueue_style('my-css', get_theme_file_uri('/css/styles.css'), array(), '1.0.0', 'all');

  wp_enqueue_script('Swiper-script', 'https://unpkg.com/swiper@7/swiper-bundle.min.js' , array( 'jquery' ));

  //ほんとはここにAdobe-Fonts読み込みたかった

  wp_enqueue_script('my-script', get_theme_file_uri('/js/script.js'));
}
add_action('wp_enqueue_scripts', 'my_scripts');

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'blog'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
