<?php
/* @var $this ClientController */
/* @var $model Client */
/* @var $form CActiveForm */
?>

<div class="panel-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class="col-xs-12">
		<fieldset class="form-group">
			<div class="form-control-wrapper">
				<?php echo $form->label($model,'name'); ?>
				<?php echo $form->textField($model,'name',array('class' => 'form-control empty')); ?>
			</div>
		</fieldset>
	</div>
	<div class="col-xs-3">
		<fieldset class="form-group">
			<?php echo $form->label($model,'status'); ?>
			<?php echo $form->dropDownList($model,'status',ClientStatus::allStatus(),array('class' => 'form-control', 'empty' => '')); ?>
		</fieldset>
	</div>
	<div class="col-xs-3">
		<fieldset class="form-group">
			<?php echo $form->label($model,'phone'); ?>
			<?php echo $form->textField($model,'phone',array('class' => 'form-control empty')); ?>
		</fieldset>
	</div>
	<div class="col-xs-3">
		<fieldset class="form-group">
			<?php echo $form->label($model,'email'); ?>
			<?php echo $form->textField($model,'email',array('class' => 'form-control empty')); ?>
		</fieldset>
	</div>
	<div class="col-xs-3">
		<fieldset class="form-group">
			<?php echo $form->label($model,'company'); ?>
			<?php echo $form->textField($model,'company',array('class' => 'form-control empty')); ?>
		</fieldset>
	</div>
	<div class="col-xs-3">
		<fieldset class="form-group">
			<?php echo $form->labelEx($model,'services'); ?>
			<?php echo $form->dropDownList($model,'services',Services::allServices(), $htmlOptions = array('class' => 'form-control',  'multiple' => 'multiple')); ?>
		</fieldset>
	</div>
	<div class="col-xs-3">
		<fieldset class="form-group">
			<label for="">Дата добавления</label>
			<?php echo $form->dateField($model,'date',array('class' => 'form-control empty', 'name' => 'dateStart', 'placeholder' => 'от')); ?>
			<?php echo $form->dateField($model,'date',array('class' => 'form-control empty', 'name' => 'dateEnd', 'placeholder' => 'до')); ?>
		</fieldset>
	</div>
	<div class="col-xs-12 text-right">
		<?php echo CHtml::submitButton('Показать',array('class' => 'btn btn-primary btn-raised')); ?>
		<?php echo CHtml::resetButton('Сбросить фильтр',array('class' => 'btn btn-default btn-raised')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->