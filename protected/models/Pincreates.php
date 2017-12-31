<?php
/**
 * This is the model class for table "pin".
	public function tableName()
	{
		return 'pincreates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id,no_of_pin', 'required'),
			array('no_of_pin', 'numerical'),
			//array('amount', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			//array('id, pin_no, amount, status, issue_status, created_by, created, updated', 'safe', 'on'=>'search'),
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

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pin_no' => 'Pin No',
			//'amount' => 'Amount',
			'status' => 'Status',
			'issued_rid' => 'Issued Rid',
			'user_id' => 'User Id',
			'issue_status' => 'Issue Status',
			'created_by' => 'Created By',
			'created' => 'Created',
			'updated' => 'Updated',
		);
	}
	
	public function checkPinByPinUserID($pin, $Rid, $packageId){
	}
	
	
	
	public function countTotalPin(){
		$countTotalPin = Yii::app()->db->createCommand("SELECT count(*) count FROM pincreates  ")->queryScalar();
		return $countTotalPin;
	}
	public function getpinnoByid($id){
				$sql='SELECT PinNo  FROM pincreates  WHERE id="'.$id.'" ';
				$command=Yii::app()->db->createCommand($sql);
				$registrationDetailArray=$command->queryRow();
				return $registrationDetailArray['PinNo'];
	}
	
	public function countTodayTotalPin(){
		$countTodayTotalPin = Yii::app()->db->createCommand("SELECT count(*) count FROM pin WHERE created LIKE CONCAT(DATE(NOW()),'%') ")->queryScalar();
		return $countTodayTotalPin;
	}
	
	public function countTransferTotalPin(){
	public function getPinDropdown($Rid){



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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('pin_no',$this->pin_no,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('issue_status',$this->issue_status);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}