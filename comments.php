<?php
if ( post_password_required() ) { //パスワードを必要とする投稿ではコメントを表示させない
	return; //関数の実行停止？
}
?>

<?php if ( have_comments() ) :　//コメントがあるかどうか判定 ?>
	<div class="box-generic">
		<div class="box-content box-comment-display">
			<h2>コメントとトラックバック</h2>
			<ul class="comment-list">
				<?php
					wp_list_comments( array( //コメント一覧を表示
						'avatar_size' => 130,　//コメント投稿者のアバターサイズを変更。初期設定は３２px
					) );
				?>
			</ul>
		</div>
	</div>
<?php endif; ?>

<?php if ( comments_open() ) : //コメントが許可されているか判定?>
	<div class="box-generic">
		<div class="box-content box-comment-input">
			<?php comment_form(); //コメントフォームを出力?>
		</div>
	</div>
<?php endif;
