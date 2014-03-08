<?php

/**
 * This is the model base class for the table "Client".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Client".
 *
 * Columns in table "Client" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
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
 *
 */
abstract class BaseClient extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'Client';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Client|Clients', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('name, surname, city, country, email', 'length', 'max'=>255),
			array('address', 'length', 'max'=>512),
			array('post_code', 'length', 'max'=>10),
			array('sex', 'length', 'max'=>1),
			array('phone, Clientcol', 'length', 'max'=>45),
			array('born_date, date_add, date_update', 'safe'),
			array('name, surname, address, city, post_code, country, born_date, sex, email, phone, date_add, date_update, Clientcol', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name, surname, address, city, post_code, country, born_date, sex, email, phone, date_add, date_update, Clientcol', 'safe', 'on'=>'search'),
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
			'surname' => Yii::t('app', 'Surname'),
			'address' => Yii::t('app', 'Address'),
			'city' => Yii::t('app', 'City'),
			'post_code' => Yii::t('app', 'Post Code'),
			'country' => Yii::t('app', 'Country'),
			'born_date' => Yii::t('app', 'Born Date'),
			'sex' => Yii::t('app', 'Sex'),
			'email' => Yii::t('app', 'Email'),
			'phone' => Yii::t('app', 'Phone'),
			'date_add' => Yii::t('app', 'Date Add'),
			'date_update' => Yii::t('app', 'Date Update'),
			'Clientcol' => Yii::t('app', 'Clientcol'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('surname', $this->surname, true);
		$criteria->compare('address', $this->address, true);
		$criteria->compare('city', $this->city, true);
		$criteria->compare('post_code', $this->post_code, true);
		$criteria->compare('country', $this->country, true);
		$criteria->compare('born_date', $this->born_date, true);
		$criteria->compare('sex', $this->sex, true);
		$criteria->compare('email', $this->email, true);
		$criteria->compare('phone', $this->phone, true);
		$criteria->compare('date_add', $this->date_add, true);
		$criteria->compare('date_update', $this->date_update, true);
		$criteria->compare('Clientcol', $this->Clientcol, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}