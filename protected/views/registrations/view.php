<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<head>
<title>Member Profile :- <?php echo CHtml::encode($this->pageTitle); ?></title>
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
<!-- end: MAIN CSS -->
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/select2/select2.css">
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
</head><!-- start: HEADER -->

<div class="navbar navbar-inverse navbar-fixed-top"> 
  <!-- start: TOP NAVIGATION CONTAINER -->
  <div class="container">
    <?php  require_once(Yii::app()->basePath . '/views/layouts/topbar.php');?>
  </div>
  <!-- end: TOP NAVIGATION CONTAINER --> 
</div>
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
            <li class="active"> Member Profile </li>
            
          </ol>
          <br>
          <!-- end: PAGE TITLE & BREADCRUMB --> 
        </div>
      </div>
      <!-- end: PAGE HEADER --> 
      <!-- start: PAGE CONTENT -->
      
      <div class="row">
        
        
      </div>
      
      <!-- end: RESPONSIVE TABLE PANEL -->
      
      <div class="panel panel-default">
        <div class="panel-heading"> <i class="fa fa-external-link-square"></i> Profile (<?php echo $model->Rid;?>)
          <div class="panel-tools"> <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a> <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> </div>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-2">
                <div class="center">
                  <h4>
                    <?php echo $model->FirstName; ?>
                  </h4>
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="user-image">
                      <div class="fileupload-new thumbnail">
                        <?php echo CHtml::image(Yii::app()->request->baseUrl.'/uploads/profile/'.$model->Image);?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <table class="table table-condensed table-hover">
                  <thead>
                    <tr>
                      <th colspan="3">Contact Information</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Name:</td>
                      <td><?php echo $model->FirstName; ?></td>
                    </tr>
                    <tr>
                      <td>Joining Package:</td>
                      <td><?php echo Packages::model()->getPackagenameByid($model->package_id); ?></td>
                    </tr>
                    <tr>
                      <td>Joining BV:</td>
                      <td><?php echo $model->bv; ?></td>
                    </tr>
                    <tr>
                      <td>Joining Date:</td>
                      <td><?php echo date('d F Y', strtotime($model->RegistrationDate)); ?></td>
                    </tr>
                     <tr>
                      <td>Father Name:</td>
                      <td><?php echo $model->fatherName; ?></td>
                    </tr>
                    <tr>
                      <td>Mother Name:</td>
                      <td><?php echo $model->MotherName; ?></td>
                    </tr>
                    <tr>
                      <td>Marital Status:</td>
                      <td><?php echo $model->MaritalStatus; ?></td>
                    </tr>
                    <tr>
                      <td>DOB:</td>
                      <td><?php echo date('d F Y', strtotime($model->DOB)); ?></td>
                    </tr>
                    <tr>
                      <td>Email :</td>
                      <td><?php echo $model->ContactNo1; ?></td>
                    </tr>
                    <tr>
                      <td>Colntact No.:</td>
                      <td><?php echo $model->ContactNo1; ?></td>
                    </tr>
                    
                  </tbody>
                </table>
                <table class="table table-condensed table-hover">
                  <thead>
                    <tr>
                      <th colspan="3">Bank Information</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Bank Name:</td>
                      <td><?php echo $bankDetail['BankName'] ; ?></td>
                    </tr>
                    <tr>
                      <td>Branch Name:</td>
                      <td><?php echo $bankDetail['BranchName'] ; ?></td>
                    </tr>
                    <tr>
                      <td>Micer No:</td>
                      <td><?php echo $bankDetail['MicerNo'] ; ?></td>
                    </tr>
                    <tr>
                      <td>IFSC:</td>
                      <td><?php echo $bankDetail['IFSC'] ; ?></td>
                    </tr>
                    <tr>
                      <td>Account No. :</td>
                      <td><?php echo $bankDetail['AccNo'] ; ?></td>
                    </tr>
                    <tr>
                      <td>PanNo:</td>
                      <td><?php echo $model['PanNo'] ; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-6">
                <table class="table table-condensed table-hover">
                  <tbody>
                    <tr>
                      <td>Address:</td>
                      <td><?php echo $model->Address; ?></td>
                    </tr>
                    <tr>
                      <td>City:</td>
                      <td><?php echo $model->City; ?></td>
                    </tr>
                    <tr>
                      <td>State:</td>
                      <td><?php echo $model->State; ?></td>
                    </tr>
                    <tr>
                      <td>Zip Code:</td>
                      <td><?php echo $model->ZipCode; ?></td>
                    </tr>
                    <tr>
                      <td>Immediate SponserId:</td>
                      <td><?php echo $model->ImmediateSponserId; ?></td>
                    </tr>
                    <tr>
                      <td>SponserID:</td>
                      <td><?php echo $model->SponserID; ?></td>
                    </tr>
                    <tr>
                      <td>PanNo:</td>
                      <td><?php echo $model->PanNo; ?></td>
                    </tr>
                    <tr>
                      <td>Created Date:</td>
                      <td><?php echo date('d F Y', strtotime($model->created)); ?></td>
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
<!-- end: PAGE -->
</div>
<!-- end: MAIN CONTAINER -->
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
				FormElements.init();
			});
		</script> 
<script language="javascript">
         function status(Id) {
				 return false//Without date expire you can not status change
				  $("#loader").show();
				 jQuery.ajax({
                // The url must be appropriate for your configuration;
                // this works with the default config of 1.1.11
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/Franchise/Status',
                type: "POST",
                data: {Id: Id},  
                success: function(data){
                    if(data!='error'){
						//var yesno= data=='Y' ? '<span class="icon12 icon-ok">': '<span class="icon12  icon-ban-circle">';
						//$("#statusId"+Id).empty();
                        // $("#statusId"+Id).append(yesno);
						$("#loader").hide();
						window.location='';
					} else {
						$("#loader").hide();
						alert('Status not update');
					}
                    }
                });
		 }
		 function removeData(Id) {
			 	if(!confirm("Are you sure you2
				 want to delet record.")){
					return false;
				}
			 
				 $("#loader").show();
				 jQuery.ajax({
                // The url must be appropriate for your configuration;
                // this works with the default config of 1.1.11
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/Franchise/Delete',
                type: "POST",
                data: {Id: Id},  
                success: function(data){
					
                    if(data!='error'){
                         $("#tableID"+Id).hide();
						$("#loader").hide();
					} else {
						$("#loader").hide();
						alert('Record could not be deleted because student exist in Franchise!');
					}
                    }
                });
		 }
			 
 </script>
</body><!-- end: BODY -->
</html>