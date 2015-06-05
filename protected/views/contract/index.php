<?php
/* @var $this ContractController */
/* @var $dataProvider CActiveDataProvider */

//$this->breadcrumbs=array(
//	'Contracts',
//);
//
//$this->menu=array(
//	array('label'=>'Create Contract', 'url'=>array('create')),
//	array('label'=>'Manage Contract', 'url'=>array('admin')),
//);
//?>
<!---->
<!--<h1>Contracts</h1>-->
<!---->
<?php //$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//));

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
		'columns'=>array(
			array(
				'name' => 'client_id',
				'value' => '$data->clientId->name'
			),
			array(
				'name' => 'date',
				'header' => 'Дата',
				'value' => 'date("d.m.Y H:i",$data->date)'
			),
			array(
				'name' => 'status',
				'value' => '$data->statusId->name'
			),
			array(
				'name' => 'progress',
				'value' => 'Contract::progress($data->progress)',
				'htmlOptions' => array('class' => 'project-progress progress')
			),
			array(
				'name' => 'services',
				'value' =>'Services::getServices($data->services)',
			),
			array(
				'name' => 'price',
				'value' => '$data->price'
			),
			array(
				'class'=>'CButtonColumn',
				'viewButtonOptions' => array('style'=>'display:none')
			),

		),
	)); ?>
</div>
