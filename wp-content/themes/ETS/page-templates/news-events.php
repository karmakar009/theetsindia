<?php /* 
* Template Name: News & Events
*
*/
?>
<?php get_header('service'); 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();?>
      <div class="pad40T">&nbsp;</div>
<div class="container-fluid pad30T pad0B" id="open">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mrg30B">
                <div class="page-header">
                    <h2><?php the_title();?></h2>
                </div>
                <div class="testimonials_text_area">
                  <?php if( have_rows('news_posts', 445) ):
                        while ( have_rows('news_posts', 445) ) : the_row(); 
                           $newss_image = get_sub_field('news_image', 445);  ?>
                    <div class="row">
                      <div class="col-sm-4 mrg30B">
                        <img src="<?php echo $newss_image['url'];?>" style="width:300px;height:216px;">
                      </div>
                      <div class="col-sm-8">
                        <div class="heading"><?php the_sub_field('news_title', 445);?></div>
                        <div class="about_Area_text">
                          <?php the_sub_field('news_description', 445);?>
                        </div>

                        <div class="text-date"><?php the_sub_field('news_date', 445);?></div>
                      </div>
                    </div>
                    <hr>
                  <?php endwhile; endif;?>
                </div>

            </div>


        </div>
    </div>
</div>
<?php endwhile; endif; get_footer();?>