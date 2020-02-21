<?php
/* @var $this PasienController */
/* @var $model Pasien */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pasien-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="panel panel-info">
	<div class="panel-heading">
		<h4>
			Tambah Data Pasien
			<span class="pull-right">
				<a class="btn btn-danger btn-sm waves-effect waves-light" href="index.php?r=pasien/admin">Kembali</a>
			</span>
		</h4>
	</div>
	<div class="panel-body">
		<p class="note">Fields with <span class="required">*</span> are required.</p>

		<?php echo $form->errorSummary($model); ?>

		<div class="form-group">
			<?php echo $form->labelEx($model,'nama_pasien', ['class' => 'col-sm-2 control-label']); ?>
			<?php echo $form->textField($model,'nama_pasien',array('size'=>60,'maxlength'=>255), ['class' => 'form-control']); ?>
			<?php echo $form->error($model,'nama_pasien'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model,'no_telepon', ['class' => 'col-sm-2 control-label']); ?>
			<?php echo $form->textField($model,'no_telepon',array('size'=>60,'maxlength'=>255), ['class' => 'form-control']); ?>
			<?php echo $form->error($model,'no_telepon'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model,'alamat', ['class' => 'col-sm-2 control-label']); ?>
			<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50), ['class' => 'form-control']); ?>
			<?php echo $form->error($model,'alamat'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model,'tgl_datang', ['class' => 'col-sm-2 control-label']); ?>
			<?php echo $form->textField($model,'tgl_datang',array('size'=>60,'maxlength'=>255), ['class' => 'form-control']); ?>
			<?php echo $form->error($model,'tgl_datang'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model,'keluhan', ['class' => 'col-sm-2 control-label']); ?>
			<?php echo $form->textArea($model,'keluhan',array('rows'=>6, 'cols'=>50), ['class' => 'form-control']); ?>
			<?php echo $form->error($model,'keluhan'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model,'dokter_id', ['class' => 'col-sm-2 control-label']); ?>
			<?php echo $form->textField($model,'dokter_id',array('size'=>60,'maxlength'=>255), ['class' => 'form-control']); ?>
			<?php echo $form->error($model,'dokter_id'); ?>
		</div>

		<div class="box-footer">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save', ['class' => 'btn btn-success waves-effect waves-light']); ?>
		</div>

		<?php $this->endWidget(); ?>
	</div>
</div>
