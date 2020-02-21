<?php
/* @var $this RuangController */
/* @var $model Ruang */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ruang'); ?>
		<?php echo $form->textField($model,'id_ruang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_ruang'); ?>
		<?php echo $form->textField($model,'nama_ruang',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_gedung'); ?>
		<?php echo $form->textField($model,'nama_gedung',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->