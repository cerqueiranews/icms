<?php
$this->breadcrumbs=array(
	Yii::t('sistema','Tipos de Usuários'),
);

$this->menu=array(
	array('label'=>Yii::t('sistema','Novo'), 'url'=>array('create')),
	array('label'=>Yii::t('sistema','Gerenciamento'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('sistema','Lista de Tipos de Usuários'); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
