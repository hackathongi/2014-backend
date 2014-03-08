<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('product_code')); ?>:
	<?php echo GxHtml::encode($data->product_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('product_name')); ?>:
	<?php echo GxHtml::encode($data->product_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('price')); ?>:
	<?php echo GxHtml::encode($data->price); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('date_add')); ?>:
	<?php echo GxHtml::encode($data->date_add); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('date_update')); ?>:
	<?php echo GxHtml::encode($data->date_update); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('order_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->order_id)); ?>
	<br />

</div>