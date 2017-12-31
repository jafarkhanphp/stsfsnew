<?php

/**
 * This is the model class for table "roles".
 *
 * The followings are the available columns in table 'roles':
 * @property integer $id
 * @property integer $user_id
 * @property integer $adds
 * @property integer $edits
 * @property integer $deletes
 * @property integer $view
 * @property integer $lists
 * @property integer $searches
 * @property integer $prints
 */
class Roles extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'roles';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, adds, edits, deletes, view, lists, searches, prints', 'required'),
			array('user_id, adds, edits, deletes, view, lists, searches, prints', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, adds, edits, deletes, view, lists, searches, prints', 'safe', 'on'=>'search'),
		);
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

	public static function getRolId($userID){
				$sql='SELECT  * FROM roles WHERE user_id ="'.$userID.'"';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			 // print_r('<pre>');   print_r($registrationDetailArray);   print_r('</pre>'); exit;
			  return $registrationDetailArray['id'];
		}

		public static function getpermission($UserId){
				$sql='SELECT  * FROM roles WHERE roles.user_id="'.$UserId.'"';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			 // print_r('<pre>');   print_r($registrationDetailArray);   print_r('</pre>'); exit;
			  return $registrationDetailArray;
		}




	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'adds' => 'Adds',
			'edits' => 'Edits',
			'deletes' => 'Deletes',
			'view' => 'View',
			'lists' => 'Lists',
			'searches' => 'Searches',
			'prints' => 'Prints',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('adds',$this->adds);
		$criteria->compare('edits',$this->edits);
		$criteria->compare('deletes',$this->deletes);
		$criteria->compare('view',$this->view);
		$criteria->compare('lists',$this->lists);
		$criteria->compare('searches',$this->searches);
		$criteria->compare('prints',$this->prints);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Roles the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
