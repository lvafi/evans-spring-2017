<?php
/**
 * The template for displaying the front page.
 *
 * @package Evans_Lake_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="home-hero">
				<p class="slogan">Your Home in the Forest</p>
				<p class="text-logo">Evans Lake</p>
			</section>

		<?php if ( have_posts() ) : ?>

		<section class="site-description">
			<div class="description-image">
				<img src="<?php	echo CFS()->get( 'site_image' ); ?>">
				<div class="description-text-area">
					<h2><?php	echo CFS()->get( 'site_title' ); ?></h2>
					<span class="site-description-subtitle"><?php	echo CFS()->get( 'site_subtitle' ); ?></span>
					<span class="site-description"> <?php	echo CFS()->get( 'site_description' ); ?> </span>
				</div>
			</div>
		</section>

		<?php get_template_part( 'template-parts/content', 'flickity' ); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>