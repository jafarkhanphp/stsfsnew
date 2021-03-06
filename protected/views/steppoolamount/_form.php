<?php
/* @var $this SteppoolamountController */
/* @var $model Steppoolamount */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'steppoolamount-form',
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
		<?php echo $form->labelEx($model,'plan_name'); ?>
		<?php echo $form->textField($model,'plan_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'plan_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'totalmember'); ?>
		<?php echo $form->textField($model,'totalmember'); ?>
		<?php echo $form->error($model,'totalmember'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paymentstatus'); ?>
		<?php echo $form->textField($model,'paymentstatus'); ?>
		<?php echo $form->error($model,'paymentstatus'); ?>
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