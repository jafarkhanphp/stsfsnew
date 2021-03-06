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
            <li class="">Profile </li>
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
            <div class="panel-heading"> <i class="fa fa-external-link-square"></i> Profile
              <div class="panel-tools"> <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a> <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> </div>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-2">
                    <div class="center">
                      <h4><?php echo $profileDetails['Rid']; ?></h4>
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="user-image">
                          <div class="fileupload-new thumbnail">
                          <?php echo CHtml::image(Yii::app()->request->baseUrl.'/uploads/profile/'.$profileDetails['Image']);?><?php echo CHtml::link('<span>Edit Photo</span>',array('registrations/update_image'), array('class'=>"")); ?> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <table class="table table-condensed table-hover">
                      <thead>
                        <tr>
                          <th colspan="3"><h4>Personal Information</h4></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>Name:</th>
                          <td><?php echo $profileDetails['FirstName']; ?></td>
                        </tr>
                        <tr>
                          <th>Father Name:</th>
                          <td><?php echo $profileDetails['fatherName']; ?></td>
                        </tr>
                        <tr>
                          <th>Mother Name:</th>
                          <td><?php echo $profileDetails['MotherName']; ?></td>
                        </tr>
                        <tr>
                          <th>Gender:</th>
                          <td><?php echo $profileDetails['Sex']; ?></td>
                        </tr>
                        <tr>
                          <th>Marital Status :</th>
                          <td><?php echo $profileDetails['MaritalStatus']; ?></td>
                        </tr>
                        <tr>
                          <th>DOB :</th>
                          <td><?php echo date('d F Y', strtotime($profileDetails['DOB'])); ?></td>
                        </tr>
                        <tr>
                          <th>Occupation :</th>
                          <td><?php //echo $profileDetails['Occupation']; ?></td>
                        </tr>
                        <tr>
                          <th>PanNo :</th>
                          <td><?php echo $profileDetails['PanNo']; ?></td>
                        </tr>
                        <tr>
                          <th>Sponser Details:</th>
                          <td><?php //echo $profileDetails['SponserID']; ?></td>
                        </tr>
                        
                        <tr>
                         <th>ImmediateSponserId:</th>
                          <td><?php echo $profileDetails['ImmediateSponserId']; ?></td>
                        </tr>
                      </tbody>
                    </table>
                    
                    <table class="table table-condensed table-hover">
                      <thead>
                        <tr>
                          <th colspan="3"><h4>Bank Details</h4></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>Bank Name:</th>
                          <td><?php echo $profileDetails['BankName']; ?></td>
                        </tr>
                        <tr>
                          <th>Branch Name:</th>
                          <td><?php echo $profileDetails['BankName']; ?></td>
                        </tr>
                        <tr>
                          <th>IFSC:</th>
                          <td><?php echo $profileDetails['IFSC']; ?></td>
                        </tr>
                        <tr>
                          <th>Account No. :</th>
                          <td><?php echo $profileDetails['AccNo']; ?></td>
                        </tr>
                        <tr>
                          <th>Aaadhar No.:</th>
                          <td><?php echo $profileDetails['adhar_no']; ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-md-6">
                    <table class="table table-condensed table-hover">
                      <thead>
                        <tr>
                          <th colspan="3"><h4>Joining Details</h4></th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        <tr>
                           <th>Joining Amount:</th>
                          <td><?php //echo $profileDetails['amount']; ?></td>
                        </tr>
                        
                        <tr>
                           <th>Registration Date:</th>
                          <td><?php echo date('d F Y', strtotime($profileDetails['created'])); ?></td>
                        </tr>
                       
                        <tr>
                           <th>Position:</th>
                          <td><?php //echo $profileDetails['BinaryPosition']; ?></td>
                        </tr>
                         <tr>
                          <th>Status:</th>
                          <td><?php echo $profileDetails['Status']==0?'Active':'Inactive'; ?></td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="table table-condensed table-hover">
                      <thead>
                        <tr>
                          <th colspan="3"><h4>Contact Details</h4></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                         <th>Email:</th>
                          <td><?php echo $profileDetails['Emailaddress']; ?></td>
                        </tr>
                        <tr>
                         <th>Contact 1:</th>
                          <td><?php echo $profileDetails['ContactNo1']; ?></td>
                        </tr>
                        <tr>
                         <th>Contact 2:</th>
                          <td><?php echo $profileDetails['ContactNo2']; ?></td>
                        </tr>
                        <tr>
                         <th>Address:</th>
                          <td><?php echo $profileDetails['Address']; ?></td>
                        </tr>
                        <tr>
                          <th>State:</th>
                          <td><?php echo $profileDetails['State']; ?></td>
                        </tr>
                        <tr>
                          <th>City :</th>
                          <td><?php echo $profileDetails['City']; ?></td>
                        </tr>
                        <tr>
                         <th>ZipCode:</th>
                          <td><?php echo $profileDetails['ZipCode']; ?></td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="table table-condensed table-hover">
                      <thead>
                        <tr>
                          <th colspan="3"><h4>Account Details</h4></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                           <th>User Name:</th>
                          <td><?php echo $profileDetails['username']; ?></td>
                        </tr>
                        <tr>
                           <th>Password:</th>
                          <td><?php echo $profileDetails['password']; ?></td>
                        </tr>
                       
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end: RESPONSIVE TABLE PANEL --> 
        </div>
      </div>
      
      <!-- end: PAGE CONTENT--> 
    </div>
  </div>
</div>
<script language="javascript">
		
			 function status(Id) {
				 $("#loader").show();
				 jQuery.ajax({
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/packages/status',
                type: "POST",
                data: {id: Id},  
                success: function(data){
					
                    if(data=='1'){
						$("#loader").hide();
						 window.location="<?php echo Yii::app()->request->baseUrl;?>/index.php/packages/index";
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
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/packages/delete',
                type: "POST",
                data: {id: Id},  
                success: function(data){
                    if(data==1){
						$("#"+Id).hide();
						window.location="<?php echo Yii::app()->request->baseUrl;?>/index.php/packages/index";
					} 
					else if(data==2) {
						$("#loader").hide();
						alert('Record exist in many tables');
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
</body>
<!-- end: BODY -->
</html>