<div class="navbar-header"> 
  <!-- start: RESPONSIVE MENU TOGGLER -->
  <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"> <span class="clip-list-2"></span> </button>
  <!-- end: RESPONSIVE MENU TOGGLER --> 
  <!-- start: LOGO --> 
  <a class="navbar-brand" href="#"> <?php echo CHtml::encode(Yii::app()->name); ?> </a> 
  
  <!-- end: LOGO --> 
</div>
<div class="navbar-tools"> 
  <!-- start: TOP NAVIGATION MENU -->
  
  <ul class="nav navbar-right">
   
    <!-- start: USER DROPDOWN -->
    <li class="dropdown current-user"> <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/avatar-1-small.jpg" class="circle-img" alt=""> <span class="username">
      <?php 
									
									if(Yii::app()->user->user_type==1 || Yii::app()->user->user_type==0 || Yii::app()->user->user_type==3){
										echo Staff::model()->getUserNameById(Yii::app()->user->getState('usercode'));
									} else if(Yii::app()->user->user_type==2) {
									   echo Yii::app()->user->getState('usercode');
									} 
								?>
      </span> <i class="clip-chevron-down"></i> </a>
      <ul class="dropdown-menu">
        <li><?php if(Yii::app()->user->user_type==2){
					echo CHtml::link('<i class="clip-user-2"></i>&nbsp;My Profile',array('registrations/profile'), array('class'=>""));
				} else{
					echo CHtml::link('<i class="clip-user-2"></i>&nbsp;My Profile',array('staff/profile/id/'.base64_encode(Yii::app()->user->getState('usercode'))), array('class'=>""));
		}
		 ?> </li>
        <li class="divider"></li>
        <li><?php echo CHtml::link('<i class="clip-settings "></i> &nbsp;Change Password',array('user/change_password'), array('class'=>"")); ?> </li>
        <li class="divider"></li>
        <li><?php echo CHtml::link('<i class="clip-exit"></i> &nbsp;Log Out',array('site/logout'), array('class'=>"")); ?></li>
      </ul>
    </li>
  </ul>
  <!-- end: TOP NAVIGATION MENU --> 
</div>
