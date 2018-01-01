<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?>
<tr>
  <td><?php echo $form->textField($model,'rid',array('size'=>10,'maxlength'=>25,'class'=>""));?></td>
 <td><?php 		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model' => $model,
					'attribute' => 'request_date',
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
 <td><?php echo $form->textField($model,'amount',array('size'=>7,'maxlength'=>15,'class'=>""));?></td>
 <td><?php 	$statusOptions = array('0' => 'Cash', '1' => 'Cheque', '2' => 'RTGS/NEFT' );
			    echo $form->dropDownList($model, 'payment_mod', $statusOptions, array( 'prompt' => 'Select payment mode' , 'id'=>"payment_mod", 'class'=>"form-control"));?></td>


 <td><?php 	$statusOptions = array('0' => 'Waiting', '1' => 'Processing', '2' => 'Rejected','3' => 'Completed' );
			    echo $form->dropDownList($model, 'status', $statusOptions, array( 'prompt' => 'Select status' , 'id'=>"status", 'class'=>"form-control"));?></td>
				
 <td><?php 		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model' => $model,
					'attribute' => 'status_update_date',
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
		
 <td></td>
 <td><?php echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info')); ?></td>
</tr>
<?php $this->endWidget(); ?>