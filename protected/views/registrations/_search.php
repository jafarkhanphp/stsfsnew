<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?>

<tr>
  <td><?php echo $form->textField($model,'Rid',array('size'=>10,'maxlength'=>200,'class'=>""));?></td>
  <td> </td>
  <td><?php echo $form->textField($model,'FirstName',array('size'=>15,'maxlength'=>200,'class'=>""));?> </td><td>		</td>
  <td><?php $listdata3 = Packages::model()->getPackageDropDown(0);			echo $form->dropDownList($model, 'package_id', $listdata3, array('prompt' => 'Select Packages','class'=>"form-control",'id'=>""));?></td>
  
  <td> </td>
  <td> </td>
  <td><?php echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info')); ?> </td>
  
</tr>
<!-- search-form -->
<?php $this->endWidget(); ?>


