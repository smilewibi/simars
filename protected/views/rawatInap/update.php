<?php
/* @var $this RawatInapController */
/* @var $model RawatInap */

$this->breadcrumbs=array(
	'Rawat Inaps'=>array('index'),
	$model->id_rawatinap=>array('view','id'=>$model->id_rawatinap),
	'Update',
);

$this->menu=array(
	array('label'=>'List RawatInap', 'url'=>array('index')),
	array('label'=>'Create RawatInap', 'url'=>array('create')),
	array('label'=>'View RawatInap', 'url'=>array('view', 'id'=>$model->id_rawatinap)),
	array('label'=>'Manage RawatInap', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>