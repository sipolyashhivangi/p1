<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


		<div class="my_slider">
	<div class="flexslider">
		<ul class="slides">
			<li><?php echo do_shortcode("[smoothness-slider]"); ?></li>
		</ul>
	</div>
	<div class="custom-navigation">
		<div class="custom-controls-container">
		</div>
	</div>
	<div class="slider_content">
		<p>
			A Premier NY <span>A</span>sian<br>
			Escorts Agency
		</p>
	</div>
</div>
<!--Flexslider start here-->
<div class="wlcome_sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
				<div class="centrcontent">
					<h1>Welcome <span>NY Exotic Asians</span></h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et porttitor urna, sit amet gravida mauris. In hac habitasse platea dictumst. Curabitur venenatis nisl sit amet blandit tincidunt. Aenean mollis leo a ipsum finibus, nec porta velit finibus. Pellentesque posuere ante ut tempus maximus. Suspendisse laoreet lectus pulvinar mi pretium tincidunt. Nulla blandit sem a nibh aliquet eleifend. Pellentesque fringilla felis in ante ullamcorper vestibulum sed in nibh. Maecenas nec est dolor. Ut metus magna, lobortis in pulvinar id, viverra vel massa. Praesent nec viverra sapien. Sed fringilla odio vestibulum, rutrum libero non, dignissim nisl.
					</p>
				</div>
				<div class="read_more">
					<a href="#">Read more</a>
				</div>
				<div class="our_escorts">
					<h1>Our <span>NY Escorts</span></h1>
				</div>
				<div class="col-md-3 col-sm-3 col-lg-3 col-xs-12">
					<div class="escorts">
						<a href="#"><img src="images/escort1_img.png" alt=""/></a>
						<div class="hover_name">
							<h2>Kyla</h2>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-lg-3 col-xs-12">
					<div class="escorts">
						<a href="#"><img src="images/escort2_img.png" alt=""/></a>
						<div class="hover_name">
							<h2>Rina</h2>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-lg-3 col-xs-12">
					<div class="escorts">
						<a href="#"><img src="images/escort3_img.png" alt=""/></a>
						<div class="hover_name">
							<h2>Susan</h2>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-lg-3 col-xs-12">
					<div class="escorts">
						<a href="#"><img src="images/escort4_img.png" alt=""/></a>
						<div class="hover_name">
							<h2>Yanisa</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
