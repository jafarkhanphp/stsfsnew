<?php

class StaffController extends Controller{
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id){
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}



	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate(){
		$this->layout= false;
		if(Yii::app()->user->id==''){  
			Yii::app()->user->setFlash('error', "Please login again!");
            $this->redirect(array('/site/login'));
		} 
		$checkPermission=Yii::app()->session['permissions'];
		if(!empty($checkPermission)){
			if($checkPermission[0]['adds']!=0){
				Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Permission Denied</strong>');
				$this->redirect(array('/site/dashboard'));
			}
		} else {
				Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Permission Denied</strong>');
				$this->redirect(array('/user/member_dashboard'));
		}
		
		$model=new Staff;
		$model->setScenario('insert');
		$model1=new User;
		$model1->setScenario('insert');
		if(isset($_POST['Staff'])){
			$model->attributes=$_POST['Staff'];
			$model1->attributes=$_POST['User'];
			$valid=$model->validate() && $model1->validate();
			if ($model1->validate() && $model->validate() )	{
								
				$model->created   	= date('Y-m-d');
				$model->status   	= 0;
				//$model->user_type    	= 3;
				$model->created_by  = Yii::app()->user->id;
				
				if($model->save()){
					$lastId=Yii::app()->db->lastInsertID;
					$user_type=$_POST['Staff']['user_type'];
					if($user_type==1){
						$userType=1;//Branch Manager
					} else if($user_type==2){
						$userType=3;//Staff
					}
					
						
					$query=Yii::app()->db->createCommand()->insert('user',
					array('username'=>$_POST['User']['username'],'password'=>$_POST['User']['password'],'usercode'=>$lastId , 'status'=>0, 'user_type'=>$userType, 'branch_id'=>$_POST['Staff']['branch_id'], 'created_by'=>Yii::app()->user->id));
					$lastUserID=Yii::app()->db->lastInsertID;
					
					$query=Yii::app()->db->createCommand()->insert('roles',
					array('user_id'=>$lastUserID,'adds'=>0,'edits'=>0, 'deletes'=>1,'view'=>0,'lists'=>0, 'exports'=>1, 'prints'=>1));
					$lastRoleID=Yii::app()->db->lastInsertID;
					
					$query=Yii::app()->db->createCommand()->insert('permission',
					array('user_id'=>$lastUserID,'role_id'=>$lastRoleID,'menu_id'=>1,'parent_menu_Id'=>0, 'created'=>date('Y-m-d')));
					
					
					Yii::app()->user->setFlash('success', '<i class="fa fa-check-circle"></i><strong> Staff Created Sucessfully!</strong>');
					$this->redirect(array('index'));
				} else{
					Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Record not save</strong>');
					$this->redirect(array('index'));
				} 
			} 
		}
		$this->render('create',array('model'=>$model,'model1'=>$model1));
		}
		
	public function actionEdit(){
		$this->layout= false;
		if(Yii::app()->user->id==''){  
			Yii::app()->user->setFlash('error', "Please login again!");
            $this->redirect(array('/site/login'));
		} 
		
		$checkPermission=Yii::app()->session['permissions'];
		if(!empty($checkPermission)){
			if($checkPermission[0]['edits']!=0){
				Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Permission Denied</strong>');
				$this->redirect(array('/site/dashboard'));
			}
		} else {
				Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Permission Denied</strong>');
				$this->redirect(array('/user/member_dashboard'));
		}
		
				$model=new Staff;
				$model->setScenario('edit');
				$model1=new User;
				$model->setScenario('edit');
				$editId=base64_decode($_GET['id']);	
					
				$model=$this->loadModel($editId);
				$sql='SELECT id  FROM user WHERE usercode="'.$editId.'"';
				 $command=Yii::app()->db->createCommand($sql);
				 $UseDetail=$command->queryRow();
				 
				 $usereditID=$UseDetail['id'];
				 $model1=User::model()->findByPk($usereditID);
				  $registrationDetailArray=$command->queryRow();
					if(isset($_POST['Staff'])){
						$model->attributes=$_POST['Staff'];
						$model1->attributes=$_POST['User'];
						$valid=$model->validate() && $model1->validate();
					if ($model1->validate() && $model->validate() )	{
							$user_type=$_POST['Staff']['user_type'];
							if($user_type==1){
								$userType=1;//Branch Manager
							} else if($user_type==2){
								$userType=3;//Staff
							}
						
							$model->id  	= $editId;
							$model->updated  	= date('Y-m-d');
							$model->status  	= 0;
							$model->created_by  = Yii::app()->user->id;
						if($model->save()){
							$connection=Yii::app()->db;
							$sql = "UPDATE user SET  username = '".$_POST['User']['username']."', user_type='$userType', branch_id='".$_POST['Staff']['branch_id']."', created_by='".Yii::app()->user->id."' WHERE id = '".$usereditID."'";
							$command = $connection->createCommand($sql);
							$command->execute();
					
					
					
					Yii::app()->user->setFlash('success', '<i class="fa fa-check-circle"></i><strong> Staff Updated Sucessfully!</strong>');
					$this->redirect(array('index'));
				} else{
					Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Staff not Updated</strong>');
					$this->redirect(array('index'));
				} 
			} 
		}
					$this->render('edit',array('model'=>$model,'model1'=>$model1));
		}
		
	public function actionProfile(){
		$this->layout= false;
		if(Yii::app()->user->id==''){  
			Yii::app()->user->setFlash('error', "Please login again!");
            $this->redirect(array('/site/login'));
		} 
		
		$checkPermission=Yii::app()->session['permissions'];
		
				$model=new Staff;
				$model->setScenario('profile');
				$editId=base64_decode($_GET['id']);	
				$model=$this->loadModel($editId);
					if(isset($_POST['Staff'])){
							$model->attributes=$_POST['Staff'];
							if($model->validate()){
								$model->id  	= $editId;
								$model->updated  	= date('Y-m-d');
								$model->status  	= 0;
								$model->created_by  = Yii::app()->user->id;
								if($model->save()){
									Yii::app()->user->setFlash('success', '<i class="fa fa-check-circle"></i><strong> Profile Updated Sucessfully!</strong>');
									$this->redirect(array('staff/profile/id/'.$_GET['id']));
								} else{
									Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Profile not Updated</strong>');
									$this->redirect(array('staff/profile/id/'.$_GET['id']));
								} 
							} 
					}
					$this->render('profile',array('model'=>$model));
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

		if(isset($_POST['Staff']))
		{
			$model->attributes=$_POST['Staff'];
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
	public function actionIndex()
	{
		$this->layout= false;
		if(Yii::app()->user->id==''){  
			Yii::app()->user->setFlash('error', "Please login again!");
            $this->redirect(array('/site/login'));
		} 
		$checkPermission=Yii::app()->session['permissions'];
		if($checkPermission[0]['lists']!=0){
			Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Permission Denied</strong>');
			$this->redirect(array('/user/dashboard'));
		}
		
		$model = new Staff($scenario='search');
		$criteria = new CDbCriteria;
		if(isset($_GET['Staff'])){
				$model->attributes=$_GET['Staff'];
				$criteria->addSearchCondition('t.name', $_GET['Staff']['name']."%", 0);				
				$criteria->addSearchCondition('t.status', $_GET['Staff']['status']."%", 0);
			}
		  
		 // $criteria->addCondition('t.user_type!="0"');
		$dataProvider=new CActiveDataProvider('Staff', array('criteria' => $criteria,
		'sort'=>array( 'defaultOrder'=> array('id'=>true),  ), 
		'pagination' => array ( 'PageSize' => 15,  ) 
		));
		$this->render('index',array('dataProvider'=>$dataProvider,'model'=>$model, ));

	}
	

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Staff('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Staff']))
			$model->attributes=$_GET['Staff'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionStaff_List(){
		$this->layout= false;
		if(Yii::app()->user->id==''){  
			Yii::app()->user->setFlash('error', "Please login again!");
            $this->redirect(array('/site/login'));
		}
		
		
		$model = new Staff($scenario='search');
		$criteria = new CDbCriteria;
		if(isset($_GET['Staff'])){
				$model->attributes=$_GET['Staff'];
				$criteria->addSearchCondition('t.name', $_GET['Staff']['name']."%", 0);				
				$criteria->addSearchCondition('t.status', $_GET['Staff']['status']."%", 0);
			}

		$criteria->addCondition('t.user_type!=0 and t.user_type!=1 and t.user_type!=2');
		
		$dataProvider=new CActiveDataProvider('Staff', array('criteria' => $criteria,
		'sort'=>array( 'defaultOrder'=> array('id'=>true),  ), 
		'pagination' => array ( 'PageSize' => 15,  ) 
		));
		//print_r('<pre>'); print_r($dataProvider);print_r('</pre>');
		
		$this->render('staff_list',array('dataProvider'=>$dataProvider,'model'=>$model, ));

	}
	
	public function actionStatus() {
		  $model = Staff::model()->findByPk($_POST['Id']); 
		  $status=$model->status  =='0' ? '1' : '0';
		  $connection=Yii::app()->db;
		  $sql = "UPDATE staff SET  status = '$status' WHERE id = '$model->id'";
		 $command = $connection->createCommand($sql);
		 if($command->execute()==1){
			 		$status1=User::model()->getStatusByID($_POST['Id'])  =='1' ? '0' : '1';
					
					$connection1=Yii::app()->db;
					 $sql1 = "UPDATE user SET  status = '$status1' WHERE usercode= '$model->id' and user_type=3  ";
					$command1 = $connection1->createCommand($sql1);
					$command1->execute();
		   echo 1;
		  } else {
			  echo '2';
		  }
	  }
	
	
	

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Staff the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Staff::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	

	/**
	 * Performs the AJAX validation.
	 * @param Staff $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='staff-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
