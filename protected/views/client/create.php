<?php
/* @var $this ClientController */
/* @var $model Client */

?>
	<div class="row add-form-wrapper">
		<div class="col-xs-12">

			<div class="panel panel-primary panel-material-light-blue-600">
				<div class="panel-heading">
					<h3 class="panel-title">Добавление заяки</h3>
				</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
			</div>
		</div>
	</div>