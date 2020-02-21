<?php
/* @var $this RawatInapController */
/* @var $model RawatInap */

$this->breadcrumbs=array(
	'Rawat Inaps'=>array('index'),
	$model->id_rawatinap,
);

$this->menu=array(
	array('label'=>'List RawatInap', 'url'=>array('index')),
	array('label'=>'Create RawatInap', 'url'=>array('create')),
	array('label'=>'Update RawatInap', 'url'=>array('update', 'id'=>$model->id_rawatinap)),
	array('label'=>'Delete RawatInap', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_rawatinap),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RawatInap', 'url'=>array('admin')),
);
?>
<div class="diagnosa-view panel panel-info">
    <div class="panel-heading">
        <h4>
            Detail Data Rawat Inap
            <span class="pull-right">
				<a class="btn btn-success btn-sm" href="index.php?r=rawatinap/admin">Lihat Semua</a>
            </span>
        </h4>
	</div>
	<div class="panel-body">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id_rawatinap',
				'ruang_id',
				'pasien_id',
			),
		)); ?>
	</div>
</div>


