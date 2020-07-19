
<?php get_header(); ?>
<style>
.bg-contact .well input {
     border: 1px #ccc solid!important;
}
.form-control {
	border: 1px #ccc solid!important;
}
</style>
<!-- <link rel="stylesheet" type="text/css" href="<?//php echo get_template_directory_uri();?>/assets/home-slider/css/demo.css" /> -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/home-slider/css/style.css" />
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/home-slider/js/modernizr.custom.28468.js"></script>
<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
<noscript>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/home-slider/css/nojs.css" />
</noscript>
<!-- Banner Start -->

<div id="childbody">  
	<div class="banner-menu parallax parallax-container" style="background-position: 0px 0px;">
		<div class="owl-carousel owl-theme banner-slider" style="padding-top:40">
		<?php if( have_rows('banner_slider', 5) ):
					while ( have_rows('banner_slider', 5) ) : the_row();  
					$banner_image = get_sub_field('banner_image', 5); ?>
					<div class="item">
						<div class="container mrg40T mrg40B">
							<div class="img-warp">
								<img src="<?php echo $banner_image['url']; ?>" width="100%" alt=""/>
							</div>
							<div class="item-top"><?php the_sub_field('banner_heading', 5); ?></div>
							<div class="item-mid"><?php the_sub_field('banner_sub_heading', 5); ?></div>
							<div class="item-btn text-left pad40T">
								<a href="<?php the_sub_field('banner_read_more_link', 5); ?>" class="btn btn-warning">Get a Quote</a>
							</div>
						</div>
					</div>
			<?php endwhile; endif;?>
		</div>
	</div>
</div>
	
			
			<!--<div id="da-slider" class="da-slider">

				<?php /*if( have_rows('banner_slider', 5) ):
					while ( have_rows('banner_slider', 5) ) : the_row();  
					$banner_image = get_sub_field('banner_image', 5); ?>
				<div class="da-slide">
					<div class="container">
					<h3 style="word-break: break-all;word-wrap: break-word;" ><?php the_sub_field('banner_heading', 5); ?></h3>
					
					<p><?php the_sub_field('banner_sub_heading', 5); ?></p>
					<a href="<?php the_sub_field('banner_read_more_link', 5); ?>" class="da-link">Get Quote</a>
					<div class="da-img"><img src="<?php echo $banner_image['url']; ?>" alt="image01" /></div>
					</div>
				</div>
				<?php endwhile; endif;*/?>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
		
			</div>-->



	
<!--What We Do Start-->
<div class="container-fluid bg-home-offer pad30T pad40B">
	<div class="container">
		<div class="row">
			<div class="owl-carousel owl-theme statistics-slider" style="padding-top:40" align="center">
				<?php if( have_rows('featured_heading', 5) ):
					while ( have_rows('featured_heading', 5) ) : the_row();   ?>
				<div class="item"><?php the_sub_field('featured_title', 5); ?></div>
				<!-- <div class="item">Celebrating more than 300+ happy Customers worldwide</div> -->
				<?php endwhile; endif;?>
			</div>
		</div>
	</div>
</div>
	
<!--Header About Start-->
<div class="container-fluid bg-home-about">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 pad40T pad40B">
			
				
				<div id="random_number1" class="carousel slide youtube-carousel" data-ride="carousel" data-interval="false">
					<div class="carousel-inner">
						
						<?php if( have_rows('about_us_video', 5) ):
						$i=1;
						while ( have_rows('about_us_video', 5) ) : the_row();   ?>
						<div class="video-container item <?php if($i == 1){ echo 'active';}?>">
							<div class="youtube-video" data-src="<?php the_sub_field('video_link', 5); ?>"></div>
						</div>
						<?php $i++; endwhile; endif;?>
					</div>
					<div id="control" class="controls" style="display: block;">
						<a class="left carousel-control" href="#random_number1" data-slide="prev">
							<div class="left-button">
								<div class="glyphicon glyphicon-chevron-left"></div>
							</div>
						</a>
						<a class="right carousel-control" href="#random_number1" data-slide="next">
							<div class="right-button">
								<div class="glyphicon glyphicon-chevron-right"></div>
							</div>
						</a>
					</div>
				</div>
				
            </div>
			
			<div class="col-sm-6 ">
                <div class="about-top">
					<h1 style="font-size:16pt"><strong><?php the_field('home_about_heading', 5); ?></strong></h1>
				</div>
				<div style="margin-top:-31px">
					<h2><?php the_field('home_about_sub_heading', 5); ?></h2>
				</div>
                <div class="about-mid text-justify">
					<p class="content-texte"><?php the_field('home_about_content', 5); ?></p>
                </div>
                <div class="pad20T pad30B">
                    <a href="<?php the_permalink( 13 );?>" class="btn btn-info">READ MORE</a>
                </div>
			</div>
		</div>
	</div>
</div>

<!--What We Do Start-->
<div class="container-fluid bg-home-offer">
	<div class="container">
		<div class="row">
			<h2 class="text-center pad40T pad40B">What we do</h2>
		<?php $query = new WP_Query( array( 'post_type' => 'what_we_do', 'posts_per_page' => 6 ) );
		//echo "<pre>";print_r($query);
				if ( $query->have_posts() ) : 
				while ( $query->have_posts() ) : $query->the_post(); 
				$image = get_field('short_image', $post->ID);?>

			<div class="col-sm-4 pad15B">
				<div class="well well-theme red" align="center">
					<div class="img-container">
                        <img src="<?php if(!empty($image)){ echo $image['url'];} else { echo get_template_directory_uri().'/assets/img/offer-01.jpg';}?>" alt="Web Development" width="100%">
					</div>
					<div class="header-container"><?php echo $post->post_title; ?></div>
					<div class="matter-container" align="center">
						<b><?php echo the_field('home_page_short_sub_heading'); ?></b>
					</div>
					<div class="pad20T">
                        <a href="<?php the_permalink(); ?>" class="btn btn-red">MORE</a>
					</div>
				</div>
			</div>
			<?php endwhile; endif;?>

			<div class="col-sm-12 pad40B" align="center">
                <a href="<?php the_permalink(289); ?>" class="btn btn-red mrg20T">View All</a>
			</div>
		</div>
	</div>
</div>

<!--Why Choose US-->
<div class="container-fluid bg-why-choose">
	<div class="container">
		<div class="row">
			<h2 class="text-center pad40T pad40B"><?php the_field('why_choose_us_title', 5); ?></h2>
			<?php if( have_rows('why_choose_us', 5) ):
					while ( have_rows('why_choose_us', 5) ) : the_row(); 
					$why_choose_us_image = get_sub_field('why_choose_us_image', 5);  ?>
			<div class="col-sm-4 pad30B" align="center">
				<div class="img-container">
                    <img src="<?php echo $why_choose_us_image['url']; ?>" class="zoom" width="191px">
                    
				</div>
				<div class="txt-container"><?php the_sub_field('why_choose_us_heading', 5); ?></div>
			</div>
			<?php endwhile; endif;?>
		</div>
	</div>
</div>

<!--Portfolio-->
<div class="container-fluid bg-portfolio pad40B">
	<div class="container">
		<div class="row">
			<h1 class="text-center pad40T pad20B">PORTFOLIO </h1>
            <div class="row allImgHol" id="products_details">
            <?php $query = new WP_Query( array( 'post_type' => 'portfolio','posts_per_page' => 6, 'tax_query' => array(
        array(
            'taxonomy' => 'portfolio_categories',
            'field'    => 'slug',
            'terms'    => 'service',
        ),
    )) );
				if ( $query->have_posts() ) : 
				while ( $query->have_posts() ) : $query->the_post(); 
				$image = get_field('portfolio_thumbnail_image');?>
				<div class="col-sm-4 pad10A">
					<div class="imgHolder">
						<img src="<?php echo $image['url'];?>" alt="" height="280px" width="100%">
						<div class="headertext pad15A">
							<p class="mrg0B"><?php echo $post->post_title;?></p>
						</div>
						<div class="row pad15L pad15R">
							<div class="col-sm-6 mrg15B" align="center">
								<button id="" type="button" class="btn btn-info send_msg"> Ask for Quote</button>
							</div>
							<div class="col-sm-6 mrg15B" align="center">
								<a href="<?php the_permalink($post->ID);?>">details... </a>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; endif;?>
            <div class="col-sm-12 " align="center">
                <a href="<?php the_permalink(16);?>" class="btn btn-red mrg20T">View All</a>
            </div>

		
		
			
		</div>
	</div>
</div>
</div>
	
<!--Testimonial-->
<div class="container-fluid bg-testimonial pad40B">
	<div class="container">
		<div class="row">
		
			<h2 class="text-center pad40T pad40B">What clients speak about us</h2>
			
			<div class="owl-carousel owl-theme testimonial-slider owl-loaded owl-drag">
				<?php $query = new WP_Query( array( 
				'post_type' => 'testimonial',
				'tax_query' => array(
					array(
						'taxonomy' => 'testimonial_categories',
						'field'    => 'slug',
						'terms'    => 'testimonial_feedback',
					),
				), 
				'posts_per_page' => -1
				) );
						if ( $query->have_posts() ) : 
							while ( $query->have_posts() ) : $query->the_post(); 
							$image = get_field('testimonial_image', $post->ID); 
				?> 
						<div class="item">
							<div class="row text-center-switch">
								<div class="col-sm-2 vcenter" align="center">

									<img class="img-circle" src="<?php if(!empty($image)){echo $image['url'];} else { echo get_template_directory_uri().'/assets/img/no-image.png'; }?>" alt="<?php if(!empty($image)){echo $image['filename'];} else { echo 'client_avatar'; }?>" width="80%">
									
								</div>
								<div class="col-sm-9 vcenter">
									<div class="matter"><?php the_field('testimonial_feedback',$post->ID); ?></div>
									<br>
									<div class="img-header"><?php echo $post->post_title;?></div>
									<div class="img-sub-head"><?php the_field('testimonial_country', $post->ID); ?></div>
								</div>
							</div>
						</div>
				<?php endwhile; endif;?>				
			
			</div>
			
            <div class="col-sm-12 pad10T" align="center">
                <a href="<?php the_permalink(139);?>" class="btn btn-red ">View All</a>
            </div>
		
		</div>
	</div>
</div>

<!--Contact-->
<div class="container-fluid bg-contact pad40B">
	<div class="container">
		<div class="row">
		
            <div class="col-sm-6 col-sm-offset-3">
                <div class="well pad40L pad40R" align="center">
                    <div class="header">CONTACT US</div>
                    <div class="sub">Eclipse Technoconsulting Global (P) Ltd. Chinar park,<br>Rajarhat, Kolkata, West Bengal 700157, India</div>
					<?php echo do_shortcode('[contact-form-7 id="194" title="Home page contact form"]');?>
            </div>
			</div>			
		
		</div>
	</div>
</div>
<div id="send_ask_quts_mdl" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3 class="modal-title" style="font-size:22px;color:cornflowerblue">Contact Us</h3>
                </div>
                <div class="modal-body pad15A">
                <?php echo do_shortcode('[contact-form-7 id="163" title="Portfolio Contact US"]');?>
            </div>
            <div class="modal-footer" style="border:none!important"></div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>

		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/home-slider/js/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider({
					autoplay	: true,
					bgincrement	: 450
				});
			
			});
			$(document).ready(function(){
				$('.send_msg').click(function(){
					$('#send_ask_quts_mdl').modal('toggle');
				});
			});
		</script>
<script>

var YT;

function embedScript() {
    var tag = document.createElement('script');
    tag.src = 'https://www.youtube.com/iframe_api';
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
}
embedScript();

function onYouTubeIframeAPIReady() {
    var players = document.getElementsByClassName('video-container');

    if (players.length) {
        for (var i = 0; i < players.length; i++) {
			
            var jsPlayer = players[i];			
			//console.log(jsPlayer);			
			
            var jsVideo = jsPlayer.getElementsByClassName("youtube-video")[0];
			//console.log(jsVideo);	
			
            var videoUrl = jsVideo.dataset.src;
			//console.log(videoUrl);
			
            var player;
            player = new YT.Player(jsVideo, {
                videoId: videoUrl,
                playerVars: {
					'rel': 0,
					'autoplay': 0, 
					'controls': 1,
					'autohide':1,
					'ytp-pause-overlay':0,
					'showinfo':0,
				},
                events: {
                    'onStateChange': onPlayerStateChange
                }
            });
        }
    } else {
        console.log('No videos');
    }
}

function onPlayerStateChange(event) {
	var slider = document.getElementById('control');
    switch (event.data) {
        case YT.PlayerState.PAUSED:
            slider.style.display = "block";
            break;
        case YT.PlayerState.PLAYING:
            slider.style.display = "none";
            break;
    }
}
</script>