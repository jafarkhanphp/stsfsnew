<?php
/* @var $this PaymentRequestController */
/* @var $model PaymentRequest */

$this->breadcrumbs=array(
	'Payment Requests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PaymentRequest', 'url'=>array('index')),
	array('label'=>'Manage PaymentRequest', 'url'=>array('admin')),
);
?>

<h1>Create PaymentRequest</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>