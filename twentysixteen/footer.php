<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer>

<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
				<div class="footer_menu clearfix">
					<ul>
						<li><?php wp_nav_menu( array('menu' => 'footerMenu' )); ?></li>
					</ul>
				</div>
			</div>
		</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
						<div class="copyright">
							<p>Copyright &copy;2008-2015 New York Exotic Asians All rights reserved</p>
						</div>
					</div>
				</div>
			<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
				<div class="social_icons">
					<ul>
						<a href="#"><li class="google_plus"></li></a>
						<a href="#"><li class="pintrst"></li></a>
						<a href="#"><li class="twwittr"></li></a>
						<a href="#"><li class="fb_image"></li></a>
							
					</ul>
				</div>
				</div>
				</div>
</div>	
</div>		

</footer>


<!-- footer section end here -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->


	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
<!--Flexslider script here-->
<script>
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlsContainer: $(".custom-controls-container"),
    customDirectionNav: $(".custom-navigation a")
  });
});
</script>
</body>
</html>
