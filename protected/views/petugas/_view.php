<?php
/* @var $this PetugasController */
/* @var $data Petugas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_petugas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_petugas), array('view', 'id'=>$data->id_petugas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_petugas')); ?>:</b>
	<?php echo CHtml::encode($data->nama_petugas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_petugas')); ?>:</b>
	<?php echo CHtml::encode($data->alamat_petugas); ?>
	<br />


</div>