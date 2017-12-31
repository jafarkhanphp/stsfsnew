<?php
/* @var $this SettingController */
/* @var $data Setting */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('settingname')); ?>:</b>
	<?php echo CHtml::encode($data->settingname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('settingvalue')); ?>:</b>
	<?php echo CHtml::encode($data->settingvalue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>