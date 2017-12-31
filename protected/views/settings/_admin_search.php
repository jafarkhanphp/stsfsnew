<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?>
<tr>
 <td>&nbsp;</td>
 <td><?php // echo $form->textField($model,'pin_no',array('size'=>10,'maxlength'=>15,'class'=>""));?></td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 
 <td><?php //	$statusOptions = array('0' => 'Active', '1' => 'Inactive');
			    //echo $form->dropDownList($model, 'status', $statusOptions, array( 'prompt' => 'Select status' , 'id'=>"dropdown", 'class'=>"form-control"));?></td>
 <td><?php 	//$statusOptions1 = array('0' => 'Not Issue', '1' => 'Issue');
			  //  echo $form->dropDownList($model, 'issue_status', $statusOptions1, array( 'prompt' => 'Select status' , 'id'=>"issue_status", 'class'=>"form-control"));?>
 </td>
 <td><?php //echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info')); ?></td>
</tr>
<!-- search-form -->
<?php $this->endWidget(); ?>
