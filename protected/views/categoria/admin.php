<?php
$this->breadcrumbs=array(
	Yii::t('sistema','Categorias')=>array('index'),
	Yii::t('sistema','Gerenciamento'),
);

$this->menu=array(
	array('label'=>Yii::t('sistema','Lista'), 'url'=>array('index')),
	array('label'=>Yii::t('sistema','Nova'), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('categoria-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('sistema','Gerenciamento de Categorias'); ?></h1>

<p>
<?php echo Yii::t('sistema','Você pode utilizar os seguintes operadores'); ?> (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) <?php echo Yii::t('sistema','no início de cada valor a ser procurado para especificar o tipo de comparação a ser feita'); ?>.
</p>

<?php echo CHtml::link(Yii::t('sistema','Busca Avançada'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'categoria-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'nome',
		//'descricao',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
