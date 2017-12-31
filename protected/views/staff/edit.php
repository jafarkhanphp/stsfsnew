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
<meta content="jafarkhanphp@gmail.com" name="author" />
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
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/summernote/build/summernote.css">
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
            <li> <i class="fa  clip-home"></i> <?php echo CHtml::link('<span class="title">Dashboard</span><span class=""></span>',array('site/dashboard'), array('class'=>"")); ?> </li>
            <li><i class="fa fa fa-group"></i> <?php echo CHtml::link('<span class="title">Staff List</span><span class="selected"></span>',array('staff/index'), array('class'=>"")); ?> </li>
            <li class="active"> <i class="fa fa clip-user"></i> Edit Staff Details </li>
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
					if($checkPermission[0]['lists']==0){
						 echo CHtml::link('Staff List <i class="fa clip-list-6"></i>',array('staff/index'), array('class'=>"btn btn-orange add-row"));
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
              <div class="panel-heading"> <i class="fa fa-external-link-square"></i> Fill Staff Details
                <div class="panel-tools"> <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a> <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> </div>
              </div>
              <div class="panel-body">
                <div class="modal-body">
                  <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'staff-form',  'enableAjaxValidation'=>false,  'enableClientValidation'=>false,

                        )); ?>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="model-body">
                        <div class="col-md-6">
                          <div class="form-group"> <?php echo $form->labelEx($model,'user_type',array('class'=>"control-label", 'for'=>"")); ?> <?php $statusOptions = array('1' => 'Branch Manager', '2' => 'Staff');
			    echo $form->dropDownList($model, 'user_type', $statusOptions, array( 'prompt' => 'Select user type' , 'id'=>"form-field-select-3", 'class'=>"form-control search-select")); ?> <?php echo $form->error($model,'user_type'); ?> </div>
                		  
                          <div class="form-group"> <?php echo $form->labelEx($model,'branch_id',array('class'=>"control-label", 'for'=>"")); ?> 
						  <?php $connection=Yii::app()->db;
								$sql3="SELECT Branch.branch_name, Branch.id FROM  branch as Branch  ORDER BY Branch.branch_name ";
								$command3=$connection->createCommand($sql3);
								$row3=$command3->queryAll();
								$listdata3 = CHtml::listData($row3, 'id', 'branch_name');
								echo $form->dropDownList($model, 'branch_id', $listdata3, array('prompt' => 'Select Branch','class'=>"form-control",'id'=>"branch_id")); ?> <?php echo $form->error($model,'branch_id'); ?> </div>
                                
                          <div class="form-group"> <?php echo $form->labelEx($model,'RID',array('class'=>"control-label", 'for'=>"")); ?> <?php echo $form->textField($model,'RID',array('size'=>60 ,'maxlength'=>200, 'id'=>'RID', 'class'=>"form-control")); ?> <?php echo $form->error($model,'RID'); ?> </div>
                          
                          
                          <div class="form-group"> <?php echo $form->labelEx($model,'name',array('class'=>"control-label", 'for'=>"")); ?> <?php echo $form->textField($model,'name',array('size'=>60 ,'maxlength'=>200, 'id'=>'name', 'class'=>"form-control", 'title'=>"Enter Name")); ?> <?php echo $form->error($model,'name'); ?> </div>
                         
                          <div class="form-group"> <?php echo $form->labelEx($model,'email',array('class'=>"control-label", 'for'=>"")); ?> <?php echo $form->textField($model,'email',array('size'=>60 ,'maxlength'=>200, 'id'=>'email', 'class'=>"form-control", 'title'=>"Enter email")); ?> <?php echo $form->error($model,'email'); ?> </div>
                        </div>
                        <div class="col-md-6">
                         
                          <div class="form-group"> <?php echo $form->labelEx($model,'mobile',array('class'=>"control-label", 'for'=>"")); ?> <?php echo $form->textField($model,'mobile',array('size'=>10,'maxlength'=>10 , 'id'=>'mobile', 'class'=>"form-control", 'title'=>"Please Entre Mobile.")); ?> <?php echo $form->error($model,'mobile'); ?> </div>
                        
                        	<div class="form-group"> <?php echo $form->labelEx($model1,'username',array('class'=>"control-label", 'for'=>"")); ?> <?php echo $form->textField($model1,'username',array('size'=>10,'maxlength'=>50 , 'id'=>'username', 'class'=>"form-control", 'title'=>"Entre User Name")); ?> <?php echo $form->error($model1,'username'); ?> </div>
                          
                          
                          <div class="form-group"> <?php echo $form->labelEx($model,'address',array('class'=>"control-label", 'for'=>"")); ?> <?php echo $form->textField($model,'address',array('id'=>'address', 'class'=>"form-control tip", 'title'=>"Enter Subject")); ?> <?php echo $form->error($model,'address'); ?> </div>
                          <div class="form-group"> <?php echo $form->labelEx($model,'basic_sallery',array('class'=>"control-label", 'for'=>"")); ?> <?php echo $form->textField($model,'basic_sallery',array('size'=>10,'maxlength'=>6 , 'id'=>'basic_sallery', 'class'=>"form-control", 'title'=>"Entre Basicsallery",'tabindex'=>"6")); ?> <?php echo $form->error($model,'basic_sallery'); ?> </div>
                          
                          <div class="form-group"> <?php echo $form->labelEx($model,'qualification',array('class'=>"control-label", 'for'=>"")); ?> <?php echo $form->textField($model,'qualification',array('size'=>10,'maxlength'=>150 , 'id'=>'qualification', 'class'=>"form-control", 'title'=>"Entre qualification")); ?> <?php echo $form->error($model,'qualification'); ?> </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div> <span class="symbol required"></span>Required Fields
                        <hr>
                      </div>
                    </div>
                  </div>
                  <div class="model-body"> <span class="" style="display:none" id="loader"><?php echo CHtml::image(Yii::app()->request->baseUrl."/assets/assets/images/loading.gif",'', array('width'=>"16", 'height'=>"16" , 'alt'=>"")); ?></span>
                    <div class="" id="formResult"></div>
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
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/js/main.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/autosize/jquery.autosize.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/select2/select2.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/summernote/build/summernote.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/js/form-staff.js"></script> 
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY --> 
<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script> 

<!-- end: MAIN JAVASCRIPTS --> 
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY --> 

<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

</body>
<!-- end: BODY -->
</html>