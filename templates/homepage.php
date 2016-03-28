<?php /*
* Template Name: Homepage
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
                    <h3><a href="https://www.adventuresonthegorge.com/" target="_blank">Adventures on the Gorge</a></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="vimeo">
      <iframe src="https://player.vimeo.com/video/<?php echo get_field('vimeo_id'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen id="video"></iframe>
    </div>


    <!-- /////////CAROUSEL PANEL////////////// -->
    <div id="home-carousel" class="carousel slide" data-ride="carousel">

      <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

          <?php

          // The Query
          $the_query = new WP_Query( array( 'post_type' => 'page' ) );

            // The Loop
            if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
              $the_query->the_post();
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
                      <p  data-animation="animated rotateIn"><img src="<?php echo get_field('icon')['sizes']['large']; ?>" alt=""></p>
                      <a href="<?php echo get_permalink(); ?>"><button data-animation="animated flipInX"><?php echo get_field('call_to_action') ?></button></a>
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

        <!-- Controls -->
        <a class="left carousel-control" href="#home-carousel"
             role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#home-carousel"
             role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div><!-- /.carousel -->


    <!-- /////////FOUR IMG PANEL////////////// -->
    <div class="four-imgs">
        <div class="container">
            <div class="row">
                <div class="four columns offset-by-four">
                    <h2 class="akula"><?php echo get_field('panel_title'); ?></h2>
                </div>
                <div class="eight columns offset-by-two">
                    <p><?php echo get_field('panel_description'); ?></p>
                </div>
            </div>

            <div class="row">
              <?php

                // check if the repeater field has rows of data
                if( have_rows('panel_images') ):

                 	// loop through the rows of data
                    while ( have_rows('panel_images') ) : the_row();

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
    <div class="email-signup">
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
                Read the <a href="https://atog-meshdesign.c9users.io/wp-content/uploads/2016/03/2016-sweepstakes-rules.pdf" target="_blank">sweepstakes rules.</a>
            </div>

        </div>

    </div>


    <!-- /////////CAROUSEL PANEL////////////// -->
    <div id="bottom-carousel">

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
 

    <?php

      $i = get_field('big_bottom_image')['sizes']['background-fullscreen'];

    ?>

    <div class="footer-parrallax" data-parallax="scroll" data-image-src="<?php echo $i; ?>">
    </div>


</main><!-- #main -->

<?php get_footer(); ?>
