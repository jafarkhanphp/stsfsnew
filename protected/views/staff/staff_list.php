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
								<li>
									<i class="fa fa-dashboard"></i>
                                    <?php echo CHtml::link('<span class="title">Dashboard</span><span class="selected"></span>',array('user/dashboard'), array('class'=>"")); ?>
								</li>
								<li class="active">
									<?php echo CHtml::link('<span class="title">Staff List</span><span class="selected"></span>',array('staff/staff_list'), array('class'=>"")); ?>
								</li>
								
							</ol>
							<br>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
                    
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
											<?php  $this->renderPartial('staff_search',array( 'model'=>$model,)); ?>
                                            <thead>
												<tr>
													<th><?php echo CHtml::encode($model->getAttributeLabel('name')); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('email')); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('mobile')); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('basic_sallery')); ?></th>
                                                    <th><?php echo CHtml::encode('Login Detail (User/Pass)'); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('created')); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('status')); ?></th>
                                                   <th>Action</th>
												</tr>
											</thead>
                                             <?php $this->widget('zii.widgets.CListView', array(
													'dataProvider'=>$dataProvider,
													'itemView'=>'_staff_view',
													'enableSorting'=>1,'sortableAttributes'=>array('name','basic_sallery', 
														),
													)); 
											?>
                                          <tr>
													<th><?php echo CHtml::encode($model->getAttributeLabel('name')); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('email')); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('mobile')); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('basic_sallery')); ?></th>
                                                    <th><?php echo CHtml::encode('Login Detail (User/Pass)'); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('created')); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('status')); ?></th>
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
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/user/Status',
                type: "POST",
                data: {Id: Id},  
                success: function(data){
					
                    if(data!='error'){
						//alert(data);
						var yesno= data=='0' ? '<a href="#" title="Active"  class="btn btn-xs btn-green  tooltips" data-placement="top" oldtitle="Active" id="statusId+Id" onclick="status('+Id+');"><i class="glyphicon glyphicon-ok-sign"></i></a>': '<a href="#" title="Inactive"  class="btn btn-xs btn-red  tooltips" data-placement="top" oldtitle="Inactive" id="statusId+Id" onclick="status('+Id+');"><i class="glyphicon glyphicon-remove-circle"></i></a>';
						$("#statID"+Id).empty();
                       $("#statID"+Id).append(yesno);
						$("#loader").hide();
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
		<script>
			jQuery(document).ready(function() {
				Main.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>


