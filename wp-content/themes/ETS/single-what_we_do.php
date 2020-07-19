<?php

/**

 * The template for displaying all single posts

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage Twenty_Seventeen

 * @since 1.0

 * @version 1.0

 */



get_header('whar_we_do'); ?>

<div id="childbody" class="pad40T">

        



<style>

    .displaynone {

        display: none !important;

    }



    .openacc .innerdiv {

        text-decoration: none;

        font-family: 'Open Sans Condensed', sans-serif;

        font-weight: 400;

        color: #616161;

        font-size: 19px;

        line-height: 26px;

        margin-top: 15px;

    }





    .openacc {

        margin-top: 10px;

        font-family: 'Raleway', sans-serif;

        font-weight: 400;

        color: #0694f7;

        font-size: 20px;

    }

</style>









<div class="container-fluid service-details">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 mrg30B">

                <div class="row">

                    <div class="col-sm-4 col-sm-push-8 mrg30B">

						<div class="page-header">

                            <h2>Let’s Discuss Your Project</h2>

                        </div>

                        <div class="well">

                            <?php echo do_shortcode('[contact-form-7 id="336" title="What we do"]');?>

						</div>

                    </div>

                    <?php while ( have_posts() ) : the_post();?>

					<div class="col-sm-8 col-sm-pull-4 mrg30B">

					<div class="page-header">

					<h1 style="font-family: Raleway,sans-serif; font-weight: 400; color: #0694f7; font-size: 20px;"><?php the_title(); ?></h1>

					</div>

					<div class="about_Area_text">

					<p class="MsoNormal" style="text-align: justify;"><?php the_content(); ?></p>

					<?php endwhile; wp_reset_postdata();  ?>



					<?php if( have_rows('wwd_paragraph') ):

					while ( have_rows('wwd_paragraph') ) : the_row(); ?>



					<h3 class="openacc" style="text-align: justify;"><strong><?php the_sub_field('wwd_heading'); ?></strong></h3>

					<p><?php the_sub_field('wwd_description'); ?></p>





					<?php endwhile; endif;?>

					</div>

					</div>

					

			</div>

        </div>

    </div>

</div>











    </div>



<style>

    .new_offer {

        position: fixed;

        bottom: 2%;

        left: 2%;

        z-index: 1000;

    }

</style>









</div>





<?php

get_footer();

?>

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

            $("#service_menu").on('click', function () {



                $(this).parent('ul').find('li').each(function () {



                    $(this).removeClass('active');

                });

            });

        });

		</script>