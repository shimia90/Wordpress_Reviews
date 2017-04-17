<section id="banner-slider">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <?php
      global $post;
      $args   = array(
        'numberposts'   =>  5,
        'category'      =>  3
      );
      $custom_post  = get_posts($args);
      $countPost    = count($custom_post);
    ?>
    <ol class="carousel-indicators">
      <?php for($i = 0; $i < $countPost; $i++) :  ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" <?php if($i == 0) echo 'class="active"';  ?>></li>
      <?php endfor; ?>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">
      <?php 
        $j  = 0;
        foreach($custom_post as $post) :
      ?> 
      <div class="item item<?php echo $j; ?> <?php if($j == 0) echo 'active'; ?>"
        style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
        <div class="container">
          <div class="col-md-4 carousel-caption">
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
          </div>
        </div>
        <div class="clearall"></div>
      </div>
    <?php 
      $j++;
      endforeach; ?>
    </div>
  </div>
  <!-- carousel -->
</section>
<!-- banner-slider -->