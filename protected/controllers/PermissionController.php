<?php

class PermissionController extends Controller
{
	
	
	
	public function actionPermission(){
		$this->layout= false;
		if($_GET['id']!=''){
			$userId=base64_decode($_GET['id']);
			$checkUSer=User::model()->checkStaffExistInUserByStaffID($userId);
			$loginUserID=User::model()->getUserIDbystaffID($userId);
			$rolesDetails=Roles::model()->getpermission($loginUserID);
			
			if($checkUSer==0){
				Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> User Id invalid!</strong>');
				$this->redirect(array('user/index'));
			}
		} else {
			Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Missing Parameters!</strong>');
			$this->redirect(array('employee/user_list'));
		}
		$menuData=Menus::model()->getallmenu();
		
		
		$this->render('permission',array('userID'=>$userId, 'rolesDetails'=>$rolesDetails, 'menuData'=>$menuData,'loginUserID'=>$loginUserID));
	}



	public function actionDelete()
	{
		 $menuId=$_POST['menuID'];	
		  $parentId=$_POST['parentId'];	
		  $UserID=$_POST['UserID'];
		  if($menuId!='' && $UserID!=''){
				$command = Yii::app()->db->createCommand("delete from permission where user_id='".$UserID."' and menu_id='".$menuId."' and parent_menu_Id='".$parentId."'");
				$command->execute();
		  }
		 
	}
	
	public function actionActive()
	{
		 $menuId=$_POST['menuID'];	
		  $parentId=$_POST['parentId'];	
		  $UserID=$_POST['UserID'];
		  $roleID= Roles::model()->getRolId($UserID);
		  
		  if($menuId!='' && $UserID!=''){
			  $query1=Yii::app()->db->createCommand()->insert('permission',
				array('user_id'=>$UserID,'menu_id'=>$menuId,'parent_menu_Id'=>$parentId, 'role_id'=>$roleID,'created'=>date('Y-m-d')));
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