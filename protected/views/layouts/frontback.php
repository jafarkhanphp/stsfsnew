<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<meta name="keywords" content="<?php echo Settings::model()->getSiteSettingByName('keyword');?>" />
		<meta name="description" content="<?php echo Settings::model()->getSiteSettingByName('meta_description');?>">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Libs CSS -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/css/fonts/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/owl-carousel/owl.carousel.css" media="screen">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/owl-carousel/owl.theme.css" media="screen">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/magnific-popup/magnific-popup.css" media="screen">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/css/theme.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/css/theme-animate.css">

		<!-- Current Page Styles -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/rs-plugin/css/settings.css" media="screen">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/circle-flip-slideshow/css/component.css" media="screen">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/css/skins/blue.css">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/css/custom.css">

		<!-- Responsive CSS -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/css/theme-responsive.css" />

		<!-- Head Libs -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/modernizr.js"></script>

		<!--[if IE]>
			<link rel="stylesheet" href="css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="vendor/respond.js"></script>
		<![endif]-->

	</head>
	<body>

		<div class="body">
			<header>
				<div class="container">
					<h1 class="logo">
						 <a href="#">
							<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/logo.png",$this->pageTitle=Yii::app()->name, array('alt'=>$this->pageTitle=Yii::app()->name,  'width'=>"238", 'height'=>"54", 'data-sticky-width'=>"167", 'data-sticky-height'=>"40"));?>
                         
						</a>
					</h1>
					
					<div class="social-icons">
						<ul class="social-icons">
							<li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
							<li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
							<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li>
						</ul>
					</div>
					<nav>
						<ul class="nav nav-pills nav-top">
							<li><i class="icon icon-envelope"></i><strong>Email:</strong> info@moneytrend.co.in</li>
                            <li>&nbsp; </li>
							<li><i class="icon icon-phone"></i> <strong>Phone:</strong> +91 8400888811, 9451083313</li>
						</ul>
					</nav>
					<button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
						<i class="icon icon-bars"></i>
					</button>
				</div>
				<div class="navbar-collapse nav-main-collapse collapse">
					<div class="container">
						<nav class="nav-main mega-menu">
							<?php 
					   $currentUrl=Yii::app()->controller->id .'/'. Yii::app()->controller->action->id;
					   if($currentUrl=='site/index') { $home='active';} else { $home='';}
					   if($currentUrl=='site/about_us') { $about='active';} else { $about='';}
					   if($currentUrl=='site/plan') { $plan='active';} else { $plan='';}
					   
					?>
                            <ul class="nav nav-pills nav-main" id="mainMenu">
								<li class="<?php echo $home;?>">
                                 <?php echo CHtml::link('Home',array('site/index'), array('class'=>"")); ?>
								</li>
								<li class="<?php echo $about;?>">
									<?php echo CHtml::link('About Us',array('site/about_us'), array('class'=>"")); ?>
								</li>
								<li class="dropdown">
									<?php echo CHtml::link('Products<i class="icon icon-angle-down"></i>',array('#'), array('class'=>"dropdown-toggle")); ?>
                                   
									<ul class="dropdown-menu">
										<li><?php echo CHtml::link('Financial Services/Taxation',array('#'), array('class'=>"")); ?></li>
										<li><?php echo CHtml::link('Combo sim Technology',array('#'), array('class'=>"")); ?></li>
										<li><?php echo CHtml::link('Real State',array('#'), array('class'=>"")); ?></li>
                                        <li><?php echo CHtml::link('Tour Package',array('#'), array('class'=>"")); ?></li>
                                        <li><?php echo CHtml::link('Agro Products',array('#'), array('class'=>"")); ?></li>
									</ul>
								</li>
								<li class="<?php echo $plan ;?>">
									<?php echo CHtml::link('Plans',array('site/plan'), array('class'=>"")); ?>
								</li>
                                <li class="dropdown">
									<?php echo CHtml::link('Gallery<i class="icon icon-angle-down"></i>',array('#'), array('class'=>"dropdown-toggle")); ?>
                                   
									<!-- <ul class="dropdown-menu">
										<li><?php echo CHtml::link('Photo Gallery',array('#'), array('class'=>"")); ?></li>
										<li><?php echo CHtml::link('Video Gallery',array('#'), array('class'=>"")); ?></li>
										
									</ul> -->
								</li>
								<li class="<?php ?>">
									<?php echo CHtml::link('Legal',array('#'), array('class'=>"")); ?>
								</li>
                                <!-- <li class="<?php ?>">
									<?php echo CHtml::link('Terms Conditions',array('#'), array('class'=>"")); ?>
								</li> -->
								<li class="<?php ?>">
									<?php echo CHtml::link('Contact Us',array('site/contact_us'), array('class'=>"")); ?>
								</li>
								
								<li class="dropdown mega-menu-item mega-menu-signin signin" id="headerAccount">
									 <?php echo CHtml::link('<i class="icon icon-user"></i> Sign In',array('site/login'), array('class'=>"")); ?>
                                    </li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
            
			<?php echo $content; ?>
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribon">
							<span>Get in Touch</span>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Facebook</h4>
								
<iframe frameborder="0" allowtransparency="true" style="border:none; overflow:hidden; width:240px; height:220px;" scrolling="no" src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fwebera.in&amp;width=260&amp;height=220&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true&amp;appId=153195861455383"></iframe>
							</div>
						</div>
						<div class="col-md-3">
							<h4>Latest Tweet</h4>
							<p data-twttr-id="twttr-sandbox-0">
<iframe height="190" frameborder="0" id="twitter-widget-0" scrolling="no" allowtransparency="true" class="twitter-timeline twitter-timeline-rendered" allowfullscreen="" style="border: medium none; max-width: 100%; min-width: 180px; margin: 0px; padding: 0px; display: inline-block; position: static; visibility: visible; width: 180px;" title="Twitter Timeline"></iframe>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</p>
						</div>
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									<li><p><i class="icon icon-map-marker"></i> <strong>Address:</strong>Vashnavi Sankul Apartment, Darwa Road Yavatmal, Maharashtra - 445001, INDIA</p></li>
									<li><p><i class="icon icon-phone"></i> <strong>Phone:</strong> +91 8400888811, 9451083313</p></li>
									<li><p><i class="icon icon-envelope"></i> <strong>Email:</strong> <a href="mailto:info@moneytrend.co.in">info@moneytrend.co.in</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<h4>Follow Us</h4>
							<div class="social-icons">
								<ul class="social-icons">
									<li class="facebook"><a href="http://www.facebook.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Facebook">Facebook</a></li>
									<li class="twitter"><a href="http://www.twitter.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Twitter">Twitter</a></li>
									<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Linkedin">Linkedin</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<p>© Copyright 2015 Money Trend, All Rights Reserved. | Powered By <a href="http://www.webera.in/" target="_blank">Web Era</a></p>
							</div>
							<div class="col-md-4">
								<nav id="sub-menu">
									<ul>
                                    
										<li><a href="about_us">About</a></li>
										<li><?php echo CHtml::link('Trems and Condition',array('site/terms_condition'), array('class'=>"")); ?></li>
										<li><a href="contact_us">Contact</a></li>
                                        
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Libs -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/jquery.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/js/plugins.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/jquery.easing.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/jquery.appear.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/jquery.cookie.js"></script>
		
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/bootstrap.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/twitterjs/twitter.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/rs-plugin/js/jquery.themepunch.revolution.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/owl-carousel/owl.carousel.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/vendor/jquery.validate.js"></script>

		<!-- Current Page Scripts -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/js/views/view.home.js"></script>

		<!-- Theme Initializer -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/js/theme.js"></script>

		<!-- Custom JS -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/js/custom.js"></script>

		

	</body>
</html>