<?php
/* @var $this PinmasterController */
/* @var $model Pinmaster */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pinmaster-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
		<?php echo $form->error($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transfer_to'); ?>
		<?php echo $form->textField($model,'transfer_to'); ?>
		<?php echo $form->error($model,'transfer_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_pin'); ?>
		<?php echo $form->textField($model,'no_pin'); ?>
		<?php echo $form->error($model,'no_pin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pkg_id'); ?>
		<?php echo $form->textField($model,'pkg_id'); ?>
		<?php echo $form->error($model,'pkg_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pin_pkg_amt'); ?>
		<?php echo $form->textField($model,'pin_pkg_amt'); ?>
		<?php echo $form->error($model,'pin_pkg_amt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flag'); ?>
		<?php echo $form->textField($model,'flag'); ?>
		<?php echo $form->error($model,'flag'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->