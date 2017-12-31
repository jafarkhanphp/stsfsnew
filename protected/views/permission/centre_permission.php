<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
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
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/css/theme_green.css" type="text/css" id="skin_color">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/css/print.css" type="text/css" media="print"/>
<!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
<!-- end: MAIN CSS -->
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/dynatree/src/skin-vista/ui.dynatree.css">

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/select2/select2.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/x-editable/css/bootstrap-editable.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/typeaheadjs/lib/typeahead.js-bootstrap.css">





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
    <div class="container"> 
      <!-- start: PAGE HEADER -->
      <div class="row">
        <div class="col-sm-12">
          <ol class="breadcrumb">
								<li> <i class="fa  clip-home"></i> <?php echo CHtml::link('<span class="title">Dashboard</span><span class=""></span>',array('site/dashboard'), array('class'=>"")); ?> </li>
								<li class="active">
								<i class="fa fa clip-user"></i>	<?php echo CHtml::link('<span class="title">User Permission ('.User::model()->getUserIDandPassByUserCode($userID).')</span><span class="selected"></span>',array('user/index'), array('class'=>"")); ?>
								</li>
                               
								
							</ol>
          <br>
          <!-- end: PAGE TITLE & BREADCRUMB --> 
        </div>
      </div>
      <!-- end: PAGE HEADER --> 
      <!-- start: PAGE CONTENT -->
      
      <div class="row">
        <div class="col-md-6"> 
          <!-- start: MULTI-SELECTION PANEL -->
          <div class="panel panel-default">
            <div class="panel-heading"> <i class="fa fa-sitemap"></i> User Permission
              <div class="panel-tools"> <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a> <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> </div>
            </div>
            <div class="panel-body">
              
              <div id="tree11"></div>
            </div>
          </div>
          <!-- end: MULTI-SELECTION PANEL --> 
        </div>
        <div class="col-md-6">
							<!-- start: INIT FROM JS OBJECT PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa  clip-settings "></i>
									User Action 
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									<table id="user" class="table table-bordered table-striped" style="clear: both">
								<tbody>
									<tr>
										<td class="column-left">Add Permission</td>
										<td class="column-right">
                                         <?php 
										
										//print_r('<pre>');   print_r($rolesDetails['adds']);   print_r('</pre>');  exit;
										?>
										<a href="#" id="adds" data-type="select" data-pk="<?php echo $rolesDetails['id'];?>" data-value="<?php echo $rolesDetails['adds']?>" data-original-title="Enter username">
											<?php $rolesDetails['adds']==0?'Yes':'No';?>
										</a></td>
									</tr>
                                    <tr>
										<td class="column-left">Edit Permission</td>
										<td class="column-right">
                                         
										<a href="#" id="edits" data-type="select" data-pk="<?php echo $rolesDetails['id'];?>" data-value="<?php echo $rolesDetails['edits']?>" data-original-title="Enter username">
											<?php $rolesDetails['edits']==0?'Yes':'No';?>
										</a></td>
									</tr>
                                    <tr>
										<td class="column-left">Delete Permission</td>
										<td class="column-right">
                                         
										<a href="#" id="deletes" data-type="select" data-pk="<?php echo $rolesDetails['id'];?>" data-value="<?php echo $rolesDetails['deletes']?>" data-original-title="">
											<?php $rolesDetails['deletes']==0?'Yes':'No';?>
										</a></td>
									</tr>
                                    <tr>
										<td class="column-left">View Permission</td>
										<td class="column-right">
                                         
										<a href="#" id="view" data-type="select" data-pk="<?php echo $rolesDetails['id'];?>" data-value="<?php echo $rolesDetails['view']?>" data-original-title="">
											<?php $rolesDetails['view']==0?'Yes':'No';?>
										</a></td>
									</tr>
                                    <tr>
										<td class="column-left">Lists Permission</td>
										<td class="column-right">
                                         
										<a href="#" id="lists" data-type="select" data-pk="<?php echo $rolesDetails['id'];?>" data-value="<?php echo $rolesDetails['lists']?>" data-original-title="">
											<?php $rolesDetails['lists']==0?'Yes':'No';?>
										</a></td>
									</tr>
                                    <tr>
										<td class="column-left">Prints Permission</td>
										<td class="column-right">
                                         
										<a href="#" id="prints" data-type="select" data-pk="<?php echo $rolesDetails['id'];?>" data-value="<?php echo $rolesDetails['prints']?>" data-original-title="">
											<?php $rolesDetails['prints']==0?'Yes':'No';?>
										</a></td>
									</tr>
                                    <tr>
										<td class="column-left">Import Permission</td>
										<td class="column-right">
                                         
										<a href="#" id="imports" data-type="select" data-pk="<?php echo $rolesDetails['id'];?>" data-value="<?php echo $rolesDetails['import']?>" data-original-title="">
											<?php $rolesDetails['import']==0?'Yes':'No';?>
										</a></td>
									</tr>
                                    <tr>
										<td class="column-left">Exports Permission</td>
										<td class="column-right">
                                         
										<a href="#" id="exportstt" data-type="select" data-pk="<?php echo $rolesDetails['id'];?>" data-value="<?php echo $rolesDetails['exports']?>" data-original-title="">
											<?php $rolesDetails['exports']==0?'Yes':'No';?>
										</a></td>
									</tr>
                                    
                                    
									
								</tbody>
							</table>
									
								</div>
							</div>
							<!-- end: INIT FROM JS OBJECT PANEL -->
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
<!-- end: MAIN JAVASCRIPTS --> 
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY --> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/dynatree/src/jquery.dynatree.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jquery-mockjax/jquery.mockjax.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/x-editable/js/bootstrap-editable.min.js"></script>


<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY --> 
<script>
			jQuery(document).ready(function() {
				Main.init();
				//alert('sdfsdf');
			});
			
			jQuery(document).ready(function() {     
				$.fn.editable.defaults.mode = 'popup';
				    $('#adds').editable({
							   source: [
								{value: 0, text: 'Yes'},
								{value: 1, text: 'No'}
							],
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/roles/adds',
        						title: 'Enter Add Permission',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								    
								}
    });
	
					$('#edits').editable({
							   source: [
								{value: 0, text: 'Yes'},
								{value: 1, text: 'No'}
							],
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/roles/edits',
        						title: 'Enter Edit Permission',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								    
								}
    				});
					
					$('#deletes').editable({
							   source: [
								{value: 0, text: 'Yes'},
								{value: 1, text: 'No'}
							],
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/roles/deletes',
        						title: 'Enter deletes Permission',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								    
								}
    				});
					
					$('#view').editable({
							   source: [
								{value: 0, text: 'Yes'},
								{value: 1, text: 'No'}
							],
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/roles/view',
        						title: 'Enter view Permission',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								    
								}
    				}); 
					$('#lists').editable({
							   source: [
								{value: 0, text: 'Yes'},
								{value: 1, text: 'No'}
							],
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/roles/lists',
        						title: 'Enter lists Permission',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								    
								}
    				});
					$('#prints').editable({
							   source: [
								{value: 0, text: 'Yes'},
								{value: 1, text: 'No'}
							],
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/roles/prints',
        						title: 'Enter prints Permission',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								    
								}
    				});
					$('#imports').editable({
							   source: [
								{value: 0, text: 'Yes'},
								{value: 1, text: 'No'}
							],
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/roles/Imports',
        						title: 'Enter Import Permission',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								    
								}
    				});
					$('#exportstt').editable({
							   source: [
								{value: 0, text: 'Yes'},
								{value: 1, text: 'No'}
							],
							   url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/roles/exports',
        						title: 'Enter exports Permission',
								validate: function(value) {
								   if($.trim(value) == '') return 'This field is required';
								    
								}
    				});
					
					
					
				
			});
			
			
			
		</script>
<script>
			var treeData = [
			<?php 
			for($i=0;$i<(count($menuData));$i++){ ?>
				{
				title: "<?php echo $menuData[$i]['name'] ?>",
				key: "<?php echo $menuData[$i]['id'] ?>-<?php echo $menuData[$i]['parent_id'] ?>",
				<?php $menuCount=Permission::model()->getMenuId($menuData[$i]['id'], $loginUserID);
				 if($menuCount!=0){?>
				select: true,
				<?php } ?>
				<?php $subMenu=Menus::model()->getSubMenu($menuData[$i]['id']);
				if(!empty($subMenu)){ ?>
				children: [
				<?php for($j=0;$j<(count($subMenu));$j++){?>
				{
                title: "<?php echo $subMenu[$j]['name'] ?>",
				key: "<?php echo $subMenu[$j]['id'] ?>-<?php echo $subMenu[$j]['parent_id'] ?>",
				<?php $menuCount=Permission::model()->getMenuId($subMenu[$j]['id'], $loginUserID);
				 if($menuCount!=0){?>
				select: true,
				<?php } ?>
            	}, 
				<?php } ?>

				]
				<?php } ?>
				 },
			<?php  }?>
			];
			jQuery(document).ready(function() {
				//UITreeview.init();
				$("#tree11").dynatree({
            	checkbox: true,
            	selectMode: 2,
           		children: treeData,
            	onSelect: function (select, node) {
                // Display list of selected nodes
                var selNodes = node.tree.getSelectedNodes();
                // convert to title/key array
                var selKeys = $.map(selNodes, function (node) {
                    return "[" + node.data.key + "]: '" + node.data.title + "'";
                });
				
				
            },
			onSelect: function(select, node) {
        		 if (select) {
					var string = node.data.key;
					var list = string.split("-"); 
					var menuID=list[0];
					var parentId=list[1];
					jQuery.ajax({
						url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/permission/active',
						type: "POST",
						data: {menuID: menuID, parentId: parentId, UserID:<?php echo $loginUserID;?>},  
						success: function(data){
						//return false ;
					   
						}
					});
					
				} else {
					var string = node.data.key;
					var list = string.split("-"); 
					var menuID=list[0];
					var parentId=list[1];
					jQuery.ajax({
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/permission/delete',
                type: "POST",
                data: {menuID: menuID, parentId: parentId, UserID:<?php echo $userID;?>},  
                success: function(data){
					//return false ;
                   
                    }
                });
				}
     		 },
			
			
            onClick: function (node, event) {
                // We should not toggle, if target was "checkbox", because this
                // would result in double-toggle (i.e. no toggle)
                if (node.getEventTargetType(event) == "title")
                    node.toggleSelect();
            },
            
            // The following options are only required, if we have more than one tree on one page:
            cookieId: "dynatree-Cb2",
            idPrefix: "dynatree-Cb2-"
        });
			});
		</script>
</body>
<!-- end: BODY -->
</html>