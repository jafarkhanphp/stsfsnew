<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?>
<tr>
 
 <td><?php //echo $form->textField($model,'RID',array('size'=>15,'maxlength'=>200,'class'=>""));?></td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><?php echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info')); ?></td>
</tr>
<!-- search-form -->
<?php $this->endWidget(); ?>
