<?php get_header(); ?>
<?php $price = get_field('price'); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php if(get_field('price') != 0) { ?>
				<h2 style="text-align: center;"><?php the_title(); ?> - $<?php the_field('price'); ?></h2>
			<?php } else { ?>
				<h2 style="text-align: center;"><?php the_title(); ?></h2>
			<?php } ?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
			<div class="purchase-container">
				<div class="row">
					<div class="col-sm-12">
						<span class="payment-errors"><?= $error ?></span>
						<span class="payment-success"><?= $success ?></span>
						<form action="http://chelseasalon.com/wp-content/themes/launchframe/charge.php" method="POST" id="payment-form">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>To</label>
					</div>
					<div class="col-sm-8">
						<input type="text" size="4" autocomplete="off" class="to-name" name="to-name" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>From</label>
					</div>
					<div class="col-sm-8">
						<input type="text" size="4" autocomplete="off" class="from-name" name="from-name" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>Personal Memo</label>
					</div>
					<div class="col-sm-8">
						<textarea rows="10" autocomplete="off" class="personal-memo" name="message">
						</textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<hr />
						<h4>Your Information</h4>
						<hr />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>Email</label>
					</div>
					<div class="col-sm-8">
						<input type="email" size="4" autocomplete="off" class="email" name="email" />
						<input type="hidden" size="4" autocomplete="off" class="package" name="package" value="<?php echo the_title(); ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>Phone #</label>
					</div>
					<div class="col-sm-8">
						<input type="text" size="4" autocomplete="off" class="to-name" name="phone" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>Address</label>
					</div>
					<div class="col-sm-8">
						<input type="text" size="4" autocomplete="off" class="to-name" name="purchase-address" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>City</label>
					</div>
					<div class="col-sm-8">
						<input type="text" size="4" autocomplete="off" class="to-name" name="purchase-city" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>State</label>
					</div>
					<div class="col-sm-8">
						<input type="text" size="4" autocomplete="off" class="to-name" name="purchase-state" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>Zip</label>
					</div>
					<div class="col-sm-8">
						<input type="text" size="4" autocomplete="off" class="to-name" name="purchase-zip" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<hr />
						<h4>Payment Information</h4>
						<hr />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>Card Number</label>
					</div>
					<div class="col-sm-8">
						<input type="text" size="20" autocomplete="off" class="card-number" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>CVC</label>
					</div>
					<div class="col-sm-8">
						<input type="text" size="4" autocomplete="off" class="card-cvc" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>Expiration (MM/YYYY)</label>
					</div>
					<div class="col-sm-8">
						<input type="text" size="2" class="card-expiry-month" style="width: 48%;"/>
						<span> / </span>
						<input type="text" size="4" class="card-expiry-year" style="width: 48%;"/>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<hr />
						<h4>Payment Amount</h4>
						<hr />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>Amount ($)</label>
					</div>
					<div class="col-sm-8">
						<?php if($price != 0) { ?>
							<input type="text" name="amount" size="2" class="custom-amount" value="<?php echo $price; ?>" readonly/>
						<?php } else { ?>
							<input type="text" name="amount" size="2" class="custom-amount" />
						<?php } ?>
						<input type="hidden" name="amount" class="payment-amount" value="<?php echo $price; ?>"/>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<hr />
						<h4>Shipping Information</h4>
						<hr />
						<p class="purchase-note"></p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>Shipping?</label>
					</div>
					<div class="col-sm-8">
						<p>There will be a $5 fee for shipping. Pickup is free.</p>
						<input type="radio" name="shipping" value="ship"> Ship for $5
						<br>
						<input type="radio" name="shipping" value="pick-up" checked> Pick-Up at Chelsea Salon
					</div>
				</div>
				<div class="shipping-wrap">
					<div class="row">
						<div class="col-sm-4">
							<label>Name</label>
						</div>
						<div class="col-sm-8">
							<input type="text" size="4" autocomplete="off" class="first-name" name="receive-name" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<label>Address</label>
						</div>
						<div class="col-sm-8">
							<input type="text" size="4" autocomplete="off" class="address" name="receive-address" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<label>City</label>
						</div>
						<div class="col-sm-8">
							<input type="text" size="4" autocomplete="off" class="city" name="receive-city" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<label>State</label>
						</div>
						<div class="col-sm-8">
							<input type="text" size="4" autocomplete="off" class="state" name="receive-state" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<label>Zip Code</label>
						</div>
						<div class="col-sm-8">
							<input type="text" size="4" autocomplete="off" class="zip" name="receive-zip" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<button type="submit" class="submit-button">Purchase</button>
						</form>
					</div>
				</div>
			</div>			
		</div>
		<div class="col-sm-4">
			<img src="<?php the_field('image'); ?>" style="width: 100%; padding-bottom: 0px; margin-top: 15px; max-height: 400px;" />
			<p style="margin: 25px 0px 30px;"><?php the_field('description'); ?></p>
		</div>
	</div>
</div>


<?php get_footer(); ?>