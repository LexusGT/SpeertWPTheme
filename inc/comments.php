<?php
function speert_enqueue_comment_reply() {
	if( is_singular() && comments_open() && (get_option('thread_comments') == 1) ) 
		wp_enqueue_script('comment-reply');
}
add_action( 'wp_enqueue_scripts', 'speert_enqueue_comment_reply' );

function speert_theme_comment($comment, $args, $depth){
	?>
	<li <?php comment_class() ?> id="comment-<?php comment_ID() ?>" itemprop="comment" itemscope="" itemtype="http://schema.org/Comment"> <div class="comment-box" id="comment-<?php comment_ID() ?>">
		<div class="comment-header">
			<div class="comment-avatar"><?php echo get_avatar( $comment, 40 ); ?></div>
			<div class="comment-meta">
				<cite class="comment-author" itemprop="creator" data-href="http://yandex.ru/" data-target="_blank"><?php comment_author( $comment ); ?></cite>
				<time class="comment-time" itemprop="datePublished" datetime="2018-05-01"><?php comment_date(); ?></time>
			</div>
		</div>
		<div class="comment-body">
			<div class="comment-text" itemprop="text">
				<p><?php comment_text(); ?></p>
			</div>
			<div class="comment-footer"><?php comment_reply_link( array('depth' => $depth, 'max_depth' => $args['max_depth']) ) ?>

			</div>
		</div>
	</div>
	<?php
}