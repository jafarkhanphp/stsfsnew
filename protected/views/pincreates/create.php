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
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/css/theme_dark.css" type="text/css" id="skin_color">
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
            <li> <i class="clip-home-3"></i> <a href="#">Dashboard</a> </li>
            <li class="active"> Pin</li>
          </ol>
          <br />
          <!-- end: PAGE TITLE & BREADCRUMB --> 
        </div>
      </div>
      <!-- end: PAGE HEADER --> 
      <!-- start: PAGE CONTENT -->
      <div class="row">
        <div class="col-md-12 space20"> 
		<?php $checkPermission=Yii::app()->session['permissions'];
			 if($checkPermission[0]['lists']==0){
				 echo CHtml::link('Pin List <i class="fa clip-list-6"></i>',array('pincreates/index'), array('class'=>"btn btn-orange add-row"));
			}?>
        </div>
        <div class="col-md-12"> 
          <!-- start: RESPONSIVE TABLE PANEL -->
          
          <div class="panel panel-default">
            <?php
								$flashMessages = Yii::app()->user->getFlashes();
								  if ($flashMessages) {
									foreach($flashMessages as $key => $message) {
										echo '<div class="alert alert-' . $key . '"  ><button class="close" data-dismiss="alert">×</button>'. $message . "</div>\n";
									}}
								?>
            <div class="panel-heading"> <i class="fa fa-external-link-square"></i> Pin Create
              <div class="panel-tools"> <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> </div>
            </div>
            <div class="panel-body">
              <div class="modal-body">
                <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'pin-form','enableAjaxValidation'=>false,
                        )); ?>
                        <div class="row">
                    <div class="col-md-12">
                      <div class="model-body"> 
                        
                        <div class="col-md-6">
                       
                         <div class="form-group">
						 <?php echo $form->labelEx($model,'user_id',array('class'=>"control-label", 'for'=>"")); ?>
						<?php
							$connection=Yii::app()->db;
							$sql3="SELECT id, username FROM user where status=0   ";
							$command3=$connection->createCommand($sql3);
							$row3=$command3->queryAll();
							$listdata3 = CHtml::listData($row3, 'id', 'username');
							echo $form->dropDownList($model, 'user_id', $listdata3, array('prompt' => 'Select User','class'=>"form-control",'id'=>""));?>
						
                            <span id="user_name" style="text-align:right; float:right; color:red;"></span>
						   
                            <?php echo $form->error($model,'user_id'); ?>
                         </div>
                         
                        
                        <div class="form-group">
                           <?php echo $form->labelEx($model,'no_of_pin',array('class'=>"control-label", 'for'=>"")); ?> <?php echo $form->textField($model,'no_of_pin',array('size'=>10,'maxlength'=>100 , 'id'=>'CPassword', 'class'=>"form-control")); ?> <?php echo $form->error($model,'no_of_pin'); ?> </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                        
              </div>
              <div class="form-group">
                <div class="col-sm-2 col-sm-offset-4"> <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>"btn btn-orange  btn-block")); ?> </div>
              </div>
              <?php $this->endWidget(); ?>
            </div>
          </div>
          <!-- end: RESPONSIVE TABLE PANEL --> 
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
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/autosize/jquery.autosize.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/select2/select2.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/summernote/build/summernote.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/js/form-elements.js"></script> 
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY --> 
<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
			
			 function sponser(){
       // alert('function is call');return false;
		 var sponser_id=$('#user_id').val();
		 jQuery.ajax({
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/Sponserdetails/checksponser',
                type: "POST",
                data: {sponser_id:sponser_id},  
                success: function(data){
				if(data==2){
				   alert("Sponserid not exist");
				   $("#user_id").focus();
				   document.getElementById("user_id").value="";
				   return false;
				   }else{
					   
					 
				   }
				
				 }
		});
	 }
	 function sponsorname(){
       // alert('function is call');return false;
		 var sponser_id=$('#user_id').val();
		 jQuery.ajax({
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/Sponserdetails/sponsorname',
                type: "POST",
                data: {sponser_id:sponser_id},  
                success: function(data){//alert(data);return false;
				 $('#user_name').empty();
			     $('#user_name').append(data);
				 }
		});
	 }
		</script> 

<!-- end: MAIN JAVASCRIPTS --> 
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY --> 

<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

</body>
<!-- end: BODY -->
</html>