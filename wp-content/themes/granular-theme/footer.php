
			</div>
		</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 social">
          <a href="https://www.instagram.com/chelseasalonandspa/" target="_blank"><i class="fa fa-instagram"></i>Instagram</a>
          <a href="https://www.facebook.com/chelseasalonandspa/?rf=307020166043364" target="_blank"><i class="fa fa-facebook"></i>Facebook</a>
          <a href="tel:8508788282"><i class="fa fa-phone"></i>850-878-8282</a>
				</div>
				<div class="col-sm-4">
					<address class="full">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-chelsea.png" />
						<a href="">850-878-8282</a>
						1629 Mahan Center Blvd<br/>
						Tallahassee, FL 32308<br/> 
						<div class="license">License #MM3110</div>
					</address>
				</div>
				<div class="col-sm-3 col-sm-offset-1">
					<div class="hours-of-operation">
						<table>
							<tr>
								<td>Monday</td>
								<td>CLOSED</td>
							</tr>
							<tr>
								<td>Tuesday</td>
								<td>9:00am - 7:00pm</td>
							</tr>
							<tr>
								<td>Wednesday</td>
								<td>9:00am - 7:00pm</td>
							</tr>
							<tr>
								<td>Thursday</td>
								<td>9:00am - 8:00pm</td>
							</tr>
							<tr>
								<td>Friday</td>
								<td>9:00am - 7:00pm</td>
							</tr>
							<tr>
								<td>Saturday</td>
								<td>8:00am - 5:00pm</td>
							</tr>
							<tr>
								<td>Sunday</td>
								<td>CLOSED</td>
							</tr>
						</table>
					</div>
					<address class="mobile">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-chelsea.png" />
						1629 Mahan Center Blvd<br/>
						Tallahassee, FL 32308<br/> 
						<div class="license">License #MM3110</div>
					</address>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<p style='text-align: center; margin-top: 25px; color: #444;'>Site created by <a href="http://granular.io" style="color: #444; display: inline;">Granular Web Development</a></p>
				</div>
			</div>
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<div class="campaign-builder">
	<div class="campaign-builder__popup">
    <div class="campaign-builder__close">&times;</div>
		<div class="campaign-builder__content">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paisley-bg.png">
			<h3 class="center">TallyAwards 2017!</h3>
      <p>We are excited to announce Chelsea Salon &amp; Spa has made it to the second round of the 2017 TallyAwards! Thank you for your vote and please continue to vote and name us "Top Salon" in Tallahassee!</p>
      <a href="http://tallyawards.com/voting/vote/" target="_blank" class="btn btn-black bg-black campaign-success">Vote!</a>
		</div>
	</div>
</div>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/script.min.js"></script>

<?php wp_footer(); ?>


<script type="text/javascript">
   $(document).ready(function(){
     $('.slider').slick({
      infinite: true,
      speed: 500,
      fade: true,
  		cssEase: 'linear',
  		arrows: true,
      dots: true,
  		autoplay: true,
  		autoplaySpeed: 10000
     });

     $('.slick-next').click( function() { checkLayout(); });
     $('.slick-prev').click( function() { checkLayout(); });
     $('.slider').on('swipe', function(){  checkLayout(); });
     $('.slider').on('afterChange', function() { checkLayout(); });

     function checkLayout() {
     	var classCheck = $('.slick-current').find('.overlay-dark').length,
     			bookingPortal = $('.booking-portal'),
     			prevButton = $('.slick-prev'),
     			nextButton = $('.slick-next');

     	if(classCheck == 1) {
     		bookingPortal.addClass('dark-layout');
     		prevButton.addClass('dark-layout-btn');
     		nextButton.addClass('dark-layout-btn');
     	} else {
     		bookingPortal.removeClass('dark-layout');
     		prevButton.removeClass('dark-layout-btn');
     		nextButton.removeClass('dark-layout-btn');
     	}
     }
   });
 </script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60767560-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>