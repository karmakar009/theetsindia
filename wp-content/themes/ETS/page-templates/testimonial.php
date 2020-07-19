<?php /* 
* Template Name: Testimonial
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
 .vedio .heading {
  font-weight: 600 !important;
    color: #f2402f !important;
    font-size: 20px !important;
    vertical-align: inherit !important;
    font-weight: bold !important;
 }

 .vedio .sub-head {
  font-weight: 600 !important;
  color: #0694f7 !important;
  vertical-align: inherit !important;
  font-weight: bold !important;
 }
</style>
<div class="container">
  <div class="row">
    <div class="col-sm-12 mrg30B">
      <div class="page-header">
        <h2>Testimonials</h2>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12 pad20B button-group filters-button-group">
      <button class="btn pad20L pad20R  button video is-checked">Video</button>
      <button class="btn pad20L pad20R  button feedback">Client Feedback</button>
    </div>
  </div>
  <div class="row allImgHol" id="portfolio_details_data" style="display:none"></div>
    <div class="testimonials_text_area">
    <?php $query = new WP_Query( array( 'post_type' => 'testimonial','tax_query' => array(
          array(
            'taxonomy' => 'testimonial_categories',
            'field'    => 'slug',
            'terms'    => 'testimonial_feedback',
          ),
        ), 'posts_per_page' => -1 ) );

    if ( $query->have_posts() ) : 
      while ( $query->have_posts() ) : $query->the_post(); 
        $image = get_field('testimonial_image', $post->ID); 
        $terms = get_the_terms( $post->ID, 'testimonial_categories');
        ?> 
        <div class="row ">
            <div class="col-sm-2 mrg30B"><div class="profile_pic">
              <img class="img-circle" src="<?php if(!empty($image)){echo $image['url'];} else { echo get_template_directory_uri().'/assets/img/no-image.png'; }?>" width="100%" height="100%" alt="test^e31e4e19-4e22-4841-9691-ab6d6f650c17.png">      
            </div>
          </div>
          <div class="col-sm-10">
            <div class="heading"><?php the_title(); ?></div>
            <div class="sub-head"><?php the_field('testimonial_country'); ?></div>
            <p class="about_Area_text" ><?php the_field('testimonial_feedback'); ?></p>
          </div>
        </div>
        <hr>
      <?php endwhile; wp_reset_postdata(); 
    else : 

    endif; ?>

  </div>

  <div class="vedio">
    <?php $query = new WP_Query( array( 'post_type' => 'testimonial','tax_query' => array(
          array(
            'taxonomy' => 'testimonial_categories',
            'field'    => 'slug',
            'terms'    => 'testimonial_video',
          ),
        ), 'posts_per_page' => -1 ) );
    if ( $query->have_posts() ) : 
      while ( $query->have_posts() ) : $query->the_post(); 
        $image = get_field('testimonial_image', $post->ID); 
        ?> 
        <div class="row">
           <div class="col-sm-6">
              <iframe width="560" height="315" src="<?php the_field('testimonial_video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>
          <div class="col-sm-6">
            <div class="heading">Client: <?php the_title(); ?></div>
            <div class="sub-head">Country: <?php the_field('testimonial_country'); ?></div>
          </div>
        </div>
        <hr>
      <?php endwhile; wp_reset_postdata(); 
    else : 

    endif; ?>

  </div>

</div>


<?php get_footer(); ?>

<script>

$(document).ready(function(){
  $(".video").trigger("click");
});

$(document).on('click', '.feedback',function(){
  $('.feedback').addClass('btn-warning');
  $('.feedback').removeClass('btn-primary');

  $('.video').addClass('btn-primary');
  $('.video').removeClass('btn-warning');
  $('.testimonials_text_area').show();
  $('.vedio').hide();
});
$(document).on('click', '.video',function(){
  $('.video').addClass('btn-warning');
  $('.video').removeClass('btn-primary');

  $('.feedback').addClass('btn-primary');
  $('.feedback').removeClass('btn-warning');

  $('.vedio').show();
  $('.testimonials_text_area').hide();
});

</script>