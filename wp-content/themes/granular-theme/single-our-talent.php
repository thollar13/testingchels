<?php get_header(); ?>

<img src="<?php echo get_template_directory_uri(); ?>/assets/img/paisley-bg.png" class="out-talent__single-bg-image" />
<div class="our-talent__single-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<img src="<?php the_field('image'); ?>" alt="<?php echo the_title(); ?>" class="our-talent__single-image">
			</div>
			<div class="col-sm-6">
				<h2 class="our-talent__single-name"><?php the_title(); ?></h2>
				<p class="our-talen__single-content mt2"><?php the_field('about'); ?></p>
				<a href="http://www.secure-booker.com/chelsea/MakeAppointment/Search.aspx" class="btn btn-black mt2" target="_blank">Book Appointment</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>