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
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i" rel="stylesheet">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/chelsea-bg.jpg" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
		<div id="content" class="site-content">
			<header id="masthead" class="site-header" role="banner">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="logo">
						<a href="/home">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-chelsea.png" />
							<a class="phone" href="tel:850-878-8282">850-878-8282</a>
						</a>
					</div>
					<div class="mobile-nav">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<ul class="show-nav">
						<li><a href="/">Home</a><li><a href="/about" title="About">About</a></li>
						<li><a href="/our-talent" title="Our Talent">Talent</a></li>
						<li><a href="/hair-care" title="Hair Care">Hair</a></li>
						<li><a href="/spa-services" title="Spa Services">Spa</a></li>
						<li><a href="/weddings" title="weddings">Weddings</a></li>
						<li><a href="/spa-packages" title="Spa Packages">Packages</a></li>
						<li><a href="http://www.secure-booker.com/chelsea/MakeAppointment/Search.aspx" target="_blank" title="Book Now">Book Now</a></li>
						<li class="mobile"><a href="tel:850-878-8282">Call Now</a></li>
					</ul>
				</nav>					
			</header>


				
