<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?>
<tr>
  <td><?php echo $form->textField($model,'PinNo',array('size'=>10,'maxlength'=>200,'class'=>""));?></td>
  <td><?php 	//$statusOptions = array('0' => 'Not Issue', '1' => 'Issue');
			    //echo $form->dropDownList($model, 'transfer_status', $statusOptions, array( 'prompt' => 'Select status' , 'id'=>"form-field-select-3", 'class'=>"form-control search-select"));?></td>
  <td><?php echo $form->textField($model,'user_id',array('size'=>10,'maxlength'=>15,'class'=>""));?></td>
  <td><?php //echo $form->textField($model,'issued_rid',array('size'=>10,'maxlength'=>15,'class'=>""));?></td>
  <td>&nbsp;</td>
<td>&nbsp;</td>
  <td><?php echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info')); ?></td>
</tr>
<!-- search-form -->
<?php $this->endWidget(); ?>
