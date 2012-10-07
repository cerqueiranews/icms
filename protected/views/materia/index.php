<?php
$this->breadcrumbs=array(
	Yii::t('Matérias'),
);

$this->menu=array(
	array('label'=>Yii::t('Nova'), 'url'=>array('create')),
	array('label'=>Yii::t('Gerenciamento'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Lista de Matérias'); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
