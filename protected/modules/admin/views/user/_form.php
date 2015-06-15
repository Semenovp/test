<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="panel-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($model); ?>
	<div class="col-xs-3">
		<fieldset class="form-group">
			<div class="form-control-wrapper">
				<?php echo $form->textField($model,'username',array('class' => 'form-control empty')); ?>
				<div class="floating-label">
					Логин
				</div>
				<span class="material-input"></span>
				<?php echo $form->error($model,'username'); ?>
			</div>
		</fieldset>
	</div>
	<div class="col-xs-3">
		<fieldset class="form-group">
			<div class="form-control-wrapper">
				<?php echo $form->textField($model,'password',array('class' => 'form-control empty')); ?>
				<div class="floating-label">
					Пароль
				</div>
				<span class="material-input"></span>
				<?php echo $form->error($model,'password'); ?>
			</div>
		</fieldset>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', array('class' => 'btn btn-primary btn-raised')); ?>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->