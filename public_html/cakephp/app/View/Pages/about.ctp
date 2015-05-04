<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>About Us | Political Visions</title>

	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
	  <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  1 (800) VOTENOW </p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index"><img src="<?php echo $this->webroot; ?>/app/webroot/img/PVlogo.png" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><!--<a href="index.ctp">Home</a>-->
                        <?php echo $this->Html->link(
    						'Home',
    						'/index',
    						array(
        						'controller' => 'pages',
        						'action' => 'index',
    						)
						);?>
                        </li>
                        <li><!--<a href="discussion.ctp">Discussion</a>-->
                        <?php echo $this->Html->link(
    						'Discussion',
    						'/discussion',
    						array(
        						'controller' => 'pages',
        						'action' => 'discussion',
    						)
						);?>
                        </li>
                        <li><!--<a href="bills.ctp">Bills</a>-->
                         <?php echo $this->Html->link(
    						'Bills',
    						'/bills',
    						array(
        						'controller' => 'pages',
        						'action' => 'bills',
    						)
						);?>
						</li>
                        <li><!--<a href="calendar.ctp">Calendar</a>-->
                         <?php echo $this->Html->link(
    						'Calendar',
    						'/calendar',
    						array(
        						'controller' => 'pages',
        						'action' => 'calendar',
    						)
						);?>
						</li>
                        <!--<li><a href="services.html">Services</a></li>-->
                        <!--<li><a href="portfolio.html">Portfolio</a></li>-->
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                            </ul>
                        </li>-->
                        <li class="dropdown">
                        	<?php echo $this->Html->link(
                        		//$this->Html->tag('i', null, array('class' => 'fa fa-angle-down'));
    							'Contact',
    							'#',
   								array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown')
							);
                        	?>
							<ul class="dropdown-menu">
								<li><!--<a href="contact_us">Contact Us</a>-->
								 <?php echo $this->Html->link(
									'Contact Us',
									'/contact_us',
									array(
										'controller' => 'pages',
										'action' => 'contact_us',
									)
								);?>
								</li>
								<li><!--<a href="contact_politician">Contact Politicain</a>-->
								 <?php echo $this->Html->link(
									'Contact Politician',
									'/contact_politician',
									array(
										'controller' => 'pages',
										'action' => 'contact_politician',
									)
								);?>
								</li>
							</ul>
						</li>
            <li class="active"><!--<a href="about-us.html">About Us</a>-->
             <?php echo $this->Html->link(
                  'About Us',
                  '/about',
                  array(
                      'controller' => 'pages',
                      'action' => 'about',
                  )
              );?>
            </li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->

    <section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<br>
				<h2>About Political Visions</h2>
				<p class="lead">	With only 37% of eligible voters voting and 67% of those voters being over the age of 40 voting has in effect been abandoned by young people. This is concerning for a plethora of reasons most daunting of all being that the opinions and desires of a vast majority of the people occupying America and the provinces, towns, and cities that constitute it. This disconnect is becoming alarmingly apparent in the way that current political events are reported and handled and the public’s general contempt for the actions of the government has taken. Therefore there must be some system built to encourage and enlighten general voters on why their votes are important and what and who they are voting for.
This is the application that TALE intends to create. An application to not only enlighten each community that it is introduced to as to who their politicians are and what they say they represent, but also the past actions of those politicians and how they have voted in the past and what those votes mean as far as their true political desires.</p>
			</div>

			<!-- about us slider -->
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>
				  	</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="<?php echo $this->webroot; ?>/app/webroot/img/slider/VoteAndBeAPartOfHistory.jpg" class="img-responsive" alt="">
					   </div>
					   <div class="item">
							<img src="images/slider_one.jpg" class="img-responsive" alt="">
					   </div>
					   <div class="item">
							<img src="images/slider_one.jpg" class="img-responsive" alt="">
					   </div>
					</div>

					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>

					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->


			<!-- Our Skill -->
			<!--<div class="skill-wrap clearfix">

				<div class="center wow fadeInDown">
					<h2>Our Skill</h2>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
				</div>

				<div class="row">

					<div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="joomla-skill">
								<p><em>85%</em></p>
								<p>Joomla</p>
							</div>
						</div>
					</div>

					 <div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="html-skill">
								<p><em>95%</em></p>
								<p>HTML</p>
							</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
							<div class="css-skill">
								<p><em>80%</em></p>
								<p>CSS</p>
							</div>
						</div>
					</div>

					 <div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
							<div class="wp-skill">
								<p><em>90%</em></p>
								<p>Wordpress</p>
							</div>
						</div>
					</div>

				</div>

            </div>--><!--/.our-skill-->


			<!-- our-team -->
			<div class="team">
				<div class="center wow fadeInDown">
					<h2> <br> <br>Team of Political Visions</h2>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
				</div>

				<div class="row clearfix">
					<div class="col-md-4 col-sm-6">
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="<?php echo $this->webroot; ?>/app/webroot/img/Lorenzo.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Lorenzo Parks</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul>

									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div><!--/.col-lg-4 -->


					<div class="col-md-4 col-sm-6 col-md-offset-2">
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="<?php echo $this->webroot; ?>/app/webroot/img/Aaron.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Aaron Duncan</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div><!--/.col-lg-4 -->
				</div> <!--/.row -->
				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->

				<div class="row clearfix">
					<div class="col-md-4 col-sm-6 col-md-offset-2">
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="<?php echo $this->webroot; ?>/app/webroot/img/Evans.jpg" alt=""></a>
								</div>

								<div class="media-body">
									<h4>Evans Thornton</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-md-offset-2">
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" height="100" width="100" src="<?php echo $this->webroot; ?>/app/webroot/img/Tyron.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Tyron Allen</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div>
				</div>	<!--/.row-->
			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="about">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="contact_us">Contact us</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="discussion">Discussion</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
<!--
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
 -->
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Politicians</h3>
                        <ul>
                            <li><a href="#">Local Representatives</a></li>
                            <li><a href="contact_politician">Contact Politician</a></li>
                            <li><a href="#">Recent News</a></li>
                           <!--
 <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
 -->

                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners and Supporters</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">TALE</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index">Home</a></li>
                        <li><a href="about">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="contact_us">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo $this->webroot; ?>/app/webroot/js/jquery.js"></script>
    <script src="<?php echo $this->webroot; ?>/app/webroot/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->webroot; ?>/app/webroot/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo $this->webroot; ?>/app/webroot/js/jquery.isotope.min.js"></script>
    <script src="<?php echo $this->webroot; ?>/app/webroot/js/main.js"></script>
    <script src="<?php echo $this->webroot; ?>/app/webroot/js/wow.min.js"></script>
</body>
</html>
