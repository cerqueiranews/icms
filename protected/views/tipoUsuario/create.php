<?php
$this->breadcrumbs=array(
	Yii::t('sistema','Tipo de Usuários')=>array('index'),
	Yii::t('sistema','Novo'),
);

$this->menu=array(
	array('label'=>Yii::t('sistema','Lista'), 'url'=>array('index')),
	array('label'=>Yii::t('sistema','Gerenciamento'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('sistema','Novo Tipo de Usuários'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>