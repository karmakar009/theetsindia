<?php 
require_once('../../../../wp-load.php');
?><?php $args = array(
  'p'         => $_POST['id'], // ID of a page, post, or custom type
  'post_type' => 'career_opportunity'
);
$my_posts = new WP_Query($args);
if ( $my_posts->have_posts() ) : 
	while ( $my_posts->have_posts() ) : $my_posts->the_post(); 
		$image = get_the_post_thumbnail_url( $post->ID, 'full' );
		$responsibility = get_field('responsibilities_and_duties', $post->ID);
?>
<div class="row">
    <div class="col-sm-12 mrg10T" id="jobPostModalDesc">
       <img src="<?php echo $image;?>" width="100%" alt="">
            <div class="job-content about_Area_text">
                <h3><?php the_title();?>.</h3>
                    <p></p>
                    <ul>
                    	<?php if( have_rows('requirements', $post->ID) ):
                    		while ( have_rows('requirements', $post->ID) ): the_row(); ?>
                    			<li><?php the_sub_field('details', $post->ID);?></li>
						<?php endwhile; endif;?>
                    </ul>
                    <?php if($responsibility !=""){ ?>
                    	<h4><u>Responsibilities and duties</u></h4>
                    	<p><?php echo $responsibility;?></p>
                    <?php } ?>
                    <p><strong>Experience</strong></p>
                    <p><?php the_field('experience', $post->ID);?></p>
                    <button type="button" class="btn text-uppercase btn-red job_apply">Apply</button>
			</div>
    </div>
</div>
<?php endwhile; endif;?>