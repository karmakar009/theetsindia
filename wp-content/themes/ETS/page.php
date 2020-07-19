<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header('service'); while ( have_posts() ) : the_post(); ?>
<style>
.about_Area_text, .about_Area_text p {
    font-size: 1.62rem;
    margin: 0 0 20px;
}

.about_Area_text, .about_Area_text p, .about_Area_text_new {
    font-family: LatoWeb,'Lucida Grande','Lucida Sans Unicode',Arial,sans-serif;
    font-weight: 400;
    color: #616161;
    line-height: 26px;
}
</style>
<div class="pad40T">&nbsp;</div>
<div class="container-fluid pad30T pad0B" id="open">
    <div class="container">
        <div class="row">
			<div class="col-sm-12">
				<div class="page-header">
					<h2><?php the_title();?></h2>
					<hr>
				</div>
			</div>
            <div class="col-sm-12">
                <div class="about_Area_text">

			<?php
			/* Start the Loop */
			
				the_content();

			 // End of the loop.
			?>
 </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile;
get_footer();
