<!doctype html>
<html>


<head>
<meta charset="utf-8">
<title>My Life Vision | Let's build the future together with wealth &amp; health </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/img/favicon.ico"/>
<!--css styles -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/css/custom_styles.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/css/responsive_styles.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/css/bootstrap.min.css">	
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/css/browser.css" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/css/font-awesome.min.css">
<!--nav styles-->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/css/nav.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/css/resnav.css">
<!-- Scripts -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/js/custom_js.js"></script>
<!--Plugins-->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/model-popup/model.css" />
<!-- -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/pageloders/loader.css">
<!-- -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/nivo-slider/nivo.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/nivo-slider/nivo-custom.css">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/nivo-slider/nivo.js"></script>
<!-- -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/animation/css/animate.css">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/animation/js/wow.min.js"></script>
<script>
	wow = new WOW(
		{
			boxClass:     'wow',      // default
			animateClass: 'animated', // default
			offset:       0,          // default
			mobile:       true,       // default
			live:         true        // default
		}
	)
	wow.init();
</script>
<!-- -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/owl-carousel/owl.theme.css" rel="stylesheet">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/owl-carousel/owl.custom.css" rel="stylesheet">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/owl-carousel/owl.carousel.js"></script>  
<!--Fonts-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
<!--onpage styles-->
<style type="text/css">
#level_1 li a#gallery {
	background:#08a093; color:#fff!important
}
#level_1 li a#gallery:after {
	left:0;
	width:100%; background:#fff
}
</style>
 

</head>
<body>


<!--login form start -->
<?php  require_once(Yii::app()->basePath . '/views/layouts/front_menu.php');?>
<section class="slider page-title" style="background:url(<?php echo Yii::app()->request->baseUrl;?>/frontend/img/inner_banner_img.jpg)">
<div class="container">
        	<div class="inner-box">
               <div class="row">
                    <div class="col-xs-12 text-center">
                       
                            <h1 class="font-36 weight-bold montserrat uppercase white-color mb-20">Video Gallery</h1>
                            <div class="text-center">
                                <div class="p-vertical-line mb-10">
                                    <div class="v-line"></div>
                                    <div class="v-line animated"></div>
                                    <div class="v-line"></div>
                                </div>
                            </div>
                            <ul>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/site/index">Home</a> <i class="fa fa-chevron-right"></i></li>
                                <li>Video Gallery</li>
                            </ul>
                        
                    </div>
                </div>
            </div>
        </div>
	
</section>


<!-- -->
<section class="contents"> 
	<div class="home-abt-bar">
		<div class="container ">
			<div class="row">
				<img src="<?php  echo Yii::app()->request->baseUrl;?>/frontend/img/under-cons.png" class="img-responsive center-block	">
				<br>
				<span align="center"><h1>The Page is Under Maintenance!</h1></span>
			</div>

		</div>
    <div class="clearfix"></div>
    </div>
</section>

<!-- -->
<footer>
  <?php  require_once(Yii::app()->basePath . '/views/layouts/front_footer.php');?>
</footer>
<!-- -->
<div class="md-overlay"></div>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/model-popup/classie.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/model-popup/modalEffects.js"></script>
<!-- -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/scroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/scroll/jquery.fancybox.pack.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/scroll/skrollr.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/scroll/jquery.appear.js"></script>
<script type="text/javascript">
	 //nicescroll
	$("html").niceScroll({zindex:999,cursorborder:"",cursorborderradius:"2px",cursorcolor:"#ccc",cursoropacitymin:1});
	function initNice() {
		if($(window).innerWidth() <= 960) {
			$('html').niceScroll().remove();
		} else {
			$("html").niceScroll({zindex:999,cursorborder:"",cursorborderradius:"2px",cursorcolor:"#ccc",cursoropacitymin:1});
		}
	}
	$(window).load(initNice);
	$(window).resize(initNice);
</script>
</body>

<!-- Mirrored from mysmartvision.co.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2017 07:37:33 GMT -->
</html>
