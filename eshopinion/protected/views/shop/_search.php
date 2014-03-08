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
		<?php echo $form->label($model, 'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'address'); ?>
		<?php echo $form->textField($model, 'address', array('maxlength' => 512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'url'); ?>
		<?php echo $form->textField($model, 'url', array('maxlength' => 512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'phone'); ?>
		<?php echo $form->textField($model, 'phone', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'email'); ?>
		<?php echo $form->textField($model, 'email', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'logo_url'); ?>
		<?php echo $form->textField($model, 'logo_url', array('maxlength' => 1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'hours_to_email'); ?>
		<?php echo $form->textField($model, 'hours_to_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'username'); ?>
		<?php echo $form->textField($model, 'username', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'token'); ?>
		<?php echo $form->textField($model, 'token', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'data_add'); ?>
		<?php echo $form->textField($model, 'data_add'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'date_update'); ?>
		<?php echo $form->textField($model, 'date_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'is_client'); ?>
		<?php echo $form->textField($model, 'is_client'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'url_scrap'); ?>
		<?php echo $form->textField($model, 'url_scrap', array('maxlength' => 512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'mandrill_key'); ?>
		<?php echo $form->textField($model, 'mandrill_key', array('maxlength' => 25)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
