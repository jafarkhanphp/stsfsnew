 <div id="Action_bar">
        <div class="container">
          <div class="column one"> 
            <!-- Header - contact info area-->
            <ul class="contact_details">
              <li class="slogan"> Have any questions? </li>
              <li class="phone"> <i class="icon-phone"></i><a href="tel:+91<?php echo Settings::model()->getSiteSettingByName('mobile1');?>">+91 <?php echo Settings::model()->getSiteSettingByName('mobile1');?></a> </li>
              <li class="mail"> <i class="icon-mail-line"></i><a href="mailto:<?php echo Settings::model()->getSiteSettingByName('email');?>"><?php echo Settings::model()->getSiteSettingByName('email');?></a> </li>
            </ul>
            <!--Social info area-->
            <ul class="social">
             <!-- <li class="facebook"> <a href="<?php //echo Settings::model()->getSiteSettingByName('facebook');?>" title="Facebook"><i class="icon-facebook"></i></a> </li>
              <li class="googleplus"> <a href="<?php //echo Settings::model()->getSiteSettingByName('googleplus');?>" title="Google+"><i class="icon-gplus"></i></a> </li>
              <li class="twitter"> <a href="<?php //echo Settings::model()->getSiteSettingByName('twitter');?>" title="Twitter"><i class="icon-twitter"></i></a> </li>
              <li class="youtube"> <a href="<?php //echo Settings::model()->getSiteSettingByName('youtube');?>" title="YouTube"><i class="icon-play"></i></a> </li>-->
            </ul>
          </div>
        </div>
      </div>
      <!-- Header -  Logo and Menu area -->
      <div id="Top_bar">
        <div class="container">
          <div class="column one">
            <div class="top_bar_left clearfix"> 
              <!-- Logo-->
              <div class="logo" > <a id="logo" href="#" title="<?php echo CHtml::encode($this->pageTitle); ?>"><img class="scale-with-grid" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="<?php echo CHtml::encode($this->pageTitle); ?>" /> </a> </div>
              
              <!-- Main menu-->
              <div class="menu_wrapper">
                <nav id="menu">
                <?php
				  $currentUrl=Yii::app()->controller->id .'/'. Yii::app()->controller->action->id;
				if($currentUrl=='site/contact_us') { $contact='current-menu-item';} else { $contact='';}
				if($currentUrl=='site/index') { $home='current-menu-item';} else { $home='';}
				if($currentUrl=='site/gallery') { $gallery='current-menu-item';} else { $gallery='';}
				if($currentUrl=='site/about_us' || $currentUrl=='site/legal' || $currentUrl=='site/md' || $currentUrl=='site/cmd')  { $about='current-menu-item';} else { $about='';}
				if($currentUrl=='site/plan') { $plan='current-menu-item';} else { $plan='';}
				if($currentUrl=='site/terms_condition') { $terms='current-menu-item';} else { $terms='';}
				if($currentUrl=='site/rewards') { $rewards='current-menu-item';} else { $rewards='';}
				if($currentUrl=='site/achievers' || $currentUrl=='site/referral_reward' || $currentUrl=='site/laptop' || $currentUrl=='site/bike' || $currentUrl=='site/car') { $achievers='current-menu-item';} else { $achievers='';}
				if($currentUrl=='site/our_product') { $our_product='current-menu-item';} else { $our_product='';}
				if($currentUrl=='site/pin_achievers') { $pin_achievers='current-menu-item';} else { $pin_achievers='';}
				
				?>
                
                  <ul id="menu-main-menu" class="menu">
                    <li class="<?php echo $home;?>"><?php echo CHtml::link('<span>Home</span>',array('site/index'), array('class'=>"")); ?></li>
                    <li class="<?php echo $about;?>"><?php echo CHtml::link('<span>About Us</span>',array('site/about'), array('class'=>"")); ?></li>
                    <li class="<?php echo $our_product;?>"> <?php echo CHtml::link('<span>Our Product</span>',array('site/products'), array('class'=>"")); ?> </li>
                    <li class="<?php echo $plan;?>"><?php echo CHtml::link('<span>Our Plan</span>',array('site/plan'), array('class'=>"")); ?> </li>
                    <li class="<?php echo $rewards;?>"><?php echo CHtml::link('<span>Reward</span>',array('site/reward'), array('class'=>"")); ?></li>
                    <li class="<?php echo $legals;?>"><?php echo CHtml::link('<span>Legal Documents</span>',array('site/legals'), array('class'=>"")); ?></li>
                    <li class="<?php echo $gallery;?>"><?php echo CHtml::link('<span>Gallery</span>',array('site/gallery'), array('class'=>"")); ?></li>
                    <li class="<?php echo $contact;?>"><?php echo CHtml::link('<span>Contact Us</span>',array('site/contact'), array('class'=>"")); ?></li>
                    <li style="background-color:#db4029" class="<?php echo $contact;?>"><?php echo CHtml::link('<span class="button_label" style="color:#ffffff">Login</span>',array('site/login'), array('class'=>"",  'target'=>"_blank")); ?></li>
                      
                  </ul>
                </nav>
                <a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a> </div>
              <!-- Secondary menu area - only for certain pages -->
              
              <div class="secondary_menu_wrapper" style="right:15%;">
                <nav id="secondary-menu" class="menu-secondary-menu-container">
                  <ul id="menu-secondary-menu" class="secondary-menu" style="margin-top:-10px;">
                    <li class="menu-item-1583" style="text-align:center"></li>
                    
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>