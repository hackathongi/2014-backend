<?php

Yii::import('application.models._base.BaseShopClient');

class ShopClient extends BaseShopClient
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}