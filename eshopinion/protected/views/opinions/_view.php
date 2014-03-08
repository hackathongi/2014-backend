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
	<?php echo GxHtml::encode($data->getAttributeLabel('lang')); ?>:
	<?php echo GxHtml::encode($data->lang); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('createdAt')); ?>:
	<?php echo GxHtml::encode($data->createdAt); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('updatedAt')); ?>:
	<?php echo GxHtml::encode($data->updatedAt); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('OrderId')); ?>:
	<?php echo GxHtml::encode($data->OrderId); ?>
	<br />
	*/ ?>

</div>