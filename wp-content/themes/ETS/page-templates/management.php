<?php /* 
* Template Name: Management Template
*
*/
?>
<?php get_header(); ?>
 <?php  if ( have_posts() ) :
          while ( have_posts() ) : the_post();
$part_image = get_field('members_image');		  ?>
<div class="container-fluid pad30T pad0B" id="open">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mrg30B">
                <div class="page-header">
                    <h2>Our Directors &amp; Our Management Bodies</h2>
                </div>
                <div class="row">
                    <div class="col-sm-12 mrg30B">
                        <div class="our_directors_panel">
                            <div class="head-line"> <a href=""><?php the_field('member_name');?></a> <span>- <?php the_field('member_designation');?></span> </div>
                            <div class="row about_Area_text_new">
                                <div class="col-sm-12">
                                    <img class="img-thumbnail img-responsive pull-left mrg20R mrg20B" src="<?php echo $part_image['url'];?>" alt="">
                                    <?php the_field('member_description');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; endif; get_footer();?>