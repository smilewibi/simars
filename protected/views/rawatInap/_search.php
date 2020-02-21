<?php
/* @var $this RawatInapController */
/* @var $model RawatInap */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_rawatinap'); ?>
		<?php echo $form->textField($model,'id_rawatinap'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruang_id'); ?>
		<?php echo $form->textField($model,'ruang_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pasien_id'); ?>
		<?php echo $form->textField($model,'pasien_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->