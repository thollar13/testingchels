<?php 
/**
*	Template Name: Product
**/
get_header(); ?>

<div class="product-wrap" style="padding: 100px 0px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 style="text-align: center;">Our Packages</h1>
			</div>
		</div>
		<div class="row">

				<?php $products = new WP_Query(array('post_type' => 'product' ));
				if($products->have_posts()) : while($products->have_posts()) : $products->the_post(); ?>

				<div class="featured__card vm5">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-5">
        				<div class="featured__image" style="background-size: cover; background-position: center; background-image: url('<?php return_imgix(get_field('image'), 400, 300, 100); ?>');"></div>
        			</div>
        			<div class="col-sm-6 col-sm-offset-1">
        				<h3 class="color-tan bg-black" style="color: #c4daa7;"><?php the_title(); ?></h3>
        				<hr style="border-top: 5px solid #444; margin-top: -40px; margin-bottom: 30px; ">
        				<p><?php the_field('description'); ?></p>
        				<a class="btn btn-lightblack" href="http://www.secure-booker.com/chelsea/MakeAppointment/Search.aspx" target="_blank" title="Spa Packages">Purchase</a>
        			</div>
        		</div>
        	</div>
        </div>

				<?php endwhile; endif; ?>
						
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>