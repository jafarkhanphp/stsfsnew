<?php
/* @var $this InvoicesController */
/* @var $model Invoices */

$this->breadcrumbs=array(
	'Invoices'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Invoices', 'url'=>array('index')),
	array('label'=>'Create Invoices', 'url'=>array('create')),
	array('label'=>'Update Invoices', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Invoices', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Invoices', 'url'=>array('admin')),
);
?>

<h1>View Invoices #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Rid',
		'joining_package_id',
		'name',
		'address',
		'mobile',
		'pan',
		'cycle_date_from',
		'cycle_date_to',
		'account_no',
		'check_no',
		'bank_name',
		'net_payable_amount',
		'tds',
		'service_charge',
		'other_deduction',
		'remarks',
		'created_date',
		'download_date',
		'payment_status',
		'payment_date',
		'sms_status',
		'sms_date',
	),
)); ?>
