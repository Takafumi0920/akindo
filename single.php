
<!--個別記事の生成-->
<?php get_header(); ?>

<?php while ( have_posts() ) : //投稿ループ開始?>

	<?php the_post(); ?>

	<?php if ( has_post_thumbnail() ) : //アイキャッチ画像が設定されているか判定?>
		<div class="hero eyecatch">
			
<!--single.php-parts2-->
			<?php the_post_thumbnail( 'sample-hero' ); //functions.phpで指定したIDをパラメータに?>
		</div>
	<?php endif; ?>

	<div class="content-area has-side-col">
		<div class="article-body">
			<div class="box-generic">
				<h1 class="article-title"><?php the_title(); ?></h1>
				<div class="box-content">

					<article class="entry">
						<?php the_content(); ?>
					</article>

					<div class="meta-data">
						<time class="meta meta-entry-date" datetime="<?php echo get_the_date( DATE_W3C ); ?>"><?php echo get_the_date(); ?></time>
						<!--<p class="meta meta-author"><?php the_author_posts_link(); ?></p>-->
						<p class="meta meta-cat"><?php the_category( ', ' ); ?></p>
						<p class="meta meta-tag"><?php the_tags(); ?></p>
					</div>

					<?php the_post_navigation( array(
						'prev_text' => '前の記事：%title',//%titleで前の記事タイトル表示。前に自由にテキストを記述可
						'next_text' => '次の記事：%title',
					) ); ?>
				</div>
			</div>
<!--comments.php-parts-->

			<?php if ( comments_open() || get_comments_number() ) : //投稿に対してコメントが許可されているor１つ以上のコメントがある場合に、コメントテンプレートを読み込む
				comments_template();
			endif; ?>

		</div>


	</div>

<?php endwhile; //get_footerの前?>

<?php get_footer();
