<?php get_header(); ?>
<div class="hero">
	<section>
		<img class="hero-image"　alt="" src="<?php echo get_template_directory_uri(); ?>/img/melon-cutout.png">
		<div class="hero-textwrap">
			<h1 class="hero-text">夕張を、<br>ほおばろう。</h1>
			<p class="hero-subtext">ベテラン店長が市場で直接仕入れる八百屋</p>
		</div>
	</section>
	
	<aside id="button-nav" class="button-nav">
		
		<div class="circle-button">
			<a href="shopping-site"> 
				<img class="shopping-cart" alt="" src="<?php echo get_template_directory_uri(); ?>/img/shopping-cart.png">
			</a>
		</div>
		
		<div class="circle-button">
			<a href="article.html"> 
				<img class="melon-color" alt="" src="<?php echo get_template_directory_uri(); ?>/img/melon-color.png">
			</a>
		</div>
		<div class="circle-button">
			<a href="contact.php"> 
				<img class="question" alt="" src="<?php echo get_template_directory_uri(); ?>/img/question.png">
			</a>
		</div>
	</aside>
</div>
	
<section class="column">
	<div id="column1" class="ak-photo"></div>
		<div class="column1 textwrap">
			<h1 class="column-text">元祖じゃがバターの店</h1>
			<p class="column-subtext">ボリューミーなじゃがバターが全国のフェスにて！</p>
		</div>
</section>
	
<section class="column flexdirection-reverse">
	<div id="column2" class="ak-photo"></div>
	<div class="column2 textwrap">
		<h1 class="column-text">名物メロンソフト</h1>
		<p class="column-subtext">北海道ツーリングの思い出に最高の夕張メロンを</p>
	</div>
</section>


<section id="column3" class="column3">
	<div class="button-container">
		<div class="contents-circle-button"> 
			<img class="contents-shopping-cart" alt="" src="<?php echo get_template_directory_uri(); ?>/img/shopping-cart.png">
		</div>
		<h2 class="contents-button-txt">オンラインストア</h2>
		<a class="contents-button" href="#">商品を見る</a>
	</div>
	<div class="button-container">
		<div class="contents-circle-button">
			<img class="information" alt="" src="<?php echo get_template_directory_uri(); ?>/img/information.png">
		</div>
		
		<h2 class="contents-button-txt">あきんど屋最新情報</h2>
		<a class="contents-button" href="vlog.html">詳しく見る</a>
	</div>
	<div class="button-container">
		<div class="contents-circle-button">
			<img class="contents-question" alt="" src="<?php echo get_template_directory_uri(); ?>/img/question.png">
		</div>
		<h2 class="contents-button-txt">お問い合わせ</h2>
		<a class="contents-button" href="contact.html">詳しく見る</a>
	</div>
</section>
<?php get_footer(); ?>