<?php 
/**
*	Template Name: About
**/

get_header(); ?>

<div id="about-pg">
	<section class="hero quote" style="background-image: url('<?php the_field('hero_image'); ?>');">
		<div class="hero-opacity"></div>
		<div class="abs-full">
			<div class="display-table">
				<div class="display-cell">
					<div class="display-content">
						<h1><?php the_field('hero_title'); ?></h1>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<section class="main-txt">
						<h1><?php the_field('main_header'); ?></h1>
					</section>
				</div>
				<div class="col-xs-12">
					<section class="main-txt">
						<p><?php the_field('main_content'); ?></p>
					</section>
				</div>
			</div>
		</div>
	</section>

	<div class="instruction-section">
			<div class="specialized-instruction vp-xs-bottom-4">
				<?php if(have_rows('featured_point')) : while(have_rows('featured_point')) : the_row('featured_point'); ?>
					<div class="instruction">
						<div>
							<h5><?php the_sub_field('featured_year'); ?></h5>
							<p><?php the_sub_field('featured_text'); ?></p>
						</div>
					</div>
					
				<?php $count++; endwhile; endif; ?> 
			</div>
		</div>

	<section class="about-owners">
		<div class="container">
			<?php if(have_rows('first_tier_employee')) : while(have_rows('first_tier_employee')) : the_row('first_tier_employee'); ?>
			<div class="row owners-row">
				<div class="col-xs-4">
					<div class="img" style="background-image: url('<?php return_imgix(get_sub_field('image'), 400, 300, 100); ?>');">
						<div class="img-opacity"></div>
					</div>
				</div>
				<div class="col-xs-8">
						<h1><?php the_sub_field('full_name'); ?>&nbsp;&nbsp;<span><?php the_sub_field('title'); ?></span></h1>
						<div class="clearfix"></div>
						<p><?php the_sub_field('about'); ?></p>
						<div class="clearfix"></div>
				</div>
			</div>
			<?php endwhile; endif; ?>
			
			<div class="customer-service">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1>Customer Service</h1>
						</div>
					</div>
					<div class="front-desk">
						<div class="row">
							<?php $count == 0; if(have_rows('second_tier_employee')) : while(have_rows('second_tier_employee')) : the_row('second_tier_employee'); ?>
									<div class="col-xs-3">
									<div class="front-desk-indiv" style="background-image:url('<?php return_imgix(get_sub_field('image'), 400, 300, 100); ?>');">
									</div>
									<h4><?php the_sub_field('full_name'); ?></h4>
								</div>
								<?php if($count == 3 || $count == 7) {
									echo "</div><div class='row'>";
								}
								$count ++; ?>
								<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="flex vp5 center color-black gift-card--callout">
		<div class="flex__item">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<h3 class="mb2" style="font-family: 'Playfair Display'; font-style: italic; background: white; display: inline-block; padding: 0 20px;">A Gift Certificate Is The Perfect Gift!</h3>
						<hr style="border-top: 5px solid #b4cd95; margin-top: -70px; margin-bottom: 50px;">
						<p class="mb2">Purchasing a Chelsea Salon Gift Card or Spa Package is an easy and convenient way to indulge that special someone in your life.</p>
						<a href="http://www.secure-booker.com/chelsea/MakeAppointment/Search.aspx" target="_blank" class="btn btn-black mt2 m0-auto block bg-black color-white">Purchase Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>