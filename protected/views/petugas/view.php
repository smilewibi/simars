<?php
/* @var $this PetugasController */
/* @var $model Petugas */

$this->breadcrumbs=array(
	'Petugases'=>array('index'),
	$model->id_petugas,
);

$this->menu=array(
	array('label'=>'List Petugas', 'url'=>array('index')),
	array('label'=>'Create Petugas', 'url'=>array('create')),
	array('label'=>'Update Petugas', 'url'=>array('update', 'id'=>$model->id_petugas)),
	array('label'=>'Delete Petugas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_petugas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Petugas', 'url'=>array('admin')),
);
?>
<div class="diagnosa-view panel panel-info">
    <div class="panel-heading">
        <h4>
            Detail Data Petugas
            <span class="pull-right">
				<a class="btn btn-success btn-sm" href="index.php?r=petugas/admin">Lihat Semua</a>
            </span>
        </h4>
	</div>
	<div class="panel-body">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id_petugas',
				'nama_petugas',
				'alamat_petugas',
			),
		)); ?>
	</div>
</div>


