<?php

/**
 * This is the model class for table "Shop".
 *
 * The followings are the available columns in table 'Shop':
 * @property integer $user_id
 * @property string $name
 * @property string $address
 * @property string $url
 * @property string $phone
 * @property string $email
 * @property string $logo_url
 * @property integer $hours_to_email
 * @property string $username
 * @property string $password
 * @property string $token
 * @property string $data_add
 * @property string $date_update
 * @property integer $is_client
 * @property string $url_scrap
 * @property string $mandrill_key
 */
class Shop extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Shop';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id', 'required'),
			array('user_id, hours_to_email, is_client', 'numerical', 'integerOnly'=>true),
			array('name, email', 'length', 'max'=>255),
			array('address, url, url_scrap', 'length', 'max'=>512),
			array('phone, username, password, token', 'length', 'max'=>45),
			array('logo_url', 'length', 'max'=>1024),
			array('mandrill_key', 'length', 'max'=>25),
			array('data_add, date_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, name, address, url, phone, email, logo_url, hours_to_email, username, password, token, data_add, date_update, is_client, url_scrap, mandrill_key', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'name' => 'Name',
			'address' => 'Address',
			'url' => 'Url',
			'phone' => 'Phone',
			'email' => 'Email',
			'logo_url' => 'Logo Url',
			'hours_to_email' => 'Hours To Email',
			'username' => 'Username',
			'password' => 'Password',
			'token' => 'Token',
			'data_add' => 'Data Add',
			'date_update' => 'Date Update',
			'is_client' => 'Is Client',
			'url_scrap' => 'Url Scrap',
			'mandrill_key' => 'Mandrill Key',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('logo_url',$this->logo_url,true);
		$criteria->compare('hours_to_email',$this->hours_to_email);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('token',$this->token,true);
		$criteria->compare('data_add',$this->data_add,true);
		$criteria->compare('date_update',$this->date_update,true);
		$criteria->compare('is_client',$this->is_client);
		$criteria->compare('url_scrap',$this->url_scrap,true);
		$criteria->compare('mandrill_key',$this->mandrill_key,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Shop the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
