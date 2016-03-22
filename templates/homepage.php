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
                    <img src="http://localhost/wildones/wp-content/themes/wildones/img/logo.png" alt="The WildOnes" />
                </div>
                <div class="twelve columns home-play-btn center">
                    <a id="home-play-btn" href="#"><img src="http://localhost/wildones/wp-content/themes/wildones/img/play-btn.png" alt="The WildOnes" /></a>
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


    <!-- /////////THREE IMG PANEL////////////// -->





 
    
 


</main><!-- #main -->

<?php get_footer(); ?>
