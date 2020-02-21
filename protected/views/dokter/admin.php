<?php
/* @var $this DokterController */
/* @var $model Dokter */

$this->breadcrumbs=array(
	'Dokter'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Dokter', 'url'=>array('index')),
	array('label'=>'Create Dokter', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dokter-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="aturan-index panel panel-info">
	<div class="panel-heading">
        <h4>
			Manajemen Dokter
			<span class="pull-right">
				<a class="btn btn-success btn-sm waves-effect waves-light" href="index.php?r=dokter/create">Data Baru</a>
			</span>
        </h4>
    </div>
	
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'dokter-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			//'id_dokter',
			'nama_dokter',
			'alamat_dokter',
			'spesialisasi',
			array(
				'class'=>'CButtonColumn',
			),
		),
	)); ?>
</div>
