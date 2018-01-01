<?php
/* @var $this PaymentRequestController */
/* @var $model PaymentRequest */

$this->breadcrumbs=array(
	'Payment Requests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PaymentRequest', 'url'=>array('index')),
	array('label'=>'Create PaymentRequest', 'url'=>array('create')),
	array('label'=>'Update PaymentRequest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PaymentRequest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PaymentRequest', 'url'=>array('admin')),
);
?>

<h1>View PaymentRequest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'rid',
		'request_date',
		'amount',
		'payment_mod',
		'Cheque_UTR',
		'status',
		'status_update_date',
		'remarks',
		'created',
		'created_by',
	),
)); ?>
