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
		<?php echo $form->label($model, 'description'); ?>
		<?php echo $form->textField($model, 'description', array('maxlength' => 4000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'rating'); ?>
		<?php echo $form->textField($model, 'rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'date'); ?>
		<?php echo $form->textField($model, 'date'); ?>
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

	<div class="row">
		<?php echo $form->label($model, 'lang'); ?>
		<?php echo $form->textField($model, 'lang', array('maxlength' => 3)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
