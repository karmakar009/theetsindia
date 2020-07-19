<?php /* 
* Template Name: Disclaimer
*
*/
?>
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="page-header">
        <h2><?php the_field('privacy_title'); ?></h2>
        <hr>
      </div>
    </div>
    <div class="col-sm-12">
      <p class="about_Area_text"><?php the_field('privacy_content'); ?></p>
    </div>
  </div>
</div>


<?php get_footer(); ?>

