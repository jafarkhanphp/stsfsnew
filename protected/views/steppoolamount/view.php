<?php
/* @var $this SteppoolamountController */
/* @var $model Steppoolamount */

$this->breadcrumbs=array(
	'Steppoolamounts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Steppoolamount', 'url'=>array('index')),
	array('label'=>'Create Steppoolamount', 'url'=>array('create')),
	array('label'=>'Update Steppoolamount', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Steppoolamount', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Steppoolamount', 'url'=>array('admin')),
);
?>

<h1>View Steppoolamount #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Rid',
		'plan_name',
		'amount',
		'totalmember',
		'paymentstatus',
		'created',
	),
)); ?>
