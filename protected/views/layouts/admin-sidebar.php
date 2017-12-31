<div class="sidenav">
 <div class="sidebar-widget" style="margin: -1px 0 0 0;">
  <h5 class="title" style="margin-bottom:0">Navigation</h5>
 </div>
 
 <!-- End .sidenav-widget -->
 
 <div class="mainnav">
  <ul>
   <li> <a href="#"><span class="icon16 cut-icon-desktop"></span>Center Detail</a>
    <ul class="sub">
     <li><?php echo CHtml::link('<span class="icon16 icomoon-icon-users"></span>Create Login',array('centrelogin/create'), array('class'=>"")); ?></li>
     <li><?php echo CHtml::link('<span class="icon16 minia-icon-list"></span>Center Login List',array('centrelogin/admin'), array('class'=>"")); ?></li>
    <!-- <li> <a href="#"><span class="icon16 entypo-icon-settings "></span>Center Setting</a>
      <ul class="sub">
       <li><?php echo CHtml::link('<span class="icon16 icomoon-icon-arrow-right-2"></span>Form Master',array('formmaster/master'), array('class'=>"")); ?></li>
       <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-2"></span>Login Log</a></li>
      </ul>
     </li>-->
    </ul>
   </li>
   <li> <a href="#"><span class="icon16  icomoon-icon-user-3 "></span>Student Detail</a>
    <ul class="sub">
     <li><a href="#"><span class="icon16 icomoon-icon-users"></span>Add Student</a></li>
     <li><?php echo CHtml::link('<span class="icon16 silk-icon-checklist "></span>Student Temp List',array('studenttmp/StudentTempList'), array('class'=>"")); ?></li>
     <li><?php echo CHtml::link('<span class="icon16 silk-icon-checklist "></span>Student List',array('stu/index'), array('class'=>"")); ?></li>
     <li><a href=""><span class="icon16  icomoon-icon-vcard "></span>Issue Id Card</a></li>
     <li> <a href="#"><span class="icon16 icomoon-icon-graduation "></span>Marksheet</a>
      <ul class="sub">
       <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-2"></span>Create</a></li>
       <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-2"></span>Issue</a></li>
      </ul>
     </li>
    </ul>
   </li>
   <li> <a href="#"><span class="icon16  icomoon-icon-newspaper"></span>Events</a>
    <ul class="sub">
     <li><?php echo CHtml::link('<span class="icon16 minia-icon-plus  "></span>Event Add',array('news/create'), array('class'=>"")); ?></li>
     <li><?php echo CHtml::link('<span class="icon16 entypo-icon-list "></span>List',array('news/admin'), array('class'=>"")); ?></li>
    </ul>
   </li>
   <li> <a href="#"><span class="icon16  icomoon-icon-books "></span>Course</a>
    <ul class="sub">
     <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-2"></span>Course Type</a></li>
     <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-2"></span>Add</a></li>
    </ul>
   </li>
   <li> <a href="#"><span class="icon16  icomoon-icon-office "></span>Franchise </a>
    <ul class="sub">
     <li><?php echo CHtml::link('<span class="icon16 minia-icon-plus "></span>Franchise List',array('franchise/index'), array('class'=>"")); ?></li>
     <li><?php echo CHtml::link('<span class="icon16 minia-icon-list "></span>Franchise Type',array('#'), array('class'=>"")); ?></li>
    </ul>
   </li>
   <li> <a href="#"><span class="icon16  icomoon-icon-rocket"></span>News Letter </a>
    <ul class="sub">
     <li><?php echo CHtml::link('<span class="icon16 icomoon-icon-arrow-right-2"></span>Subscriber',array('Newsletterusers/master'), array('class'=>"")); ?></li>
     <li><?php echo CHtml::link('<span class="icon16 icomoon-icon-arrow-right-2"></span>Send Mail for other',array('newslettermail/mail'), array('class'=>"")); ?></li>
    </ul>
   </li>
   <li> <a href="#"><span class="icon16 icomoon-icon-equalizer-2"></span>Settings</a>
    <ul class="sub">
     <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-2"></span>Site Config</a></li>
     <li><a href="#"><span class="icon16 icomoon-icon-arrow-right-2"></span>Configration</a></li>
    </ul>
   </li>
   
   
  </ul>
 </div>
</div>
