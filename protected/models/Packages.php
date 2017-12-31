<?php

/**
 * This is the model class for table "packages".
 *
 * The followings are the available columns in table 'packages':
 * @property integer $id
 * @property integer $category_id
 * @property string $package_name
 * @property integer $amount
 * @property string $bv
 * @property string $package_percent
 * @property string $images
 * @property string $discription
 * @property string $created
 * @property integer $update_amount
 * @property string $update_date
 * @property integer $status
 * @property integer $created_by
 */
class Packages extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'packages';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_id, package_name, amount, bv', 'required'),
			array('amount', 'numerical', 'integerOnly'=>true),
			//array('package_name', 'length', 'max'=>200),
			//array('bv', 'length', 'max'=>5),
			//array('package_percent', 'length', 'max'=>100),
			//array('images', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			//array('id, category_id, package_name, amount, bv, package_percent, images, discription, created, update_amount, update_date, status, created_by', 'safe', 'on'=>'search'),
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
			'category_id' => 'Category',
			'package_name' => 'Package Name',
			'amount' => 'Amount',
			'bv' => 'BV',
			'package_percent' => 'Package Percent',
			'images' => 'Images',
			'discription' => 'Discription',
			'created' => 'Created',
			'update_amount' => 'Update Amount',
			'update_date' => 'Update Date',
			'status' => 'Status',
			'created_by' => 'Created By',
		);
	}
	
	public static function getPackagenameByid($Id){				$sql='SELECT  package_name FROM packages WHERE id="'.$Id.'"';			  $command=Yii::app()->db->createCommand($sql);			  $registrationDetailArray=$command->queryRow();			  return $registrationDetailArray['package_name'];		}
	public static function getPackageName($id){
				$sql="SELECT package_name from packages  where id='$id' ";
				$command=Yii::app()->db->createCommand($sql);
				$queryArray=$command->queryRow();
				return $queryArray['package_name'];
		}
	
	public static function getPackageDropDown($status){
				$sql="SELECT id,  Concat(package_name,'-',bv,'BV') AS package_name FROM packages  where status=$status ";
				$command=Yii::app()->db->createCommand($sql);
				$queryArray=$command->queryAll();
				$listdata3 = CHtml::listData($queryArray, 'id', 'package_name');
				return $listdata3;
	}
	public static function getBvById($Id){
				$sql='SELECT bv FROM packages WHERE id="'.$Id.'"';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['bv'];
		}
		
		public static function getAmountById($Id){
				$sql='SELECT amount FROM packages WHERE id="'.$Id.'"';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['amount'];
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
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('package_name',$this->package_name,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('bv',$this->bv,true);
		$criteria->compare('package_percent',$this->package_percent,true);
		$criteria->compare('images',$this->images,true);
		$criteria->compare('discription',$this->discription,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('update_amount',$this->update_amount);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('created_by',$this->created_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Packages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
