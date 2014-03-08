<?php

/**
 * This is the model class for table "Opinion".
 *
 * The followings are the available columns in table 'Opinion':
 * @property integer $opinion_id
 * @property string $description
 * @property integer $rating
 * @property string $date
 * @property string $date_add
 * @property string $date_update
 * @property integer $order_id
 * @property string $lang
 */
class Opinion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Opinion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('opinion_id, order_id', 'required'),
			array('opinion_id, rating, order_id', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>4000),
			array('lang', 'length', 'max'=>3),
			array('date, date_add, date_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('opinion_id, description, rating, date, date_add, date_update, order_id, lang', 'safe', 'on'=>'search'),
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
			'opinion_id' => 'Opinion',
			'description' => 'Description',
			'rating' => 'Rating',
			'date' => 'Date',
			'date_add' => 'Date Add',
			'date_update' => 'Date Update',
			'order_id' => 'Order',
			'lang' => 'Lang',
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

		$criteria->compare('opinion_id',$this->opinion_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('date_add',$this->date_add,true);
		$criteria->compare('date_update',$this->date_update,true);
		$criteria->compare('order_id',$this->order_id);
		$criteria->compare('lang',$this->lang,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Opinion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
