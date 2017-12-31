<?php
/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;

	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user=User::model()->findByAttributes(array('username'=>strtolower($this->username),'status'=>0));
		//print_r('<pre>');
		//print_r($user);
		//print_r('</pre>');
		//exit;
        if($user===null){
            $this->errorCode=self::ERROR_USERNAME_INVALID;
		} else if(!$user->validatePassword($this->password)){
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
		} else {
			$this->_id=$user->id;
            $this->username=$user->username;
            $this->setState('user_type', $user->user_type);
            $this->setState('usercode', $user->usercode);
			$this->setState('branch_id', $user->branch_id);
			if($user->user_type==0 || $user->user_type==1 || $user->user_type==3){
			    $menutype=1;
				$sql="SELECT Menus.name, Menus.link, Menus.parent_id, Menus.class_style, Permission.menu_id
					FROM permission AS Permission
					LEFT JOIN menus AS Menus ON Menus.id = Permission.menu_id
					WHERE Permission.user_id = '".$user->id."'
					and Menus.menu_type!=1
					AND Menus.parent_id =0
					ORDER BY Menus.order_by";
					$command=Yii::app()->db->createCommand($sql);
					$menuDetailsDetail=$command->queryAll();
					Yii::app()->session['menu']=$menuDetailsDetail;
					
					$sql1="SELECT * FROM roles AS Roles WHERE Roles.user_id = '".$user->id."'";
					$command1=Yii::app()->db->createCommand($sql1);
					$permissionDetailsDetail=$command1->queryAll();
					Yii::app()->session['permissions'] = $permissionDetailsDetail;
				
			} else if($user->user_type==3) {
				 $menutype=0;
				 Yii::app()->session['menu']='';
				 Yii::app()->session['permissions'] ='';
			} else {
				$sql="SELECT Menus.name, Menus.link, Menus.parent_id, Menus.class_style, Permission.menu_id
					FROM permission AS Permission
					LEFT JOIN menus AS Menus ON Menus.id = Permission.menu_id
					WHERE Permission.user_id = '".$user->id."'
					and Menus.menu_type!=1
					AND Menus.parent_id =0
					ORDER BY Menus.order_by";
			}
			
			
			
			
			
			
			$this->errorCode=self::ERROR_NONE;
			
        }
        return $this->errorCode==self::ERROR_NONE;
	}

	/**
	 * @return integer the ID of the user record
	 */
	public function getId()
	{
		return $this->_id;
	}
}