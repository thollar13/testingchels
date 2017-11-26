<?php 
/**
*	Template Name: Hair Care
**/

get_header(); ?>
<div id="hair-care">
<?php if (have_posts()) : while(have_posts()) : the_post() ;
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<section class="hero quote" style="background-image: url('<?php echo $url; ?>');">
	<div class="hero-opacity"></div>
	<h1>Hair Care</h1>
</section>
<?php endwhile; endif; ?>

<?php $loop = new WP_Query( array( 'post_type' => 'hair-care', 'posts_per_page' => -1 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<div class="sectional">
			<div class="sectional__wrap">
				<h1><?php the_title(); ?></h1>
				<hr>
				<div class="flex">
					<?php 
						if(have_rows('flex_fields')) : while (have_rows('flex_fields')) : the_row(); 
							if( get_row_layout() == 'service_card' ) { 
								include(TEMPLATEPATH . '/templates/service-card.php');
							} else if ( get_row_layout() == 'simple_text' ) {
								include(TEMPLATEPATH . '/templates/simple-text.php');
							}
						endwhile; endif; 
					?>
				</div>
			</div>
		</div>

<?php endwhile; wp_reset_query(); ?>

</div>


<?php get_footer(); ?>