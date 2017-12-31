<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<head>
<title>Member Network:-<?php echo CHtml::encode($this->pageTitle); ?></title>
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
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/qtip/tipped.css">

<!-- jQuery FIRST i.e. before qTip (and all other scripts too usually) -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/jQuery-lib/2.0.3/jquery.min.js"></script>

<!-- Include either the minifed or production version, NOT both!! -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/qtip/spinners.min.js"></script>

<!-- Optional: imagesLoaded script to better support images inside your tooltips -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/qtip/tipped.js"></script>

<script type='text/javascript'>
//By creating tooltips after DOM load we make sure that referenced elements are available.
jQuery(document).ready(function($) {
  $('.tooltip-from-element1').each(function() { var selector = '#' + $(this).data('tooltip-id'); Tipped.create(this, $(selector)[0]);  });
   $('.tooltip-from-element2').each(function() { var selector = '#' + $(this).data('tooltip-id'); Tipped.create(this, $(selector)[0]);  });
   $('.tooltip-from-element3').each(function() { var selector = '#' + $(this).data('tooltip-id'); Tipped.create(this, $(selector)[0]);  });
   $('.tooltip-from-element4').each(function() { var selector = '#' + $(this).data('tooltip-id'); Tipped.create(this, $(selector)[0]);  });
    $('.tooltip-from-element5').each(function() { var selector = '#' + $(this).data('tooltip-id'); Tipped.create(this, $(selector)[0]);  });
  $('.tooltip-from-element6').each(function() { var selector = '#' + $(this).data('tooltip-id'); Tipped.create(this, $(selector)[0]);  });
   $('.tooltip-from-element7').each(function() { var selector = '#' + $(this).data('tooltip-id'); Tipped.create(this, $(selector)[0]);  });
});
</script>

    <div class="container"> 
      <!-- start: PAGE HEADER -->
      <div class="row">
    <div class="col-sm-12"> 
      
      <!-- start: PAGE TITLE & BREADCRUMB -->
      <ol class="breadcrumb">
        <li> <i class="clip-home-3"></i> <a href="#">Dashboard</a> </li>
        <li class="active">Network</li>
      </ol>
    </div>
  </div>
      <!-- end: PAGE HEADER --> 
      <!-- start: PAGE CONTENT -->
      <div class="row">
   
    <div class="col-md-12 space20" align="center">
        <?php //echo Registrations::model()->CountTotalGreenRight('10015647'); //exit;?>
      <table border="0" >
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td align="center"><div  style="text-align:center" >
                <span class='tooltip-from-element1' data-tooltip-id='tooltip-example-1'  >
                <?php
				$userID=Yii::app()->user->id;
				if($_GET['id']!=''){
				  		$firstNode=$_GET['id'];
				} else {
					
					$result=Yii::app()->db->createCommand('SELECT User.usercode, User.user_type  FROM user AS User  
					WHERE User.id ="'.$userID.'"')->queryRow();
					 if($result['user_type']==0 || $result['user_type']==1 || $result['user_type']==3){
						 $checkUser=Staff::model()->getRIDById($result['usercode']);
						 if($checkUser==0){
							$firstNode='10010001'; 	
						 } else {
								$firstNode=$checkUser; 
						 }
						
					 } else if($result['user_type']==2) {
						 $firstNode=$result['usercode']; 
					 } 
				}
					 $result1=Registrations::model()->networkDetails($firstNode);
					 
				?>
               
				<?php 
				if($result1['bv']==0){
					$result1['Sex']=='Male'? $sexDetail='men-red.png':$sexDetail='red.png';	
				} else {
					$result1['Sex']=='Male'? $sexDetail='male.png':$sexDetail='female.png';
				}
				
				echo CHtml::image(Yii::app()->request->baseUrl."/images/".$sexDetail,$this->pageTitle=Yii::app()->name, array('align'=>'middle', 'width'=>'150', 'height'=>"150")); ?>
                </span>
          
            </div>
            <div style="text-align:center">
              <?php 
			  		echo $firstNode;
					echo '<br>';
					echo $result1['FirstName'];
			   ?>
             </div>
             <div id='tooltip-example-1' style='display:none;'>
             <table border="0"  width="100%"  >
            	<tr>
                	<td colspan="3">
						<?php echo $result1['FirstName']; ?> (<?php echo $firstNode; ?>) 
					</td>
				</tr>
                <tr>
                	<td>Sponser ID:</td>
                    <td><?php echo $result1['SponserID'];?></td>
                   <td rowspan="6"><?php  if($result1['Image']!=''){
				   		echo CHtml::image(Yii::app()->request->baseUrl."/uploads/profile/".$result1['Image'],$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100"));
					} else {
						echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
					} ?></td>
                </tr>
                <tr>
                	<td>Registration Date:</td>
                    <td><?php echo date('d F Y',strtotime($result1['created']));?></td>
                    
                </tr>
                <tr>
                	<td>Total Left BV :</td>
                    <td><span style="color:#F00"><b><?php echo $result1['tota_left_bv'];?></b></span></td>
               </tr>
                 <tr>
                	<td>Total Right BV:</td>
                    <td><span style="color:#F00"><b><?php echo $result1['total_right_bv']; ?></b></span></td>
                </tr>
                <tr>
                	<td>Package Name :&nbsp;</td>
                    <td><?php echo $result1['package_name'];?> </td>
                </tr>
              
                <tr>
                	<td>MBV :</td>
                    <td><?php echo $result1['total_mbv'];?> X 10=<?php echo ($result1['total_mbv'])*10;?> Rs. </td>
                </tr>
            </table>
       	 </div>
           </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td align="center"><div style="text-align:center; margin-top:-3px">
		  	<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/downline.png",$this->pageTitle=Yii::app()->name, array('class'=>"", 'align'=>'middle', 'width'=>'5', 'height'=>"50")); ?>
		</div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="4" align="center"><div style="text-align:center; margin-top:-19px">
		  <?php echo CHtml::image(Yii::app()->request->baseUrl."/images/line.png",$this->pageTitle=Yii::app()->name, array('class'=>"",'align'=>'middle', 'width'=>'400', 'height'=>"5")); ?>
		  </div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="20px"><div style="margin-top:-20px; float:left">
		  <?php echo CHtml::image(Yii::app()->request->baseUrl."/images/downline.png",$this->pageTitle=Yii::app()->name, array('align'=>'middle', 'width'=>'5', 'height'=>"50")); ?>
		 </div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td width="20px"><div style="margin-top:-20px; float:right">
		  <?php echo CHtml::image(Yii::app()->request->baseUrl."/images/downline.png",$this->pageTitle=Yii::app()->name, array('align'=>'middle', 'width'=>'5', 'height'=>"50")); ?>
		  </div></td>
          <td >&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" align="center"><span>
          		<div style="text-align:center ;  margin-left:-25px; text-align:center" class="demo_skins_dark" >
                
                    <?php
						$result2=Registrations::model()->networSponserkDetails($firstNode);
						if(!empty($result2)){
							if($result2['LNode']!=''){
								echo "<span class='tooltip-from-element2' data-tooltip-id='tooltip-example-2'>";
								$LeftNode1=$result2['LNode'];
								$result21=Registrations::model()->networkDetails($LeftNode1);
								if($result21['bv']==0){
									$result21['Sex']=='M'? $sexDetail2='men-red.png':$sexDetail2='red.png';	
								} else {
									$result21['Sex']=='M'? $sexDetail2='male.png':$sexDetail2='female.png';
								}
								echo CHtml::image(Yii::app()->request->baseUrl."/images/".$sexDetail2,$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100"));
								echo '<br>';
								echo CHtml::link($LeftNode1,array('registrations/network/id/'.$LeftNode1), array('class'=>"")); 
								echo '<br>';
								echo $result21['FirstName'];
							
								echo '</span>';
							} else {
								echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
								echo '<br>';
								echo 'Empty';
								echo '<br>';
								echo 'Empty';
							}
						} else {
							echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
							echo '<br>';
							echo 'Empty';
							echo '<br>';
							echo 'Empty';
						}
						
					?>
                        
                </div>        
            </span>
            <?php if(!empty($result2)){
						if($result2['LNode']!=''){
				 ?>
						<div id='tooltip-example-2' style='display:none;'>
							<table border="0"  width="100%" style="" >
							<tr>
								<td colspan="3">
								<?php echo $result21['FirstName']; ?> (<?php echo $LeftNode1; ?>) 
								 
								</td>
							</tr>
							<tr>
								<td>Sponser ID:</td>
								<td><?php echo $result21['SponserID'];?></td>
							   <td rowspan="6"><?php 
								if($result21['Image']!=''){
									echo CHtml::image(Yii::app()->request->baseUrl."/uploads/profile/".$result21['Image'],$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100"));
								} else {
									echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
								}?></td>
							</tr>
                
							<tr>
								<td>Total Left BV :</td>
								<td><span style="color:#F00"><b><?php echo $result21['tota_left_bv'] ;?></b></span></td>
							   
							</tr>
							 <tr>
								<td>Total Right BV :</td>
								<td><span style="color:#F00"><b><?php echo $result21['total_right_bv'];?></b></span></td>
							</tr>
							<tr>
								<td>Package Name :&nbsp;</td>
								<td><?php echo $result21['package_name'];?> </td>
							</tr>
							<tr>
								<td>Registration Date:</td>
								<td><?php echo date('d F Y',strtotime($result21['created']));?></td>
							</tr>
               				<tr>
								<td>MBV :</td>
								<td><?php echo $result21['total_mbv'];?>
								X10=<?php echo $result21['total_mbv']*10;?> Rs.</td>
							</tr>
               
            </table>
       	 </div>
         	<?php }} ?>
            </td>
          <td>&nbsp;</td>
          <td colspan="3">
          		<div style="text-align:center ; margin-right:-15px; ">
                		<?php
						$result3=Registrations::model()->networSponserkDetails($firstNode);
						if(!empty($result3)){
							if($result3['RNode']!=''){
								echo "<span class='tooltip-from-element3' data-tooltip-id='tooltip-example-3'>";
								$RightNode1=$result3['RNode'];
								$result31=Registrations::model()->networkDetails($RightNode1);
								if($result31['bv']==0){
									$result31['Sex']=='Male'? $sexDetail3='men-red.png':$sexDetail3='red.png';
								} else {
									$result31['Sex']=='Male'? $sexDetail3='male.png':$sexDetail3='female.png';
								}
								
								echo CHtml::image(Yii::app()->request->baseUrl."/images/".$sexDetail3,$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100"));
								echo '<br>';
								echo CHtml::link($RightNode1,array('registrations/network/id/'.$RightNode1), array('class'=>"")); 
								echo '<br>';
								echo $result31['FirstName'];
								echo '</span>';
							} else {
								 echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
								echo '<br>';
								echo 'Empty';
								echo '<br>';
								echo 'Empty';
							}
						} else {
							 echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
							echo '<br>';
							echo 'Empty';
							echo '<br>';
							echo 'Empty';
						}
						
					?>
                        
          </div>
            <?php if(!empty($result3)){ 
						if($result3['RNode']!=''){
			?>
						<div id='tooltip-example-3' style='display:none;'>
						<table border="0"  width="100%" style="" >
							<tr>
								<td colspan="3">
								<?php echo $result31['FirstName']; ?> (<?php echo $RightNode1; ?>) 
								 </td>
							</tr>
							<tr>
								<td>Sponser ID:</td>
								<td><?php echo $result31['SponserID'];?></td>
							   <td rowspan="6"><?php 
								if($result31['Image']!=''){
									echo CHtml::image(Yii::app()->request->baseUrl."/uploads/profile/".$result31['Image'],$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100"));
								} else {
									echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
								}?></td>
							</tr>
							<tr>
								<td>Registration Date:</td>
								<td><?php echo date('d F Y',strtotime($result31['created']));?></td>
								
							</tr>
							<tr>
								<td>Total Left BV :</td>
								<td><span style="color:#F00"><b><?php echo $result31['tota_left_bv'];?></b></span></td>
							</tr>
							 <tr>
								<td>Total Right BV :</td>
								<td><span style="color:#F00"><b><?php echo $result31['total_right_bv'];?>			</tr>
							<tr>
								<td>Package Name :&nbsp;</td>
								<td><?php echo $result31['package_name'];?> </td>
							</tr>
                
							<tr>
								<td>MBV :</td>
								<td><?php echo $result31['total_mbv'];?>X10=<?php echo $result31['total_mbv']*10;?>Rs. </td>
							</tr>
            </table>
       	 </div>
         	<?php } } ?> 
            </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><div style=" margin-top:-1px"> <?php echo CHtml::image(Yii::app()->request->baseUrl."/images/downline.png",$this->pageTitle=Yii::app()->name, array('align'=>'middle', 'width'=>'5', 'height'=>"50")); ?></div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td width="110px">&nbsp;</td>
          <td><div style="margin-top:-1px"> <?php echo CHtml::image(Yii::app()->request->baseUrl."/images/downline.png",$this->pageTitle=Yii::app()->name, array('align'=>'middle', 'width'=>'5', 'height'=>"50")); ?></div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3"><div style="margin-top:-20px; text-align:center">
		  	<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/line.png",$this->pageTitle=Yii::app()->name, array('align'=>'middle', 'width'=>'150', 'height'=>"5")); ?>
		  </div></td>
          <td>&nbsp;</td>
          <td colspan="3"><div style="text-align:center; margin-top:-20px">
		  <?php echo CHtml::image(Yii::app()->request->baseUrl."/images/line.png",$this->pageTitle=Yii::app()->name, array('align'=>'middle', 'width'=>'150', 'height'=>"5",)); ?></div></td>
        </tr>
        <tr>
          <td><div style=" margin-top:-20px; margin-left:38px">
		  <?php echo CHtml::image(Yii::app()->request->baseUrl."/images/downline.png",$this->pageTitle=Yii::app()->name, array('align'=>'middle', 'width'=>'5', 'height'=>"50")); ?>
		 </div></td>
          <td>&nbsp;</td>
          <td><div style="margin-top:-21px; margin-left:65px;">
		  	<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/downline.png",$this->pageTitle=Yii::app()->name, array('align'=>'middle', 'width'=>'5', 'height'=>"50",)); ?>
		 </div></td>
          <td>&nbsp;</td>
          <td><div style="margin-top:-20px; margin-left:31px">
		  	<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/downline.png",$this->pageTitle=Yii::app()->name, array('align'=>'middle', 'width'=>'5', 'height'=>"50",)); ?></div></td>
          <td>&nbsp;</td>
          <td><div style="margin-top:-21px; margin-left:64px;"><?php echo CHtml::image(Yii::app()->request->baseUrl."/images/downline.png",$this->pageTitle=Yii::app()->name, array('align'=>'middle', 'width'=>'5', 'height'=>"50",)); ?></div></td>
        </tr>
        <tr>
          <td align="center">
                    	<?php 
                     if(!empty($result2)){
						if($result2['LNode']!=''){
								$LefttNode2=$result2['LNode'];
								$result4=Registrations::model()->networSponserkDetails($LefttNode2);
									if(!empty($result4)){
							 			if($result4['LNode']!=''){
											echo "<span class='tooltip-from-element4' data-tooltip-id='tooltip-example-4'>";
											$LeftNode2Left=$result4['LNode'];
											$result41=Registrations::model()->networkDetails($LeftNode2Left);
											if($result41['bv']==0){
												$result41['Sex']=='M'? $sexDetail4='men-red.png':$sexDetail4='red.png';
											} else {
												$result41['Sex']=='M'? $sexDetail4='male.png':$sexDetail4='female.png';
											}
											echo CHtml::image(Yii::app()->request->baseUrl."/images/".$sexDetail4,$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100"));
											echo '<br>';
											echo CHtml::link($LeftNode2Left,array('registrations/network/id/'.$LeftNode2Left), array('class'=>""));
											echo '<br>';
											echo wordwrap($result41['FirstName'],10,"<br>\n");
											echo '</span>';
								
										} else {
								 			echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
											echo '<br>';
											echo 'Empty';
											echo '<br>';
											echo 'Empty';
										}
									} else {
							 echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
							echo '<br>';
							echo 'Empty';
							echo '<br>';
							echo 'Empty';
						}
						
						} else {
								echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
								echo '<br>';
								echo 'Empty';
								echo '<br>';
								echo 'Empty';
						}
					 } else {
						
								echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
								echo '<br>';
								echo 'Empty';
								echo '<br>';
								echo 'Empty';
						 
					 }
						  ?>
                  
            <?php if(!empty($result41)){ ?>
            <div id='tooltip-example-4' style='display:none;'>
             <table border="0"  width="100%" style="" >
            	<tr>
                	<td colspan="3">
					<?php echo $result41['FirstName']; ?> (<?php echo $LeftNode2Left; ?>) 
                      </td>
				</tr>
                <tr>
                	<td>Sponser ID:</td>
                    <td><?php echo $result41['SponserID'];?></td>
                   <td rowspan="6"><?php 
				    if($result41['Image']!=''){
				   		echo CHtml::image(Yii::app()->request->baseUrl."/uploads/profile/".$result41['Image'],$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100"));
					} else {
						echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
					}?></td>
                </tr>
                <tr>
                	<td>Registration Date:</td>
                    <td><?php echo date('d F Y',strtotime($result41['created']));?></td>
                </tr>
               <tr>
                	<td>Total Left BV :</td>
                    <td><span style="color:#F00"><b><?php echo $result41['tota_left_bv'];?></b></span></td>
</tr>
                 <tr>
                	<td>Total Right BV :</td>
                    <td><span style="color:#F00"><b><?php echo $result41['total_right_bv'];?></b></span></td>
                </tr>
                <tr>
                	<td>Package Name :&nbsp;</td>
                    <td><?php echo $result41['package_name'];?> </td>
                </tr>
                <tr>
                	<td>MBV :</td>
                    <td><?php echo $result41['total_mbv'];?>X10=<?php echo $result41['total_mbv']*10;?>Rs.</td>
                </tr>
            </table>
       	 </div>
         	<?php } ?> 
            
            </td>
          <td>&nbsp;</td>
          <td align="center">
            <div style="text-align:center">
            	
            		<?php 
					if(!empty($result2)){
						if($result2['LNode']!=''){
							$RightNode2=$result2['LNode'];
							$result5=Registrations::model()->networSponserkDetails($RightNode2);
							if(!empty($result5)){
								if($result5['RNode']!=''){
									echo "<span class='tooltip-from-element5' data-tooltip-id='tooltip-example-5'>";
									$RightNode2Right=$result5['RNode'];
									$result51=Registrations::model()->networkDetails($RightNode2Right);
									if($result51['bv']==0){
										$result51['Sex']=='Male'? $sexDetail5='men-red.png':$sexDetail5='red.png';
									} else {
										$result51['Sex']=='Male'? $sexDetail5='male.png':$sexDetail5='female.png';
									}
									echo CHtml::image(Yii::app()->request->baseUrl."/images/".$sexDetail5,$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100"));
									echo '<br>';
									echo CHtml::link($RightNode2Right,array('registrations/network/id/'.$RightNode2Right), array('class'=>"")); 
									echo '<br>';
									echo wordwrap($result51['FirstName'],15,"<br>\n");
									echo '</span>';
								} else {
									echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
									echo '<br>';
									echo 'Empty';
									echo '<br>';
									echo 'Empty';
								}
							} else {
								echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
								echo '<br>';
								echo 'Empty';
								echo '<br>';
								echo 'Empty';
							}
						
						} else {
							echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
							echo '<br>';
							echo 'Empty';
							echo '<br>';
							echo 'Empty';
						}
					} else {
						echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
						echo '<br>';
						echo 'Empty';
						echo '<br>';
						echo 'Empty';
					}
					?>
            	
                </div>
		 <?php if(!empty($result5)){
					if($result5['RNode']!=''){
		?>
            <div id='tooltip-example-5' style='display:none;'>
             <table border="0"  width="100%" style="" >
            	<tr>
                	<td colspan="3">
					<?php echo $result51['FirstName']; ?> (<?php echo $RightNode2Right; ?>) 
                 </td>
				</tr>
                <tr>
                	<td>Sponser ID:</td>
                    <td><?php echo $result51['SponserID'];?></td>
                   <td rowspan="6"><?php 
				    if($result51['Image']!=''){
				   		echo CHtml::image(Yii::app()->request->baseUrl."/uploads/profile/".$result51['Image'],$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100"));
					} else {
						echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
					}?></td>
                </tr>
                <tr>
                	<td>Registration Date:</td>
                    <td><?php echo date('d F Y',strtotime($result51['created']));?></td>
                    
                </tr>
               
                <tr>
                	<td>Total Left BV :</td>
                    <td><span style="color:#F00"><b><?php echo $result51['tota_left_bv'];?></b></span></td>
                   
                </tr>
                 <tr>
                	<td>Total Right BV :</td>
                    <td><span style="color:#F00"><b><?php echo $result51['total_right_bv'];?></b></span></td>
                </tr>
                <tr>
                	<td>Package Name :&nbsp;</td>
                    <td><?php echo $result51['package_name'];?> </td>
                </tr>
                <tr>
                	<td>MBV :</td>
                    <td><?php echo $result51['total_mbv'];?>X10=<?php echo $result51['total_mbv']*10;?>Rs.</td>
                </tr>
            </table>
       	 </div>
         	<?php }} ?>
            </td>
          <td>&nbsp;</td>
          <td align="center">           
                	<?php 
					if(!empty($result3)){
						if($result3['RNode']!=''){
								$LeftNode3=$result3['RNode'];
								$result6=Registrations::model()->networSponserkDetails($LeftNode3);
								if(!empty($result6)){
									if($result6['LNode']!=''){
										echo "<span class='tooltip-from-element6' data-tooltip-id='tooltip-example-6'>";
										$LeftNode3Left=$result6['LNode'];
										$result61=Registrations::model()->networkDetails($LeftNode3Left);
										if($result61['bv']==0){
											$result61['Sex']=='Male'? $sexDetail6='men-red.png':$sexDetail6='red.png';
										} else {
											$result61['Sex']=='Male'? $sexDetail6='male.png':$sexDetail6='female.png';
										}
										echo CHtml::image(Yii::app()->request->baseUrl."/images/".$sexDetail6,$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100"));
										echo '<br>';
										echo CHtml::link($LeftNode3Left,array('registrations/network/id/'.$LeftNode3Left), array('class'=>"")); 
										echo '<br>';
										echo wordwrap($result61['FirstName'],15,"<br>\n");
										echo "<span>";
									} else {
										echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
										echo '<br>';
										echo 'Empty';
										echo '<br>';
										echo 'Empty';
									}
								} else {
									echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
									echo '<br>';
									echo 'Empty';
									echo '<br>';
									echo 'Empty';
								}
						
						} else {
							echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
							echo '<br>';
							echo 'Empty';
							echo '<br>';
							echo 'Empty';
						}
					} else {
						
					echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
					echo '<br>';
					echo 'Empty';
					echo '<br>';
					echo 'Empty';
						
					}
						  ?>
			<?php if(!empty($result6)){
            if($result6['LNode']!=''){
            
            ?>
            <div id='tooltip-example-6' style='display:none;'>
             <table border="0"  width="100%" style="font-family:'Arial Black', Gadget, sans-serif" >
            	<tr>
                	<td colspan="3">
					<?php echo $result61['FirstName']; ?> (<?php echo $LeftNode3Left; ?>) 
                    </td>
				</tr>
                <tr>
                	<td>Sponser ID:</td>
                    <td><?php echo $result61['SponserID'];?></td>
                   <td rowspan="6"><?php 
				    if($result61['Image']!=''){
				   		echo CHtml::image(Yii::app()->request->baseUrl."/uploads/profile/".$result61['0']['Image'],$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100"));
					} else {
						echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
					}?></td>
                </tr>
                <tr>
                	<td>Registration Date:</td>
                    <td><?php echo date('d F Y',strtotime($result61['created']));?></td>
                    
                </tr>
                <tr>
                	<td>Total Left BV :</td>
                    <td><span style="color:#F00"><b><?php echo $result61['tota_left_bv'];?></b></span></td>
                   
                </tr>
                 <tr>
                	<td>Total Right BV :</td>
                    <td><span style="color:#F00"><b><?php echo $result61['total_right_bv'];?></b></span></td>
                </tr>
                <tr>
                	<td>Package Name :&nbsp;</td>
                    <td><?php echo $result61['package_name'];?> </td>
                </tr>
                
                <tr>
                	<td>MBV :</td>
                    <td><?php echo $result61['total_mbv'] ;?>X10=<?php echo $result61['total_mbv']*10;?>Rs.</td>
                </tr>
            </table>
       	 </div>
         	<?php }} ?>
            </td>
          <td>&nbsp;</td>
          <td align="center">
            <div style="text-align:">
            	
                	<?php
					if(!empty($result3)){ 
						if($result3['RNode']!=''){
								$RightNode3=$result3['RNode'];
								$result7=Registrations::model()->networSponserkDetails($RightNode3);
								if(!empty($result7)){
							 
										if($result7['RNode']!=''){
											echo "<span class='tooltip-from-element7' data-tooltip-id='tooltip-example-7'>";
											$RightNode3Right=$result7['RNode'];
											$result71=Registrations::model()->networkDetails($RightNode3Right);
											if($result71['bv']==0){
												$result71['Sex']=='Male'? $sexDetail7='men-red.png':$sexDetail7='red.png';
											} else {
												$result71['Sex']=='Male'? $sexDetail7='male.png':$sexDetail7='female.png';
											}
											
											
											echo CHtml::image(Yii::app()->request->baseUrl."/images/".$sexDetail7,$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100"));
											echo '<br>';
											echo CHtml::link($RightNode3Right,array('registrations/network/id/'.$RightNode3Right), array('class'=>"")); 
											echo '<br>';
											echo wordwrap($result71['FirstName'],10,"<br>\n");
											echo '<span>';
										} else {
								 			echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
											echo '<br>';
											echo 'Empty';
											echo '<br>';
											echo 'Empty';
										}
									} else {
							 echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
							echo '<br>';
							echo 'Empty';
							echo '<br>';
							echo 'Empty';
						}
						
						} else {
								echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
								echo '<br>';
								echo 'Empty';
								echo '<br>';
								echo 'Empty';
						}
					} else {
						
								echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
								echo '<br>';
								echo 'Empty';
								echo '<br>';
								echo 'Empty';
						
					}
						  ?>
                </span>
            	
            </div>
            <?php if(!empty($result7)){
					if($result7['RNode']!=''){
            ?>
            <div id='tooltip-example-7' style='display:none;'>
             <table border="0"  width="100%" style="" >
            	<tr>
                	<td colspan="3">
					<?php echo $result71['FirstName']; ?> (<?php echo $RightNode3Right; ?>) 
                     
                    </td>
				</tr>
                <tr>
                	<td>Sponser ID:</td>
                    <td><?php echo $result71['SponserID'];?></td>
                   <td rowspan="6"><?php 
				    if($result71['Image']!=''){
				   		echo CHtml::image(Yii::app()->request->baseUrl."/uploads/profile/".$result71['Image'],$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100"));
					} else {
						echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'100', 'height'=>"100")); 
					}?></td>
                </tr>
                <tr>
                	<td>Registration Date:</td>
                    <td><?php echo date('d F Y',strtotime($result71['created']));?></td>
                    
                </tr>
                <tr>
                	<td>Total Left BV :</td>
                    <td><span style="color:#F00"><b><?php echo $result71['tota_left_bv'];?></b></span></td>
                   
                </tr>
                 <tr>
                	<td>Total Right BV :</td>
                    <td><span style="color:#F00"><b><?php echo $result71['total_right_bv'];?></b></span></td>
                </tr>
                <tr>
                	<td>Package Name :&nbsp;</td>
                    <td><?php echo $result71['package_name'];?> </td>
                </tr>
               
                <tr>
                	<td>MBV :</td>
                    <td><?php echo $result71['total_mbv'];?>X10=<?php echo $result71['total_mbv']*10;?> Rs.</td>
                </tr>
            </table>
       	 </div>
         	<?php }} ?>
            </td>
        </tr>
      </table>
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
				//FormElements.init();
			});
		</script>
</body>
<!-- end: BODY -->
<!-- end: MAIN JAVASCRIPTS -->
</body>
<!-- end: BODY -->
</html>