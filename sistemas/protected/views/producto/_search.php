<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Co_Producto'); ?>
		<?php echo $form->textField($model,'Co_Producto',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nb_Producto'); ?>
		<?php echo $form->textField($model,'Nb_Producto',array('size'=>60,'maxlength'=>2500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'St_Activo'); ?>
		<?php echo $form->textField($model,'St_Activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Co_Auditoria'); ?>
		<?php echo $form->textField($model,'Co_Auditoria',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->