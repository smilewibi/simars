<?php
/* @var $this RuangController */
/* @var $model Ruang */

$this->breadcrumbs=array(
	'Ruangs'=>array('index'),
	$model->id_ruang=>array('view','id'=>$model->id_ruang),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ruang', 'url'=>array('index')),
	array('label'=>'Create Ruang', 'url'=>array('create')),
	array('label'=>'View Ruang', 'url'=>array('view', 'id'=>$model->id_ruang)),
	array('label'=>'Manage Ruang', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>