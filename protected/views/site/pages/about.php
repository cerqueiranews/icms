<?php
$this->pageTitle=Yii::app()->name . ' - '.Yii::t('sistema','Sobre');
$this->breadcrumbs=array(
	Yii::t('sistema','Sobre'),
);
?>
<h1><?php echo Yii::t('sistema','Sobre') ?></h1>

<p>
	<?php echo Yii::t('sistema','Sistema para gerenciamento de conteúdo da página inicial do {cliente}. Desenvolvido por {desenvolvedor}.',array('{cliente}'=>Yii::app()->params['cliente'], '{desenvolvedor}'=>Yii::app()->params['desenvolvedor'])) ?>
</p>
<p>
	<?php echo Yii::t('sistema','Contato') ?><br/><br/>
	<strong>Diego Muniz Cerqueira</strong><br/>
	Skype: cerqueiranews<br/>
	MSN: cerqueiranews@hotmail.com<br/>
	Gtalk: cerqueiranews@gmail.com<br/>
	Cel: [21] 7101 6062<br/><br/>
	<strong>Zellig</strong><br/>
	Site: www.zellig.com.br <br/>
	Email: contato@zellig.com.br <br/>
	Tel: [21] 2244 1250<br/>
</p>