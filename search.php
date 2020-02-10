<?php get_header(); ?>	

<div class="post-wrapper">
	<h1 class="site-title">「<?php the_search_query(); //検索ボックスからの記事検索結果を表示?>」の検索結果</h1>
<!--cssからのphpは読み込めないのでstyle属性を使用。$imageに記事サムネのidを収納-->
	
		<?php if ( have_posts() ) : //投稿がある場合、ループ前に一度だけ処理される?>
	
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
			
				<div class="desktopflex">
				<ul>
					
<!--各記事が以下のパーツで生成される-->
				<article>
					<li class="post">
					
					<?php if ( has_post_thumbnail() ) : //投稿にアイキャッチ画像が指定されているか判定?>

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
			
			<?php endwhile; //ここは投稿がある場合、ループ後に一度だけ処理される?>

					</ul>
			</div>
				<?php else : //ここは投稿がない場合、一度のみ処理される?>

					<p>何も見つかりませんでした。</p>

				<?php endif; ?>

			</div>


<?php get_footer(); ?>