<?php
/* @var $this UserController */
/* @var $model User */

//$this->breadcrumbs=array(
//	'Users'=>array('index'),
//	'Create',
//);
//
//$this->menu=array(
//	array('label'=>'List User', 'url'=>array('index')),
//	array('label'=>'Manage User', 'url'=>array('admin')),
//);
//?>
	<div class="row add-form-wrapper">
		<div class="col-xs-12">
			<div class="panel panel-primary panel-material-light-blue-600">
				<div class="panel-heading">
					<h3>Добавление пользователя</h3>
				</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
			</div>
		</div>
	</div>