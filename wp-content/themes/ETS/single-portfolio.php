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
get_header('service');
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
<div class="pad40T">&nbsp;</div>
<div class="container-fluid">
    <input type="hidden" id="hdnPortfolioID" value="1">
    <div class="container">
        <div class="row " style="margin-top:70px;margin-bottom:4px">

            <div class="col-sm-1" style="margin-bottom:4px">

                
                <a href="<?php echo site_url();?>" class="btn btn-info" role="button"><i class="fa fa-home"></i>Home</a>
            </div>
            <div class="col-sm-3">
                <a class="btn btn-info" href="<?php the_permalink(16); ?>" id="GoTo">Back to Portfolio page</a>
            </div>
        </div>
        <div class="row" id="newDiv">
            <?php $x = 'a'; $i = 1; if( have_rows('details_portfolio') ):
                    while ( have_rows('details_portfolio') ) : the_row();
                    $client = get_sub_field('pclient');
                    $technology = get_sub_field('ptechnology');
                    $tech_for = get_sub_field('technology_type_of');
                    $banner_iamge= get_sub_field('porportfolio_image');
                    $t = str_pad($i,2,"0",STR_PAD_LEFT);
                    if($i%2 == 0){?>
                        <div class="row pad40T pad40B">          
                            <div class="col-sm-6 row-odd mrg30B">
                                <div class="well well-portfolio">
                                    <ul class="list-portfolio">
                                       <?php if (!empty($client)){ ?>
                                            <li>
                                                <span>Client</span>
                                                <span><?php echo $client;?></span>
                                            </li>
                                        <?php } if (!empty($technology)){ ?>
                                        <li>
                                            <span>technology</span>
                                            <span><?php echo $technology;?></span>
                                        </li>
                                        <?php } if (!empty($tech_for)){ ?>
                                            <li>
                                            <span>type</span>
                                            <span><?php echo $tech_for;?></span>
                                            </li>
                                        <?php } ?>
                                        <li>
                                            <a href="javascript:void(0);" class="btn btn-block btn-arrow bg-<?php echo $x;?><?php echo $x;?> send_message">Request a FREE Quote</a>
                                        </li>
                                    </ul>
                                    <svg class="svg-icon-arrow arrow-even fill-<?php echo $x;?><?php echo $x;?>">
                                        <path class="icon" d="M1265.01,1114.14s-64.81-84.43-128.9-8.43l-8.1-5.46,5.19,24.75,21.13-7-6.61-5.05S1198.31,1043.39,1265.01,1114.14Z" transform="translate(-1128 -1074)"></path>
                                    </svg>
                                </div>
                                <div class="title-portfolio bg-<?php echo $x;?><?php echo $x;?>">
                                    <span>intro</span>
                                </div>
                                <div class="portfolio-desc">
                                    <?php the_sub_field('porportfolio_description');?>
                                </div>
                            </div>
                            <div class="col-sm-6 row-even mrg30B" align="right">
                                <div class="section-portfolio-title" data-text="<?php echo $t;?>">
                                    <span><?php the_sub_field('portfolio_details_title');?></span>
                                </div>
                                <div class="section-portfolio-image">
                                    <div class="header">
                                        <div class="dot"></div>
                                        <div class="body"></div>
                                        <div class="menu"></div>
                                    </div>
                                    <div class="body">
                                        <img src="<?php echo $banner_iamge['url'];?>" width="100%" alt=""/>                 
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }else { ?>
            <div class="row pad40T pad40B">
                <div class="col-sm-6 row-odd mrg30B">
                    <div class="section-portfolio-title" data-text="<?php echo $t;?>">
                        <span><?php the_sub_field('portfolio_details_title');?></span>
                    </div>
                    <div class="section-portfolio-image">
                        <div class="header">
                            <div class="dot"></div>
                            <div class="body"></div>
                            <div class="menu"></div>
                        </div>
                        <div class="body">
                            <img src="<?php echo $banner_iamge['url'];?>" width="100%" alt=""/>                 
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 row-even mrg30B" align="left">
                    <div class="well well-portfolio">
                        <ul class="list-portfolio">
                            <?php if (!empty($client)){ ?>
                                <li>
                                    <span>Client</span>
                                    <span><?php echo $client;?></span>
                                </li>
                            <?php } if (!empty($technology)){ ?>
                            <li>
                                <span>technology</span>
                                <span><?php echo $technology;?></span>
                            </li>
                            <?php } if (!empty($tech_for)){ ?>
                                <li>
                                <span>type</span>
                                <span><?php echo $tech_for;?></span>
                                </li>
                            <?php } ?>
                            <li>
                                <a href="javascript:void(0);" class="btn btn-block btn-arrow bg-<?php echo $x;?><?php echo $x;?> send_message">Request a FREE Quote</a>
                            </li>
                        </ul>
                        <svg class="svg-icon-arrow arrow-odd fill-<?php echo $x;?><?php echo $x;?>">
                            <path class="icon" d="M1265.01,1114.14s-64.81-84.43-128.9-8.43l-8.1-5.46,5.19,24.75,21.13-7-6.61-5.05S1198.31,1043.39,1265.01,1114.14Z" transform="translate(-1128 -1074)"></path>
                        </svg>
                    </div>
                    <div class="title-portfolio bg-<?php echo $x;?><?php echo $x;?>">
                        <span>intro</span>
                    </div>
                    <div class="portfolio-desc">
                        <?php the_sub_field('porportfolio_description');?>
                    </div>
                </div>
            </div>
            <?php } $i++; $x++; endwhile; endif;?>
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
<?php
endwhile; endif;
get_footer();

?>

<script>
$(document).ready(function(){
        $('.send_message').click(function(){
            $('#send_ask_quts_mdl').modal('toggle');
        });
    });
</script>