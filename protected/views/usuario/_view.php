<div class="view">

	<!--
	<b>
	<?php //echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php //echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login')); ?>:</b>
	<?php echo CHtml::encode($data->login); ?>
	<br />

	<!--
	<b>
	<?php //echo CHtml::encode($data->getAttributeLabel('senha')); ?>:</b>
	<?php //echo CHtml::encode($data->senha); ?>
	<br />
	-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->tipo->nome); ?>
	<br />


</div>