<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Calendar | Political Visions</title>

	<!-- core CSS -->
   <!--
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
 -->

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
                        <li class="active"><!--<a href="calendar.ctp">Calendar</a>-->
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
    <section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>Calendar</h2>
			</div>

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
