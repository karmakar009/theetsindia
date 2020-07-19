<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta name="google-site-verification" content="RJ9OA2mIsSc5ay8EEhu7KozdlFtlmZvKJpN91gnpLhc" />
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-37593310-1', 'auto');
        ga('send', 'pageview');

    </script>


<style>iframe#tidio-chat-iframe {
    z-index: 1 !important;
}</style>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome-home.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/icofont-home.css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet"> 

<!-- Bootstrap core CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-home.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-theme-home.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel-home.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme-home.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme-home.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/ChatBox.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme-new.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-submenu.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">

<?php wp_head(); ?>
	
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/ie-emulation-modes-warning.js"></script>

</head>

<body role="document" id="open">

<!-- Navbar Start -->
<div class="container">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href=".">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ETS R_Logo_ISO2015_White.png" width="141" alt="" />
				</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse navbar-right mrg40T mrg40B">
				<ul class="nav navbar-nav">
					<li id="menu_home"><a href="<?php echo site_url();?>">Home</a></li>


					<li class="dropdown mega-dropdown" id="service_menu">
						<a href="#" data-submenu="" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false"> Services <span class="caret"></span> </a>
						<ul class="dropdown-menu mega-dropdown-menu row">
							<li class="col-sm-3">
								<ul class="desktop">
									<li class="dropdown-header pad0L">Our Services</li>
									<div class="owl-carousel owl-theme" id="service-menu-slider">'
									<?php $query = new WP_Query( array( 'post_type' => 'what_we_do', 'posts_per_page' => 6 ) );
										if ( $query->have_posts() ) : 
										while ( $query->have_posts() ) : $query->the_post();
										$short_image= get_field('short_image', $post->ID);?>
										<div class="item">
											<a href="#">
												<img src="<?php if(!empty($short_image)){ echo $short_image['url'];} else { echo get_template_directory_uri().'/assets/img/enterprise-solution.jpg'; }?>" class="img-responsive" alt="<?php echo the_title();?>">
											</a>
											<h4><small><?php echo the_title();?></small></h4>

										</div>
										<?php endwhile; endif;?>
										<!-- End Item -->

										<!-- End Carousel Inner -->

									</div>
									<li class="divider"></li>
									<li class="dropdown-header"><a href="<?php the_permalink(289);?>">View all Services <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
									<li class="divider"></li>
								</ul>
								<ul>
									<style>
										.nav li.head-hover a {
											color: #0278dc;
										}
									</style>
									<?php if( have_rows('menu_list_1',397) ):
											while ( have_rows('menu_list_1',397) ) : the_row(); ?>
									<li class="dropdown-header"><a href="<?php the_sub_field('menu_link1'); ?>" ><?php the_sub_field('menu_heading1'); ?></a></li>
									<?php if( have_rows('menu_points1',397) ):
											while ( have_rows('menu_points1',397) ) : the_row(); ?>
									<li><?php the_sub_field('m_points1'); ?></li>
									<?php endwhile; endif;?>
									<?php endwhile; endif;?>
								</ul>
							</li>
							<!--<li><a href="#">Enterprise Solutions</a></li>-->

							<li class="col-sm-3">
								<ul>
									<?php if( have_rows('menu_list_2',397) ):
											while ( have_rows('menu_list_2',397) ) : the_row(); ?>
									<li class="divider"></li>
									<li class="dropdown-header"><a href="<?php the_sub_field('menu_link2'); ?>" ><?php the_sub_field('menu_heading2'); ?></a></li>
									<?php if( have_rows('menu_points2',397) ):
											while ( have_rows('menu_points2',397) ) : the_row(); ?>
									<li><?php the_sub_field('m_points2'); ?></li>
									<?php endwhile; endif;?>
									<?php endwhile; endif;?>
								</ul>
							</li>
							<li class="col-sm-3">
								<ul>
									<?php if( have_rows('menu_list_3',397) ):
											while ( have_rows('menu_list_3',397) ) : the_row(); ?>
									<li class="divider"></li>
									<li class="dropdown-header"><a href="<?php the_sub_field('menu_link3'); ?>" ><?php the_sub_field('menu_heading3'); ?></a></li>
									<?php if( have_rows('menu_points3',397) ):
											while ( have_rows('menu_points3',397) ) : the_row(); ?>
									<li><?php the_sub_field('m_points3'); ?></li>
									<?php endwhile; endif;?>
									<?php endwhile; endif;?>

									<li class="divider"></li>
									<?php if( have_rows('menu-3only_heading',397) ):
											while ( have_rows('menu-3only_heading',397) ) : the_row(); ?>
									<li class="drop-head-small"><a href="<?php the_sub_field('only_link3'); ?>"><?php the_sub_field('only_heading3'); ?></a></li>
									
									<?php endwhile; endif;?>
									<li class="divider"></li>
								</ul>
							</li>
							<li class="col-sm-3">
								<ul>
									<?php if( have_rows('menu_list_4',397) ):
											while ( have_rows('menu_list_4',397) ) : the_row(); ?>
									<li class="divider"></li>
									<li class="dropdown-header"><a href="<?php the_sub_field('menu_link4'); ?>" ><?php the_sub_field('menu_heading4'); ?></a></li>
									<?php if( have_rows('menu_points4',397) ):
											while ( have_rows('menu_points4',397) ) : the_row(); ?>
									<li><?php the_sub_field('m_points4'); ?></li>
									<?php endwhile; endif;?>
									<?php endwhile; endif;?>

									<li class="divider"></li>
									<?php if( have_rows('menu-4only_heading',397) ):
											while ( have_rows('menu-4only_heading',397) ) : the_row(); ?>
									<li class="drop-head-small"><a href="<?php the_sub_field('only_link4'); ?>"><?php the_sub_field('only_heading4'); ?></a></li>
									
									<?php endwhile; endif;?>
									<li class="divider"></li>
								</ul>
							</li>

						</ul>
					</li>


					<li id="menu_aboutus">
						<a href="<?php the_permalink(13);?>">About Us</a>

					</li>

					<li id="menu_achivement"><a href="<?php the_permalink(195);?>">Our Achievements</a></li>
					<li id="menu_testimonial"><a href="<?php the_permalink(139); ?>">Testimonials</a></li>
					<li id="menu_portfolio"><a href="<?php the_permalink(16); ?>">Portfolio</a></li>
					<li id="menu_blog"><a href="<?php the_permalink(235); ?>">Blog</a></li>
					<!--<li><a href="testimonials.html">Testimonials</a></li>-->
					<li id="menu_contact"><a href="<?php the_permalink(191);?>">Contact Us</a></li>

				</ul>
			</div>
		</div>
	</nav>
</div>
<div id="childbody"></div>