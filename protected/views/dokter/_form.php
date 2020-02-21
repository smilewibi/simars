<?php
/* @var $this DokterController */
/* @var $model Dokter */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dokter-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="panel panel-info">
	<div class="panel-heading">
		<h4>
			Tambah Data Dokter
			<span class="pull-right">
				<a class="btn btn-danger btn-sm waves-effect waves-light" href="index.php?r=dokter/admin">Kembali</a>
			</span>
		</h4>
	</div>
	<div class="panel-body">
		<p class="note">Fields with <span class="required">*</span> are required.</p>

		<?php echo $form->errorSummary($model); ?>

		<div class="form-group">
			<?php echo $form->labelEx($model,'nama_dokter', ['class' => 'col-sm-2 control-label']); ?>
			<?php echo $form->textField($model,'nama_dokter',array('size'=>60,'maxlength'=>255), ['class' => 'form-control']); ?>
			<?php echo $form->error($model,'nama_dokter'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model,'alamat_dokter', ['class' => 'col-sm-2 control-label']); ?>
			<?php echo $form->textArea($model,'alamat_dokter',array('rows'=>6, 'cols'=>50), ['class' => 'form-control']); ?>
			<?php echo $form->error($model,'alamat_dokter'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model,'spesialisasi', ['class' => 'col-sm-2 control-label']); ?>
			<?php echo $form->textField($model,'spesialisasi',array('size'=>60,'maxlength'=>255), ['class' => 'form-control']); ?>
			<?php echo $form->error($model,'spesialisasi'); ?>
		</div>

		<div class="box-footer">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save', ['class' => 'btn btn-success waves-effect waves-light']); ?>
		</div>

		<?php $this->endWidget(); ?>
	</div>
</div>