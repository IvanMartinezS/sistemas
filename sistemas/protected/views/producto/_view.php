<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Co_Producto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Co_Producto), array('view', 'id'=>$data->Co_Producto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nb_Producto')); ?>:</b>
	<?php echo CHtml::encode($data->Nb_Producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('St_Activo')); ?>:</b>
	<?php echo CHtml::encode($data->St_Activo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Co_Auditoria')); ?>:</b>
	<?php echo CHtml::encode($data->Co_Auditoria); ?>
	<br />


</div>