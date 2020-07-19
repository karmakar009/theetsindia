<?php /* 
* Template Name: Contact Page Template
*
*/
?>
<?php get_header(); ?>
<style>
	input.wpcf7-form-control.wpcf7-text.wpcf7-countrytext {
		width: 27px;
		height: 48px;
}
</style>
<div class="container-fluid" id="open">
    <div class="container">
        <div class="row" style="padding-top:20px">

            <div class="col-sm-7 mrg40B">
                <div class="page-header">
                    <h2>Contact Details</h2>
                </div>
                <div class="our_directors_panel">

                    <div class="row">

                        <div class="col-sm-5 contact_area">
                            <div class="page-header mrg0B">
                                <h2><img src="<?php echo get_template_directory_uri();?>/assets/img/map-pointer.png" class="mrg5R" width="18" height="18" alt=""> Head Office</h2>
                                <hr>
                            </div>
                                <div class="footer-contact"> Eclipse Technoconsulting Global (P) Ltd. </div>
                                <div class="footer-contact">  <span itemprop="streetAddress">Chinar park, Rajarhat</span><br>                                     <span itemprop="addressLocality">Kolkata ,West Bengal 700157, India</span></div>
                                 <div class="footer-contact">
                                    <span>
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/ind-flag.png" class="mrg5R" alt="" width="16" height="16">
                                        <span> +91 8276050013 </span>
                                    </span>
                                 </div>
                                <div class="footer-contact">
                                    <span>
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/ind-flag.png" class="mrg5R" alt="" width="16" height="16">
                                        <span> +91 8961003200  </span>
                                    </span>
                                 </div>
                                <div class="footer-contact">
                                    <span>
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/ind-flag.png" class="mrg5R" alt="" width="16" height="16">
                                        <span> +91 8274003201 </span>
                                    </span>
                                 </div>
                        </div>
                        <div class="col-sm-7 contact_area">
                                <div class="page-header mrg0B">
                                    <h2><img src="<?php echo get_template_directory_uri();?>/assets/img/detail-ico.png" class="mrg5R" width="16" height="18" alt=""> Office Details</h2>
                                    <hr>
                                </div>
                                <div class="footer-contact"> <font><a href="mailto:info@theetsindia.com"> <img src="<?php echo get_template_directory_uri();?>/assets/img/mail-icon.png" class="mrg5R" width="16" height="16" alt="">Email Us </a></font> </div>
                                <div class="footer-contact"> <a href="https://www.theetsindia.com"><font> <img src="<?php echo get_template_directory_uri();?>/assets/img/web-icon.png" class="mrg5R" width="16" height="16" alt="">  www.theetsindia.com  </font></a> </div>
                                <div class="footer-contact"> <font> <img src="<?php echo get_template_directory_uri();?>/assets/img/clock.png" class="mrg5R" width="16" height="16" alt=""> Monday - Saturday: 10:30 to 19:30 </font> </div>
                            <div class="footer-contact"> <font> 2nd &amp; 4th Saturday, Sunday: Closed</font> </div>
                        </div>
                        <div class="col-sm-12">
                            <div id="googleMap1" style="width:100%;height:315px;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d763.6616459039047!2d88.44179732916675!3d22.6224747369919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89fd2f24f8dd9%3A0xe7fc5d920bd42332!2sEclipse+Technoconsulting+Global+Pvt.+Ltd.!5e1!3m2!1sen!2sin!4v1517987537909" height="315px" frameborder="0" style="width: 100%;border:0;" allowfullscreen=""></iframe>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 contact_form mrg30B about_Area_text">
                <div class="page-header">
                    <h2>Let’s Discuss Your Project</h2>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="193" title="Contact Page Contact US"]');?>
            </div>
        </div>

    </div>
</div>
<?php get_footer();?>