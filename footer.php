

<footer class="site-footer <?php if( is_page_template('templates/homepage-fullscreen.php') ) { echo "footer-fullscreen"; } ?>">

	<div class="container">
		<div class="row">
			<div class="two columns offset-by-two">
				<div class="logo-container logo-1">
					<img src="<?php echo get_template_directory_uri(); ?>/img/keen_logo.png" />
				</div>
			</div><!-- End of Footer -->
			<div class="four columns">
				<div class="logo-container">
					<img src="<?php echo get_template_directory_uri(); ?>/img/aotg_logo.png" />
				</div>
			</div>
			<div class="two columns">
				<div class="logo-container">
					<img src="<?php echo get_template_directory_uri(); ?>/img/waterstonia_logo.png" />
				</div>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<div class="logo-container">
					<p>Copyright Adventures on the Gorge, 2016, All rights reserved. Site by <a href="http://meshfresh.com" target="_blank">MESH</a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="social-icons-container">
		<a href=""><i class="fa fa-facebook"></i></a>
		<a href=""><i class="fa fa-pinterest"></i></a>
		<a href=""><i class="fa fa-youtube"></i></a>
		<a href=""><i class="fa fa-vimeo"></i></a>
		<a href=""><i class="fa fa-instagram"></i></a>
	</div>

</footer>

<?php wp_footer(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="https://atog-meshdesign.c9users.io//wp-content/themes/wildones/js/smoothdivscroll.js"></script>
<script src="https://atog-meshdesign.c9users.io//wp-content/themes/wildones/js/mousewheel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parrallax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.kinetic.min.js"></script>

</body>
</html>
