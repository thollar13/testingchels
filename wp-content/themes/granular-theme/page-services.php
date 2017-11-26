<?php get_header(); ?>

<div id="about-pg">
	<section class="hero quote" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/Chelsea-Lobby.jpg');">
		<h1><?php the_title(); ?></h1>
	</section>

	<div class="vp5">
		<div class="container">
			<div class="row">
				
				<div class="featured__card vm5">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-5">
        				<div class="featured__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/Hair-Care.jpg');"></div>
        			</div>
        			<div class="col-sm-6 col-sm-offset-1">
        				<a href="/services/hair-care">
        					<h2 class="color-black bg-white">Hair Care &nbsp;<i class="fa fa-angle-right"></i></h2>
        				</a>
        				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione error, repudiandae accusantium voluptatibus harum ipsam deserunt! Est nesciunt error totam aperiam, cumque libero. Repellendus cum, quam maxime facilis sint vitae!</p>
        			</div>
        		</div>
        	</div>
        </div>

        <div class="featured__card vm5">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-5">
        				<div class="featured__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/edited-9043.jpg');"></div>
        			</div>
        			<div class="col-sm-6 col-sm-offset-1">
        				<a href="/services/spa-services">
        					<h2 class="color-black bg-white">Spa Services &nbsp;<i class="fa fa-angle-right"></i></h2>
        				</a>
        				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione error, repudiandae accusantium voluptatibus harum ipsam deserunt! Est nesciunt error totam aperiam, cumque libero. Repellendus cum, quam maxime facilis sint vitae!</p>
        			</div>
        		</div>
        	</div>
        </div>

        <div class="featured__card vm5">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-5">
        				<div class="featured__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/Chelsea-Spa.jpg');"></div>
        			</div>
        			<div class="col-sm-6 col-sm-offset-1">
        				<a href="/services/vomor">
        					<h2 class="color-black bg-white">Vomor Services &nbsp;<i class="fa fa-angle-right"></i></h2>
        				</a>
        				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione error, repudiandae accusantium voluptatibus harum ipsam deserunt! Est nesciunt error totam aperiam, cumque libero. Repellendus cum, quam maxime facilis sint vitae!</p>
        			</div>
        		</div>
        	</div>
        </div>

        <div class="featured__card vm5">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-5">
        				<div class="featured__image" style="background-size: cover; background-position: center; background-image: url('<?php return_imgix(get_field('image'), 400, 300, 100); ?>');"></div>
        			</div>
        			<div class="col-sm-6 col-sm-offset-1">
        				<a href="/services/weddings">
        					<h2 class="color-black bg-white">Weddings &nbsp;<i class="fa fa-angle-right"></i></h2>
        				</a>
        				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione error, repudiandae accusantium voluptatibus harum ipsam deserunt! Est nesciunt error totam aperiam, cumque libero. Repellendus cum, quam maxime facilis sint vitae!</p>
        			</div>
        		</div>
        	</div>
        </div>

       </div>
		</div>
	</div>
</div>

<?php get_footer(); ?>