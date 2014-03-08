<?php

/**
 * This is the model class for table "Client".
 *
 * The followings are the available columns in table 'Client':
 * @property integer $customer_id
 * @property string $name
 * @property string $surname
 * @property string $address
 * @property string $city
 * @property string $post_code
 * @property string $country
 * @property string $born_date
 * @property string $sex
 * @property string $email
 * @property string $phone
 * @property string $date_add
 * @property string $date_update
 * @property string $Clientcol
 */
class Client extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Client';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_id', 'required'),
			array('customer_id', 'numerical', 'integerOnly'=>true),
			array('name, surname, city, country, email', 'length', 'max'=>255),
			array('address', 'length', 'max'=>512),
			array('post_code', 'length', 'max'=>10),
			array('sex', 'length', 'max'=>1),
			array('phone, Clientcol', 'length', 'max'=>45),
			array('born_date, date_add, date_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('customer_id, name, surname, address, city, post_code, country, born_date, sex, email, phone, date_add, date_update, Clientcol', 'safe', 'on'=>'search'),
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
			'customer_id' => 'Customer',
			'name' => 'Name',
			'surname' => 'Surname',
			'address' => 'Address',
			'city' => 'City',
			'post_code' => 'Post Code',
			'country' => 'Country',
			'born_date' => 'Born Date',
			'sex' => 'Sex',
			'email' => 'Email',
			'phone' => 'Phone',
			'date_add' => 'Date Add',
			'date_update' => 'Date Update',
			'Clientcol' => 'Clientcol',
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

		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('post_code',$this->post_code,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('born_date',$this->born_date,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('date_add',$this->date_add,true);
		$criteria->compare('date_update',$this->date_update,true);
		$criteria->compare('Clientcol',$this->Clientcol,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Client the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
