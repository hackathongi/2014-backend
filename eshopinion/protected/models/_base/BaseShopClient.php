<?php

/**
 * This is the model base class for the table "Shop_Client".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ShopClient".
 *
 * Columns in table "Shop_Client" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $Users_user_id
 * @property integer $Customers_customer_id
 *
 */
abstract class BaseShopClient extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'Shop_Client';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ShopClient|ShopClients', $n);
	}

	public static function representingColumn() {
		return array(
			'Users_user_id',
			'Customers_customer_id',
		);
	}

	public function rules() {
		return array(
			array('Users_user_id, Customers_customer_id', 'required'),
			array('Users_user_id, Customers_customer_id', 'numerical', 'integerOnly'=>true),
			array('Users_user_id, Customers_customer_id', 'safe', 'on'=>'search'),
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
			'Users_user_id' => null,
			'Customers_customer_id' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('Users_user_id', $this->Users_user_id);
		$criteria->compare('Customers_customer_id', $this->Customers_customer_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}