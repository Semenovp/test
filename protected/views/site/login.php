<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="row login-form">
	<div class="col-xs-4 col-xs-offset-4">

		<div class="panel panel-primary panel-material-light-blue-600">
			<div class="panel-heading">
				<h3 class="panel-title">Авторизация</h3>
			</div>
			<div class="panel-body">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="col-xs-12">
		<fieldset class="form-group">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',$htmlOptions = array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'username'); ?>
		</fieldset>
	</div>

	<div class="col-xs-12">
		<fieldset class="form-group">
			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password',$htmlOptions = array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'password'); ?>
		</fieldset>
	</div>

	<div class="col-xs-12">
		<fieldset class="form-group">
			<?php echo $form->checkBox($model,'rememberMe'); ?>
			<?php echo $form->label($model,'rememberMe'); ?>
			<?php echo $form->error($model,'rememberMe'); ?>
		</fieldset>
	</div>

	<div class="col-xs-12 text-right">
		<div class="row buttons">
			<?php echo CHtml::submitButton('Вход', array('class' => 'btn btn-primary btn-raised')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>
			</div>
		</div>
	</div>
</div>
