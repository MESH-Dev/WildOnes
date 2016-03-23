<?php /*
* Template Name: Interior
*/
get_header(); ?>

<main id="main" class="site-main" role="main">

  <!-- /////////HOME PANEL////////////// -->

  <?php

  $image = get_field('background_image');

  ?>

  <div class="home-panel" style="background-image: url('<?php echo $image['sizes']['background-fullscreen'] ?>');">

      <div class="container">
          <div class="row">
              <div class="twelve columns home-logo center">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="The WildOnes" />
              </div>
              <div class="twelve columns home-play-btn center">
                  <div id="home-play-btn"><img src="<?php echo get_template_directory_uri(); ?>/img/play-btn.png" alt="The WildOnes" /></div>
              </div>
              <div class="twelve columns home-callout center">
                  <h3><a href="#">Adventures on the Gorge</a></h3>
              </div>
          </div>
      </div>
  </div>

  <div class="vimeo">
    <iframe src="https://player.vimeo.com/video/<?php echo get_field('vimeo_id'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>
  </div>


</main><!-- #main -->

<?php get_footer(); ?>
