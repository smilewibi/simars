<?php
/* @var $this RuangController */
/* @var $model Ruang */

$this->breadcrumbs=array(
	'Ruangs'=>array('index'),
	$model->id_ruang,
);

$this->menu=array(
	array('label'=>'List Ruang', 'url'=>array('index')),
	array('label'=>'Create Ruang', 'url'=>array('create')),
	array('label'=>'Update Ruang', 'url'=>array('update', 'id'=>$model->id_ruang)),
	array('label'=>'Delete Ruang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ruang),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ruang', 'url'=>array('admin')),
);
?>
<div class="diagnosa-view panel panel-info">
    <div class="panel-heading">
        <h4>
            Detail Data Ruang
            <span class="pull-right">
				<a class="btn btn-success btn-sm" href="index.php?r=ruang/admin">Lihat Semua</a>
            </span>
        </h4>
	</div>
	<div class="panel-body">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id_ruang',
				'nama_ruang',
				'nama_gedung',
			),
		)); ?>
	</div>
</div>