<?php
$this->breadcrumbs=array(
	Yii::t('Tipo de Usuários')=>array('index'),
	$model->nome,
);

$this->menu=array(
	array('label'=>Yii::t('Lista'), 'url'=>array('index')),
	array('label'=>Yii::t('Nova'), 'url'=>array('create')),
	array('label'=>Yii::t('Atualização'), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('Apagar'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('Gerenciamento'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Tipo de Usuários'); ?> #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'descricao',
	),
)); ?>
