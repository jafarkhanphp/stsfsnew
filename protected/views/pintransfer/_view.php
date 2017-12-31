<?php
/* @var $this PintransferController */
/* @var $data Pintransfer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reffrel_id')); ?>:</b>
	<?php echo CHtml::encode($data->reffrel_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pinno')); ?>:</b>
	<?php echo CHtml::encode($data->pinno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issue_status')); ?>:</b>
	<?php echo CHtml::encode($data->issue_status); ?>
	<br />


</div>