<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<head>
		<title>Single Leg Network : <?php echo CHtml::encode($this->pageTitle); ?></title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
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
		<!--[if IE 7]>
			<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
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
				<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/qtip/tipped.css">
				<!-- jQuery FIRST i.e. before qTip (and all other scripts too usually) -->
				<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jQuery-lib/2.0.3/jquery.min.js"></script>
				<!-- Include either the minifed or production version, NOT both!! -->
				<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/qtip/spinners.min.js"></script>
				<!-- Optional: imagesLoaded script to better support images inside your tooltips -->
				<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/qtip/tipped.js"></script>
				<script type='text/javascript'>
					//By creating tooltips after DOM load we make sure that referenced elements are available.
					jQuery(document).ready(function($) {
						$('.tooltip-from-element1').each(function() { var selector = '#' + $(this).data('tooltip-id'); Tipped.create(this, $(selector)[0]);  });
						$('.tooltip-from-element2').each(function() { var selector = '#' + $(this).data('tooltip-id'); Tipped.create(this, $(selector)[0]);  });
						$('.tooltip-from-element3').each(function() { var selector = '#' + $(this).data('tooltip-id'); Tipped.create(this, $(selector)[0]);  });
						$('.tooltip-from-element4').each(function() { var selector = '#' + $(this).data('tooltip-id'); Tipped.create(this, $(selector)[0]);  });
					});
				</script>
				<div class="container"> 
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12"> 
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li> <i class="clip-home-3"></i> <a href="#">Dashboard</a> </li>
								<li class="active">Single Leg Network</li>
							</ol>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12 space20" align="center">
							
							<?php 
								$userID = Yii::app()->user->id;
											if (@$_GET[ 'id' ] != '' ) {
												$firstNode = @$_GET[ 'id' ];
											} else {
												$result = Yii::app()->db->createCommand( 'SELECT User.usercode, User.user_type  FROM user AS User  					WHERE User.id ="' . $userID . '"' )->queryRow();
												if ( $result[ 'user_type' ] == 0 || $result[ 'user_type' ] == 1 || $result[ 'user_type' ] == 3 ) {
													$checkUser = Staff::model()->getRIDById( $result[ 'usercode' ] );
													if ( $checkUser == 0 ) {
														$firstNode = '10010001';
													} else {
														$firstNode = $checkUser;
													}
												} else if ( $result[ 'user_type' ] == 2 ) {
													$firstNode = $result[ 'usercode' ];
												}
											}
								$result1=Yii::app()->db->createCommand("SELECT steppools.total_count , steppools.position_member, 
								registrations.Rid, registrations.FirstName, registrations.Sex, registrations.Image
  FROM  steppools left join registrations on registrations.Rid=steppools.Rid WHERE steppools.Rid > '$firstNode' order by steppools.Rid asc limit 4")->queryAll();
								//echo "<pre>";print_r($result1);
							?>     
						<table border="0" >
						<?php $sn=1;
						foreach($result1 as $info){	?>
						<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td align="center"><div  style="text-align:center" >
						<span class='tooltip-from-element<?php echo $sn;?>' data-tooltip-id='tooltip-example-<?php echo $sn;?>'>
						<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/male.png", $this->pageTitle=Yii::app()->name, 
							array('align'=>'middle', 'width'=>'70', 'height'=>"70")); ?>
						</span> 
						</div>
						<div style="text-align:center">
						<?php 
						$nodeId=$info['Rid'];
						echo CHtml::link($nodeId,array('steppools/single_leg_network?id='.$nodeId), array('class'=>"")); 
						echo '<br>';
						echo $info['FirstName'];
						?>
						</div>
						<div id='tooltip-example-<?php echo $sn;?>' style='display:none;'>
						<table border="0"  width="100%"  >
						<tr>
						<td colspan="3">
						<?php echo $info['FirstName']; ?> (<?php echo $info['Rid']; ?>) 
						</td>
						</tr>
						<tr>
						<td>Position Number:</td>
						<td><?php echo $info['position_member'];?></td>
						<td rowspan="6"></td>
						</tr>
						<tr>
						<td>Below total Member:</td>
						<td><?php echo $info['total_count'];?></td>
						</tr>
						
						</table>
						</div>
						</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						</tr>
						<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td align="center"><div style="text-align:center; margin-top:-3px">
						<?php if($sn <4){
						echo CHtml::image(Yii::app()->request->baseUrl."/images/downline.png",$this->pageTitle=Yii::app()->name, array('class'=>"", 'align'=>'middle', 'width'=>'5', 'height'=>"40"));
						}?>
						</div></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						</tr>
						<?php $sn++;}?>
						</table>
						</div>
						</div>
						<!-- end: PAGE CONTENT--> 
						</div>
						
						<!-- end: PAGE --> 
						</div>
						</div>
						<!-- end: MAIN CONTAINER --> 
						<!-- start: FOOTER -->
						<?php  require_once(Yii::app()->basePath . '/views/layouts/fotter.php');?>
						<!-- end: FOOTER --> 
						<!-- start: RIGHT SIDEBAR --> 
						<!-- start: MAIN JAVASCRIPTS --> 
						<!--[if lt IE 9]>
						<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/respond.min.js"></script>
						<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/excanvas.min.js"></script>
						<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jQuery-lib/1.10.2/jquery.min.js"></script>
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
						<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script> 
						<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/autosize/jquery.autosize.min.js"></script> 
						<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/select2/select2.min.js"></script> 
						<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script> 
						<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery-maskmoney/jquery.maskMoney.js"></script> 
						<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-daterangepicker/moment.min.js"></script> 
						<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-colorpicker/js/commits.js"></script> 
						<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script> 
						<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/summernote/build/summernote.min.js"></script> 
						<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY --> 
						<script>
						jQuery(document).ready(function() {
						Main.init();
						//FormElements.init();
						});
						</script>
						</body>
						<!-- end: BODY -->
						<!-- end: MAIN JAVASCRIPTS -->
						</body>
						<!-- end: BODY -->
						</html>						