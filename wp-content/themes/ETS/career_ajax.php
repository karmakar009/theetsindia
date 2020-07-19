<?php 

require_once('../../../wp-load.php');
?>
<?php $car_query = new WP_Query( array( 'post_type' => 'career_opportunity', 'post_status' => 'publish', 'posts_per_page' => -1 ) );
								$total = count($car_query->posts);
								if ( $car_query->have_posts() ) : 
									while ( $car_query->have_posts() ) : $car_query->the_post(); 
									$image = get_the_post_thumbnail_url( $post->ID, 'full' );

									?>
<ul>
		<?php if( have_rows('requirements', $post->ID) ):
			while ( have_rows('requirements', $post->ID) ): the_row(); ?>
			<li><?php the_sub_field('details', $post->ID);?></li>
		<?php endwhile; endif;?>
</ul>
<?php endwhile; wp_reset_postdata(); endif;?>