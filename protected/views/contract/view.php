<?php
/* @var $this ContractController */
/* @var $model Contract */

//$this->breadcrumbs=array(
//	'Contracts'=>array('index'),
//	$model->id,
//);
//
//$this->menu=array(
//	array('label'=>'List Contract', 'url'=>array('index')),
//	array('label'=>'Create Contract', 'url'=>array('create')),
//	array('label'=>'Update Contract', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete Contract', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Contract', 'url'=>array('admin')),
//);
//?>

<!--<h1>View Contract #--><?php //echo $model->id; ?><!--</h1>-->
<div class="alert alert-success" role="alert">Успешно</div>
<div class="panel panel-primary panel-material-light-blue-600">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class' => 'table table-striped table-hover'),
	'itemCssClass' => array('active','active'),
	'attributes'=>array(
		'client_id' => array(
			'label' => 'Клиент',
			'value' => $model->clientId->name
		),
		'date' => array(
			'label' => 'Дата',
			'value' => date("d.m.Y H:i",$model->date)
		),
		'status' => array(
			'label' => 'Статус',
			'value' => $model->statusId->name
		),
		'progress' => array(
			'label' => 'Прогресс',
			'value' => Contract::progress($model->progress)
		),
		'services' => array(
			'label' => 'Услуги',
			'value' => $model->servicesId->name
		),
		'price',
	),
)); ?>
</div>
<?php
	echo CHtml::link('Назад к клиентам', array('contract/index'),array('class' => 'btn btn-primary btn-raised'));
?>

