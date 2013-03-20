<?php
/* @var $this Cv2VeiculosVeiculosController */
/* @var $model Cv2VeiculosVeiculos */

$this->breadcrumbs=array(
	'Cv2 Veiculos Veiculoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cv2VeiculosVeiculos', 'url'=>array('index')),
	array('label'=>'Create Cv2VeiculosVeiculos', 'url'=>array('create')),
	array('label'=>'Update Cv2VeiculosVeiculos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cv2VeiculosVeiculos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cv2VeiculosVeiculos', 'url'=>array('admin')),
);
?>

<h1>View Cv2VeiculosVeiculos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descricao',
		'visualizacoes',
		'foto_1',
		'foto_2',
		'foto_3',
		'foto_4',
		'foto_5',
		'foto_6',
		'valor',
		'valor_promocional',
		'observacoes',
		'data_cadastro',
		'ano',
		'unico_dono',
		'id_vendedor',
		'id_marca',
		'id_tipo',
		'id_localizacao',
		'status',
	),
)); ?>
