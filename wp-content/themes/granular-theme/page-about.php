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
						<!-- <h3 class="color-tan" style="text-align: center; margin-top: 30px;">Serving Tallahassee since 1977</h3> -->
					</section>
				</div>
				<div class="col-xs-12">
					<section class="main-txt" style="text-align: center;">
						<p><?php the_field('main_content'); ?></p>
					</section>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<?php $count = 1; if(have_rows('featured_point')) : while(have_rows('featured_point')) : the_row('featured_point'); ?>
					<?php if($count == 5) {
						echo "</div><div class='col-xs-6'>";
					} ?>
						<p style="font-size: 1.25em;"><i class="fa fa-angle-right" style="margin-bottom: 15px;"></i> <span><?php the_sub_field('featured_year'); ?></span> <?php the_sub_field('featured_text'); ?></p>
					<?php $count++; endwhile; endif; ?> 
				</div>
			</div>
		</div>
	</section>

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
</div>

<?php get_footer(); ?>