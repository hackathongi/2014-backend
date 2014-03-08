<?php

/**
 * This is the model class for table "Order".
 *
 * The followings are the available columns in table 'Order':
 * @property integer $order_id
 * @property string $description
 * @property string $date
 * @property string $token
 * @property string $date_add
 * @property string $date_update
 * @property integer $pending
 * @property integer $customer_id
 * @property integer $Shop_user_id
 */
class Order extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_id, customer_id, Shop_user_id', 'required'),
			array('order_id, pending, customer_id, Shop_user_id', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>1024),
			array('token', 'length', 'max'=>45),
			array('date, date_add, date_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('order_id, description, date, token, date_add, date_update, pending, customer_id, Shop_user_id', 'safe', 'on'=>'search'),
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
			'order_id' => 'Order',
			'description' => 'Description',
			'date' => 'Date',
			'token' => 'Token',
			'date_add' => 'Date Add',
			'date_update' => 'Date Update',
			'pending' => 'Pending',
			'customer_id' => 'Customer',
			'Shop_user_id' => 'Shop User',
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

		$criteria->compare('order_id',$this->order_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('token',$this->token,true);
		$criteria->compare('date_add',$this->date_add,true);
		$criteria->compare('date_update',$this->date_update,true);
		$criteria->compare('pending',$this->pending);
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('Shop_user_id',$this->Shop_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Order the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
