<?php 
/**
*	Template Name: Spa Services
**/

get_header(); ?>

<div id="spa-care">
	<?php if (have_posts()) : while(have_posts()) : the_post() ;
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	?>
		<section class="hero" style="background-image: url('<?php echo $url; ?>');">
			<!-- <div class="hero-opacity"></div> -->
			<div class="abs-full">
				<div class="display-table">
					<div class="display-cell">
						<div class="display-content">
							<div class="container">
								<div class="row">
									<div class="col-sm-8 col-sm-offset-2">
										<h1 class="spa-title">Spa Services</h1>
										<a href="/shop" class="btn btn-white mt2 m0-auto inline-block">Spa Packages</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; endif; ?>


		<?php $loop = new WP_Query( array( 'post_type' => 'spa-services', 'posts_per_page' => -1 ) ); ?>
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
						<h3>Fills/Maintenance <span>$50.00</span></h3>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="sectional white">
		<div class="sectional__wrap">
			<h1>Manicures &amp; Pedicures</h1>
			<hr>
			<div class="service-wrap grey-wrap">
				<h3> Spa Manicure and Pedicure <span></span></h3>
				<p>Our signature hydrating manicure and pedicure includes general maintenance of the nails as well as a sea salt scrub with moisturizing Aveda oils and massage for relaxation.</p>
				<p>Spa Manicure $25</p>
				<p>Spa Pedicure $45</p>
				<p>Nail Repair $7</p>
				<p>*Note: Any manicure or pedicure can be enhanced with the following:</p>
				<p>$10 Paraffin Treatment</p>
				<p>$5 French </p>
			</div>
			<div class="flex">
				<div class="service-wrap">
					<h3>Shampure Manicure &amp; Pedicure</h3>
					<p>Go above and beyond your basic manicure and pedicure with an experience that cares for your hands and feet while indulging the sensations of Aveda's signature Shampure aroma which includes a variety of flower and plant essences like bergamot and ylang ylang.</p>
					<p>Shampure Manicure $32</p>
					<p>Shampure Pedicure $52</p>
				</div>
				<div class="service-wrap">
					<h3>Beautifying Manicure &amp; Pedicure</h3>
					<p>Enjoy a relaxing, beautifying manicure and pedicure that is all about hydrating your hands and feet. Lavender and bergamot oils enrich the skin, leaving it feeling soft and smooth.</p>
					<p>Beautifying Manicure $33</p>
					<p>Beautifying Pedicure $55</p>
				</div>
				<div class="service-wrap">
					<h3>Sport Manicure and Pedicure <span></span></h3>
					<p>A practical alternative developed  for men, offering more exfoliating and a shorter trim. Buffing is also available.</p>
					<p>Sport Manicure  $20</p>
					<p>Sport Pedicure $40</p>
				</div>
				<div class="service-wrap">
					<h3>Hard Coat Manicure <span>$35</span></h3>
					<p>A manicure with a cured polish that lasts two weeks.</p>
					<p>*Please be sure to let us know if you need a hard coat soak off.</p>
				</div>
				<div class="service-wrap grey-wrap">
					<h3>Hot Stone Pedicure <span>$55</span></h3>
					<p>A hydrating pedicure that includes general maintenance of the nails as well as a sea salt scrub with moisturizing Aveda oils and hot stone massage to relax stressed muscles.</p>
				</div>
			</div>
		</div>
	</div>	
</div>
<?php get_footer(); ?>