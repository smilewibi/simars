<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */

$this->breadcrumbs=array(
	'Pembayarans'=>array('index'),
	$model->id_pembayaran,
);

$this->menu=array(
	array('label'=>'List Pembayaran', 'url'=>array('index')),
	array('label'=>'Create Pembayaran', 'url'=>array('create')),
	array('label'=>'Update Pembayaran', 'url'=>array('update', 'id'=>$model->id_pembayaran)),
	array('label'=>'Delete Pembayaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pembayaran),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pembayaran', 'url'=>array('admin')),
);
?>
<div class="diagnosa-view panel panel-info">
    <div class="panel-heading">
        <h4>
            Detail Data Pembayaran
            <span class="pull-right">
				<a class="btn btn-success btn-sm" href="index.php?r=pembayaran/admin">Lihat Semua</a>
            </span>
        </h4>
	</div>
	<div class="panel-body">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id_pembayaran',
				'petugas_id',
				'pasien_id',
				'jumlah_harga',
			),
		)); ?>
	</div>
</div>