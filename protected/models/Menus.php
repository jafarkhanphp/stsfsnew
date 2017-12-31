<?php

/**
 * This is the model class for table "menus".
 *
 * The followings are the available columns in table 'menus':
 * @property integer $id
 * @property string $name
 * @property string $link
 * @property integer $parent_id
 * @property string $class_style
 * @property integer $order_by
 * @property integer $status
 */
class Menus extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'menus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, link, class_style, order_by', 'required'),
			array('parent_id, order_by, status', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>200),
			array('class_style', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, link, parent_id, class_style, order_by, status', 'safe', 'on'=>'search'),
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
	
	public function getallmenu(){
		$menu = Yii::app()->db->createCommand("SELECT Menus.id,Menus.name, Menus.parent_id
						FROM menus AS Menus
						WHERE Menus.status = '0' and Menus.parent_id=0
						ORDER BY Menus.order_by ")->queryAll();
		return $menu;	
	}
	
	public function getSubMenu($parentId){
		$menu = Yii::app()->db->createCommand("SELECT Menus.id, Menus.name,Menus.parent_id,Menus.link
						FROM menus AS Menus
						WHERE Menus.status = '0' and Menus.parent_id='".$parentId."' and Menus.parent_id!=0 
						ORDER BY Menus.order_by ")->queryAll();
		return $menu;	
	}
	
	public function franchiseSubmenu($parentId, $userID){
		$menu = Yii::app()->db->createCommand("SELECT Menus.*
						FROM permission left join menus AS Menus on permission.menu_id=Menus.id
						WHERE Menus.status = '0' and permission.parent_menu_Id='".$parentId."' and permission.user_id='".$userID."'
						ORDER BY Menus.order_by ")->queryAll();
		return $menu;	
	}
	
	

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'link' => 'Link',
			'parent_id' => 'Parent',
			'class_style' => 'Class Style',
			'order_by' => 'Order By',
			'status' => 'Status',
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
		$criteria->compare('link',$this->link,true);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('class_style',$this->class_style,true);
		$criteria->compare('order_by',$this->order_by);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Menus the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
