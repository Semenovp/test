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
								array('label'=>'Клиенты', 'url'=>array('/client/index')),
								array('label'=>'Заявки', 'url'=>array('/contract/index',)),
								array(
										'label' =>'Добавить','url'=> '#' ,
									    'itemOptions'=> array('class' => 'dropdown'),
									    'linkOptions' => array('data-target' => '#','class' => 'dropdown-toggle','data-toggle' => 'dropdown'),
									    'submenuOptions' => array('class' => 'dropdown-menu',),
										'items' => array(
											array('label'=>'Клиента', 'url'=>array('/client/create',)),
											array('label'=>'Заявку', 'url'=>array('/contract/create',)),

										)
								)
						))); ?>
			<ul class="nav navbar-nav navbar-right">
				<!--<li><a href="javascript:void(0)">Войти</a></li>-->
				<!--<li><a href="javascript:void(0)">Зарегистрироваться</a></li>-->
				<li class="dropdown">
					<a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Евгений Тасканов<b class="caret"></b></a>

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

	<!-- filter -->

	<div class="row">
		<div class="col-xs-12">

			<div class="panel panel-primary panel-material-light-blue-600">
				<div class="panel-heading">
					<h3 class="panel-title">Фильтр</h3>
				</div>

				<div class="panel-body">
					<form action="#">

						<div class="col-xs-12">

							<fieldset class="form-group">
								<div class="form-control-wrapper">
									<input type="text" class="form-control empty">
									<div class="floating-label">
										Поиск компании или человека
									</div>
									<span class="material-input"></span>
								</div>
							</fieldset>

						</div>

						<div class="col-xs-3">

							<fieldset class="form-group">
								<label for="">Дата добавления</label>
								<input type="date" name="date-from" class="form-control" placeholder="от" />
								<input type="date" name="date-to" class="form-control" placeholder="до"/>
							</fieldset>

						</div>

						<div class="col-xs-3">

							<fieldset class="form-group">
								<label for="">Услуги</label><br/>
								<select multiple="multiple" class="services-select">
									<option value="1">Создание</option>
									<option value="2">Продвижение</option>
									<option value="3">Поддержка</option>
									<option value="4">Хостинг</option>
								</select>
							</fieldset>

						</div>

						<div class="col-xs-3">
							<fieldset class="form-group">
								<label for="">Статус</label><br/>
								<select multiple="multiple" class="services-select">
									<option value="1">Заключён</option>
									<option value="2">Отклонён</option>
								</select>
							</fieldset>
						</div>

						<div class="col-xs-3">
							<fieldset class="form-group">
								<label for="">Цена</label><br/>
								<input type="number" class="form-control" placeholder="от"/>
								<input type="number" class="form-control" placeholder="до"/>
							</fieldset>
						</div>

						<div class="col-xs-12 text-right">
							<button class="btn btn-default btn-raised">Сбросить фильтры<div class="ripple-wrapper"></div></button>
							<button class="btn btn-primary btn-raised">Показать<div class="ripple-wrapper"></div></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
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
