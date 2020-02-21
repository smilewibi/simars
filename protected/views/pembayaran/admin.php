<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */

$this->breadcrumbs=array(
	'Pembayarans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Pembayaran', 'url'=>array('index')),
	array('label'=>'Create Pembayaran', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pembayaran-grid').yiiGridView('update', {
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
				<a class="btn btn-success btn-sm waves-effect waves-light" href="index.php?r=pembayaran/create">Data Baru</a>
			</span>
        </h4>
	</div>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'pembayaran-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			'id_pembayaran',
			'petugas_id',
			'pasien_id',
			'jumlah_harga',
			array(
				'class'=>'CButtonColumn',
			),
		),
	)); ?>
</div>