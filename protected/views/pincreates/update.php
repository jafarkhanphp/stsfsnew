<?php
/* @var $this PinController */
/* @var $model Pin */

$this->breadcrumbs=array(
	'Pins'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pin', 'url'=>array('index')),
	array('label'=>'Create Pin', 'url'=>array('create')),
	array('label'=>'View Pin', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pin', 'url'=>array('admin')),
);
?>

<h1>Update Pin <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>