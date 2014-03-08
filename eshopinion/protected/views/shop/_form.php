<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'shops-form',
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
		<?php echo $form->labelEx($model,'adress'); ?>
		<?php echo $form->textField($model, 'adress', array('maxlength' => 512)); ?>
		<?php echo $form->error($model,'adress'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model, 'url', array('maxlength' => 512)); ?>
		<?php echo $form->error($model,'url'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model, 'phone', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'phone'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model, 'email', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'email'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'logo_url'); ?>
		<?php echo $form->textField($model, 'logo_url', array('maxlength' => 1024)); ?>
		<?php echo $form->error($model,'logo_url'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model, 'username', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'username'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model, 'password', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'password'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'token'); ?>
		<?php echo $form->textField($model, 'token', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'token'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'is_client'); ?>
		<?php echo $form->checkBox($model, 'is_client'); ?>
		<?php echo $form->error($model,'is_client'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'url_scrap'); ?>
		<?php echo $form->checkBox($model, 'url_scrap'); ?>
		<?php echo $form->error($model,'url_scrap'); ?>
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


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->