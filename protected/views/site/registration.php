
<!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/admin-css/bootstrap.min.css" />
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

 <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'registration-forms', 'enableAjaxValidation'=>true,  'enableClientValidation'=>true, 'htmlOptions'=>array('class'=>'', 'enctype'=> 'multipart/form-data')				

                        )); ?>

<div>

	
	
</div>
  

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
        <p class="custom-form-head"><span>2</span>Personal Detail </p>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group ">
              <?php echo $form->textField($model,'FirstName',array('id'=>'FirstName', 'class'=>"form-control",'placeholder'=>'Name')); ?> 
			  <?php echo $form->error($model,'FirstName'); ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <?php echo $form->textField($model,'DOB',array('id'=>'DOB', 'class'=>"form-control",'placeholder'=>'Date of Birth ex- ['.date('Y-m-d').']')); ?> 
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
              <?php echo $form->textField($model,'ContactNo1',array('id'=>'ContactNo1','maxlength'=>"10", 'class'=>"form-control",'placeholder'=>'Mobile No.*','onchange'=>"mobile(this.value);")); ?> 
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
        <?php $model1=new Bankdetails;?>
 <div class="col-sm-6">
                      <div class="form-group">
          <div class="input-group">
              <?php echo $form->textField($model1,'ifsc',array('id'=>'ifsc', 'class'=>"form-control",'placeholder'=>'Ifsc code')); ?> 
			  <?php echo $form->error($model1,'ifsc'); ?>
                            
                       </div>  
         
   </div>
   </div>
                   
    <div class="col-sm-6">

                      <div class="form-group">
       <?php echo $form->textField($model1,'bank_name',array('id'=>'bank_name', 'class'=>"form-control",'placeholder'=>'Bank name')); ?> 
	   <?php echo $form->error($model1,'bank_name'); ?>
  </div>
  </div>
  </div>
        <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
       <?php echo $form->textField($model1,'branch_name',array('id'=>'branch_name', 'class'=>"form-control",'placeholder'=>'Branch name')); ?> 
	   <?php echo $form->error($model1,'branch_name'); ?>
   </div>
   </div>
   
    
    <div class="col-sm-6">
                      <div class="form-group">
                   
     <?php echo $form->textField($model1,'account_no',array('id'=>'account_no', 'class'=>"form-control",'placeholder'=>'Account no.')); ?> 
	   <?php echo $form->error($model1,'account_no'); ?>
   </div>
   </div>
   </div>
   <p class="custom-form-head"><span>5</span>Login Detail</p>
   <?php $model3=new User;?>
    <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
       <?php echo $form->passwordField($model3,'password',array('id'=>'password', 'class'=>"form-control",'placeholder'=>'Password *')); ?> 
	   <?php echo $form->error($model3,'password'); ?>
   </div>
   </div>
   
    
    <div class="col-sm-6">
                      <div class="form-group">
                   
     <?php echo $form->passwordField($model3,'conformpassword',array('id'=>'conformpassword','onChange'=>'confirmpassword(this.value);', 'class'=>"form-control",'placeholder'=>'Confirm password')); ?> 
	   <?php echo $form->error($model3,'conformpassword'); ?>
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
         <?php echo CHtml::button('Save', array('onClick'=>"return validationcheck();",'class'=>'btn btn-primary')); ?>
         
            
           
          </div>
          <!-- /.col -->
        </div>
        
      </section>
    </div>
  </div>
  <?php $this->endWidget(); ?>
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

<script>
 function sponser(){
       // alert('function is call');return false;
		 var sponser_id=$('#SponserID').val();
		 jQuery.ajax({
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/Sponserdetails/checksponser',
                type: "POST",
                data: {sponser_id:sponser_id},  
                success: function(data){
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
		 var mobile=$('#ContactNo1').val();
		 //alert(mobile);return false;
		 jQuery.ajax({
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/Sponserdetails/checkmobile',
                type: "POST",
                data: {mobile:mobile},  
                success: function(data){//alert (data);return false;
				if(data==1){
				   alert("Contact already exist");
				   $("#ContactNo1").focus();
				   document.getElementById("ContactNo1").value="";
				   return false;
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
	  
	  if(err==0){
				
              jQuery.ajax({
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/Site/create',
                type: "POST",
                data: {sponser_id:sponser_id,name:name,dob:dob,address:address,contact_no:contact_no,pan_no:pan_no,ifsc:ifsc,bank_name:bank_name,branch_name:branch_name,account_no:account_no,password:password},  
                 success: function(data){//alert(data);return false;
					 var comb=data.split('/');
                    if(comb[0]==1){
						alert('Record save successfully');
						
						$("#msg").append('<p style="color:green">Record save successfully. Username is '+comb[1]+' </p>' );
						
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
             } else {
             	return false;
             }
}
</script>

