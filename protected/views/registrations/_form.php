<?php
/* @var $this RegistrationsController */
/* @var $model Registrations */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registrations-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'branch_id'); ?>
		<?php echo $form->textField($model,'branch_id'); ?>
		<?php echo $form->error($model,'branch_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'persentage'); ?>
		<?php echo $form->textField($model,'persentage'); ?>
		<?php echo $form->error($model,'persentage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'package_id'); ?>
		<?php echo $form->textField($model,'package_id'); ?>
		<?php echo $form->error($model,'package_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PV'); ?>
		<?php echo $form->textField($model,'PV',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PV'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FirstName'); ?>
		<?php echo $form->textField($model,'FirstName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'FirstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOB'); ?>
		<?php echo $form->textField($model,'DOB',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'DOB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fatherName'); ?>
		<?php echo $form->textField($model,'fatherName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fatherName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MotherName'); ?>
		<?php echo $form->textField($model,'MotherName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'MotherName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Occupation'); ?>
		<?php echo $form->textField($model,'Occupation',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Occupation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sex'); ?>
		<?php echo $form->textField($model,'Sex',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MaritalStatus'); ?>
		<?php echo $form->textField($model,'MaritalStatus',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'MaritalStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PanNo'); ?>
		<?php echo $form->textField($model,'PanNo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'PanNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ContactNo1'); ?>
		<?php echo $form->textField($model,'ContactNo1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ContactNo1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ContactNo2'); ?>
		<?php echo $form->textField($model,'ContactNo2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ContactNo2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ContactNo3'); ?>
		<?php echo $form->textField($model,'ContactNo3',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ContactNo3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Emailaddress'); ?>
		<?php echo $form->textField($model,'Emailaddress',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Emailaddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Address'); ?>
		<?php echo $form->textField($model,'Address',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'Address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'City'); ?>
		<?php echo $form->textField($model,'City',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'City'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'State'); ?>
		<?php echo $form->textField($model,'State',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'State'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'District'); ?>
		<?php echo $form->textField($model,'District',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'District'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ZipCode'); ?>
		<?php echo $form->textField($model,'ZipCode',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ZipCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Country'); ?>
		<?php echo $form->textField($model,'Country',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SponserID'); ?>
		<?php echo $form->textField($model,'SponserID',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'SponserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImmediateSponserId'); ?>
		<?php echo $form->textField($model,'ImmediateSponserId',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ImmediateSponserId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegistrationDate'); ?>
		<?php echo $form->textField($model,'RegistrationDate'); ?>
		<?php echo $form->error($model,'RegistrationDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Terms'); ?>
		<?php echo $form->textField($model,'Terms',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'Terms'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'Status',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Role'); ?>
		<?php echo $form->textField($model,'Role',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'Role'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Level'); ?>
		<?php echo $form->textField($model,'Level',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nationality'); ?>
		<?php echo $form->textField($model,'Nationality',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Nationality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Image'); ?>
		<?php echo $form->textField($model,'Image',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_deleted'); ?>
		<?php echo $form->textField($model,'is_deleted'); ?>
		<?php echo $form->error($model,'is_deleted'); ?>
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