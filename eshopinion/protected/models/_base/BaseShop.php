<?php

/**
 * This is the model base class for the table "Shop".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Shop".
 *
 * Columns in table "Shop" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
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
 *
 */
abstract class BaseShop extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'Shop';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Shop|Shops', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('hours_to_email, is_client', 'numerical', 'integerOnly'=>true),
			array('name, email', 'length', 'max'=>255),
			array('address, url, url_scrap', 'length', 'max'=>512),
			array('phone, username, password, token', 'length', 'max'=>45),
			array('logo_url', 'length', 'max'=>1024),
			array('mandrill_key', 'length', 'max'=>25),
			array('data_add, date_update', 'safe'),
			array('name, address, url, phone, email, logo_url, hours_to_email, username, password, token, data_add, date_update, is_client, url_scrap, mandrill_key', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name, address, url, phone, email, logo_url, hours_to_email, username, password, token, data_add, date_update, is_client, url_scrap, mandrill_key', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'name' => Yii::t('app', 'Name'),
			'address' => Yii::t('app', 'Address'),
			'url' => Yii::t('app', 'Url'),
			'phone' => Yii::t('app', 'Phone'),
			'email' => Yii::t('app', 'Email'),
			'logo_url' => Yii::t('app', 'Logo Url'),
			'hours_to_email' => Yii::t('app', 'Hours To Email'),
			'username' => Yii::t('app', 'Username'),
			'password' => Yii::t('app', 'Password'),
			'token' => Yii::t('app', 'Token'),
			'data_add' => Yii::t('app', 'Data Add'),
			'date_update' => Yii::t('app', 'Date Update'),
			'is_client' => Yii::t('app', 'Is Client'),
			'url_scrap' => Yii::t('app', 'Url Scrap'),
			'mandrill_key' => Yii::t('app', 'Mandrill Key'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('address', $this->address, true);
		$criteria->compare('url', $this->url, true);
		$criteria->compare('phone', $this->phone, true);
		$criteria->compare('email', $this->email, true);
		$criteria->compare('logo_url', $this->logo_url, true);
		$criteria->compare('hours_to_email', $this->hours_to_email);
		$criteria->compare('username', $this->username, true);
		$criteria->compare('password', $this->password, true);
		$criteria->compare('token', $this->token, true);
		$criteria->compare('data_add', $this->data_add, true);
		$criteria->compare('date_update', $this->date_update, true);
		$criteria->compare('is_client', $this->is_client);
		$criteria->compare('url_scrap', $this->url_scrap, true);
		$criteria->compare('mandrill_key', $this->mandrill_key, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}