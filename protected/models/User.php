<?php
/**

 * The followings are the available columns in table 'tbl_user':

 * @property integer $id

 * @property string $username

 * @property string $password

 * @property string $email

 * @property string $profile

 */

class User extends CActiveRecord{
	/**
	 * Returns the static model of the specified AR class.
	 * @return static the static model class
	 */
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	/**
	 * @return string the associated database table name
	 */

	 public $conformpassword;	
	 public $oldpassword;
	 public $newpassword;



	public function tableName(){
		return '{{user}}';
	}
	/**

	 * @return array validation rules for model attributes.

	 */

	public function rules(){
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, conformpassword' , 'required', 'on'=>'insert'),
			 array('password', 'compare', 'compareAttribute'=>'conformpassword', 'on'=>'insert'),
			
			array('newpassword, conformpassword, oldpassword' , 'required', 'on'=>'changePwd'),
			 array('newpassword', 'compare', 'compareAttribute'=>'conformpassword', 'on'=>'changePwd'),
			 array('oldpassword', 'checkPassword', 'on'=>'changePwd'),
			array('username, password', 'length', 'max'=>100, 'on'=>'insert'),
			
			array('newpassword, conformpassword' , 'required', 'on'=>'staffchangePwd'),
			 array('newpassword', 'compare', 'compareAttribute'=>'conformpassword', 'on'=>'staffchangePwd'),
			
			array('username' , 'required', 'except'=>'edit'),
			//array('profile', 'safe'),
		);
	}

	
	public static function getUserNameByID($id){				
		$sql='SELECT username  FROM user WHERE id="'.$id.'" ';				
		$command=Yii::app()->db->createCommand($sql);				
		$registrationDetailArray=$command->queryRow();				
		return $registrationDetailArray['username'];
	}
		
	public static function getUsernameByUserCode($id){
			$sql='SELECT username  FROM user WHERE usercode="'.$id.'" ';
			$command=Yii::app()->db->createCommand($sql);
			$registrationDetailArray=$command->queryRow();
			return $registrationDetailArray['username'];
	}
	
	public static function getPasswordByUserCode($id){
		$sql='SELECT  password 	 FROM user WHERE usercode="'.$id.'"';
		  $command=Yii::app()->db->createCommand($sql);
		  $registrationDetailArray=$command->queryRow();
		  return $registrationDetailArray['password'];
	}

	public static function getUserCode($id){
		$sql='SELECT usercode  FROM user WHERE id="'.$id.'" ';
			$command=Yii::app()->db->createCommand($sql);
			$registrationDetailArray=$command->queryRow();
			return $registrationDetailArray['usercode'];
	}
	

	public function checkStaffExistInUserByStaffID($staffId) {
			$countPassword = Yii::app()->db->createCommand('SELECT count(*) count FROM user AS User WHERE User.usercode="'.$staffId.'" ')->queryScalar();
			return $countPassword;
		}


	public static function getUserIDbystaffID($userId){
				$sql='SELECT  user.id FROM user WHERE user.usercode="'.$userId.'" ';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			 // print_r('<pre>');   print_r($registrationDetailArray);   print_r('</pre>'); exit;
			  return $registrationDetailArray['id'];
		}
	
	
		public static function getUserIDandPassByUserCode($staff_id){
				$sql='SELECT  * FROM user WHERE user.usercode="'.$staff_id.'" ';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			 // print_r('<pre>');   print_r($registrationDetailArray);   print_r('</pre>'); exit;
			  return $registrationDetailArray['username'].'/'.$registrationDetailArray['password'];
		}



		
	public static function getIdByUserCode($id){
			$sql='SELECT  id 	 FROM user WHERE usercode="'.$id.'"';
		  $command=Yii::app()->db->createCommand($sql);
		  $registrationDetailArray=$command->queryRow();
		  return $registrationDetailArray['id'];
	}	

	public static function getIdByUserName($id){
				$sql='SELECT  username	 FROM user WHERE id="'.$id.'"';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['username'];
		}		
	
	public static function getIdByUserDropDown(){			
				$sql='SELECT id, username FROM user where status=0 ';	
				$command=Yii::app()->db->createCommand($sql);		
				$row3=$command->queryAll();		  
				return CHtml::listData($row3, 'id', 'username');
				}



	public static function getStatusByID($id){
				$sql='SELECT status FROM user WHERE usercode="'.$id.'"  ';
				$command=Yii::app()->db->createCommand($sql);
				$registrationDetailArray=$command->queryRow();
				return $registrationDetailArray['status'];
		}

	public function checkPassword($attribute, $Oldpassword)
    {
		
		$spid=$this->$attribute ;
		$userId=Yii::app()->user->id;
		$countPassword = Yii::app()->db->createCommand('SELECT count(*) count FROM user AS User WHERE User.password="'.$spid.'" and User.id="'.$userId.'" ')->queryScalar();
		if($countPassword==0){
			$this->addError($attribute, 'Old Password not match!');
			return false;
		} else {
			return true ;
		}
    }
	





	
	public static function getRidById($id){
				$sql='SELECT  Registration.Rid FROM user AS User LEFT JOIN registration AS Registration ON Registration.Rid = User.usercode WHERE User.status=0  and User.id="'.$id.'"';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray;
		}

public function getBv($user_id)
{
	$sql='select tota_left_bv, total_right_bv from registrations where Rid="'.$user_id.'"';
	$command=Yii::app()->db->createCommand($sql);
	$recordset=$command->queryRow();
	return $recordset;
}
public function getTotalIncom($user_id)
{
	$sql='select gross_amount from invoices where rid="'.$user_id.'" order by created_date desc limit 1';
	$command=Yii::app()->db->createCommand($sql);
	$recordset=$command->queryRow();
	return $recordset['gross_amount'];
}

	/**

	 * @return array relational rules.

	 */

	public function relations()

	{

		// NOTE: you may need to adjust the relation name and the related

		// class name for the relations automatically generated below.

		return array(

			'posts' => array(self::HAS_MANY, 'Post', 'author_id'),

		);

	}



	/**

	 * @return array customized attribute labels (name=>label)

	 */

	public function attributeLabels()

	{

		return array(

			'id' => 'Id',

			'username' => 'Username',
			'usercode' => 'RID',

			'password' => 'Password',

			'branch_id' => 'Branch Code',

			/*'profile' => 'Profile',*/

		);

	}



	/**

	 * Checks if the given password is correct.

	 * @param string the password to be validated

	 * @return boolean whether the password is valid

	 */

	public function validatePassword($password)
	{

		//return CPasswordHelper::verifyPassword($password,$this->password);

		if($password !== $this->password){
           // $this->errorCode=self::ERROR_PASSWORD_INVALID;
			return false;
        }
        else{
            return true;
        }
	}
	/**
	 * Generates the password hash.
	 * @param string password
	 * @return string hash
	 */

	public function hashPassword($password){
		return CPasswordHelper::hashPassword($password);
	}

}

