<?php
/* @var $this ClientController */
/* @var $model Client */
//
//$this->breadcrumbs=array(
//	'Clients'=>array('index'),
//	$model->name,
//);
//
//$this->menu=array(
//	array('label'=>'List Client', 'url'=>array('index')),
//	array('label'=>'Create Client', 'url'=>array('create')),
//	array('label'=>'Update Client', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete Client', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Client', 'url'=>array('admin')),
//);
//?>
<!---->
<!--<h1>View Client #--><?php //echo $model->id; ?><!--</h1>-->
<div class="alert alert-success" role="alert">Заяка успешно добавлена</div>
<div class="panel panel-primary panel-material-light-blue-600">



<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class' => 'table table-striped table-hover'),
	'itemCssClass' => array('active','active'),
	'attributes'=>array(
		'name',
		'date' => array(
			'label' => 'Дата',
			'value' => date("d.m.Y H:i",$model->date)
		),
		'phone',
		'email',
		'company',
		'status' => array(
			'label' => 'Статус',
			'value' => $model->StatusName->name
		),
		'hote',
	),
)); ?>
</div>
<?php
	echo CHtml::link('Назад к заявкам', array('client/index'),array('class' => 'btn btn-primary btn-raised'));
?>