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
//?>

<?php //$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); ?>

<div class="panel panel-primary panel-material-light-blue-600">
	<div class="panel-heading">
		<h3 class="panel-title">Клиенты</h3>
	</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'client-grid',
	'dataProvider'=>$dataProvider,
	'itemsCssClass' => 'table table-striped table-hover',
	'rowCssClass' => array('active', 'active'),
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
		'hote',
		array(
			'class'=>'CButtonColumn',
			'viewButtonOptions' => array('style'=>'display:none')
		),
	),
)); ?>
</div>
