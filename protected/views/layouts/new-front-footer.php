<footer id="Footer" class="clearfix"> 
    <!-- Footer - First area -->
    <?php /*?><div class="footer_action">
      <div class="container">
        <div class="column one column_feature_list">
          <div class="feature_list">
            <ul>
              <li><?php echo CHtml::link('<span class="icon"><i class="icon-picture"></i></span> <p>Our Seminar</p>',array('site/our_seminar'), array('class'=>"")); ?>
              </li>
              <li> <?php echo CHtml::link('<span class="icon"><i class="icon-palette"></i></span><p>Video Gallery </p>',array('site/video_gallery'), array('class'=>"")); ?> </li>
              <li><?php echo CHtml::link('<span class="icon"><i class="icon-globe"></i></span><p>Training Programs</p>',array('site/training_videos'), array('class'=>"")); ?>  </li>
              <li><?php echo CHtml::link('<span class="icon"><i class="icon-clock"></i></span><p>Birthday</p>',array('site/birthday'), array('class'=>"")); ?> </li>
            </ul>
          </div>
        </div>
      </div>
    </div><?php */?>
    <div class="widgets_wrapper">
      <div class="container">
        <div class="one-fourth column"> 
          <!-- Text Area -->
          <aside id="text-8" class="widget widget_text">
                            <h4>Important Link</h4>
                            <div class="textwidget">
                                <ul class="list_mixed">
                                    <li class="list_check"><?php echo CHtml::link('<span>Home</span>',array('site/index'), array('class'=>"")); ?>
                                    </li>
                                    <li class="list_check"><?php echo CHtml::link('<span>About Us</span>',array('site/about'), array('class'=>"")); ?></li>
                                    <li class="list_check"><?php echo CHtml::link('<span>Contact Us</span>',array('site/contact'), array('class'=>"")); ?></li>
                                    <li class="list_check"><?php echo CHtml::link('<span>Privacy Policy</span>',array('#'), array('class'=>"")); ?></li>
                                    <li class="list_check"><?php echo CHtml::link('<span>Terms & Condition</span>',array('#'), array('class'=>"")); ?></li>
                                    <li class="list_check"><?php echo CHtml::link('<span>Login</span>',array('site/login'), array('class'=>"",  'target'=>"_blank")); ?></li>
                                </ul>
                            </div>
                        </aside>
        </div>
        <div class="one-fourth column"> 
          <!-- Recent Comments Area -->
          <aside id="text-8" class="widget widget_text">
            <h4>Facebook</h4>
            <!--<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FStep-Towards-Success-Financial-Services-Pvtltd-1425072074238550%2F&tabs=timeline&width=340&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>-->
          </aside>
        </div>
        <div class="one-fourth column"> 
          <!-- Recent posts -->
          <aside class="widget widget_mfn_recent_posts">
            <h4>Twitter</h4>
           <!-- <a class="twitter-timeline" data-height="300" href="https://twitter.com/AmitStsfs">Tweets by AmitStsfs</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>-->
          </aside>
        </div>
        <div class="one-fourth column"> 
          <!-- Text Area -->
          <aside id="text-8" class="widget widget_text big">
            <h4>Contact Us</h4>
            <strong>Address:</strong> STS Pvt. Ltd.<br>
            Adarsh Nagar, Near Dena Bank, <br>
            Unnao - 209801 (Uttar Pradesh) <br>INDIA<br>
            <strong>Phone No.:</strong> +91 0515-2823181<br>
            <strong>Mobile No.:</strong> +91 9453834354<br>
            <strong>Email ID:</strong> info@step2.co.in
          </aside>
        </div>
      </div>
    </div>
    <!-- Footer copyright-->
    <div class="footer_copy">
      <div class="container">
        <div class="column one"> <a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
          <div class="copyright"> <?php echo Settings::model()->getSiteSettingByName('copyright');?> </div>
          <!--Social info area-->
          <ul class="social">
            <!--<li class="facebook"> <a href="<?php //echo Settings::model()->getSiteSettingByName('facebook');?>" title="Facebook"><i class="icon-facebook"></i></a> </li>
            <li class="googleplus"> <a href="<?php //echo Settings::model()->getSiteSettingByName('googleplus');?>" title="Google+"><i class="icon-gplus"></i></a> </li>
            <li class="twitter"> <a href="<?php //echo Settings::model()->getSiteSettingByName('twitter');?>" title="Twitter"><i class="icon-twitter"></i></a> </li>
            <li class="youtube"> <a href="<?php //echo Settings::model()->getSiteSettingByName('youtube');?>" title="YouTube"><i class="icon-play"></i></a> </li>-->
          </ul>
        </div>
      </div>
    </div>
  </footer>