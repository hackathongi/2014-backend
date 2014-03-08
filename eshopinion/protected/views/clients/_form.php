<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'clients-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'surname'); ?>
		<?php echo $form->textField($model, 'surname', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'surname'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model, 'address', array('maxlength' => 512)); ?>
		<?php echo $form->error($model,'address'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model, 'city', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'city'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'post_code'); ?>
		<?php echo $form->textField($model, 'post_code', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'post_code'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model, 'country', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'country'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'born_date'); ?>
		<?php echo $form->textField($model, 'born_date'); ?>
		<?php echo $form->error($model,'born_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model, 'sex', array('maxlength' => 1)); ?>
		<?php echo $form->error($model,'sex'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model, 'email', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'email'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model, 'phone', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'phone'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'clientcol'); ?>
		<?php echo $form->textField($model, 'clientcol', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'clientcol'); ?>
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
		<?php echo $form->labelEx($model,'OrderId'); ?>
		<?php echo $form->textField($model, 'OrderId'); ?>
		<?php echo $form->error($model,'OrderId'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->