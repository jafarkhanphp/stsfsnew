<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?><tr>  <td><?php 		$this->widget('zii.widgets.jui.CJuiDatePicker', array(					'model' => $model,					'attribute' => 'created',					'options' => array(					'dateFormat' => 'yy-mm-dd',					'defaultDate' => '+0w',						'changeYear' => true, 					//'minDate'=> 'dateToday',					//'endDate' => '+2d'  				),				'htmlOptions' => array(				'size' => '10',         // textField size				'class'=>'form-control'		 	),	 	 ));		?></td>  <td><?php 		$this->widget('zii.widgets.jui.CJuiDatePicker', array(					'model' => $model,					'attribute' => 'transfer_date',					'options' => array(					'dateFormat' => 'yy-mm-dd',					'defaultDate' => '+0w',						'changeYear' => true, 					//'minDate'=> 'dateToday',					//'endDate' => '+2d'  				),				'htmlOptions' => array(				'size' => '10',         // textField size				'class'=>'form-control'		 	),	 	 ));		?></td>  <td><?php echo $form->textField($model,'created_by',array('size'=>10,'maxlength'=>15,'class'=>""));?></td>   <td><?php echo $form->textField($model,'transfer_rid',array('size'=>10,'maxlength'=>15,'class'=>""));?></td>      <td><?php echo $form->textField($model,'PinNo',array('size'=>10,'maxlength'=>15,'class'=>""));?></td>  <td><?php echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info')); ?></td></tr><!-- search-form --><?php $this->endWidget(); ?>