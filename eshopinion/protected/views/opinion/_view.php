<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('description')); ?>:
	<?php echo GxHtml::encode($data->description); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('rating')); ?>:
	<?php echo GxHtml::encode($data->rating); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('date')); ?>:
	<?php echo GxHtml::encode($data->date); ?>
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
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('lang')); ?>:
	<?php echo GxHtml::encode($data->lang); ?>
	<br />
	*/ ?>

</div>