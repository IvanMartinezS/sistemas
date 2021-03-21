<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nb_Producto'); ?>
		<?php echo $form->textField($model,'Nb_Producto',array('size'=>60,'maxlength'=>2500)); ?>
		<?php echo $form->error($model,'Nb_Producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'St_Activo'); ?>
		<?php echo $form->textField($model,'St_Activo'); ?>
		<?php echo $form->error($model,'St_Activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Co_Auditoria'); ?>
		<?php echo $form->textField($model,'Co_Auditoria',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Co_Auditoria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->