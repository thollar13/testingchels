<?php 
/**
*	Template Name: Hair Care
**/

get_header(); ?>
<div id="hair-care">
<?php if (have_posts()) : while(have_posts()) : the_post() ;
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<section class="hero quote" style="background-image: url('<?php echo $url; ?>');">
	<div class="hero-opacity"></div>
	<div class="abs-full">
		<div class="display-table">
			<div class="display-cell">
				<div class="display-content">
					<h1>Hair Care</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif; ?>

<!-- <?php $loop = new WP_Query( array( 'post_type' => 'hair-care', 'posts_per_page' => -1 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<div class="sectional">
		<div class="sectional__wrap">
			<h1><?php the_title(); ?></h1>
			<hr>
			<div class="flex">
				<?php 
					if(have_rows('flex_fields')) : while (have_rows('flex_fields')) : the_row(); 
						if( get_row_layout() == 'service_card' ) { 
							include(TEMPLATEPATH . '/templates/service-card.php');
						} else if ( get_row_layout() == 'simple_text' ) {
							include(TEMPLATEPATH . '/templates/simple-text.php');
						}
					endwhile; endif; 
				?>
			</div>
		</div>
	</div>

<?php endwhile; wp_reset_query(); ?> -->

<section class="hair-care-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h4>Haircuts</h4>
				<p>All haircuts include a full consultation, stress relieving scalp massage, invigorating shampoo and conditioning 	treatment, haircut, and styling lesson to help you recreate your look at home.</p>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<ul class="special-list">
					<li>Women 
						<span>$38-58</span><br>
						<p></p>
					</li>
					<li> Men 
						<span>$29-38</span><br>
						<p></p>
					</li>
					<li>Children (1-6)<span>$15-32</span><br>
						<p></p>
					</li>
					<li>Children (7-12)<span>$20-30</span><br>
						<p></p>
					</li>
					<li>Bang Trim<span>$15</span><br>
						<p></p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="hair-care-wrap" style="padding-top: 0px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h4>Texture</h4>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h5>Body Wave <span>$85-100</span></h5>
				<p>For a full head of curls on hair that is above the shoulder.</p>
			</div>
			<div class="col-sm-6">
				<h5>Spiral Curl <span>$170-180</span></h5>
				<p>For a full head of curls on hair that is shoulder length or longer.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h5>Relaxer <span>$75-100</span></h5>
				<p>For naturally curly or coarse hair to soften and make more manageable.</p>
			</div>
			<div class="col-sm-6">
				<h5>Touch Up <span>$65-95</span></h5>
				<p>For relaxed hair, as a maintenance on the roots.</p>
			</div>
		</div>
	</div>
</section>
<section class="hair-care-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h4>Styling</h4>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h5>SHAMPOO AND BLOWDRY <span>$30-33</span></h5>
				<p>An invigorating shampoo and conditioning treatment, a stress relieving hot towel treatment, complete with the style of your choice.</p>
			</div>
			<div class="col-sm-6">
				<h5>STRAIGHT STYLE <span>$40-65</span></h5>
				<p>A stress relieving scalp massage, hot towel treatment and invigorating shampoo and conditioning treatment. Includes a blow dry and your choice of a flat iron or curling iron style.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h5>BRIDAL STYLE <span>$145-160</span></h5>
				<p>*Please note that the full service price is due at your practice appointment. Be sure to arrive with clean, dry hair and a button down shirt.</p>
			</div>
			<div class="col-sm-6">
				<h5>FORMAL STYLE <span>$58-65</span></h5>
				<p>*Please be sure to arrive with clean, dry hair. </p>
			</div>
		</div>
	</div>
</section>
<section class="hair-care-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h4>Conditioning Treatments</h4>
				<p>Most conditioners will be applied automatically during the haircut service. If you feel that you need extra conditioning, we offer Damage remedy, for highly damaged hair and Botanical Hair Therapy for a luxurious deep conditioning.</p>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h5>Hair and Scalp Dry Remedy Treatment <!-- <span>$50</span> --></h5>
				<p>Beginning with a restorative scalp treatment and ending with a transforming moisture treatment leaving hair soft, silky, and shiny. Includes Shampoo and Style.</p>
			</div>
			<div class="col-sm-6">
				<h5>Hair and Scalp Damage Remedy Treatment <!-- <span>$50</span> --></h5>
				<p>An intensive scalp and hair treatment to help repair, seal and smooth even the most damaged hair. Includes Shampoo and Style.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h5>Scalp Detox Treatment for Thinning Hair <!-- <span>$50</span> --></h5>
				<p>A refreshing scalp massage with turmeric and ginseng to energize and improve micro-circulation. Helps create a healthy scalp environment for an enhanced experience with Invati solutions for thinning hair, helping to reduce hair loss. Includes Shampoo and Style.</p>
			</div>
			<div class="col-sm-6">
				<h5>Dry Remedy Moisture Treatment as Add-on with Service <!-- <span>$15</span> --></h5>
				<p>Improves dry hair with the power of burti and pomegranate oils, leaving strands soft, silky and shiny.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h5>Damage Remedy Repair Treatment as Add-on with Service <!-- <span>$15</span> --></h5>
				<p>Improves damaged hair with the power of quinoa protein and sugar beet-derived amino acid, leaving strands strong and supple.  </p>
			</div>
			<div class="col-sm-6">
				<h5>Scalp Remedy Treatment as Add-on with Service <!-- <span>$25</span> --></h5>
				<p>A deep, restorative massage with the aroma-therapeutic essential oil blend for the healthiest balance to your scalp, setting the stage for beautiful hair.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h5>Scalp Detox Treatment as Add-on with Service <!-- <span>$25</span> --></h5>
				<p>A deep cleansing, refreshing massage with wintergreen-derived salicylic  acid that gently exfoliates your scalp and removes build-up that may affect healthy hair.  </p>

			</div>
		</div>
	</div>
</section>

<section class="hair-care-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h4>Color Collection</h4>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h5>Partial Highlight <span>$70-88</span></h5>
				<p>Color or colors applied for dimension and brightness to accent your look applied on half or less of the hair.  </p>
			</div>
			<div class="col-sm-6">
				<h5>Full Highlight <span>$85-105</span></h5>
				<p>Color or colors for extra dimension throughout the majority of the hair.  </p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h5>Accent Highlights <span>$55-73</span></h5>
				<p>Just a touch of color for a face framing accent.  </p>
			</div>
			<div class="col-sm-6">
				<h5>Full Color <span>$80-95</span></h5>
				<p>Color coverage from root to tip, either permanent or demi-permanent.  </p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h5>Root Connection <span>$60-80</span></h5>
				<p>Color on the new growth line.  </p>
			</div>
			<div class="col-sm-6">
				<h5>Balayage <span>$150-170</span></h5>
				<p></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h5>Ombre <span>$150-170</span></h5>
				<p></p>
			</div>
		</div>
	</div>
</section>

<section class="hair-care-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h4>Finishing Touches</h4>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h5>NovaLash Lash Extensions - Full Set <span>$200</span></h5>
				<h5>NovaLash Lash Extensions - Fills/Maintenance <span>$60</span></h5>
				<h5>Lash Extensions<span>$25-35</span></h5>
				<h5>Brow Tint<span>$15</span></h5>
				<h5>Lash Tint<span>$25</span></h5>
				<br/><br/><br/>
			</div>
		</div>
	</div>
</section>

</div>


<?php get_footer(); ?>