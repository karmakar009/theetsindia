<?php /* 
* Template Name: Service Menu
*
*/
 get_header();?>
<!-- <ul class="row"> -->
<!--  <ul class="dropdown-menu mega-dropdown-menu row"> -->
                            <li class="col-sm-3">
                                <ul class="desktop">
                                    <li class="dropdown-header pad0L">Our Services</li>

                                    <div class="owl-carousel owl-theme" id="service-menu-slider">
                                        <div class="item">
                                            <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise-solution.jpg" class="img-responsive" alt="enterprisesolutions">
                                            </a>
                                            <h4><small>Enterprise Solutions</small></h4>

                                        </div>
                                        <!-- End Item -->


                                        <div class="item">
                                            <a href="https://www.theetsindia.com/mobile-application-development"><img src="https://www.theetsindia.com/assets/img/Mobile_app.jpg" class="img-responsive" alt="Mobile-App-Development"></a>
                                            <h4><small>Mobile application development</small></h4>

                                        </div>
                                        <div class="item">
                                            <a href="https://www.theetsindia.com/dedicated-hire"><img src="https://www.theetsindia.com/assets/img/HIRE.jpg" class="img-responsive" alt="Dedicated Hire"></a>
                                            <h4><small>On-site / Off shore business model to work dedicatedly on your project</small></h4>

                                        </div>

                                        <div class="item">
                                            <a href="https://www.theetsindia.com/recruitment-and-staffing"><img src="https://www.theetsindia.com/assets/img/Recruitment-banner.jpg" class="img-responsive" alt="Recruitment"></a>
                                            <h4><small>Shouldering the recruitment burden of your company on us</small></h4>

                                        </div>
                                        <div class="item">
                                            <a href="https://www.theetsindia.com/healthcare-it-solution"><img src="https://www.theetsindia.com/assets/img/healthcare_it_solution.jpg" class="img-responsive" alt="Healthcare_it_solution"></a>
                                            <h4><small>Allow IT automation and boost your health care Service</small></h4>

                                        </div>
                                        <div class="item">
                                            <a href="https://www.theetsindia.com/trading-platform-development"><img src="https://www.theetsindia.com/assets/img/Trading.jpg" class="img-responsive" alt="Trading-platform-development"></a>
                                            <h4><small>Let people use your system to trade</small></h4>

                                        </div>
                                        <!-- End Carousel Inner -->

                                    </div>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"><a href="<?php the_permalink(289);?>">View all Services <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                                    <li class="divider"></li>
                                </ul>
                                <ul>
                                    <style>
                                        .nav li.head-hover a {
                                            color: #0278dc;
                                        }
                                    </style>

                                    <li class="dropdown-header"><a href="/enterprise-solutions" onclick="someFunction(this);">Enterprise Solutions</a></li>

                                    <li data-val="Who needs this solution?">Who needs this solution?</li>
                                    <li data-val="Custom solution development">Custom solution development</li>
                                    <li data-val="SAP/Oracle implementations">SAP/Oracle implementations</li>
                                    <li data-val="Project life cycle we do follow">Project life cycle we do follow</li>
                                </ul>
                            </li>
                            <!--<li><a href="#">Enterprise Solutions</a></li>-->

                            <li class="col-sm-3">
                                <ul>
                                    <li class="divider"></li>

                                    <li class="dropdown-header"><a href="<?php the_permalink(116); ?>" >Progressive Web App Development</a></li>
                                    <li data-val="Search Engine Optimization">Search Engine Optimization</li>
                                    <li data-val="Social Media Optimization">Social Media Optimization</li>
                                    <li data-val="pay per click advertisement">Pay Per Click Advertisement</li>
                                    <li data-val="Email Marketing">Email Marketing</li>
                                    <li data-val="Brand Promotion">Brand Promotion</li>
                                    <li data-val="Online Reputation Management">Online Reputation Management</li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"><a href="<?php the_permalink(118); ?>">Software Maintenance</a></li>
                                    <li data-val="Annual Maintenance Contract">Annual Maintenance Contract</li>
                                    <li data-val="Existing system study and Gap analysis">Existing system study and Gap analysis</li>
                                    <li data-val="Technical support">Technical support</li>
                                    <li data-val="Upgrade support">Upgrade support</li>
                                    <li class="divider"></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"><a href="/dedicated-hire" onclick="someFunction(this);">Dedicated Hire</a></li>
                                    <li data-val="Dedicated hire for onsite">Dedicated hire for onsite</li>
                                    <li data-val="Dedicated hire for offshore/remote">Dedicated hire for offshore/remote</li>
                                    <li data-val="Technical candidate">Technical candidate</li>
                                    <li data-val="Management candidate">Management candidate</li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"><a href="/recruitment-and-staffing" onclick="someFunction(this);">Recruitment and Staffing</a></li>
                                    <li data-val="Recruitment & Staffing for onsite">Recruitment & Staffing for onsite</li>
                                    <li data-val="Technical candidate">Technical candidate</li>
                                    <li data-val="Management candidate">Management candidate</li>
                                    <li data-val="Recruitment Process">Recruitment Process</li>
                                    <li class="divider"></li>



                                    <li class="drop-head-small"><a href="/free-existing-systemstudy" onclick="someFunction(this);">Free existing system study on call</a></li>
                                    <li class="drop-head-small"><a href="/management-trainings" onclick="someFunction(this);">Management trainings</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"><a href="/webapplication-development" onclick="someFunction(this);">Web application development</a></li>
                                    <li data-val="Website design and development">Website design and development</li>
                                    <li data-val="Online software application development">Online software application development</li>
                                    <li data-val="e-Commerce Solutions">e-Commerce Solutions</li>
                                    <li data-val="e-Governance Solutions">e-Governance Solutions</li>
                                    <li data-val="Online management software development">Online management software development</li>
                                    <li data-val="Online ERP (Enterprise Resource Planning) development">Online ERP (Enterprise Resource Planning) development</li>
                                    <li class="divider"></li>
                                    <li class="drop-head-small"><a href="/web-design-services" onclick="someFunction(this);">Web design services</a></li>
                                    <li class="drop-head-small"><a href="/web-development-services" onclick="someFunction(this);">Web developmentservices</a></li>

                                    <li class="drop-head-small"><a href="/desktop-application-development" onclick="someFunction(this);">Desktop application development</a></li>
                                    <li class="drop-head-small"><a href="/mobile-application-development" onclick="someFunction(this);">Mobile application development</a></li>



                                    <li class="drop-head-small"><a href="/trading-platform-development" onclick="someFunction(this);">Trading Platform Development</a></li>
                                    <li class="drop-head-small"><a href="/healthcare-it-solution" onclick="someFunction(this);">Healthcare IT Solution</a></li>

                                    <li class="drop-head-small"><a href="/blockchain-development" onclick="someFunction(this);">Blockchain Development</a></li>
                                    <li class="drop-head-small"><a href="/outsourcing-partner" onclick="someFunction(this);">Outsourcing Partner</a></li>

                                    <li class="drop-head-small"><a href="<?php the_permalink(373); ?>">Other Services</a></li>

                                    <li class="divider"></li>
                                </ul>
                            </li>

                        <!-- </ul> -->
<?php get_footer();?>
