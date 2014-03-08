<?php
/* @var $this OpinionController */
/* @var $model Opinion */

$this->breadcrumbs=array(
	'Opinions'=>array('index'),
	$model->opinion_id=>array('view','id'=>$model->opinion_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opinion', 'url'=>array('index')),
	array('label'=>'Create Opinion', 'url'=>array('create')),
	array('label'=>'View Opinion', 'url'=>array('view', 'id'=>$model->opinion_id)),
	array('label'=>'Manage Opinion', 'url'=>array('admin')),
);
?>

<h1>Update Opinion <?php echo $model->opinion_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>