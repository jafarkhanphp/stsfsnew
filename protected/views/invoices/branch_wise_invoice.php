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
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/css/theme_light.css" type="text/css" id="skin_color">
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
<link rel="shortcut icon" href="../invoices/favicon.ico" />
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
            <li> <i class="fa  clip-note"></i> Report </li>
            <li class="active">Branch Wise Invoice</li>
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
									$i=0;
								?>
          <!-- start: RESPONSIVE TABLE PANEL -->
          <div class="panel panel-default">
            <div class="panel-heading"> <i class="fa fa-external-link-square"></i>Branch Wise Invoice
              <div class="panel-tools"> <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a> </div>
            </div>
            <div class="panel-body">
              <?php $form=$this->beginWidget('CActiveForm', array('id'=>'registrations-form', 'enableAjaxValidation'=>false)); ?>
              <div class="col-sm-1"><?php echo $form->labelEx($model,'From',array('class'=>"",)); ?></div>
              <div class="col-sm-2">
                <?php $connection=Yii::app()->db;
								$sql1="SELECT DISTINCT cycle_date_from, DATE_FORMAT(cycle_date_from, '%d/%m/%Y') as dateformate FROM invoices order by  cycle_date_from desc  ";
								$command1=$connection->createCommand($sql1);
								$row1=$command1->queryAll();
								$listdata3 = CHtml::listData($row1, 'cycle_date_from', 'dateformate');
								echo $form->dropDownList($model, 'From', $listdata3, array('options' => array($searchdetails['fromDt']=>array('selected'=>true)), 'prompt' => 'Select From Date','class'=>"form-control",'id'=>""));?>
              </div>
              <div class="col-sm-1"><?php echo $form->labelEx($model,'To',array('class'=>"",)); ?></div>
              <div class="col-sm-2">
                <?php $connection=Yii::app()->db;
								$sql2="SELECT DISTINCT cycle_date_to, DATE_FORMAT(cycle_date_to, '%d/%m/%Y') as dateformate FROM invoices order by  cycle_date_to  desc  ";
								$command2=$connection->createCommand($sql2);
								$row2=$command2->queryAll();
								$listdata2 = CHtml::listData($row2, 'cycle_date_to', 'dateformate');
								echo $form->dropDownList($model, 'To', $listdata2, array('options' => array($searchdetails['toDt']=>array('selected'=>true)), 'prompt' => 'Select To Date','class'=>"form-control",'id'=>""));?>
              </div>
              <div class="col-sm-1"><?php echo $form->labelEx($model,'Branch',array('class'=>"",)); ?></div>
              <div class="col-sm-3">
                <?php $connection=Yii::app()->db;
								$sql2="SELECT DISTINCT id, branch_name FROM branch  ";
								$command2=$connection->createCommand($sql2);
								$row2=$command2->queryAll();
								$listdata2 = CHtml::listData($row2, 'id', 'branch_name');
								echo $form->dropDownList($model, 'Branch', $listdata2, array('options' => array($searchdetails['Branch']=>array('selected'=>true)), 'prompt' => 'Select Branch','class'=>"form-control",'id'=>""));?>
              </div>
              <div class="col-sm-2"><?php echo CHtml::submitButton('Search',array('class'=>"btn btn-blue next-step btn-block")); ?></div>
              <?php $this->endWidget(); ?>
            </div>
          </div>
          <!-- end: RESPONSIVE TABLE PANEL -->
          <div class="panel panel-default">
            <div class="panel-heading"> <i class="fa fa-external-link-square"></i>Branch Wise Invoice (Total Invoice : <?php echo $fireQuery==''?'0':count($fireQuery);?>) (Total Amount:  <?php echo  $totalamt; ;?>)
              <div class="panel-tools"> <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a> </div>
            </div>
            <div class="panel-body " >
              <div class="col-sm-12">
                <div class="table-responsive">
                  <?php if(!empty($fireQuery)){	?>
                  <div class="col-md-12 space20"> <?php 
					$checkPermission=Yii::app()->session['permissions'];
					if($checkPermission[0]['exports']==0){
						echo CHtml::link('Export in Excel <i class="fa clip-list-6"></i>',array('invoices/Branch_Wise_Invoice_Export/From/'.$searchdetails['fromDt'].'/To/'.$searchdetails['toDt'].'/Branch/'.$searchdetails['Branch']), array('class'=>"btn btn-orange add-row")); 
					}
		?>
          
        </div>
                  <table class="table table-bordered table-hover" id="sample-table-1">
                    <tr>
                      <th>Invoice Id </th>
                      <th>RID </th>
                      <th>Name</th>
                      <th>From </th>
                      <th>To</th>
                      <th>Total BV </th>
                      <th>Amount</th>
                      <th>Payment Status </th>
                      <th>Action</th>
                    </tr>
                    <?php 
									foreach($fireQuery as $memberDetails){  
										if($memberDetails!=''){
									?>
                    <tr>
                      <td><?php echo $memberDetails['id'];?></td>
                      <td><?php echo $memberDetails['rid'];?></td>
                      <td><?php echo $memberDetails['FirstName'];?></td>
                      <td><?php echo $memberDetails['cycle_date_from'];?></td>
                      <td><?php echo $memberDetails['cycle_date_to'];?></td>
                      <td><?php echo $memberDetails['total_bv'];?></td>
                      <td><?php echo $memberDetails['gross_amount'];?></td>
                      <td> <?php if($memberDetails['payment_status']!=0){
							echo '<span class="label label-sm label-success">Paid</span>';
						} else {
							echo ' <span class="label label-sm label-danger">Unpaid</span>';
						}
						?>
    				</td>
                      <td><?php 	
					  $checkPermission=Yii::app()->session['permissions'];
					  if($checkPermission[0]['prints']==0){
	   echo CHtml::link('<i class="fa fa-print "></i>',array('invoices/invoice_print/id/'.base64_encode($memberDetails['id'])), array('data-original-title'=>"Print", 'data-placement'=>"top", 'title'=>'Invoice Print', 'class'=>"btn btn-xs btn-teal tooltips", 'target'=>"_blank")); } ?></td>
                    </tr>
                    <?php } ?>
                    <?php $i++ ;} ?>
                  </table>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
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