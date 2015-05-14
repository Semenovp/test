<?php
	/* @var $this ClientController */
	/* @var $model Client */

//	$this->breadcrumbs=array(
//		'Clients'=>array('index'),
//		'Manage',
//	);
//
//	$this->menu=array(
//		array('label'=>'List Client', 'url'=>array('index')),
//		array('label'=>'Create Client', 'url'=>array('create')),
//	);

	Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#client-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="panel panel-primary panel-material-light-blue-600">
	<div class="panel-heading">
		<h3 class="panel-title">Фильтр</h3>
	</div>
	<?php $this->renderPartial('_search',array(
		'model'=>$model,
	)); ?>
</div><!-- search-form -->
<div class="panel panel-primary panel-material-light-blue-600">
	<div class="panel-heading">
		<h3 class="panel-title">Клиенты</h3>
	</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'client-grid',
	'dataProvider'=>$model->search(),
	'itemsCssClass' => 'table table-striped table-hover',
	'rowCssClass' => array('active', 'active'),
//	'filter'=>$model,
	'columns'=>array(
			array(
				'name' => 'name'
			),
			array(
				'name' => 'date',
				'value' => 'date("d.m.Y H:i",$data->date)'
			),
			'phone',
			'email',
			'company',
			array(
				'name' => 'status',
				'value' => '$data->StatusName->name'
			),
//			'hote',
			array(
				'class'=>'CButtonColumn',
				'viewButtonOptions' => array('style'=>'display:none')
			),
	),
)); ?>
</div>