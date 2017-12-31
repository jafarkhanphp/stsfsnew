<?php

class RolesController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

 public function actionAdds(){
		if($_POST['pk']!=""){
			$value=$_POST['value'];
			if($value!=''){
				$connection=Yii::app()->db;
				$sql = "UPDATE  roles SET  Adds = '".$value."' WHERE id = '".$_POST['pk']."'";
				$command = $connection->createCommand($sql);
				$command->execute();
			}
		}
	}
	
	 public function actionEdits(){
		if($_POST['pk']!=""){
			$value=$_POST['value'];
			if($value!=''){
				$connection=Yii::app()->db;
				$sql = "UPDATE  roles SET  edits  = '".$value."' WHERE id = '".$_POST['pk']."'";
				$command = $connection->createCommand($sql);
				$command->execute();
			}
		}
	}
	
	 public function actionDeletes (){
		if($_POST['pk']!=""){
			$value=$_POST['value'];
			if($value!=''){
				$connection=Yii::app()->db;
				$sql = "UPDATE  roles SET  deletes   = '".$value."' WHERE id = '".$_POST['pk']."'";
				$command = $connection->createCommand($sql);
				$command->execute();
			}
		}
	}
	 public function actionView  (){
		if($_POST['pk']!=""){
			$value=$_POST['value'];
			if($value!=''){
				$connection=Yii::app()->db;
				$sql = "UPDATE  roles SET  view  = '".$value."' WHERE id = '".$_POST['pk']."'";
				$command = $connection->createCommand($sql);
				$command->execute();
			}
		}
	}
	
	 public function actionLists   (){
		if($_POST['pk']!=""){
			$value=$_POST['value'];
			if($value!=''){
				$connection=Yii::app()->db;
				$sql = "UPDATE  roles SET  lists   = '".$value."' WHERE id = '".$_POST['pk']."'";
				$command = $connection->createCommand($sql);
				$command->execute();
			}
		}
	}
	
	public function actionPrints (){
		if($_POST['pk']!=""){
			$value=$_POST['value'];
			if($value!=''){
				$connection=Yii::app()->db;
				$sql = "UPDATE  roles SET  prints    = '".$value."' WHERE id = '".$_POST['pk']."'";
				$command = $connection->createCommand($sql);
				$command->execute();
			}
		}
	}
	public function actionImports (){
		if($_POST['pk']!=""){
			$value=$_POST['value'];
			if($value!=''){
				$connection=Yii::app()->db;
				$sql = "UPDATE  roles SET  import    = '".$value."' WHERE id = '".$_POST['pk']."'";
				$command = $connection->createCommand($sql);
				$command->execute();
			}
		}
	}
	
	public function actionExports (){
		if($_POST['pk']!=""){
			$value=$_POST['value'];
			if($value!=''){
				$connection=Yii::app()->db;
				$sql = "UPDATE  roles SET  exports    = '".$value."' WHERE id = '".$_POST['pk']."'";
				$command = $connection->createCommand($sql);
				$command->execute();
			}
		}
	}
	
	




	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}