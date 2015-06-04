<?php
/* @var $this ContractController */
/* @var $model Contract */
/* @var $form CActiveForm */
?>
<div class="panel-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contract-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>



	<?php echo $form->errorSummary($model); ?>

	<div class="col-xs-3">
		<fieldset class="form-group">
		<?php echo $form->labelEx($model,'client_id'); ?>
		<?php echo $form->dropDownList($model,'client_id',Client::allClients(), $htmlOptions = array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'client_id'); ?>
		</fieldset>
	</div>

<!--	<div class="col-xs-3">-->
<!--		<fieldset class="form-group">-->
<!--		--><?php //echo $form->labelEx($model,'date'); ?>
<!--		--><?php //echo $form->textField($model,'date'); ?>
<!--		--><?php //echo $form->error($model,'date'); ?>
<!--		</fieldset>-->
<!--	</div>-->

	<div class="col-xs-3">
		<fieldset class="form-group">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',ContractStatus::allStutus(), $htmlOptions = array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'status'); ?>
		</fieldset>
	</div>

	<div class="col-xs-3">
		<fieldset class="form-group">
		<?php echo $form->labelEx($model,'progress'); ?>
		<?php echo $form->dropDownList($model,'progress',array('1' =>'•', '2' => '••', '3' => '•••', '4' => '••••'),$htmlOptions = array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'progress'); ?>
		</fieldset>
	</div>

	<div class="col-xs-3">
		<fieldset class="form-group">
		<?php echo $form->labelEx($model,'services'); ?>
		<?php echo $form->dropDownList($model,'services',Services::allServices(), $htmlOptions = array('class' => 'form-control', 'multiple' => 'multiple')); ?>
		<?php echo $form->error($model,'services'); ?>
		</fieldset>
	</div>

	<div class="col-xs-3">
		<fieldset class="form-group">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->numberField($model,'price', $htmlOptions = array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'price'); ?>
		</fieldset>
	</div>


	<div class="col-xs-12 text-right">
		<div class="row buttons">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', array('class' => 'btn btn-primary btn-raised')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->