<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bills | Political Visions</title>

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
                        <li class="active"><!--<a href="bills.ctp">Bills</a>-->
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

    <section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<br>
				<h2>Bills</h2>            
				  <table class="table table-striped">
					<thead>
					  <tr>
						<th>Propositions</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>Proposition 1</td>
						<td>Shall the Board of Education of the Sturgeon R-V School District, Missouri, borrow money in the amount of Two Million Dollars ($2,000,000), resulting in no estimated increase to the debt service property tax levy, for the purpose of providing funds for the construction, equipping, and furnishing of additional classrooms and a new retrofit stage at the High School campus; to complete secure entrance modifications at the High School; installation of all-weather track; to acquire and install technology infrastructure and equipment at the Middle School and High School; to complete renovation, remodeling and repair improvements to the existing facilities of the District including, without limitation, renovate Middle School locker rooms, upgrade Middle School lockers, replace flooring, update lighting, renovate restrooms; and issue bonds for the payment thereof? If this proposition is approved, the adjusted debt service levy of the School District is estimated to remain unchanged at $1.27 per one hundred dollars of assessed valuation of real and personal property.</td>
					  </tr>
					  <tr>
						<td>Proposition 1</td>
						<td>Shall the City of Columbia, Missouri increase the general property tax rate of the City by $0.30 per $100.00 of assessed valuation for the sole purpose of funding an increase in staffing and operations of the police and fire departments of the City? The increase would be phased in over a period of five years.</td>
					  </tr>
					  <tr>
						<td>Proposition 2</td>
						<td>Shall the City of Columbia, Missouri replace the current development charge for construction of collector and arterial streets of $0.50 per square foot of total floor area of new construction with a development charge for construction of collector and arterial streets as follows:
                                Residential - a maximum of $1.00 per square foot of total floor area of new construction; and
                                Non-residential Low Impact - a maximum of $1.50 per square foot of total floor area of new construction; and
                                Non-residential High Impact - a maximum of $2.00 per square foot of total floor area of new construction.
                        “Non-residential Low Impact” shall be defined as a trip generation rate of less than 3 trips per 1,000 square feet based on the weekday p.m. peak hour for non-residential land uses as set forth in the most recent edition of Trip Generation, a manual published by the Institute of Transportation Engineers;
                        “Non-residential High Impact” shall be defined as a trip generation rate of 3 trips or more per 1,000 square feet based on the weekday p.m. peak hour for non-residential land uses as set forth in the most recent edition of Trip Generation, a manual published by the Institute of Transportation Engineers?
                        The increase would be phased in over a period of three (3) years.</td>
					  </tr>
					  <tr>
					  	<td>Notice of Special Election</td>
					  	<td>Shall the number of Directors of the Board of Directors of the Southern Boone County Fire Protection District be increased from 3 to 5 members?</td>
					  </tr>
					</tbody>
				  </table>
			</div>

		</div><!--/.container-->
    </section><!--/about-us-->

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
                            <li><a href="http://www.komu.com/news/">KOMU</a></li>
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
