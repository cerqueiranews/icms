<?php
$this->breadcrumbs=array(
	Yii::t('sistema','Categorias')=>array('index'),
	Yii::t('sistema','Nova'),
);

$this->menu=array(
	array('label'=>Yii::t('sistema','Lista'), 'url'=>array('index')),
	array('label'=>Yii::t('sistema','Gerenciamento'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('sistema','Nova Categoria'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>