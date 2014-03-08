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
		<?php echo $form->textField($model, 'description', array('maxlength' => 1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'date'); ?>
		<?php echo $form->textField($model, 'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'token'); ?>
		<?php echo $form->textField($model, 'token', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'createdAt'); ?>
		<?php echo $form->textField($model, 'createdAt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'updatedAt'); ?>
		<?php echo $form->textField($model, 'updatedAt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ClientId'); ?>
		<?php echo $form->textField($model, 'ClientId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ShopId'); ?>
		<?php echo $form->textField($model, 'ShopId'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
