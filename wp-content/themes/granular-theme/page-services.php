<?php get_header(); ?>

	<div class="hero-secondary vp-sm-3 vp-sm-top-7">
		<div class="container u-center">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h4>SERVICES</h4>
					<hr/>
					<p>At Granular Technologies, we offer a full range of web design, development, and hosting services that help you reach your goal. We take time to listen and understand your goals while working alongside you to achieve them. The result is web done how it should be.</p>
				</div>
			</div>
		</div>
		<div class="angle"></div>
	</div>

	<div class="container u-center">
		<div class="row">
		<?php
			$count = 0;
			$args = array( 
		        'child_of' => $post->ID, 
		        'parent ' => $post->ID,
		        'hierarchical' => 0,
		        'sort_column' => 'menu_order', 
		        'sort_order' => 'asc'
			);
			$pages = get_pages( $args );
			foreach( $pages as $post ) { ?>
				<div class="col-sm-6 vp-sm-4">
					<div class="services-module">
						<i class="<?php the_field('icon_shortcode'); ?>"></i>
						<h5><?php the_title(); ?></h5>
						<p><?php the_field('short_description'); ?></p>
						<a href="<?php the_permalink(); ?>" class="btn">
							<span>Learn More</span>
						</a>
					</div>
				</div>

		<?php 
			$count++; 
				if($count%2 == 0) {
					echo "</div>";
					echo "<div class='row'>";
				}
			} 
		?>
		</div>
	</div>

<?php get_footer(); ?>