<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
<!-- start: HEAD -->

<head>
<title>Registration :-<?php echo CHtml::encode($this->pageTitle); ?></title>
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
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/css/theme_dark.css" type="text/css" id="skin_color">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/css/print.css" type="text/css" media="print"/>
<!--[if IE 7]>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
<!--[if IE 7]>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/datepicker/css/datepicker.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/summernote/build/summernote.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css"type="text/css"/>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-modal/css/bootstrap-modal.css" type="text/css"/>



<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/admin-css/font-awesome.min.css" />
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/admin-css/admin.css" />
<!-- Skins -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/admin-css/skin.css" />
<!-- iCheck -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/admin-plugins/iCheck/square/blue.css" />
<!--[if lt IE 9]>
<script src="admin-js/html5shiv.min.js"></script>
<script src="admin-js/respond.min.js"></script>
<![endif]-->
<!-- -->
<script language="javascript" type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/js/generalEvent.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/js/jquery-1.6.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/js/JScript2.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/js/jquery.min.js"></script>
<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
<link rel="shortcut icon" href="favicon.ico" />
<style type="text/css">
#updatePanel4 {
	display:inline;
}
.wrapper {
	background-color: #fff!important;
}
.content-wrapper, .right-side {
	background-color: #fff;
}
</style>
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
            <li class=""> Create Member </li>
            
          </ol>
          <br />
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
            <div class="panel-heading"> <i class="fa fa-external-link-square"></i> Create Member
              <div class="panel-tools"> <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a> <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> </div>
            </div>
            <div class="panel-body">
            <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'registration-forms', 'enableAjaxValidation'=>true,  'enableClientValidation'=>true, 'htmlOptions'=>array('class'=>'', 'enctype'=> 'multipart/form-data')				

                        )); ?>
              <div class="wrapper">
    <div class=" joining-wrapper">
      <!-- Content Header -->
      <!-- Main content -->
      <section class=" form-joining ">
        <p class="custom-form-head"><span>1</span>Who Introduces You to My Life Vision </p>
          <span id="msg" style="color:green"></span>
        <!-- -->
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <?php echo $form->textField($model,'SponserID',array('id'=>'SponserID', 'class'=>"form-control",'placeholder'=>'Sponsor ID *','onchange'=>"sponser(this.value); sponsorname();")); ?> 
			  <?php echo $form->error($model,'SponserID'); ?>
            </div>
          </div>
           <div class="col-sm-4">
            <div class="form-group">
             <b> <span id="sponsor_name" style="color:red;"></span></b>
            </div>
          </div>
          
        </div>
        <!-- -->
        <p class="custom-form-head"><span>2</span>Personal Detail</p>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group ">
              <?php echo $form->textField($model,'FirstName',array('id'=>'FirstName', 'class'=>"form-control",'placeholder'=>'Name *')); ?> 
			  <?php echo $form->error($model,'FirstName'); ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <?php //echo $form->textField($model,'DOB',array('id'=>'DOB', 'class'=>"form-control",'placeholder'=>'Date of Birth ex- ['.date('d-m-Y').']')); ?> 
              <?php 
											 $this->widget('zii.widgets.jui.CJuiDatePicker',
														 array(
															'attribute'=>'DOB',
															'model'=>$model,
															'options' => array(
																			  'mode'=>'focus',
																			   'dateFormat' => 'd-m-yy',
																			  'showAnim' => 'slideDown',
																			  'defaultDate' => '+0w',
																			  ),
															'htmlOptions'=>array('style'=>'width:230px;','id'=>'DOB','value'=>'Date of birth'),
														 )
														);
																		  
											?>
			  <?php echo $form->error($model,'DOB'); ?>
            </div>
          </div>
        </div>
        <!-- -->
        <p class="custom-form-head"><span>3</span>Contact Detail</p>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group ">
              <?php echo $form->textField($model,'Address',array('id'=>'Address', 'class'=>"form-control",'placeholder'=>'Address....')); ?> 
			  <?php echo $form->error($model,'Address'); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group ">
             <?php $user_type=Yii::app()->user->getState('user_type');?>
             <?php if($user_type==2){?> 
              <?php echo $form->textField($model,'ContactNo1',array('id'=>'ContactNo1','maxlength'=>"10", 'class'=>"form-control",'placeholder'=>'Mobile No.*','onchange'=>"mobile(this.value);")); ?>
              <?php }else{?>
               <?php echo $form->textField($model,'ContactNo1',array('id'=>'ContactNo1','maxlength'=>"10", 'class'=>"form-control",'placeholder'=>'Mobile No.*')); ?> 
               <?php }?> 
			  <?php echo $form->error($model,'ContactNo1'); ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group ">
              <?php echo $form->textField($model,'PanNo',array('id'=>'PanNo', 'class'=>"form-control",'placeholder'=>'PanNo')); ?> 
			  <?php echo $form->error($model,'PanNo'); ?>
            </div>
          </div>
        </div>
          <!-- -->
        <p class="custom-form-head"><span>4</span>Bank Detail</p>
        <!-- -->
        <div class="row">
       
 <div class="col-sm-6">
                      <div class="form-group">
          <div class="input-group">
              <?php echo $form->textField($model,'ifsc',array('id'=>'ifsc', 'class'=>"form-control",'placeholder'=>'Ifsc code')); ?> 
			  <?php echo $form->error($model,'ifsc'); ?>
                            
                       </div>  
         
   </div>
   </div>
                   
    <div class="col-sm-6">

                      <div class="form-group">
       <?php echo $form->textField($model,'bank_name',array('id'=>'bank_name', 'class'=>"form-control",'placeholder'=>'Bank name')); ?> 
	   <?php echo $form->error($model,'bank_name'); ?>
  </div>
  </div>
  </div>
    <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
       <?php echo $form->textField($model,'branch_name',array('id'=>'branch_name', 'class'=>"form-control",'placeholder'=>'Branch name')); ?> 
	   <?php echo $form->error($model,'branch_name'); ?>
   </div>
   </div>
   
    
    <div class="col-sm-6">
                      <div class="form-group">
                   
     <?php echo $form->textField($model,'account_no',array('id'=>'account_no', 'class'=>"form-control",'placeholder'=>'Account no.')); ?> 
	   <?php echo $form->error($model,'account_no'); ?>
   </div>
   </div>
   </div>
   <p class="custom-form-head"><span>5</span>Login Detail</p>
   <?php $model1=new User;?>
    <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
       <?php echo $form->passwordField($model1,'password',array('id'=>'password', 'class'=>"form-control",'placeholder'=>'Password *')); ?> 
	   <?php echo $form->error($model1,'password'); ?>
   </div>
   </div>
   
    
    <div class="col-sm-6">
                      <div class="form-group">
                   
     <?php echo $form->passwordField($model1,'conformpassword',array('id'=>'conformpassword','onChange'=>'confirmpassword(this.value);', 'class'=>"form-control",'placeholder'=>'Confirm password')); ?> 
	   <?php echo $form->error($model1,'conformpassword'); ?>
   </div>
   </div>
   </div>

        
        <div class="row">
          <div class="col-sm-12">
            <div class="checkbox icheck">
              <label class="">
              <span style="margin-left:20px"><input id="chkterms" type="checkbox" name="chkterms" onclick="DivOnOff(&#39;DivTerms&#39;,this.checked);" tabindex="10" /></span>
              I Agree With </label>
              <a  onclick="$('.joining-terms').slideToggle()" style="cursor:pointer"> Terms And Condition</a> </div>
            <div class="joining-terms">
              <h4>Terms & Conditions :-</h4>
              <ul>
                <li>It is kind advise to you that you promote Business as per actual. Company will not responsible for your miss commitments in the market through any manner. </li>
                <li> Company provides you online account as your ID with password. It contains all your legal information , Transaction Balance, Team detail, Bonus details etc.</li>
                <li> KYC Documents is mandatory.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-5" id="DivTerms" style="display: none">
         <?php echo CHtml::submitbutton('Save', array('onClick'=>"return validationcheck();",'class'=>'btn btn-primary')); ?>
         
            
           
          </div>
          <!-- /.col -->
        </div>
        
      </section>
    </div>
  </div>
   <?php $this->endWidget(); ?>
            </div>
          </div>
          <!-- end: RESPONSIVE TABLE PANEL --> 
        </div>
      </div>
      
      <!-- end: PAGE CONTENT--> 
    </div>
  </div>
</div>
 <style type="text/css">
.button2 {
    background: url("images/search_icon.png") no-repeat center;
        background-color: #000;
    border: 1px solid #000;
    width: 26px;
    height: 26px;
    border-radius: 3px;
}
.input-group-addon {
    padding: 0px 5px;
    }    
  
		.error{color:#F00;}
		
</style>

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
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/js/main.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/js/form-franchise.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets//assets/js/ui-modals.js"></script> 
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY --> 
<script>
			jQuery(document).ready(function() {
				Main.init();
				UIModals.init();
				//FormElements.init();
			});
		</script>
        
        <script>
 function sponser(){
       // alert('function is call');return false;
		 var sponser_id=$('#SponserID').val();
		 jQuery.ajax({
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/Sponserdetails/checksponser',
                type: "POST",
                data: {sponser_id:sponser_id},  
                success: function(data){//alert (data);return false;
				if(data==2){
				   alert("Sponserid not exist");
				   $("#SponserID").focus();
				   document.getElementById("SponserID").value="";
				   return false;
				   }else{
					 
				   }
				
				 }
		});
	 }
	 
	  function sponsorname(){
       // alert('function is call');return false;
		 var sponser_id=$('#SponserID').val();
		 jQuery.ajax({
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/Sponserdetails/sponsorname',
                type: "POST",
                data: {sponser_id:sponser_id},  
                success: function(data){//alert(data);return false;
				 $('#sponsor_name').empty();
			     $('#sponsor_name').append(data);
				 }
		});
	 }
	 
	 function mobile(){
       // alert('function is call');return false;
	   var user_type=<?php echo Yii::app()->user->getState('user_type');?>;
	   //alert(user_type);return false;
		 var mobile=$('#ContactNo1').val();
		 //alert(mobile);return false;
		 jQuery.ajax({
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/Sponserdetails/checkmobile',
                type: "POST",
                data: {mobile:mobile},  
                success: function(data){//alert (data);return false;
				if(data==1){
					if(user_type!=0){
				       alert("Contact already exist");
				       $("#ContactNo1").focus();
				       document.getElementById("ContactNo1").value="";
				       return false;
				     }
				   }else{
					 
				   }
				
				 }
		});
	 }
	 
	 function confirmpassword()
	 {
		  var password=$('#password').val();
		  var confirmpassword=$('#conformpassword').val();
		  if(password!=confirmpassword){
		 $("#conformpassword").after("<p class='error'>Confirm password do not match!</p>");
		 document.getElementById("conformpassword").value="";
		 $("#conformpassword").focus();
		
      }
		  
	 }

function validationcheck()
{
	 var err=0;
     $('p').empty();
	//alert('function is call');return false;
	var sponser_id=$('#SponserID').val();
	var name=$('#FirstName').val();
	var dob=$('#DOB').val();
	var address=$('#Address').val();
	var contact_no=$('#ContactNo1').val();
	var pan_no=$('#PanNo').val();
	var ifsc=$('#ifsc').val();
	var bank_name=$('#bank_name').val();
	var branch_name=$('#branch_name').val();
	var account_no=$('#account_no').val();
	var password=$('#password').val();
	var confirmpassword=$('#conformpassword').val();
	//alert('account_no'+account_no);return false;
	
	  if(sponser_id==''){
		 $("#SponserID").after("<p class='error'>Enter sponser id!</p>");
		 err++;
      }
	   if(name==''){
		 $("#FirstName").after("<p class='error'>Enter your name!</p>");
		 err++;
      }
	  if(contact_no==''){
		 $("#ContactNo1").after("<p class='error'>Enter your mobile no.!</p>");
		 err++;
      }
	  if(confirmpassword==''){
		 $("#conformpassword").after("<p class='error'>Enter confirm password!</p>");
		 err++;
      }
	  
	  if(err==0){/*
				
              jQuery.ajax({
                url: '<?php //echo Yii::app()->request->baseUrl;?>/index.php/Site/create',
                type: "POST",
                data: {sponser_id:sponser_id,name:name,dob:dob,address:address,contact_no:contact_no,pan_no:pan_no,ifsc:ifsc,bank_name:bank_name,branch_name:branch_name,account_no:account_no},  
                 success: function(data){//alert(data);return false;
					
                    if(data==1){
						alert('Record save successfully');
						$("#msg").append('<p style="color:green">Record save successfully </p>');
						
						} 
					else if(data==2) {
							$("#formResultAdd").append("<p style='color:red'>Record Not Save</p>");
						 	$("#names").focus();
							
						//alert('Record exist in Employee,Village,Party Table');
					}else if(data==3) {
						//$("#formResultAdd").append("<p style='color:red'>Access Denied</p>");
						// $("#names").focus();
					} else if(data==4){
						//$("#emails").after("<p style='color:red'>Employee Email already exist</p>");
						// $("#emails").focus();
					}
                   }

                });
             */} else {
             	return false;
             }
}
</script>
</body>
<!-- end: BODY -->
</html>