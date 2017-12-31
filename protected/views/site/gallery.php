<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta charset="utf-8" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="keywords" content="stsfs is a multi level marketing company, multi-level marketing company, multi-level network marketing, multi-level network marketing company, mlm company, mlm plan, business plans, mlm business plan, mlm opportunity, mlm income opportunity, best mlm company, mlm company in unnao, Step Two Success Financial Services Pvt. Ltd. is leading marketing company in unnao" />
<meta name="description" content="Step Two Success Financial Services Pvt. Ltd. is leading marketing company situated in unnao, india" />
<meta name="author" content="Step Two Success Financial Services - leading marketing company in unnao" />
<meta name="copyright" content="Copyright 2013-2014 Step Two Success Financial Services - leading marketing company, All Rights Reserved"/>
    <!-- Favicons -->
 <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <!-- CSS -->
    <link rel='stylesheet' href='<?php echo Yii::app()->request->baseUrl; ?>/assets/front/new/css/global.css'>
    <link rel='stylesheet' href='<?php echo Yii::app()->request->baseUrl; ?>/assets/front/new/css/structure.css'>
    <link rel='stylesheet' id='style-static' href='<?php echo Yii::app()->request->baseUrl; ?>/assets/front/new/css/be_style.css'>
    <link rel='stylesheet' href='<?php echo Yii::app()->request->baseUrl; ?>/assets/front/new/css/custom.css'>
</head>

<body class="page-parent template-slider color-blue layout-full-width header-stack header-left subheader-transparent sticky-header sticky-white subheader-title-left">    <!-- Hidden Top Area -->
    
    <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Header Wrapper -->
        <div id="Header_wrapper">
            <!-- Header -->
            <header id="Header"> 
      <!-- Header Top -  Info Area -->
     <?php  require_once(Yii::app()->basePath . '/views/layouts/new-front-top.php');?>
      <!-- Revolution slider area-->
    </header>
            <div id="Subheader">
                <div class="container">
                    <div class="column one">
                        <h1 class="title">Gallery</h1>
                        <!--BreadCrumbs area-->
                        <ul class="breadcrumbs">
                           <li><?php echo CHtml::link('Home',array('site/index'), array('class'=>"")); ?><span><i class="icon-right-open"></i></span></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                     <h3 align="center" style="color:red; padding:20px;">Page under maintenance</h3>
                    <!-- Portfolio filters -->
                    
                    
                </div>
            </div>
        </div>

        <!-- Footer-->
        <?php  require_once(Yii::app()->basePath . '/views/layouts/new-front-footer.php');?>
    </div>

    <!-- Popup contact form -->
    

    <!-- JS -->

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/new/js/jquery-2.1.4.min.js"></script>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/new/js/mfn.menu.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/new/js/jquery.plugins.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/new/js/jquery.jplayer.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/new/js/animations/animations.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/new/js/email.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/front/new/js/scripts.js"></script>

    <script>
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "<?php echo Yii::app()->request->baseUrl; ?>/images/logo-retina.png").width(retinaLogoW).height(retinaLogoH)
            }
        });
    </script>

</body>

</html>