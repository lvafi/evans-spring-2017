<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @package Evans_Lake_Theme
 */

?>

<h1 class="carousel-title">Activities</h1>

<a href="<?php echo esc_url( home_url('/venue-booking/activities/') ); ?>">View All</a>
<div class="main-carousel activities container" data-flickity='{ "cellAlign": "left", "contain": true }'>

  <?php
    $args = array(
			'post_type'=> 'activity',
			'post_count'=> 16,
			'posts_per_page'=> 16);
  ?>
  <?php $posts = get_posts( $args ); ?>

  <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
  <?php if ( ( CFS()->get ( 'act_img' ) ) != '') : ?>
    <div class="carousel-cell activities">
      <div class="activities-thumbnail" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .35) 0%, rgba(0, 0, 0, .35) 100%), url('<?php echo CFS()->get('act_img'); ?>'); background-size: cover, cover; background-position: center. center;">
        <a href="<?php the_permalink(); ?>">
          <h2 class="activities-title"><?php the_title(); ?></h2>
        </a>
      </div>
    </div>
  <?php endif; ?>
  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
    
</div>

<h1 class="carousel-title">News & Events</h1>
<div class="main-carousel container" data-flickity='{ "cellAlign": "left", "contain": true }'>

  <?php $args = array( 'posts_per_page' => 3,); ?>
  <?php $posts = get_posts( $args ); ?>
  <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
    <div class="carousel-cell">
      <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
      <div class="events-thumbnail" style="background-image: url('<?php echo $thumb['0'];?>'); background-size: cover; background-position: center;">
      </div>
      <a href="<?php the_permalink(); ?>">
        <div class="events-post">
          <h2 class="events-title"><?php the_title(); ?></h2>
        </div>
      </a>
    </div>
  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
    
</div>