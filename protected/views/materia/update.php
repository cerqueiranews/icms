<?php
$this->breadcrumbs=array(
	'Materias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Materia', 'url'=>array('index')),
	array('label'=>'Create Materia', 'url'=>array('create')),
	array('label'=>'View Materia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Materia', 'url'=>array('admin')),
);
?>

<h1>Update Materia <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'categorias'=>$categorias)); ?>