<?php
  $callout = ""; 
  if(get_sub_field('callout_field') == "yes") {
    $callout = "special";
  } 
?>
<div class="service-wrap <?php echo $callout; ?>">
  <h3><?php the_sub_field('title'); ?></h3>
  <p><?php the_sub_field('description'); ?></p>
  <div class="service-wrap--pricing">
    <h5><?php the_sub_field('Pricing'); ?></h5>
  </div>
</div>