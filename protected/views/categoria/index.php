<?php
$this->breadcrumbs=array(
	Yii::t('Categorias'),
);

$this->menu=array(
	array('label'=>Yii::t('Nova'), 'url'=>array('create')),
	array('label'=>Yii::t('Gerenciamento'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Lista de Categorias'); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
