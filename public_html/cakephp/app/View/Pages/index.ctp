

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Political Visions</title>

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

<body class="homepage">

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
                    <a class="navbar-brand" href="index.html"><img src="<?php echo $this->webroot; ?>/app/webroot/img/PVlogo.png" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><!--<a href="index.ctp">Home</a>-->
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
            <li><!--<a href="about-us.html">About Us</a>-->
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

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <!-- 
<ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
 -->
            <div class="carousel-inner">

             <div class="item active" style="background-image: url(<?php echo $this->webroot; ?>/app/webroot/img/slider/USFlag.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">"Be The Change You Want To See"</h1>
                                    <h2 class="animation animated-item-2">No change can be achieved without a spark</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo $this->webroot; ?>/app/webroot/img/slider/img2.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(<?php echo $this->webroot; ?>/app/webroot/img/slider/VoteAndBeAPartOfHistory.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(<?php echo $this->webroot; ?>/app/webroot/img/slider/Congress.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo $this->webroot; ?>/app/webroot/img/slider/img3.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
       <!-- 
 <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
 -->
    </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
           		<br>
                <h2>TALE</h2>
                <p class="lead">Transitioning Awareness Lawfully Educating</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Get Involved</h2>
                            <h3>Find community events to get involved in</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Contact Politicians</h2>
                            <h3>Contact your local officials</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Recent News</h2>
                            <h3>See all recent news</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Get Informed</h2>
                            <h3>Keep up to date with local bills</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cogs"></i>
                            <h2>Election Information</h2>
                            <h3>Find out information on officials running for office</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-heart"></i>
                            <h2>Press Releases</h2>
                            <h3>See information regarding the latest press releases</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#feature-->

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
            	<br>
                <h2>In The News</h2>
                <p class="lead">Keep up to date with the national news! </p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo $this->webroot; ?>/app/webroot/img/MSNBC_logo.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme</a> </h3>
                                <p>At MSNBC, our mission is to provide a fact-free environment as prefered by the Democrat- Socialist peoples.</p>
                                <a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo $this->webroot; ?>/app/webroot/img/cnn-iphone.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme</a></h3>
                                <p>Our mission is to create the finest possible news product and to present hard-breaking, national, and international news, as it unfolds.</p>
                                <a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo $this->webroot; ?>/app/webroot/img/abcLogo.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>At Disney / ABC Television Group, our stories change lives, our technology revolutionizes media as we know it.</p>
                                <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo $this->webroot; ?>/app/webroot/img/Fox_News_Channel_logo.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>Fear mongering right wing replublican sensationalist writing</p>
                                <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->

    <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
                        <h2>Percentage of Voters</h2>
                        <p>Break down of what percentage of voters at each age are voting.</p>

                        <div class="progress-wrap">
                            <h3>Voting Eligible Population</h3><br>
                            <div class="progress">
                              <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 36.4%">
                                <span class="bar-width">36.4%</span>
                              </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Youth Voters (18 - 29) years of age</h3><br>
                            <div class="progress">
                              <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 21.3%">
                               <span class="bar-width">21.3%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Voters (40+) years of age </h3><br>
                            <div class="progress">
                              <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 67%">
                                <span class="bar-width">67%</span>
                              </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.col-sm-6-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#middle-->

    <section id="partner">
    <br>
    <br>
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Partners and Supporters</h2>
                <p class="lead">Our sponsors help us provide an add free beautiful experience</p>
            </div>

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="<?php echo $this->webroot; ?>/app/webroot/img/partners/partner1.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="<?php echo $this->webroot; ?>/app/webroot/img/partners/partner2.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="<?php echo $this->webroot; ?>/app/webroot/img/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="<?php echo $this->webroot; ?>/app/webroot/img/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="<?php echo $this->webroot; ?>/app/webroot/img/partners/partner5.png"></a></li>
                </ul>
            </div>
        </div><!--/.container-->
        <br>
        <br>
    </section><!--/#partner-->

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                    	<br>
                        <h3>Company</h3>
                        <ul>
                            <li><a href="about">About us</a></li>
                            <li><a href="about">Meet the team</a></li>
                            <li><a href="contact_us">Contact us</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                    	<br>
                        <h3>Support</h3>
                        <ul>
                            <li><a href="discussion">Discussion</a></li>
                            <li><a href="discussion">Forum</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                    	<br>
                        <h3>Politicians</h3>
                        <ul>
                            <li><a href="contact_politician">Local Representatives</a></li>
                            <li><a href="contact_politician">Contact Politician</a></li>
                            <li><a href="discussion">Recent News</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                    	<br>
                        <h3>Our Partners and Supporters</h3>
                        <ul>
                            <li><a href="http://www.gocolumbiamo.com/">City of Columbia</a></li>
                            <li><a href="http://www.columbiatribune.com/news/politics/">Columbia Daily Tribune</a></li>
                            <li><a href="https://www.columbiamissourian.com/stories/news/elections/">Missourian</a></li>
                            <li><a href="http://www.showmeboone.com/clerk/">Show Me Boone</a></li>
                    </div>
                </div><!--/.col-md-3-->
            </div>
        </div>
        <br>
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
