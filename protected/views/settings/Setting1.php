<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
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
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/fonts/style.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/css/main.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/css/main-responsive.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/css/theme_light.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/css/print.css" type="text/css" media="print"/>
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/select2/select2.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/x-editable/css/bootstrap-editable.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/typeaheadjs/lib/typeahead.js-bootstrap.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery-address/address.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5-0.0.2.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/wysiwyg-color.css">
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
				<div class="navbar-header">
					<!-- start: RESPONSIVE MENU TOGGLER -->
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="clip-list-2"></span>
					</button>
					<!-- end: RESPONSIVE MENU TOGGLER -->
					<!-- start: LOGO -->
					<a class="navbar-brand" href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a>
					<!-- end: LOGO -->
				</div>
				<div class="navbar-tools">
					<!-- start: TOP NAVIGATION MENU -->
					<ul class="nav navbar-right">
						<li class="dropdown current-user">
							<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
								<?php 
								$sql='SELECT Registration.name,Registration.Image, Registration.Rid FROM user AS User LEFT JOIN registration AS Registration ON Registration.Rid = User.usercode WHERE User.status=0  and User.id='.Yii::app()->user->Id;
							  $command=Yii::app()->db->createCommand($sql);
							  $result=$command->queryRow();
							   $photo=$result['Image'];
							   if(empty($result['Image'])){							   
									echo CHtml::image(Yii::app()->request->baseUrl."/images/men-green.png",'', array('class'=>"circle-img",  'height'=>'30'));
							   } else {
								   echo CHtml::image(Yii::app()->request->baseUrl."/images/members/".$photo,'', array('class'=>"circle-img",  'height'=>'30'));
							   }
							   ?>
								<span class="username"><?php echo substr($result['name'], 0, 7);?></span>
								<i class="clip-chevron-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li><?php echo CHtml::link('<i class="clip-user-2"></i>&nbsp;My Profile',array('registration/profile'), array('class'=>"")); ?>
								</li>
								<li class="divider"></li>
								<li><?php echo CHtml::link('<i class="clip-settings "></i> &nbsp;Change Password',array('user/change_password'), array('class'=>"")); ?>
								</li>
                                <li><?php echo CHtml::link('<i class="clip-exit"></i> &nbsp;Log Out',array('user/logout'), array('class'=>"")); ?>
								</li>
							</ul>
						</li>
						<!-- end: USER DROPDOWN -->
						<!-- start: PAGE SIDEBAR TOGGLE -->
						
						<!-- end: PAGE SIDEBAR TOGGLE -->
					</ul>
					<!-- end: TOP NAVIGATION MENU -->
				</div>
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
					<div class="navigation-toggler">
						<i class="clip-chevron-left"></i>
						<i class="clip-chevron-right"></i>
					</div>
					<!-- end: MAIN MENU TOGGLER BUTTON -->
					<!-- start: MAIN NAVIGATION MENU -->
					<?php
					if(Yii::app()->user->user_type==0){ 
						require_once(Yii::app()->basePath . '/views/layouts/admin-sidebar.php');
					} else if(Yii::app()->user->user_type==1){ 
						require_once(Yii::app()->basePath . '/views/layouts/member-sidebar.php');
					} else {
					 echo 'Staff';
				 };
				?>
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
							<ol class="breadcrumb">
								<li>
									<i class="clip-home-3"></i>
									<a href="#">Dashboard</a>
								</li>
								<li class="active">Setting </li>
								
							</ol>
							<br />
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<table id="user" class="table table-bordered table-striped" style="clear: both">
								<tbody>
									<tr>
										<td class="column-left">Mobile</td>
										<td class="column-right">
                                        <?php 
										$siteTitle=Settings::model()->getSettingByName('site_mobile');
										?>
										<a href="#" id="username" data-type="text" data-pk="<?php echo $siteTitle['id'];?>" data-placeholder="Required" >
											<?php echo $siteTitle['settingvalue'];?>
										</a></td>
									</tr>
									<tr>
										<td>Phone Number</td>
										<td><?php $site_phone=Settings::model()->getSettingByName('site_phone');?>
                                        <a href="#" id="site_phone" data-type="text" data-pk="<?php echo $site_phone['id'];?>" data-placeholder="Required" >
											<?php echo $site_phone['settingvalue'];?>
										</a></td>
									</tr>
									<tr>
										<td>Email Id</td>
										<td><?php $site_email=Settings::model()->getSettingByName('site_email');?>
                                        <a href="#" id="site_email" data-type="text" data-pk="<?php echo $site_email['id'];?>" data-placeholder="Required" >
											<?php echo $site_email['settingvalue'];?>
										</a></td>
									</tr>
                                    <tr>
										<td>Service Tax</td>
										<td><?php $servicetax=Settings::model()->getSettingByName('servicetax');?>
                                        <a href="#" id="servicetax" data-type="text" data-pk="<?php echo $servicetax['id'];?>" data-placeholder="Required" >
											<?php echo $servicetax['settingvalue'];?>
										</a>%</td>
									</tr>
                                    <tr>
										<td>Education Tax</td>
										<td><?php $education_tax=Settings::model()->getSettingByName('education_tax');?>
                                        <a href="#" id="education_tax" data-type="text" data-pk="<?php echo $education_tax['id'];?>" data-placeholder="Required" >
											<?php echo $education_tax['settingvalue'];?>
										</a>%</td>
									</tr>
                                    <tr>
										<td>Higher Education Tax</td>
										<td><?php $higher_education_cess=Settings::model()->getSettingByName('higher_education_cess');?>
                                        <a href="#" id="higher_education_cess" data-type="text" data-pk="<?php echo $higher_education_cess['id'];?>" data-placeholder="Required" >
											<?php echo $higher_education_cess['settingvalue'];?>
										</a>%</td>
									</tr>
                                    <tr>
										<td>TDS</td>
										<td><?php $tds=Settings::model()->getSettingByName('tds');?>
                                        <a href="#" id="tds" data-type="text" data-pk="<?php echo $tds['id'];?>" data-placeholder="Required" >
											<?php echo $tds['settingvalue'];?>
										</a>%</td>
									</tr>
                                    <tr>
										<td>Processing Fees</td>
										<td><?php $processing=Settings::model()->getSettingByName('processing');?>
                                        <a href="#" id="processing" data-type="text" data-pk="<?php echo $processing['id'];?>" data-placeholder="Required" >
											<?php echo $processing['settingvalue'];?>
										</a>%</td>
									</tr>
                                    <tr>
										<td>Abatment Fees</td>
										<td><?php $abatment=Settings::model()->getSettingByName('abatment');?>
                                        <a href="#" id="abatment" data-type="text" data-pk="<?php echo $abatment['id'];?>" data-placeholder="Required" >
											<?php echo $abatment['settingvalue'];?>
										</a>%</td>
									</tr>
                                     <tr>
										<td>Service Tax Registration</td>
										<td><?php $service_tax_reg=Settings::model()->getSettingByName('service_tax_reg');?>
                                        <a href="#" id="service_tax_reg" data-type="text" data-pk="<?php echo $service_tax_reg['id'];?>" data-placeholder="Required" >
											<?php echo $service_tax_reg['settingvalue'];?>
										</a></td>
									</tr>
                                     <tr>
										<td>Pair Amount</td>
										<td><?php $pair_amount=Settings::model()->getSettingByName('pair_amount');?>
                                        <a href="#" id="pair_amount" data-type="text" data-pk="<?php echo $pair_amount['id'];?>" data-placeholder="Required" >
											<?php echo $pair_amount['settingvalue'];?>
										</a></td>
									</tr>
                                    <tr>
										<td>Closing days</td>
										<td><?php $generate_payout_days=Settings::model()->getSettingByName('generate_payout_days');?>
                                        <a href="#" id="generate_payout_days" data-type="text" data-pk="<?php echo $generate_payout_days['id'];?>" data-placeholder="Required" >
											<?php echo $generate_payout_days['settingvalue'];?>
										</a></td>
									</tr>
                                    <tr>
										<td>Meta Title</td>
										<td><?php $meta_title=Settings::model()->getSettingByName('meta_title');?>
                                        <a href="#" id="meta_title" data-type="textarea" data-pk="<?php echo $meta_title['id'];?>"  >
											<?php echo $meta_title['settingvalue'];?></a></td>
									</tr>
                                    <tr>
										<td>Meta Description  </td>
										<td><?php $meta_description=Settings::model()->getSettingByName('meta_description');?>
                                        <a href="#" id="meta_description" data-type="textarea" data-pk="<?php echo $meta_description['id'];?>"  >
											<?php echo $meta_description['settingvalue'];?></a></td>
									</tr>
                                     <tr>
										<td>Meta Keywords  </td>
										<td><?php $keyword=Settings::model()->getSettingByName('keyword');?>
                                        <a href="#" id="keyword" data-type="textarea" data-pk="<?php echo $keyword['id'];?>"  >
											<?php echo $keyword['settingvalue'];?></a></td>
									</tr>
                                    
									<tr>
										<td>Twitter</td>
										<td><?php $twitter=Settings::model()->getSettingByName('twitter');?>
                                        <a href="#" id="twitter" data-type="text" data-pk="<?php echo $twitter['id'];?>" data-placeholder="Required" >
											<?php echo $twitter['settingvalue'];?>
										</a></td>
									</tr>
									<tr>
										<td>Facebook</td>
										<td><?php $facebook=Settings::model()->getSettingByName('facebook');?>
                                        <a href="#" id="facebook" data-type="text" data-pk="<?php echo $facebook['id'];?>" data-placeholder="Required" >
											<?php echo $facebook['settingvalue'];?>
										</a></td>
									</tr>
                                    <tr>
										<td>Linkdin</td>
										<td><?php $linkedin=Settings::model()->getSettingByName('linkedin');?>
                                        <a href="#" id="linkedin" data-type="text" data-pk="<?php echo $linkedin['id'];?>" data-placeholder="Required" >
											<?php echo $linkedin['settingvalue'];?>
										</a></td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
					
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		<div class="footer clearfix">
			<div class="footer-inner">
				2015 &copy;Developed By: Web Era.
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
		</div>
		<!-- end: FOOTER -->
		<!-- start: RIGHT SIDEBAR -->
		
		<!-- end: RIGHT SIDEBAR -->
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
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery-mockjax/jquery.mockjax.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/x-editable/js/bootstrap-editable.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
			});
		</script>
		<script>
			jQuery(document).ready(function() {
				$.fn.editable.defaults.mode = 'popup';
				    $('#username').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter Mobile Number',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								    if ($.isNumeric(value) == '') {
										return 'Only numbers are allowed';
									}
								}
    });
					$('#site_email').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter Email',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								}
    });
					$('#servicetax').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter servicetax',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   if ($.isNumeric(value) == '') {
										return 'Only numbers are allowed';
									}
								}
   					 });
					 $('#keyword').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter Meta Keyword',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   
								}
   					 });
				
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>