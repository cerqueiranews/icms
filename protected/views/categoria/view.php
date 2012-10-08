<?php
$this->breadcrumbs=array(
	Yii::t('sistema','Categorias')=>array('index'),
	$model->nome,
);

$this->menu=array(
	array('label'=>Yii::t('sistema','Lista'), 'url'=>array('index')),
	array('label'=>Yii::t('sistema','Nova'), 'url'=>array('create')),
	array('label'=>Yii::t('sistema','Atualização'), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('sistema','Apagar'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('sistema','Gerenciamento'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('sistema','Categoria'); ?> #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'descricao',
	),
)); ?>
