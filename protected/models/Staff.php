<?php

/**
 * This is the model class for table "staff".
 *
 * The followings are the available columns in table 'staff':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $address
 * @property integer $basic_sallery
 * @property string $joining_date
 * @property string $qualification
 * @property integer $status
 * @property string $created
 * @property string $updated
 * @property integer $created_by
 */
class Staff extends CActiveRecord{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()	{
		return 'staff';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, mobile, address, user_type', 'required', 'on'=>'insert'),
			array('branch_id, user_type','branchValidation', 'on'=>'insert'),
			array('basic_sallery, mobile', 'numerical', 'integerOnly'=>true, 'on'=>'insert'),
			array('mobile', 'length', 'max'=>10, 'on'=>'insert'),
			array('email','email', 'on'=>'insert'),
			
			array('name, mobile, address, user_type', 'required', 'except'=>'edit'),
			array('branch_id, user_type','branchValidation', 'except'=>'edit'),
			array('basic_sallery, mobile', 'numerical', 'integerOnly'=>true, 'except'=>'edit'),
			array('mobile', 'length', 'max'=>10, 'except'=>'edit'),
			array('email','email', 'except'=>'edit'),
			
			
			array('name, mobile, address, email', 'required', 'except'=>'profile'),
			array('mobile', 'numerical', 'integerOnly'=>true, 'except'=>'profile'),
			array('mobile', 'length', 'max'=>10, 'except'=>'edit'),
			array('email','email', 'except'=>'profile'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			//array('id, name, email, mobile, address, basic_sallery, joining_date, qualification, status, created, updated, created_by', 'safe', 'on'=>'search'),
		);
	}
	
	
	public function branchValidation($attribute,$params) {
		if($this->user_type==1){
			if($this->branch_id==''){
				$this->addError($attribute,'Please select branch');	
			}
		}
        
        }
	

	public static function getUserNameById($userID){
				$sql='SELECT  staff.name FROM staff WHERE staff.status=0  and staff.id="'.$userID.'"';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			// print_r('<pre>');   print_r($registrationDetailArray);   print_r('</pre>'); exit;
			  return $registrationDetailArray['name'];
		}
		
		public static function getRIDById($Id){
				$sql='SELECT  staff.RID FROM staff WHERE staff.id="'.$Id.'"';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['RID'];
		}


		

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'email' => 'Email',
			'mobile' => 'Mobile',
			'address' => 'Address',
			'basic_sallery' => 'Basic Sallery',
			'joining_date' => 'Joining Date',
			'qualification' => 'Qualification',
			'status' => 'Status',
			'created' => 'Created',
			'updated' => 'Updated',
			'created_by' => 'Created By',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('basic_sallery',$this->basic_sallery);
		$criteria->compare('joining_date',$this->joining_date,true);
		$criteria->compare('qualification',$this->qualification,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);
		$criteria->compare('created_by',$this->created_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Staff the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
