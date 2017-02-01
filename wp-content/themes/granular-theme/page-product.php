<?php 
/**
*	Template Name: Product
**/
get_header(); ?>

<div class="product-wrap" style="padding: 100px 0px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 style="text-align: center;">Our Products/Packages</h1>
			</div>
		</div>
		<!-- <div class="row"> -->
			<?php $products = new WP_Query(array('post_type' => 'product' ));
			if($products->have_posts()) : while($products->have_posts()) : $products->the_post(); ?>
		<div class="row">
			<div class="col-sm-4">
				<a href="http://www.secure-booker.com/chelsea/ShopOnline/GiftCertificate.aspx" target="_blank" class="product-page-item" style="background-image: url('<?php return_imgix(get_field('image'), 400, 300, 100); ?>');">
					
				</a>
				<!-- <?php if(get_field('price') != 0) { ?>
					<p style="text-align: center; margin-top: 10px;"><?php the_title(); ?> <br /> $<?php the_field('price'); ?> </p>	
				<?php } else { ?>
					<p style="text-align: center; margin-top: 10px;"><?php the_title(); ?> <br /> pick your price </p>
				<?php } ?> -->
			</div>
			<div class="col-sm-8">
				<h3><?php the_title(); ?> <?php if(get_field('price') != 0) { ?>
					- $<?php the_field('price'); ?>
				<?php } ?></h3>
				<p style="margin-top: 25px;"><?php the_field('description'); ?> </p>
				<a href="http://www.secure-booker.com/chelsea/ShopOnline/GiftCertificate.aspx" target="_blank" class="btn" style="display: inline-block; margin-top: 20px; border: 1px solid black; color: black; border-radius: 0px;">Purchase</a>
			</div>
		</div>
			<?php endwhile; endif; ?>		
		<!-- </div> -->
	</div>
</div>

<?php get_footer(); ?>