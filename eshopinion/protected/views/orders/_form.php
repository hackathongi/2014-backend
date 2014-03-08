<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'orders-form',
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
		<?php echo $form->labelEx($model,'createdAt'); ?>
		<?php echo $form->textField($model, 'createdAt'); ?>
		<?php echo $form->error($model,'createdAt'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'updatedAt'); ?>
		<?php echo $form->textField($model, 'updatedAt'); ?>
		<?php echo $form->error($model,'updatedAt'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ClientId'); ?>
		<?php echo $form->textField($model, 'ClientId'); ?>
		<?php echo $form->error($model,'ClientId'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ShopId'); ?>
		<?php echo $form->textField($model, 'ShopId'); ?>
		<?php echo $form->error($model,'ShopId'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->