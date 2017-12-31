<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?>

<tr>
  <td><?php echo $form->textField($model,'name',array('size'=>10,'maxlength'=>200,'class'=>""));?></td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><?php 	$statusOptions = array('0' => 'Active', '1' => 'Inactive');
			    echo $form->dropDownList($model, 'status', $statusOptions, array( 'prompt' => 'Select status' , 'id'=>"form-field-select-3", 'class'=>"form-control search-select",'tabindex'=>"7"));?></td>
  <td><?php echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info')); ?></td>
</tr>
<!-- search-form -->
<?php $this->endWidget(); ?>
