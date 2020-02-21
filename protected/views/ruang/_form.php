<?php
/* @var $this RuangController */
/* @var $model Ruang */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ruang-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="panel panel-info">
	<div class="panel-heading">
		<h4>
			Tambah Ruang
			<span class="pull-right">
				<a class="btn btn-danger btn-sm waves-effect waves-light" href="index.php?r=ruang/admin">Kembali</a>
			</span>
		</h4>
	</div>
	<div class="panel-body">

		<p class="note">Fields with <span class="required">*</span> are required.</p>

		<?php echo $form->errorSummary($model); ?>

		<div class="form-group">
			<?php echo $form->labelEx($model,'nama_ruang', ['class' => 'col-sm-2 control-label']); ?>
			<?php echo $form->textField($model,'nama_ruang',array('size'=>60,'maxlength'=>255), ['class' => 'form-control']); ?>
			<?php echo $form->error($model,'nama_ruang'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model,'nama_gedung', ['class' => 'col-sm-2 control-label']); ?>
			<?php echo $form->textField($model,'nama_gedung',array('size'=>60,'maxlength'=>255), ['class' => 'form-control']); ?>
			<?php echo $form->error($model,'nama_gedung'); ?>
		</div>

		<div class="box-footer">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save', ['class' => 'btn btn-success waves-effect waves-light']); ?>
		</div>

		<?php $this->endWidget(); ?>
	</div>
</div><!-- form -->