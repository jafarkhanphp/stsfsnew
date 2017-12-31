<?php
/* @var $this SponserdetailsController */
/* @var $model Sponserdetails */

$this->breadcrumbs=array(
	'Sponserdetails'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sponserdetails', 'url'=>array('index')),
	array('label'=>'Manage Sponserdetails', 'url'=>array('admin')),
);
?>

<h1>Create Sponserdetails</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>