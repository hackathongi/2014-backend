<?php
/* @var $this OrderLineController */
/* @var $model OrderLine */

$this->breadcrumbs=array(
	'Order Lines'=>array('index'),
	$model->order_line_id,
);

$this->menu=array(
	array('label'=>'List OrderLine', 'url'=>array('index')),
	array('label'=>'Create OrderLine', 'url'=>array('create')),
	array('label'=>'Update OrderLine', 'url'=>array('update', 'id'=>$model->order_line_id)),
	array('label'=>'Delete OrderLine', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->order_line_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrderLine', 'url'=>array('admin')),
);
?>

<h1>View OrderLine #<?php echo $model->order_line_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'order_line_id',
		'product_code',
		'product_name',
		'price',
		'date_add',
		'date_update',
		'order_id',
	),
)); ?>
