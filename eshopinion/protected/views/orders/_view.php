<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('description')); ?>:
	<?php echo GxHtml::encode($data->description); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('date')); ?>:
	<?php echo GxHtml::encode($data->date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('token')); ?>:
	<?php echo GxHtml::encode($data->token); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('createdAt')); ?>:
	<?php echo GxHtml::encode($data->createdAt); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('updatedAt')); ?>:
	<?php echo GxHtml::encode($data->updatedAt); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ClientId')); ?>:
	<?php echo GxHtml::encode($data->ClientId); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('ShopId')); ?>:
	<?php echo GxHtml::encode($data->ShopId); ?>
	<br />
	*/ ?>

</div>