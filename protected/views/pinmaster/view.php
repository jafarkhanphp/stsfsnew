<?php
/* @var $this PinmasterController */
/* @var $model Pinmaster */

$this->breadcrumbs=array(
	'Pinmasters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pinmaster', 'url'=>array('index')),
	array('label'=>'Create Pinmaster', 'url'=>array('create')),
	array('label'=>'Update Pinmaster', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pinmaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pinmaster', 'url'=>array('admin')),
);
?>

<h1>View Pinmaster #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'created_date',
		'created_by',
		'transfer_to',
		'no_pin',
		'pkg_id',
		'pin_pkg_amt',
		'flag',
	),
)); ?>
