<?php /* 
* Template Name: Services-details
*
*/
?>
<?php get_header(); ?>
<!--Service Details Section-->
<div class="container-fluid service-details">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mrg30B">
				<div class="page-header">
				  <h2>Services Details</h2>
				</div>
				<div class="row">
					<div class="col-sm-4 col-sm-push-8 mrg30B">
						<div class="well">
							<div class="form-group form-group-sm">
								<label>Your Name (required) </label>
								<input type="text" id="Txt_name" class="form-control" placeholder="Your Name " name="name" required="">
							</div>
							<div class="form-group form-group-sm">
								<label>Your Email (required)</label>
								<input type="email" class="form-control" id="Txt_email" placeholder="Email Address*" name="Your Email" required="">	
							</div>
							<div class="form-group form-group-sm">
								<label>Your Phone (required)</label>
								<input type="text" class="form-control" id="Txt_phone" placeholder="Phone number*" name="Your Phone" required="">
							</div>
							<div class="form-group form-group-sm">
								<label>Your Message</label>
								<textarea class="form-control no-resize" id="Txt_msg" rows="4" placeholder="Write Your Message*" name="message" required=""></textarea>
							</div>

							<div class="form-group form-group-sm">
								<label style="font-size: 14px;">
								<input type="checkbox" id="request_callback"> &nbsp;Request For Call back</label>
							</div>

							<div class="form-group form-group-sm">
								<button type="Send Message" onclick="customerquary('1',this);" class="btn btn-red text-uppercase mrg15R" name="enq">Send Message</button>
								<button type="Send Message" style="display:none;" class="btn btn-red text-uppercase" onclick="customerquary('2',this)" name="enq">request for call back</button>
							</div>
						</div>
					</div>
					<div class="col-sm-8 col-sm-pull-4 mrg30B">
						<ul>
							<li>
								<h4 class="openacc">Annual Maintenance Contract</h4>
								<p>Acquiring any particular software for better management of your business or getting it created just for your use is indeed a wise decision, but that is not the only point for being smart. To ensure error free and smooth running of the software, hence the business we offer annual maintenance contract and by opting for it, you can enjoy more benefit. Please contact us today to know more about the service which we offer for both existing and newly installed systems.</p>
								<p>Before buying different software or buying one for the first time, it is crucial to be aware of the faults in the existing system. We can help you to find the problems under this service where a team of two professionals will be sent to study your system. After the study, they will provide a report highlighting the problem your business have which in turn will help in making the decision. So, come to us and choose our service. We will be happy to help.</p>
								<p>A system managing your business can face glitches and hiccups at any given point of time and instead of losing hope, it is always better to be prepared. We offer all around technical support which will not only eradicate your worries, but will boost your business further as well. If you are experiencing some problems or just want to be sure about the quality of your system, please contact us and we will ensure everything runs smoothly.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ipsam, rerum voluptate veritatis possimus quibusdam ab quod velit iure sequi quis sunt repellat molestiae vero quia facilis sit! Suscipit, consequatur.</p>
								<p>Aut tempora veritatis, at quos quae! Quod quis, molestias quisquam quo minima totam explicabo tempore quae, illum inventore ut perspiciatis aspernatur iusto esse quia sunt praesentium. Sed, temporibus voluptas neque.</p>
								<p>Numquam quis ullam neque minima accusantium, ex ratione totam vel maxime nobis voluptatum, cupiditate harum facere omnis saepe quidem! Possimus veritatis at quasi quaerat, sed quisquam iste aperiam fugit ut.</p>
							</li>
						</ul>
					</div>					
				</div>
				<div class="row">
					<div class="col-sm-4 mrg30B">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/enterprise-solution.jpg" class="img-thumbnail" width="100%" alt=""/>
					</div>
					<div class="col-sm-8 mrg30B">
						<ul>
							<li>
								<h4 class="openacc">Annual Maintenance Contract</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ipsam, rerum voluptate veritatis possimus quibusdam ab quod velit iure sequi quis sunt repellat molestiae vero quia facilis sit! Suscipit, consequatur.</p>
								<p>Aut tempora veritatis, at quos quae! Quod quis, molestias quisquam quo minima totam explicabo tempore quae, illum inventore ut perspiciatis aspernatur iusto esse quia sunt praesentium. Sed, temporibus voluptas neque.</p>
								<p>Numquam quis ullam neque minima accusantium, ex ratione totam vel maxime nobis voluptatum, cupiditate harum facere omnis saepe quidem! Possimus veritatis at quasi quaerat, sed quisquam iste aperiam fugit ut.</p>
							</li>
						</ul>
					</div>					
				</div>
				<div class="row">
					<div class="col-sm-4 col-sm-push-8 mrg30B">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/enterprise-solution.jpg" class="img-thumbnail" width="100%" alt=""/>
					</div>
					<div class="col-sm-8 col-sm-pull-4 mrg30B">
						<ul>
							<li>
								<h4 class="openacc">Annual Maintenance Contract</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ipsam, rerum voluptate veritatis possimus quibusdam ab quod velit iure sequi quis sunt repellat molestiae vero quia facilis sit! Suscipit, consequatur.</p>
								<p>Aut tempora veritatis, at quos quae! Quod quis, molestias quisquam quo minima totam explicabo tempore quae, illum inventore ut perspiciatis aspernatur iusto esse quia sunt praesentium. Sed, temporibus voluptas neque.</p>
								<p>Numquam quis ullam neque minima accusantium, ex ratione totam vel maxime nobis voluptatum, cupiditate harum facere omnis saepe quidem! Possimus veritatis at quasi quaerat, sed quisquam iste aperiam fugit ut.</p>
							</li>
						</ul>
					</div>					
				</div>
			</div>			
		</div>
	</div>
</div>
<?php get_footer(); ?>