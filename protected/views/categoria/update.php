<?php
$this->breadcrumbs=array(
	Yii::t('Categorias')=>array('index'),
	$model->nome=>array('view','id'=>$model->id),
	Yii::t('Atualização'),
);

$this->menu=array(
	array('label'=>Yii::t('Lista'), 'url'=>array('index')),
	array('label'=>Yii::t('Nova'), 'url'=>array('create')),
	array('label'=>Yii::t('Detalhe'), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>Yii::t('Gerenciamento'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Atualizando Categoria'); ?> #<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>