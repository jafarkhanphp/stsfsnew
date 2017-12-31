<?php

class PintransferController extends Controller
{
	
	public $layout='main';
	
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}
	
	
	

	 
	public function actionIndex()
	{
		$model = new Pintransfer($scenario='search');
		$criteria = new CDbCriteria;
		if(isset($_GET['Pintransfer'])){
				$model->attributes=$_GET['Pintransfer'];
				$criteria->addSearchCondition('t.reffrel_id', $_GET['Pintransfer']['reffrel_id']."%", 0);
				$criteria->addSearchCondition('t.issue_status', $_GET['Pintransfer']['issue_status']."%", 0);
			}

		$dataProvider=new CActiveDataProvider('Pintransfer', array('criteria' => $criteria,
		'sort'=>array( 'defaultOrder'=> array('id'=>true),  ), 
		'pagination' => array ( 'PageSize' => 15,  ) 
		));
		$this->render('index',array('dataProvider'=>$dataProvider,'model'=>$model, ));


	}
	public function actionMemberpin()
	{
		$model = new Pintransfer($scenario='search');
		
		$sql='SELECT Registration.Rid FROM user AS User LEFT JOIN registration AS Registration ON Registration.Rid = User.usercode WHERE User.status=0  and User.id='.Yii::app()->user->Id;
	  $command=Yii::app()->db->createCommand($sql);
	  $result=$command->queryRow();
	  $Rid=$result['Rid'];
	  $criteria = new CDbCriteria;
		if(isset($_GET['Pintransfer'])){
				$model->attributes=$_GET['Pintransfer'];
				$criteria->addSearchCondition('t.issue_status', $_GET['Pintransfer']['issue_status']."%", 0);
			}
		$criteria->addCondition('t.reffrel_id ="'.$Rid.'"');
		$dataProvider=new CActiveDataProvider('Pintransfer', array('criteria' => $criteria,
		'sort'=>array( 'defaultOrder'=> array('id'=>true),  ), 
		'pagination' => array ( 'PageSize' => 15,  ) 
		));
		$this->render('memberpin',array('dataProvider'=>$dataProvider,'model'=>$model, ));


	}
	
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}


protected function performAjaxValidation($model){
		if(isset($_POST['ajax']) && $_POST['ajax']==='pintransfer-form')		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

	}	
	
	public function actionCreate()
	{
		$model=new Pintransfer;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Pintransfer']))
		{
                        $model->attributes=$_POST['Pintransfer'];
                        $valid=$model->validate();            
                        if($valid){
							
							$reffrelId=$_POST['Pintransfer']['reffrel_id'];
							$countRegistration = Yii::app()->db->createCommand('SELECT count(*) count FROM registration AS Registration WHERE Registration.Rid="'.$reffrelId.'" ')->queryScalar();
							if($countRegistration==0){
								Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Referal not Match!</strong>');
								$this->redirect(array('create'));
							} 
							
							$i = 1;
							$pinTotal=$_POST['Pintransfer']['pinno'];
							while ($i <= $pinTotal) {
								$countPin = Yii::app()->db->createCommand('SELECT count(*) count FROM pin  AS Pin WHERE Pin.issue_status="0" ')->queryScalar();
								if($countPin<$pinTotal){
									Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> No Sufficient Pin Number!</strong>');
									$this->redirect(array('create'));
								}
								unset($model->id);
								$model->reffrel_id 			= $_POST['Pintransfer']['reffrel_id'];
								$pinDetail = Pin::model()->findAll(	array("condition"=>"issue_status  =  '0'"));
								//print_r('<pre>');   print_r($cityDetail[0]['StateCode']);   print_r('</pre>');   exit;
								$model->pinno 	 	 = $pinDetail[0]['pin_no'];
								$pinID=$pinDetail[0]['id'];
								$model->status  			= 0; //
							 	$model->issue_status  		= 1; //
							 	$model->created_by	  		= Yii::app()->user->id;; //user's Id, if you have a login
							 	$model->created  			=date('Y-m-d H:i:s');//
								$model->isNewRecord = true;
								$model->save();
								$connection=Yii::app()->db;
								$sql = "UPDATE pin SET  issue_status = '1' WHERE id = '$pinID'";
								$command = $connection->createCommand($sql);
								$command->execute();
								$i++; 
							}
								Yii::app()->user->setFlash('success', '<i class="fa fa-check-circle"></i><strong> Transfer Pin Sucessfully!</strong>');
								$this->redirect(array('index'));
								
                         } 
		}

		$this->render('create',array('model'=>$model,));
	}


public function actionDelete()
	{
				 $id=$_POST['id'];	
			 	$pintransfer = Pintransfer::model()->findAll(array("condition"=>"id='$id'")); 
				$pincount=$pintransfer['0']['pinno'];
				//echo $pin;
				//exit;
			    $countPintransferTemp = Yii::app()->db->createCommand('SELECT count(*) FROM registration AS Registration WHERE Registration.PinNo="'.$pincount.'" ')->queryScalar();
		  // use whatever the correct class name is Delete
			if($countPintransferTemp==0){
			echo $this->loadModel($_POST['id'])->delete();
		} else {
			echo 'Record exists in Registration Table';
		}
		 
	}


public function loadModel($id)
	{
		$model=Pintransfer::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
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