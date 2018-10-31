<?php $comments = get_comments( array('count' => 2) ); ?>

<?php if ( !empty($comments) ) : ?>
	
	<!-- Start Popular -->
	<section class="container gutter">
		<div class="row no-gutters align-items-center justify-content-between section-head">
			<div class="section-head-left">
				<h2>Last comments</h2>
			</div>
		</div>
		<div class="row ">

			<?php foreach ($comments as $comment) { ?>
			<?php $post = get_post($comment->comment_post_ID); setup_postdata($post); ?>
			<div class="last-comments-item">
				<div class="col-lg-6 last-comments-item-left">
					<a href="<?php the_permalink(); ?>">
						<div class="last-comments-item-left-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
					</a>
					<div class="last-comments-item-left-more align-items-center">
						<span class="icon-eye-1"><?php speert_the_views($post->ID); ?></span>
						<span class="archive-item-left-more-separator"></span>
						<span class="icon-comment-1"><?php comments_number( 0, 1, '%' ); ?></span>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="last-comments-item-wrap">
						<div class="last-comments-item-wrap-head">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
						<div class="last-comments-header">
							<div class="last-comments-avatar">
								<?php echo get_avatar( $comment, 50, null, '', array('class ' => array('avatar', 'avatar-50', 'photo')) ); ?>
							</div>
							<div class="last-comments-meta">
								<cite class="last-comments-author" itemprop="creator"><?php the_author_posts_link() ?></cite>
								<time class="last-comments-time" itemprop="datePublished" datetime="<?php comment_date( null, $comment ); ?>"><?php comment_date( null, $comment ); ?></time>
							</div>
						</div>
						<div class="last-comments-item-wrap-text"><?php echo $comment->comment_content; ?></div>
						<div class="last-comments-item-wrap-link"><a href="<?php comment_link( $comment ); ?>">Read comment</a></div>
					</div>
				</div>
			</div>
			<?php } ?>

		</div>
	</section>
	<!-- End Popular -->

<?php endif; ?>