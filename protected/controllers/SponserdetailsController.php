<?php

class SponserdetailsController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionChecksponser()
	{
		$countsponser = Yii::app()->db->createCommand('SELECT count(*) count FROM registrations where Rid="'.$_POST['sponser_id'].'" ')->queryScalar();
		if($countsponser>0){
			echo 1;
		}else{
			echo 2;
		}
	}
	
	public function actionSponsorname()
	{
		$sql='SELECT FirstName FROM registrations where Rid="'.$_POST['sponser_id'].'"';
		$command=Yii::app()->db->createCommand($sql);
		$recordset=$command->queryRow();
		echo ucwords($recordset['FirstName']);
		
		
	}
	
	public function actionCheckmobile()
	{ //echo 'functio is call';die;
		$countsponser = Yii::app()->db->createCommand('SELECT count(*) count FROM registrations where ContactNo1="'.$_POST['mobile'].'" ')->queryScalar();
		if($countsponser>0){
			echo 1;
		}else{
			echo 2;
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