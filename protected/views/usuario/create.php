<?php
$this->breadcrumbs=array(
	Yii::t('Usuários')=>array('index'),
	Yii::t('Novo'),
);

$this->menu=array(
	array('label'=>Yii::t('Lista'), 'url'=>array('index')),
	array('label'=>Yii::t('Gerenciamento'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Novo Usuário');?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>