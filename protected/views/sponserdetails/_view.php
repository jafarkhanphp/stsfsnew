<?php
/* @var $this SponserdetailsController */
/* @var $data Sponserdetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rid')); ?>:</b>
	<?php echo CHtml::encode($data->Rid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sponserId')); ?>:</b>
	<?php echo CHtml::encode($data->sponserId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ImmediateSponserId')); ?>:</b>
	<?php echo CHtml::encode($data->ImmediateSponserId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Level')); ?>:</b>
	<?php echo CHtml::encode($data->Level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_of_members')); ?>:</b>
	<?php echo CHtml::encode($data->no_of_members); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PlanName')); ?>:</b>
	<?php echo CHtml::encode($data->PlanName); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('MemberStatus')); ?>:</b>
	<?php echo CHtml::encode($data->MemberStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RegistrationFee')); ?>:</b>
	<?php echo CHtml::encode($data->RegistrationFee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	*/ ?>

</div>