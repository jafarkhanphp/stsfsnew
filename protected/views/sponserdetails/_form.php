<?php
/* @var $this SponserdetailsController */
/* @var $model Sponserdetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sponserdetails-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Rid'); ?>
		<?php echo $form->textField($model,'Rid'); ?>
		<?php echo $form->error($model,'Rid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sponserId'); ?>
		<?php echo $form->textField($model,'sponserId',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'sponserId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImmediateSponserId'); ?>
		<?php echo $form->textField($model,'ImmediateSponserId',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ImmediateSponserId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Level'); ?>
		<?php echo $form->textField($model,'Level',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_of_members'); ?>
		<?php echo $form->textField($model,'no_of_members'); ?>
		<?php echo $form->error($model,'no_of_members'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PlanName'); ?>
		<?php echo $form->textField($model,'PlanName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PlanName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MemberStatus'); ?>
		<?php echo $form->textField($model,'MemberStatus'); ?>
		<?php echo $form->error($model,'MemberStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegistrationFee'); ?>
		<?php echo $form->textField($model,'RegistrationFee'); ?>
		<?php echo $form->error($model,'RegistrationFee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->