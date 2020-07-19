<?php /* 
* Template Name: Other-services
*
*/
 get_header('service');?>
 <div class="pad40T">&nbsp;</div>
 <div class="container-fluid pad30T pad0B" id="open">
        <div class="container">
		
            <div class="row">

                <div class="col-sm-12 mrg30B">
                    <div class="page-header">
                        <h2>Other Services</h2>
                    </div>
					<?php if( have_rows('other_service_page', 373) ): $i = 1;
					while ( have_rows('other_service_page', 373) ) : the_row();  
					$banner_image = get_sub_field('oservice_image', 373); 
					if($i == 1){?>
                    <div class="col-sm-4"><img class="img-responsive pull-left mrg10R mrg10B" src="<?php echo $banner_image['url'];?>" alt="" width="372" height="281"></div>
                    <div class="col-sm-8">
                        <div class="header-container" style="font-size:22px"><b><?php the_sub_field('oservice_title');?></b></div>
                    <div class="about_Area_text_new">
                        <?php the_sub_field('other_service_description');?>
                    </div>
                    </div>
					<?php } $i++; endwhile; endif;?>
            </div>
        </div><hr>
		
            <div class="row">

                <div class="col-sm-12 mrg30B">
                    <?php if( have_rows('other_service_page', 373) ): $i = 1;
					while ( have_rows('other_service_page', 373) ) : the_row();  
					$banner_image = get_sub_field('oservice_image', 373); 
					if($i != 1){?>
                    <div class="col-sm-4"><img class="img-responsive pull-left mrg10R mrg10B" src="<?php echo $banner_image['url'];?>" alt="" width="372" height="281"></div>
                    <div class="col-sm-8">
                        <div class="header-container" style="font-size:22px"><b><?php the_sub_field('oservice_title');?></b></div>
                    <div class="about_Area_text_new">
                        <?php the_sub_field('other_service_description');?>
                    </div>
                    </div>
					<?php } $i++; endwhile; endif;?>
                    </div>
                </div>
            </div><hr>
    </div>
 <?php get_footer();?>