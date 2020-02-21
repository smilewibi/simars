<?php
/* @var $this RawatInapController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rawat Inaps',
);

$this->menu=array(
	array('label'=>'Create RawatInap', 'url'=>array('create')),
	array('label'=>'Manage RawatInap', 'url'=>array('admin')),
);
?>

<h1>Rawat Inaps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
