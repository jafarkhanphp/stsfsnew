<?php //$form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl('registrations/Custome_Member/id_status/'.$_GET['id_status']),'method'=>'get'));

 ?>

<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?>
 
<tr>
<td></td>
 <td><?php echo $form->textField($model,'Rid',array('size'=>10,'maxlength'=>15,'class'=>""));?></td>
 <td><?php //echo $form->textField($model,'SponserID',array('size'=>10,'maxlength'=>15,'class'=>""));?></td>
 
 <td><?php echo $form->textField($model,'FirstName',array('size'=>10,'maxlength'=>200,'class'=>""));?></td>
 <td>&nbsp;</td>
 <td></td>
 <td></td>
  <td><?php 	   $PositionOptions = array('0' => 'Free', '1' => 'Paid');
			    echo $form->dropDownList($model, 'id_status', $PositionOptions, array( 'prompt' => 'Select Status' , 'id'=>"id_status", 'class'=>"form-control"));?></td>


 <td><?php echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info')); ?></td>
</tr>
<!-- search-form -->
<?php $this->endWidget(); ?>
