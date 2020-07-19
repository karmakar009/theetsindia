<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<div class="container-fluid bg-light-gray pad20B">
		<div class="container animated fadeInUpShort go">
			<div class="row pad40B">
				<div class="col-sm-5 mrg30B">
					<ul class="footer-menu mrg40T">
						
						<li><a href="<?php the_permalink(255);?>">Privacy Policy</a></li>
						<li>|</li>
						<li><a href="<?php the_permalink(268);?>">Disclaimer</a></li>
						<li>|</li>						
                        <li><a target="_blank" href="<?php the_permalink( 654 );?>">Sitemap</a></li>
						<!-- <li>|</li>	 -->					
                        <!-- <li><a target="_blank" href="../home/sitemap">ISO Certification</a></li>
						<li>|</li>						
                        <li><a target="_blank" href="../home/sitemap">GST</a></li> -->
					</ul>
					<div class="logo-container">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/ISO-9001-2015-logo1.png" class="mrg10R" alt="ISO 9001:2015 Certified logo" height="44">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/SAPpartner.jpg" class="mrg10R" alt="SAP Partner" height="44">
						
						
					</div>
					<ul class="footer-menu full">
						<li class="hidden-xs" style="display:none;">Visitors:  <input class="visitors" value="20" type="button"></li>
						
						<li class="hidden-xs" style="padding-bottom:30px">CIN No. - U74900WB2014PTC203052</li>
						<li class="hidden-xs" style="padding-bottom:30px">GST No. - U74900WB2014PTC203052</li>
						
						<li class="hidden-xs">Copyright © 2020 Eclipse Technoconsulting Global (P) Ltd. All rights reserved</li>
					</ul>
				</div>
				<div class="col-sm-4 mrg30B">
					<div class="page-header mrg0B">
						<h2>Reach us at</h2>
						<hr>
					</div>
					<div class="footer-contact">
						<font class="font_16">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/map-pointer.png" class="mrg5R" alt="" width="16" height="16">
							Eclipse Technoconsulting Global (P) Ltd.
						</font>
						<font>Chinar park, Rajarhat, Kolkata</font>
						<font>West Bengal 700157, India</font>
					</div>
					<div class="footer-contact">
						<font>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ind-flag.png" class="mrg5R" alt="" width="16" height="16">
							+91 33 6555 0013 | +91 33 6050 3200 | +91 90 5133 1646
						</font>
						
					</div>					
					<div class="footer-contact">
						<font>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail-icon.png" class="mrg5R" alt="" width="16" height="16">
							<a href="mailto:info@theetsindia.com">Email Us</a>
						</font>
					</div>
					<!--<div class="footer-contact">
						<font>
							<a href="skype:bapita.eclipse?chat">
								<img src="<?php //echo get_template_directory_uri(); ?>/assets/img/skype.png" class="mrg5R" alt="" width="16" height="16"> bapita.eclipse 
							</a>
						</font>
					</div>-->
				</div>
				<div class="col-sm-3 mrg30B">
					<div class="page-header mrg0B">
						<h2>Explore us</h2>
						<hr>
					</div>
					<ul class="explore-list">
						<li>
							<a href="<?php the_permalink( 139 );?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/list-icon.png" class="mrg5R" alt="" width="12" height="12">
								Testimonials
							</a>
						</li>

						<li>

							
							<a href="<?php the_permalink( 445 );?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/list-icon.png" class="mrg5R" alt="" width="12" height="12">
								News and events
							</a>
						</li>
						<li>

							
							<a href="<?php the_permalink( 235 );?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/list-icon.png" class="mrg5R" alt="" width="12" height="12">
								Blogs
							</a>
						</li>
						<li>

							
							<a href="<?php the_permalink(218); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/list-icon.png" class="mrg5R" alt="" width="12" height="12">
								Career
							</a>
							
						</li>
						 <li>

							
							<a target="_blank" href="<?php echo get_template_directory_uri(); ?>/assets/ETS-portfolio.pdf">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/list-download.png" class="mrg5R" alt="" width="12" height="12">
								Download Portfolio
							</a>
							
						</li>
						
					</ul>
					<div class="social-container">
						<a href="https://www.facebook.com/theetsindia" target="_blank" class="icon facebook"></a>
						<!--<a href="https://plus.google.com/+Theetsindia/" target="_blank" class="icon google"></a>-->
						<a href="https://in.linkedin.com/in/eclipse-techno-consulting-global-p-ltd-2b4a7355" target="_blank" class="icon linkedln"></a>
						<a href="https://twitter.com/Eclipsetech12" target="_blank" class="icon tweeter"></a>
                        <a href="https://www.youtube.com/user/theetsindia/videos" target="_blank" class="icon youtube"></a>
					</div>                  
				</div>
			</div>
		</div>

   
	</div>

<!-- Modal -->
<div class="modal fade" id="etsModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" title="Close" data-dismiss="modal">×</button>
                
            </div>
            <div class="modal-body">

                <div class="popimg">
                    <div class="imgTextHolder">
                        <p id="detailsContent"></p>
                    </div>
                    <img src="#" id="detailsimage" alt="">
                </div>

                <div class="popupHolder">
                    <a href="https://www.theetsindia.com/contact-us" id="detailsLink" target="_blank">Discuss your porject</a>
                </div>
            </div>
        </div>

    </div>
</div>
<style>
    .dtl_text {
        color: #008CBA;
    }
</style>
<!--<div class="container">
    <div class="row chat-window " id="chat_window_1" style="margin-left: 10px; margin-bottom: 0px; width: 90%; z-index:99;">
        <div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-8">
            <div class="panel panel-default">
                <div class="panel-heading top-bar" style="cursor: pointer" onclick="">
                    <div class="col-md-8 col-xs-8">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-comment"></span> Chat - ETS <sup>
                                <i class="fa fa-circle" style="color: #16c516;font-size: 11px;margin-top: -4px;" aria-hidden="true"></i>
                            </sup>
                        </h3>
                    </div>
                    <div class="col-md-4 col-xs-4" style="text-align: right;">
                        <a href="javascript:void(0);"><span id="minim_chat_window" class="glyphicon icon_minim panel-collapsed glyphicon-chevron-up" onclick="ChangeState(this);"></span></a>
                        
                    </div>
                </div>
                <div class="panel-body msg_container_base" id="chatarea" style="display: none;">
                    <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="https://www.theetsindia.com/Image/ETS-Global-ISO-Logo-2015-Black.png" class=" img-responsive " alt="" />
                        </div>
                        <div class="col-md-10 col-xs-10">
                            
                                <div class="messages">
                                    <p>Welcome to ETS!!!<br>How may I help you?</p>


                               
                            </div>
                        </div>
                      
                    </div>
                    
                </div>
                <div class="panel-footer" id="chat_footer" style="display:none">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm chat_input " placeholder="Write your message here...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-sm sendmessagetoclient" id="btn-chat">Send</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>-->
<div id="send_ask_quts_mdl" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3 class="modal-title" style="font-size:22px;color:cornflowerblue">Contact Us</h3>
            </div>
            <div class="modal-body pad15A">

                <div class="form-horizontal">

                    <div class="form-group">
                        <label class="control-label col-sm-3">Your Name (required)</label>
                        <div class="col-sm-9">
                            <input type="text" id="Txt_nameIndex" class="form-control" placeholder="Your Name " name="name" required="">
                        </div>
                    </div>               
</div>
</div>
    </div>
	</div></div>
	
<div class="scroll_down_area" style="display: none;">
	<a href="javascript:void(0);" id="arrow">
		<div class="scroll_down">
			<span>
				<i class="fa fa-arrow-up"></i>
			</span>
		</div>
	</a>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/docs.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.js"></script>
<?php wp_footer(); ?>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/ie10-viewport-bug-workaround.js" defer=""></script>
			
<script>
	$(document).ready(function () {
		$('.scroll_down_area').fadeOut(0);
		var offset = $("#banner-slider").height() + 250, // At what pixels show Back to Top Button
		scrollDuration = 300; // Duration of scrolling to top
		$(window).scroll(function () {
			if ($(this).scrollTop() > offset) {
				$('.scroll_down_area').fadeIn(500); // Time(in Milliseconds) of appearing of the Button when scrolling down.
			} else {
				$('.scroll_down_area').fadeOut(500); // Time(in Milliseconds) of disappearing of Button when scrolling up.
			}
		});

		//Smooth animation when scrolling
		$('.scroll_down').click(function (event) {
			event.preventDefault();
			$('html, body').animate({
				scrollTop: 0
			}, scrollDuration);
		});
	});


        $(document).ready(function(){
            $("#showOpenID").on('click',function(){
                //window.scrollTo(0,$("#banner-slider").height());
                $('html, body').animate({
                    scrollTop: $("#childbody").offset().top
                }, 1500);
            });
        });
</script>


</body>
</html>
