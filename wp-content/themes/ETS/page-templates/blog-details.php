<?php /* 
* Template Name: Blog-detail
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
                <div class="col-sm-4 input-group page-header " style="padding-right:10px">
                    <input type="text" id="titleBlog" class="form-control" placeholder="Find Blogs">
                    <input type="hidden" name="post_type" value="post" />
                    <span class="input-group-btn">
                        <button class="btn btn-primary form-control" type="button" onclick="searchBlog()">Search</button>
                    </span>
                    <!-- <script>
                        function searchBlog() {
                            var text = $("#titleBlog").val();

                            window.location.href = '/blog?header=' + text;
                        }
                    </script> -->
                </div>
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
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID )); ?>
                                  <img src="<?php echo $image[0]; ?>" width="100%;" height="200px" alt="achive^6bdd18b6-a6bd-4af9-b660-10d38a1f866b.jpg">
                              </div>
                              <div class="col-sm-6">
                                  <div class="blog-text about_Area_text">
                                  <p class="MsoNormal"><span style="mso-ansi-language: EN-US;"><?php 
                                  
                                  echo $post->post_content; ?>....</span></p></div>

                                  <a href="<?php the_permalink(); ?>" data-id="1375" class="btn btn-orrange mrg10T">Read Mores</a>
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

                            <!-- <a href="javascript:void(0);" data-id="1380" class="recent-post-link" onclick="gotodetail(this,event);"> -->
                                <div class="well well-blog mrg0B">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <img src="https://www.theetsindia.com" width="100%;" alt="">
                                        </div>
                                        <div class="col-xs-7 pad0L">
                                            <div class="recent-post-title">ERP solutions for the garment &amp; textile industry in 2020</div>
                                            <div class="blog-date mrg5B">1/8/2020</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                           <!--  <a href="javascript:void(0);" data-id="1375" class="recent-post-link" onclick="gotodetail(this,event);"> -->
                                <div class="well well-blog mrg0B">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <img src="https://www.theetsindia.com/uploads/achive^6bdd18b6-a6bd-4af9-b660-10d38a1f866b.jpg" width="100%;" alt="achive^6bdd18b6-a6bd-4af9-b660-10d38a1f866b.jpg">
                                        </div>
                                        <div class="col-xs-7 pad0L">
                                            <div class="recent-post-title">Aspects to be kept in mind while developing a trading platform from scratch</div>
                                            <div class="blog-date mrg5B">12/2/2019</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- <a href="javascript:void(0);" data-id="1374" class="recent-post-link" onclick="gotodetail(this,event);"> -->
                                <div class="well well-blog mrg0B">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <img src="https://www.theetsindia.com/uploads/achive^1485aeb4-dc82-4b64-b3c2-9bf74b096ad2.png" width="100%;" alt="achive^1485aeb4-dc82-4b64-b3c2-9bf74b096ad2.png">
                                        </div>
                                        <div class="col-xs-7 pad0L">
                                            <div class="recent-post-title">How to promote online travel business to customers effectively</div>
                                            <div class="blog-date mrg5B">11/29/2018</div>
                                        </div>
                                    </div>
                                </div>
                            </a>





                        <div class="blog-right-heading">Archive</div>
                        <ul class="blog-archive">
<!--                                 <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2019" data-month="12">December 2019 <span>(1)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2017" data-month="12">December 2017 <span>(7)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2016" data-month="12">December 2016 <span>(20)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2018" data-month="11">November 2018 <span>(1)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2017" data-month="11">November 2017 <span>(13)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2016" data-month="11">November 2016 <span>(39)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2018" data-month="10">October 2018 <span>(1)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2017" data-month="10">October 2017 <span>(12)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2016" data-month="10">October 2016 <span>(31)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2018" data-month="9">September 2018 <span>(1)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2017" data-month="9">September 2017 <span>(14)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2016" data-month="9">September 2016 <span>(28)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2018" data-month="8">August 2018 <span>(2)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2017" data-month="8">August 2017 <span>(19)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2016" data-month="8">August 2016 <span>(1)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2018" data-month="7">July 2018 <span>(6)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2017" data-month="7">July 2017 <span>(12)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2016" data-month="7">July 2016 <span>(2)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2018" data-month="6">June 2018 <span>(3)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2017" data-month="6">June 2017 <span>(5)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2018" data-month="5">May 2018 <span>(1)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2017" data-month="5">May 2017 <span>(3)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2018" data-month="4">April 2018 <span>(2)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2017" data-month="4">April 2017 <span>(2)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2018" data-month="3">March 2018 <span>(14)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2017" data-month="3">March 2017 <span>(14)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2018" data-month="2">February 2018 <span>(7)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2017" data-month="2">February 2017 <span>(21)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2020" data-month="1">January 2020 <span>(1)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2018" data-month="1">January 2018 <span>(11)</span></a></li>
                                <li><a href="javascript:void(0);" onclick="ArchiveList(this);" data-year="2017" data-month="1">January 2017 <span>(10)</span></a></li> -->
                        </ul>

<!--                         <script type="text/javascript">

                            function ArchiveList(obj) {
                                delete_cookie("ArchiveBlogYear");
                                delete_cookie("ArchiveBlogMonth");
                                var year = $(obj).attr('data-year');
                                var month = $(obj).attr('data-month');
                                setCookie("ArchiveBlogYear", year, 3);
                                setCookie("ArchiveBlogMonth", month, 3);
                                window.location.href = "/blog?blogpost=" + ($(obj).text().substr(0, $(obj).text().indexOf("("))).replace(" ", "-");
                            }

                        </script> -->

                        <div class="blog-right-heading" style="display:none;">Search By Tags</div>
                        <div class="well well-blog mrg0B search-tag" style="display:none;">
                            <a href="#">3D Printing</a>
                            <a href="#">6 Degrees</a>
                            <a href="#">Ashley Greenway</a>
                            <a href="#">Big Picture Learning</a>
                            <a href="#">Central Academy</a>
                            <a href="#">Central Designz</a>
                            <a href="#">3D Printing</a>
                            <a href="#">6 Degrees</a>
                            <a href="#">Ashley Green</a>
                            <a href="#">Big Picture</a>
                            <a href="#">Central Academy</a>
                            <a href="#">Central Designz</a>
                        </div>
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