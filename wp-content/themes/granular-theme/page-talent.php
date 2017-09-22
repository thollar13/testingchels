<?php 
/**
*	Template Name: Talent
**/
get_header(); ?>
<div id="staff-pg">
	
<?php if (have_posts()) : while(have_posts()) : the_post() ;
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'staff', true) );
?>
	<section class="hero quote bg-white page-talent">
		<div class="abs-full">
			<div class="display-table">
				<div class="display-cell">
					<div class="display-content">
						<h1>Our Talent</h1>
						<h5 class="view-switch">
							<span class="staff-filter staff-filter--selected" data-position="stylistspa">all</span>
							<span class="staff-filter" data-position="stylist">Stylists</span> 
							<span class="staff-filter" data-position="spa">Spa</span>
						</h5>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>

			
				<div class="staff-img__wrap">
					<?php 
					$count = 1;
					$staff = new WP_Query( array( 'post_type' => 'our-talent' ) );
					$image = get_field('image');
					if($staff->have_posts()) : while($staff->have_posts()) : $staff->the_post(); ?>

					<div class="staff-wrap staff-img <?php the_field('position'); ?>" data-about="<?php echo get_field('about'); ?>" data-image="<?php echo get_field('image'); ?>" data-level="<?php echo get_field('level'); ?>" data-position="<?php echo get_field('position'); ?>" data-name="<?php echo get_the_title(); ?>"  style="background-image: url('<?php echo get_field('image'); ?>');">
							<h3><?php the_title(); ?></h3>
							<!-- <h5 class="color-tan"><?php the_field('position'); ?></h5> -->
							<p>&nbsp;</p>
					</div>

					<?php endwhile; endif; ?>
				</div>
			

				<div class="info-wrap">
					<div class="talent-info">
						<span class="close-info">&times;</span>
						<div class="image-src"></div>
						<div class="main-info">
							<h3></h3>
							<h5></h5>
							<p></p>
						</div>
					</div>
				</div>

</div>
<?php get_footer(); ?>
