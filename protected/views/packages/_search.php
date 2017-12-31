<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?>
<tr>
	<td>
    <?php 	$connection=Yii::app()->db;
			$sql3="SELECT Category.id, Category.category_name FROM  category as Category  ORDER BY Category.category_name ";
			$command3=$connection->createCommand($sql3);
			$row3=$command3->queryAll();
			$listdata3 = CHtml::listData($row3, 'id', 'category_name');
			echo $form->dropDownList($model, 'category_id', $listdata3, array('prompt' => 'Select Branch','class'=>"form-control",'id'=>""));?>
                    <?php echo $form->error($model,'category_id'); ?>
    
    </td>

  <td><?php echo $form->textField($model,'package_name',array('size'=>10,'maxlength'=>200,'class'=>""));?></td>
  <td>&nbsp;</td>
  <td><?php echo $form->textField($model,'bv',array('size'=>10,'maxlength'=>10,'class'=>""));?></td>
  <td><?php 	//$statusOptions = array('Y' => 'Active', 'N' => 'Inactive');
			   // echo $form->dropDownList($model, 'ActiveYN', $statusOptions, array( 'prompt' => 'Select status' , 'id'=>"form-field-select-3", 'class'=>"form-control search-select"));?></td>
  <td><?php echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info')); ?></td>
</tr>
<!-- search-form -->
<?php $this->endWidget(); ?>
