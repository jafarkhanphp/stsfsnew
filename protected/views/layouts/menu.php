<?php $currentUrl=Yii::app()->controller->id .'/'. Yii::app()->controller->action->id;if($currentUrl=='site/dashboard') { $dashboard='active open';} else { $dashboard='';}if($currentUrl=='user/member_dashboard') { $memberDashboard='active open';} else { $memberDashboard='';}if($currentUrl=='pincreates/pinlist' || $currentUrl=='pincreates/user_pin_history' || $currentUrl=='pincreates/bucket_index' || $currentUrl=='pinmaster/user_pin_history'|| $currentUrl=='pinmaster/createpin' || $currentUrl=='pincreates/pin_transfer' || $currentUrl=='pincreates/pin_transfer_history') { $pinlist='active open';} else { $pinlist='';}if($currentUrl=='registrations/create' || $currentUrl=='registrations/directmemberlist') { 	$member='active open';} else { $member='';}if($currentUrl=='binaryincome/member_mbv' || $currentUrl=='steppoolamount/member_single_leg_payout') { $reports='active open';} else { $reports='';}if($currentUrl=='registrations/updateprofile' || $currentUrl=='registrations/profile') { $profile='active open';} else { $profile='';}if($currentUrl=='wallet/user_wallet') { $myfund='active open';} else { $myfund='';}if($currentUrl=='paymentRequest/widthdraw_list' || $currentUrl=='paymentRequest/withdrawal_request' ) { $paymentrequest='active open';} else { $paymentrequest='';}	?><?php //echo Yii::app()->user->getState('user_type');if(Yii::app()->user->getState('user_type')=='2'){ ?><ul class="main-navigation-menu">  <li class="<?php echo $memberDashboard;?>"> <?php echo CHtml::link('<i class="clip-home-3"></i><span class="title"> Dashboard </span><span class="selected"></span>',array('/user/member_dashboard/'), array('', 'class'=>"")); ?> </li> <li> <?php echo CHtml::link('<span class="title"><i class="fa clip-bars"></i>Business Plan </span><span class="selected"></span>',array('business/index'), array('', 'class'=>"")); ?></li><li class="<?php echo $pinlist;?>"> <a href="javascript:void(0)"><i class="clip-bars"></i> <span class="title"> My Pins </span><i class="icon-arrow"></i> <span class="selected"></span> </a>    	<ul class="sub-menu">     		<li><?php echo CHtml::link('<i class=""></i><span class="title">Create Pin</span><span class="selected"></span>',array('/pinmaster/createpin'), array('', 'class'=>"")); ?> </li> 		<li><?php echo CHtml::link('<i class=""></i><span class="title">Pin Bucket</span><span class="selected"></span>',array('/pincreates/bucket_index'), array('', 'class'=>"")); ?> </li>		<li><?php echo CHtml::link('<i class=""></i><span class="title">Pin Transfer</span><span class="selected"></span>',array('pincreates/pin_transfer'), array('', 'class'=>"")); ?> </li>		<li><?php echo CHtml::link('<i class=""></i><span class="title">Pin History</span><span class="selected"></span>',array('pincreates/user_pin_history'), array('', 'class'=>"")); ?> </li>	</ul> </li>  <li class="<?php echo $member;?>"> <a href="javascript:void(0)"><i class="fa fa-group"></i> <span class="title"> Members </span><i class="icon-arrow"></i> <span class="selected"></span> </a>     <ul class="sub-menu">       <li> <?php echo CHtml::link('<span class="title">Add New Member </span><span class="selected"></span>',array('/registrations/create'), array('', 'class'=>"")); ?></li>       <li> <?php echo CHtml::link('<span class="title">Direct Sponsor List</span><span class="selected"></span>',array('/registrations/directmemberlist'), array('', 'class'=>"")); ?></li>   </ul>  </li>   <li class="<?php echo $profile;?>"> <a href="javascript:void(0)"><i class="clip-user"></i> <span class="title"> My Profile </span><i class="icon-arrow"></i> <span class="selected"></span> </a>     <ul class="sub-menu">       <li> <?php echo CHtml::link('<span class="title">Welcome Letter </span><span class="selected"></span>',array('#'), array('', 'class'=>"")); ?></li>       <li> <?php echo CHtml::link('<span class="title">View Profile</span><span class="selected"></span>',array('/registrations/profile'), array('', 'class'=>"")); ?></li><li> <?php echo CHtml::link('<span class="title">Update Profile</span><span class="selected"></span>',array('/registrations/updateprofile/id/'.base64_encode(Yii::app()->user->getState('usercode'))), array('', 'class'=>"")); ?></li>   </ul>  </li>  <li class="<?php echo "";?>"> <a href="javascript:void(0)"><i class="fa fa-sitemap"></i> <span class="title"> DownLine </span><i class="icon-arrow"></i> <span class="selected"></span> </a>     <ul class="sub-menu">       <li> <?php echo CHtml::link('<span class="title">Network Tree </span><span class="selected"></span>',array('/registrations/member_network'), array('', 'class'=>"")); ?></li>       <li> <?php echo CHtml::link('<span class="title">Autosharing</span><span class="selected"></span>',array('steppools/single_leg_network'), array('', 'class'=>"")); ?></li>  </ul>  </li>    <li class="<?php echo "";?>"> <a href="javascript:void(0)"><i class="fa fa-rupee"></i> <span class="title"> My Incentive </span><i class="icon-arrow"></i> <span class="selected"></span> </a>     <ul class="sub-menu">       <li> <?php echo CHtml::link('<span class="title">Business Volume </span><span class="selected"></span>',array('/binaryincome/index'), array('', 'class'=>"")); ?></li>       <li> <?php echo CHtml::link('<span class="title">Auto-sharing Bonus</span><span class="selected"></span>',array('/steppoolamount/index'), array('', 'class'=>"")); ?></li>  </ul>  </li>  <li  class="<?php echo $myfund;?>"> <a href="javascript:void(0)"><i class="fa fa-rupee"></i> <span class="title"> My Fund </span><i class="icon-arrow"></i> <span class="selected"></span> </a>     <ul class="sub-menu">       <li> <?php echo CHtml::link('<span class="title">E-Wallet </span><span class="selected"></span>',array('wallet/user_wallet'), array('', 'class'=>"")); ?></li>        </ul>  </li>  <li class="<?php echo $paymentrequest;?>"> <a href="javascript:void(0)"><i class="fa fa-mail-forward"></i> <span class="title"> Payment Request </span><i class="icon-arrow"></i> <span class="selected"></span> </a>     <ul class="sub-menu">       <li> <?php echo CHtml::link('<span class="title">Withdrawal Request </span><span class="selected"></span>',array('paymentRequest/withdrawal_request'), array('', 'class'=>"")); ?></li>       <li> <?php echo CHtml::link('<span class="title">Withdraw List</span><span class="selected"></span>',array('paymentRequest/widthdraw_list'), array('', 'class'=>"")); ?></li>  </ul>  </li>    <li class="<?php echo $reports;?>"> <a href="javascript:void(0)"><i class="fa clip-file"></i> <span class="title"> Reports </span><i class="icon-arrow"></i> <span class="selected"></span> </a>    	<?php /*?> <ul class="sub-menu">      		<li> <?php echo CHtml::link('<span class="title">Matching BV Income </span><span class="selected"></span>',			array('/binaryincome/member_mbv'), array('', 'class'=>"")); ?></li>      		<li> <?php echo CHtml::link('<span class="title">Single Leg Payout </span><span class="selected"></span>',			array('/steppoolamount/member_single_leg_payout'), array('', 'class'=>"")); ?></li>      	 	 </ul>  <?php */?> </li>   <li> <?php echo CHtml::link('<span class="title"><i class="fa clip-settings"></i> Logout </span><span class="selected"></span>',array('/site/logout'), array('', 'class'=>"")); ?></li>      </ul><?php } else { ?><ul class="main-navigation-menu">  <li >    <?php 						$menuArray=Yii::app()->session['menu'];						for($i=0;$i<(count($menuArray));$i++){							if($currentUrl==$menuArray[$i]['link'] ) {   $menmenu="active open";	} else {	 $menmenu='';	}													   							$Submenu=Menus::model()->franchiseSubmenu($menuArray[$i]['menu_id'], Yii::app()->user->id );							if(!empty($Submenu)){// with sub menu							echo '<li class="'.$menmenu .' ">';								echo '<a href="javascript:void(0)"><i class="fa '.$menuArray[$i]['class_style'].'"></i>										<span class="title">'.$menuArray[$i]['name'].'</span><i class="icon-arrow"></i>										<span class="selected"></span>									</a>';									echo '<ul class="sub-menu">';											for($j=0;$j<(count($Submenu));$j++){											if($currentUrl==$Submenu[$j]['link']) { 											$activemenu="active";	} else {	 $activemenu='';	}																						echo '<li  class="'.$activemenu.'">';											echo CHtml::link('<span class="title">'.$Submenu[$j]['name'].'</span>',array(''.$Submenu[$j]['link'].''), array('onclick'=>"calendaractive(this);", 'class'=>""));																																echo '</li>';										}									echo '</ul>';								echo "</li>";															} else { ///without sub menu								echo '<li class="'.$menmenu.'">';								echo CHtml::link('<i class="fa '.$menuArray[$i]['class_style'].'"></i><span class="title">'.$menuArray[$i]['name'].'</span><span class="selected"></span>',array(''.$menuArray[$i]['link'].''), array('class'=>""));								echo '</li>';							}																																	}												?></ul><?php }?>