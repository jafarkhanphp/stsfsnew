<?php

class SteppoolamountController extends Controller
{
	public function actionUpdate_Single_leg(){
	 
		$steppoolDetails=Steppools::model()->getSteppoolByAsc();
		//echo '<pre>';
		//print_r($steppoolDetails); exit;
		
		
		
		
		
		foreach($steppoolDetails as $details){
			$rid=$details['Rid'];
			$TotalMember=$details['total_count'];
			$level=$details['level'];
			$direct_sponser=$details['direct_sponser'];
			if($level==0){
			  if($TotalMember>=725 && $direct_sponser>=4){
					$steppoolcheck=Steppools::model()->checkCountEntry($rid, $level);
					if($steppoolcheck==0){
						$amount='10000';
						 Yii::app()->db->createCommand()->insert('steppoolamount', array('Rid'=>$rid, 'plan_name'=>'', 
						 'amount'=>$amount, 'totalmember'=>$TotalMember, 'level'=>4, 'direct_sponser'=>$direct_sponser, 'paymentstatus'=>0, 'created'=>date('Y-m-d')));
						 $connectionUpdate=Yii::app()->db;
						$sqlsteppool = "UPDATE steppools SET level =4 WHERE Rid= '$rid' ";
						$commandsteppool = $connectionUpdate->createCommand($sqlsteppool);
						$commandsteppool->execute();
					}
					
				 
			}else if($TotalMember>=325 && $direct_sponser>=3){
			      $steppoolcheck=Steppools::model()->checkCountEntry($rid, $level);
					if($steppoolcheck==0){
						$amount='5000';
						 Yii::app()->db->createCommand()->insert('steppoolamount', array('Rid'=>$rid, 'plan_name'=>'','amount'=>$amount, 
						 'totalmember'=>$TotalMember, 'level'=>3, 'direct_sponser'=>$direct_sponser, 'paymentstatus'=>0, 'created'=>date('Y-m-d')));
						 $connectionUpdate=Yii::app()->db;
						$sqlsteppool = "UPDATE steppools SET level =3 WHERE Rid= '$rid' ";
						$commandsteppool = $connectionUpdate->createCommand($sqlsteppool);
						$commandsteppool->execute();
					}
			}else if($TotalMember>=125 && $direct_sponser>=2){
			      $steppoolcheck=Steppools::model()->checkCountEntry($rid, $level);
					if($steppoolcheck==0){
						$amount='2500';
						 Yii::app()->db->createCommand()->insert('steppoolamount', array('Rid'=>$rid, 'plan_name'=>'','amount'=>$amount, 
						 'totalmember'=>$TotalMember, 'level'=>2, 'direct_sponser'=>$direct_sponser, 'paymentstatus'=>0, 'created'=>date('Y-m-d')));
						 $connectionUpdate=Yii::app()->db;
						$sqlsteppool = "UPDATE steppools SET level =2 WHERE Rid= '$rid' ";
						$commandsteppool = $connectionUpdate->createCommand($sqlsteppool);
						$commandsteppool->execute();
					}
			}else if($TotalMember>=25 && $direct_sponser>=1){
			      $steppoolcheck=Steppools::model()->checkCountEntry($rid, $level);
					if($steppoolcheck==0){
						$amount='1000';
						 Yii::app()->db->createCommand()->insert('steppoolamount', array('Rid'=>$rid, 'plan_name'=>'','amount'=>$amount, 
						 'totalmember'=>$TotalMember, 'level'=>1, 'direct_sponser'=>$direct_sponser, 'paymentstatus'=>0, 'created'=>date('Y-m-d')));
						 $connectionUpdate=Yii::app()->db;
						$sqlsteppool = "UPDATE steppools SET level =1 WHERE Rid= '$rid' ";
						$commandsteppool = $connectionUpdate->createCommand($sqlsteppool);
						$commandsteppool->execute();
					}
			}
				
			}  
			
		} 
		
		$createdid=Yii::app()->user->id;
			$sql="SELECT  plan.joining, plan.direct_active_joining, plan.bonus, steppools.level, steppools.total_count, steppools.Rid, steppools.direct_sponser FROM steppools 
			left join plan on plan.get_level=steppools.level  WHERE steppools.level!=0";
		 	$command=Yii::app()->db->createCommand($sql);
		  	$steppoolDetails=$command->queryAll();
			foreach($steppoolDetails as $details){
					if($details['total_count']>=$details['joining'] && $details['direct_active_joining']>=$details['direct_sponser']){
					  $steppoolcheck=Steppools::model()->checkCountEntry($details['Rid'], $details['level']+1);
					 $rid=$details['Rid'];
					 //echo $rid.'---->'.$details['level'].'<br>';
						if($steppoolcheck==0){
							$amount=$details['bonus'];
							
							$currentLevel=$details['level']+1;
							 Yii::app()->db->createCommand()->insert('steppoolamount', array('Rid'=>$details['Rid'], 'plan_name'=>'','amount'=>$amount, 
							 'totalmember'=>$details['total_count'], 'level'=>$currentLevel, 'direct_sponser'=>$details['direct_sponser'], 'paymentstatus'=>0, 'created'=>date('Y-m-d')));
							 $connectionUpdate=Yii::app()->db;
							$sqlsteppool = "UPDATE steppools SET level ='$currentLevel' WHERE Rid= '$rid' ";
							$commandsteppool = $connectionUpdate->createCommand($sqlsteppool);
							$commandsteppool->execute();
						}
					}
				
			}
			
		
		
		
	}
	
	public function actionUpdate_Single_leg_old(){
	 
		$steppoolDetails=Steppools::model()->getSteppoolByAsc();
		//print_r($steppoolDetails); exit;
		foreach($steppoolDetails as $details){
			$rid=$details['Rid'];
			$TotalMember=$details['total_count'];
			$level=$details['level'];
			$direct_sponser=$details['direct_sponser'];
			if($level==0){
			  if($TotalMember>=100 && $TotalMember<200){
			      if($direct_sponser>=2){
					$steppoolcheck=Steppools::model()->checkCountEntry($rid, $level);
					if($steppoolcheck==0){
						$amount='2500';
						 Yii::app()->db->createCommand()->insert('steppoolamount', array('Rid'=>$rid, 'plan_name'=>'', 
						 'amount'=>$amount, 'totalmember'=>$TotalMember, 'level'=>1, 'direct_sponser'=>$direct_sponser, 'paymentstatus'=>0, 'created'=>date('Y-m-d')));
						 $connectionUpdate=Yii::app()->db;
						$sqlsteppool = "UPDATE steppools SET level =1 WHERE Rid= '$rid' ";
						$commandsteppool = $connectionUpdate->createCommand($sqlsteppool);
						$commandsteppool->execute();
					}
					
				  }
			  }else if($TotalMember>=200 && $TotalMember<1400){
			      if($direct_sponser>=3){
					$steppoolcheck=Steppools::model()->checkCountEntry($rid, $level);
					if($steppoolcheck==0){
						$amount='5000';
						 Yii::app()->db->createCommand()->insert('steppoolamount', array('Rid'=>$rid, 'plan_name'=>'','amount'=>$amount, 
						 'totalmember'=>$TotalMember, 'level'=>2, 'direct_sponser'=>$direct_sponser, 'paymentstatus'=>0, 'created'=>date('Y-m-d')));
						 $connectionUpdate=Yii::app()->db;
						$sqlsteppool = "UPDATE steppools SET level =2 WHERE Rid= '$rid' ";
						$commandsteppool = $connectionUpdate->createCommand($sqlsteppool);
						$commandsteppool->execute();
					}
				  }
				}
				
			} 
			
			if($TotalMember>=25 && $TotalMember<100){
				 if($direct_sponser>=1){
					$steppoolcheck=Steppools::model()->checkCountEntry($rid, $level);
					if($steppoolcheck==0){
						$amount='1000';
						 Yii::app()->db->createCommand()->insert('steppoolamount', array('Rid'=>$rid, 'plan_name'=>'',
								 'amount'=>$amount, 'totalmember'=>$TotalMember, 'level'=>0, 'direct_sponser'=>$direct_sponser, 'paymentstatus'=>0, 'created'=>date('Y-m-d')));
								 $connectionUpdate=Yii::app()->db;
								$sqlsteppool = "UPDATE steppools SET level =0 WHERE Rid= '$rid' ";
								$commandsteppool = $connectionUpdate->createCommand($sqlsteppool);
								$commandsteppool->execute();
					}
				 }	
			 } 
			
			
		}
	}
	
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Steppoolamount;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Steppoolamount']))
		{
			$model->attributes=$_POST['Steppoolamount'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Steppoolamount']))
		{
			$model->attributes=$_POST['Steppoolamount'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex(){
		$this->layout = false;
		if(Yii::app()->user->id==''){  
			Yii::app()->user->setFlash('error', "Please login again!");
			$this->redirect(array('/site/login'));
		} 
		$checkPermission=Yii::app()->session['permissions'];
		if($checkPermission[0]['lists']!=0){
			Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Permission Denied</strong>');
			$this->redirect(array('/user/dashboard'));
		}
		$model = new Steppoolamount($scenario='search');
		$criteria = new CDbCriteria;
		if(isset($_GET['Steppoolamount'])){
				$model->attributes=$_GET['Steppoolamount'];
				$criteria->addSearchCondition('t.Rid', '%'.$_GET['Steppoolamount']['Rid']."%", 0);				
				$criteria->addSearchCondition('t.created', '%'.$_GET['Steppoolamount']['created']."%", 0);
			}
			
			if(Yii::app()->user->user_type==2){/// For admin Login
				
					$usercode=Yii::app()->user->getState('usercode');
				$criteria->addCondition('t.RID="'.$usercode.'"');
				
			 
			}
		$dataProvider=new CActiveDataProvider('Steppoolamount', array('criteria' => $criteria,
		'sort'=>array( "defaultOrder"=>"created DESC" ), 
		'pagination' => array ( 'PageSize' => 15,  ) ,
		));
		
		$this->render('index',array(
			'dataProvider'=>$dataProvider,'model'=>$model
		));
	}

	public function actionMember_Single_Leg_Payout(){
		$this->layout = false;
		if(Yii::app()->user->id==''){  
			Yii::app()->user->setFlash('error', "Please login again!");
			$this->redirect(array('/site/login'));
		} 
		$Rid=User::model()->getUserCode(Yii::app()->user->id);
		$model = new Steppoolamount($scenario='search');
		$criteria = new CDbCriteria;
		if(isset($_GET['Steppoolamount'])){
				$model->attributes=$_GET['Steppoolamount'];
				$criteria->addSearchCondition('t.RID', '%'.$_GET['Steppoolamount']['RID']."%", 0);				
			
		}
		$criteria->addCondition('t.RID="'.$Rid.'"');	
		$dataProvider=new CActiveDataProvider('Steppoolamount', array('criteria' => $criteria,
		'sort'=>array( "defaultOrder"=>"id DESC" ), 
		'pagination' => array ( 'PageSize' => 15,  ) ,
		));
		
		$this->render('member_single_leg_payout',array(
			'dataProvider'=>$dataProvider,'model'=>$model
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Steppoolamount the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Steppoolamount::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Steppoolamount $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='steppoolamount-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
