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
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
<!-- end: MAIN CSS -->
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/select2/select2.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/datepicker/css/datepicker.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/summernote/build/summernote.css">
        
        
         <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css"type="text/css"/>

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-modal/css/bootstrap-modal.css" type="text/css"/>
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
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								
                                 <li> <i class="fa  clip-home"></i> <?php echo CHtml::link('<span class="title">Dashboard</span><span class=""></span>',array('site/dashboard'), array('class'=>"")); ?> </li>
									
                                     <li class="active"><i class="fa fa clip-user"></i> Staff List </li>
							</ol>
							<br>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
                    <div class="col-md-12 space20">
                    <?php 
					  $checkPermission=Yii::app()->session['permissions'];
					//print_r('<pre>');   print_r($checkPermission[0]['adds']); exit;
					if($checkPermission[0]['adds']==0){
						echo CHtml::link('Add Staff <i class="fa fa-plus"></i>',array('staff/create'), array('class'=>"btn btn-orange add-row"));
					}?>
						
										</div>
                                       
						<div class="col-md-12">
							  <?php
								$flashMessages = Yii::app()->user->getFlashes();
								  if ($flashMessages) {
									foreach($flashMessages as $key => $message) {
										echo '<div class="alert alert-' . $key . '"  ><button class="close" data-dismiss="alert">×</button>'. $message . "</div>\n";
									}}
								?>
							<!-- start: RESPONSIVE TABLE PANEL -->
							
                            <div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Staff List <span class="" style="display: none" id="loader"><?php echo CHtml::image(Yii::app()->request->baseUrl."/assets/assets/images/loading.gif",'', array('width'=>"16", 'height'=>"16" , 'alt'=>"")); ?></span>	
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-bordered table-hover" id="sample-table-1">
											<?php  $this->renderPartial('_admin_search',array( 'model'=>$model,)); ?>
                                            <thead>
												<tr>
													<th class="center"><?php echo CHtml::encode($model->getAttributeLabel('name')); ?></th>
													<th><?php echo CHtml::encode($model->getAttributeLabel('mobile')); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('email')); ?></th>
                                                    <th><?php echo CHtml::encode('Username'); ?></th>
                                                    <th><?php echo CHtml::encode('Password'); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('Status')); ?></th>
                                                   <th>Action</th>
												</tr>
											</thead>
                                             <?php $this->widget('zii.widgets.CListView', array(
													'dataProvider'=>$dataProvider,
													'itemView'=>'_admin_view',
													'enableSorting'=>1,'sortableAttributes'=>array('ID',
														),
													)); 
											?>
                                          <tr>
													<th class="center"><?php echo CHtml::encode($model->getAttributeLabel('name')); ?></th>
													<th><?php echo CHtml::encode($model->getAttributeLabel('mobile')); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('email')); ?></th>
                                                    <th><?php echo CHtml::encode('Username'); ?></th>
                                                    <th><?php echo CHtml::encode('Password'); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('Status')); ?></th>
                                                   <th>Action</th>
												</tr>
										</table>
									</div>
								</div>
							</div>
							<!-- end: RESPONSIVE TABLE PANEL -->
						</div>
					</div>
					
					
					
					
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
 
 
        
        <script language="javascript">
		
			 function status(Id) {
				 $("#loader").show();
				 jQuery.ajax({
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/staff/Status',
                type: "POST",
                data: {Id: Id},  
                success: function(data){
                    if(data=='1'){
						 window.location="<?php echo Yii::app()->request->baseUrl;?>/index.php/staff/index";
					} else if(data==3){
						$("#loader").hide();
						alert('Permission Denied');
					}
					else {
						$("#loader").hide();
						alert('Status not update');
					}
                    }
                });
		 }
		 
		 
		 
			  function deleteRecord(Id) {
				  if(!confirm("Are you sure you want to delete the record?")){
					return false;
				}
				 $("#loader").show();
				// return confirm("Are you sure?");
				 jQuery.ajax({
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/Employee/Delete',
                type: "POST",
                data: {id: Id},  
                success: function(data){
					//alert(data);
					//return false ;
                    if(data==1){
						$("#"+Id).hide();
						$("#loader").hide();
					} 
					else if(data==2) {
						$("#loader").hide();
						alert('Record exist in Employee Table');
							}
					else if(data==3) {
					$("#loader").hide();
						alert('Permission Denied');
					}
					else {
						$("#loader").hide();
						alert('Record could not be deleted');
					}
                    }
                });
			 }

		           </script>
		
        
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		<?php  require_once(Yii::app()->basePath . '/views/layouts/fotter.php');?>
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

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/autosize/jquery.autosize.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/select2/select2.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/summernote/build/summernote.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/js/form-elements.js"></script>
        
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets//assets/js/ui-modals.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				UIModals.init();
				FormElements.init();
			});
		</script>
</body>
<!-- end: BODY -->
</html>