<?php /*
* Template Name: Homepage 
*/
get_header(); ?>

<main id="main" class="site-main" role="main">

    <!-- /////////HOME PANEL////////////// -->
    <div class="home-panel" style="background-image: url('http://localhost/wildones/wp-content/themes/wildones/img/home-bg.jpg');">
    
        <div class="container">
            <div class="row">
                <div class="twelve columns home-logo center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="The WildOnes" />
                </div>
                <div class="twelve columns home-play-btn center">
                    <a id="home-play-btn" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/play-btn.png" alt="The WildOnes" /></a>
                </div>
                <div class="twelve columns home-callout center">
                    <h3><a href="#">Adventures on the Gorge</a></h3>
                </div>
            </div>
        </div>        
    </div>


    <!-- /////////CAROUSEL PANEL////////////// -->
    <div id="home-carousel" class="carousel slide" data-ride="carousel">

      <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="item active" style="background-image: url('http://localhost/wildones/wp-content/themes/wildones/img/bongo.jpg');">
              <div class="carousel-caption">
                <h4 data-animation="animated fadeInDown">
                  I never realized that there was a place where people lived that wasn’t so much about what you had; everyone’s living in tents, hanging out together and being communal and really enjoying living everyday.
                </h4>
                <hr data-animation="animated zoomInUp"> 
                <h2 data-animation="animated flipInY">
                  Bongo
                </h2>
                <p  data-animation="animated rotateIn"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-cara.png" alt=""></p>
                <button data-animation="animated flipInX">Watch Bongo In Action</button>
              </div>
            </div><!-- /.item -->

            <!-- Second slide -->
             <div class="item" style="background-image: url('http://localhost/wildones/wp-content/themes/wildones/img/bongo.jpg');">
              <div class="carousel-caption">
                <h4 data-animation="animated fadeInDown">
                  I never realized that there was a place where people lived that wasn’t so much about what you had; everyone’s living in tents, hanging out together and being communal and really enjoying living everyday.
                </h4>
                <hr data-animation="animated zoomInUp"> 
                <h2 data-animation="animated flipInY">
                  Bongo
                </h2>
                <p  data-animation="animated rotateIn"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-cara.png" alt=""></p>
                <button data-animation="animated flipInX">Watch Bongo In Action</button>
              </div>
            </div><!-- /.item -->

            <!-- Third slide -->
            <div class="item" style="background-image: url('http://localhost/wildones/wp-content/themes/wildones/img/bongo.jpg');">
              <div class="carousel-caption">
                <h4 data-animation="animated fadeInDown">
                  I never realized that there was a place where people lived that wasn’t so much about what you had; everyone’s living in tents, hanging out together and being communal and really enjoying living everyday.
                </h4>
                <hr data-animation="animated zoomInUp"> 
                <h2 data-animation="animated flipInY">
                  Bongo
                </h2>
                <p  data-animation="animated rotateIn"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-cara.png" alt=""></p>
                <button data-animation="animated flipInX">Watch Bongo In Action</button>
              </div>
            </div><!-- /.item -->

            <!-- Fourth slide -->
            <div class="item" style="background-image: url('http://localhost/wildones/wp-content/themes/wildones/img/bongo.jpg');">
              <div class="carousel-caption">
                <h4 data-animation="animated fadeInDown">
                  I never realized that there was a place where people lived that wasn’t so much about what you had; everyone’s living in tents, hanging out together and being communal and really enjoying living everyday.
                </h4>
                <hr data-animation="animated zoomInUp"> 
                <h2 data-animation="animated flipInY">
                  Bongo
                </h2>
                <p  data-animation="animated rotateIn"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-cara.png" alt=""></p>
                <button data-animation="animated flipInX">Watch Bongo In Action</button>
              </div>
            </div><!-- /.item -->

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
                    <h2 class="akula">How Wild Are You?</h2>
                </div>
                <div class="eight columns offset-by-two">
                    <p>Enter to win a 3-day all-inclusive West Virginia adventure vacation for four people, plus gear, beer, and shirts on your backs. </p>
                </div>
            </div>

            <div class="row">
                <div class="three columns"><img src="<?php echo get_template_directory_uri(); ?>/img/zipline.png" alt=""></div>
                <div class="three columns"><img src="<?php echo get_template_directory_uri(); ?>/img/zipline.png" alt=""></div>
                <div class="three columns"><img src="<?php echo get_template_directory_uri(); ?>/img/zipline.png" alt=""></div>
                <div class="three columns"><img src="<?php echo get_template_directory_uri(); ?>/img/zipline.png" alt=""></div>
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
                    <form class="left-offset">
                        <fieldset>
 
                        <legend>Email Sign Up</legend>
 
                        <div class="form-group">
                            <label for="First Name">First Name</label>  
                            <div class="three columns ">
                                <input id="FirstName" name="First Name" type="text" placeholder="First Name"  class="" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Last Name">Last Name</label>  
                            <div class="three columns">
                                <input id="LastName" name="Last Name" type="text" placeholder="Last Name" class=" ">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Zip Code">Zip Code</label>  
                            <div class="two columns ">
                                <input id="ZipCode" name="Zip Code" type="text" placeholder="Zip Code" class=" ">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Email">Email</label>  
                            <div class="eight columns ">
                                <input id="Email" name="Email" type="text" placeholder="Email" class="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sumit">Submit</label>
                            <div class="eight columns ">
                                <button id="sumit" name="sumit" class="submit">Sieze the Moment</button>
                            </div>
                        </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div> <!-- .container -->

        <div class="social-text">
            <div class="left">
                 Follow us on <a href="#">facebook</a>, <a href="#">twitter</a>, & <a href="#">instagram</a> for chances to win whitewater rafting adventures, zip line trips and more. 
            </div>
            <div class="right">
                Read the <a href="#">sweepstakes rules.</a>
            </div>

        </div>
        
    </div>


    <!-- /////////CAROUSEL PANEL////////////// -->
    <div id="bottom-carousel">
        <img src="<?php echo get_template_directory_uri(); ?>/img/small-carousel.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/small-carousel.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/small-carousel.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/small-carousel.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/small-carousel.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/small-carousel.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/small-carousel.png" alt="">
    </div><!-- /.carousel-inner -->

        <!-- Controls -->
    <!--    <a class="left carousel-control" href="#bottom-carousel"
             role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#bottom-carousel"
             role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> -->

    <div class="footer-parrallax" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/group.jpg">
        
    </div>

 
</main><!-- #main -->

<?php get_footer(); ?>
