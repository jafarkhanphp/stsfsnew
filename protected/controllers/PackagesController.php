<?php

class PackagesController extends Controller
{
	
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
		$this->layout= false;
		if(Yii::app()->user->id==''){  
			Yii::app()->user->setFlash('error', "Please login again!");
            $this->redirect(array('/site/login'));
		} 
		$checkPermission=Yii::app()->session['permissions'];
		if($checkPermission[0]['adds']!=0){
			Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Permission Denied</strong>');
			$this->redirect(array('/user/dashboard'));
		}
		$model=new Packages;
		$model->setScenario('create');
		if(isset($_POST['Packages'])){
			$model->attributes=$_POST['Packages'];
			if ($model->validate())	{
				//$model->category_id  	= 1;
				$model->created 	  	= date('Y-m-d');
				$model->package_percent = $_POST['Packages']['bv'];
				//$model->discription = $_POST['Packages']['discription'];
				$model->created_by  = Yii::app()->user->id;
				$model->status  = 0;
				
				$photo=CUploadedFile::getInstance($model,'images');
				if ( (is_object($photo) && get_class($photo)==='CUploadedFile')){
					$extension  = pathinfo($photo->name, PATHINFO_EXTENSION);
					$imageFileName = date('dmyhs').'.'.$extension;;
           			 $model->images = $imageFileName;
					// unlink(Yii::app()->basePath .'/../studen-photo/Franchise/'.$managerPhoto);
					$photo->saveAs(Yii::app()->basePath .'/../upload/'.$imageFileName);
            	 }
				
				if($model->save()){
					Yii::app()->user->setFlash('success', '<i class="fa fa-check-circle"></i><strong> Package Created Sucessfully!</strong>');
					$this->redirect(array('index'));
				} else{
					Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Record not save</strong>');
					$this->redirect(array('index'));
				} 
			} else {
			 // echo 'test';
			}
		}
		$this->render('create',array('model'=>$model));
		
	}
	
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionEdit(){
		$this->layout = false;
		if(Yii::app()->user->id==''){  
				Yii::app()->user->setFlash('error', "Please login again!");
				$this->redirect(array('/site/login'));
		} 
		$checkPermission=Yii::app()->session['permissions'];
		if($checkPermission[0]['edits']!=0){
			Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Permission Denied</strong>');
			$this->redirect(array('/user/dashboard'));
		}
		
		$model=new Packages;
		$model->setScenario('edits');
		$editId=base64_decode($_GET['id']);		
		$model=$this->loadModel($editId);
		
		if(isset($_POST['Packages'])){
			$model->attributes=$_POST['Packages'];
			if ($model->validate())	{
				$model->update_date 	  	= date('Y-m-d');
				$model->package_percent = $_POST['Packages']['bv'];
				//$model->discription = $_POST['Packages']['discription'];
				$model->created_by  = Yii::app()->user->id;
				$photo=CUploadedFile::getInstance($model,'images');
				if ( (is_object($photo) && get_class($photo)==='CUploadedFile')){
					$extension  = pathinfo($photo->name, PATHINFO_EXTENSION);
					$imageFileName = date('dmyhs').'.'.$extension;;
           			 $model->images = $imageFileName;
					// unlink(Yii::app()->basePath .'/../studen-photo/Franchise/'.$managerPhoto);
					$photo->saveAs(Yii::app()->basePath .'/../upload/'.$imageFileName);
            	 }
				
				
				
				if($model->save()){
					Yii::app()->user->setFlash('success', '<i class="fa fa-check-circle"></i><strong> Packages Sucessfully Updated!</strong>');
					$this->redirect(array('index'));
				
				} else{
					Yii::app()->user->setFlash('danger', '<i class="fa fa-check-circle"></i><strong> Packages could not Updated!</strong>');
				}
			} 
		}
		$this->render('edit',array('model'=>$model,));
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

		if(isset($_POST['Packages']))
		{
			$model->attributes=$_POST['Packages'];
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
	
	public function actionDelete(){
		$id=$_POST['id'];
		$CheckRegistration = Yii::app()->db->createCommand('SELECT count(*) count FROM  registrations AS  Registrations WHERE Registrations.package_id="'.$id.'" ')->queryScalar();
		
		$checkPermission=Yii::app()->session['permissions'];
			if($checkPermission[0]['deletes']!=0){
				echo 3;
				exit;
			}
		
		if($CheckRegistration==0){
			$query = "delete from  packages where id ='".$id."'	";
			$command = Yii::app()->db->createCommand($query);
			$command->execute();
			echo 1;
		} else {
			echo 2;
		}
		//print_r($this->loadModel($_POST['Id'])->delete());
		
	}
	
	public function actionStatus() {
			$id=$_POST['id'];
		  $model = Packages::model()->findByPk($_POST['id']);  // use whatever the correct class name is
		  $status=$model->status  =='0' ? '1' : '0';
		  $cdate=date('Y-m-d');
		  
		  $checkPermission=Yii::app()->session['permissions'];
			if($checkPermission[0]['view']!=0){
				echo 3;
				exit;
			}
		  
		 $connection=Yii::app()->db;
		 $sql = "UPDATE packages SET  status = '$status', update_date='$cdate' WHERE id = '$id'";
		$command = $connection->createCommand($sql);
		$command->execute();
		//print_r($command->execute());
		//exit;
		  if($command->execute()==0){	   
		   echo 1;
		  } else {
			  echo 'error';
		  }
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
		if($checkPermission[0]['adds']!=0){
			Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Permission Denied</strong>');
			$this->redirect(array('/user/dashboard'));
		}
		
		$model = new Packages('search');
		$criteria = new CDbCriteria;
			//$criteria->select = "t.*, Franchise.CName as CentreName";
			//$criteria->join = 'LEFT JOIN franchise Franchise ON t.CenterCode = Franchise.DocId';
			if(isset($_GET['Packages'])){
				$model->attributes=$_GET['Packages'];
				$criteria->addSearchCondition('t.category_id', "%".$_GET['Packages']['category_id']."%", 0);
				$criteria->addSearchCondition('t.package_name', "%".$_GET['Packages']['package_name']."%", 0);
				$criteria->addSearchCondition('t.bv', $_GET['Packages']['bv']."%", 0);
				//$criteria->addSearchCondition(" t.FromDt> '$fromDate' AND t.ToDt < '$toDate' ", 0);
				//$criteria->addSearchCondition('t.ToDt', $_GET['Franchise']['ToDt']."%", 0);
				
			}
			//$criteria->addCondition("t.Code IS NULL");
		 	$dataProvider = new CActiveDataProvider('Packages', array(
            'criteria'=> $criteria,'pagination'=>array(
                'pageSize'=>15,
            ),
            'sort'=>array(
                'defaultOrder'=> array('id'=>true),
            )
            ));
			
			$this->render('index',array(
				'dataProvider'=>$dataProvider,'model'=>$model, 

			));
		

	}
	
	
	
	
	

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Packages('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Packages']))
			$model->attributes=$_GET['Packages'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Packages the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Packages::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Packages $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='packages-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
