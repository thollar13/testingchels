<?php
/**
 * The Template for displaying all single posts.
 *
 * @package launchframe
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	<div class="featured-items-temp">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">	
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<img src="<?php the_field('image'); ?>" />
				</div>
				<div class="col-sm-6">	
					<p><?php the_content(); ?></p>
					<br/>
					<?php do_action("mashshare"); ?> 
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>