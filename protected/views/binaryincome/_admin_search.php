<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?>
<?php if(Yii::app()->user->user_type!=2){?>
<tr>
 
 <td><?php echo $form->textField($model,'RID',array('size'=>15,'maxlength'=>200,'class'=>""));?></td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td><?php 		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model' => $model,
					'attribute' => 'created',
					'options' => array(
					'dateFormat' => 'yy-mm-dd',
					'defaultDate' => '+0w',
						'changeYear' => true, 
					//'minDate'=> 'dateToday',
					//'endDate' => '+2d'  
				),
				'htmlOptions' => array(
				'size' => '10',         // textField size
				'class'=>'form-control'
		 	),
	 	 ));
		?></td>
  <td>&nbsp;</td>
  <td><?php echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info')); ?></td>
</tr>
<?php }?>
<!-- search-form -->
<?php $this->endWidget(); ?>
