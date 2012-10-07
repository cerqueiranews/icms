<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		<?php
		echo CHtml::form('','POST',array('style'=>'padding:5px;float:right;'));
		echo CHtml::dropDownList('_lang', Yii::app()->request->cookies['linguagem']->value, array('en_us' => 'English', 'pt_br' => 'Português'), array('submit' => ''));
		echo CHtml::endForm();
		?>
	</div><!-- header -->
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>Yii::t('sistema','Início'), 'url'=>array('/site/index')),
				array('label'=>Yii::t('sistema','Matérias'), 'url'=>array('materia/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('sistema','Categorias'), 'url'=>array('categoria/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('sistema','Usuários'), 'url'=>array('usuario/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('sistema','Contato'), 'url'=>array('/site/contact')),
				array('label'=>Yii::t('sistema','Sobre'), 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
			),
		)); 
		?>
		
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		iCMS - iPattern Content Management System [<em>Sistema de Gerenciamento de Conteúdo</em>]<br/>
		Copyright &copy; <?php echo date('Y'); ?> by iPattern.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
