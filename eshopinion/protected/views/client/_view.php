<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('surname')); ?>:
	<?php echo GxHtml::encode($data->surname); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('address')); ?>:
	<?php echo GxHtml::encode($data->address); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('city')); ?>:
	<?php echo GxHtml::encode($data->city); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('post_code')); ?>:
	<?php echo GxHtml::encode($data->post_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('country')); ?>:
	<?php echo GxHtml::encode($data->country); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('born_date')); ?>:
	<?php echo GxHtml::encode($data->born_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('sex')); ?>:
	<?php echo GxHtml::encode($data->sex); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('phone')); ?>:
	<?php echo GxHtml::encode($data->phone); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('date_add')); ?>:
	<?php echo GxHtml::encode($data->date_add); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('date_update')); ?>:
	<?php echo GxHtml::encode($data->date_update); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Clientcol')); ?>:
	<?php echo GxHtml::encode($data->Clientcol); ?>
	<br />
	*/ ?>

</div>