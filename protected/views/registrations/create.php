<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
<!-- start: HEAD -->

<head>
<title>Register New Member:-<?php echo CHtml::encode($this->pageTitle); ?></title>
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
             <li class="active">Register New Member </li>
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
              <div class="panel-heading"> <i class="fa fa-external-link-square"></i> Who Interduce you 
                <div class="panel-tools"> <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a> <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> </div>
              </div>
              <div class="panel-body">
                <?php $form=$this->beginWidget('CActiveForm', array('id'=>'registrations-form',
                            'enableAjaxValidation'=>false, 'htmlOptions'=>array('enctype'=>'multipart/form-data'),
                        )); ?>
                <div class="row">
                <div class="col-md-6">	
                
                  <div class="modal-body"> <span class="" style="display:none" id="loader">
					  <?php echo CHtml::image(Yii::app()->request->baseUrl."/assets/assets/images/loading.gif",'', array('width'=>"16", 'height'=>"16" , 'alt'=>"")); ?></span>
					<p>
                    <?php echo $form->labelEx($model,'package_id',array('class'=>"", 'for'=>""));
                    
					$listdata3 = Packages::model()->getPackageDropDown(0);
					echo $form->dropDownList($model, 'package_id', $listdata3, array('prompt' => 'Select Packages', 
					'onchange'=>"getPin(this.value);", 'class'=>"form-control",'id'=>"package_id"));?> <?php echo $form->error($model,'package_id'); ?>
                    </p>
					
					<p> <?php echo $form->labelEx($model,'SponserID',array('class'=>"", 'for'=>"")); ?> <?php echo $form->textField($model,'SponserID',array('size'=>60 ,'maxlength'=>10, 'id'=>'SponserID', 'class'=>"form-control", 'title'=>"Enter Sponser Id", 'onchange'=>'checkname(this.value)')); ?> <?php echo $form->error($model,'SponserID'); ?> <span class="label label-sm label-success" id="sponserName" style="display:none" ></span> <span style="display:none" id="loader" >
					<?php echo CHtml::image(Yii::app()->request->baseUrl."/assets/assets/images/loading.gif",'', array('width'=>"16", 'height'=>"16" , 'alt'=>"")); ?></span> </p>
                    
                    
                  
                  </div>
				</div>
			    <div class="col-md-6">
					<div class="modal-body">
					 <p>
                    <?php echo $form->labelEx($model,'pin_id',array('class'=>"", 'for'=>"")); ?>
                    <?php 	$userId=Yii::app()->user->id;
							$listdata3=Pincreates::model()->getPinDropdown(Yii::app()->user->getState('usercode'));
							echo $form->dropDownList($model, 'pin_id', array(), array('prompt' => 'Select Pins','class'=>"form-control",'id'=>"pin_id"));?>
                    <?php echo $form->error($model,'pin_id'); ?>
                    </p>
					
					 <p> <?php echo $form->labelEx($model,'BinaryPosition',array('class'=>"",)); ?> <?php echo $form->dropDownList($model, 'BinaryPosition', array("Left"=>"Left","Right"=>"Right"), array('class'=>'form-control'));?> <?php echo $form->error($model,'BinaryPosition'); ?> </p>
					
					</div>
				
				</div>
			   </div>
              </div>
            </div>
          </div>
          
          </div>
		   <div class="col-sm-12">
           
            <div class="panel panel-default">
              <div class="panel-heading"> <i class="fa fa-external-link-square"></i> Personal Details :
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
				  <p><?php echo $form->labelEx($model,'FirstName',array('class'=>"", 'for'=>"")); ?> <?php echo $form->textField($model,'FirstName',array('size'=>10,'maxlength'=>200 , 'id'=>'name', 'class'=>"form-control", 'title'=>"Please enter name")); ?> <?php echo $form->error($model,'FirstName'); ?> </p>
                  <p><?php echo $form->labelEx($model,'PanNo',array('class'=>"", 'for'=>"")); ?> 
					  <?php echo $form->textField($model,'PanNo',array('size'=>10, 'id'=>'PanNo', 'class'=>"form-control", 'title'=>"Pan No")); ?> <?php echo $form->error($model,'ContactNo1'); ?> </p>
                     </div>
				</div>
			    <div class="col-md-6">
					<div class="modal-body">
					<p><?php echo $form->labelEx($model,'ContactNo1',array('class'=>"", 'for'=>"")); ?> 
						<?php echo $form->textField($model,'ContactNo1',array('size'=>10,'maxlength'=>10 , 'id'=>'ContactNo1', 'class'=>"form-control", 'title'=>"Mobile")); ?> 
						<?php echo $form->error($model,'ContactNo1'); ?> </p>
                       <p> <?php echo $form->labelEx($model,'Sex',array('class'=>"",)); ?>
						 <?php echo $form->dropDownList($model, 'Sex', array("Male"=>"Male","Female"=>"Female"), array('class'=>'form-control'));?> <?php echo $form->error($model,'Sex'); ?> </p>
                   
					</div>
				
				</div>
			   </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
           <div class="modal-body"> 
						<div class="col-sm-3"><?php echo CHtml::submitButton($model->isNewRecord ? 'Register New Member' : 'Save',array('class'=>"btn btn-orange  btn-block")); ?></div>
					</div>
          </div>
          
          <!-- end: RESPONSIVE TABLE PANEL -->
          
          <?php $this->endWidget(); ?>
        </div>
      </div>
      
      <!-- end: PAGE CONTENT--> 
    </div>
    <script language="javascript">
	function checkname(id) {
				 $("#loader").show();
				 jQuery.ajax({
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/registrations/CheckName',
                type: "POST",
                data: {Rid: id},  
                success: function(data){
                    if(data!=''){
						$("#loader").hide();
						$( "#sponserName").empty();
						$( "#sponserName").show();
						$( "#sponserName" ).append( data );
						//alert('Payment updated');
					} else {
						$("#loader").hide();
						$( "#sponserName").empty();
						$( "#sponserName").show();
						$( "#sponserName" ).append( 'Record not found' );
						
					}
                    }
                });
		 }
		 
		 function getPin(packgeid) {
				jQuery.ajax({
				
				 url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/pincreates/pin',
                type: "POST",
                data: {id: packgeid, userId:'<?php echo Yii::app()->user->getState('usercode'); ?>'},  
                success: function(data){
				 //alert(data); return false;
                    if(data!=''){
						$( "#pin_id" ).empty();
						$( "#pin_id" ).append( data );
						
					} else {
						$( "#pin_id" ).empty();
						
					}
                    }
                });
		 }
		 
		 
		 
</script> 
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
				var packId=$('#package_id').val();
				getPin(packId);
				//FormElements.init();
			});
		</script>
</body>
<!-- end: BODY -->
<!-- end: MAIN JAVASCRIPTS -->
</body>
<!-- end: BODY -->
</html>