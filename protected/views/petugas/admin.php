<?php
/* @var $this PetugasController */
/* @var $model Petugas */

$this->breadcrumbs=array(
	'Petugases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Petugas', 'url'=>array('index')),
	array('label'=>'Create Petugas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#petugas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="aturan-index panel panel-info">
	<div class="panel-heading">
        <h4>
			Manajemen Petugas
			<span class="pull-right">
				<a class="btn btn-success btn-sm waves-effect waves-light" href="index.php?r=petugas/create">Data Baru</a>
			</span>
        </h4>
	</div>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'petugas-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				//'id_petugas',
				'nama_petugas',
				'alamat_petugas',
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>
</div>
