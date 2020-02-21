<?php
/* @var $this RawatInapController */
/* @var $data RawatInap */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rawatinap')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_rawatinap), array('view', 'id'=>$data->id_rawatinap)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruang_id')); ?>:</b>
	<?php echo CHtml::encode($data->ruang_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pasien_id')); ?>:</b>
	<?php echo CHtml::encode($data->pasien_id); ?>
	<br />


</div>