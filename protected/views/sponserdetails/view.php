<?php
/* @var $this SponserdetailsController */
/* @var $model Sponserdetails */

$this->breadcrumbs=array(
	'Sponserdetails'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sponserdetails', 'url'=>array('index')),
	array('label'=>'Create Sponserdetails', 'url'=>array('create')),
	array('label'=>'Update Sponserdetails', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sponserdetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sponserdetails', 'url'=>array('admin')),
);
?>

<h1>View Sponserdetails #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Rid',
		'sponserId',
		'ImmediateSponserId',
		'Level',
		'no_of_members',
		'PlanName',
		'MemberStatus',
		'RegistrationFee',
		'created',
	),
)); ?>
