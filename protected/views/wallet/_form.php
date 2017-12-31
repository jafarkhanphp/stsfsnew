<?php
/* @var $this WalletController */
/* @var $model Wallet */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'wallet-form',
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
		<?php echo $form->labelEx($model,'against_insert_id'); ?>
		<?php echo $form->textField($model,'against_insert_id'); ?>
		<?php echo $form->error($model,'against_insert_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_head_id'); ?>
		<?php echo $form->textField($model,'account_head_id'); ?>
		<?php echo $form->error($model,'account_head_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_head_name'); ?>
		<?php echo $form->textField($model,'account_head_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'account_head_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'credit'); ?>
		<?php echo $form->textField($model,'credit',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'credit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debit'); ?>
		<?php echo $form->textField($model,'debit',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'debit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'balance'); ?>
		<?php echo $form->textField($model,'balance',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'balance'); ?>
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