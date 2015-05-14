<?php
/* @var $this ContractController */
/* @var $model Contract */

//$this->breadcrumbs=array(
//	'Contracts'=>array('index'),
//	$model->id=>array('view','id'=>$model->id),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List Contract', 'url'=>array('index')),
//	array('label'=>'Create Contract', 'url'=>array('create')),
//	array('label'=>'View Contract', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage Contract', 'url'=>array('admin')),
//);
//?>

<h1> Обновление заявки № <?php echo $model->id; ?></h1>
	<div class="panel panel-primary panel-material-light-blue-600">

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>