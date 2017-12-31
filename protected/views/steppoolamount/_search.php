<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?>
<tr>
 
 <td><?php if(Yii::app()->user->user_type!=2){
  echo $form->textField($model,'Rid',array('size'=>15,'maxlength'=>200,'class'=>""));
 }?></td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <!--<td>&nbsp;</td>-->
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
 <td><?php if(Yii::app()->user->user_type!=2){
	 echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info'));} ?></td>
</tr>
<!-- search-form -->
<?php $this->endWidget(); ?>
