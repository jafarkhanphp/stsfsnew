<?php
/* @var $this SettingController */
/* @var $model Setting */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'settings-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'settingname'); ?>
		<?php echo $form->textField($model,'settingname',array('size'=>60,'maxlength'=>800)); ?>
		<?php echo $form->error($model,'settingname'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'settingvalue'); ?>
		<?php echo $form->textField($model,'settingvalue',array('size'=>60,'maxlength'=>800)); ?>
		<?php echo $form->error($model,'settingvalue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'site_title'); ?>
		<?php echo $form->textField($model,'settingvalue',array('size'=>60,'maxlength'=>800)); ?>
		<?php echo $form->error($model,'site_title'); ?>
	</div>
<div class="row">
		<?php echo $form->labelEx($model,'site_logo'); ?>
		<?php echo $form->activeFileField($model,'settingvalue'); ?>
		<?php echo $form->error($model,'site_logo'); ?>
	</div>
<div class="row">
		<?php echo $form->labelEx($model,'site_mobile'); ?>
		<?php echo $form->textField($model,'settingvalue',array('size'=>60,'maxlength'=>800)); ?>
		<?php echo $form->error($model,'site_mobile'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'site_footer'); ?>
		<?php echo $form->textField($model,'settingvalue',array('size'=>60,'maxlength'=>800)); ?>
		<?php echo $form->error($model,'site_footer'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'site_email'); ?>
		<?php echo $form->textField($model,'settingvalue',array('size'=>60,'maxlength'=>800)); ?>
		<?php echo $form->error($model,'site_email'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'meta_title'); ?>
		<?php echo $form->textField($model,'settingvalue',array('size'=>60,'maxlength'=>800)); ?>
		<?php echo $form->error($model,'meta_title'); ?>
	</div>
<div class="row">
		<?php echo $form->labelEx($model,'meta_description'); ?>
		<?php echo $form->textField($model,'settingvalue',array('size'=>60,'maxlength'=>800)); ?>
		<?php echo $form->error($model,'meta_description'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'site_phone'); ?>
		<?php echo $form->textField($model,'settingvalue',array('size'=>60,'maxlength'=>800)); ?>
		<?php echo $form->error($model,'site_phone'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'twitter'); ?>
		<?php echo $form->textField($model,'settingvalue',array('size'=>60,'maxlength'=>800)); ?>
		<?php echo $form->error($model,'twitter'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'google'); ?>
		<?php echo $form->textField($model,'settingvalue',array('size'=>60,'maxlength'=>800)); ?>
		<?php echo $form->error($model,'google'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'facebook'); ?>
		<?php echo $form->textField($model,'settingvalue',array('size'=>60,'maxlength'=>800)); ?>
		<?php echo $form->error($model,'facebook'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'linkedin'); ?>
		<?php echo $form->textField($model,'settingvalue',array('size'=>60,'maxlength'=>800)); ?>
		<?php echo $form->error($model,'linkedin'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'keyword'); ?>
		<?php echo $form->textField($model,'settingvalue',array('size'=>60,'maxlength'=>800)); ?>
		<?php echo $form->error($model,'keyword'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'settingvalue',array('size'=>60,'maxlength'=>800)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>
    
     <div class="row">
		<?php echo $form->labelEx($model,'skype'); ?>
		<?php echo $form->textField($model,'settingvalue',array('size'=>60,'maxlength'=>800)); ?>
		<?php echo $form->error($model,'skype'); ?>
	</div>
    
     <div class="row">
		<?php echo $form->labelEx($model,'site_favicon'); ?>
		<?php echo $form->activeFileField($model,'settingvalue'); ?>
		<?php echo $form->error($model,'site_favicon'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->