<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
<!-- start: HEAD -->

<head>
<title>Edit Package:-<?php echo CHtml::encode($this->pageTitle); ?></title>
<!-- start: META -->
<meta charset="utf-8" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta content="" name="description" />
<meta content="jafarkhanphp@gmail.com" name="author" />
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
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/select2/select2.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/datepicker/css/datepicker.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/summernote/build/summernote.css"></head>
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
            <li><i class="fa clip-home"></i> <?php echo CHtml::link('<span class="title">Dashboard</span><span class="selected"></span>',array('site/index'), array('class'=>"")); ?>
								</li>
            <li><i class="fa clip-stack-empty "> </i><?php echo CHtml::link('<span class="title"> Packages List</span><span class="selected"></span>',array('packages/index'), array('class'=>"")); ?> </li>
            <li class="active"> Edit Package </li>
          </ol>
          <br>
          <!-- end: PAGE TITLE & BREADCRUMB --> 
        </div>
      </div>
 <!-- end: PAGE HEADER --> 
      <!-- start: PAGE CONTENT -->
      <div class="row">
        <div class="col-md-12 space20"><?php 
					$checkPermission=Yii::app()->session['permissions'];
					if($checkPermission[0]['lists']==0){
						 echo CHtml::link('Packages List <i class="fa clip-list-6"></i>',array('packages/index'), array('class'=>"btn btn-orange add-row"));
					}?>
        </div>
        <div class="col-md-12"> 
          <!-- start: RESPONSIVE TABLE PANEL -->
          <div class="col-sm-12">
            <div class="panel panel-default">
             				 <?php
								$flashMessages = Yii::app()->user->getFlashes();
								  if ($flashMessages) {
									foreach($flashMessages as $key => $message) {
										echo '<div class="alert alert-' . $key . '"  ><button class="close" data-dismiss="alert">×</button>'. $message . "</div>\n";
									}}
								?>
              <div class="panel-heading"> <i class="fa fa-external-link-square"></i> Fill Package Details
                <div class="panel-tools"> <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a> <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> </div>
              </div>
              <div class="panel-body">
                <div class="modal-body">
  
 <?php $form=$this->beginWidget('CActiveForm', array('id'=>'Packages',  'enableAjaxValidation'=>false,  'enableClientValidation'=>false, 'htmlOptions' => array('enctype' => 'multipart/form-data'))); ?>
                  <div class="row">
                     <div class="col-md-12">
                      <div class="model-body"> 
                        <div class="col-md-6">
                        	<div class="form-group">
                          <?php echo $form->labelEx($model,'category_id',array('class'=>"", 'for'=>"")); ?>
                    <?php 	$connection=Yii::app()->db;
			$sql3="SELECT Category.id, Category.category_name FROM  category as Category  ORDER BY Category.category_name ";
			$command3=$connection->createCommand($sql3);
			$row3=$command3->queryAll();
			$listdata3 = CHtml::listData($row3, 'id', 'category_name');
			echo $form->dropDownList($model, 'category_id', $listdata3, array('prompt' => 'Select Package','class'=>"form-control",'id'=>""));?>
                    <?php echo $form->error($model,'category_id'); ?>
                      </div>
                        
                        
                           <div class="form-group">
                          <?php echo $form->labelEx($model,'package_name',array('class'=>"control-label", 'for'=>"")); ?>  
						  <?php echo $form->textField($model,'package_name',array('size'=>60 ,'maxlength'=>200, 'id'=>'package_name', 'class'=>"form-control", 'title'=>"Please Enter packages name")); ?><?php echo $form->error($model,'package_name'); ?>                         </div>
            
                          
                          
                           
                           
                            <div class="form-group">
                               <?php echo $form->labelEx($model,'images',array('class'=>"form-label span2", 'for'=>"checkboxes")); ?>
      					 <div class="span8 controls"> <?php echo $form->fileField($model, 'images');?> 
						 <?php echo $form->error($model,'images'); ?>
                              </div>
                                          
        
                      </div>    
                           
  
                    </div>
                    	<div class="col-md-6">
                           <div class="form-group">
                          <?php echo $form->labelEx($model,'bv',array('class'=>"control-label", 'for'=>"")); ?>  
						  <?php echo $form->textField($model,'bv',array('size'=>60 ,'maxlength'=>10, 'id'=>'bv', 'class'=>"form-control", 'title'=>"Please Enter Business Volume")); ?><?php echo $form->error($model,'bv'); ?>                         </div>
            
                          <div class="form-group">
                           <?php echo $form->labelEx($model,'amount',array('class'=>"control-label", 'for'=>"")); ?>  
						  <?php echo $form->textField($model,'amount',array('size'=>60 ,'maxlength'=>10, 'id'=>'amount', 'class'=>"form-control", 'title'=>"Please Enter packages amount")); ?><?php echo $form->error($model,'amount'); ?> 
                        
                           </div>
                          <!-- div class="form-group">
                           <?php echo $form->labelEx($model,'package_percent',array('class'=>"control-label", 'for'=>"")); ?>  
						  <?php echo $form->textField($model,'package_percent',array('size'=>60 ,'maxlength'=>10, 'id'=>'package_percent', 'class'=>"form-control")); ?><?php echo $form->error($model,'package_percent'); ?> 
                        
                           </div -->
                           
                            <!-- div class="form-group">
                          <?php echo $form->labelEx($model,'discription',array('class'=>"control-label", 'for'=>"")); ?>  
						  <?php  echo $form->textArea($model, 'discription', array('rows'=>6, 'cols'=>30, 'id'=>'menual_recipt_no', 'class'=>"form-control"))
						  ?>
                           <?php echo $form->error($model,'discription'); ?>  
                        
                           </div -->
                           
  
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div> <span class="symbol required"></span>Required Fields
                        <hr>
                      </div>
                    </div>
                  </div>
                  <div class="model-body"> 
                    <p>
                    <div class="col-sm-2 col-sm-offset-8"> <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>"btn btn-bricky btn-lg")); ?> </div>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- end: RESPONSIVE TABLE PANEL -->
        
        <?php $this->endWidget(); ?>
      </div>
    </div>
    
    <!-- end: PAGE CONTENT--> 
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
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-colorpicker/js/commits.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/summernote/build/summernote.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/js/form-elements.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
       </body>
<!-- end: BODY -->
<!-- end: MAIN JAVASCRIPTS --> 
</body>
<!-- end: BODY -->
</html>