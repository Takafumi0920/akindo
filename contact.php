<?php
/*
Template Name: contact
*/
 ?>

<?php get_header(); ?>

<main >
<div class="form">
	</div>

<p class="contact-text">業務の都合によりご連絡が遅くなることがございます。
誠に勝手ではありますが、ご容赦ください。
お電話でのお問い合わせも受け付けております。</p>

<div class="phone-button">
	<a href="tel:0123593504">
	<p class="phoneicon"><img class="phone" alt="phone" src="<?php echo get_template_directory_uri(); ?>/img/phone.png"></p>
		<div class="phone-text" ><span>電話</span><br>0123-59-3504
		</div>
	</a>
</div>
</main>

<?php get_footer();