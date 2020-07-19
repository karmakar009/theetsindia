<?php /* 
* Template Name: Blog
*
*/
?>
<?php get_header(); ?>
<style>
    .is-checked{
       background-color: #eb9316!important;
       border-color: #eb9316!important;
       color:#fff!important;
   }
   .button {
       background-color: #0088e7;
       border-color: #0088e7;
       color:#fff;
   }
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-12 mrg30B">
            <div class="col-sm-4 page-header">
                <h2>Blog</h2>
            </div>

                <?php //get_search_form(); ?>
                <form role="search" method="get" class="search-form" action="<?php echo site_url();?>">
                    <div class="col-sm-4 input-group page-header " style="padding-right:10px">
                    <input type="search" id="search-form-1" class="search-field form-control" placeholder="Find Blogs"  name="s">
                    <input type="hidden" name="post_type" value="post" />
                    <span class="input-group-btn">
                    <button type="submit" class="search-submit btn btn-primary form-control">Search</button>
                    </span>
                  </div>
                </form>

                <div class="row">
                  <div class="col-sm-8">
                      <?php $query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => -1 ) );
                    //echo "<pre>";print_r($query);
                      if ( $query->have_posts() ) : 
                       while ( $query->have_posts() ) : $query->the_post(); 

                        $image = get_field('testimonial_image', $post->ID); 
                        ?>

                        <div class="well well-blog mrg30B">
                          <div class="blog-title"><?php the_title(); ?></div>
                          <div class="blog-date"><?php echo date('d-m-Y',strtotime($post->post_date)); ?></div>
                          <div class="row">
                              <div class="col-sm-6">
                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));if(!empty($image[0])){ ?>
                          <img src="<?php echo $image[0]; ?>" width="100%;" height="200px" alt="<?php the_title(); ?>">
                        <?php } ?>
                            </div>
                            <div class="col-sm-6">
                              <div class="blog-text about_Area_text">
                                  <p class="MsoNormal"><span style="mso-ansi-language: EN-US;"><?php 
                                  $content = strip_tags($post->post_content);
                                  echo substr($content,0,200); ?>....</span></p></div>

                                  <a href="<?php the_permalink(); ?>" data-id="1375" class="btn btn-orrange mrg10T">Read More</a>
                              </div>
                          </div>
                      </div>


                  <?php endwhile; wp_reset_postdata(); 
              else : 

              endif; ?>

          </div>
          <div class="col-sm-4">

            <div class="blog-right-heading">Featured Posts</div>

            <div class="owl-nav-top">
                <div class="owl-next video-slider-next" style=""></div>
                <div class="owl-prev video-slider-prev" style=""></div>
            </div>
            <div class="owl-carousel owl-loaded owl-drag" id="video-slider1">

                <?php
                $args = array(
                    'posts_per_page' => 5,
                    'meta_key' => 'meta-checkbox',
                    'meta_value' => 'yes'
                );
                $featured = new WP_Query($args);
            //echo "<pre>";print_r($featured);
                if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>

                    <div class="item">
                        <figure> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(350,260)); ?></a> </figure>
                        <div class="featured-posts-title"><?php the_title(); ?></div>
                        <div class="blog-date"><?php echo get_the_date('F j, Y'); ?></div>
                    </div>
                    <?php
            //endif;
                endwhile; else:
            endif;
            ?>

        </div>





        <div class="blog-right-heading">Recent Posts</div>

        <?php $the_query = new WP_Query( array('post_type' => 'post','posts_per_page' => 3,'orderby'=>'DESC')); ?>

        <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post();
            $rimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID )); ?>
                <a href="<?php the_permalink(); ?>">
                <div class="well well-blog mrg20B">
                    <div class="row">
                        <div class="col-xs-5">
                        <?php if(!empty($rimage)){?>
                          <img src="<?php echo $rimage[0]; ?>" width="100%;" alt="<?php the_title();?>">
                        <?php } else { ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image-blog.png" width="100%;" alt="<?php the_title();?>">
                        <?php } ?>
                        </div>
                        <div class="col-xs-7 pad0L">
                            <div class="recent-post-title"><?php the_title(); ?></div>
                            <div class="blog-date mrg5B"><?php echo get_the_date('F j, Y'); ?></div>
                        </div>
                    </div>
                </div>
                </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            <?php else : ?>
              <p><?php __('No Recent Posts'); ?></p>
          <?php endif; ?>

          <div class="blog-right-heading">Archive</div>
          <ul class="blog-archive">
            <?php wp_get_archives(array('type'=>'monthly','format'=>'html','post_type'=>'post','show_post_count'   => true)); ?>
        </ul>
    </div>
</div>

</div>


</div>
</div>


<?php get_footer(); ?>

<script>
    $(document).ready(function () {
        var vs = $('#video-slider1');
        vs.owlCarousel({
            autoplay: false,
            loop: true,
            nav: true,
            dots: true,
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



    });
</script>