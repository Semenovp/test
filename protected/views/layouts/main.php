<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<link href="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/bootstrap-material-design/dist/css/material-fullpalette.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/bootstrap-material-design/dist/css/ripples.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/pickadate/lib/compressed/themes/classic.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/pickadate/lib/compressed/themes/classic.date.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/multiple-select/multiple-select.css" rel="stylesheet">

	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<div class="navbar navbar-material-orange-700">
	<div class="container">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><i class="mdi-action-home"></i> Дом Сайтов CRM</a>
		</div>
		<div class="navbar-collapse collapse navbar-responsive-collapse">
					<?php $this->widget('zii.widgets.CMenu',array(
						'htmlOptions' => array(
							'class' => 'nav navbar-nav',
						),
							'items'=>array(
								array('label'=>'Заявки', 'url'=>array('/client/index')),
								array('label'=>'Клиенты', 'url'=>array('/contract/index',)),
								array(
										'label' =>'Добавить','url'=> '#' ,
									    'itemOptions'=> array('class' => 'dropdown'),
									    'linkOptions' => array('data-target' => '#','class' => 'dropdown-toggle','data-toggle' => 'dropdown'),
									    'submenuOptions' => array('class' => 'dropdown-menu',),
										'items' => array(
											array('label'=>'Заявку', 'url'=>array('/client/create',)),
											array('label'=>'Клиента', 'url'=>array('/contract/create',)),

										)
								)
						))); ?>
			<ul class="nav navbar-nav navbar-right">
				<!--<li><a href="javascript:void(0)">Войти</a></li>-->
				<!--<li><a href="javascript:void(0)">Зарегистрироваться</a></li>-->
				<li class="dropdown">
					<?php echo CHtml::link('Выйти',array('//site/logout'),array('class' => 'dropdown-toggle'));?>
				</li>
			</ul>
		</div>

	</div>
</div>
<!--	--><?php //if(isset($this->breadcrumbs)):?>
<!--		--><?php //$this->widget('zii.widgets.CBreadcrumbs', array(
//			'links'=>$this->breadcrumbs,
//		)); ?><!--<!-- breadcrumbs -->
<!--	--><?php //endif?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
	<?php echo $content; ?>
		</div>
	</div>
</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/bootstrap-material-design/dist/js/material.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/bootstrap-material-design/dist/js/ripples.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/pickadate/lib/compressed/picker.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/pickadate/lib/compressed/picker.date.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/pickadate/lib/translations/ru_RU.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/multiple-select/jquery.multiple.select.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>

</body>
</html>
