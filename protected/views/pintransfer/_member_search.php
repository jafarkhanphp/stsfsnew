<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?>
<tr>
 <td>&nbsp;</td>
 <td><?php echo $form->textField($model,'pinno',array('size'=>10,'maxlength'=>15,'class'=>""));?></td>
 <td>&nbsp;</td>
 
 <td><?php 	$statusOptions = array('0' => 'Issue', '1' => 'Not Issue');
			    echo $form->dropDownList($model, 'issue_status', $statusOptions, array('size'=>1, 'prompt' => 'Select Status' , 'id'=>"dropdown", 'class'=>"form-control"));?></td>
 <td><?php echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info')); ?></td>
</tr>
<!-- search-form -->
<?php $this->endWidget(); ?>
