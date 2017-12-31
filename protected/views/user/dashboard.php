<html lang="en" class="no-js">

<head>

<title><?php echo CHtml::encode($this->pageTitle); ?></title>

<!-- start: META -->

<meta charset="utf-8" />

<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

<meta name="apple-mobile-web-app-capable" content="yes">

<meta name="apple-mobile-web-app-status-bar-style" content="black">

<meta content="" name="description" />

<meta content="" name="author" />

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/fonts/style.css">

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/css/main.css">

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/css/main-responsive.css">

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/iCheck/skins/all.css">

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/css/theme_dark.css" type="text/css" id="skin_color">

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/css/print.css" type="text/css" media="print"/>





		<![endif]-->

<!-- end: MAIN CSS -->

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">

<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->

<link rel="shortcut icon" href="favicon.ico" />

</head>

<!-- end: HEAD -->

<!-- start: BODY -->

<body>

<!-- start: HEADER -->

<div class="navbar navbar-inverse navbar-fixed-top"> 

  <!-- start: TOP NAVIGATION CONTAINER -->

  <div class="container">

    <?php  require_once(Yii::app()->basePath . '/views/layouts/topbar.php');?>

  </div>

  <!-- end: TOP NAVIGATION CONTAINER --> 

</div>

<!-- end: HEADER --> 

<!-- start: MAIN CONTAINER -->

<div class="main-container">

  <div class="navbar-content"> 

    <!-- start: SIDEBAR -->

    <div class="main-navigation navbar-collapse collapse"> 

      <!-- start: MAIN MENU TOGGLER BUTTON -->

      <div class="navigation-toggler"> <i class="clip-chevron-left"></i> <i class="clip-chevron-right"></i> </div>

      <!-- end: MAIN MENU TOGGLER BUTTON --> 

      <!-- start: MAIN NAVIGATION MENU -->

      <?php  require_once(Yii::app()->basePath . '/views/layouts/menu.php');?>

      <!-- end: MAIN NAVIGATION MENU --> 

    </div>

    <!-- end: SIDEBAR --> 

  </div>

  <!-- start: PAGE -->

  <div class="main-content"> 

    <!-- end: SPANEL CONFIGURATION MODAL FORM -->

    <div class="container"> 

      <!-- start: PAGE HEADER -->

      <div class="row">

        <div class="col-sm-12"> 

          <!-- start: PAGE TITLE & BREADCRUMB -->

          <ol class="breadcrumb">

            <li> <i class="clip-home-3"></i> <a href="#">

              <?php //echo '------>'.Yii::app()->user->user_type;  ?>

              Home </a> </li>

            <li class="active"> Dashboard </li>

          </ol>

          <div class="page-header">

            <h1>Dashboard <small>overview &amp; stats </small></h1>

          </div>

          <!-- end: PAGE TITLE & BREADCRUMB --> 

        </div>

      </div>

      <!-- end: PAGE HEADER --> 

      <!-- start: PAGE CONTENT -->

      

      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading" style=" text-align:center"><i class="fa clip-history"></i> Autosharing Turnover</div>
            <div class="panel-body">
             <h4 align="center"> 00</h4>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading" style=" text-align:center"><i class="fa clip-user-5"></i> My Level</div>
            <div class="panel-body">
             <h4 align="center"> 00</h4>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading" style=" text-align:center"><i class="fa clip-users-2"></i> My Direct Sponser</div>
            <div class="panel-body">
             <h4 align="center"> 00</h4>
            </div>
          </div>
        </div>
      </div>
        <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading" style=" text-align:center"><i class="fa clip-stats"></i> Business Turn Over</div>
            <div class="panel-body">
             <h4 align="center"><span style="text-align:left;"> Left =  00</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="text-align:right;"> Right = 00</span></h4>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading" style=" text-align:center"><i class="fa fa-briefcase"></i> E- Wallet Amount</div>
            <div class="panel-body">
             <h4 align="center"><i class="fa fa-rupee"></i> 00</h4>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading" style=" text-align:center"><i class="fa fa-mail-forward"></i> Withdrawl Amount</div>
            <div class="panel-body">
             <h4 align="center"><i class="fa fa-rupee"></i> 00</h4>
            </div>
          </div>
        </div>
      </div>

      

      <!-- end: PAGE CONTENT--> 

    </div>

  </div>

  <!-- end: PAGE --> 

</div>

<!-- end: MAIN CONTAINER --> 

<!-- start: FOOTER -->

<?php  require_once(Yii::app()->basePath . '/views/layouts/fotter.php');?>

<!-- end: FOOTER --> 

<!-- start: RIGHT SIDEBAR --> 



<!-- start: MAIN JAVASCRIPTS --> 

<!--[if lt IE 9]>

		<script src="assets/plugins/respond.min.js"></script>

		<script src="assets/plugins/excanvas.min.js"></script>

		<script type="text/javascript" src="assets/plugins/jQuery-lib/1.10.2/jquery.min.js"></script>

		<![endif]--> 

<!--[if gte IE 9]><!-->

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jQuery-lib/2.0.3/jquery.min.js"></script>

		<!--<![endif]--> 

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script> 

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap/js/bootstrap.min.js"></script> 

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script> 

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/blockUI/jquery.blockUI.js"></script> 

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/iCheck/jquery.icheck.min.js"></script> 

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script> 

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script> 

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/less/less-1.5.0.min.js"></script> 

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery-cookie/jquery.cookie.js"></script> 

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script> 

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/js/main.js"></script> 

<!-- end: MAIN JAVASCRIPTS --> 

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY --> 

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/flot/jquery.flot.js"></script> 

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/flot/jquery.flot.pie.js"></script> 

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script> 

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/fullcalendar/fullcalendar/fullcalendar.js"></script> 

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/js/dashboard.js"></script>







<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jQuery-lib/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/blockUI/jquery.blockUI.js"></script>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/iCheck/jquery.icheck.min.js"></script>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/less/less-1.5.0.min.js"></script>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery-cookie/jquery.cookie.js"></script>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/js/main.js"></script>

		<!-- end: MAIN JAVASCRIPTS -->

		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/flot/jquery.flot.js"></script>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/flot/jquery.flot.pie.js"></script>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/flot/jquery.flot.resize.min.js"></script>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery.sparkline/jquery.sparkline.js"></script>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/fullcalendar/fullcalendar/fullcalendar.js"></script>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/js/index.js"></script> 

<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY --> 

<script>

			jQuery(document).ready(function() {

				Main.init();

				Index.init();

			});

		</script>

</body>

<!-- end: BODY -->

</html>

