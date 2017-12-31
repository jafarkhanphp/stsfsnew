<!DOCTYPE html>
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
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/css/theme_green.css" type="text/css" id="skin_color">
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
					<div class="navigation-toggler">
						<i class="clip-chevron-left"></i>
						<i class="clip-chevron-right"></i>
					</div>
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
										$siteTitle=Settings::model()->getSettingByName('mobile1');
										?>
										<a href="#" id="username" data-type="text" data-pk="<?php echo $siteTitle['id'];?>" data-placeholder="Required" >
											<?php echo $siteTitle['setting_value'];?>
										</a></td>
									</tr>
									<tr>
										<td>Phone Number</td>
										<td><?php $site_phone=Settings::model()->getSettingByName('phone');?>
                                        <a href="#" id="site_phone" data-type="text" data-pk="<?php echo $site_phone['id'];?>" data-placeholder="Required" >
											<?php echo $site_phone['setting_value'];?>
										</a></td>
									</tr>
									<tr>
										<td>Email Id</td>
										<td><?php $site_email=Settings::model()->getSettingByName('email');?>
                                        <a href="#" id="site_email" data-type="text" data-pk="<?php echo $site_email['id'];?>" data-placeholder="Required" >
											<?php echo $site_email['setting_value'];?>
										</a></td>
									</tr>
                                    <tr>
										<td>Handling Charges</td>
										<td><?php $servicetax=Settings::model()->getSettingByName('service_charge');?>
                                        <a href="#" id="servicetax" data-type="text" data-pk="<?php echo $servicetax['id'];?>" data-placeholder="Required" >
											<?php echo $servicetax['setting_value'];?>
										</a>%</td>
									</tr>
                                    
                                    
                                    <tr>
										<td>TDS</td>
										<td><?php $tds=Settings::model()->getSettingByName('tds');?>
                                        <a href="#" id="tds" data-type="text" data-pk="<?php echo $tds['id'];?>" data-placeholder="Required" >
											<?php echo $tds['setting_value'];?>
										</a>%</td>
									</tr>
                                    
									<tr>
										<td>Twitter</td>
										<td><?php $twitter=Settings::model()->getSettingByName('twitter');?>
                                        <a href="#" id="twitter" data-type="text" data-pk="<?php echo $twitter['id'];?>" data-placeholder="Required" >
											<?php echo $twitter['setting_value'];?>
										</a></td>
									</tr>
									<tr>
										<td>Facebook</td>
										<td><?php $facebook=Settings::model()->getSettingByName('facebook');?>
                                        <a href="#" id="facebook" data-type="text" data-pk="<?php echo $facebook['id'];?>" data-placeholder="Required" >
											<?php echo $facebook['setting_value'];?>
										</a></td>
									</tr>
                                    <tr>
										<td>Youtube</td>
										<td><?php $youtube=Settings::model()->getSettingByName('youtube');?>
                                        <a href="#" id="youtube" data-type="text" data-pk="<?php echo $youtube['id'];?>" data-placeholder="Required" >
											<?php echo $youtube['setting_value'];?>
										</a></td>
									</tr>
                                    <tr>
										<td>Goole+</td>
										<td><?php $googleplus=Settings::model()->getSettingByName('googleplus');?>
                                        <a href="#" id="googleplus" data-type="text" data-pk="<?php echo $googleplus['id'];?>" data-placeholder="Required" >
											<?php echo $googleplus['setting_value'];?>
										</a></td>
									</tr>
                                    <tr>
										<td>Copy Right</td>
										<td><?php $copyright=Settings::model()->getSettingByName('copyright');?>
                                        <a href="#" id="copyright" data-type="text" data-pk="<?php echo $copyright['id'];?>" data-placeholder="Required" >
											<?php echo $copyright['setting_value'];?>
										</a></td>
									</tr>
                                    <tr>
										<td>Address</td>
										<td><?php $address=Settings::model()->getSettingByName('address');?>
                                        <a href="#" id="address1" data-type="text" data-pk="<?php echo $address['id'];?>" data-placeholder="Required" >
											<?php echo $address['setting_value'];?>
										</a></td>
									</tr>
                                   <?php /*?> <tr>
										<td>BV Rate</td>
										<td><?php $bv_rate=Settings::model()->getSettingByName('bv_rate');?>
                                        <a href="#" id="bv_rate" data-type="text" data-pk="<?php echo $bv_rate['id'];?>" data-placeholder="Required" >
											<?php echo $bv_rate['setting_value'];?>
										</a></td>
									</tr>
                                    <tr>
										<td>Caping 25 BV</td>
										<td><?php $caping25=Settings::model()->getSettingByName('caping_25bv');?>
                                        <a href="#" id="caping25" data-type="text" data-pk="<?php echo $caping25['id'];?>" data-placeholder="Required" >
											<?php echo $caping25['setting_value'];?>
										</a></td>
									</tr> 
                                    <tr>
										<td>Caping 50 BV</td>
										<td><?php $caping_50bv=Settings::model()->getSettingByName('caping_50bv');?>
                                        <a href="#" id="caping_50bv" data-type="text" data-pk="<?php echo $caping_50bv['id'];?>" data-placeholder="Required" >
											<?php echo $caping_50bv['setting_value'];?>
										</a></td>
									</tr>
                                    
                                     <tr>
										<td>Caping 100 BV</td>
										<td><?php $caping_100bv=Settings::model()->getSettingByName('caping_100bv');?>
                                        <a href="#" id="caping_100bv" data-type="text" data-pk="<?php echo $caping_100bv['id'];?>" data-placeholder="Required" >
											<?php echo $caping_100bv['setting_value'];?>
										</a></td>
									</tr>
                                    
                                    <tr>
										<td>Reward Caping</td>
										<td><?php $reward_caping_bv=Settings::model()->getSettingByName('reward_caping_bv');?>
                                        <a href="#" id="reward_caping_bv" data-type="text" data-pk="<?php echo $reward_caping_bv['id'];?>" data-placeholder="Required" >
											<?php echo $reward_caping_bv['setting_value'];?>
										</a></td>
									</tr><?php */?>
                                    
									
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
	
					 $('#site_phone').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter Phone Number',
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
					 $('#bv_rate').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter BV Rate',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   if ($.isNumeric(value) == '') {
										return 'Only numbers are allowed';
									}
								}
   					 });
					 $('#address1').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter address',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
										//return 'Only numbers are allowed';
									
								}
   					 });
					 $('#tds').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter TDS',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   if ($.isNumeric(value) == '') {
										return 'Only numbers are allowed';
									}
								}
   					 });
					  $('#processing').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter 	Processing Fee',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   if ($.isNumeric(value) == '') {
										return 'Only numbers are allowed';
									}
								}
   					 }); 
					 
					 $('#caping25').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter Caping 25BV',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   if ($.isNumeric(value) == '') {
										return 'Only numbers are allowed';
									}
								}
   					 });
					 
					  $('#caping_50bv').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter Caping 50BV',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   if ($.isNumeric(value) == '') {
										return 'Only numbers are allowed';
									}
								}
   					 }); 
					 
					  $('#caping_100bv').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter Caping 100BV',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   if ($.isNumeric(value) == '') {
										return 'Only numbers are allowed';
									}
								}
   					 });
					 
					 $('#reward_caping_bv').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter Caping 100BV',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   if ($.isNumeric(value) == '') {
										return 'Only numbers are allowed';
									}
								}
   					 });
					  
					 
					 
					  $('#service_tax_reg').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter 	Service Tax Registration',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   
								}
   					 });
					 
					  $('#pair_amount').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter 	Pair Amount',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   if ($.isNumeric(value) == '') {
										return 'Only numbers are allowed';
									}
								}
   					 });
					 
					 $('#generate_payout_days').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter 	Closing Days',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   if ($.isNumeric(value) == '') {
										return 'Only numbers are allowed';
									}
								}
   					 });
					 
					 
					  $('#meta_title').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter Meta Title',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   
								}
   					 });
					  $('#meta_description').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter Meta Description',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   
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
					 
					 
					 $('#twitter').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter Twitter Url',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   
								}
   					 });
					 
					 
					 $('#facebook').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter Facebook Url',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   
								}
   					 });
					 
					 $('#youtube').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter Youtube Url',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   
								}
   					 });
					 
					  $('#googleplus').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter gologle+ Url',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   
								}
   					 });
					 
					 
					 $('#copyright').editable({
						       type: 'text',
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/settings/profile',
        						title: 'Enter copy right ',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								   
								}
   					 });
					 
					 
				
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>