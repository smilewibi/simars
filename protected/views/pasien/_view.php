<?php
/* @var $this PasienController */
/* @var $data Pasien */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pasien')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pasien), array('view', 'id'=>$data->id_pasien)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_telepon')); ?>:</b>
	<?php echo CHtml::encode($data->no_telepon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_datang')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_datang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keluhan')); ?>:</b>
	<?php echo CHtml::encode($data->keluhan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dokter_id')); ?>:</b>
	<?php echo CHtml::encode($data->dokter_id); ?>
	<br />


</div>