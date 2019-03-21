<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta description="<?php echo the_title(); ?> | Chelsea Salon &amp; Spa. Tallahassee's largest AVEDA Lifestyle Salon &amp; Spa. Serving the Tallahassee area since 1977.">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/chelsea-bg.jpg" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
		<div id="content" class="site-content">
			<header>
				<nav>
					<a href="/home" class="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-chelsea.png" />
					</a>

					<div class="mobile-nav">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="main-menu">
						<div class="menu-item">
							<a href="/">Home</a>
						</div>
						<div class="menu-item">
							<a href="/about" title="About">About Us</a>
						</div>
						<div class="menu-item">
							<a href="/our-talent" title="Our Talent">Our Talent</a>
						</div>
						<div class="menu-item">
								<a href="/services" class="our-services-menu-item">Services</a>
								<div class="sub-menu">
									<a href="/services/hair-care" title="Hair Care" class="sub-menu-item">Hair Care</a>
									<a href="/services/spa-services" title="Spa Services" class="sub-menu-item">Spa Services</a>
									<a href="/services/vomor-hair-extensions" class="sub-menu-item" title="Vomor Hair Extensions">Vomor</a>
									<a href="/services/microblading" class="sub-menu-item">Microblading</a>
									<a href="/services/weddings" class="sub-menu-item">Weddings</a>
								</div>
						</div>
						<div class="menu-item">
							<a href="/spa-packages" title="Spa Packages">Packages</a>
						</div>
						<div class="menu-item">
							<a href="https://www.aveda.com/salon/chelseasalon" target="_blank">Shop Aveda</a>
						</div>
						<div class="menu-item book-now">
							<a href="https://go.booker.com/location/chelsea/service-menu" title="Book Now" target="_blank">Book Now</a>
						</div>



						<div class="mobile">
							<a href="https://go.booker.com/location/chelsea/service-menu" target="_blank" title="Book Now">Book Now</a>
						</div>
						<div class="mobile">
							<a href="tel:850-878-8282">Call Now</a>
						</div>
					</div>
				</nav>					
			</header>


				
