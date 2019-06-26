<?php get_header(); ?>
<?php the_post(); ?>
<!-- End Header -->
<section class="page-head mod">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="mod"><?php the_title(); ?></h1>
				<?php speert_the_excerpt($post); ?>
			</div>
		</div>
	</div>
</section>
<section class="page-content">
	<div class="container">
		<div>
			<?php
			$attr = array('class' => "page-content-thumb");
			if ( has_post_thumbnail() )
				the_post_thumbnail( 'full', $attr );
			?>
			<?php
			$caption = get_the_post_thumbnail_caption();
			if ( !empty($caption) )
				echo '<div class="page-content-thumb-desc">'. $caption .'</div>';
			?>
		</div>
		<div class="row">
			<div class="col-lg-8 offset-lg-2 page-content-text mod">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>