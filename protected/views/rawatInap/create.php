<?php
/* @var $this RawatInapController */
/* @var $model RawatInap */

$this->breadcrumbs=array(
	'Rawat Inaps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RawatInap', 'url'=>array('index')),
	array('label'=>'Manage RawatInap', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>