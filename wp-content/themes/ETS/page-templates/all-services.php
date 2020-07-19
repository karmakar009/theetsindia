<?php /* 
* Template Name: All-services
*
*/
 get_header('service');?>
 <div class="pad40T">&nbsp;</div>
<div class="container-fluid pad30T pad0B" id="open">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 mrg30B">
                <div class="page-header">
                    <h2>Services</h2>
                </div>
                <div class="row">
					<?php $query = new WP_Query( array( 'post_type' => 'what_we_do', 'posts_per_page' => -1 ) );
						if ( $query->have_posts() ) : 
							while ( $query->have_posts() ) : $query->the_post();
								$short_image= get_field('short_image', $post->ID);?>
									<div class="col-sm-4 mrg60B">
										<div class="service-container">
											<div class="image">
												<img src="<?php if(!empty($short_image)){ echo $short_image['url'];}?>" width="100%" alt="">
											</div>

											<div class="contant bg-ee">
												<div class="contant-row">
													<div class="header"><?php the_title();?></div>
													<div class="mater"><?php the_field('short_description');?></div>
													<div class="button">
														<a href="<?php the_permalink();?>" class="btn btn-sm btn-view">Read More</a>
													</div>
												</div>
											</div>

										</div>
									</div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="col-sm-3 mrg30B">
                <div class="page-header">
                    <h2>Other Services</h2>
                </div>
                <div class="panel-group" id="service-accordion">
				<?php if( have_rows('other_service', 289) ): $i = 1;
					while ( have_rows('other_service', 289) ) : the_row();  
					$banner_image = get_sub_field('other_service'); ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a class="<?php if($i!= 1){ echo 'collapsed';}?>" data-toggle="collapse" data-parent="#service-accordion" href="#collapse<?php echo $i;?>" <?php if($i == 1){?>aria-expanded="true" <?php } else { ?> aria-expanded="false"<?php }?>> <span><?php the_sub_field('otitle');?></span> </a> </h4>
                        </div>
                        <div id="collapse<?php echo $i;?>" class="panel-collapse <?php if($i!= 1){ echo 'collapse';}?>" <?php if($i == 1){?>aria-expanded="true" <?php } else { ?> aria-expanded="false"<?php }?>>
                            <div class="panel-body about_Area_text"><?php the_sub_field('odescription');?> <a href="<?php the_sub_field('read_more_link');?>">Read More...</a></div>
                        </div>
                    </div>
				<?php $i++; endwhile; endif;?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>
