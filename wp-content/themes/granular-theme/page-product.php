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
		<div class="sectional">
			<div class="sectional__wrap">
				<div class="flex">

				<?php $products = new WP_Query(array('post_type' => 'product' ));
				if($products->have_posts()) : while($products->have_posts()) : $products->the_post(); ?>

				<div class="service-wrap <?php echo $callout; ?>">
				  <h3><?php the_title(); ?></h3>
				  <div class="service-wrap--bg-image" style="background-image: url('<?php the_field('image'); ?>');">&nbsp;</div>
				  <p><?php the_field('description'); ?></p>
				  <a href="http://www.secure-booker.com/chelsea/ShopOnline/GiftCertificate.aspx" target="_blank" class="service-wrap--purchase">Purchase</a>
				  <div class="service-wrap--pricing">
				    <h5>$<?php the_field('price'); ?></h5>
				  </div>
				</div>

				<?php endwhile; endif; ?>
						
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>