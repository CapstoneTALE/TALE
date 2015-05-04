<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact Us | Political Visions</title>

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
                          <li class="dropdown">
                          	<?php echo $this->Html->link(
                          		//$this->Html->tag('i', null, array('class' => 'fa fa-angle-down'));
      							'Contact',
      							'#',
     								array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown')
  							);
                          	?>
  							<ul class="dropdown-menu">
  								<li class="active"><!--<a href="contact_us">Contact Us</a>-->
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

    <section id="contact-info">
    <br>
        <div class="center">
            <h2>How to Reach Us?</h2>
            <p class="lead">Visit one of our office locations or just simply fill out the form below!</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Head Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zonal Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>


                            <li class="col-sm-6">
                                <address>
                                    <h5>Zone#2 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zone#3 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
    <br>
        <div class="container">
            <div class="center">
                <h2>Drop Your Message</h2>
                <p class="lead">Your input is greatly appreciated!</p>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

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
                            <li><a href="https://www.columbiamissourian.com/stories/news/elections/">Columbia Missourian</a></li>
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
