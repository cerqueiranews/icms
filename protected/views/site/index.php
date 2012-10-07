<?php $this->pageTitle=Yii::app()->name; ?>

<h1><?php echo Yii::t('sistema','Seja bem-vindo ao')?> <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<ul>
	<strong><?php echo Yii::t('sistema','MENU DO SISTEMA')?></strong>
	<li>
		<?php echo CHtml::link(CHtml::encode(Yii::t('sistema','Matérias')), array('materia/index')); ?>
		<ul>
			<li>>> <?php echo CHtml::link(CHtml::encode(Yii::t('sistema','Nova')), array('materia/create')); ?></li>
			<li>>> <?php echo CHtml::link(CHtml::encode(Yii::t('sistema','Listar')), array('materia/admin')); ?></li>
		</ul>
	</li>
	<li>
		<?php echo CHtml::link(CHtml::encode(Yii::t('sistema','Categorias')), array('categoria/index')); ?>
		<ul>
			<li>>> <?php echo CHtml::link(CHtml::encode(Yii::t('sistema','Nova')), array('categoria/create')); ?></li>
			<li>>> <?php echo CHtml::link(CHtml::encode(Yii::t('sistema','Listar')), array('categoria/admin')); ?></li>
		</ul>
	</li>
	<li>
		<?php echo CHtml::link(CHtml::encode(Yii::t('sistema','Usuários')), array('usuario/index')); ?>
		<ul>
			<li>>> <?php echo CHtml::link(CHtml::encode(Yii::t('sistema','Novo')), array('usuario/create')); ?></li>
			<li>>> <?php echo CHtml::link(CHtml::encode(Yii::t('sistema','Listar')), array('usuario/admin')); ?></li>
		</ul>
	</li>
</ul>