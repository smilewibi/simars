<?php
/* @var $this RuangController */
/* @var $data Ruang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ruang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ruang), array('view', 'id'=>$data->id_ruang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_ruang')); ?>:</b>
	<?php echo CHtml::encode($data->nama_ruang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_gedung')); ?>:</b>
	<?php echo CHtml::encode($data->nama_gedung); ?>
	<br />


</div>