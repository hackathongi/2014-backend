<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'order-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model, 'description', array('maxlength' => 1024)); ?>
		<?php echo $form->error($model,'description'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model, 'date'); ?>
		<?php echo $form->error($model,'date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'token'); ?>
		<?php echo $form->textField($model, 'token', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'token'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'date_add'); ?>
		<?php echo $form->textField($model, 'date_add'); ?>
		<?php echo $form->error($model,'date_add'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'date_update'); ?>
		<?php echo $form->textField($model, 'date_update'); ?>
		<?php echo $form->error($model,'date_update'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'pending'); ?>
		<?php echo $form->textField($model, 'pending'); ?>
		<?php echo $form->error($model,'pending'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'customer_id'); ?>
		<?php echo $form->dropDownList($model, 'customer_id', GxHtml::listDataEx(Client::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'customer_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Shop_user_id'); ?>
		<?php echo $form->dropDownList($model, 'Shop_user_id', GxHtml::listDataEx(Shop::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'Shop_user_id'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->