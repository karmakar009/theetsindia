<?php /* 
* Template Name: About-us
*
*/
?>
<?php get_header(); ?>

<div class="container-fluid pad30T pad0B" id="open">
    <div class="container">
        <div class="row">
                <div class="col-sm-6 mrg30B">

                    <div class="page-header">
                        <h2><?php the_title(); ?></h2>

                    </div>
                    <div class="form-group">
                        <div class="about_Area_text">
                              <?php  if ( have_posts() ) :
                                        while ( have_posts() ) : the_post(); ?>
                            <p>
                              <?php the_content(); ?>
                            </p>
                        <?php endwhile; endif; ?>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="<?php the_field('about_video_url'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mrg30B">
                    <div class="page-header">
                        <h2><?php the_field('goals_heading'); ?></h2>
                    </div>
                    <div class="panel-group" id="about-accordion">

                        <?php $z=0; if( have_rows('goals_content') ):
                    while ( have_rows('goals_content') ) : the_row(); ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title about_Area_text"> <a class="<?php if($z != 0) { echo 'collapsed';}?> >" data-toggle="collapse" data-parent="#about-accordion" href="#collapse<?php echo $z; ?>"> <span><?php the_sub_field('goal_content_heading'); ?></span> </a> </h4>
                            </div>
                            <div id="collapse<?php echo $z; ?>" class="panel-collapse collapse <?php if($z == 0) { echo 'in';}?>" aria-expanded="false">
                                <div class="about_Area_text"><?php the_sub_field('goal_content_description'); ?></div>
                            </div>
                        </div>
                        <?php $z++; endwhile; endif;?>
                    </div>
                </div>
            <div class="col-sm-12 mrg30B">
                <div class="page-header">
                    <h2>Associations</h2>
                </div>
                <div class="panel-group" id="about-accordion1">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title about_Area_text"> <a class="collapse" data-toggle="collapse" data-parent="#about-accordion1" href="#collapse11" aria-expanded="true"><span><?php the_field('directors_title'); ?></span> </a> </h4>
                        </div>
                        <div id="collapse11" class="panel-collapse collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <div class="row">
                                    <?php if( have_rows('director_details') ):
                                        while ( have_rows('director_details') ) : the_row();  
                                        $dir_image = get_sub_field('director_image'); ?>
                                            <div class="col-sm-6 mrg20B">
                                                <div class="our_directors_panel">
                                                    <div class="head-line"> <a><?php the_sub_field('director_name'); ?></a> <span><?php the_sub_field('director_designation'); ?></span> </div>
                                                    <div class="row text-Area">
                                                        <div class="col-sm-12">

                                                            <img class="img-thumbnail img-responsive pull-left mrg10R mrg10B" src="<?php echo $dir_image['url']; ?>" alt="Aso^5b77feb8-8339-4f94-bd54-80ef866dc55d.png">
                                                            <p class="about_Area_text_new"><?php the_sub_field('director_description'); ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="social-media">
                                                        <a href="#" class="icon facebook" style=" display:none;"></a> <a href="#" class="icon google" style=" display:none;"></a> <a href="#" class="icon tweeter" style=" display:none;"></a>
                                                        <a href="<?php the_sub_field('page_link');?>"><button type="button" class="btn btn-view pull-right">View Details</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endwhile; endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title about_Area_text"> <a class="collapsed" data-toggle="collapse" data-parent="#about-accordion1" href="#collapse22"> <span><?php the_field('partners_title'); ?></span> </a> </h4>
                        </div>
                        <div id="collapse22" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <?php if( have_rows('partner_details') ):
                                        while ( have_rows('partner_details') ) : the_row();  
                                        $part_image = get_sub_field('partner_image'); ?>
                                            <div class="col-sm-6 mrg20B">
                                                <div class="our_partners_panel">
                                                    <div class="head-line"><a><?php the_sub_field('partner_name'); ?></a></div>
                                                    <div class="row">
                                                        <div class="col-sm-12 text-Area">
                                                            <img class="img-thumbnail img-responsive pull-left mrg10R mrg10B" src="<?php echo $part_image['url']; ?>" alt="Aso^4b4280eb-365c-48f2-b996-7ae617bc6a32.png" style="max-height:154px; max-width:141px;">
                                                            <p class="about_Area_text_new"><?php the_sub_field('partner_description'); ?></p>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <?php endwhile; endif;?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title about_Area_text"> <a class="collapsed" data-toggle="collapse" data-parent="#about-accordion1" href="#collapse44"> <span><?php the_field('management_title'); ?></span> </a> </h4>
                        </div>
                        <div id="collapse44" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="owl-carousel" id="banner-slider2">
                                    <?php if( have_rows('management_details') ):
                                        while ( have_rows('management_details') ) : the_row();  
                                        $management_image = get_sub_field('management_image'); ?>
                                        <div class="item">
                                            <div class="col-sm-12 mrg20B">
                                                <div class="our_directors_panel">
                                                    <div class="head-line"> <a href=""><?php the_sub_field('management_name'); ?></a> <span><?php the_sub_field('management_designation'); ?></span> </div>
                                                    <div class="row about_Area_text_new">
                                                        <div class="col-sm-12">
                                                            <img class="img-thumbnail img-responsive pull-left mrg20R mrg10B" src="<?php echo $management_image['url']; ?>" alt="">
                                                            <p><?php the_sub_field('management_description'); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>

<script type="text/javascript">
    $(document).ready(function() {
 
  $("#banner-slider2").owlCarousel({
    items : 2,
    rewindNav : true,
  });
    $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
 $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');
});

</script>
