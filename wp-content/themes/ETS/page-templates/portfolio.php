<?php /* 
* Template Name: Portfolio
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
        <div class="page-header">
            <h2>Portfolio</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 pad20B button-group filters-button-group">
<button class="btn pad20L pad20R  button is-checked" data-filter=".service" id="btnService">Service</button>
        <button class="btn pad20L pad20R  button" data-filter=".product" id="btnProduct">Product</button>
        
    </div>
</div>
<div class="row allImgHol" id="portfolio_details_data" style="display:none"></div>

<div class="row allImgHol grid" id="products_details">
	<?php $query = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => -1 ) );
		if ( $query->have_posts() ) : 
			while ( $query->have_posts() ) : $query->the_post(); 
			$image = get_field('portfolio_thumbnail_image'); 
			$terms = get_the_terms( $post->ID, 'portfolio_categories' );
			$total = count($terms);
			$new_trems= array();
			?> 
	<div class="col-sm-4 pad10A element_items <?php for($i=0; $i<$total; $i++){
				echo $terms[$i]->slug." ";
			}?>">
	 	<div class="imgHolder" style="border: 1px solid #DAD9D8; box-shadow: 4px 6px 18px #888888; border-radius: 6px">
	 		<img src="<?php echo $image['url']; ?>" alt="" height="280px" style="width:100%">
	 		<div class="headertext pad15A" style="text-align:center;line-height: 1.3em;height:auto;overflow: hidden;padding-top:5px;padding-buttom:5px;font-weight:inherit;color: inherit;text-decoration: none">
	 			<div>
	 				<div style="float:left;width:100%"><p><?php the_title(); ?></p>
	 					<div class="col-sm-6">
	 				 		<button type="button" class="btn btn-info send_msg"> Ask for Quote</button>
	 					</div>
		 				<div class="col-sm-6">
		 					<div style="padding-top:10px">
		 						<a href="<?php the_permalink();?>">details... </a>
		 					</div>
		 				</div>
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	</div> 
<?php endwhile; wp_reset_postdata(); 

 else : 

 endif; ?>

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
<?php get_footer(); ?>
<script src='https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js'></script>
<script>
// external js: isotope.pkgd.js
	$(document).ready(function(){
		$('.send_msg').click(function(){
			$('#send_ask_quts_mdl').modal('toggle');
		});
	});
// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element_items',
  filter: '.service',
  layoutMode: 'fitRows'
});
// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function() {
    var name = $(this).find('.name').text();
    return name.match( /ium$/ );
  }
};
// bind filter button click
$('.filters-button-group').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});
// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});</script>