<? // Template name: Page contact ?>
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
				<?
				$phone = get_field('phone');
				$address = get_field('address');
				$email = get_field('e-mail');
				?>

				<?php if ( !empty($phone) || !empty($address) || !empty($email) ) { ?>
					<div class="adress-wrap">
						<? if ( !empty($phone) ) : ?>
							<? $hrefTel = str_replace(['(',')',' ','-'], '', $phone); ?>
							<div class="adress-item">
								<div class="adress-icon adress-icon-phone"></div>
								<h4><?php _e('Phone:'); ?></h4>
								<a href="tel:<?= $hrefTel; ?>"><?= $phone; ?></a>
							</div>
						<? endif; ?>

						<? if ( !empty($address) ) : ?>
							<div class="adress-item">
								<div class="adress-icon adress-icon-adress"></div>
								<h4><?php _e('Adress:'); ?></h4>
								<?= $address; ?>
							</div>
						<? endif; ?>

						<? if ( !empty($email) ) : ?>
							<div class="adress-item">
								<div class="adress-icon adress-icon-email"></div>
								<h4><?php _e('E-mail:'); ?></h4>
								<a href="mailto:<?= $email; ?>"><?= $email; ?></a>
							</div>
						<? endif; ?>
					</div>
				<?php } ?>
				
				<div class="adress-form">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>