<?php
/* @var $this SteppoolamountController */
/* @var $model Steppoolamount */

$this->breadcrumbs=array(
	'Steppoolamounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Steppoolamount', 'url'=>array('index')),
	array('label'=>'Manage Steppoolamount', 'url'=>array('admin')),
);
?>

<h1>Create Steppoolamount</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>