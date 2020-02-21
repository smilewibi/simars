<?php
/* @var $this DokterController */
/* @var $model Dokter */

$this->breadcrumbs=array(
	'Dokters'=>array('index'),
	$model->id_dokter,
);

$this->menu=array(
	array('label'=>'List Dokter', 'url'=>array('index')),
	array('label'=>'Create Dokter', 'url'=>array('create')),
	array('label'=>'Update Dokter', 'url'=>array('update', 'id'=>$model->id_dokter)),
	array('label'=>'Delete Dokter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_dokter),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dokter', 'url'=>array('admin')),
);
?>
<div class="diagnosa-view panel panel-info">
    <div class="panel-heading">
        <h4>
            Detail Data Dokter
            <span class="pull-right">
				<a class="btn btn-success btn-sm" href="index.php?r=dokter/admin">Lihat Semua</a>
            </span>
        </h4>
	</div>
	<div class="panel-body">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id_dokter',
				'nama_dokter',
				'alamat_dokter',
				'spesialisasi',
			),
		)); ?>
	</div>


