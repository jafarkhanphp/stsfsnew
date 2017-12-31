<div class="head">
  
    <div class="logo"> <?php echo CHtml::image(Yii::app()->request->baseUrl."/assets/front/img/logo.png",'',array("width"=>"164", "height"=>"70", "alt" => "STS",'align'=>"left"  )); ?> </div>
    <div class="top-r"> Call Us : <?php echo Settings::model()->getSiteSettingByName('phone'); ?>&nbsp;&nbsp;&nbsp;  	Email : <a href="<?php echo Settings::model()->getSiteSettingByName('email'); ?>"><?php echo Settings::model()->getSiteSettingByName('email'); ?></a></div>
    <div class="navigation">
     <div class="nav">
        <ul>
          <li class="active"><?php echo CHtml::link('Home',array('site/index'), array('class'=>"")); ?></li>
          <li><?php echo CHtml::link('About Us',array('site/about_us'), array('class'=>"")); ?></li>
          <li><?php echo CHtml::link('Plans',array('site/plan'), array('class'=>"")); ?> </li>
          <li><?php echo CHtml::link('Rewards',array('site/rewards'), array('class'=>"")); ?> </li>
          <li><?php echo CHtml::link('Legal',array('site/legal'), array('class'=>"")); ?> </li>
          <li><?php echo CHtml::link('Gallery',array('site/photo_gallery/type/Seminar'), array('class'=>"")); ?> </li>
          <li><?php echo CHtml::link('Contact',array('site/contact_us'), array('class'=>"")); ?> </li>
        </ul>
      </div>
    </div>
    <div class="clr"></div>
  </div>