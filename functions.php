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

//投稿をお知らせに表示変更する
function Change_menulabel() {
global $menu;
global $submenu;
$name = 'お知らせ';
$menu[5][0] = $name;
$submenu['edit.php'][5][0] = $name.'一覧';
$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
global $wp_post_types;
$name = 'お知らせ';
$labels = &$wp_post_types['post']->labels;
$labels->name = $name;
$labels->singular_name = $name;
$labels->add_new = _x('追加', $name);
$labels->add_new_item = $name.'の新規追加';
$labels->edit_item = $name.'の編集';
$labels->new_item = '新規'.$name;
$labels->view_item = $name.'を表示';
$labels->search_items = $name.'を検索';
$labels->not_found = $name.'が見つかりませんでした';
$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

//メインクエりの変更
function change_set_post($query){
  if(is_admin() || !$query->is_main_query()){
    return;
  }
  if($query->is_front_page()) {
    $query->set('posts_per_page','3');
    return;
  }
  if($query->is_post_type_archive()) {
    $query->set('posts_per_page','9');
    return;
  }
}
add_action('pre_get_posts', 'change_set_post');


// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'news'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/**
 * アイキャッチ画像に対応する
 */
function my_after_setup_theme(){
  // アイキャッチ画像を有効にする
  add_theme_support( 'post-thumbnails' );
  // アイキャッチ画像サイズを指定する（横：640px 縦：384）
  // 画像サイズをオーバーした場合は切り抜き
  set_post_thumbnail_size( 640, 384, true );
}
add_action( 'after_setup_theme', 'my_after_setup_theme' );

//問い合わせ送信後にサンクスページに遷移
function add_thanks_page() {
  echo <<< EOD
  <script>
  document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = '/thanks';
  }, false );
  </script>
  EOD;
  }
  add_action( 'wp_footer', 'add_thanks_page' );
