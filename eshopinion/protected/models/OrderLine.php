<?php

/**
 * This is the model class for table "OrderLine".
 *
 * The followings are the available columns in table 'OrderLine':
 * @property integer $order_line_id
 * @property string $product_code
 * @property string $product_name
 * @property string $price
 * @property string $date_add
 * @property string $date_update
 * @property integer $order_id
 */
class OrderLine extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'OrderLine';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_line_id, order_id', 'required'),
			array('order_line_id, order_id', 'numerical', 'integerOnly'=>true),
			array('product_code', 'length', 'max'=>200),
			array('product_name', 'length', 'max'=>1024),
			array('price', 'length', 'max'=>17),
			array('date_add, date_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('order_line_id, product_code, product_name, price, date_add, date_update, order_id', 'safe', 'on'=>'search'),
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
			'order_line_id' => 'Order Line',
			'product_code' => 'Product Code',
			'product_name' => 'Product Name',
			'price' => 'Price',
			'date_add' => 'Date Add',
			'date_update' => 'Date Update',
			'order_id' => 'Order',
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

		$criteria->compare('order_line_id',$this->order_line_id);
		$criteria->compare('product_code',$this->product_code,true);
		$criteria->compare('product_name',$this->product_name,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('date_add',$this->date_add,true);
		$criteria->compare('date_update',$this->date_update,true);
		$criteria->compare('order_id',$this->order_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrderLine the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
