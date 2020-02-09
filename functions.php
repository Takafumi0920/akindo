<?php 
function akindoyawp_scripts() {
	//ここに関数の中身を記述
	wp_enqueue_style( 'akindoyawp-style' , get_stylesheet_uri() );
	wp_enqueue_style( 'akindoyawp-style' , get_template_directory_uri() . '/css/menu-jquery.css');
}

add_action( 'wp_enqueue_scripts' , 'akindoyawp_scripts' );

function akindoyawp_setup() {
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'post-thumbnails' );
	
	add_image_size( 'akindoyawp-thumbnail');//テーマサムネ呼び出し
	
	add_image_size( 'akindoyawp-hero',1200,630,true );//トップ画像サイズ設定
	
	add_theme_support('menus');//フッター用カスタムメニュー実装
	
//カスタムメニュー登録
	register_nav_menus( array(
		'global' => 'トップページナビ',
	));
	
}

add_action( 'after_setup_theme' , 'akindoyawp_setup' );

//サイドバー追加
function akindoyawp_widgets_init() {
	register_sidebar( array(
		'name'	=>	'サイドバー',
		'id'	=>	'sidebar',
	));
}
add_action( 'widgets_init','akindoyawp_widgets_init');

//管理画面メニューからliタグクラスを入力し、aタグのクラスとして付与する。出典：https://blog.simmon.design/add-any-classes-to-custom-menu-link-in-wordpress/
add_filter( 'walker_nav_menu_start_el', function( $item_output, $item ) {

    $link_classes = '';
    // カスタムメニューのリストに付いているクラスはデフォルトでmenu-itemとcurrent-という文字が含まれているので、
    // それが含まれていないクラス（フォームから追加したクラス）を取得し、link_classesに格納。
    foreach( $item->classes as $class ) {
        if ( false === strpos( $class, 'menu-item' ) && false === strpos( $class, 'current-' ) && '' !== $class ) {
            $link_classes .= $class . ' ';
        }
    }

    // フォームから取得したクラス達（$link_classes）をaタグに追加してreturn。
    if ( '' !== $link_classes ) {
        return str_replace( 'href',  'class="' . $link_classes . '" href', $item_output );
    } else {
        return $item_output;
    }

}, 10, 2 );

// このままだとリストにも同じクラスが付いたままになるので
// menu-itemとcurrent-の文字を含まないクラス（フォームから追加したクラス）をリストから削除します。
add_filter( 'nav_menu_css_class', function( $classes, $item ) {

    foreach( $classes as $i => $class ) {
        if ( false === strpos( $class, 'menu-item' ) && false === strpos( $class, 'current-' ) && '' !== $class ) {
            unset( $classes[$i] );
        }
    }

    return $classes;

}, 10, 2 );


/*テーマカスタマイザー：実装*/

function akindoyawp_customize_register( $wp_customize ) {
	//ここでパネル、セクション、コントロール、セッティングを追加
for($i = 1; $i <= 3; $i++ ) {
	$wp_customize->add_section( 'theme_options' . $i , array(
		'title'		=>'あきんど屋テーマオプション' . $i,
		'priority'	=>0,
		'description'=>'あきんど屋テーマ専用のカスタマイザー',
	));
	
}


	
//コントロール３追加：SNSボタン
	$wp_customize->add_setting( 'twitter_button', array(
		'type'	=> 'option',
	));
	$wp_customize->add_control( 'twitter_button', array(
		'label' => 'Twitter',
		'section' => 'theme_options3', 
		'settings' => 'twitter_button' , 
		'type' => 'url',
		'description' => 'TwitterアカウントのURLを貼り付けると、フッターのTwitterボタンとリンクします', 
	));
	
	$wp_customize->add_setting( 'facebook_button', array(
		'type'	=> 'option',
	));
	$wp_customize->add_control( 'facebook_button', array(
		'label' => 'Facebook',
		'section' => 'theme_options3', 
		'settings' => 'facebook_button' , 
		'type' => 'url',
		'description' => 'FacebookアカウントのURLを貼り付けると、フッターのFacebookボタンとリンクします', 
	));
	
	$wp_customize->add_setting( 'instagram_button', array(
		'type'	=> 'option',
	));
	$wp_customize->add_control( 'instagram_button', array(
		'label' => 'Instagram',
		'section' => 'theme_options3', 
		'settings' => 'instagram_button' , 
		'type' => 'url',
		'description' => 'InstagramアカウントのURLを貼り付けると、フッターのInstagramボタンとリンクします', 
	));
	
	$wp_customize->add_setting( 'youtube_button', array(
		'type'	=> 'option',
	));
	$wp_customize->add_control( 'youtube_button', array(
		'label' => 'YouTube',
		'section' => 'theme_options3', 
		'settings' => 'youtube_button' , 
		'type' => 'url',
		'description' => 'YouTubeアカウントのURLを貼り付けると、フッターのYouTubeボタンとリンクします', 
	));
}

//アクションフックに登録
add_action( 'customize_register' , 'akindoyawp_customize_register' );

/*footer*/

register_nav_menu('footer-left','フッター買う');
register_nav_menu('footer-center','フッター知る');
register_nav_menu('footer-right','フッターヘルプ');


