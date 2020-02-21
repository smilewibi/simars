<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pembayaran-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="panel panel-info">
	<div class="panel-heading">
		<h4>
			Tambah Data Pembayaran
			<span class="pull-right">
				<a class="btn btn-danger btn-sm waves-effect waves-light" href="index.php?r=pembayaran/admin">Kembali</a>
			</span>
		</h4>
	</div>
	<div class="panel-body">
		<p class="note">Fields with <span class="required">*</span> are required.</p>

		<?php echo $form->errorSummary($model); ?>

		<div class="form-group">
			<?php echo $form->labelEx($model,'petugas_id', ['class' => 'col-sm-2 control-label']); ?>
			<?php echo $form->textField($model,'petugas_id',array('size'=>60,'maxlength'=>255), ['class' => 'form-control']); ?>
			<?php echo $form->error($model,'petugas_id'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model,'pasien_id', ['class' => 'col-sm-2 control-label']); ?>
			<?php echo $form->textField($model,'pasien_id',array('size'=>60,'maxlength'=>255), ['class' => 'form-control']); ?>
			<?php echo $form->error($model,'pasien_id'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model,'jumlah_harga', ['class' => 'col-sm-2 control-label']); ?>
			<?php echo $form->textField($model,'jumlah_harga',array('size'=>60,'maxlength'=>255), ['class' => 'form-control']); ?>
			<?php echo $form->error($model,'jumlah_harga'); ?>
		</div>

		<div class="box-footer">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save', ['class' => 'btn btn-success waves-effect waves-light']); ?>
		</div>

		<?php $this->endWidget(); ?>
	</div>
</div>
