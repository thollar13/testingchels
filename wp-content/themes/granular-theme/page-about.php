<?php 
/**
*	Template Name: About
**/

get_header(); ?>

<div id="about-pg">
	<section class="hero quote" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/Chelsea Salon-21.jpg');">
		<h1><?php the_field('hero_title'); ?></h1>
	</section>

	<div class="banner pb5">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2>Tallahassee's Largest AVEDA Lifestyle Spa &amp; Salon</h2>
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
		</div>	
	</div>

	<!-- <div class="instruction-section">
		<div class="specialized-instruction vp-xs-bottom-4">
			<?php $count = 0; if(have_rows('featured_point')) : while(have_rows('featured_point')) : the_row('featured_point'); ?>
				<div class="instruction">
					<div>
						<h5><?php the_sub_field('featured_year'); ?></h5>
						<p><?php the_sub_field('featured_text'); ?></p>
					</div>
				</div>
				
			<?php $count++; endwhile; endif; ?> 
		</div>
	</div> -->


		<div class="staff-img__wrap">
			<?php if(have_rows('first_tier_employee')) : while(have_rows('first_tier_employee')) : the_row('first_tier_employee'); ?>

			<div 
				class="staff-wrap staff-img <?php the_field('position'); ?>" d
				data-about="<?php echo get_sub_field('about'); ?>" 
				data-image="<?php echo get_sub_field('image'); ?>" 
				data-level="" 
				data-position="<?php echo get_sub_field('title'); ?>" 
				data-name="<?php the_sub_field('full_name'); ?>"  
				style="background-image: url('<?php echo get_sub_field('image'); ?>');">
					<h3><?php the_sub_field('full_name'); ?></h3>
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

	<div class="about-the-founder" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/chelsea-bg.jpg');">
		<div class="about-the-founder__bg-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="color-tan">About the Founder</h2>
				</div>
				<div class="col-sm-4 mt5">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mary-fannin.jpg" alt="Mary Fannin">
				</div>
				<div class="col-sm-7 col-sm-offset-1 mt5">
					<p>Chelsea Salon &amp; Spa was founded by Mary Fannin in 1979. Mary, a native of Melbourne, Florida, moved to Tallahassee in 1977 to begin her career as a hairstylist. Two years later, she became a partner in the Hairsmith Salon. In 1979, she introduced AVEDA to Tallahassee. She grew as a sole owner of three salons and founded Tallahassee's first Day Spa, Chelsea Salon and Spa. She is the proud mother of three wonderful children, Sarah Ted and Veronica.</p>

					<p>Mary is proud to be the winner of Tallahassee Magazine's 2011 Lifetime Achievement Award. Through this journey, Mary is also proud of all the hairdressers she has nurtured along the way.</p>

					<p>I hope that my impact on this profession in Tallahassee has helped to make it a friendlier place to be a hairstylist and a more stylish place to be a client. </p>
				</div>
			</div>
		</div>
	</div>


	<!-- <div class="flex vp5 center color-black gift-card--callout">
		<div class="flex__item">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<h3 class="mb2" style="font-family: 'Playfair Display'; font-style: italic; background: white; display: inline-block; padding: 0 20px;">A Gift Certificate Is The Perfect Gift!</h3>
						<hr style="border-top: 5px solid #b4cd95; margin-top: -70px; margin-bottom: 50px;">
						<p class="mb2">Purchasing a Chelsea Salon Gift Card or Spa Package is an easy and convenient way to indulge that special someone in your life.</p>
						<a href="https://go.booker.com/location/chelsea/service-menu" target="_blank" class="btn btn-black mt2 m0-auto block bg-black color-white">Purchase Now</a>
					</div>
				</div>
			</div>
		</div>
	</div> -->
</div>

<?php get_footer(); ?>