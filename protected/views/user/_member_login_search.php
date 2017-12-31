<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?>
<tr>
 <td><?php echo $form->textField($model,'usercode',array('size'=>10,'maxlength'=>20,'class'=>""));?></td>
 <td><?php echo $form->textField($model,'username',array('size'=>10,'maxlength'=>20,'class'=>""));?></td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td><?php echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info')); ?></td>
</tr>
<?php $this->endWidget(); ?>
