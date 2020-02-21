<?php
/* @var $this PasienController */
/* @var $model Pasien */

$this->breadcrumbs=array(
	'Pasiens'=>array('index'),
	$model->id_pasien,
);

$this->menu=array(
	array('label'=>'List Pasien', 'url'=>array('index')),
	array('label'=>'Create Pasien', 'url'=>array('create')),
	array('label'=>'Update Pasien', 'url'=>array('update', 'id'=>$model->id_pasien)),
	array('label'=>'Delete Pasien', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pasien),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pasien', 'url'=>array('admin')),
);
?>
<div class="diagnosa-view panel panel-info">
    <div class="panel-heading">
        <h4>
            Detail Data Pasien
            <span class="pull-right">
				<a class="btn btn-success btn-sm" href="index.php?r=pasien/admin">Lihat Semua</a>
            </span>
        </h4>
	</div>
	<div class="panel-body">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id_pasien',
				'nama_pasien',
				'no_telepon',
				'alamat',
				'tgl_datang',
				'keluhan',
				'dokter.nama_dokter',
			),
		)); ?>
	</div>
</div>



