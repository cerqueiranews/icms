<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'materia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('sistema','Campos com');?> <span class="required">*</span> <?php echo Yii::t('sistema','são requeridos');?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtitulo'); ?>
		<?php echo $form->textField($model,'subtitulo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'subtitulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'id_categoria'); ?>
		<?php echo $form->dropDownList($model, 'id_categoria', $categorias); ?>
		<?php echo $form->error($model,'id_categoria'); ?>
	</div>
	
	<div class="row">
	<?php echo $form->labelEx($model,'data'); ?>
		<?php
			Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
			$this->widget('CJuiDateTimePicker',
				array(
					'model'=> $model,
					'mode' => 'datetime',
					'attribute'=>'data',
					'id'=>'Materia_data',
					'name'=>'Materia[data]',
					'language'=>'pt-BR',
					'options' => array(
						'duration'=>'fast',
						'showAnim' =>'slide',
						'timeOnlyTitle' => Yii::t('sistema','Escolha Hora'),
						'dateFormat' => 'yy-mm-dd',
						'timeFormat' => 'hh:mm:ss tt',
					    'timeText' => Yii::t('sistema','Horário'),
					    'hourText' => Yii::t('sistema','Hora'),
					    'minuteText' => Yii::t('sistema','Minuto'),
					    'secondText' => Yii::t('sistema','Segundo'),
					    'millisecText' => Yii::t('sistema','Milisegundo'),
					    'currentText' => Yii::t('sistema','Agora'),
					    'closeText' => Yii::t('sistema','Aplicar'),
						'timezoneText' => Yii::t('sistema','Fuso Horário'),
					),
				)
			);    
		?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php echo $form->textArea($model,'texto',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'texto'); ?>
	
	
	<?php
			require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'../../../plugins/ckeditor/ckeditor.php';
			require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'../../../plugins/ckfinder/ckfinder.php';
			Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/plugins/ckeditor/ckeditor.js',CClientScript::POS_HEAD);
			$ckeditor = new CKEditor();
			$ckeditor->basePath = dirname(__FILE__).DIRECTORY_SEPARATOR.'../../../plugins/ckeditor/';
			CKFinder::SetupCKEditor($ckeditor, '/icms/plugins/ckfinder/');
			$ckeditor->editor('Materia[texto]');
			
			echo $form->hiddenField($model,'id_usuario', array('value'=>Yii::app()->user->id));
	?>
	</div>
<!--
	<div class="row">
		<?php // echo $form->labelEx($model,'id_usuario'); ?>
		<?php // echo $form->textField($model,'id_usuario'); ?>
		<?php // echo $form->error($model,'id_usuario'); ?>
	</div>
-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->