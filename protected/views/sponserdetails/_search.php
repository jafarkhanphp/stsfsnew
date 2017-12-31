<?php
/* @var $this SponserdetailsController */
/* @var $model Sponserdetails */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Rid'); ?>
		<?php echo $form->textField($model,'Rid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sponserId'); ?>
		<?php echo $form->textField($model,'sponserId',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ImmediateSponserId'); ?>
		<?php echo $form->textField($model,'ImmediateSponserId',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Level'); ?>
		<?php echo $form->textField($model,'Level',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_of_members'); ?>
		<?php echo $form->textField($model,'no_of_members'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PlanName'); ?>
		<?php echo $form->textField($model,'PlanName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MemberStatus'); ?>
		<?php echo $form->textField($model,'MemberStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegistrationFee'); ?>
		<?php echo $form->textField($model,'RegistrationFee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->