<?php
/* @var $this PintransferController */
/* @var $model Pintransfer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pintransfer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false
)); ?>

	<?php /*?><p class="note">Fields with <span class="required">*</span> are required.</p><?php */?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <?php echo $form->labelEx($model,'reffrel_id'); ?>
	<?php $PinOptions = CHtml::listData(Pin::model()->findAll(array()), 'Code', 'Reffrel');
																echo $form->dropDownList($model, 'reffrel_id', $PinOptions, array('prompt' => 'Select your Reffrel Id','class'=>"",'id'=>""));?>
                                                                <?php echo $form->error($model,'reffrel_id'); ?>
	</div>

	<?php /*?><div class="row">
		<?php echo $form->labelEx($model,'pinno'); ?>
		<?php echo $form->textField($model,'pinno',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pinno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'issue_status'); ?>
		<?php echo $form->textField($model,'issue_status'); ?>
		<?php echo $form->error($model,'issue_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div><?php */?>

<?php $this->endWidget(); ?>

</div><!-- form -->