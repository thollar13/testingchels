<?php 
/**
*	Template Name: Single Services
**/
get_header(); ?>

<!--
	1. Short Description Field
-->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div class="hero-secondary vp-sm-3 vp-sm-top-7">
		<div class="container u-center">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h4><i class="<?php the_field('icon_shortcode'); ?>"></i> &nbsp;<?php the_title(); ?></h4>
					<hr/>
				</div>
			</div>
		</div>
		<div class="angle"></div>
	</div>

	<div class="right-panel"></div>

	<div class="container-fluid vp-sm-5">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<h5>Granular Technologies Philosophy:</h5>
				<p>Building a new website is a complex process. That's why we have a client-focused approach for each project we undertake. We answer your questions, and we're committed to making sites that function flawlessly and are easy for you to maintain. Our team is smart and accessible, and your project will benefit from friendly technology and a schedule that works for you.</p>
<!-- 				<i class="<?php the_field('icon_shortcode'); ?>"></i> -->
				<p><?php the_content(); ?></p>
			</div>
			<div class="col-sm-4 col-sm-offset-2 txt-white">
				<h5>Frontend Development</h5>
				<p>Our frontend designers and developers are experts at creating visually appealing sites that seamlessly transition from one screen size to the next. From the color and typography that create the look and feel of a site to the media queries that ensure it renders properly, the elements of frontend design and development are crucial to creating a site that engages visitors any time, anywhere.</p>
				<h5>Backend Development</h5>
				<p>Backend developers are responsible for making a website function. The backend of a site is where owners go to add or update content and images, and backend developers create the capabilities that allow them to do this.</p>
				<h5>Website Design</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit facere dolores id officia libero soluta consectetur, ipsa voluptatem perspiciatis fugit architecto molestiae, sint ut, minima aliquam labore ullam culpa cumque!</p>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>			

<?php get_footer(); ?>