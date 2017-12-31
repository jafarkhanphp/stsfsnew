<?php
/* @var $this PaymentRequestController */
/* @var $model PaymentRequest */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'payment-request-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rid'); ?>
		<?php echo $form->textField($model,'rid'); ?>
		<?php echo $form->error($model,'rid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'request_date'); ?>
		<?php echo $form->textField($model,'request_date'); ?>
		<?php echo $form->error($model,'request_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_mod'); ?>
		<?php echo $form->textField($model,'payment_mod'); ?>
		<?php echo $form->error($model,'payment_mod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cheque_UTR'); ?>
		<?php echo $form->textField($model,'Cheque_UTR',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Cheque_UTR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_update_date'); ?>
		<?php echo $form->textField($model,'status_update_date'); ?>
		<?php echo $form->error($model,'status_update_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textField($model,'remarks',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->