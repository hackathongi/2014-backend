<?php
/* @var $this OpinionController */
/* @var $model Opinion */

$this->breadcrumbs=array(
	'Opinions'=>array('index'),
	$model->opinion_id,
);

$this->menu=array(
	array('label'=>'List Opinion', 'url'=>array('index')),
	array('label'=>'Create Opinion', 'url'=>array('create')),
	array('label'=>'Update Opinion', 'url'=>array('update', 'id'=>$model->opinion_id)),
	array('label'=>'Delete Opinion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->opinion_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opinion', 'url'=>array('admin')),
);
?>

<h1>View Opinion #<?php echo $model->opinion_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'opinion_id',
		'description',
		'rating',
		'date',
		'date_add',
		'date_update',
		'order_id',
		'lang',
	),
)); ?>
