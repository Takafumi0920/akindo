<?php get_header(); ?>	

<div class="post-wrapper">
	
	<article class="post-latest">
		<div class="post-latest-photo">
			<time class="latest-clock"><span class="clockicon"></span>2020/01/12</time>
			<section class="post-latest-textwrap">
				<h2 class="post-latest-title">最新記事タイトル</h1>
				<p class="post-text"></p>
			</section>
		</div>
	</article>

				<?php if ( have_posts() ) : //投稿がある場合、ループ前に一度だけ処理される
				?>

		<ul class="desktopflex">
				<?php while ( have_posts() ) : ?>

				<?php the_post(); //ここは繰り返し処理される
						//whileループ内でテンプレートタグ（the_title(),the_content(),the_permalink()等）を使うには必ず記述する
				?>
						
<!--各記事が以下のパーツで生成される-->
			<article>
				<li class="post">
				
					<?php if ( has_post_thumbnail() ) : //投稿にアイキャッチ画像が指定されているか判定?>
<!--cssからのphpは読み込めないのでstyle属性を使用。$imageに記事サムネのidを収納-->
					<?php 
   							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
					
					<div class="post-photo" style="background-image: url(<?php echo $image[0]; ?>); ">
						
					<?php else : //記事にアイキャッチが設定されていなかったら以下?>
					<div class="post-photo" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/mentaiko.png); ">
					
					<?php endif; ?>
						
						<time class="clock" datetime="<?php echo get_the_date( DATE_W3C ); ?>">
							<span class="clockicon" style="content: url("<?php echo get_template_directory_uri(); ?>/img/clock-o.png");"></span>
								<?php echo get_the_date(); ?>
						</time>
					</div>
					<div class="post-textwrap">
						<h1 class="post-title"><?php the_title(); ?></h1>
					</div>
									
				</li>
			</article>
						<?php endwhile; //ここは投稿がある場合、ループ後に一度だけ処理される
						?>

					</ul>

				<?php else : //ここは投稿がない場合、一度のみ処理される
			?>

					<p>投稿がありません。</p>

				<?php endif; ?>

			</div>


<?php get_footer(); ?>