<?php
/* @var $this RuangController */
/* @var $model Ruang */

$this->breadcrumbs=array(
	'Ruangs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Ruang', 'url'=>array('index')),
	array('label'=>'Create Ruang', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ruang-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="aturan-index panel panel-info">
	<div class="panel-heading">
        <h4>
			Manajemen Ruang
			<span class="pull-right">
				<a class="btn btn-success btn-sm waves-effect waves-light" href="index.php?r=ruang/create">Data Baru</a>
			</span>
        </h4>
	</div>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'ruang-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			//'id_ruang',
			'nama_ruang',
			'nama_gedung',
			array(
				'class'=>'CButtonColumn',
			),
		),
	)); ?>
</div>

