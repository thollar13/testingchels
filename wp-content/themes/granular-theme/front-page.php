<?php 
/**
*	Template Name: Home
**/
get_header(); ?>

<div id="front-pg">
	<section class="hero hero__home">
		<div class="flex__item color-black">
			<div class="slider">
				<?php if(have_rows('slider')) : while(have_rows('slider')) : the_row(); ?>
				
				<?php
					if (get_sub_field('font_size') == 'large') {
						$fontSize = '1.5em';
					} else {
						$fontSize = '1em';
					}
				?>

				<div class="slide__item" style="background-image: url('<?php the_sub_field('background_image'); ?>'); background-position: center;">
					<!-- <div class="overlay"></div> -->
					<div class="home__fade">
						<div class="" style="font-size: <?php echo $fontSize; ?>;">
							<div class="">
								<h1 class="color-white"><?php the_sub_field('headline'); ?></h1>
								<p class="color-white"><?php the_sub_field('content'); ?></p>
								<?php if(get_sub_field('include_link') == 'yes') { ?>
									<a href="<?php the_sub_field('link_url'); ?>" class="btn btn-black"><?php the_sub_field('link_text'); ?></a>
								<?php } ?>
								<a href="https://go.booker.com/location/chelsea/service-menu" target="_blank" class="btn mobile">Book Now</a>
							</div>
						</div>
					</div>	
				</div>

				<?php endwhile; endif; ?>
			</div>
		</div>
		<div class="booking-portal color-white bg-black home__slide-up">
			<p>go to our booking portal to purchase your gift card</p>
			<a href="https://go.booker.com/location/chelsea/buy/gift-certificate" target="_blank" class="btn m0-auto m1 inline-block bg-tan">Purchase Now</a>
		</div>
	</section>

	<div class="banner about-banner">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Tallahassee's Largest AVEDA Lifestyle Spa &amp; Salon</h1>
					<hr />
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8">
					<p>Chelsea has been serving Tallahassee since 1979. Our team of more than 30 professionals include hair talent, nail specialists, makeup artists, estheticians, massage therapists and of course our customer service team. Education is at the heart of everything we do at Chelsea. We offer our team in house education as well as AVEDA advanced seminars. This focus has kept Chelsea on the cutting edge of wearable fashions for hair and health oriented spa treatments.</p>
				</div>
				<div class="col-sm-4">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/aveda.jpg" alt="">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<a href="/about" class="btn btn-black">About Us</a>
				</div>
			</div>
		</div>	
	</div>

	<div class="img-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/staff-full.JPG'); background-position: center;">
	</div>

	<!-- <div class="featured bg-black color-white pt3 pb4" style="position: relative;">
		<h2 class="color-tan">Featured Packages</h2>
		<?php $posts = get_field('featured_packages');
		if( $posts ): foreach( $posts as $post): ?>
	        <?php setup_postdata($post); ?>
	      <?php $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'thumbnail' ); ?>
        <div class="featured__card vm5">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-5">
        				<div class="featured__image" style="background-size: cover; background-position: center; background-image: url('<?php the_field('image'); ?>');"></div>
        			</div>
        			<div class="col-sm-6 col-sm-offset-1">
        				<h3 class="color-tan bg-black" style="color: #c4daa7;"><?php the_title(); ?></h3>
        				<hr style="border-top: 5px solid #444; margin-top: -40px; margin-bottom: 30px; ">
        				<p><?php the_field('description'); ?></p>
        				<a class="btn btn-lightblack" href="https://go.booker.com/location/chelsea/service-menu" target="_blank" title="Spa Packages">Purchase Now</a>
        			</div>
        		</div>
        	</div>
        </div>
	    <?php endforeach; ?>
	    <?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<a href="<?php echo the_permalink(); ?>spa-packages" class="view-all-packages">View All Packages</a>
	</div> -->

	<div class="flex center color-black gift-card--callout">
		<div class="flex__item">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<h1 class="mb2">A Gift Certificate Is The Perfect Gift!</h1>
						<hr />
						<p class="mb2">Purchasing a Chelsea Salon Gift Card or Spa Package is an easy and convenient way to indulge that special someone in your life.<br><small>**Chelsea will be open on Christmas Eve from 10:00am-2:00pm for last minute Gift Certificate sales!</small></p>
						<a href="https://go.booker.com/location/chelsea/service-menu" target="_blank" class="btn btn-black bg-black">Purchase Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>