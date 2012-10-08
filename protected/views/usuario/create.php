<?php
$this->breadcrumbs=array(
	Yii::t('sistema','Usuários')=>array('index'),
	Yii::t('sistema','Novo'),
);

$this->menu=array(
	array('label'=>Yii::t('sistema','Lista'), 'url'=>array('index')),
	array('label'=>Yii::t('sistema','Gerenciamento'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('sistema','Novo Usuário');?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>