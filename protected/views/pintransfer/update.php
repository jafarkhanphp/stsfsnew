<?php
/* @var $this PintransferController */
/* @var $model Pintransfer */

$this->breadcrumbs=array(
	'Pintransfers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pintransfer', 'url'=>array('index')),
	array('label'=>'Create Pintransfer', 'url'=>array('create')),
	array('label'=>'View Pintransfer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pintransfer', 'url'=>array('admin')),
);
?>

<h1>Update Pintransfer <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>