<?php
/* @var $this RawatInapController */
/* @var $model RawatInap */

$this->breadcrumbs=array(
	'Rawat Inaps'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RawatInap', 'url'=>array('index')),
	array('label'=>'Create RawatInap', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rawat-inap-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="aturan-index panel panel-info">
	<div class="panel-heading">
        <h4>
			Manajemen Rawat Inap
			<span class="pull-right">
				<a class="btn btn-success btn-sm waves-effect waves-light" href="index.php?r=rawatinap/create">Data Baru</a>
			</span>
        </h4>
	</div>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'rawat-inap-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				//'id_rawatinap',
				'ruang_id',
				'pasien_id',
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>
</div>

