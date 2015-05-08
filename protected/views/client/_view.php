<?php
/* @var $this ClientController */
/* @var $data Client */
?>

<div class="view">
		<tr class="active">

<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('id')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<!--	<br />-->

<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('name')); ?><!--:</b>-->
	<td><?php echo CHtml::encode($data->name); ?></td>

<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('date')); ?><!--:</b>-->
	<td><?php echo CHtml::encode($data->date); ?></td>


	<td><?php echo CHtml::encode($data->phone); ?></td>

<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('email')); ?><!--:</b>-->
	<td><?php echo CHtml::encode($data->email); ?></td>
	<br />

	<td>
	<?php echo CHtml::encode($data->company); ?>
			</td>


	<td><?php echo CHtml::encode($data->status); ?></td>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('hote')); ?>:</b>
	<?php echo CHtml::encode($data->hote); ?>
	<br />

	*/ ?>


</div>