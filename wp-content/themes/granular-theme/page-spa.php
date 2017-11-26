<?php 
/**
*	Template Name: Spa Services
**/

get_header(); ?>

<div id="about-pg">
	<?php if (have_posts()) : while(have_posts()) : the_post() ;
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	?>
		<section class="hero quote" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/ProSpaBackbar.jpg');">
			<h1 class="color-black">Spa Services</h1>
		</section>
	<?php endwhile; endif; ?>


		<?php $loop = new WP_Query( array( 'post_type' => 'spa-services', 'posts_per_page' => -1 ) ); ?>
		<?php 
		$count = 0;
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
			<?php if($count == 3) { ?> 
				<div class="sectional black">
					<div class="sectional__wrap">
						<h1>Body Waxing</h1>
						<hr>
						<p>Chelsea offers a total face and body hair removal process that incorporates naturally derived waxes, essential oils, and soothing ingredients that provide effective hair removal. Please allow 2 weeks of hair growth.<br>
						</p>
						<div class="container-fluid">
							<div class="row body-waxing">
								<div class="col-sm-12 col-md-6 col-lg-4">
									<p>Eyebrow Wax <span>$15 and up</span></p>
									<p>Lip Wax <span>$15 and up</span></p>
									<p>Chin Wax <span>$12 and up</span></p>
									<p>Half Leg Wax <span>$40 and up</span></p>
									<p>Full Leg/Bikini Line Wax <span>$75 and up</span></p>
									<p>Underarm Wax <span>$30 and up</span></p>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-4">
									<p>Full Arm Wax <span>$45 and up</span></p>
									<p>Half Arm Wax <span>$30 and up</span></p>
									<p>Back Wax <span>$50 and up</span></p>
									<p>Chest Wax <span>$50 and up</span></p>
									<p>Bikini Wax <span>$40 and up</span></p>
									<p>Brazilian Wax <span>$60 and up</span></p>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-4">
									<p>Back Sugar Waxing <span>$60 and up</span></p>
									<p>Brazilian Sugar Waxing <span>$75 and up</span></p>
									<p>Underarm Sugar Waxing <span>$38 and up</span></p>
									<p>Bikini Sugar Waxing <span>$50 and up</span></p>
									<p>Chin Sugar Waxing <span>$17 and up</span></p>
									<p>Lip Sugar Waxing <span>$18 and up</span></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<br/>
									<h3>NovaLash Lash Extensions</h3>
									<p>NovaLash Lash Extensions are a glamorous new way to extend the length and thickness of natural eyelashes, and are a practical, convenient and beautiful alternative to the daily use of mascara. Unlike decades-old, traditional false lashes, lash extensions are the first innovation in lash lengthening that can be worn daily, without nightly removal. Because each tapered, synthetic lash is bonded to a single natural lash, the final result is of effortless glamour and difficult to detect even close up.</p>
									<h3>Full Set <span>$200.00</span></h3>
									<h3>Fills/Maintenance <span>$60.00</span></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
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

		<?php $count++; endwhile; wp_reset_query(); ?>

</div>
<?php get_footer(); ?>