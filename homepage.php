<?php /* Template Name: Home Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="row">
		<section>

			<!--<img src="<?php echo get_field('hero_image') ? get_field('hero_image') : get_stylesheet_directory_uri() . '/images/logo.png'; ?>" class="img-responsive center-block" alt="" /> -->
			<div id="mainPhoto" style="background-image: url(<?php the_field('hero_image'); ?>);">

				<div class="col-xs-8 col-sm-6">
					<h3><?php echo get_field('hero_title'); ?></h3>
					<p><?php echo get_field('hero_content'); ?></p>
				</div>

		</div>

		<div class="col-sm-6 we_do_block">
			<div class="titleLine">
				<h3><?php echo get_field('we_do_title'); ?></h3>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cross-border.png" alt="Croww Border" class="border-line">
			</div>
			<p><?php echo get_field('we_do_content'); ?></p>

		</div>
		<div class="col-sm-6">
			<img src="<?php echo get_field('we_do_image') ? get_field('we_do_image') : get_stylesheet_directory_uri() . '/images/logo.png'; ?>" class="img-responsive center-block" alt="" />
		</div>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</div><!-- row -->
	</main>



<?php get_footer(); ?>
