<?php
$this->breadcrumbs=array(
	Yii::t('Categorias')=>array('index'),
	Yii::t('Nova'),
);

$this->menu=array(
	array('label'=>Yii::t('Lista'), 'url'=>array('index')),
	array('label'=>Yii::t('Gerenciamento'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Nova Categoria'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>