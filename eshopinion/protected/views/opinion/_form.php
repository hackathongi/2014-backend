<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'opinion-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model, 'description', array('maxlength' => 4000)); ?>
		<?php echo $form->error($model,'description'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'rating'); ?>
		<?php echo $form->textField($model, 'rating'); ?>
		<?php echo $form->error($model,'rating'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model, 'date'); ?>
		<?php echo $form->error($model,'date'); ?>
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
		<div class="row">
		<?php echo $form->labelEx($model,'lang'); ?>
		<?php echo $form->textField($model, 'lang', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'lang'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->