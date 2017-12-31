<?php
/* @var $this SteppoolamountController */
/* @var $model Steppoolamount */

$this->breadcrumbs=array(
	'Steppoolamounts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Steppoolamount', 'url'=>array('index')),
	array('label'=>'Create Steppoolamount', 'url'=>array('create')),
	array('label'=>'View Steppoolamount', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Steppoolamount', 'url'=>array('admin')),
);
?>

<h1>Update Steppoolamount <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>