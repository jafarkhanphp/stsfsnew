<?php
/* @var $this PintransferController */
/* @var $model Pintransfer */

$this->breadcrumbs=array(
	'Pintransfers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pintransfer', 'url'=>array('index')),
	array('label'=>'Create Pintransfer', 'url'=>array('create')),
	array('label'=>'Update Pintransfer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pintransfer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pintransfer', 'url'=>array('admin')),
);
?>

<h1>View Pintransfer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'reffrel_id',
		'pinno',
		'created_by',
		'created',
		'status',
		'issue_status',
	),
)); ?>
