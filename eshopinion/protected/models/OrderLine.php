<?php

Yii::import('application.models._base.BaseOrderLine');

class OrderLine extends BaseOrderLine
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}