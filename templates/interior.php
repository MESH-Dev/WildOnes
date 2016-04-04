<?php /*
* Template Name: Interior
*/
get_header(); ?>

<i id="menu-toggle" class="fa fa-bars"></i>
<i id="menu-close" class="fa fa-close"></i>

<main id="main" class="site-main" role="main">

  <!-- /////////HOME PANEL////////////// -->

  <?php

  $image = get_field('background_image');

  ?>

  <div class="interior-header animated flipInX">
    <div class="container">
      <div class="row">

        <div class="two columns">
          <div class="interior-header-item">
            <a href="<?php echo get_permalink(9); ?>">Jo-Beth</a>
          </div>
        </div>
        <div class="two columns">
          <div class="interior-header-item">
            <a href="<?php echo get_permalink(11); ?>">Kyle</a>
          </div>
        </div>
        <div class="four columns">
          <div class="interior-header-item interior-logo">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" /></a>
          </div>
        </div>
        <div class="two columns">
          <div class="interior-header-item">
            <a href="<?php echo get_permalink(13); ?>">Bongo</a>
          </div>
        </div>
        <div class="two columns">
          <div class="interior-header-item">
            <a href="<?php echo get_permalink(15); ?>">Joe</a>
          </div>
        </div>

       </div>
    </div>
  </div>

  <div id="home-carousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <?php

          // The Loop
          if ( have_posts() ) {

            while ( have_posts() ) {
              the_post();
              ?>

              <?php if (get_the_id() != 5) { ?>

                <div class="item <?php if( $the_query->current_post == 0 && !is_paged() ) { ?>active<?php } ?>" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_id())); ?>');">
                  <div class="carousel-caption">
                    <div class="carousel-caption-container">
                      <h4 data-animation="animated fadeInDown">
                        <?php the_content(); ?>
                      </h4>
                      <hr data-animation="animated zoomInUp">
                      <h2 data-animation="animated flipInY">
                        <?php the_title(); ?>
                      </h2>
                      <div class="home-play-btn center">
                          <div id="home-play-btn"><img src="<?php echo get_template_directory_uri(); ?>/img/play-btn.png" alt="The WildOnes" /></div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php } ?>

              <?php
            }

          } else {
          // no posts found
          }

        /* Restore original Post Data */
        wp_reset_postdata();

        ?>

      </div><!-- /.carousel-inner -->

  </div><!-- /.carousel -->

  <div class="vimeo">
    <iframe src="https://player.vimeo.com/video/<?php echo get_field('vimeo_id'); ?>?api=1&player_id=video" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen id="video" ></iframe>
  </div>
  <div class="video-social">
        <div class="container">
            <div class="row">
                <div class="twelve columns center shares">
                <h2>Share this video:</h2>
                    <div class="share-vid">
                        <a href="https://player.vimeo.com/video/<?php echo get_field('vimeo_id'); ?>/share/facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://player.vimeo.com/video/<?php echo get_field('vimeo_id'); ?>/share/twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="twelve columns home-play-btn center">
                        <div id="home-play-btn-soc" class="share-play">Play Again?<br><img src="<?php echo get_template_directory_uri(); ?>/img/play-btn.png" alt="The WildOnes" /></div>
                    </div>
                </div>
            </div>
        </div>    
    </div>

  <!-- /////////CAROUSEL PANEL////////////// -->
  <div id="bottom-carousel" class="interior-carousel">

    <?php

      // check if the repeater field has rows of data
      if( have_rows('bottom_carousel_images') ):

        // loop through the rows of data
          while ( have_rows('bottom_carousel_images') ) : the_row();

              $image = get_sub_field('bottom_carousel_image')['sizes']['slidersmall'];
              ?>

              <img src="<?php echo $image; ?>" />

              <?php
          endwhile;

      else :

          // no rows found

      endif;

    ?>

  </div>


  <!-- /////////FOUR IMG PANEL////////////// -->
  <div class="four-imgs">
      <div class="container">
          <div class="row">
              <div class="four columns offset-by-four">
                  <h2 class="akula"><?php echo get_field('panel_title',5); ?></h2>
              </div>
              <div class="eight columns offset-by-two">
                  <p><?php echo get_field('panel_description',5); ?></p>
              </div>
          </div>

          <div class="row">
            <?php

              // check if the repeater field has rows of data
              if( have_rows('panel_images',5) ):

                // loop through the rows of data
                  while ( have_rows('panel_images',5) ) : the_row();

                      $image = get_sub_field('panel_image')['sizes']['large'];
                      ?>

                      <div class="three columns">
                        <img src="<?php echo $image; ?>" />
                      </div>

                      <?php
                  endwhile;

              else :

                  // no rows found

              endif;

            ?>

          </div>

      </div>
  </div>

  <!-- /////////EMAIL SIGN UP////////////// -->
  <div class="email-signup interior-email">
      <div class="container">
          <div class="row">
              <div class="four columns offset-by-four">
                  <h2 class="akula">Play Wild.</h2>
              </div>

          </div>

           <div class="row">
              <div class="eight columns offset-by-two ">
                    <form id="email_signup" class="left-offset">
                        <fieldset>

                        <legend>Email Sign Up</legend>

                        <div class="form-group">
                            <label for="First Name">First Name</label>
                            <div class="three columns ">
                                <input id="FirstName" name="First Name" type="text" placeholder="First Name"  class="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Last Name">Last Name</label>
                            <div class="three columns">
                                <input id="LastName" name="Last Name" type="text" placeholder="Last Name" class=" " required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Zip Code">Zip Code</label>
                            <div class="two columns ">
                                <input id="ZipCode" name="Zip Code" type="text" placeholder="Zip Code" class=" " required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Email">Email</label>
                            <div class="eight columns ">
                                <input id="Email" name="Email" type="email" placeholder="Email" class="email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sumit">Submit</label>
                            <div class="eight columns ">
                                <button id="sumit" name="sumit" class="submit">Seize the Moment</button>
                            </div>
                        </div>

                        </fieldset>
                    </form>
                    
                    <div id="thank-you" class="thanks">
                       <p>Oh, you <em>are</em> a wild one, aren’t you? Okay, let’s see how this plays out. We’ll announce our grand prize winner via social and email on <span class="black">Tuesday, May 3</span>, so stay tuned.</p>
                    </div>
                    
                    
                </div>
          </div>
      </div> <!-- .container -->

      <div class="social-text">
          <div class="left">
                 Follow us on <a href="https://www.facebook.com/AdventuresOnTheGorge" target="_blank">facebook</a>, <a href="https://twitter.com/onthegorge" target="_blank">twitter</a>, & <a href="https://www.instagram.com/onthegorge/" target="_blank">instagram</a> for chances to win whitewater rafting adventures, zip line trips and more.
          </div>
          <div class="right">
              Read the <a href="http://thewildones.us/wp-content/uploads/2016/03/2016-sweepstakes-rules.pdf" target="_blank">sweepstakes rules.</a>
          </div>

      </div>

    </div>


    <!-- Other Adventurers -->

    <div class="adventurers">

      <?php

      $this_id = get_the_id();

      // The Query
      $the_query = new WP_Query( array( 'post_type' => 'page' ) );

        // The Loop
        if ( $the_query->have_posts() ) {

        while ( $the_query->have_posts() ) {
          $the_query->the_post();
          ?>

          <?php if (get_the_id() != 5 && get_the_id() != $this_id) { 
              $position = 'left';
              if( get_the_id() == 13 || get_the_id() == 11 )
                $position = 'right';
          ?>
          
            

          <div class="adventurer" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_id())); ?>'); background-position: <?php echo $position;?> ">
            <a href="<?php echo get_permalink(); ?>">
              <div class="carousel-caption">
                <div class="carousel-caption-container">
                  <h2 data-animation="animated flipInY">
                    <?php the_title(); ?>
                  </h2>
                  <hr data-animation="animated zoomInUp">
                  <p  data-animation="animated rotateIn"><img src="<?php echo get_field('icon')['sizes']['large']; ?>" alt=""></p>
                </div>
              </div>
            </a>
          </div>

          <?php } ?>

          <?php
        }

        } else {
        // no posts found
        }

      /* Restore original Post Data */
      wp_reset_postdata();

      ?>

    </div>

</main><!-- #main -->

<?php get_footer(); ?>
