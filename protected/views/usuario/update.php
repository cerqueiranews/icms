<?php
$this->breadcrumbs=array(
	Yii::t('sistema','Usuários')=>array('index'),
	$model->nome=>array('view','id'=>$model->id),
	Yii::t('sistema','Atualização'),
);

$this->menu=array(
	array('label'=>Yii::t('sistema','Lista'), 'url'=>array('index')),
	array('label'=>Yii::t('sistema','Nova'), 'url'=>array('create')),
	array('label'=>Yii::t('sistema','Detalhe'), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>Yii::t('sistema','Gerenciamento'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('sistema','Atualizando Usuário');?> #<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'tiposUsuarios'=>$tiposUsuarios)); ?>
