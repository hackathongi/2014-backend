<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'order-line-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'product_code'); ?>
		<?php echo $form->textField($model, 'product_code', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'product_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'product_name'); ?>
		<?php echo $form->textField($model, 'product_name', array('maxlength' => 1024)); ?>
		<?php echo $form->error($model,'product_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model, 'price', array('maxlength' => 17)); ?>
		<?php echo $form->error($model,'price'); ?>
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
		<?php echo $form->labelEx($model,'order_id'); ?>
		<?php echo $form->dropDownList($model, 'order_id', GxHtml::listDataEx(Order::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'order_id'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->