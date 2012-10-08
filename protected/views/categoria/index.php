<?php
$this->breadcrumbs=array(
	Yii::t('sistema','Categorias'),
);

$this->menu=array(
	array('label'=>Yii::t('sistema','Nova'), 'url'=>array('create')),
	array('label'=>Yii::t('sistema','Gerenciamento'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('sistema','Lista de Categorias'); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
