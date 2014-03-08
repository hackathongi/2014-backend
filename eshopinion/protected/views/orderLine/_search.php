<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'product_code'); ?>
		<?php echo $form->textField($model, 'product_code', array('maxlength' => 200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'product_name'); ?>
		<?php echo $form->textField($model, 'product_name', array('maxlength' => 1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'price'); ?>
		<?php echo $form->textField($model, 'price', array('maxlength' => 17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'date_add'); ?>
		<?php echo $form->textField($model, 'date_add'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'date_update'); ?>
		<?php echo $form->textField($model, 'date_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'order_id'); ?>
		<?php echo $form->dropDownList($model, 'order_id', GxHtml::listDataEx(Order::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
