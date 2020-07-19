<?php /* 

* Template Name: Our Achievements Page Template

*

*/

get_header(); 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();?>

<div class="container-fluid pad30T pad0B" id="open">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 mrg30B">

                <div class="page-header">

                    <h2><font style="vertical-align: inherit;"><font class="" style="vertical-align: inherit;">Our Achievements</font></font></h2>

                </div>

                <div class="row">

					<?php $i = 1; if( have_rows('own_achievements') ):

							while ( have_rows('own_achievements') ) : the_row(); 

							$achievements_image = get_sub_field('achievements_image');  ?>

								<div class="col-sm-4 mrg30B">

									<div class="our-achievements_Area">

										<img src="<?php echo $achievements_image['url'];?>" width="100%" alt="achive ^ 75b885e1-5c82-4a40-bc35-0484af7d2276.jpg">

										<div class="text_area">

											<!--<div class="date" style="display:none;">Friday, January 5, 2018 </div>-->

											<div class="head-line"><font style="vertical-align: inherit;"><?php the_sub_field('achievements_title');?></font></div>

										   <?php the_sub_field('achievements_description');?>

										</div>

									</div>

								</div>

								<?php if($i%3 == 0){?>

								<div class="clearfix"></div>

								<?php } ?>

                     <?php $i++; endwhile; endif;?>    

								

                            

                        

                </div>

            </div>

        </div>

    </div>

    <style>

        p{

        

            font-family: 'LatoWeb', 'Lucida Grande', 'Lucida Sans Unicode', Arial, sans-serif;

            font-size: 15px; /* font-family: 'Open Sans Condensed', sans-serif; */

            font-weight: 400;

            color: #616161; /* font-size: 16px; */

            line-height: 26px;

        



        }

    </style>

</div>

<?php endwhile; endif; get_footer();?>