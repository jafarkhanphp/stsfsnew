<?php

class SettingsController extends Controller
{
	
	
	


public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	public function actionSetting()
	{
		$this->layout=false;
		$model=new Settings;
		$this->render('setting',array('model'=>$model,));
	}
	
	
	 public function actionProfile(){
		if($_POST['pk']!=""){
			$value=$_POST['value'];
			if($value!=''){
				$connection=Yii::app()->db;
				$sql = "UPDATE  settings SET  setting_value = '".$value."' WHERE id = '".$_POST['pk']."'";
				$command = $connection->createCommand($sql);
				$command->execute();
			}
		}
	}
	
	
	
	
	
	public function actionUpdate()
	{
		$model=new Settings;
		//$model->attributes=$_POST['Setting'];
		//$id=$_POST['id'];	
	  // $pin = Setting::model()->findAll(array("condition"=>"id='$id'")); 

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		//$model=$this->loadModel();
     $setting1=Settings::model()->getSiteSettingByName('site_title');
	 $setting2=Settings::model()->getSiteSettingByName('site_logo');
	 $setting3=Settings::model()->getSiteSettingByName('site_mobile');
	 $setting4=Settings::model()->getSiteSettingByName('site_footer');
	 $setting5=Settings::model()->getSiteSettingByName('site_email');
	 $setting6=Settings::model()->getSiteSettingByName('meta_title');
	 $setting7=Settings::model()->getSiteSettingByName('meta_description');
	 $setting8=Settings::model()->getSiteSettingByName('site_phone');
	 $setting9=Settings::model()->getSiteSettingByName('twitter');
	 $setting10=Settings::model()->getSiteSettingByName('google');
	 $setting11=Settings::model()->getSiteSettingByName('facebook');
	 $setting12=Settings::model()->getSiteSettingByName('linkedin');
	 $setting13=Settings::model()->getSiteSettingByName('keyword');
	 $setting14=Settings::model()->getSiteSettingByName('address');
	 $setting15=Settings::model()->getSiteSettingByName('skype');
	 $setting16=Settings::model()->getSiteSettingByName('site_favicon');
	 
	 
	/*print_r('<pre>');   print_r($setting1);   print_r('</pre>');  exit;*/
		if(isset($_POST['Settings']))
		{
			$model->attributes=$_POST['Settings'];
			if($model->save())
			
			$model->site_title =  $_POST['Settings']['site_title'];
			$model->site_mobile =  $_POST['Settings']['site_mobile'];
				//$title=$_POST['settings']['site_title'];
				//print_r('<pre>');   print_r($title);   print_r('</pre>');  exit;
				//$sql = "UPDATE  Settings SET  settingvalue = '$title' WHERE settingname = 'site_title'";
														//$command = $connection->createCommand($sql);
															//$command->execute();
		}
		
		
		

		$this->render('update',array('model'=>$model,'setting1'=>$setting1,'setting2'=>$setting2,'setting3'=>$setting3,'setting4'=>$setting4,'setting5'=>$setting5,'setting6'=>$setting6,'setting7'=>$setting7,'setting8'=>$setting8,'setting9'=>$setting9,'setting10'=>$setting10,'setting11'=>$setting11,'setting12'=>$setting12,'setting13'=>$setting13,'setting14'=>$setting14,'setting15'=>$setting15,'setting16'=>$setting16));
	}


    public function actionDelete()
	{

				
	}

	public function actionIndex()
	{
		$model = new Settings($scenario='search');
		$criteria = new CDbCriteria;
		if(isset($_GET['Settings'])){
				$model->attributes=$_GET['Settings'];
				//$criteria->addSearchCondition('t.pin_no', $_GET['Pin']['pin_no']."%", 0);
				//$criteria->addSearchCondition('t.status', $_GET['Pin']['status']."%", 0);
				//$criteria->addSearchCondition('t.issue_status', $_GET['Pin']['issue_status']."%", 0);
			}

		$dataProvider=new CActiveDataProvider('Settings', array('criteria' => $criteria,
		'sort'=>array( 'defaultOrder'=> array('id'=>true),  ), 
		'pagination' => array ( 'PageSize' => 15,  ) 
		));
		$this->render('index',array('dataProvider'=>$dataProvider,'model'=>$model, ));


	}

	public function actionAdmin()
	{
		$model=new Setting('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Settings']))
			$model->attributes=$_GET['Settings'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	
	public function loadModel($id)
	{
		$model=Settings::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

protected function performAjaxValidation($model){
		if(isset($_POST['ajax']) && $_POST['ajax']==='settings-form')		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

	}	


}
