<?php

/**
 * This is the model class for table "permission".
 *
 * The followings are the available columns in table 'permission':
 * @property integer $id
 * @property integer $user_id
 * @property integer $menu_id
 * @property integer $parent_menu_Id
 * @property integer $role_id
 * @property string $created
 */
class Permission extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'permission';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, menu_id, parent_menu_Id, role_id, created', 'required'),
			array('user_id, menu_id, parent_menu_Id, role_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, menu_id, parent_menu_Id, role_id, created', 'safe', 'on'=>'search'),
		);
	}

	public function submenu($userId, $paretID){
		$menu = Yii::app()->db->createCommand("SELECT Menus.name, Menus.link, Menus.parent_id, Menus.class_style, Permission.menu_id
					FROM permission AS Permission
					LEFT JOIN menus AS Menus ON Menus.id = Permission.menu_id
					WHERE Permission.user_id = '".$userId."'
					AND Permission.parent_menu_Id = '".$paretID."'")->queryAll();
		return $menu;	
	}
	
	
	public function getMenuId($menuID, $userID){
		$menucount = Yii::app()->db->createCommand('SELECT count(*) count FROM permission AS Permission WHERE Permission.menu_id="'.$menuID.'" and Permission.user_id="'.$userID.'" ')->queryScalar();
		return $menucount;
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
			'user_id' => 'User',
			'menu_id' => 'Menu',
			'parent_menu_Id' => 'Parent Menu',
			'role_id' => 'Role',
			'created' => 'Created',
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
		$criteria->compare('menu_id',$this->menu_id);
		$criteria->compare('parent_menu_Id',$this->parent_menu_Id);
		$criteria->compare('role_id',$this->role_id);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Permission the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
