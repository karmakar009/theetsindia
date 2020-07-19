<?php /* 

* Template Name: career Page Template

*

*/
?>

<?php get_header(); ?>



    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/theme.css">

<div class="container-fluid pad30T pad0B" id="open">

	<div class="container">

        <div class="row">

            <div class="col-sm-12 mrg30B">

                <div class="career_panel_area">

                    <div class="row">

                        <div class="col-sm-8 mrg30B">

                            <div class="page-header">

                                <h2>Recent Jobs</h2>

                            </div>

                            <table class="table table-striped about_Area_text" width="100%">

                                <thead>

                                    <tr>

                                        <th>Post</th>

                                        <th>Experience</th>

                                        <th>Details</th>

                                        <th>Salary</th>

                                        <th>Status</th>

                                    </tr>

                                </thead>

                                <tbody>

									 <?php $query = new WP_Query( array( 'post_type' => 'career_opportunity', 'posts_per_page' => -1 ) );

										if ( $query->have_posts() ) : 

											while ( $query->have_posts() ) : $query->the_post(); 

											$image = get_the_post_thumbnail_url( $post->ID, 'full' );

											?> 

                                    <tr>

                                        <td>

                                            <span class="jobpos"><?php echo $post->post_title;?></span><br />

                                            <span><?php echo the_field('job_type', $post->ID);?></span>

                                        </td>

                                         

                                        <td><p> <?php echo the_field('experience', $post->ID);?></p></td>

                                        <td><i data-id="<?php echo $post->ID; ?>" data-title="<?php echo $post->post_title;?>" data-job="<?php echo the_field('job_type', $post->ID);?>" data-experience="<?php echo the_field('experience', $post->ID);?>" data-requirement="" data-rd="<?php echo the_field('responsibilities_and_duties', $post->ID);?>" data-image="<?php echo $image; ?>" class="fa fa-info-circle fa-lg view" aria-hidden="true" style="cursor:pointer;margin-left:10px;color:#0694F6;"></i></td>
                                        <td>Negotiable</td>

                                        <td><button type="button" class="btn text-uppercase btn-red job_apply" data-title="Apply For <?php echo $post->post_title;?> ">apply</button> <br>

											<span>13 Days ago</span>

                                        </td>

                                    </tr>

                                   

									<?php endwhile; wp_reset_postdata();  endif; wp_reset_query();?>

                                </tbody>

                            </table>

                        </div>

                        <div class="col-sm-4 pad30B">

                            <div class="page-header">

                                <h2>Job Spotlight</h2>

                            </div>

                            <div class="owl-nav-top">

                                <div class="owl-next video-slider-next" style=""></div>

                                <div class="owl-prev video-slider-prev" style=""></div>

                            </div>

                            <div class="owl-carousel" id="video-slider1">

								<?php $car_query = new WP_Query( array( 'post_type' => 'career_opportunity', 'post_status' => 'publish', 'posts_per_page' => -1 ) );

								$total = count($car_query->posts);

								if ( $car_query->have_posts() ) : 

									while ( $car_query->have_posts() ) : $car_query->the_post(); 

									$image = get_the_post_thumbnail_url( $post->ID, 'full' );

									?><div class="item">

												<img src="<?php echo $image;?>" width="100%" alt=""/>

												<div class="job-content about_Area_text">

													<h3><?php echo $post->post_title;?></h3>

													<ul>

														<?php if( have_rows('requirements', $post->ID) ):

															while ( have_rows('requirements', $post->ID) ): the_row(); ?>

															<li><?php the_sub_field('details', $post->ID);?></li>

														<?php endwhile; endif;?>

													</ul>

													<p><strong>Experience</strong></p>

													<p><?php the_field('experience');?></p>

													<button type="button" class="btn text-uppercase btn-red job_apply">apply</button>

												</div>

											</div>

								<?php endwhile; wp_reset_postdata(); endif;?>

							</div>

                        </div>



                        <div class="col-sm-8 contact_form mrg30B">

                            <div class="page-header mrg0T">

                                <h2>No relevant opening? </font></font></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Let us know about you</h2>

                            </div>

                           

                            <?php echo do_shortcode('[contact-form-7 id="232" title="Job Application Form"]');?>

                        </div>

                        <div class="col-sm-4 job_status_panel mrg30B">

                            <div class="page-header mrg0T">

                                <h2>Job Status</h2>

                            </div>

                            <div class="col-sm-12 no_area pad0A">

                                <div class="row">

                                    <div class="col-sm-4"><div class="no"><?php echo ($total>0)? $total : 'No';?></div></div>

                                    <div class="col-sm-8"><div class="text">Job Posted</div></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



            </div>





        </div>

    </div>

</div>



<?php get_footer();?>



<!-- View Detail -->
<div class="modal" id="exampleModal123" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Apply</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="233" title="Job Application form popup"]');?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  
<script>

    $(document).ready(function () {

		$(document).on('click','.job_apply',function(){
            var title= $(this).attr('data-title');
            $('#exampleModal123').find('.modal-title').html(title);
            $('#exampleModal12').modal('hide');
			$('#exampleModal123').modal('toggle');

		});

        var vs = $('#video-slider1');

        vs.owlCarousel({

            autoplay: false,

            loop: true,

            nav: true,

            dots: false,

            items: 1,

            navText: ['', ''],

        });

        $(".video-slider-prev").click(function () {

            "use strict";

            vs.trigger('prev.owl.carousel');

        });

        $(".video-slider-next").click(function () {

            "use strict";

            vs.trigger('next.owl.carousel');

        });

        $('.view').click(function(){
            var id= $(this).data('id');
                  $.ajax({    //create an ajax request to display.php
                    type: "POST",
                    url: '<?php echo get_template_directory_uri();?>/ajax/career_details.php',
                    data: {'id': id},  
                    //dataType: "html",   //expect html to be returned                
                    success: function(response){                    
                        $('.job_description').html(response);
                        $('#exampleModal123').modal('hide');
                        $('#exampleModal12').appendTo("body").modal('toggle');
                    },
                    error: function(errorThrown){
                    console.log(errorThrown); // error
                    }

                 });

    });

    });	



    



</script>
<div class="modal" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pos Keywords</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body job_description">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>