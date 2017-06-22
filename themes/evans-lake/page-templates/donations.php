<?php
/**
 * Template Name: Donations
 *
 * The template for displaying all single posts.
 *
 * @package Evans_Lake_Theme
 */

get_header(); 
get_sidebar(); ?>

<div class="hero">
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	<div class="hero-image" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .35) 0%, rgba(0, 0, 0, .35) 100%), url('<?php echo $thumb['0'];?>'); background-size: cover,cover; background-position: center, center;">
	</div>
</div>
<div id="primary" class="content-area container">
	<div class="sub-navigation">
		<?php wp_nav_menu( array( 
			'theme_location' => 'primary', 
			'menu_id' => 'primary-menu',
			'submenu' => get_the_title($post->post_parent)
		) ); ?>
	</div>

	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endwhile; // End of the loop. ?>
    
    <h2>Our Donors & Supporters</h2>
    
    <?php $donors = CFS()->get( 'donor_loop' ); ?>
    <?php foreach ($donors as $donor) { ?>
      <section class="donors">
        <!--<img class="donor-image" src="<?php echo $donor['donor_image']; ?>">-->

        <div class="donor-image" style="background-image: url('<?php echo $donor['donor_image']; ?>'); background-size: contain; background-position: top; background-repeat: no-repeat"></div>
        <div class="donor-textarea">
          <h3 class="donor-title"><?php echo $donor['donor_title']; ?></h3>
          <?php echo $donor['donor_description']; ?>
        </div>
      </section>
    <?php }; ?>

	</main><!-- #main -->

</div><!-- #primary -->

<?php get_footer(); ?>
