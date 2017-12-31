<?php
/* @var $this PinmasterController */
/* @var $model Pinmaster */

$this->breadcrumbs=array(
	'Pinmasters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pinmaster', 'url'=>array('index')),
	array('label'=>'Create Pinmaster', 'url'=>array('create')),
	array('label'=>'View Pinmaster', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pinmaster', 'url'=>array('admin')),
);
?>

<h1>Update Pinmaster <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>