<?php
/* @var $this PinController */
/* @var $model Pin */

$this->breadcrumbs=array(
	'Pins'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pin', 'url'=>array('index')),
	array('label'=>'Create Pin', 'url'=>array('create')),
	array('label'=>'Update Pin', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pin', 'url'=>array('admin')),
);
?>

<h1>View Pin #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pin_no',
		'amount',
		'status',
		'issue_status',
		'created_by',
		'created',
		'updated',
	),
)); ?>
