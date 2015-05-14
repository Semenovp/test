<?php
	/* @var $this ClientController */
	/* @var $model Client */
	/* @var $form CActiveForm */
?>

<div class="panel-body">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'client-form',
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
				<?php echo $form->labelEx($model,'name'); ?>
				<?php echo $form->textField($model,'name',array('class' => 'form-control empty')); ?>
				<span class="material-input"></span>
				<?php echo $form->error($model,'name'); ?>
			</div>
		</fieldset>
	</div>


	<div class="col-xs-3">
		<fieldset class="form-group">
			<div class="form-control-wrapper">
				<?php echo $form->labelEx($model,'phone'); ?>
				<?php echo $form->telField($model,'phone',array('class' => 'form-control empty')); ?>
				<span class="material-input"></span>
				<?php echo $form->error($model,'phone'); ?>
			</div>
		</fieldset>
	</div>

	<div class="col-xs-3">
		<fieldset class="form-group">
			<div class="form-control-wrapper">
				<?php echo $form->labelEx($model,'email'); ?>
				<?php echo $form->emailField($model,'email',array('class' => 'form-control empty')); ?>
				<span class="material-input"></span>
				<?php echo $form->error($model,'email'); ?>
			</div>
		</fieldset>
	</div>

	<div class="col-xs-3">
		<fieldset class="form-group">
			<div class="form-control-wrapper">
				<?php echo $form->labelEx($model,'company'); ?>
				<?php echo $form->textField($model,'company',array('class' => 'form-control empty')); ?>
				<span class="material-input"></span>
				<?php echo $form->error($model,'company'); ?>
			</div>
		</fieldset>
	</div>


	<div class="col-xs-3">
		<fieldset class="form-group">
			<?php echo $form->labelEx($model,'status'); ?>
			<?php echo $form->dropDownList($model,'status',ClientStatus::allStatus(),array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'status'); ?>
		</fieldset>
	</div>

	<div class="col-xs-3">
		<fieldset class="form-group">
			<?php echo $form->labelEx($model,'hote'); ?>
			<?php echo $form->textArea($model,'hote',array('cols' =>'30', 'rows' => '3', 'class' => 'form-control')); ?>
			<?php echo $form->error($model,'hote'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', array('class' => 'btn btn-primary btn-raised')); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->