<?php

/**
 * This is the model class for table "ak_military_service_branch".
 *
 * The followings are the available columns in table 'ak_military_service_branch':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $create_date
 * @property string $modified_date
 *
 * The followings are the available model relations:
 * @property UserMilitaryService[] $userMilitaryServices
 */
class MilitaryServiceBranch extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return MilitaryServiceBranch the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ak_military_service_branch';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('create_date, modified_date', 'required'),
			array('name', 'length', 'max'=>45),
			array('description', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, description, create_date, modified_date', 'safe', 'on'=>'search'),
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
			'userMilitaryServices' => array(self::HAS_MANY, 'UserMilitaryService', 'branch_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Military Branch',
			'description' => 'Branch Description',
			'create_date' => 'Create Date',
			'modified_date' => 'Modified Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('modified_date',$this->modified_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}