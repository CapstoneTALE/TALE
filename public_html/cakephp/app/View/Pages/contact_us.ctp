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
                <!-- Contact Form -->
                  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				  <meta name="viewport" content="width=device-width, initial-scale=1">
				  <link rel="stylesheet" type="text/css" href="//assets.emailmeform.com/styles/dynamic.php?t=post&enable_responsive_ui=1&RU1GLTAyLTIy" />
				  <link href='//fonts.googleapis.com/css?family=Lato|Lato|Lato|Lato|Lato|Lato' rel='stylesheet' type='text/css'/>
				  <link href='//fonts.googleapis.com/css?family=Lato|Lato' rel='stylesheet' type='text/css'/>
				  <link rel="stylesheet" type="text/css" href="http://app.emailmeform.com/builder/theme_css/5mrUf4Ga5e9Wbibc4CT71dLF" />
				  <style>
				  #emf-container, #emf-container-outer #emf-form-shadows{box-sizing: border-box;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;width:90%}
				  </style>
				  <div id="emf-container-outer">
				  <div id="emf-container" >
				  <div id="emf-logo"><a >EmailMeForm</a></div>
				  <div class="emf-error-message" style='display:none'></div>
				  <form id="emf-form" target="_parent" class="topLabel" enctype="multipart/form-data" method="post" action="http://www.emailmeform.com/builder/form/5mrUf4Ga5e9Wbibc4CT71dLF"><div id="emf-form-instruction" class="emf-head-widget">
				  <div id="emf-form-title" class="emf-bold" align="center">Contact Our Team</div><div id="emf-form-description"></div>
				  </div>
				  <ul>
				  <li id="emf-li-0" class="emf-li-field emf-field-new_name data_container   ">
				  <label class="emf-label-desc" for="element_0">Name <span>*</span></label>
				  <div class="emf-div-field"><span style="width:50%">
				  <input class="validate[required]" style="width:100%" value=""
										id="element_2" name="element_2" type="text" />
				  <label for="element_2" class="emf-bottom-label emf-text-center">First</label>
				</span><span style="width:50%">
				  <input class="validate[required]" style="width:100%" value=""
										id="element_3" name="element_3" type="text" />
				  <label for="element_3" class="emf-bottom-label emf-text-center">Last</label>
				  </span></div>
				  <div class="emf-clear"></div>
				  </li><li id="emf-li-7" class="emf-li-field emf-field-email data_container   ">
				  <label class="emf-label-desc" for="element_7">Email <span>*</span></label>
				  <div class="emf-div-field"><input id="element_7" name="element_7"
								class="validate[required,custom[email]]"
								value="" style="width:100%" type="text" /></div>
				  <div class="emf-clear"></div>
				  </li><li id="emf-li-8" class="emf-li-field emf-field-phone data_container">
				  <label class="emf-label-desc" for="element_8">Phone</label>
				  <div class="emf-div-field">
				  <span>
				  <input maxlength="3" value="" id="element_8_1" name="element_8[]" type="text" class="emf-input-w40 validate[optional,custom[onlyNumber],length[3,3]]" />
				  <label for="element_8_1" class="emf-bottom-label">###</label>
				  </span><span class="emf-sep">-</span><span>
				  <input maxlength="3" value="" id="element_8_2" name="element_8[]" type="text" class="emf-input-w40 validate[optional,custom[onlyNumber],length[3,3]]" />
				  <label for="element_8_2" class="emf-bottom-label">###</label>
				  </span><span class="emf-sep">-</span><span>
				  <input maxlength="4" value="" id="element_8_3" name="element_8[]" type="text" class="emf-input-w40 validate[optional,custom[onlyNumber],length[4,4]]" />
				  <label for="element_8_3" class="emf-bottom-label">####</label>
				  </span><span class="emf-sep">Ext.</span><span>
				  <input maxlength="6" value="" id="element_8_4" name="element_8[]" type="text" class="emf-input-w40 validate[optional,custom[onlyNumber],length[0,6]]" />
				  <label for="element_8_4" class="emf-bottom-label">###</label>
				  </span></div>
				  <div class="emf-clear"></div>
				  </li><li id="emf-li-9" class="emf-li-field emf-field-text data_container   ">
				  <label class="emf-label-desc" for="element_9">Company</label>
				  <div class="emf-div-field"><input id="element_9" name="element_9" value="" style="width:100%" type="text"

								class="validate[optional]"/></div>
				  <div class="emf-clear"></div>
				  </li><li id="emf-li-10" class="emf-li-field emf-field-text data_container   ">
				  <label class="emf-label-desc" for="element_10">Subject <span>*</span></label>
				  <div class="emf-div-field"><input id="element_10" name="element_10" value="" style="width:100%" type="text"

								class="validate[required,length[2,25]]"/></div>
				  <div class="emf-clear"></div>
				  </li><li id="emf-li-11" class="emf-li-field emf-field-textarea data_container   ">
				  <label class="emf-label-desc" for="element_11">Message <span>*</span></label>
				  <div class="emf-div-field"><textarea id="element_11" name="element_11" style="width:100%" rows="5"
									class="validate[required,length[3,1000]]"></textarea></div>
				  <div class="emf-clear"></div>
				  </li>
				  <li id="emf-li-captcha" >
				  <div id="emf-captcha-top-settings">Image Verification</div>
				  <div id="emf-captcha-bottom-settings">
				  <div id="emf-captcha-image-settings">
				  <img id="captcha_image" src="http://www.emailmeform.com/builder/captcha/index/73a5024b3044996a64e591bcad2bed4b" alt="captcha" onload="if(typeof on_captcha_image_load=='function') on_captcha_image_load();">
				  </div>
				  <div id="emf-captcha-input-settings">
				  <div>Please enter the text from the image:</div>
				  <input type="text" id="captcha_code" name="captcha_code" maxlength="10" size="10" class="validate[required,funcCall[valid_captcha]]"
										 />
										[<a id="captcha_code_refresh" href="javascript:void(0);"
										onclick="document.getElementById('captcha_image').src = 'http://www.emailmeform.com/builder/captcha/index/'+Math.random()+'?PHPSESSID='+get_g_emf_session_id();return false;">Refresh Image</a>]
				  </div>
				  <div class="emf-clear"></div>
				  </div>
				  <div class="emf-clear"></div>
				  </li>
				  <li id="emf-li-post-button" class="middle">
				  <input  value="Submit Message" type="submit" onmouseover="return true;"/>
				  </li>
				  </ul>
				  <input name="element_counts" value="12" type="hidden" />
				  </form>
				  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
				  <script type="text/javascript">
				  if (typeof jQuery == 'undefined'){
					  document.write(unescape("%3Cscript src='http://app.emailmeform.com/builder/js/jquery-1.8.3.min.js' type='text/javascript'%3E%3C/script%3E"));
				  }
				  </script>
				  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
				  <script type="text/javascript">
				  if (typeof $.ui == 'undefined'){
					  document.write(unescape("%3Cscript src='http://app.emailmeform.com/builder/js/jquery-ui-1.7.2.custom.min.js' type='text/javascript'%3E%3C/script%3E"));
				  }
				  </script>
				  <script type="text/javascript" src="//assets.emailmeform.com/js/dynamic.php?t=post&t2=0&use_CDN=true&language=en&language_id=0&referer_domain=http%3A%2F%2Fwww.emailmeform.com%2F&RU1GLTAyLTIy"></script>
				  <script type="text/javascript">
				  EMF_jQuery(window).load(function(){
					post_message_for_frame_height("5mrUf4Ga5e9Wbibc4CT71dLF");
				  });

				  EMF_jQuery(function(){
					bind_auto_cursor(EMF_jQuery('#emf-li-8 input[type=text]'));
					generate_css_for_emf_ad();
				  ;

					EMF_jQuery("#emf-form").validationEngine({
						validationEventTriggers:"blur",
						scroll:true
					});
					prevent_duplicate_submission(EMF_jQuery("#emf-form"));

					$("input[emf_mask_input=true]").dPassword();

					if(EMF_jQuery('#captcha_image').length>0){
						on_captcha_image_load();
					}

					EMF_jQuery('.emf-field-grid td').click(function(event){

						EMF_jQuery(this).find('input[type=checkbox],input[type=radio]').click();
					});

					  EMF_jQuery('input[type=checkbox],input[type=radio]').click(function(event){
						  event.stopPropagation();
					  });



						var form_obj=EMF_jQuery("#emf-container form");
					if(form_obj.length>0 && form_obj.attr('action').indexOf('#')==-1 && window.location.hash){
						form_obj.attr('action', form_obj.attr('action')+window.location.hash);
					}

					init_rules();

					enable_session_when_cookie_disabled();

					detect_unsupported_browser();

					randomize_field_content();



					});

				  var emf_widgets={text :
							function(index){
								return $("#element_"+index).val();
							}
						,number :
							function(index){
								return $("#element_"+index).val();
							}
						,textarea :
							function(index){
								return $("#element_"+index).val();
							}
						,new_checkbox :
							function(index){
								var arr=new Array();
								$("input[name='element_"+index+"[]']:checked").each(function(){
									arr[arr.length]=this.value;
								});
								var result=arr.join(", ");
								return result;
							}
						,radio :
							function(index){
								var result="";
								$("input[name=element_"+index+"]:checked").each(function(){
									result=this.value;
								});
								return result;
							}
						,select :
							function(index){
								return $("#element_"+index).val();
							}
						,email :
							function(index){
								return $("#element_"+index).val();
							}
						,phone :
							function(index){
								var arr=new Array();
								$("input[id^=element_"+index+"_]").each(function(){
									arr[arr.length]=this.value;
								});

								var result="";
								if(arr.length>0){
									result=arr.join("-");
								}else{
									result=$("#element_"+index).val();
								}
								return result;
							}
						,datetime :
							function(index){
								var result="";

								var date_part="";
								if($("#element_"+index+"_year").length==1){
									date_part=$("#element_"+index+"_year-mm").val()+"/"+$("#element_"+index+"_year-dd").val()+"/"+$("#element_"+index+"_year").val();
								}

								var time_part="";
								if($("#element_"+index+"_hour").length==1){
									time_part=$("#element_"+index+"_hour").val()+":"+$("#element_"+index+"_minute").val()+" "+$("#element_"+index+"_ampm").val();
								}

								if(date_part && time_part){
									result=date_part+" "+time_part;
								}else{
									result=date_part ? date_part : time_part;
								}

								return result;
							}
						,url :
							function(index){
								return $("#element_"+index).val();
							}
						,file :
							function(index){
								return $("#element_"+index).val();
							}
						,Image :
							function(index){
								return $("#element_"+index).val();
							}
						,new_select_multiple :
							function(index){
								return $("#element_"+index).val();
							}
						,price :
							function(index){
								var result="";
								var arr=new Array();
								$("input[id^=element_"+index+"_]").each(function(){
									arr[arr.length]=this.value;
								});
								result=arr.join(".");
								return result;
							}
						,hidden :
							function(index){
								return $("#element_"+index).val();
							}
						,unique_id :
							function(index){
								return $("#element_"+index).val();
							}
						,section_break :
							function(index){
								return "";
							}
						,page_break :
							function(index){
								return "";
							}
						,signature :
							function(index){
								return $("#element_"+index).val();
							}
						,star_rating :
							function(index){
								var result="";
								$("input[name=element_"+index+"]:checked").each(function(){
									result=this.value;
								});
								return result;
							}
						,scale_rating :
							function(index){
								var result="";
								$("input[name=element_"+index+"]:checked").each(function(){
									result=this.value;
								});
								return result;
							}
						,deprecated :
							function(index){
								return $("#element_"+index).val();
							}
						,address :
							function(index){
								var result="";
								var element_arr=$("input,select").filter("[name='element_"+index+"[]']").toArray();
								result=element_arr[0].value+" "+element_arr[1].value+"\n"
									+element_arr[2].value+","+element_arr[3].value+" "+element_arr[4].value+"\n"
									+element_arr[5].value;
								return result;
							}
						,name :
							function(index){
								var arr=new Array();
								$("input[id^=element_"+index+"_]").each(function(){
									arr[arr.length]=this.value;
								});
								var result=arr.join(" ");
								return result;
							}
						,checkbox :
							function(index){
								var arr=new Array();
								$("input[name='element_"+index+"[]']:checked").each(function(){
									arr[arr.length]=this.value;
								});
								var result=arr.join(", ");
								return result;
							}
						,select_multiple :
							function(index){
								return $("#element_"+index).val();
							}
						};

				  var emf_condition_id_to_js_map={5 :
							function(field_value, value){
								return field_value==value;
							}
						,6 :
							function(field_value, value){
								return field_value!=value;
							}
						,1 :
							function(field_value, value){
								return field_value.indexOf(value)>-1;
							}
						,2 :
							function(field_value, value){
								return field_value.indexOf(value)==-1;
							}
						,3 :
							function(field_value, value){
								return field_value.indexOf(value)==0;
							}
							,4 :
							function(field_value, value){
								return field_value.indexOf(value)==field_value.length-value.length;
							}
						,7 :
						function(field_value, value){
						return parseFloat(field_value)==parseFloat(value);
					}
					,8 :
							function(field_value, value){
								return parseFloat(field_value)>parseFloat(value);
							}
						,9 :
							function(field_value, value){
								return parseFloat(field_value) < parseFloat(value);
							}
						,10 :
							function(field_value, value){
								var date_for_field_value=Date.parse(field_value);
								var date_for_value=Date.parse(value);
								if(date_for_field_value && date_for_value){
									return date_for_field_value == date_for_value;
								}
								return false;
							}
						,11 :
							function(field_value, value){
								var date_for_field_value=Date.parse(field_value);
								var date_for_value=Date.parse(value);
								if(date_for_field_value && date_for_value){
									return date_for_field_value < date_for_value;
								}
								return false;
							}
						,12 :
							function(field_value, value){
								var date_for_field_value=Date.parse(field_value);
								var date_for_value=Date.parse(value);
								if(date_for_field_value && date_for_value){
									return date_for_field_value > date_for_value;
								}
								return false;
							}
						};
				  var emf_group_to_field_rules_map=[];
				  var emf_group_to_page_rules_for_confirmation_map=[];

				  var emf_cart=null;
				  var emf_page_info={current_page_index: 0, page_element_index_min: 0, page_element_index_max: 11};
				  var emf_index_to_value_map=null;
				  var emf_form_visit_id="5mrUf4Ga5e9Wbibc4CT71dLF";

				  var emf_index_to_option_map=[];
				  </script>
                
            </div>
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
