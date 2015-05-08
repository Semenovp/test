<?php
/* @var $this ContractController */
/* @var $data Contract */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('Имя')); ?>:</b>
	<?php echo CHtml::encode($data->clientId->name); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('Статус')); ?>:</b>
	<?php echo CHtml::encode($data->statusId->name); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('Услуга')); ?>:</b>
	<?php echo CHtml::encode($data->servicesId->name); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('Телефон')); ?>:</b>
	<?php echo CHtml::encode($data->clientId->phone); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('progress')); ?>:</b>
	<?php echo CHtml::encode($data->progress); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />


</div>