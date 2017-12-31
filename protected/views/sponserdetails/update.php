<?php
/* @var $this SponserdetailsController */
/* @var $model Sponserdetails */

$this->breadcrumbs=array(
	'Sponserdetails'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sponserdetails', 'url'=>array('index')),
	array('label'=>'Create Sponserdetails', 'url'=>array('create')),
	array('label'=>'View Sponserdetails', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sponserdetails', 'url'=>array('admin')),
);
?>

<h1>Update Sponserdetails <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>