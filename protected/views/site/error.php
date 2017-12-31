<?php
$this->pageTitle=Yii::app()->name . ' - Error';
//$this->breadcrumbs=array('Error',);
?>

    <br />    <br />    <br />    <br />    <br /><br />
        <div class="errorContainer">
            <div class="page-header">
                <h1 class="center">Error<small><?php echo $code; ?></small> </h1>
            </div>

            <h2 class="center"><?php echo CHtml::encode($message); ?></h2>

            <div class="center">
                <a href="javascript: history.go(-1)" class="btn" style="margin-right:10px;"><span class="icon16 icomoon-icon-arrow-left-10"></span>Go back</a>
                <?php echo CHtml::link('<span class="icon16 icomoon-icon-screen"></span>Dashboard',array('site/dashboard'), array('class'=>"btn")); ?>
            </div>

        </div>
