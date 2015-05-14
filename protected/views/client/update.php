<?php
/* @var $this ClientController */
/* @var $model Client */

//$this->breadcrumbs=array(
//	'Clients'=>array('index'),
//	$model->name=>array('view','id'=>$model->id),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List Client', 'url'=>array('index')),
//	array('label'=>'Create Client', 'url'=>array('create')),
//	array('label'=>'View Client', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage Client', 'url'=>array('admin')),
//);
//?>

<h1> Обновление клиента № <?php echo $model->id; ?></h1>
	<div class="panel panel-primary panel-material-light-blue-600">

<?php $this->renderPartial('_form_update', array('model'=>$model)); ?>
	</div>