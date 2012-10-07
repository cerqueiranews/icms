<?php
$this->breadcrumbs=array(
	Yii::t('Matérias')=>array('index'),
	Yii::t('Nova'),
);

$this->menu=array(
	array('label'=>Yii::t('Lista'), 'url'=>array('index')),
	array('label'=>Yii::t('Gerenciamento'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Nova Matéria'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'categorias'=>$categorias)); ?>