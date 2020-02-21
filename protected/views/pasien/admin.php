<?php
/* @var $this PasienController */
/* @var $model Pasien */

$this->breadcrumbs=array(
	'Pasiens'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Pasien', 'url'=>array('index')),
	array('label'=>'Create Pasien', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pasien-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="aturan-index panel panel-info">
	<div class="panel-heading">
        <h4>
			Manajemen Pasien
			<span class="pull-right">
				<a class="btn btn-success btn-sm waves-effect waves-light" href="index.php?r=pasien/create">Data Baru</a>
			</span>
        </h4>
	</div>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'pasien-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			//'id_pasien',
			'nama_pasien',
			'no_telepon',
			'alamat',
			'tgl_datang',
			'keluhan',
			/*
			'dokter_id',
			*/
			array(
				'class'=>'CButtonColumn',
			),
		),
	)); ?>
</div>

