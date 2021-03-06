<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
<title>Member Update Profile :-<?php echo CHtml::encode($this->pageTitle); ?></title>
<!-- start: META -->
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
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/select2/select2.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/datepicker/css/datepicker.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
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
            <li> <i class="fa  clip-home"></i> <?php echo CHtml::link('<span class="title">Dashboard</span><span class=""></span>',array('user/dashboard'), array('class'=>"")); ?> </li>
             <li class="active">Member Update Profile </li>
          </ol>
          <br />
          <!-- end: PAGE TITLE & BREADCRUMB --> 
        </div>
      </div>
      <!-- end: PAGE HEADER --> 
      <!-- start: PAGE CONTENT -->
      <div class="row">
        <div class="col-md-12 space20"> <?php 
		$checkPermission=Yii::app()->session['permissions'];
		if(Yii::app()->user->user_type!=2){
			if($checkPermission[0]['lists']==0){
				echo CHtml::link('Member List <i class="fa clip-list-6"></i>',array('registrations/index'), array('class'=>"btn btn-orange add-row")); 
			}
		}
		?>
          
        </div>
        <div class="col-md-12"> 
          <!-- start: RESPONSIVE TABLE PANEL -->
           <?php
								$flashMessages = Yii::app()->user->getFlashes();
								  if ($flashMessages) {
									foreach($flashMessages as $key => $message) {
										echo '<div class="alert alert-' . $key . '"  ><button class="close" data-dismiss="alert">×</button>'. $message . "</div>\n";
									}}
								?>
          <div class="col-sm-12">
           
            <div class="panel panel-default">
              <div class="panel-heading"> <i class="fa fa-external-link-square"></i> Registration Form
                <div class="panel-tools"> <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a> <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> </div>
              </div>
              <div class="panel-body">
                <?php $form=$this->beginWidget('CActiveForm', array('id'=>'registrations-form',
                            'enableAjaxValidation'=>false, 'htmlOptions'=>array('enctype'=>'multipart/form-data'),
                        )); ?>
                <div class="row">
                <div class="col-md-6">	
                
                  <div class="modal-body"> <span class="" style="display:none" id="loader"><?php echo CHtml::image(Yii::app()->request->baseUrl."/assets/assets/images/loading.gif",'', array('width'=>"16", 'height'=>"16" , 'alt'=>"")); ?></span>
                 <p><?php echo $form->labelEx($model,'FirstName',array('class'=>"", 'for'=>"")); ?> <?php echo $form->textField($model,'FirstName',array('size'=>10,'maxlength'=>200 , 'id'=>'name', 'class'=>"form-control", 'title'=>"Please enter name")); ?> <?php echo $form->error($model,'FirstName'); ?> </p>
                  <p><?php echo $form->labelEx($model,'MotherName',array('class'=>"", 'for'=>"")); ?> 
				  <?php echo $form->textField($model,'MotherName',array('size'=>10,'maxlength'=>200 , 'id'=>'MotherName',
				  'class'=>"form-control", 'title'=>"Please enter Mother Name")); ?> <?php echo $form->error($model,'MotherName'); ?> </p>
                 
				  <p> <?php echo $form->labelEx($model,'Sex',array('class'=>"",)); ?> <?php echo $form->dropDownList($model, 'Sex', array("Male"=>"Male","Female"=>"Female"), array('class'=>'form-control'));?> <?php echo $form->error($model,'Sex'); ?> </p>
                      
                  
                  </div>
				</div>
			    <div class="col-md-6">
					<div class="modal-body">
					<p><?php echo $form->labelEx($model,'fatherName',array('class'=>"", 'for'=>"")); ?> 
					<?php echo $form->textField($model,'fatherName',array('size'=>10,'maxlength'=>200 , 'id'=>'fatherName', 'class'=>"form-control", 'title'=>"Please enter father name")); ?> 
					<?php echo $form->error($model,'fatherName'); ?> </p>
					
					<p><?php echo $form->labelEx($model,'Occupation',array('class'=>"", 'for'=>"")); ?> 
					<?php echo $form->textField($model,'Occupation',array('size'=>10,'maxlength'=>200 , 'id'=>'Occupation', 'class'=>"form-control", 'title'=>"Please enter father name")); ?> 
					<?php echo $form->error($model,'Occupation'); ?> </p>
					
					 <p>
                       <?php echo $form->labelEx($model,'DOB',array('class'=>"form-label span2",)); 
				$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model' => $model,
					'attribute' => 'DOB',
					'options' => array(
					'dateFormat' => 'yy-mm-dd',
					'defaultDate' =>'+0w', 
					'changeYear' => true, 'maxDate'=>'-12y',
					'yearRange'=> '1950:2005', 
				),
				'htmlOptions' => array(
				'size' => '10',         // textField size
				'maxlength' => '10',    // textField maxlength
				'class'=>'span8 form-control'
		 	),
	 	 ));
		?>
			<?php echo $form->error($model,'DOB'); ?>
                      
                      </p>
					</div>
				
				</div>
			   </div>
              </div>
            </div>
          </div>
          
          </div>
		   <div class="col-sm-12">
           
            <div class="panel panel-default">
              <div class="panel-heading"> <i class="fa fa-external-link-square"></i> Contact Detail:
                <div class="panel-tools"><a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
				<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
				<a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> 
				</div>
              </div>
              <div class="panel-body">
               <div class="row">
                <div class="col-md-6">	
                
                  <div class="modal-body"> 
                  <p><?php echo $form->labelEx($model,'PanNo',array('class'=>"", 'for'=>"")); ?> 
				  <?php echo $form->textField($model,'PanNo',array('size'=>10,'maxlength'=>10 , 'id'=>'PanNo', 'class'=>"form-control", 'title'=>"PanNo")); ?>
				  <?php echo $form->error($model,'PanNo'); ?> </p>
                    
                    <p><?php echo $form->labelEx($model,'ContactNo1',array('class'=>"", 'for'=>"")); ?> <?php echo $form->textField($model,'ContactNo1',array('size'=>10,'maxlength'=>10 , 'id'=>'ContactNo1', 'class'=>"form-control", 'title'=>"Amount")); ?> <?php echo $form->error($model,'ContactNo1'); ?> </p>
                     <p><?php echo $form->labelEx($model,'Address',array('class'=>"", 'for'=>"")); ?> <?php echo $form->textField($model,'Address',array('size'=>10,'maxlength'=>200 , 'id'=>'Address', 'class'=>"form-control", 'title'=>"Address")); ?> <?php echo $form->error($model,'Address'); ?> </p>
                       
                        <p><?php echo $form->labelEx($model,'State',array('class'=>"", 'for'=>"")); ?> <?php echo $form->textField($model,'State',array('size'=>10,'maxlength'=>200 , 'id'=>'State', 'class'=>"form-control", 'title'=>"State")); ?> <?php echo $form->error($model,'State'); ?> </p>
                         
                  </div>
				</div>
			    <div class="col-md-6">
					<div class="modal-body">
					<p><?php echo $form->labelEx($model,'Emailaddress',array('class'=>"", 'for'=>"")); ?> <?php echo $form->textField($model,'Emailaddress',array('size'=>10,'maxlength'=>200 , 'id'=>'Emailaddress', 'class'=>"form-control", 'title'=>"Amount")); ?> <?php echo $form->error($model,'Emailaddress'); ?> </p>
                     <p><?php echo $form->labelEx($model,'City',array('class'=>"", 'for'=>"")); ?> <?php echo $form->textField($model,'City',array('size'=>10,'maxlength'=>200 , 'id'=>'City', 'class'=>"form-control", 'title'=>"City")); ?> <?php echo $form->error($model,'State'); ?> </p>
                       <p><?php echo $form->labelEx($model,'ZipCode',array('class'=>"", 'for'=>"")); ?> <?php echo $form->textField($model,'ZipCode',array('size'=>10,'maxlength'=>200 , 'id'=>'ZipCode', 'class'=>"form-control", 'title'=>"ZipCode")); ?> <?php echo $form->error($model,'ZipCode'); ?> </p>
                       <p><?php echo $form->labelEx($model,'Nationality',array('class'=>"", 'for'=>"")); ?> 
					   <?php echo $form->textField($model,'Country',array('size'=>10,'maxlength'=>200 , 'id'=>'Country', 'class'=>"form-control", 'title'=>"Country")); ?> 
					   <?php echo $form->error($model,'Country'); ?> </p>
                       
					</div>
				
				</div>
			   </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="panel panel-default">
              <div class="panel-heading"> <i class="fa fa-external-link-square"></i>Bank Details
                <div class="panel-tools"> <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a> <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> </div>
              </div>
              <div class="panel-body">
                <div class="row">
				   <div class="col-sm-6">
                  <div class="modal-body"> 
					<p><?php echo $form->labelEx($model2,'account_holder',array('class'=>"", 'for'=>"")); ?> <?php echo $form->textField($model2,'account_holder',array('size'=>10,'maxlength'=>200 ,  'value'=>$bankDetail[0]['account_holder'], 'id'=>'account_holder', 'class'=>"form-control")); ?> <?php echo $form->error($model2,'account_holder'); ?> </p>
				  
                     <p><?php echo $form->labelEx($model2,'BankName',array('class'=>"", 'for'=>"")); ?> 
					 <?php echo $form->textField($model2,'BankName',array('size'=>10,'maxlength'=>200 , 'value'=>$bankDetail[0]['BankName'],  'id'=>'BankName', 
					 'class'=>"form-control")); ?> <?php echo $form->error($model2,'BankName'); ?> </p>
                       <p><?php echo $form->labelEx($model2,'AccNo',array('class'=>"", 'for'=>"")); ?> 
					   <?php echo $form->textField($model2,'AccNo',array('size'=>10,'maxlength'=>20 , 'value'=>$bankDetail[0]['AccNo'], 'id'=>'AccNo', 'class'=>"form-control", 'title'=>"Amount")); ?> <?php echo $form->error($model2,'AccNo'); ?> </p>
                    <p><?php echo $form->labelEx($model2,'adhar_no',array('class'=>"", 'for'=>"")); ?> 
					<?php echo $form->textField($model2,'adhar_no',array('size'=>10,'maxlength'=>20 , 'value'=>$bankDetail[0]['adhar_no'], 'id'=>'adhar_no', 'class'=>"form-control", 'title'=>"Adhar Number")); ?> 
					<?php echo $form->error($model2,'adhar_no'); ?> </p>
                    
                  
                  
                  </div>
                 </div>
				 <div class="col-sm-6">
                  <div class="modal-body"> 
					<p><?php echo $form->labelEx($model2,'BranchName',array('class'=>"", 'for'=>"")); ?> 
					<?php echo $form->textField($model2,'BranchName',array('size'=>10,'maxlength'=>200 , 'value'=>$bankDetail[0]['BranchName'], 'id'=>'BranchName', 'class'=>"form-control")); ?> <?php echo $form->error($model2,'BranchName'); ?> </p>
                      <p><?php echo $form->labelEx($model2,'IFSC',array('class'=>"", 'for'=>"")); ?> 
					  <?php echo $form->textField($model2,'IFSC',array('size'=>10,'maxlength'=>14 , 'value'=>$bankDetail[0]['IFSC'], 'id'=>'AccNo', 'class'=>"form-control", 'title'=>"IFSC")); ?> <?php echo $form->error($model2,'IFSC'); ?> </p>
                    <p>
                   <p><?php echo $form->labelEx($model,'Image',array('class'=>"form-label span2", 'for'=>"")); ?>
      				<?php echo $form->fileField($model, 'Image');?> 
					<?php echo $form->error($model,'Image'); ?> </p>
                  
                  </p>
				  </div>
				  </div>
				    <div class="modal-body"> 
						<div class="col-sm-3"><?php echo CHtml::submitButton($model->isNewRecord ? 'Register New Member' : 'Save',array('class'=>"btn btn-orange  btn-block")); ?></div>
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