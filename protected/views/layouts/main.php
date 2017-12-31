<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="author" content="SuggeElson" />
    <meta name="" />
    <meta name="keywords" content="" />
    <meta name="application-name" content="Dr Bhim Ram Ambedkar Sakhsharta Mission" />

    <!-- Mobile Specific Metas -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Le styles -->

    <!-- Use new way for google web fonts 

    http://www.smashingmagazine.com/2012/07/11/avoiding-faux-weights-styles-google-web-fonts -->

    <!-- Headings -->

    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css' />  -->

    <!-- Text -->

    <!-- <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' /> -->

    <!--[if lt IE 9]>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />

    <![endif]-->

    <!-- Core stylesheets do not remove -->

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/supr-theme/jquery.ui.supr.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/icons.css" rel="stylesheet" type="text/css" />

    <!-- Plugins stylesheets -->

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/misc/qtip/jquery.qtip.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/misc/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/misc/search/tipuesearch.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/forms/uniform/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/misc/qtip/jquery.qtip.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/forms/uniform/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/tables/dataTables/jquery.dataTables.css" type="text/css" rel="stylesheet" />

    <!-- Main stylesheets -->

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" rel="stylesheet" type="text/css" />

    <!-- Custom stylesheets ( Put your own changes here ) -->

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" rel="stylesheet" type="text/css" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->

    <!--[if lt IE 9]>

      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

    <![endif]-->

    <!-- Le fav and touch icons -->

    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-57-precomposed.png" />
    <script type="text/javascript">
        //adding load class to body and hide page
        document.documentElement.className+= 'loadstate';
    </script>
    </head>

    <body>

<!-- loading animation -->

<div id="qLoverlay"></div>
<div id="qLbar"></div>
<div id="header">
     <div class="navbar">
  <div class="navbar-inner">
       <div class="container-fluid"> <a class="brand" href="#"><?php echo CHtml::image(Yii::app()->request->baseUrl."/images/logo.png",$this->pageTitle=Yii::app()->name, array('width'=>'40%', 'height'=>'25%')); ?></a>
    <div class="nav-no-collapse">
         <ul class="nav">
      <li class="active">
           <?php
			if(Yii::app()->user->user_type==0){
				 echo CHtml::link('<span class="icon16 icomoon-icon-screen-2"></span>Dashboard',array('site/dashboard'), array('class'=>""));
			} else {
				$sql='SELECT Franchise.CName,Franchise.Photo FROM user AS User LEFT JOIN franchise AS Franchise ON Franchise.Code = User.usercode WHERE User.user_type=1  and User.id='.Yii::app()->user->Id;
			  $command=Yii::app()->db->createCommand($sql);
			  $result=$command->queryRow();
			 echo CHtml::link('<span class="icon16 icomoon-icon-screen-2"></span>'.$result['CName'],array('site/Centre_Dashboard'), array('class'=>""));
			 /* print_r('<pre>');
			  print_r($result);
			  print_r('</pre>');*/
			}

			 

			  ?>
          </li>
      <?php if(Yii::app()->user->user_type==0){ ?>
      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="icon16 icomoon-icon-cog"></span> Settings <b class="caret"></b> </a>
           <ul class="dropdown-menu">
        <li class="menu">
             <ul>
          <li> <a href="#"><span class="icon16 icomoon-icon-equalizer"></span>Site config</a> </li>
          <li> <a href="#"><span class="icon16 icomoon-icon-wrench"></span>Configration</a> </li>
         </ul>
            </li>
       </ul>
          </li>
      <?php }?>
     </ul>
         <ul class="nav pull-right usernav">
      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="icon16 icomoon-icon-bell-2"></span><span class="notification">3</span> </a>
           <ul class="dropdown-menu">
        <li class="menu">
             <ul class="notif">
          <li class="header"><strong>Notifications</strong> (3) items</li>
          <li> <a href="#"> <span class="icon"><span class="icon16 icomoon-icon-user-3"></span></span> <span class="event">1 User is registred</span> </a> </li>
          <li> <a href="#"> <span class="icon"><span class="icon16 icomoon-icon-comments-4"></span></span> <span class="event">10 student reg in temp</span> </a> </li>
          <li> <a href="#"> <span class="icon"><span class="icon16 icomoon-icon-new-2"></span></span> <span class="event">ATI Center send all data</span> </a> </li>
          <li class="view-all"><a href="#">View all notifications <span class="icon16 icomoon-icon-arrow-right-8"></span></a></li>
         </ul>
            </li>
       </ul>
          </li>
      <li class="dropdown"> <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
       <?php 

			

			if(Yii::app()->user->user_type==0){ 

					$pgotoGraphs='avatar.png';

				} else if(Yii::app()->user->user_type==1){ 

					// if (file_exists(Yii::app()->request->baseUrl."/studen-photo/Franchise/".$result['Photo'])) {
						  if ($result['Photo']!='') {
						     $pgotoGraphs=$result['Photo'];

					 } else { $pgotoGraphs='avatar.png';}

				 } else {

					$pgotoGraphs='';

				 }

			

			echo CHtml::image(Yii::app()->request->baseUrl."/studen-photo/Franchise/".$pgotoGraphs,'', array('class'=>"image")); ?>
       <span class="txt"><?php echo Yii::app()->user->name ?>(
       <?php 

				if(Yii::app()->user->user_type==0){ 

					echo 'Admin';

				} else if(Yii::app()->user->user_type==1){ 

					echo 'Center';

				 } else {

					 echo 'Student';

				 };?>
       )</span> <b class="caret"></b> </a>
           <ul class="dropdown-menu">
        <li class="menu">
             <ul>
          <li> <a href="#"><span class="icon16 icomoon-icon-user-3"></span>Edit profile</a> </li>
          <li> <a href="#"><span class="icon16 silk-icon-happy "></span>Change Password</a> </li>
         </ul>
            </li>
       </ul>
          </li>
      <li><?php echo CHtml::link('<span class="icon16 icomoon-icon-exit"></span> Logout',array('site/logout'), array('class'=>"")); ?></li>
     </ul>
        </div>
    
    <!-- /.nav-collapse --> 
    
   </div>
      </div>
  
  <!-- /navbar-inner --> 
  
 </div>
     
     <!-- /navbar --> 
     
    </div>

<!-- End #header -->

<div id="wrapper"> 
     
     <!--Responsive navigation button-->
     
     <div class="resBtn"> <a href="#"><span class="icon16 minia-icon-list-3"></span></a> </div>
     
     <!--Left Sidebar collapse button-->
     
     <div class="collapseBtn leftbar"> <a href="#" class="tipR" title="Hide Left Sidebar"><span class="icon12 minia-icon-layout"></span></a> </div>
     
     <!--Sidebar background-->
     
     <div id="sidebarbg"></div>
     
     <!--Sidebar content-->
     
     <div id="sidebar">
  <div class="shortcuts">
       <ul>
    <li>
         <?php
			if(Yii::app()->user->user_type==0){
				 echo CHtml::link('<span class="icon24 icomoon-icon-home-8 "></span>',array('site/dashboard'), array('class'=>"tip", 'title'=>"icomoon-icon-home-8"));
			} else {
				$sql='SELECT Franchise.CName,Franchise.Photo FROM user AS User LEFT JOIN franchise AS Franchise ON Franchise.Code = User.usercode WHERE User.user_type=1  and User.id='.Yii::app()->user->Id;
			  $command=Yii::app()->db->createCommand($sql);
			  $result=$command->queryRow();
			  echo CHtml::link('<span class="icon24 icomoon-icon-home-8 "></span>',array('site/Centre_Dashboard'), array('class'=>"tip", 'title'=>"icomoon-icon-home-8"));
		}
	  ?>
        </li>
    <li><a href="#" title="Support section" class="tip"><span class="icon24 icomoon-icon-support"></span></a></li>
   </ul>
      </div>
  
  <!-- End search -->
  
  <?php

			if(Yii::app()->user->user_type==0){ 

					require_once(Yii::app()->basePath . '/views/layouts/admin-sidebar.php');

				} else if(Yii::app()->user->user_type==1){ 

					require_once(Yii::app()->basePath . '/views/layouts/centre-sidebar.php');

				 } else {

					 echo 'Student';

				 };

	

	?>
  
  <!-- End sidenav --> 
  
 </div>
     
     <!-- End #sidebar --> 
     
     <!--Body content-->
     
     <div id="content" class="clearfix"> <?php echo $content; ?> 
  
  <!-- End contentwrapper --> 
  
 </div>
     
     <!-- End #content --> 
     
    </div>

<!-- End #wrapper --> 

<!-- Le javascript

    ================================================== --> 

<!-- Important plugins put in all pages --> 

<script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap/bootstrap.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.cookie.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.mousewheel.js"></script> 

<!-- Charts plugins --> 

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/charts/flot/jquery.flot.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/charts/flot/jquery.flot.grow.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/charts/flot/jquery.flot.pie.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/charts/flot/jquery.flot.resize.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/charts/flot/jquery.flot.tooltip_0.4.4.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/charts/flot/jquery.flot.orderBars.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/charts/sparkline/jquery.sparkline.min.js"></script><!-- Sparkline plugin --> 

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/charts/knob/jquery.knob.js"></script><!-- Circular sliders and stats --> 

<!-- Misc plugins --> 

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/misc/fullcalendar/fullcalendar.min.js"></script><!-- Calendar plugin --> 

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/misc/qtip/jquery.qtip.min.js"></script><!-- Custom tooltip plugin --> 

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/misc/totop/jquery.ui.totop.min.js"></script> <!-- Back to top plugin --> 

<!-- Search plugin --> 

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/misc/search/tipuesearch_set.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/misc/search/tipuesearch_data.js"></script><!-- JSON for searched results --> 

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/misc/search/tipuesearch.js"></script> 

<!-- Form plugins --> 

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/forms/watermark/jquery.watermark.min.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/forms/uniform/jquery.uniform.min.js"></script> 

<!-- Fix plugins --> 

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/fix/ios-fix/ios-orientationchange-fix.js"></script> 

<!-- Important Place before main.js  --> 

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/fix/touch-punch/jquery.ui.touch-punch.min.js"></script><!-- Unable touch for JQueryUI --> 

<!-- Init plugins --> 

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/main.js"></script><!-- Core js functions --> 

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/dashboard.js"></script><!-- Init plugins only for page -->

</body>
</html>
