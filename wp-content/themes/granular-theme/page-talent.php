<?php 
/**
*	Template Name: Talent
**/
get_header(); ?>
<div id="staff-pg">
	
<?php if (have_posts()) : while(have_posts()) : the_post() ;
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'staff', true) );
?>
	<section class="hero quote" style="background-image: url('<?php echo $url; ?>');">
		<div class="hero-opacity"></div>
		<div class="abs-full">
			<div class="display-table">
				<div class="display-cell">
					<div class="display-content">
						<h1>Our Talent</h1>
						<!-- <p class="color-white vm-top-xs-2">Our talent consists of more than 50 professionals including hair stylists, nail specialists, makeup artists, estheticians and massage therapists.</p> -->
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>

	<section class="stylists">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<h1>Our Talent</h1>
				</div>
				<div class="col-sm-6 col-md-6">
					<h5 class="view-switch">
						<span class="staff-filter" data-position="stylistspa" style="color: #b4cd95;">all</span>
						<span class="staff-filter" data-position="stylist">Stylists</span> 
						<span class="staff-filter" data-position="spa">Spa</span>
					</h5>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<hr />
				</div>
			</div>
			<div class="row">
				<div class="staff-img__wrap">
					<?php 
					$count = 1;
					$staff = new WP_Query( array( 'post_type' => 'our-talent' ) );
					$image = get_field('image');
					if($staff->have_posts()) : while($staff->have_posts()) : $staff->the_post(); ?>

					<div class="staff-wrap staff-img <?php the_field('position'); ?>" data-about="<?php echo get_field('about'); ?>" data-image="<?php echo get_field('image'); ?>" data-level="<?php echo get_field('level'); ?>" data-position="<?php echo get_field('position'); ?>" data-name="<?php echo get_the_title(); ?>"  style="background-image: url('<?php return_imgix(get_field('image'), 400, 400, 100); ?>');">
							<div class="overlay"></div>
							<h3><?php the_title(); ?></h3>
							<!-- <h5 class="color-tan"><?php the_field('position'); ?></h5> -->
							<p>&nbsp;</p>
					</div>

					<?php endwhile; endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
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
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>
