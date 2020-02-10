<?php if ( is_active_sidebar( 'sidebar' ) ) : //ID'sidebar'が利用可能か判定?>
<ul class="side-column">
	<?php dynamic_sidebar( 'sidebar' ); //管理画面で編集したサイドバー表示。functions.phpのregister_sidebarで指定したIDを引数に?>
</ul>
<?php endif; ?>