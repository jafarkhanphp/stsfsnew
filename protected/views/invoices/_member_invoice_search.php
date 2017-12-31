<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?>
<tr>
 <td>&nbsp;</td>
 <td><?php 		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model' => $model,
					'attribute' => 'cycle_date_from',
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
 <td><?php 		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model' => $model,
					'attribute' => 'cycle_date_to',
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
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td><?php 	$statusOptions = array('0' => 'UnPaid', '1' => 'Paid');
			    echo $form->dropDownList($model, 'payment_status', $statusOptions, array( 'prompt' => 'Select status' , 'id'=>"dropdown", 'class'=>"form-control", 'style'=>'width:100px'));?>
        </td>
 <td><?php echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info')); ?></td>
</tr>
<?php $this->endWidget(); ?>
