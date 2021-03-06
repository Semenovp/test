<?php
/* @var $this ClientController */
/* @var $dataProvider CActiveDataProvider */

//$this->breadcrumbs=array(
//	'Clients',
//);

//$this->menu=array(
//	array('label'=>'Create Client', 'url'=>array('create')),
//	array('label'=>'Manage Client', 'url'=>array('admin')),
//);

//
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

<?php //$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); ?>
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
		<h3 class="panel-title">Заяки</h3>
	</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'client-grid',
	'dataProvider'=>$model->search(),
	'itemsCssClass' => 'table table-striped table-hover',
	'rowCssClass' => array('active', 'active'),
	'pagerCssClass'=>'custom-pager',
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
		array(
			'name' => 'services',
			'value' =>'Services::getServices($data->services)',
		),
		'hote',
		array(
			'class'=>'CButtonColumn',
			'viewButtonOptions' => array('style'=>'display:none')
		),
	),
)); ?>
</div>


