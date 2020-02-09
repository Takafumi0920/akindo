<!doctype html>
<html <?php bloginfo('charset'); ?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php bloginfo('name'); ?></title>
<!--<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/recycle.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/menu-jquery.css">-->
<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<!--font awesome library-->
<script src="https://kit.fontawesome.com/f8312f0c83.js" crossorigin="anonymous"></script>
<!--adobe fonts library-->
	<script>
  (function(d) {
    var config = {
      kitId: 'fkd0ttn',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<!--hamburger menu-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(function () {
  var $body = $('body');
  $('#panel-btn').on('click', function () {
    $body.toggleClass('side-open');
	$('#side-menu').toggleClass('side-menu').toggleClass('js__side-menu');
	$('#panel-btn-icon').toggleClass('close');
	  $('#button-nav').toggleClass('js__button-nav');/*展開時サークルボタンを非表示*/
	  return false;

    $('#js__overlay , #panel-btn').on('click', function () {
      $body.toggleClass('side-open');
		$('#side-menu').toggleClass('js__side-menu').toggleClass('side-menu');
		$('#panel-btn-icon').toggleClass('close');
		return false;
    });
  });
});
	
$(document).ready(function(){
    $(window).on("scroll", function() {
        scrollHeight = $(document).height();
        scrollPosition = $(window).height() + $(window).scrollTop();
        footHeight = $("footer").innerHeight() + $("#column3").innerHeight(); //footerの高さ（＝止めたい位置）
        if ( scrollHeight - scrollPosition  <= footHeight ) {
            $("#button-nav").css({
                "position":"absolute", 
                "bottom": footHeight 
            });
        } else { 
            $("#button-nav").css({
                "position":"fixed",
                "bottom": "0" 
            });
        }
    });
   
});
	
</script>
<style>
	.hero {
		background: url("<?php echo get_template_directory_uri(); ?>/img/wallpaper.jpg");
		background-size: cover;/*ウィンドウ幅に応じて引き伸ばす（詳細度の影響を避けるためここに記入）*/
	}
	#column1 {
		background-image:url("<?php echo get_template_directory_uri(); ?>/img/mentaiko.png");
	}

	#column2 {
		background-image:url("<?php echo get_template_directory_uri(); ?>/img/melon-cream2.jpg");
	}
</style>
<?php wp_head() ; ?>
</head>

<body>
	 <!-- サイドオープン時メインコンテンツを覆う -->
  <div class="overlay" id="js__overlay"></div>
	
<div class="wrapper">
<header>
	<div class="header">
		<a href="<?php echo home_url(); ?>"><img class="logo" alt="" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"></a>
		<h1 class="sitetitle"><?php bloginfo('name'); ?></h1>
		<!-- 開閉用ボタン -->
		<a href="#" id="panel-btn" class="panel-btn"><span id="panel-btn-icon" class="panel-btn-icon"></span></a>
<!-- サイドメニュー -->
  <nav id="side-menu" class="side-menu">
	  <?php if (has_nav_menu( 'global' )) : ?>
		<?php wp_nav_menu( array(
			'theme_location' => 'global',
			'menu_id'		=> 'false',//このID名は使用しない
			'menu_class'		=> 'header-nav',
			'container'		=> 'false',//<ul class="header-nav"></ul>をラップしない
		)); ?>
<!--ulはクラスと共にphpで出力。aのクラス(.nav-text)は管理画面メニューで固定ページのliクラスで入力したものを適応する。（表示オプションのCSSクラスにチェック）-->
	  
		<?php endif; ?>
    
	  
		<!--どうやって組み込もうか、ulからはみ出ちまう。li class="nav-list"><a class="nav-text-search" href="#"><img class="nav-logo-search" alt="" src="<?php echo get_template_directory_uri(); ?>/img/search.svg">検索</a></li-->
		
	
	
	</div>
</header>
