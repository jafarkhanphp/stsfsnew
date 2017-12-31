<div class="foot">

  <div class="footer">

  
	  
    <div>
      <div class="footer-links"> <?php echo CHtml::link('Home',array('site/index'), array('class'=>"")); ?>|<?php echo CHtml::link('About Us',array('site/about_us'), array('class'=>"")); ?>|<?php echo CHtml::link('Terms of Use',array('site/terms_condition'), array('class'=>"")); ?>|<?php echo CHtml::link('Login',array('site/login'), array('class'=>"")); ?></div>      
      <div style="float:right;">   
   <div class="social"> 
   <ul id="social">
    <li> <a class="facebook" href="<?php echo Settings::model()->getSiteSettingByName('facebook');?>"> </a></li>
            <li><a class="twitter" href="<?php echo Settings::model()->getSiteSettingByName('twitter');?>"></a></li>
            <li><a class="google" href="<?php echo Settings::model()->getSiteSettingByName('youtube');?>"></a></li>
	</ul>  
    </div>
    </div>
    
      <div class="clearfix"></div>
      
	</div>
       
     <div class="footer-text">
    <div class="footer-links"><?php echo Settings::model()->getSiteSettingByName('copyright');?></div>
      <!-- <div class="footer-dashed"><a href="#">Testimonial </a>l <a href="#">Privacy Policy</a> l <a href="#">Terms of use</a></div> -->
    </div>

  </div>
</div>