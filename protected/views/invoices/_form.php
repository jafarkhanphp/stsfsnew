<?php
/* @var $this InvoicesController */
/* @var $model Invoices */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'invoices-form',
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
		<?php echo $form->textField($model,'Rid',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Rid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'joining_package_id'); ?>
		<?php echo $form->textField($model,'joining_package_id'); ?>
		<?php echo $form->error($model,'joining_package_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pan'); ?>
		<?php echo $form->textField($model,'pan',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cycle_date_from'); ?>
		<?php echo $form->textField($model,'cycle_date_from'); ?>
		<?php echo $form->error($model,'cycle_date_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cycle_date_to'); ?>
		<?php echo $form->textField($model,'cycle_date_to'); ?>
		<?php echo $form->error($model,'cycle_date_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_no'); ?>
		<?php echo $form->textField($model,'account_no'); ?>
		<?php echo $form->error($model,'account_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'check_no'); ?>
		<?php echo $form->textField($model,'check_no',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'check_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bank_name'); ?>
		<?php echo $form->textField($model,'bank_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'bank_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'net_payable_amount'); ?>
		<?php echo $form->textField($model,'net_payable_amount'); ?>
		<?php echo $form->error($model,'net_payable_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tds'); ?>
		<?php echo $form->textField($model,'tds'); ?>
		<?php echo $form->error($model,'tds'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'service_charge'); ?>
		<?php echo $form->textField($model,'service_charge'); ?>
		<?php echo $form->error($model,'service_charge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_deduction'); ?>
		<?php echo $form->textField($model,'other_deduction'); ?>
		<?php echo $form->error($model,'other_deduction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textField($model,'remarks',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
		<?php echo $form->error($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'download_date'); ?>
		<?php echo $form->textField($model,'download_date'); ?>
		<?php echo $form->error($model,'download_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_status'); ?>
		<?php echo $form->textField($model,'payment_status'); ?>
		<?php echo $form->error($model,'payment_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_date'); ?>
		<?php echo $form->textField($model,'payment_date'); ?>
		<?php echo $form->error($model,'payment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sms_status'); ?>
		<?php echo $form->textField($model,'sms_status'); ?>
		<?php echo $form->error($model,'sms_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sms_date'); ?>
		<?php echo $form->textField($model,'sms_date'); ?>
		<?php echo $form->error($model,'sms_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->