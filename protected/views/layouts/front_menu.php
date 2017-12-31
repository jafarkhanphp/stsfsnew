
<!--login form ends and joining form start -->
<div class="md-modal md-effect-1 " id="form-join">
  <div class="md-content">
    <button class="md-close">X</button>
    <h2> Become a Member</h2>
    <p>Start selling our products</p>
    <iframe src="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/registration"  frameborder="0" scrolling="yes" ></iframe>
  </div>
</div>
<!--joining form ends-->
<!-- responsive nav starts-->
<div class="my_res_nav_col" >
  <ul>
  </ul>
</div>
<!-- responsive nav ends-->
<header>
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-5 "  >
          <nav class="cont-nav ">
            <ul>
              <li><a class="call"><i class="fa fa-phone-square"></i> Helpline<span class="cont-text"> : +91 0000000000</span></a></li>
            </ul>
          </nav>
        </div>
        <div class="col-xs-12 col-sm-7" >
          <nav class="user-nav">
            <ul>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/login" class="login" target="_blank"><i class="fa fa-unlock"></i>Login</a></li>
              <li><a  class="join md-base" data-modal="form-join" ><i class="fa fa-user"></i>Join us !</a></li>
              
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- -->
  <div class="container "  >
    <div class="logo-nav-bar">
      <div class="row">
        <div class="col-sm-4 col-md-4 col-xs-10" >
          <div class="logo-bar"> <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/index" class="logo"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/img/logo.png"   alt="My Life Vision Private Limited"> </a> </div>
        </div>
        <div class="col-sm-8 col-md-8 col-xs-2" >
         <?php
$currentUrl=Yii::app()->controller->id .'/'. Yii::app()->controller->action->id;
if($currentUrl=='site/index') { $home='home';} else { $home='';}
if($currentUrl=='site/about') { $about='about';} else { $about='';}
if($currentUrl=='site/opportunity') { $opportunity='opportunity';} else { $opportunity='';}
if($currentUrl=='site/products') { $products='products';} else { $products='';}
if($currentUrl=='site/downloads') { $downloads='downloads';} else { $downloads='';}
if($currentUrl=='site/photogallery' || $currentUrl=='site/videogallery') { $gallery='gallery';} else { $gallery='';}
if($currentUrl=='site/contact') { $contact='contact';} else { $contact='';}


?>
          <div class="nav-bar">
            <nav class="site-nav">
              <ul id="level_1">
                <li ><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/index" id="<?php echo $home;?>"> Home </a></li>
                <li ><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/about" id="<?php echo $about;?>" > About Us</a></li>
                <li ><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/products" id="<?php echo $products;?>"> Products</a></li>
                <li ><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/opportunity" id="<?php echo $opportunity;?>"> opportunity</a></li>
                <li ><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/downloads" id="<?php echo $downloads;?>"> Downloads</a></li>
                <li ><a  id="<?php echo $gallery;?>"  class="has-nav"> Gallery</a>
                  <ul id="level_2">
                    <li ><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/photogallery"> Photo Gallery</a></li>
                    <li ><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/videogallery"> Video Gallery</a></li>
                  </ul>
                </li>
                <li ><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/contact" id="<?php echo $contact;?>"> Contact Us</a></li>
              </ul>
            </nav>
            <!-- responsive nav btn start-->
            <div class="my_res_btn_bar"> <a class="btn_open"><span></span><span></span><span></span></a> </div>
            <!-- responsive nav btn end-->
          </div>
        </div>
      </div>
    </div>
  </div>
</header>