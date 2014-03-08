<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('adress')); ?>:
	<?php echo GxHtml::encode($data->adress); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('url')); ?>:
	<?php echo GxHtml::encode($data->url); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('phone')); ?>:
	<?php echo GxHtml::encode($data->phone); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('logo_url')); ?>:
	<?php echo GxHtml::encode($data->logo_url); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('username')); ?>:
	<?php echo GxHtml::encode($data->username); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('password')); ?>:
	<?php echo GxHtml::encode($data->password); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('token')); ?>:
	<?php echo GxHtml::encode($data->token); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('is_client')); ?>:
	<?php echo GxHtml::encode($data->is_client); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('url_scrap')); ?>:
	<?php echo GxHtml::encode($data->url_scrap); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('createdAt')); ?>:
	<?php echo GxHtml::encode($data->createdAt); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('updatedAt')); ?>:
	<?php echo GxHtml::encode($data->updatedAt); ?>
	<br />
	*/ ?>

</div>