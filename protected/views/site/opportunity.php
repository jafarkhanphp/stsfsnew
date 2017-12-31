<!doctype html>
<html>


<head>
<meta charset="utf-8">
<title>My Life Vision | Let's build the future together with wealth &amp; health </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/img/favicon.ico"/>
<!--css styles -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/css/custom_styles.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/css/responsive_styles.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/css/bootstrap.min.css">	
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/css/browser.css" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/css/font-awesome.min.css">
<!--nav styles-->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/css/nav.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/css/resnav.css">
<!-- Scripts -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/js/custom_js.js"></script>
<!--Plugins-->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/model-popup/model.css" />
<!-- -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/pageloders/loader.css">
<!-- -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/nivo-slider/nivo.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/nivo-slider/nivo-custom.css">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/nivo-slider/nivo.js"></script>
<!-- -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/animation/css/animate.css">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/animation/js/wow.min.js"></script>
<script>
	wow = new WOW(
		{
			boxClass:     'wow',      // default
			animateClass: 'animated', // default
			offset:       0,          // default
			mobile:       true,       // default
			live:         true        // default
		}
	)
	wow.init();
</script>
<!-- -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/owl-carousel/owl.theme.css" rel="stylesheet">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/owl-carousel/owl.custom.css" rel="stylesheet">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/owl-carousel/owl.carousel.js"></script>  
<!--Fonts-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
<!--onpage styles-->
<style type="text/css">
#level_1 li a#opportunity {
	background:#08a093; color:#fff!important
}
#level_1 li a#opportunity:after {
	left:0;
	width:100%; background:#fff
}
footer .footer-bar {
    padding-top: 70px;
}
th{width: 25%;}
</style>
<style type="text/css">

@media only screen and (min-width: 320px) and (max-width: 767px) {
.home-abt-bar {
    background: #fff;
    padding: 50px 0px 50px 0px !important;
}
table.mytable thead > tr > th {
   font-size: 9px;
   padding:5px 2px;
   vertical-align:middle;
}
table.mytable tbody > tr > td {
   font-size: 9px;
   padding:5px 2px;
}
.home-abt-bar .col-sm-12 {
	padding:0 5px !important
}

}
</style>
 

</head>
<body>


<!--login form start -->
<?php  require_once(Yii::app()->basePath . '/views/layouts/front_menu.php');?>
<section class="slider page-title" style="background:url(<?php echo Yii::app()->request->baseUrl;?>/frontend/img/inner_banner_img.jpg)">
<div class="container">
        	<div class="inner-box">
               <div class="row">
                    <div class="col-xs-12 text-center">
                       
                            <h1 class="font-36 weight-bold montserrat uppercase white-color mb-20">Opportunity</h1>
                            <div class="text-center">
                                <div class="p-vertical-line mb-10">
                                    <div class="v-line"></div>
                                    <div class="v-line animated"></div>
                                    <div class="v-line"></div>
                                </div>
                            </div>
                            <ul>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/site/index">Home</a> <i class="fa fa-chevron-right"></i></li>
                                <li>Opportunity</li>
                            </ul>
                        
                    </div>
                </div>
            </div>
        </div>
	
</section>


<!-- -->
<section class="contents"> 
	<div class="home-abt-bar">
		<div class="container ">
			<div class="row">
				<div class="col-sm-12">
		<p style="font-weight: bold;color: red !important;">Level Income: </p>
        	<div class="table-responsive">
    	<table cellspacing="0" cellpadding="0" class="table table-bordered table-condensed table-hover mytable table-striped">
          <thead>
          <tr>
            <th>Level</th>
            <th>Joining</th>
            <th>Bonus</th>
            <th>Direct <br class="visible-xs">
              Active Joining</th>
          </tr>
          </thead>
          <tbody>
            <?php foreach($plan as $key=>$plan){?>
          <tr>
            <td><?php echo $key+1;?></td>
            <td><?php echo $plan['joining'];?></td>
            <td><?php echo $plan['bonus'];?> /-</td>
            <td><?php echo $plan['direct_active_joining'];?></td>
          </tr>
           <?php }?>
         
        
          </tbody>
        </table>
        
        <br>



    </div>
        </div>
		
		<div class="col-sm-12">
		<p style="font-weight: bold;color: red !important;">Team Work Income: </p>
        	<div class="table-responsive">
    	<table cellspacing="0" cellpadding="0" class="table table-bordered table-condensed table-hover mytable table-striped">
          <thead>
          <tr>
            <th>S. No.</th>
            <th>Joining Amount</th>
            <th>Income(%)</th>
            <th>Income Each 2 Joining</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td>2500</td>
            <td>5%</td>
            <td>Rs. 250/-</td>
          </tr>
          <tr>
            <td>2</td>
            <td>2500</td>
            <td>4%</td>
            <td>Rs. 400/-</td>
          </tr>
          <tr style="background: #ff8400;">
            <td>3</td>
            <td>2500</td>
            <td>3%</td>
            <td >Rs. 600/-</td>
          </tr>
          <tr>
            <td>4</td>
            <td>2500</td>
            <td>2%</td>
            <td>Rs. 800/-</td>
          </tr>
          <tr>
            <td>5</td>
            <td>2500</td>
            <td>1%</td>
            <td>Rs. 800/-</td>
          </tr>
          <tr>
            <td>6</td>
            <td>2500</td>
            <td>1%</td>
            <td>Rs. 1600/-</td>
          </tr>
          <tr style="background: #ff8400;">
            <td>7</td>
            <td>2500</td>
            <td>1%</td>
            <td>Rs. 3200/-</td>
          </tr>
          <tr>
            <td>8</td>
            <td>2500</td>
            <td>1%</td>
            <td>Rs. 6400/-</td>
          </tr>
          <tr >
            <td>9</td>
            <td>2500</td>
            <td>1%</td>
            <td>Rs. 12,800/-</td>
          </tr>
          <tr>
            <td>10</td>
            <td>2500</td>
            <td>1%</td>
            <td >Rs. 25,600/-</td>
          </tr>
          <tr style="background: #ff8400;">
            <td>11</td>
            <td>2500</td>
            <td>1%</td>
            <td >Rs. 51,200/-</td>
          </tr>
          <tr>
            <td>12</td>
            <td>2500</td>
            <td>1%</td>
            <td >Rs. 1,02,400/-</td>
          </tr>
		  <tr>
		  <td colspan="4"><strong> After 12 upword direct sponsor get unlimited income with 0.5%</strong></td>
		  </tr>

          </tbody>
        </table>
        
        <br>



    </div>
        </div>
			</div>

		</div>
    <div class="clearfix"></div>
    </div>
</section>

<!-- -->
<footer>
  <?php  require_once(Yii::app()->basePath . '/views/layouts/front_footer.php');?>
</footer>
<!-- -->
<div class="md-overlay"></div>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/model-popup/classie.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/model-popup/modalEffects.js"></script>
<!-- -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/scroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/scroll/jquery.fancybox.pack.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/scroll/skrollr.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend/plugins/scroll/jquery.appear.js"></script>
<script type="text/javascript">
	 //nicescroll
	$("html").niceScroll({zindex:999,cursorborder:"",cursorborderradius:"2px",cursorcolor:"#ccc",cursoropacitymin:1});
	function initNice() {
		if($(window).innerWidth() <= 960) {
			$('html').niceScroll().remove();
		} else {
			$("html").niceScroll({zindex:999,cursorborder:"",cursorborderradius:"2px",cursorcolor:"#ccc",cursoropacitymin:1});
		}
	}
	$(window).load(initNice);
	$(window).resize(initNice);
</script>
</body>

<!-- Mirrored from mysmartvision.co.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2017 07:37:33 GMT -->
</html>
