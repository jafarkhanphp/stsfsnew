<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?>
<tr>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
  <td>&nbsp;</td>
 <td><?php 	$statusOptions = array('0' => 'UnPaid', '1' => 'Paid');
			    echo $form->dropDownList($model, 'payment_status', $statusOptions, array( 'prompt' => 'Select status' , 'id'=>"dropdown", 'class'=>"form-control"));?></td>
 
 <td><?php echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info')); ?></td>
</tr>
<!-- search-form -->
<?php $this->endWidget(); ?>
